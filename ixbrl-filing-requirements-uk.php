<?php
$page_title = "iXBRL Filing Requirements in the UK | XBR Tags";
$page_meta = "Learn iXBRL filing requirements in the UK, HMRC compliance standards, CT600 filing obligations, validation requirements, and best practices for accurate iXBRL reporting.";
$page_keywords = "iXBRL filing requirements UK, HMRC iXBRL requirements, CT600 filing requirements, iXBRL compliance UK, iXBRL tagging requirements, HMRC digital filing";
$canonical_url = "https://xbrtags.com/ixbrl-filing-requirements-uk";
$og_title = "iXBRL Filing Requirements in the UK | XBR Tags";
$og_desc = "Understand HMRC iXBRL filing requirements, taxonomy standards, validation rules, and compliance obligations for UK businesses.";
$og_type = "website";
$og_url = "https://xbrtags.com/ixbrl-filing-requirements-uk";
$twitter_title = "iXBRL Filing Requirements in the UK | XBR Tags";
$twitter_desc = "Learn about UK iXBRL compliance requirements, HMRC filing standards, validation rules, and digital reporting obligations.";
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
      "@id": "https://xbrtags.com/ixbrl-filing-requirements-uk/#webpage",
      "url": "https://xbrtags.com/ixbrl-filing-requirements-uk",
      "name": "iXBRL Filing Requirements in the UK",
      "description": "Learn iXBRL filing requirements in the UK, HMRC compliance standards, CT600 filing obligations, validation requirements, and best practices for accurate iXBRL reporting.",
      "isPartOf": {
        "@id": "https://xbrtags.com/#website"
      },
      "about": {
        "@id": "https://xbrtags.com/#organization"
      },
      "inLanguage": "en-GB",
      "breadcrumb": {
        "@id": "https://xbrtags.com/ixbrl-filing-requirements-uk/#breadcrumb"
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://xbrtags.com/ixbrl-filing-requirements-uk/#breadcrumb",
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
          "name": "iXBRL Filing Requirements UK",
          "item": "https://xbrtags.com/ixbrl-filing-requirements-uk"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://xbrtags.com/ixbrl-filing-requirements-uk/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What are iXBRL filing requirements?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "iXBRL filing requirements refer to HMRC standards for preparing, tagging, validating, and submitting financial statements and tax computations digitally."
          }
        },
        {
          "@type": "Question",
          "name": "Which documents require iXBRL tagging?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Statutory accounts, tax computations, CT600 supporting documents, and certain financial disclosures commonly require iXBRL formatting."
          }
        },
        {
          "@type": "Question",
          "name": "Is validation mandatory for iXBRL filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Validation is an important part of the filing process to identify tagging errors, formatting inconsistencies, and missing disclosures before submission."
          }
        },
        {
          "@type": "Question",
          "name": "Who must comply with HMRC iXBRL requirements?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most UK companies filing corporation tax returns with HMRC are required to comply with iXBRL filing standards."
          }
        },
        {
          "@type": "Question",
          "name": "Can incorrect tagging cause filing rejection?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Incorrect taxonomy tagging, missing disclosures, or validation failures may result in submission rejection or compliance issues."
          }
        },
        {
          "@type": "Question",
          "name": "How can businesses improve iXBRL compliance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Businesses can improve compliance through accurate tagging, proper validation, careful review, and professional iXBRL support services."
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
    .inner-hero{background:linear-gradient(to bottom,rgba(0,0,0,.85) 0%,rgba(0,0,0,.65) 40%,rgba(0,0,0,.85) 100%),url('./assets/img/ixbrl-filing-requirements-uk.png') no-repeat center center;padding:4rem 3rem 3.5rem;position:relative;overflow:hidden;text-align:center;background-size:cover}
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
    .svc-table{border-top:1px solid var(--g2)}
    .svc-row{display:grid;grid-template-columns:56px 240px 1fr 160px;gap:2.5rem;align-items:start;padding:2.25rem 0;border-bottom:1px solid var(--g2);cursor:pointer;position:relative;transition:background .25s,padding-left .25s}
    .svc-row::before{content:'';position:absolute;left:-3rem;top:0;bottom:0;width:0;background:var(--r);transition:width .35s var(--ease)}
    .svc-row:hover::before{width:3px}
    .svc-row:hover{background:var(--g0);padding-left:.5rem}
    .svc-n{font-family:var(--mono);font-size:17px;color:var(--g3);letter-spacing:.08em;padding-top:5px;font-weight:700}
    .svc-name{font-family:var(--display);font-size:28px;letter-spacing:.02em;color:var(--k);line-height:1.1}
    .svc-desc{font-family:var(--body);font-size:21px;font-weight:400;line-height:1.8;color:var(--g4)}
    .svc-desc strong{font-weight:800;color:var(--k)}
    .svc-link{display:flex;align-items:center;justify-content:flex-end;gap:6px;font-family:var(--body);font-size:12px;font-weight:700;letter-spacing:.04em;text-transform:uppercase;color:var(--g3);padding-top:5px;opacity:0;transition:opacity .25s,color .2s}
    .svc-row:hover .svc-link{opacity:1;color:var(--r)}
    .svc-link svg{width:13px;height:13px;transition:transform .2s}
    .svc-row:hover .svc-link svg{transform:translateX(4px)}
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
    .ind-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:0;border-top:1px solid var(--g2)}
    .ind-cell{padding:2rem 2.25rem;border-right:1px solid var(--g2);border-bottom:1px solid var(--g2);position:relative;overflow:hidden;transition:background .25s}
    .ind-cell:nth-child(4n){border-right:none}
    .ind-cell:nth-last-child(-n+4){border-bottom:none}
    .ind-cell:hover{background:var(--g0)}
    .ind-cell::before{content:'';position:absolute;left:0;top:0;bottom:0;width:0;background:var(--r);transition:width .3s var(--ease)}
    .ind-cell:hover::before{width:2px}
    .ind-name{font-family:var(--display);font-size:24px;letter-spacing:.04em;color:var(--k);margin-bottom:4px}
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
      .why-grid{grid-template-columns:1fr 1fr}
      .wc:nth-child(2){border-right:none}
      .wc:nth-child(3){border-top:1px solid var(--g2)}
      .ind-grid{grid-template-columns:1fr 1fr}
      .ind-cell:nth-child(2n){border-right:none}
      .ind-cell:nth-child(4n){border-right:1px solid var(--g2)}
      .ind-cell:nth-child(2n){border-right:none}
      .ben-grid{grid-template-columns:1fr}
      .ben-cell{border-right:none}
      .svc-row{grid-template-columns:48px 180px 1fr}
      .svc-link{display:none}
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
      .svc-row{grid-template-columns:1fr;padding:1.5rem 0;gap:.75rem}
      .svc-n{display:none}
      .svc-link{display:none}
      .svc-row::before{left:-1.25rem}
      .why-grid{grid-template-columns:1fr}
      .wc{border-right:none;border-bottom:1px solid var(--g2);padding:2rem 1.25rem}
      .wc:last-child{border-bottom:none}
      .wc:nth-child(2){border-right:none}
      .wc:nth-child(3){border-top:none}
      .ind-grid{grid-template-columns:1fr 1fr}
      .ind-cell:nth-child(2n){border-right:none}
      .ind-cell:nth-child(4n){border-right:none}
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
      <div class="ey-text">HMRC Compliance · UK iXBRL Filing Standards</div>
    </div>
    <h1 class="ih-h1">iXBRL Filing Requirements<br><em>in the UK</em></h1>
    <p class="ih-body">
      UK companies filing corporation tax returns with HMRC are generally required to submit accounts and tax computations in iXBRL format. HMRC introduced iXBRL requirements to <strong>standardise digital financial reporting and improve the efficiency of tax administration</strong> and financial data analysis.
    </p>
  </section>

  <!-- What are iXBRL Filing Requirements + Documents -->
  <div class="hmrc-block rv">
    <div class="hmrc-top">
      <div class="hmrc-left">
        <div class="hmrc-badge">
          <div class="hmrc-badge-dot"></div>
          <div class="hmrc-badge-text">Filing Requirements</div>
        </div>
        <h2 class="hmrc-h2">What are iXBRL<br><em>Filing Requirements?</em></h2>
        <p class="hmrc-desc">iXBRL filing requirements refer to the standards and rules governing how companies <strong>prepare, tag, validate, and submit financial statements</strong> and tax computations to HMRC. The filing process requires structured digital reporting, use of approved taxonomy tags, HMRC-compliant formatting, and electronic submission through approved software.</p>
      </div>
      <div class="hmrc-right">
        <p class="hmrc-body2">Documents commonly requiring iXBRL tagging as part of <strong>corporation tax submissions</strong>.</p>
        <div class="hmrc-sub-label">Required documents include</div>
      </div>
    </div>
    <div class="hmrc-grid-wrap">
      <div class="filing-grid">
        <div class="f-cell"><div class="f-n">01</div><div class="f-name">Statutory financial statements</div></div>
        <div class="f-cell"><div class="f-n">02</div><div class="f-name">Corporation tax computations</div></div>
        <div class="f-cell"><div class="f-n">03</div><div class="f-name">CT600 supporting documents</div></div>
        <div class="f-cell"><div class="f-n">04</div><div class="f-name">Consolidated financial statements</div></div>
        <div class="f-cell"><div class="f-n">05</div><div class="f-name">Supporting financial disclosures</div></div>
      </div>
    </div>
  </div>

  <!-- Who Must Comply -->
  <section class="sec sec-dark" style="padding:4rem 3rem">
    <div class="sec-row rv">
      <div>
        <div class="sec-label sec-label-w">Applicability</div>
        <h2 class="sec-h2 sec-h2-w">Who Must Comply with<br><em>iXBRL Requirements?</em></h2>
      </div>
      <p class="sec-body sec-body-w">Most UK companies filing corporation tax returns are required to comply with <strong>HMRC iXBRL filing standards</strong>.</p>
    </div>
    <div class="ind-grid rv" style="border-color:rgba(255,255,255,.08)">
      <div class="ind-cell" style="border-color:rgba(255,255,255,.07)"><div class="ind-name" style="color:var(--w)">Private limited companies</div></div>
      <div class="ind-cell" style="border-color:rgba(255,255,255,.07)"><div class="ind-name" style="color:var(--w)">SMEs</div></div>
      <div class="ind-cell" style="border-color:rgba(255,255,255,.07)"><div class="ind-name" style="color:var(--w)">Large corporations</div></div>
      <div class="ind-cell" style="border-color:rgba(255,255,255,.07)"><div class="ind-name" style="color:var(--w)">Group companies</div></div>
      <div class="ind-cell" style="border-color:rgba(255,255,255,.07)"><div class="ind-name" style="color:var(--w)">Subsidiaries</div></div>
      <div class="ind-cell" style="border-color:rgba(255,255,255,.07)"><div class="ind-name" style="color:var(--w)">Companies filing CT600 returns</div></div>
    </div>
  </section>

  <!-- Taxonomy + Validation -->
  <section class="sec">
    <div class="sec-row rv">
      <div>
        <div class="sec-label">Technical Standards</div>
        <h2 class="sec-h2">Taxonomy, Tagging &amp;<br><em>Validation Requirements.</em></h2>
      </div>
      <p class="sec-body">Key technical requirements for <strong>HMRC-compliant iXBRL filing</strong> including taxonomy standards and validation rules.</p>
    </div>
    <div class="svc-table rv">
      <div class="svc-row">
        <div class="svc-n">01</div>
        <div class="svc-name">HMRC Taxonomy<br>Standards</div>
        <div>
          <div class="svc-desc">iXBRL filing requires businesses to apply <strong>approved taxonomy tags</strong> to financial information, classifying data such as revenue, expenses, assets, liabilities, tax calculations, and equity disclosures.</div>
        </div>
        <div class="svc-link">Learn more <svg viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      </div>
      <div class="svc-row">
        <div class="svc-n">02</div>
        <div class="svc-name">Validation<br>Requirements</div>
        <div>
          <div class="svc-desc">Before submission, iXBRL files should be validated to identify <strong>missing mandatory tags, calculation inconsistencies, formatting errors</strong>, structural issues, and taxonomy mismatches.</div>
        </div>
        <div class="svc-link">Learn more <svg viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      </div>
      <div class="svc-row">
        <div class="svc-n">03</div>
        <div class="svc-name">Accurate Taxonomy<br>Selection</div>
        <div>
          <div class="svc-desc">Accurate taxonomy selection and tagging are important to ensure <strong>proper financial classification and HMRC compliance</strong> across all submitted financial information.</div>
        </div>
        <div class="svc-link">Learn more <svg viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      </div>
    </div>
  </section>

  <!-- Importance + Best Practices -->
  <section class="sec sec-alt">
    <div class="sec-row rv">
      <div>
        <div class="sec-label">Compliance Guidance</div>
        <h2 class="sec-h2">Importance &amp; Best Practices<br><em>for iXBRL Compliance.</em></h2>
      </div>
      <p class="sec-body">Accurate iXBRL filing and <strong>best practices to improve compliance and reduce filing risks</strong>.</p>
    </div>
    <div class="why-grid rv">
      <div class="wc">
        <div class="wc-ico"><svg viewBox="0 0 24 24"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg></div>
        <div class="wc-lbl">Importance</div>
        <div class="wc-title">Improve Compliance</div>
        <div class="wc-desc">Accurate iXBRL filing helps businesses <strong>improve compliance and reduce filing rejection risks</strong> while supporting efficient regulatory review.</div>
      </div>
      <div class="wc">
        <div class="wc-ico"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg></div>
        <div class="wc-lbl">Importance</div>
        <div class="wc-title">Avoid Delays and Penalties</div>
        <div class="wc-desc">Proper tagging and validation are important components of a successful filing process that <strong>avoids delays and compliance penalties</strong>.</div>
      </div>
      <div class="wc">
        <div class="wc-ico"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div>
        <div class="wc-lbl">Best Practice</div>
        <div class="wc-title">Prepare Statements Early</div>
        <div class="wc-desc">Preparing financial statements early and <strong>reviewing disclosures carefully</strong> reduces filing issues and allows time for thorough validation.</div>
      </div>
      <div class="wc">
        <div class="wc-ico"><svg viewBox="0 0 24 24"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg></div>
        <div class="wc-lbl">Best Practice</div>
        <div class="wc-title">Use Accurate Taxonomy Mapping</div>
        <div class="wc-desc">Using <strong>accurate taxonomy mapping and performing validation checks</strong> before submission improves reporting efficiency and reduces compliance risks.</div>
      </div>
      <div class="wc">
        <div class="wc-ico"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <div class="wc-lbl">Best Practice</div>
        <div class="wc-title">Work with iXBRL Specialists</div>
        <div class="wc-desc">Working with experienced iXBRL specialists helps businesses improve <strong>filing efficiency and reduce reporting risks</strong> across complex financial structures.</div>
      </div>
    </div>
  </section>

  <!-- Common Challenges + Why Choose XBR Tags -->
  <section class="sec">
    <div class="sec-row rv">
      <div>
        <div class="sec-label">Common Challenges</div>
        <h2 class="sec-h2">Common iXBRL<br><em>Compliance Challenges.</em></h2>
      </div>
      <p class="sec-body">Businesses may face several compliance challenges when meeting <strong>HMRC iXBRL filing requirements</strong>.</p>
    </div>
    <div class="ben-grid rv" style="background:var(--k);border:1px solid rgba(255,255,255,.07)">
      <div class="ben-cell">
        <div class="ben-title">Incorrect Taxonomy Selection</div>
        <div class="ben-desc">Applying the wrong taxonomy tags is a common source of <strong>validation failures and filing rejections</strong>.</div>
      </div>
      <div class="ben-cell">
        <div class="ben-title">Missing Disclosures</div>
        <div class="ben-desc">Omitting mandatory disclosures can result in <strong>incomplete submissions and HMRC compliance issues</strong>.</div>
      </div>
      <div class="ben-cell">
        <div class="ben-title">Validation Failures</div>
        <div class="ben-desc">Formatting inconsistencies and structural errors often cause <strong>validation failures that delay submission</strong>.</div>
      </div>
      <div class="ben-cell" style="border-bottom:none">
        <div class="ben-title">Complex Reporting Structures</div>
        <div class="ben-desc">Group entities and consolidated accounts require additional tagging care to ensure <strong>consistent financial formatting</strong> across all filings.</div>
      </div>
    </div>
    <div class="std-list rv" style="margin-top:3rem">
      <span class="std-tag">HMRC-compliant iXBRL tagging</span>
      <span class="std-tag">Financial statement conversion</span>
      <span class="std-tag">Validation support</span>
      <span class="std-tag">Technical compliance assistance</span>
      <span class="std-tag">Fast turnaround time</span>
    </div>
  </section>

  <!-- FAQ -->
  <section class="sec sec-alt">
    <div class="sec-row rv">
      <div>
        <div class="sec-label">FAQ</div>
        <h2 class="sec-h2">Frequently Asked<br><em>Questions.</em></h2>
      </div>
      <p class="sec-body">Everything you need to know about <strong>iXBRL filing requirements in the UK</strong>.</p>
    </div>
    <div class="faq-list rv">
      <div class="faq-item open" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">What are iXBRL filing requirements?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">iXBRL filing requirements refer to HMRC standards for preparing, tagging, validating, and submitting financial statements and tax computations digitally.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">Which documents require iXBRL tagging?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Statutory accounts, tax computations, CT600 supporting documents, and certain financial disclosures commonly require iXBRL formatting.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">Is validation mandatory for iXBRL filing?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Validation is an important part of the filing process to identify tagging errors, formatting inconsistencies, and missing disclosures before submission.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">Who must comply with HMRC iXBRL requirements?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Most UK companies filing corporation tax returns with HMRC are required to comply with iXBRL filing standards.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">Can incorrect tagging cause filing rejection?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Yes. Incorrect taxonomy tagging, missing disclosures, or validation failures may result in submission rejection or compliance issues.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">How can businesses improve iXBRL compliance?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Businesses can improve compliance through accurate tagging, proper validation, careful review, and professional iXBRL support services.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">Does XBR Tags provide iXBRL compliance support?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Yes. XBR Tags offers professional iXBRL tagging, validation, and filing support services for UK businesses and accounting firms.</p></div>
      </div>
    </div>
  </section>

  <!-- Contact CTA -->
  <section id="contact">
    <div class="rv">
      <div class="ct-h">Get Professional<br>iXBRL Compliance<em> Support.</em></div>
      <p class="ct-sub">XBR Tags provides reliable iXBRL tagging and filing support tailored for <strong>UK businesses and accounting professionals</strong>. Need help meeting HMRC iXBRL filing requirements? Contact us to discuss your filing requirements.</p>
    </div>
    <div class="ct-btns rv d2">
      <a href="./contact-us" class="ct-btn ct-btn-p">Get in touch <svg width="12" height="12" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="./ixbrl-tagging-services-uk" class="ct-btn ct-btn-g">View tagging services</a>
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