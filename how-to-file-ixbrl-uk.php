<?php
$page_title = "How to File iXBRL in the UK | XBR Tags";
$page_meta = "Learn how to file iXBRL accounts in the UK, HMRC filing process, CT600 submission steps, validation requirements, and best practices for compliant iXBRL reporting.";
$page_keywords = "how to file iXBRL UK, HMRC iXBRL filing process, iXBRL filing steps, CT600 iXBRL submission, iXBRL accounts filing UK, how to prepare iXBRL accounts";
$canonical_url = "https://xbrtags.com/how-to-file-ixbrl-uk";
$og_title = "How to File iXBRL in the UK | XBR Tags";
$og_desc = "Understand the HMRC iXBRL filing process, validation requirements, and step-by-step guidance for filing compliant iXBRL accounts in the UK.";
$og_type = "website";
$og_url = "https://xbrtags.com/how-to-file-ixbrl-uk";
$twitter_title = "How to File iXBRL in the UK | XBR Tags";
$twitter_desc = "Learn the complete iXBRL filing process, validation steps, and HMRC compliance requirements for UK businesses.";
$schema = '
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://xbrtags.com/#organization",
      "name": "XBR Tags",
      "url": "https://xbrtags.com",
      "logo": {
        "@type": "ImageObject",
        "url": "https://xbrtags.com/assets/images/logo.png"
      }
    },
    {
      "@type": "WebSite",
      "@id": "https://xbrtags.com/#website",
      "url": "https://xbrtags.com",
      "name": "XBR Tags",
      "publisher": {
        "@id": "https://xbrtags.com/#organization"
      }
    },
    {
      "@type": "WebPage",
      "@id": "https://xbrtags.com/how-to-file-ixbrl-uk/#webpage",
      "url": "https://xbrtags.com/how-to-file-ixbrl-uk",
      "name": "How to File iXBRL in the UK",
      "description": "Learn how to file iXBRL accounts in the UK, HMRC filing process, CT600 submission steps, validation requirements, and best practices for compliant iXBRL reporting.",
      "isPartOf": {
        "@id": "https://xbrtags.com/#website"
      },
      "about": {
        "@id": "https://xbrtags.com/#organization"
      },
      "inLanguage": "en-GB",
      "breadcrumb": {
        "@id": "https://xbrtags.com/how-to-file-ixbrl-uk/#breadcrumb"
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://xbrtags.com/how-to-file-ixbrl-uk/#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://xbrtags.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "How to File iXBRL UK",
          "item": "https://xbrtags.com/how-to-file-ixbrl-uk"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://xbrtags.com/how-to-file-ixbrl-uk/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How do companies file iXBRL accounts in the UK?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Companies generally prepare financial statements, apply taxonomy tags, validate the file, generate compliant reports, and submit them through approved HMRC filing software."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are required for iXBRL filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Required documents commonly include statutory accounts, tax computations, CT600 returns, and supporting financial disclosures."
          }
        },
        {
          "@type": "Question",
          "name": "Is validation necessary before submission?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Validation helps identify tagging issues, formatting inconsistencies, and missing disclosures before filing."
          }
        },
        {
          "@type": "Question",
          "name": "Can incorrect tagging cause filing rejection?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Incorrect taxonomy tagging or validation failures may result in submission rejection or compliance issues."
          }
        },
        {
          "@type": "Question",
          "name": "Do businesses need specialised software for iXBRL filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Many businesses use approved filing software or professional iXBRL tagging services to generate compliant reports."
          }
        },
        {
          "@type": "Question",
          "name": "How can companies improve filing accuracy?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Businesses can improve accuracy through proper validation, accurate tagging, careful review, and professional filing support."
          }
        }
      ]
    }
  ]
}
';
include 'header.php'; ?>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800&family=Space+Mono:wght@400;700&display=swap');
    *{box-sizing:border-box;margin:0;padding:0}
    :root{
      --k:#0C0C0C;--w:#FFFFFF;--r:#9B1C1C;--r2:#B01E1E;
      --g0:#F0EEE9;--g1:#F6F5F2;--g2:#E5E3DC;--g3:#9A9890;--g4:#3D3C3A;
      --display:'Bebas Neue',sans-serif;
      --body:'Figtree',sans-serif;
      --mono:'Plus Jakarta Sans', sans-serif;
      --ease:cubic-bezier(.16,1,.3,1);
    }
    html{scroll-behavior:smooth}
    .wrap{font-family:var(--body);width:100%;min-width:900px;background:#fff;overflow-x:hidden}
    .inner-hero{background:linear-gradient(to bottom,rgba(0,0,0,.85) 0%,rgba(0,0,0,.65) 40%,rgba(0,0,0,.85) 100%),url('./assets/img/how-to-file-ixbrl-uk.png') no-repeat center center;padding:4rem 3rem 3.5rem;position:relative;overflow:hidden;text-align:center;background-size:cover}
    .inner-hero::after{content:'';position:absolute;right:-60px;top:-60px;width:420px;height:420px;border-radius:50%;background:rgba(155,28,28,.06);pointer-events:none}
    .ih-eyebrow{display:flex;align-items:center;justify-content:center;gap:12px;margin-bottom:1.5rem}
    .ey-line{width:28px;height:1.5px;background:var(--r);flex-shrink:0}
    .ey-text{font-family:var(--mono);font-size:14px;letter-spacing:.14em;text-transform:uppercase;color:rgb(219 9 9 / 90%);font-weight:700}
    .ih-h1{font-family:var(--display);font-size:clamp(54px,7vw,100px);line-height:.92;letter-spacing:.02em;color:var(--w);margin-bottom:1.5rem}
    .ih-h1 em{color:#bb0000;font-style:normal}
    .ih-body{font-family:var(--body);font-size:17px;font-weight:400;line-height:1.75;color:rgba(255,255,255,.87);max-width:1200px;margin:0 auto}
    .ih-body strong{font-weight:800;color:rgba(255,255,255,.9)}
    .sec{padding:4rem 3rem;background:var(--w)}
    .sec-alt{background:var(--g1)}
    .sec-dark{background:var(--k)}
    .sec-label{font-family:var(--mono);font-size:14px;font-weight:700;letter-spacing:.18em;text-transform:uppercase;color:var(--r);display:flex;align-items:center;gap:10px;margin-bottom:1.25rem}
    .sec-label::before{content:'';width:22px;height:1.5px;background:var(--r);flex-shrink:0}
    .sec-label-w{color:rgb(194 12 12 / 91%)}.sec-label-w::before{background:rgba(193,4,4,.948)}
    .sec-h2{font-family:var(--display);font-size:clamp(40px,5vw,72px);line-height:.92;letter-spacing:.02em;color:var(--k);margin-bottom:1.25rem}
    .sec-h2 em{color:var(--r);font-style:normal}
    .sec-h2-w{color:var(--w)}
    .sec-body{font-family:var(--body);font-size:19px;font-weight:400;line-height:1.8;color:var(--g4);max-width:520px}
    .sec-body strong{font-weight:800;color:var(--k)}
    .sec-body-w{color:rgba(255,255,255,.87)}
    .sec-body-w strong{color:#fff}
    .sec-row{display:flex;justify-content:space-between;align-items:flex-end;gap:3rem;flex-wrap:wrap;margin-bottom:3.5rem}
    .rv{opacity:0;transform:translateY(28px);transition:opacity .85s var(--ease),transform .85s var(--ease)}
    .rv.in{opacity:1;transform:none}
    .d1{transition-delay:.1s}.d2{transition-delay:.2s}.d3{transition-delay:.32s}.d4{transition-delay:.44s}
    .hmrc-block{background:var(--g0);border-bottom:1px solid var(--g2)}
    .hmrc-top{display:grid;grid-template-columns:1.2fr 1fr;gap:0;border-bottom:1px solid var(--g2)}
    .hmrc-left{padding:3.5rem 3.5rem 3.5rem 3rem;border-right:1px solid var(--g2)}
    .hmrc-badge{display:inline-flex;align-items:center;gap:7px;background:var(--k);padding:5px 12px 5px 8px;margin-bottom:1.75rem}
    .hmrc-badge-dot{width:6px;height:6px;border-radius:50%;background:var(--r);flex-shrink:0}
    .hmrc-badge-text{font-family:var(--mono);font-size:14px;letter-spacing:.14em;text-transform:uppercase;color:#fff;font-weight:700}
    .hmrc-h2{font-family:var(--display);font-size:clamp(40px,5vw,64px);line-height:.92;letter-spacing:.02em;color:var(--k);margin-bottom:1.5rem}
    .hmrc-h2 em{color:var(--r);font-style:normal}
    .hmrc-desc{font-family:var(--body);font-size:19px;font-weight:400;line-height:1.8;color:var(--g4)}
    .hmrc-desc strong{font-weight:800;color:var(--k)}
    .hmrc-right{padding:3.5rem 3rem;display:flex;flex-direction:column;justify-content:center}
    .hmrc-body2{font-family:var(--body);font-size:17px;font-weight:400;line-height:1.8;color:var(--g4);margin-bottom:2rem}
    .hmrc-body2 strong{font-weight:800;color:var(--k)}
    .hmrc-sub-label{display:flex;align-items:center;gap:10px;font-family:var(--mono);font-size:14px;font-weight:700;letter-spacing:.18em;text-transform:uppercase;color:var(--r)}
    .hmrc-sub-label::before{content:'';width:22px;height:1.5px;background:var(--r);flex-shrink:0}
    .hmrc-grid-wrap{padding:0 3rem 3rem}
    .filing-grid{display:grid;grid-template-columns:repeat(5,1fr);gap:0;border-top:1px solid var(--g2);border-left:1px solid var(--g2)}
    .f-cell{padding:1.5rem 1.5rem 1.75rem;border-right:1px solid var(--g2);border-bottom:1px solid var(--g2);position:relative;overflow:hidden;transition:background .25s;cursor:default}
    .f-cell:hover{background:var(--w)}
    .f-cell::after{content:'';position:absolute;bottom:0;left:0;right:0;height:0;background:var(--r);transition:height .28s var(--ease)}
    .f-cell:hover::after{height:2px}
    .f-n{font-family:var(--mono);font-size:20px;letter-spacing:.1em;text-transform:uppercase;color:var(--g3);font-weight:700;margin-bottom:.85rem}
    .f-name{font-family:var(--display);font-size:24px;letter-spacing:.03em;color:var(--k);line-height:1.2}
    .proc-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:0;border-top:1px solid rgba(255,255,255,.08)}
    .proc-step{padding:3rem 2.5rem 3.5rem;border-right:1px solid rgba(255,255,255,.07);position:relative;overflow:hidden;transition:background .3s}
    .proc-step:last-child{border-right:none}
    .proc-step::after{content:'';position:absolute;top:0;left:0;right:0;height:0;background:var(--r);opacity:.06;transition:height .35s var(--ease)}
    .proc-step:hover::after{height:100%}
    .proc-n{font-family:var(--display);font-size:80px;color:rgba(255,255,255,.64);line-height:1;letter-spacing:.02em;margin-bottom:1.5rem}
    .proc-icon{width:43px;height:43px;border:1px solid rgba(255,255,255,.71);display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem}
    .proc-icon svg{width:16px;height:16px;stroke:rgba(255,255,255,.95);stroke-width:2.5;fill:none;stroke-linecap:round;stroke-linejoin:round}
    .proc-title{font-family:var(--display);font-size:20px;letter-spacing:.04em;color:var(--w);margin-bottom:.75rem;line-height:1.1}
    .proc-desc{font-family:var(--body);font-size:17px;font-weight:400;line-height:1.8;color:rgba(255,255,255,.97)}
    .proc-desc strong{font-weight:800;color:#fff}
    .proc-chip{display:inline-block;margin-top:1.25rem;font-family:var(--mono);font-size:14px;letter-spacing:.1em;border:1px solid rgba(194,8,8,.5);color:rgba(194,6,6,.9);padding:4px 10px;text-transform:uppercase;font-weight:700}
    .why-grid{display:grid;grid-template-columns:repeat(3,1fr);border-top:1px solid var(--g2);border-bottom:1px solid var(--g2)}
    .wc{padding:3rem;border-right:1px solid var(--g2);position:relative;overflow:hidden}
    .wc:last-child{border-right:none}
    .wc::after{content:'';position:absolute;bottom:0;left:0;right:0;height:2px;background:var(--r);opacity:0;transition:opacity .3s}
    .wc:hover::after{opacity:1}
    .wc-title{font-family:var(--display);font-size:22px;letter-spacing:.04em;color:var(--k);margin-bottom:.75rem}
    .wc-lbl{font-family:var(--mono);font-size:20px;letter-spacing:.12em;text-transform:uppercase;color:var(--r);margin-bottom:1rem;font-weight:700}
    .wc-desc{font-family:var(--body);font-size:20px;font-weight:400;line-height:1.8;color:var(--g4)}
    .wc-desc strong{font-weight:800;color:var(--k)}
    .wc-ico{width:42px;height:42px;border:1px solid var(--g2);display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem;transition:border-color .2s}
    .wc:hover .wc-ico{border-color:var(--r)}
    .wc-ico svg{width:22px;height:22px;stroke:#000;stroke-width:1.5;fill:none;stroke-linecap:round;stroke-linejoin:round;transition:stroke .2s}
    .wc:hover .wc-ico svg{stroke:var(--r)}
    .ben-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:0;border-top:1px solid rgba(255,255,255,.08)}
    .ben-cell{padding:2.75rem 3rem;border-right:1px solid rgba(255,255,255,.07);border-bottom:1px solid rgba(255,255,255,.07)}
    .ben-cell:nth-child(2n){border-right:none}
    .ben-cell:nth-last-child(-n+2){border-bottom:none}
    .ben-title{font-family:var(--display);font-size:26px;letter-spacing:.04em;color:var(--w);margin-bottom:.75rem}
    .ben-desc{font-family:var(--body);font-size:20px;font-weight:400;line-height:1.8;color:rgb(255 255 255 / 86%)}
    .ben-desc strong{font-weight:800;color:#fff}
    .std-list{list-style:none;display:flex;flex-wrap:wrap;gap:8px;margin-top:1.5rem}
    .std-tag{font-family:var(--mono);font-size:17px;letter-spacing:.1em;border:1px solid var(--g2);padding:6px 14px;color:var(--g4);font-weight:700;transition:border-color .18s,color .18s}
    .std-tag:hover{border-color:var(--r);color:var(--r)}
    .faq-list{border-top:1px solid var(--g2)}
    .faq-item{border-bottom:1px solid var(--g2);cursor:pointer;overflow:hidden}
    .faq-hd{display:flex;align-items:center;justify-content:space-between;padding:1.5rem 0;transition:color .18s}
    .faq-item.open .faq-hd{color:var(--r)}
    .faq-q{font-size:23px;letter-spacing:.03em;color:var(--k);line-height:1.1;transition:color .18s}
    .faq-item.open .faq-q{color:var(--r)}
    .faq-tog{width:28px;height:28px;border:1px solid var(--g2);border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:all .3s var(--ease)}
    .faq-item.open .faq-tog{background:#fff;border-color:var(--r);transform:rotate(45deg)}
    .faq-tog svg{width:10px;height:10px;stroke:#fff !important;transition:stroke .2s}
    .faq-item.open .faq-tog svg{stroke:#fff}
    .faq-bd{max-height:0;overflow:hidden;transition:max-height .4s var(--ease)}
    .faq-item.open .faq-bd{max-height:200px}
    .faq-a{font-family:var(--body);font-size:20px;font-weight:400;line-height:1.8;color:var(--g4);padding-bottom:1.5rem}
    #contact{background:var(--k);padding:4rem 3rem;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:3rem;border-top:1px solid rgba(255,255,255,.05)}
    .ct-h{font-family:var(--display);font-size:clamp(44px,6vw,80px);color:var(--w);line-height:.92;letter-spacing:.02em}
    .ct-h em{color:var(--r)}
    .ct-sub{font-family:var(--body);font-size:20px;font-weight:400;color:rgba(255,255,255,.81);max-width:840px;line-height:1.8;margin-top:.75rem}
    .ct-sub strong{font-weight:800;color:#fff}
    .ct-btns{display:flex;gap:12px;flex-wrap:wrap;align-items:center}
    .ct-btn{font-family:var(--display);font-size:17px;letter-spacing:.06em;padding:14px 30px;transition:all .18s;display:inline-flex;align-items:center;gap:8px;text-decoration:none}
    .ct-btn-p{background:var(--r);color:var(--w)}.ct-btn-p:hover{background:var(--r2)}
    .ct-btn-g{border:1px solid rgba(255,255,255,.15);color:rgba(255,255,255,.5)}.ct-btn-g:hover{border-color:rgba(255,255,255,.4);color:var(--w)}
    footer{background:var(--k);padding:4rem 3rem 2.5rem;border-top:1px solid rgba(255,255,255,.07)}
    .ft-top{display:grid;grid-template-columns:1.8fr 1fr 1fr 1fr;gap:0;border-bottom:1px solid rgba(255,255,255,.07);padding-bottom:3rem;margin-bottom:2rem}
    .ft-brand{padding-right:8rem;border-right:1px solid rgba(255,255,255,.07)}
    .ft-col{padding:0 2rem;border-right:1px solid rgba(255,255,255,.07)}
    .ft-col:last-child{border-right:none;padding-right:0}
    .ft-logo{display:flex;align-items:center;gap:11px;margin-bottom:1.5rem}
    .ft-logo-bars{display:flex;flex-direction:column;gap:5px}
    .ft-lb1{width:20px;height:2.5px;background:var(--r)}
    .ft-lb2{width:14px;height:2.5px;background:var(--r)}
    .ft-name{font-family:var(--body);font-weight:800;font-size:17px;color:var(--w)}
    .ft-sub{font-family:var(--mono);font-size:8px;letter-spacing:.14em;color:rgba(255,255,255,.25);text-transform:uppercase;font-weight:700}
    .ft-tagline{font-family:var(--body);font-style:italic;font-size:19px;font-weight:400;color:rgba(255,255,255,.82);line-height:1.8;margin-bottom:1.5rem}
    .ft-tagline strong{font-weight:800;font-style:normal;color:rgba(255,255,255,.8)}
    .ft-contact-list{display:flex;flex-direction:column;gap:6px}
    .ft-contact-item{font-family:var(--mono);font-size:14px;letter-spacing:.06em;color:rgb(255 255 255 / 86%);text-transform:uppercase;font-weight:700}
    .ft-contact-item a{color:rgb(255 255 255 / 86%);text-decoration:none;transition:color .15s}
    .ft-contact-item a:hover{color:rgba(194,6,6,.85)}
    .ft-col-h{font-family:var(--mono);font-size:14px;letter-spacing:.18em;text-transform:uppercase;color:rgba(255,255,255,.9);margin-bottom:1.5rem;font-weight:700;padding-bottom:.75rem;border-bottom:1px solid rgba(255,255,255,.07)}
    .ft-links{list-style:none;display:flex;flex-direction:column;gap:10px}
    .ft-links a{font-family:var(--body);font-size:17px;font-weight:500;color:rgb(255 255 255 / 86%);text-decoration:none;transition:color .15s;display:flex;align-items:center;gap:6px}
    .ft-links a::before{content:'';width:3px;height:3px;border-radius:50%;background:var(--r);flex-shrink:0;opacity:0;transition:opacity .15s}
    .ft-links a:hover{color:rgba(194,6,6,.85)}
    .ft-links a:hover::before{opacity:1}
    .ft-bottom{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:1rem;padding-top:1.5rem;border-top:1px solid rgba(255,255,255,.05)}
    .ft-copy{font-family:var(--mono);font-size:10.5px;letter-spacing:.05em;color:rgba(255,255,255,.35);font-weight:700;line-height:1.6}
    .ft-legal{display:flex;gap:2rem;align-items:center}
    .ft-legal a{font-family:var(--mono);font-size:10.5px;letter-spacing:.06em;color:rgba(255,255,255,.4);text-decoration:none;transition:color .15s;font-weight:700}
    .ft-legal a:hover{color:rgba(194,6,6,.8)}
    @media(max-width:1100px){
      .ft-top{grid-template-columns:1fr 1fr}
      .ft-brand{grid-column:1/-1;padding-right:0;border-right:none;border-bottom:1px solid rgba(255,255,255,.07);padding-bottom:2rem;margin-bottom:2rem}
      .ft-col{padding:1.5rem 1.5rem 0}
      .ft-col:nth-child(3){border-right:none}
      .ft-col:last-child{padding-right:1.5rem}
      .proc-grid{grid-template-columns:1fr 1fr}
      .why-grid{grid-template-columns:1fr 1fr}
      .wc:nth-child(2){border-right:none}
      .wc:nth-child(3){border-top:1px solid var(--g2)}
      .ben-grid{grid-template-columns:1fr}
      .ben-cell{border-right:none}
      .hmrc-top{grid-template-columns:1fr}
      .hmrc-left{border-right:none;border-bottom:1px solid var(--g2)}
      .filing-grid{grid-template-columns:repeat(3,1fr)}
    }
    @media(max-width:900px){
      .wrap{min-width:100%;overflow-x:hidden}
      .topbar{padding:0 1rem;height:auto;min-height:40px;overflow-x:auto;flex-wrap:nowrap;gap:.6rem;justify-content:flex-start}
      .topbar::-webkit-scrollbar{display:none}
      .nav{height:60px;padding:0 1rem;position:sticky;top:0}
      .nav-links{display:none}
      .nav-right{display:none}
      .hamburger{display:flex}
      .mobile-menu{display:block}
      .inner-hero{padding:2.5rem 1.25rem 3rem}
      .ih-h1{font-size:clamp(44px,12vw,72px)}
      .ih-body{font-size:17px}
      .hmrc-block{padding:0}
      .hmrc-top{grid-template-columns:1fr}
      .hmrc-left{padding:2.5rem 1.25rem;border-right:none;border-bottom:1px solid var(--g2)}
      .hmrc-right{padding:2.5rem 1.25rem}
      .hmrc-grid-wrap{padding:0 1.25rem 2.5rem}
      .sec{padding:3rem 1.25rem}
      .sec-row{flex-direction:column;align-items:flex-start;gap:1rem;margin-bottom:2rem}
      .sec-body{max-width:100%}
      .proc-grid{grid-template-columns:1fr}
      .proc-step{border-right:none;border-bottom:1px solid rgba(255,255,255,.07);padding:2rem 1.25rem 2.5rem}
      .proc-step:last-child{border-bottom:none}
      .why-grid{grid-template-columns:1fr}
      .wc{border-right:none;border-bottom:1px solid var(--g2);padding:2rem 1.25rem}
      .wc:last-child{border-bottom:none}
      .wc:nth-child(2){border-right:none}
      .wc:nth-child(3){border-top:none}
      .ben-grid{grid-template-columns:1fr}
      .ben-cell{border-right:none;padding:2rem 1.25rem}
      .faq-q{font-size:20px}
      #contact{padding:3.5rem 1.25rem;flex-direction:column;align-items:flex-start;gap:2rem}
      footer{padding:3rem 1.25rem 2rem}
      .ft-top{grid-template-columns:1fr}
      .ft-brand{padding-right:0;border-right:none}
      .ft-col{padding:1.5rem 0 0}
      .ft-bottom{flex-direction:column;align-items:flex-start}
    }
    @media(max-width:480px){
      .topbar{display:none}
      .nav{height:70px;padding:0 .75rem}
      .ih-h1{font-size:clamp(38px,13vw,58px)}
      .filing-grid{grid-template-columns:1fr}
      #contact .ct-btns{flex-direction:column;align-items:flex-start;width:100%}
      .ct-btn{width:100%;justify-content:center}
    }
    @media(min-width:901px){
      .wrap{min-width:900px}
      .hamburger{display:none}
      .mobile-menu{display:none}
    }
  </style>

  <!-- Hero -->
  <section class="inner-hero">
    <div class="ih-eyebrow">
      <div class="ey-line"></div>
      <div class="ey-text">HMRC iXBRL Filing · Step-by-Step Process</div>
    </div>
    <h1 class="ih-h1">How to File iXBRL<br><em>in the UK</em></h1>
    <p class="ih-body">
      UK companies required to submit corporation tax returns to HMRC must file financial statements and tax computations in iXBRL format. The iXBRL filing process involves <strong>preparing financial statements, applying taxonomy tags, validating the data, and submitting compliant files</strong> through approved HMRC filing systems.
    </p>
  </section>

  <!-- What is iXBRL + Filing Documents -->
  <div class="hmrc-block rv">
    <div class="hmrc-top">
      <div class="hmrc-left">
        <div class="hmrc-badge">
          <div class="hmrc-badge-dot"></div>
          <div class="hmrc-badge-text">iXBRL Filing</div>
        </div>
        <h2 class="hmrc-h2">What is<br><em>iXBRL Filing?</em></h2>
        <p class="hmrc-desc">iXBRL (Inline eXtensible Business Reporting Language) is a digital reporting format used for submitting financial information in a <strong>structured and machine-readable format</strong>. It combines readable financial statements with embedded XBRL tags, allowing HMRC systems to process financial data efficiently.</p>
      </div>
      <div class="hmrc-right">
        <p class="hmrc-body2">The CT600 submission generally includes the following <strong>iXBRL-tagged documents</strong>.</p>
        <div class="hmrc-sub-label">Required documents include</div>
      </div>
    </div>
    <div class="hmrc-grid-wrap">
      <div class="filing-grid">
        <div class="f-cell"><div class="f-n">01</div><div class="f-name">Statutory financial statements</div></div>
        <div class="f-cell"><div class="f-n">02</div><div class="f-name">Corporation tax computations</div></div>
        <div class="f-cell"><div class="f-n">03</div><div class="f-name">CT600 supporting documents</div></div>
        <div class="f-cell"><div class="f-n">04</div><div class="f-name">Consolidated financial reports</div></div>
        <div class="f-cell"><div class="f-n">05</div><div class="f-name">Certain disclosures submitted to HMRC</div></div>
      </div>
    </div>
  </div>

  <!-- 5-Step Filing Process -->
  <section class="sec sec-dark" style="padding:4rem 0">
    <div class="proc-head rv" style="padding:0 3rem;margin-bottom:0">
      <div class="sec-label sec-label-w">Filing Process</div>
      <h2 class="sec-h2 sec-h2-w">How to File iXBRL<br><em>Accounts in the UK.</em></h2>
      <p class="sec-body sec-body-w" style="margin-top:1rem">A <strong>five-step process</strong> to prepare, tag, validate, and submit compliant iXBRL files for HMRC corporation tax filing.</p>
    </div>
    <div class="proc-grid rv" style="margin-top:3rem">
      <div class="proc-step d1">
        <div class="proc-n">01</div>
        <div class="proc-icon"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg></div>
        <div class="proc-title">Prepare Financial Statements</div>
        <div class="proc-desc">Prepare complete and accurate financial statements including <strong>balance sheet, profit and loss, notes to accounts, tax computations</strong>, and supporting disclosures.</div>
        <span class="proc-chip">Step 1</span>
      </div>
      <div class="proc-step d2">
        <div class="proc-n">02</div>
        <div class="proc-icon"><svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
        <div class="proc-title">Apply iXBRL Tags</div>
        <div class="proc-desc">Apply appropriate taxonomy tags to financial data identifying key concepts such as <strong>revenue, expenses, assets, liabilities, tax calculations</strong>, and share capital.</div>
        <span class="proc-chip">Step 2</span>
      </div>
      <div class="proc-step d3">
        <div class="proc-n">03</div>
        <div class="proc-icon"><svg viewBox="0 0 24 24"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg></div>
        <div class="proc-title">Validate the iXBRL File</div>
        <div class="proc-desc">Validate the tagged file to identify <strong>missing mandatory tags, taxonomy inconsistencies, formatting errors</strong>, and structural validation failures before submission.</div>
        <span class="proc-chip">Step 3</span>
      </div>
      <div class="proc-step d4">
        <div class="proc-n">04</div>
        <div class="proc-icon"><svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
        <div class="proc-title">Generate HMRC-Compliant Files</div>
        <div class="proc-desc">Generate the iXBRL file in a format accepted by HMRC filing systems, complying with <strong>HMRC technical requirements and approved taxonomy standards</strong>.</div>
        <span class="proc-chip">Step 4</span>
      </div>
    </div>
    <!-- Step 5 as a full-width row -->
    <div class="rv" style="margin-top:0;border-top:1px solid rgba(255,255,255,.07);padding:3rem 2.5rem 3.5rem">
      <div style="gap:1.5rem;flex-wrap:wrap">
        <div class="proc-n" style="font-size:60px;margin-bottom:.5rem">05</div>
        <div class="proc-icon" style="flex-shrink:0"><svg viewBox="0 0 24 24" stroke="rgba(255,255,255,.95)" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg></div>
        <div>
          <div class="proc-title" style="font-size:22px">Submit Through Approved Filing Software</div>
          <div class="proc-desc">Submit the iXBRL accounts and tax computations through approved corporation tax filing software. The submission includes the <strong>CT600 corporation tax return, iXBRL-tagged accounts, tax computations</strong>, and supporting filing documents. Timely submission helps businesses avoid penalties and compliance issues.</div>
          <span class="proc-chip">Step 5</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Common Challenges + Tips -->
  <section class="sec">
    <div class="sec-row rv">
      <div>
        <div class="sec-label">Filing Guidance</div>
        <h2 class="sec-h2">Common Challenges &amp;<br><em>Tips for Accurate Filing.</em></h2>
      </div>
      <p class="sec-body">Understanding common pitfalls and <strong>best practices to improve iXBRL filing efficiency and compliance</strong>.</p>
    </div>
    <div class="why-grid rv">
      <div class="wc">
        <div class="wc-ico"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg></div>
        <div class="wc-lbl">Challenge</div>
        <div class="wc-title">Incorrect Taxonomy Selection</div>
        <div class="wc-desc">Applying the wrong taxonomy tags is a common error. <strong>Accurate taxonomy selection</strong> ensures financial data is correctly classified and HMRC compliant.</div>
      </div>
      <div class="wc">
        <div class="wc-ico"><svg viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></div>
        <div class="wc-lbl">Challenge</div>
        <div class="wc-title">Validation Failures</div>
        <div class="wc-desc">Missing disclosures and formatting inconsistencies cause validation failures. <strong>Detailed validation checks</strong> before submission reduce rejection risks.</div>
      </div>
      <div class="wc">
        <div class="wc-ico"><svg viewBox="0 0 24 24"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg></div>
        <div class="wc-lbl">Tip</div>
        <div class="wc-title">Prepare Statements Early</div>
        <div class="wc-desc">Finalising financial statements before tagging begins helps <strong>reduce filing issues</strong> later in the process and allows more time for thorough review.</div>
      </div>
      <div class="wc">
        <div class="wc-ico"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div class="wc-lbl">Tip</div>
        <div class="wc-title">Review Disclosures Carefully</div>
        <div class="wc-desc">Reviewing all mandatory disclosures before submission ensures <strong>no required information is missing</strong> and reports pass HMRC validation checks.</div>
      </div>
      <div class="wc">
        <div class="wc-ico"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
        <div class="wc-lbl">Tip</div>
        <div class="wc-title">Seek Professional Support</div>
        <div class="wc-desc">Working with experienced iXBRL specialists helps improve <strong>filing accuracy, reduce compliance risks</strong>, and ensure timely, rejection-free submissions.</div>
      </div>
    </div>
  </section>

  <!-- Why Choose XBR Tags -->
  <section class="sec sec-alt">
    <div class="sec-row rv">
      <div>
        <div class="sec-label">Why choose us</div>
        <h2 class="sec-h2">Why Choose<br><em>XBR Tags?</em></h2>
      </div>
      <p class="sec-body">Professional iXBRL tagging and filing support for <strong>UK businesses, accounting firms, and finance professionals</strong>.</p>
    </div>
    <div class="std-list rv">
      <span class="std-tag">HMRC-compliant iXBRL tagging</span>
      <span class="std-tag">Financial statement conversion</span>
      <span class="std-tag">Validation support</span>
      <span class="std-tag">Technical filing assistance</span>
      <span class="std-tag">Fast turnaround times</span>
    </div>
  </section>

  <!-- FAQ -->
  <section class="sec">
    <div class="sec-row rv">
      <div>
        <div class="sec-label">FAQ</div>
        <h2 class="sec-h2">Frequently Asked<br><em>Questions.</em></h2>
      </div>
      <p class="sec-body">Everything you need to know about <strong>how to file iXBRL in the UK</strong>.</p>
    </div>
    <div class="faq-list rv">
      <div class="faq-item open" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">How do companies file iXBRL accounts in the UK?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Companies generally prepare financial statements, apply taxonomy tags, validate the file, generate compliant reports, and submit them through approved HMRC filing software.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">What documents are required for iXBRL filing?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Required documents commonly include statutory accounts, tax computations, CT600 returns, and supporting financial disclosures.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">Is validation necessary before submission?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Yes. Validation helps identify tagging issues, formatting inconsistencies, and missing disclosures before filing.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">Can incorrect tagging cause filing rejection?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Yes. Incorrect taxonomy tagging or validation failures may result in submission rejection or compliance issues.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">Do businesses need specialised software for iXBRL filing?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Many businesses use approved filing software or professional iXBRL tagging services to generate compliant reports.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">How can companies improve filing accuracy?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Businesses can improve accuracy through proper validation, accurate tagging, careful review, and professional filing support.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">Does XBR Tags provide iXBRL filing support?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Yes. XBR Tags provides professional iXBRL tagging, validation, and filing support services for UK companies and accounting firms.</p></div>
      </div>
    </div>
  </section>

  <!-- Contact CTA -->
  <section id="contact">
    <div class="rv">
      <div class="ct-h">Get Professional<br>iXBRL Filing<em> Support.</em></div>
      <p class="ct-sub">XBR Tags provides reliable iXBRL tagging and filing support tailored for <strong>UK businesses and accounting professionals</strong>. Need help preparing or submitting iXBRL accounts? Contact us to discuss your filing requirements.</p>
    </div>
    <div class="ct-btns rv d2">
      <a href="./contact-us.php" class="ct-btn ct-btn-p">Get in touch <svg width="12" height="12" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="./ixbrl-tagging-services-uk.php" class="ct-btn ct-btn-g">View tagging services</a>
    </div>
  </section>

  <?php include 'footer.php'; ?>
</div>
<script>
function toggleSub(el){
  if(!el.classList.contains('has-sub'))return;
  var isOpen=el.classList.contains('open');
  document.querySelectorAll('.mm-item.has-sub').forEach(function(x){x.classList.remove('open')});
  if(!isOpen)el.classList.add('open');
}
window.addEventListener('scroll',function(){document.getElementById('nav').classList.toggle('scrolled',window.scrollY>10)},{passive:true});
var io=new IntersectionObserver(function(entries){
  entries.forEach(function(e){if(e.isIntersecting)e.target.classList.add('in')});
},{threshold:0.07,rootMargin:'0px 0px -24px 0px'});
document.querySelectorAll('.rv').forEach(function(el){io.observe(el)});
function toggleFaq(el){
  var isOpen=el.classList.contains('open');
  document.querySelectorAll('.faq-item').forEach(function(x){x.classList.remove('open')});
  if(!isOpen)el.classList.add('open');
}
</script>
