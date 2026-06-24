<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">


    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_meta; ?>">
    <meta name="keywords" content="<?php echo $page_keywords; ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">

    <meta property="og:title" content="<?php echo $og_title; ?>">
    <meta property="og:description" content="<?php echo $og_desc; ?>">
    <meta property="og:type" content="<?php echo $og_type; ?>">
    <meta property="og:url" content="<?php echo $og_url; ?>">

  <link rel="stylesheet" href="./assets/css/style.css">

  <script type="application/ld+json">
        <?php echo $schema; ?>
    </script>
  
</head>
<body>
<div class="wrap">

  <!-- ═══ TOPBAR ═══ -->
  <div class="topbar">
    <div class="tb-l">
      <span class="tb-accent">HMRC Recognised</span>
      <div class="tb-sep"></div>
      <span class="tb-t">Mon–Fri &nbsp;08:00–20:00</span>
      <div class="tb-sep"></div>
      <span class="tb-t">1234 567 8910</span>
    </div>
    <div class="tb-r">
      <span class="tb-a"><a class="tb-link" href="./finland">Finland</a> </span>
      <div class="tb-sep"></div>
      <span class="tb-a"><a class="tb-link" href="./denmark">Denmark</a></span>
      <div class="tb-sep"></div>
      <!-- <div class="tb-sep"></div> -->
      <!-- <span class="tb-a">Singapore</span> -->
      <span class="tb-a"><a class="tb-link" href="./switzerland">Switzerland</a></span>
    </div>
  </div>

  <!-- ═══ NAV (Desktop) ═══ -->
  <nav class="nav" id="nav">
    <a href="./index.php"  aria-label="XBR Tags home">
      <img src="./assets/img/XBR Logo.png" class="logo" alt="logo">
    </a>

    <div class="nav-links">
      <button class="nl">iXBRL
        <svg viewBox="0 0 10 6" fill="none"><path d="M1 1l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
        <div class="dd">
          <a href="./ixbrl-guide-uk.php">Introduction</a>
          <a href="./what-is-ixbrl-uk.php">What is iXBRL?</a>
          <a href="./ixbrl-tagging-services-uk.php">Complete UK iXBRL Services </a>
          <a href="./why-file-in-ixbrl-uk.php">Why file in iXBRL?</a>
          <a href="./who-should-file-ixbrl-uk.php">Who should file in iXbrl?</a>
          <a href="./ixbrl-filing-deadline-uk.php">What to file in iXBRL?</a>
          <a href="./ixbrl-filing-requirements-uk.php">When to file iXBRL accounts ?</a>
          <a href="./how-to-file-ixbrl-uk.php">How to file iXBRL accounts?</a>
        </div>
      </button> 
      <button class="nl">CT600
        <svg viewBox="0 0 10 6" fill="none"><path d="M1 1l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
        <div class="dd">
          <a href="#">Introduction</a>
          <a href="#">What is CT600?</a>
          <a href="./ct600-ixbrl-filing-services.php">CT600 iXBRL Services </a>
          <a href="#">Who should file CT600?</a>
          <a href="#">What to file in CT600?</a>
          <a href="#">Who should file CT600?</a>
          <a href="#">When to file CT600?</a>
          <a href="#">How to complete CT600?</a>
        </div>
      </button>
      <button class="nl" onclick="document.getElementById('process').scrollIntoView({behavior:'smooth'})">UKSEF</button>
      <button class="nl">How It Works
        <svg viewBox="0 0 10 6" fill="none"><path d="M1 1l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
        <div class="dd">
          <a href="#">iXBRL Conversion</a>
          <a href="#">CT600 Tax Returns Filing</a>
        </div>
      </button>
      <button class="nl">Who We Help
        <svg viewBox="0 0 10 6" fill="none"><path d="M1 1l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
        <div class="dd">
          <a href="#">Accounting firms</a>
          <a href="#">Companies</a>
          <a href="#">Small Companies</a>
          <a href="#">Micro Entities</a>
          <a href="#">Charities</a>
          <a href="#">Dormant companies</a>
        </div>
      </button>
      <button class="nl" onclick="document.getElementById('pricing').scrollIntoView({behavior:'smooth'})">IXBRL Pricing</button>
      <button class="nl">Why Us
        <svg viewBox="0 0 10 6" fill="none"><path d="M1 1l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
        <div class="dd">
          <a href="#">Our Differentiators</a>
          <a href="#">Ixbrl Story</a>
          <a href="#">Global presence</a>
          <a href="#">Security &amp; privacy</a>
          <a href="#">FAQs</a>
          <a href="#">Blogs</a>
          <a href="#">Contact Us</a>
        </div>
      </button>
    </div>

    <div class="nav-right">
      <button class="n-sign">Sign in</button>
      <button class="n-quote" onclick="document.getElementById('contact').scrollIntoView({behavior:'smooth'})">Get a quote</button>
    </div>

    <button class="hamburger" id="hamburger" aria-label="Open menu" aria-expanded="false" aria-controls="mobileMenu">
      <span class="ham-line"></span>
      <span class="ham-line"></span>
      <span class="ham-line"></span>
    </button>
  </nav>

  <!-- ═══ MOBILE DRAWER ═══ -->
  <div class="mobile-menu" id="mobileMenu" role="dialog" aria-modal="true" aria-label="Navigation menu">
    <div class="mm-backdrop" id="mmBackdrop"></div>
    <div class="mm-panel">
      <div class="mm-header">
        <a class="mm-logo" href="#" aria-label="XBR Tags home">
          <div class="logo-bars"><div class="lb1"></div><div class="lb2"></div></div>
          <div class="logo-text">
            <div class="logo-name">XBR Tags</div>
            <div class="logo-sub">Expert Regulatory Reporting</div>
          </div>
        </a>
        <button class="mm-close" id="mmClose" aria-label="Close menu">✕</button>
      </div>
      <div class="mm-info">
        <div class="mm-info-row">
          <span class="mm-info-accent">HMRC Recognised</span>
          <span style="width:1px;height:8px;background:rgba(255,255,255,.12);flex-shrink:0"></span>
          <span class="mm-info-t">Mon–Fri 08:00–20:00</span>
        </div>
        <div class="mm-info-row">
          <span class="mm-info-t" style="color:rgba(255,255,255,.55)">📞 1234 567 8910</span>
        </div>
      </div>
      <nav class="mm-nav">
        <div class="mm-item has-sub" onclick="toggleSub(this)">
          <div class="mm-item-hd">iXBRL
            <div class="mm-item-arr"><svg viewBox="0 0 10 6" fill="none"><path d="M1 1l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
          </div>
          <div class="mm-sub">
            <a href="#">What is iXBRL?</a><a href="./ixbrl-tagging-services-uk.php">Complete UK iXBRL Services </a><a href="#">Why file in iXBRL?</a><a href="#">Who should file?</a><a href="#">Deadlines</a><a href="#">How to file</a>
          </div>
        </div>
        <div class="mm-item has-sub" onclick="toggleSub(this)">
          <div class="mm-item-hd">CT600
            <div class="mm-item-arr"><svg viewBox="0 0 10 6" fill="none"><path d="M1 1l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
          </div>
          <div class="mm-sub">
            <a href="#">What is CT600?</a><a href="#">Who should file?</a><a href="#">Filing deadlines</a><a href="#">How to complete</a>
          </div>
        </div>
        <div class="mm-item" onclick="closeMenu();document.getElementById('process').scrollIntoView({behavior:'smooth'})">
          <div class="mm-item-hd">UKSEF</div>
        </div>
        <div class="mm-item" onclick="closeMenu();document.getElementById('process').scrollIntoView({behavior:'smooth'})">
          <div class="mm-item-hd">How It Works</div>
        </div>
        <div class="mm-item has-sub" onclick="toggleSub(this)">
          <div class="mm-item-hd">Who We Help
            <div class="mm-item-arr"><svg viewBox="0 0 10 6" fill="none"><path d="M1 1l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
          </div>
          <div class="mm-sub">
            <a href="#">Accounting firms</a><a href="#">Companies</a><a href="#">Small &amp; micro</a><a href="#">Charities</a><a href="#">Dormant companies</a>
          </div>
        </div>
        <div class="mm-item" onclick="closeMenu();document.getElementById('pricing').scrollIntoView({behavior:'smooth'})">
          <div class="mm-item-hd">Pricing</div>
        </div>
        <div class="mm-item has-sub" onclick="toggleSub(this)">
          <div class="mm-item-hd">Why Us
            <div class="mm-item-arr"><svg viewBox="0 0 10 6" fill="none"><path d="M1 1l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
          </div>
          <div class="mm-sub">
            <a href="#">Differentiators</a><a href="#">Global presence</a><a href="#">Security &amp; privacy</a><a href="#">FAQs</a><a href="#">Blog</a>
          </div>
        </div>
      </nav>
      <div class="mm-footer">
        <button class="mm-sign">Sign in</button>
        <button class="mm-quote" onclick="closeMenu();document.getElementById('contact').scrollIntoView({behavior:'smooth'})">Get a quote</button>
      </div>
    </div>
  </div>