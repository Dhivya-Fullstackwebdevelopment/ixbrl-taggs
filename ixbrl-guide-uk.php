<?php
$page_title = "Complete iXBRL Guide for UK Companies | XBR Tags";
$page_meta = "Complete iXBRL guide for UK companies covering HMRC filing requirements, iXBRL tagging, filing deadlines, compliance process, and professional iXBRL services.";
$page_keywords = "iXBRL guide UK, what is iXBRL, HMRC iXBRL filing, iXBRL filing UK, iXBRL accounts filing, iXBRL tagging services, UK iXBRL requirements, CT600 iXBRL filing";
$canonical_url = "https://xbrtags.com/ixbrl-guide-uk";
$og_title = "Complete iXBRL Guide for UK Companies | XBR Tags";
$og_desc = "Learn everything about iXBRL filing, HMRC compliance, tagging requirements, filing deadlines, and iXBRL conversion services for UK businesses.";
$og_type = "website";
$og_url = "https://xbrtags.com/ixbrl-guide-uk";
$twitter_title = "Complete iXBRL Guide for UK Companies | XBR Tags";
$twitter_desc = "Comprehensive iXBRL guide covering UK filing requirements, tagging, compliance, and HMRC submissions.";
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
      "@id": "https://xbrtags.com/ixbrl-guide-uk/#webpage",
      "url": "https://xbrtags.com/ixbrl-guide-uk",
      "name": "Complete iXBRL Guide for UK Companies",
      "description": "Complete iXBRL guide for UK companies covering HMRC filing requirements, iXBRL tagging, filing deadlines, compliance process, and professional iXBRL services.",
      "isPartOf": { "@id": "https://xbrtags.com/#website" },
      "about": { "@id": "https://xbrtags.com/#organization" },
      "inLanguage": "en-GB",
      "breadcrumb": { "@id": "https://xbrtags.com/ixbrl-guide-uk/#breadcrumb" }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://xbrtags.com/ixbrl-guide-uk/#breadcrumb",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://xbrtags.com" },
        { "@type": "ListItem", "position": 2, "name": "iXBRL Guide UK", "item": "https://xbrtags.com/ixbrl-guide-uk" }
      ]
    },
    {
      "@type": "Service",
      "@id": "https://xbrtags.com/ixbrl-guide-uk/#service",
      "serviceType": "iXBRL Tagging Services",
      "provider": { "@id": "https://xbrtags.com/#organization" },
      "areaServed": { "@type": "Country", "name": "United Kingdom" },
      "description": "Professional iXBRL tagging, conversion, validation, and HMRC filing support services for UK companies."
    },
    {
      "@type": "FAQPage",
      "@id": "https://xbrtags.com/ixbrl-guide-uk/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is iXBRL?",
          "acceptedAnswer": { "@type": "Answer", "text": "iXBRL is a digital financial reporting format that combines readable financial statements with machine-readable XBRL tags for regulatory filing and compliance." }
        },
        {
          "@type": "Question",
          "name": "Who is required to file in iXBRL format in the UK?",
          "acceptedAnswer": { "@type": "Answer", "text": "Most UK companies submitting corporation tax returns to HMRC are required to file accounts and tax computations in iXBRL format." }
        },
        {
          "@type": "Question",
          "name": "Why is iXBRL filing mandatory?",
          "acceptedAnswer": { "@type": "Answer", "text": "HMRC introduced mandatory iXBRL filing to improve the accuracy, consistency, and efficiency of financial reporting submissions." }
        },
        {
          "@type": "Question",
          "name": "What documents need iXBRL tagging?",
          "acceptedAnswer": { "@type": "Answer", "text": "Documents commonly requiring iXBRL tagging include statutory financial statements, corporation tax computations, CT600 supporting accounts, and consolidated reports." }
        },
        {
          "@type": "Question",
          "name": "What are the iXBRL filing deadlines?",
          "acceptedAnswer": { "@type": "Answer", "text": "iXBRL filing deadlines generally align with HMRC corporation tax filing deadlines. Late submissions may result in penalties and compliance issues." }
        },
        {
          "@type": "Question",
          "name": "How do companies file iXBRL accounts?",
          "acceptedAnswer": { "@type": "Answer", "text": "Companies file iXBRL accounts by preparing financial statements, applying tags, validating data, generating compliant files, and submitting through approved filing software." }
        },
        {
          "@type": "Question",
          "name": "What are the benefits of outsourcing iXBRL tagging?",
          "acceptedAnswer": { "@type": "Answer", "text": "Professional iXBRL tagging services help improve accuracy, reduce filing risks, ensure HMRC compliance, and save internal resources." }
        },
        {
          "@type": "Question",
          "name": "Can incorrect iXBRL tagging cause filing rejection?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes. Incorrect tagging, missing disclosures, or validation failures may lead to submission errors or filing rejection." }
        },
        {
          "@type": "Question",
          "name": "Does XBR Tags provide HMRC-compliant iXBRL services?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes. XBR Tags provides professional iXBRL tagging, validation, and filing support tailored for UK businesses and accounting firms." }
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
    .inner-hero{background:linear-gradient(to bottom,rgba(0,0,0,.85) 0%,rgba(0,0,0,.65) 40%,rgba(0,0,0,.85) 100%),url('./assets/img/ixbrl-guide-uk.png') no-repeat center center;padding:4rem 3rem 3.5rem;position:relative;overflow:hidden;text-align:center;background-size:cover}
    .inner-hero::after{content:'';position:absolute;right:-60px;top:-60px;width:420px;height:420px;border-radius:50%;background:rgba(155,28,28,.06);pointer-events:none}
    .ih-breadcrumb{display:flex;align-items:center;gap:8px;font-family:var(--mono);font-size:14px;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.3);margin-bottom:2rem;font-weight:700}
    .ih-breadcrumb a{color:rgba(255,255,255,.3);text-decoration:none;transition:color .15s}
    .ih-breadcrumb a:hover{color:rgba(194,6,6,.8)}
    .ih-breadcrumb span{color:rgba(194,6,6,.8)}
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
    /* HMRC block */
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
    /* Service table */
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
    /* Process */
    .proc-grid{display:grid;grid-template-columns:repeat(5,1fr);gap:0;border-top:1px solid rgba(255,255,255,.08)}
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
    /* Why grid */
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
    /* Benefits */
    .ben-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:0;border-top:1px solid rgba(255,255,255,.08)}
    .ben-cell{padding:2.75rem 3rem;border-right:1px solid rgba(255,255,255,.07);border-bottom:1px solid rgba(255,255,255,.07)}
    .ben-cell:nth-child(2n){border-right:none}
    .ben-cell:nth-last-child(-n+2){border-bottom:none}
    .ben-title{font-family:var(--display);font-size:26px;letter-spacing:.04em;color:var(--w);margin-bottom:.75rem}
    .ben-desc{font-family:var(--body);font-size:20px;font-weight:400;line-height:1.8;color:rgb(255 255 255 / 86%)}
    .ben-desc strong{font-weight:800;color:#fff}
    /* Tags list */
    .std-list{list-style:none;display:flex;flex-wrap:wrap;gap:8px;margin-top:1.5rem}
    .std-tag{font-family:var(--mono);font-size:17px;letter-spacing:.1em;border:1px solid var(--g2);padding:6px 14px;color:var(--g4);font-weight:700;transition:border-color .18s,color .18s}
    .std-tag:hover{border-color:var(--r);color:var(--r)}
    /* FAQ */
    .faq-list{border-top:1px solid var(--g2)}
    .faq-item{border-bottom:1px solid var(--g2);cursor:pointer;overflow:hidden}
    .faq-hd{display:flex;align-items:center;justify-content:space-between;padding:1.5rem 0;transition:color .18s}
    .faq-item.open .faq-hd{color:var(--r)}
    .faq-q{font-size:23px;letter-spacing:.03em;color:var(--k);line-height:1.1;transition:color .18s}
    .faq-item.open .faq-q{color:var(--r)}
    .faq-tog{width:28px;height:28px;border:1px solid var(--g2);border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:all .3s var(--ease)}
    .faq-item.open .faq-tog{background:#fff;border-color:var(--r);transform:rotate(45deg)}
    .faq-tog svg{width:10px;height:10px;stroke:#000;transition:stroke .2s}
    .faq-item.open .faq-tog svg{stroke:var(--r)}
    .faq-bd{max-height:0;overflow:hidden;transition:max-height .4s var(--ease)}
    .faq-item.open .faq-bd{max-height:300px}
    .faq-a{font-family:var(--body);font-size:20px;font-weight:400;line-height:1.8;color:var(--g4);padding-bottom:1.5rem}
    /* Link grid */
    .link-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:0;border-top:1px solid var(--g2)}
    .lnk-cell{padding:1.75rem 2rem;border-right:1px solid var(--g2);border-bottom:1px solid var(--g2);text-decoration:none;position:relative;transition:background .22s,padding-left .22s;display:flex;align-items:center;justify-content:space-between;gap:1rem}
    .lnk-cell:nth-child(2n){border-right:none}
    .lnk-cell:nth-last-child(-n+2){border-bottom:none}
    .lnk-cell:hover{background:var(--g0);padding-left:2.5rem}
    .lnk-cell::before{content:'';position:absolute;left:0;top:0;bottom:0;width:0;background:var(--r);transition:width .3s var(--ease)}
    .lnk-cell:hover::before{width:2px}
    .lnk-name{font-size:22px;letter-spacing:.04em;color:var(--k)}
    .lnk-arr svg{width:14px;height:14px;stroke:var(--g3);stroke-width:1.2;fill:none;stroke-linecap:round;stroke-linejoin:round;transition:stroke .18s,transform .2s}
    .lnk-cell:hover .lnk-arr svg{stroke:var(--r);transform:translateX(4px)}
    /* Contact */
    #contact{background:var(--k);padding:4rem 3rem;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:3rem;border-top:1px solid rgba(255,255,255,.05)}
    .ct-h{font-family:var(--display);font-size:clamp(44px,6vw,80px);color:var(--w);line-height:.92;letter-spacing:.02em}
    .ct-h em{color:var(--r)}
    .ct-sub{font-family:var(--body);font-size:20px;font-weight:400;color:rgba(255,255,255,.81);max-width:840px;line-height:1.8;margin-top:.75rem}
    .ct-sub strong{font-weight:800;color:#fff}
    .ct-btns{display:flex;gap:12px;flex-wrap:wrap;align-items:center}
    .ct-btn{font-family:var(--display);font-size:17px;letter-spacing:.06em;padding:14px 30px;transition:all .18s;display:inline-flex;align-items:center;gap:8px;text-decoration:none}
    .ct-btn-p{background:var(--r);color:var(--w)}.ct-btn-p:hover{background:var(--r2)}
    .ct-btn-g{border:1px solid rgba(255,255,255,.15);color:rgba(255,255,255,.5)}.ct-btn-g:hover{border-color:rgba(255,255,255,.4);color:var(--w)}
    /* Responsive */
    @media(max-width:1100px){
      .proc-grid{grid-template-columns:1fr 1fr}
      .why-grid{grid-template-columns:1fr 1fr}
      .wc:nth-child(2){border-right:none}
      .wc:nth-child(3){border-top:1px solid var(--g2)}
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
      .inner-hero{padding:2.5rem 1.25rem 3rem}
      .ih-h1{font-size:clamp(44px,12vw,72px)}
      .ih-body{font-size:17px}
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
      .link-grid{grid-template-columns:1fr}
      .lnk-cell{border-right:none}
      .lnk-cell:nth-last-child(-n+2){border-bottom:1px solid var(--g2)}
      .lnk-cell:last-child{border-bottom:none}
      #contact{padding:3.5rem 1.25rem;flex-direction:column;align-items:flex-start;gap:2rem}
    }
    @media(max-width:480px){
      .filing-grid{grid-template-columns:1fr}
      #contact .ct-btns{flex-direction:column;align-items:flex-start;width:100%}
      .ct-btn{width:100%;justify-content:center}
    }
    @media(min-width:901px){
      .wrap{min-width:900px}
    }
  </style>

  <!-- HERO -->
  <section class="inner-hero">
    <div class="ih-eyebrow">
      <div class="ey-line"></div>
      <div class="ey-text">HMRC Recognised · UK iXBRL Filing Specialists</div>
    </div>
    <h1 class="ih-h1">Complete iXBRL Guide<br><em>for UK Companies</em></h1>
    <p class="ih-body">
      iXBRL (Inline eXtensible Business Reporting Language) is the standard digital reporting format used for submitting financial statements and tax-related reports in the UK. HMRC requires companies to submit corporation tax returns and statutory accounts in iXBRL format to ensure accurate, structured, and machine-readable financial reporting.
    </p>
    <p class="ih-body" style="margin-top:1rem">
      This iXBRL guide explains what iXBRL is, why it matters, who must file in iXBRL format, filing deadlines, and how businesses can simplify compliance through professional iXBRL tagging services.
    </p>
  </section>

  <!-- WHAT IS iXBRL + WHY IT MATTERS -->
  <div class="hmrc-block rv">
    <div class="hmrc-top">
      <div class="hmrc-left">
        <div class="hmrc-badge">
          <div class="hmrc-badge-dot"></div>
          <div class="hmrc-badge-text">What is iXBRL</div>
        </div>
        <h2 class="hmrc-h2">What is <em>iXBRL?</em></h2>
        <p class="hmrc-desc">iXBRL stands for <strong>Inline eXtensible Business Reporting Language</strong>. It combines human-readable financial statements with machine-readable tags, allowing regulators and tax authorities to automatically analyse and process financial data.</p>
        <p class="hmrc-desc" style="margin-top:1rem">The UK introduced mandatory iXBRL filing requirements for corporation tax submissions to improve transparency, standardisation, and efficiency in financial reporting.</p>
        <p class="hmrc-desc" style="margin-top:1rem">To understand the basics in detail, visit our <a href="./what-is-ixbrl-uk.php" style="color:var(--r);text-decoration:none;font-weight:700">What is iXBRL</a> page.</p>
      </div>
      <div class="hmrc-right">
        <p class="hmrc-body2">iXBRL enables faster validation, easier comparison of financial information, and improved regulatory compliance. It reduces manual data handling and helps authorities process submissions more efficiently.</p>
        <p class="hmrc-body2">For businesses, accurate iXBRL tagging helps avoid filing errors, submission rejections, and compliance issues with HMRC.</p>
        <div class="hmrc-sub-label">Documents that require iXBRL tagging</div>
      </div>
    </div>
    <div class="hmrc-grid-wrap">
      <div class="filing-grid">
        <div class="f-cell"><div class="f-n">01</div><div class="f-name">Statutory financial statements</div></div>
        <div class="f-cell"><div class="f-n">02</div><div class="f-name">Corporation tax computations</div></div>
        <div class="f-cell"><div class="f-n">03</div><div class="f-name">CT600 supporting accounts</div></div>
        <div class="f-cell"><div class="f-n">04</div><div class="f-name">Consolidated financial reports</div></div>
        <div class="f-cell"><div class="f-n">05</div><div class="f-name">Audit-related disclosures</div></div>
      </div>
    </div>
  </div>

  <!-- WHO SHOULD FILE -->
  <section class="sec">
    <div class="sec-row rv">
      <div>
        <div class="sec-label">Applicability</div>
        <h2 class="sec-h2">Who Should <em>File in iXBRL?</em></h2>
      </div>
      <p class="sec-body">Most UK companies submitting corporation tax returns to HMRC are required to file accounts and computations in iXBRL format. Read our detailed <a href="./who-should-file-ixbrl-uk.php" style="color:var(--r);font-weight:700;text-decoration:none">Who Should File iXBRL</a> page to understand applicability requirements.</p>
    </div>
    <div class="why-grid rv">
      <div class="wc">
        <div class="wc-ico"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-4 0v2"/><line x1="12" y1="12" x2="12" y2="16"/></svg></div>
        <div class="wc-lbl">Companies</div>
        <div class="wc-title">Limited Companies</div>
        <div class="wc-desc">All limited companies submitting corporation tax returns to HMRC are <strong>required to file in iXBRL format</strong>.</div>
      </div>
      <div class="wc">
        <div class="wc-ico"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg></div>
        <div class="wc-lbl">SMEs</div>
        <div class="wc-title">Small &amp; Medium Enterprises</div>
        <div class="wc-desc">SMEs filing <strong>CT600 returns</strong> must submit accompanying financial statements in Inline XBRL format.</div>
      </div>
      <div class="wc">
        <div class="wc-ico"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg></div>
        <div class="wc-lbl">Groups</div>
        <div class="wc-title">Large Corporations &amp; Subsidiaries</div>
        <div class="wc-desc">Large corporations and subsidiaries of multinational groups are required to file <strong>compliant iXBRL reports</strong>.</div>
      </div>
    </div>
  </section>

  <!-- HOW TO FILE — PROCESS -->
  <section class="sec sec-dark" style="padding:4rem 0">
    <div class="proc-head rv" style="padding:0 3rem;margin-bottom:0">
      <div class="sec-label sec-label-w">How to file</div>
      <h2 class="sec-h2 sec-h2-w">How to File <em>iXBRL Accounts.</em></h2>
      <p class="sec-body sec-body-w" style="margin-top:1rem">A <strong>five-step process</strong> for preparing and submitting HMRC-compliant iXBRL accounts.</p>
    </div>
    <div class="proc-grid rv" style="margin-top:3rem">
      <div class="proc-step d1">
        <div class="proc-n">01</div>
        <div class="proc-icon"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div>
        <div class="proc-title">Prepare Financial Statements</div>
        <div class="proc-desc">Gather and prepare your <strong>annual financial statements</strong> ready for iXBRL conversion.</div>
        <span class="proc-chip">Step 1</span>
      </div>
      <div class="proc-step d2">
        <div class="proc-n">02</div>
        <div class="proc-icon"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg></div>
        <div class="proc-title">Apply iXBRL Tags</div>
        <div class="proc-desc">Apply <strong>relevant iXBRL tags</strong> based on current HMRC taxonomy standards.</div>
        <span class="proc-chip">Step 2</span>
      </div>
      <div class="proc-step d3">
        <div class="proc-n">03</div>
        <div class="proc-icon"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg></div>
        <div class="proc-title">Validate Tagged Data</div>
        <div class="proc-desc">Run <strong>validation checks</strong> to ensure all tagged financial data meets HMRC requirements.</div>
        <span class="proc-chip">Step 3</span>
      </div>
      <div class="proc-step d4">
        <div class="proc-n">04</div>
        <div class="proc-icon"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
        <div class="proc-title">Generate iXBRL Files</div>
        <div class="proc-desc">Generate <strong>HMRC-compliant iXBRL files</strong> ready for submission.</div>
        <span class="proc-chip">Step 4</span>
      </div>
      <div class="proc-step" style="transition-delay:.56s">
        <div class="proc-n">05</div>
        <div class="proc-icon"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg></div>
        <div class="proc-title">Submit via Approved Software</div>
        <div class="proc-desc">Submit through <strong>approved filing software</strong> to HMRC.</div>
        <span class="proc-chip">Step 5</span>
      </div>
    </div>
  </section>

  <!-- FILING DEADLINES -->
  <section class="sec sec-alt">
    <div class="sec-row rv">
      <div>
        <div class="sec-label">Deadlines</div>
        <h2 class="sec-h2">iXBRL Filing <em>Deadlines.</em></h2>
      </div>
      <p class="sec-body">Companies must submit corporation tax returns and associated iXBRL accounts within HMRC's prescribed filing deadlines. Visit our <a href="./ixbrl-filing-deadline-uk.php" style="color:var(--r);font-weight:700;text-decoration:none">iXBRL Filing Deadline</a> page for detailed timelines.</p>
    </div>
    <div class="why-grid rv">
      <div class="wc">
        <div class="wc-ico"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
        <div class="wc-lbl">Penalties</div>
        <div class="wc-title">Financial Penalties</div>
        <div class="wc-desc">Late submissions may result in <strong>financial penalties</strong> imposed by HMRC.</div>
      </div>
      <div class="wc">
        <div class="wc-ico"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div>
        <div class="wc-lbl">Charges</div>
        <div class="wc-title">Interest Charges</div>
        <div class="wc-desc">Late filings attract <strong>interest charges</strong> that accrue on outstanding tax liabilities.</div>
      </div>
      <div class="wc">
        <div class="wc-ico"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></div>
        <div class="wc-lbl">Risk</div>
        <div class="wc-title">Compliance &amp; Rejection Risks</div>
        <div class="wc-desc">Late or incorrect filings create <strong>compliance risks and filing rejection issues</strong> with HMRC.</div>
      </div>
    </div>
  </section>

  <!-- BENEFITS OF PROFESSIONAL TAGGING -->
  <section class="sec">
    <div class="sec-row rv">
      <div>
        <div class="sec-label">Professional Services</div>
        <h2 class="sec-h2">Benefits of Professional <em>iXBRL Tagging Services.</em></h2>
      </div>
      <p class="sec-body">Professional iXBRL tagging providers help businesses reduce compliance risk and improve filing accuracy. Explore our <a href="./ixbrl-tagging-services.php" style="color:var(--r);font-weight:700;text-decoration:none">iXBRL Tagging Services</a> for professional assistance.</p>
    </div>
    <div class="ben-grid rv" style="background:var(--k);border:1px solid rgba(255,255,255,.07)">
      <div class="ben-cell">
        <div class="ben-title">HMRC-Compliant Tagging</div>
        <div class="ben-desc">Professionals ensure all tags align with <strong>current HMRC taxonomy standards</strong>.</div>
      </div>
      <div class="ben-cell">
        <div class="ben-title">Reduced Filing Errors</div>
        <div class="ben-desc">Expert review <strong>significantly reduces filing errors</strong> and submission rejections.</div>
      </div>
      <div class="ben-cell">
        <div class="ben-title">Faster Turnaround Time</div>
        <div class="ben-desc">Dedicated teams deliver <strong>faster conversion and filing cycles</strong> for your business.</div>
      </div>
      <div class="ben-cell">
        <div class="ben-title">Technical Validation Support</div>
        <div class="ben-desc">Every report undergoes <strong>technical validation</strong> before submission.</div>
      </div>
      <div class="ben-cell">
        <div class="ben-title">Complex Statement Support</div>
        <div class="ben-desc">Specialists handle <strong>complex financial statements</strong> and consolidated reports with ease.</div>
      </div>
      <div class="ben-cell" style="border-bottom:none">
        <div class="ben-title">Taxonomy Expertise</div>
        <div class="ben-desc">In-depth <strong>taxonomy knowledge</strong> ensures accurate and complete iXBRL tagging.</div>
      </div>
    </div>
  </section>

  <!-- COMMON FILING ERRORS -->
  <section class="sec sec-dark" style="padding:4rem 3rem">
    <div class="sec-row rv">
      <div>
        <div class="sec-label sec-label-w">Filing Errors</div>
        <h2 class="sec-h2 sec-h2-w">Common iXBRL <em>Filing Errors.</em></h2>
      </div>
      <p class="sec-body sec-body-w">Working with experienced iXBRL specialists can significantly reduce filing risks and improve submission accuracy. You may also find our <a href="./how-to-file-ixbrl-uk.php" style="color:rgba(194,6,6,.9);font-weight:700;text-decoration:none">How to File iXBRL</a> guide useful.</p>
    </div>
    <div class="why-grid rv" style="background:transparent;border-color:rgba(255,255,255,.08)">
      <div class="wc" style="border-color:rgba(255,255,255,.07)">
        <div class="wc-lbl" style="color:rgba(194,6,6,.9)">Tags</div>
        <div class="wc-title" style="color:var(--w)">Incorrect Tag Selection</div>
        <div class="wc-desc" style="color:rgb(255 255 255 / 86%)">Choosing the wrong taxonomy elements causes <strong style="color:#fff">validation failures and rejections</strong>.</div>
      </div>
      <div class="wc" style="border-color:rgba(255,255,255,.07)">
        <div class="wc-lbl" style="color:rgba(194,6,6,.9)">Disclosures</div>
        <div class="wc-title" style="color:var(--w)">Missing Mandatory Disclosures</div>
        <div class="wc-desc" style="color:rgb(255 255 255 / 86%)">Omitting required disclosures results in <strong style="color:#fff">incomplete and non-compliant submissions</strong>.</div>
      </div>
      <div class="wc" style="border-color:rgba(255,255,255,.07)">
        <div class="wc-lbl" style="color:rgba(194,6,6,.9)">Validation</div>
        <div class="wc-title" style="color:var(--w)">Validation Failures</div>
        <div class="wc-desc" style="color:rgb(255 255 255 / 86%)">Reports that fail validation checks cannot be <strong style="color:#fff">accepted by HMRC</strong>.</div>
      </div>
      <div class="wc" style="border-color:rgba(255,255,255,.07)">
        <div class="wc-lbl" style="color:rgba(194,6,6,.9)">Taxonomy</div>
        <div class="wc-title" style="color:var(--w)">Taxonomy Mismatches</div>
        <div class="wc-desc" style="color:rgb(255 255 255 / 86%)">Using incorrect taxonomy versions creates <strong style="color:#fff">structural mismatches</strong> in your filing.</div>
      </div>
      <div class="wc" style="border-color:rgba(255,255,255,.07)">
        <div class="wc-lbl" style="color:rgba(194,6,6,.9)">Format</div>
        <div class="wc-title" style="color:var(--w)">Formatting Inconsistencies</div>
        <div class="wc-desc" style="color:rgb(255 255 255 / 86%)">Inconsistent formatting across financial statements <strong style="color:#fff">reduces filing accuracy</strong>.</div>
      </div>
    </div>
  </section>

  <!-- WHY CHOOSE XBR TAGS -->
  <section class="sec sec-alt">
    <div class="sec-row rv">
      <div>
        <div class="sec-label">Why choose us</div>
        <h2 class="sec-h2">Why Choose <em>XBR Tags?</em></h2>
      </div>
      <p class="sec-body">XBR Tags provides reliable and accurate iXBRL tagging solutions for UK companies. Our specialists support businesses, accounting firms, and compliance teams with efficient iXBRL conversion and filing support.</p>
    </div>
    <div class="svc-table rv">
      <div class="svc-row">
        <div class="svc-n">01</div>
        <div class="svc-name">Experienced<br>Professionals</div>
        <div>
          <div class="svc-desc">Our team of <strong>experienced iXBRL professionals</strong> brings deep knowledge of HMRC taxonomy requirements and financial reporting standards.</div>
        </div>
        <div class="svc-link">Explore <svg viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      </div>
      <div class="svc-row">
        <div class="svc-n">02</div>
        <div class="svc-name">Fast Turnaround<br>Support</div>
        <div>
          <div class="svc-desc">We deliver <strong>fast turnaround support</strong> to help businesses and accounting firms meet HMRC filing deadlines without delay.</div>
        </div>
        <div class="svc-link">Explore <svg viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      </div>
      <div class="svc-row">
        <div class="svc-n">03</div>
        <div class="svc-name">HMRC-Compliant<br>Filing Process</div>
        <div>
          <div class="svc-desc">Every filing follows an <strong>HMRC-compliant process</strong> validated against current taxonomy and reporting standards.</div>
        </div>
        <div class="svc-link">Explore <svg viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      </div>
      <div class="svc-row">
        <div class="svc-n">04</div>
        <div class="svc-name">Affordable<br>Pricing</div>
        <div>
          <div class="svc-desc">We offer <strong>affordable pricing</strong> for businesses of all sizes, from single filings to bulk outsourced reporting projects.</div>
        </div>
        <div class="svc-link">Explore <svg viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      </div>
      <div class="svc-row">
        <div class="svc-n">05</div>
        <div class="svc-name">Dedicated Technical<br>Assistance</div>
        <div>
          <div class="svc-desc">Our team provides <strong>dedicated technical assistance</strong> throughout the iXBRL conversion and filing process.</div>
        </div>
        <div class="svc-link">Explore <svg viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      </div>
    </div>
  </section>

  <section class="sec">
    <div class="sec-row rv">
      <div>
        <div class="sec-label">Professional Support</div>
        <h2 class="sec-h2">Get Professional <em>iXBRL Support.</em></h2>
      </div>
      <p class="sec-body">Need help with iXBRL conversion or HMRC filing requirements?</p>
    </div>
    <div class="rv">
      <p class="sec-body" style="max-width:100%;margin-bottom:2.5rem"></p>
      <div style="border-left:3px solid var(--r);padding:1.25rem 1.5rem;background:var(--g0);border-radius:0 4px 4px 0">
        <p style="font-family:var(--body);font-size:21px;font-weight:600;line-height:1.7;color:var(--k);margin:0">
          XBR Tags helps businesses simplify financial reporting with accurate, compliant, and efficient iXBRL tagging services tailored to UK companies. Contact us today to discuss your iXBRL filing requirements or explore our <a href="./contact-us.php" style="color:var(--r);font-weight:700;text-decoration:none;border-bottom:1px solid rgba(155,28,28,.25)">Contact Page</a> for assistance.
        </p>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="sec sec-alt">
    <div class="sec-row rv">
      <div>
        <div class="sec-label">FAQ</div>
        <h2 class="sec-h2">Frequently Asked <em>Questions.</em></h2>
      </div>
      <p class="sec-body">Everything you need to know about <strong>iXBRL filing and HMRC compliance</strong> for UK companies.</p>
    </div>
    <div class="faq-list rv">
      <div class="faq-item open" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">What is iXBRL?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">iXBRL (Inline eXtensible Business Reporting Language) is a digital financial reporting format that combines readable financial statements with machine-readable XBRL tags for regulatory filing and compliance purposes.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">Who is required to file in iXBRL format in the UK?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Most UK companies submitting corporation tax returns to HMRC are required to file accounts and tax computations in iXBRL format. This includes limited companies, SMEs, and large corporations.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">Why is iXBRL filing mandatory?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">HMRC introduced mandatory iXBRL filing to improve the accuracy, consistency, and efficiency of financial reporting submissions. The format allows financial data to be processed automatically by regulatory systems.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">What documents need iXBRL tagging?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Documents that commonly require iXBRL tagging include statutory financial statements, corporation tax computations, CT600 supporting accounts, and consolidated financial reports.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">What are the iXBRL filing deadlines?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">iXBRL filing deadlines generally align with HMRC corporation tax filing deadlines. Companies must ensure accounts and tax computations are submitted within the prescribed due dates to avoid penalties.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">How do companies file iXBRL accounts?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">The filing process involves preparing financial statements, applying iXBRL tags, validating the tagged data, generating compliant files, and submitting them through approved filing software.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">What are the benefits of outsourcing iXBRL tagging?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Professional iXBRL tagging services help businesses improve accuracy, reduce filing risks, ensure HMRC compliance, and save internal resources.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">Can incorrect iXBRL tagging cause filing rejection?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Yes. Incorrect tagging, missing disclosures, or validation failures may lead to submission errors or filing rejection. Proper review and validation are important before submission.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">Does XBR Tags provide HMRC-compliant iXBRL services?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Yes. XBR Tags provides professional iXBRL tagging, validation, and filing support tailored for UK businesses and accounting firms to help ensure HMRC compliance.</p></div>
      </div>
    </div>
  </section>

  <!-- CONTACT CTA -->
  <section id="contact">
    <div class="rv">
      <div class="ct-h">Get Professional<br>iXBRL Support<em>.</em></div>
      <p class="ct-sub">XBR Tags helps businesses simplify financial reporting with accurate, compliant, and efficient iXBRL tagging services tailored to UK companies. Contact us today to discuss your iXBRL filing requirements.</p>
    </div>
    <div class="ct-btns rv d2">
      <a href="./contact-us.php" class="ct-btn ct-btn-p">Contact us today <svg width="12" height="12" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="./ixbrl-tagging-services.php" class="ct-btn ct-btn-g">Explore iXBRL Services</a>
    </div>
  </section>

  <?php include 'footer.php'; ?>
</div>
<script>
window.addEventListener('scroll',function(){
  var nav=document.getElementById('nav');
  if(nav)nav.classList.toggle('scrolled',window.scrollY>10);
},{passive:true});
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