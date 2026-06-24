<?php
$page_title = "Who Should File iXBRL in the UK? | XBR Tags";
$page_meta = "Learn who needs to file iXBRL in the UK, HMRC filing requirements, CT600 iXBRL obligations, and which companies must submit accounts in iXBRL format.";
$page_keywords = "who should file iXBRL UK, who needs iXBRL filing, HMRC iXBRL requirements, iXBRL filing UK companies, CT600 iXBRL filing, UK corporation tax iXBRL";
$canonical_url = "https://xbrtags.com/who-should-file-ixbrl-uk";
$og_title = "Who Should File iXBRL in the UK? | XBR Tags";
$og_desc = "Understand which UK companies must file iXBRL accounts and tax computations with HMRC and learn key compliance requirements.";
$og_type = "website";
$og_url = "https://xbrtags.com/who-should-file-ixbrl-uk";
$twitter_title = "Who Should File iXBRL in the UK? | XBR Tags";
$twitter_desc = "Learn which companies are required to file iXBRL in the UK and understand HMRC filing obligations and compliance requirements.";
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
      "@id": "https://xbrtags.com/who-should-file-ixbrl-uk/#webpage",
      "url": "https://xbrtags.com/who-should-file-ixbrl-uk",
      "name": "Who Should File iXBRL in the UK?",
      "description": "Learn who needs to file iXBRL in the UK, HMRC filing requirements, CT600 iXBRL obligations, and which companies must submit accounts in iXBRL format.",
      "isPartOf": {
        "@id": "https://xbrtags.com/#website"
      },
      "about": {
        "@id": "https://xbrtags.com/#organization"
      },
      "inLanguage": "en-GB",
      "breadcrumb": {
        "@id": "https://xbrtags.com/who-should-file-ixbrl-uk/#breadcrumb"
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://xbrtags.com/who-should-file-ixbrl-uk/#breadcrumb",
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
          "name": "Who Should File iXBRL UK",
          "item": "https://xbrtags.com/who-should-file-ixbrl-uk"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://xbrtags.com/who-should-file-ixbrl-uk/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Who is required to file iXBRL in the UK?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most UK companies filing corporation tax returns with HMRC are required to submit accounts and tax computations in iXBRL format."
          }
        },
        {
          "@type": "Question",
          "name": "Do small companies need to file iXBRL?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Many SMEs and small companies are also required to comply with HMRC iXBRL filing requirements."
          }
        },
        {
          "@type": "Question",
          "name": "What documents require iXBRL filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Statutory accounts, corporation tax computations, CT600 supporting documents, and certain financial disclosures commonly require iXBRL tagging."
          }
        },
        {
          "@type": "Question",
          "name": "Is iXBRL mandatory for CT600 filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. HMRC generally requires CT600 supporting accounts and computations to be submitted in iXBRL format."
          }
        },
        {
          "@type": "Question",
          "name": "Can incorrect iXBRL filing lead to rejection?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Validation failures, missing disclosures, or incorrect tagging may result in filing rejection or compliance issues."
          }
        },
        {
          "@type": "Question",
          "name": "How can companies improve iXBRL compliance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Businesses can improve compliance through accurate tagging, proper validation, and professional iXBRL support services."
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
    .inner-hero{background:linear-gradient(to bottom,rgba(0,0,0,.85) 0%,rgba(0,0,0,.65) 40%,rgba(0,0,0,.85) 100%),url('./assets/img/who-should-file-ixbrl-uk.png') no-repeat center center;padding:4rem 3rem 3.5rem;position:relative;overflow:hidden;text-align:center;background-size:cover}
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
      <div class="ey-text">HMRC Compliance · UK iXBRL Filing Obligations</div>
    </div>
    <h1 class="ih-h1">Who Should File<br><em>iXBRL in the UK?</em></h1>
    <p class="ih-body">
      Many UK companies are required to file financial statements and corporation tax-related documents in iXBRL format as part of HMRC compliance requirements. Businesses submitting corporation tax returns to HMRC generally need to provide accounts and tax computations in iXBRL format using <strong>approved filing methods</strong>.
    </p>
  </section>

  <!-- What is iXBRL + Which Companies -->
  <div class="hmrc-block rv">
    <div class="hmrc-top">
      <div class="hmrc-left">
        <div class="hmrc-badge">
          <div class="hmrc-badge-dot"></div>
          <div class="hmrc-badge-text">iXBRL Filing</div>
        </div>
        <h2 class="hmrc-h2">Which Companies Must<br><em>File iXBRL in the UK?</em></h2>
        <p class="hmrc-desc">Most UK companies submitting corporation tax returns to HMRC are required to file accounts and tax computations in iXBRL format. iXBRL (Inline eXtensible Business Reporting Language) combines <strong>human-readable financial statements with machine-readable XBRL tags</strong>, enabling HMRC to process submissions more efficiently.</p>
      </div>
      <div class="hmrc-right">
        <p class="hmrc-body2">HMRC requires digital filing to ensure <strong>consistency and improve financial data analysis</strong> across all corporation tax submissions.</p>
        <div class="hmrc-sub-label">This commonly includes</div>
      </div>
    </div>
    <div class="hmrc-grid-wrap">
      <div class="filing-grid">
        <div class="f-cell"><div class="f-n">01</div><div class="f-name">Private limited companies</div></div>
        <div class="f-cell"><div class="f-n">02</div><div class="f-name">Public limited companies</div></div>
        <div class="f-cell"><div class="f-n">03</div><div class="f-name">Small and medium-sized enterprises</div></div>
        <div class="f-cell"><div class="f-n">04</div><div class="f-name">Large corporations</div></div>
        <div class="f-cell"><div class="f-n">05</div><div class="f-name">Group companies</div></div>
        <div class="f-cell"><div class="f-n">06</div><div class="f-name">Subsidiaries of multinational entities</div></div>
        <div class="f-cell"><div class="f-n">07</div><div class="f-name">Companies filing CT600 returns</div></div>
      </div>
    </div>
  </div>

  <!-- Small Companies + Group Companies + Documents -->
  <section class="sec">
    <div class="sec-row rv">
      <div>
        <div class="sec-label">Filing Obligations</div>
        <h2 class="sec-h2">Key iXBRL<br><em>Filing Requirements.</em></h2>
      </div>
      <p class="sec-body">Understanding which companies and documents fall under <strong>HMRC's iXBRL filing obligations</strong>.</p>
    </div>
    <div class="svc-table rv">
      <div class="svc-row">
        <div class="svc-n">01</div>
        <div class="svc-name">Small<br>Companies</div>
        <div>
          <div class="svc-desc">Many <strong>small companies and SMEs</strong> are also required to submit accounts and tax computations in iXBRL format when filing corporation tax returns with HMRC. Digital filing standards generally apply across most incorporated businesses.</div>
        </div>
        <div class="svc-link">Learn more <svg viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      </div>
      <div class="svc-row">
        <div class="svc-n">02</div>
        <div class="svc-name">Group<br>Companies</div>
        <div>
          <div class="svc-desc">Group companies and subsidiaries filing corporation tax returns are generally required to submit <strong>iXBRL-compliant financial information</strong> to HMRC. Complex group structures may require additional tagging for consolidated statements.</div>
        </div>
        <div class="svc-link">Learn more <svg viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      </div>
      <div class="svc-row">
        <div class="svc-n">03</div>
        <div class="svc-name">Statutory<br>Accounts</div>
        <div>
          <div class="svc-desc">Statutory financial statements submitted alongside CT600 returns must be <strong>tagged in iXBRL format</strong> in accordance with HMRC requirements.</div>
        </div>
        <div class="svc-link">Learn more <svg viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      </div>
      <div class="svc-row">
        <div class="svc-n">04</div>
        <div class="svc-name">Tax<br>Computations</div>
        <div>
          <div class="svc-desc">Corporation tax computations submitted with CT600 returns must also comply with <strong>HMRC iXBRL formatting requirements</strong>.</div>
        </div>
        <div class="svc-link">Learn more <svg viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      </div>
      <div class="svc-row">
        <div class="svc-n">05</div>
        <div class="svc-name">Consolidated<br>Reports</div>
        <div>
          <div class="svc-desc">Consolidated financial reports and <strong>certain disclosures submitted to HMRC</strong> commonly require iXBRL tagging as part of the CT600 filing package.</div>
        </div>
        <div class="svc-link">Learn more <svg viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      </div>
    </div>
  </section>

  <!-- Why HMRC Requires iXBRL -->
  <section class="sec sec-alt">
    <div class="sec-row rv">
      <div>
        <div class="sec-label">Why iXBRL</div>
        <h2 class="sec-h2">Why Does HMRC<br><em>Require iXBRL Filing?</em></h2>
      </div>
      <p class="sec-body">HMRC introduced iXBRL filing requirements to <strong>modernise financial reporting and improve digital tax administration</strong>.</p>
    </div>
    <div class="why-grid rv">
      <div class="wc">
        <div class="wc-ico"><svg viewBox="0 0 24 24"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg></div>
        <div class="wc-lbl">Consistency</div>
        <div class="wc-title">Standardised Reporting</div>
        <div class="wc-desc">iXBRL ensures <strong>standardised financial reporting</strong> across all UK corporation tax submissions.</div>
      </div>
      <div class="wc">
        <div class="wc-ico"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
        <div class="wc-lbl">Speed</div>
        <div class="wc-title">Faster Financial Analysis</div>
        <div class="wc-desc">Structured data enables <strong>faster analysis of financial information</strong> by HMRC and reduces manual processing.</div>
      </div>
      <div class="wc">
        <div class="wc-ico"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div class="wc-lbl">Monitoring</div>
        <div class="wc-title">Improved Compliance Monitoring</div>
        <div class="wc-desc">Digital filing helps HMRC improve <strong>compliance monitoring and reporting transparency</strong> across all filings.</div>
      </div>
    </div>
  </section>

  <!-- What Happens if Companies Do Not File + Common Challenges -->
  <section class="sec sec-dark" style="padding:4rem 3rem">
    <div class="sec-row rv">
      <div>
        <div class="sec-label sec-label-w">Non-Compliance</div>
        <h2 class="sec-h2 sec-h2-w">What Happens if Companies<br><em>Do Not File in iXBRL?</em></h2>
      </div>
      <p class="sec-body sec-body-w">Failure to comply with iXBRL filing requirements and <strong>common filing challenges businesses may encounter</strong>.</p>
    </div>
    <div class="ben-grid rv" style="background:transparent;border:1px solid rgba(255,255,255,.07)">
      <div class="ben-cell">
        <div class="ben-title">Filing Rejection</div>
        <div class="ben-desc">Incorrect or incomplete iXBRL submissions may be <strong>rejected by HMRC</strong>, requiring resubmission.</div>
      </div>
      <div class="ben-cell">
        <div class="ben-title">Submission Delays</div>
        <div class="ben-desc">Non-compliant filings can cause <strong>significant submission delays</strong> and impact tax deadlines.</div>
      </div>
      <div class="ben-cell">
        <div class="ben-title">Potential Penalties</div>
        <div class="ben-desc">Continued non-compliance may result in <strong>compliance issues and potential penalties</strong> from HMRC.</div>
      </div>
      <div class="ben-cell">
        <div class="ben-title">Common Filing Challenges</div>
        <div class="ben-desc">Businesses may face <strong>incorrect taxonomy selection, validation failures, missing mandatory disclosures</strong>, and complex reporting structures. Professional iXBRL support helps overcome these issues.</div>
      </div>
    </div>
  </section>

  <!-- Why Choose XBR Tags -->
  <section class="sec">
    <div class="sec-row rv">
      <div>
        <div class="sec-label">Why choose us</div>
        <h2 class="sec-h2">Why Choose<br><em>XBR Tags?</em></h2>
      </div>
      <p class="sec-body">Reliable iXBRL conversion and tagging support for <strong>UK companies, accounting firms, and finance professionals</strong>.</p>
    </div>
    <div class="std-list rv">
      <span class="std-tag">HMRC-compliant iXBRL tagging</span>
      <span class="std-tag">Financial statement conversion</span>
      <span class="std-tag">Validation assistance</span>
      <span class="std-tag">Technical filing support</span>
      <span class="std-tag">Fast turnaround times</span>
    </div>
  </section>

  <!-- FAQ -->
  <section class="sec sec-alt">
    <div class="sec-row rv">
      <div>
        <div class="sec-label">FAQ</div>
        <h2 class="sec-h2">Frequently Asked<br><em>Questions.</em></h2>
      </div>
      <p class="sec-body">Everything you need to know about <strong>who should file iXBRL in the UK</strong>.</p>
    </div>
    <div class="faq-list rv">
      <div class="faq-item open" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">Who is required to file iXBRL in the UK?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Most UK companies filing corporation tax returns with HMRC are required to submit accounts and tax computations in iXBRL format.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">Do small companies need to file iXBRL?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Yes. Many SMEs and small companies are also required to comply with HMRC iXBRL filing requirements.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">What documents require iXBRL filing?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Statutory accounts, corporation tax computations, CT600 supporting documents, and certain financial disclosures commonly require iXBRL tagging.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">Is iXBRL mandatory for CT600 filing?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Yes. HMRC generally requires CT600 supporting accounts and computations to be submitted in iXBRL format.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">Can incorrect iXBRL filing lead to rejection?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Yes. Validation failures, missing disclosures, or incorrect tagging may result in filing rejection or compliance issues.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">How can companies improve iXBRL compliance?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Businesses can improve compliance through accurate tagging, proper validation, and professional iXBRL support services.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">Does XBR Tags provide iXBRL filing support?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Yes. XBR Tags offers professional iXBRL tagging, validation, and filing support services for UK companies and accounting firms.</p></div>
      </div>
    </div>
  </section>

  <!-- Contact CTA -->
  <section id="contact">
    <div class="rv">
      <div class="ct-h">Get Professional<br>iXBRL Filing<em> Support.</em></div>
      <p class="ct-sub">XBR Tags provides professional iXBRL tagging and filing support tailored for <strong>UK businesses and accounting professionals</strong>. Need help understanding your iXBRL filing obligations? Contact us to discuss your requirements.</p>
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
