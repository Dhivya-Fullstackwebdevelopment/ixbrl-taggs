<?php
/**
 * send-enquiry.php
 * Handles the hero-banner and CTA enquiry forms (form_type = form1 / form2)
 * shared across the Finland, Denmark and Switzerland pages (region field).
 * 1. Validates input
 * 2. Saves the enquiry to MySQL
 * 3. Emails the XBRtags team
 * 4. Sends an auto-reply to the person who submitted the form
 *
 * IMPORTANT: fill in the CONFIG block below with your real DB and SES/SMTP
 * credentials before going live. Nothing here will work with the placeholder
 * values.
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

header('Content-Type: application/json');

// =====================================================
// 🔹 CONFIG — fill these in for your environment
// =====================================================
$DEBUG_MODE = true;

// --- Database (MySQL) ---
$DB_HOST = 'localhost';
$DB_NAME = 'xbrtags_db';
$DB_USER = 'root';
$DB_PASS = '';

// --- SMTP (Amazon SES) ---
$SMTP_HOST = 'email-smtp.ap-southeast-1.amazonaws.com';
$SMTP_USER = 'AKIAQDXL4VYEWGR56RPC';
$SMTP_PASS = 'BHqiAjZTxYfIwtqGzLoiNBrFBradVCB2i7H+JbNctC8k';
$SMTP_PORT = 587;

// --- Mail addresses ---
$FROM_EMAIL = 'info@xberratagger.com.sg';
$FROM_NAME  = 'XBRtags Finland';
$TO_EMAIL   = 'sarjun@psdigitise.com';   // <-- where new enquiries land
$TO_NAME    = 'XBRtags Team';

// Used if a page forgets to send a region (or for this Finland deployment
// specifically, if you don't want to rely on the hidden field at all).
$DEFAULT_REGION = 'Finland';

// =====================================================
// 🔹 Collect & validate input
// =====================================================
function clean_input($v) {
    return trim($v ?? '');
}

$name       = clean_input($_POST['name'] ?? '');
$company    = clean_input($_POST['company'] ?? '');
$email      = clean_input($_POST['email'] ?? '');
$phone      = clean_input($_POST['phone'] ?? '');
$filingType = clean_input($_POST['filingType'] ?? '');
$message    = clean_input($_POST['message'] ?? '');
$formType   = clean_input($_POST['form_type'] ?? 'unknown'); // form1 = hero, form2 = CTA
$region     = clean_input($_POST['region'] ?? '') ?: $DEFAULT_REGION; // Finland / Denmark / Switzerland

$errors = [];
if ($name === '')    $errors[] = 'Full name is required.';
if ($company === '') $errors[] = 'Company is required.';
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'A valid email is required.';
if ($filingType === '') $errors[] = 'Please select a filing type.';

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode(['status' => 'error', 'msg' => implode(' ', $errors)]);
    exit;
}

// =====================================================
// 🔹 1. Save to database
// =====================================================
try {
    $pdo = new PDO(
        "mysql:host={$DB_HOST};dbname={$DB_NAME};charset=utf8mb4",
        $DB_USER,
        $DB_PASS,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    $pdo->exec("CREATE TABLE IF NOT EXISTS enquiries (
        id INT AUTO_INCREMENT PRIMARY KEY,
        form_type VARCHAR(20) NOT NULL,
        region VARCHAR(50) NOT NULL DEFAULT 'Finland',
        name VARCHAR(150) NOT NULL,
        company VARCHAR(150) NOT NULL,
        email VARCHAR(150) NOT NULL,
        phone VARCHAR(50) NULL,
        filing_type VARCHAR(50) NOT NULL,
        message TEXT NULL,
        ip_address VARCHAR(45) NULL,
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");

    // Safe to run on every request: adds the `region` column to a table
    // that already existed before this change, without touching your data.
    // If the column is already there, MySQL throws "Duplicate column" (1060)
    // which we simply ignore.
    try {
        $pdo->exec("ALTER TABLE enquiries ADD COLUMN region VARCHAR(50) NOT NULL DEFAULT 'Finland' AFTER form_type");
    } catch (PDOException $alterEx) {
        if ($alterEx->errorInfo[1] !== 1060) { // 1060 = Duplicate column name
            throw $alterEx;
        }
    }

    $stmt = $pdo->prepare("INSERT INTO enquiries
        (form_type, region, name, company, email, phone, filing_type, message, ip_address)
        VALUES (:form_type, :region, :name, :company, :email, :phone, :filing_type, :message, :ip)");

    $stmt->execute([
        ':form_type'   => $formType,
        ':region'      => $region,
        ':name'        => $name,
        ':company'     => $company,
        ':email'       => $email,
        ':phone'       => $phone,
        ':filing_type' => $filingType,
        ':message'     => $message,
        ':ip'          => $_SERVER['REMOTE_ADDR'] ?? null,
    ]);

} catch (PDOException $e) {
    http_response_code(500);
    $userMsg = 'Could not save your enquiry right now. Please try again shortly.';
    echo json_encode([
        'status' => 'error',
        'msg'    => $DEBUG_MODE ? ('DB error: ' . $e->getMessage()) : $userMsg,
    ]);
    error_log('XBRtags DB error: ' . $e->getMessage());
    exit;
}

// =====================================================
// 🔹 2. Notify the XBRtags team
// =====================================================
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = $SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = $SMTP_USER;
    $mail->Password   = $SMTP_PASS;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = $SMTP_PORT;

    $mail->setFrom($FROM_EMAIL, $FROM_NAME);
    $mail->addAddress($TO_EMAIL, $TO_NAME);
    $mail->addReplyTo($email, $name); // hit "reply" to go straight to the enquirer

    $mail->isHTML(true);
    $mail->Subject = "New Enquiry - XBRtags {$region}";

    $mail->Body = '
<div style="margin:0; padding:0; background:#f4f6f8; font-family:Arial, sans-serif;">
    <div style="max-width:650px; margin:30px auto; background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 2px 6px rgba(0,0,0,0.08);">
        <div style="background:#1f2853; color:#ffffff; padding:16px 20px;">
            <h2 style="margin:0; text-align:center; font-size:20px;">New Enquiry ' . htmlspecialchars($region) . '</h2>
        </div>  
        <div style="padding:20px; color:#333; line-height:1.6;">
            <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse; margin-top:5px;">
                <tr><td style="padding:10px; border-bottom:1px solid #eee; width:35%;"><strong>Region</strong></td><td style="padding:10px; border-bottom:1px solid #eee;">' . htmlspecialchars($region) . '</td></tr>
                <tr><td style="padding:10px; border-bottom:1px solid #eee;"><strong>Name</strong></td><td style="padding:10px; border-bottom:1px solid #eee;">' . htmlspecialchars($name) . '</td></tr>
                <tr><td style="padding:10px; border-bottom:1px solid #eee;"><strong>Company</strong></td><td style="padding:10px; border-bottom:1px solid #eee;">' . htmlspecialchars($company) . '</td></tr>
                <tr><td style="padding:10px; border-bottom:1px solid #eee;"><strong>Email</strong></td><td style="padding:10px; border-bottom:1px solid #eee;">' . htmlspecialchars($email) . '</td></tr>
                <tr><td style="padding:10px; border-bottom:1px solid #eee;"><strong>Phone</strong></td><td style="padding:10px; border-bottom:1px solid #eee;">' . htmlspecialchars($phone) . '</td></tr>
                <tr><td style="padding:10px; border-bottom:1px solid #eee;"><strong>Filing Type</strong></td><td style="padding:10px; border-bottom:1px solid #eee;">' . htmlspecialchars($filingType) . '</td></tr>
                <tr><td style="padding:10px; vertical-align:top;"><strong>Message</strong></td><td style="padding:10px;">' . nl2br(htmlspecialchars($message)) . '</td></tr>
            </table>
        </div>
        <div style="background:#f4f6f8; padding:15px; text-align:center; font-size:12px; color:#777;">
            Saved to the enquiries database. Reply to this email to respond directly to ' . htmlspecialchars($name) . '.
        </div>
    </div>
</div>';

    $mail->send();

    // =====================================================
    // 🔹 3. Auto-reply to the enquirer
    // =====================================================
    $reply = new PHPMailer(true);
    $reply->isSMTP();
    $reply->Host       = $SMTP_HOST;
    $reply->SMTPAuth   = true;
    $reply->Username   = $SMTP_USER;
    $reply->Password   = $SMTP_PASS;
    $reply->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $reply->Port       = $SMTP_PORT;

    $reply->setFrom($FROM_EMAIL, $FROM_NAME);
    $reply->addAddress($email, $name);

    $reply->isHTML(true);
    $reply->Subject = "We received your request XBRtags";

    $reply->Body = '
<div style="margin:0; padding:0; background:#f4f6f8; font-family:Arial, sans-serif;">
    <div style="max-width:600px; margin:30px auto; background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 2px 6px rgba(0,0,0,0.08);">
        <div style="background:#1f2853; color:#ffffff; padding:16px 20px; text-align:center;">
            <h2 style="margin:0; font-size:20px;">XBRtags</h2>
        </div>
        <div style="padding:25px; color:#333; line-height:1.6;">
            <p style="margin-top:0;">Hi ' . htmlspecialchars($name) . ',</p>
            <p>Thank you for contacting <strong>XBRtags</strong>.</p>
            <p>We have received your request regarding <strong>' . htmlspecialchars($filingType) . '</strong>.</p>
            <p>Our team will get back to you within <strong style="color:#1f2853;">60 minutes</strong> during business hours (Mon–Fri, 08:00–20:00 EET).</p>
            <br>
            <p style="margin-bottom:0;">Regards,<br><strong>XBRtags Team</strong></p>
        </div>
        <div style="background:#f4f6f8; padding:15px; text-align:center; font-size:12px; color:#777;">
            This is an automated response. Please do not reply to this email — write to hello@xbrtags.com instead.
        </div>
    </div>
</div>';

    $reply->send();

    echo json_encode(['status' => 'success']);

} catch (Exception $e) {
    // The enquiry is already safely stored in the database even if the
    // email fails, so we still tell the visitor it worked but log the
    // mail problem for follow-up.
    error_log('XBRtags mail error: ' . $mail->ErrorInfo);
    $response = ['status' => 'success', 'mail_warning' => true];
    if ($DEBUG_MODE) {
        $response['mail_error'] = $mail->ErrorInfo;
    }
    echo json_encode($response);
}
