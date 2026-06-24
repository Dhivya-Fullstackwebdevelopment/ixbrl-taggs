 <?php

$page_title = "iXBRL Tagging Services UK | HMRC Compliant XBRL Filing Experts | XbrTags";

$page_meta = "Professional iXBRL tagging services in the UK for HMRC CT600 filing, Companies House reporting, IFRS financial statements, ESEF filing, and outsourced XBRL conversion support.";

$page_keywords = "iXBRL Tagging Services UK, HMRC iXBRL Filing, XBRL Filing Services UK, CT600 iXBRL Filing, Inline XBRL Services UK, Companies House iXBRL Filing, Outsourced iXBRL Tagging UK, IFRS XBRL Tagging";

$canonical_url = "https://www.xbrtags.com/ixbrl-tagging-services-uk/";

$og_title = "iXBRL Tagging Services UK | XbrTags";

$og_desc = "Professional iXBRL tagging services in the UK for HMRC CT600 filing, Companies House reporting, IFRS financial statements, ESEF filing, and outsourced XBRL conversion support.";

$og_type = "website";

$og_url = "https://www.xbrtags.com/ixbrl-tagging-services-uk/";

$twitter_title = "iXBRL Tagging Services UK | XbrTags";

$twitter_desc = "Professional outsourced iXBRL tagging and HMRC filing support across the UK.";

$schema = '
{ 

  "@context": "https://schema.org", 

  "@graph": [ 

    { 

      "@type": "Service", 

      "serviceType": "iXBRL Tagging Services UK", 

      "provider": { 

        "@type": "Organization", 

        "name": "XbrTags", 

        "url": "https://www.xbrtags.com" 

      }, 

      "areaServed": { 

        "@type": "Country", 

        "name": "United Kingdom" 

      }, 

      "description": "Professional iXBRL tagging services for HMRC CT600 filing, Companies House reporting, IFRS financial statements, and ESEF filing in the UK." 

    }, 

    { 

      "@type": "FAQPage", 

      "mainEntity": [ 

        { 

          "@type": "Question", 

          "name": "What is iXBRL?", 

          "acceptedAnswer": { 

            "@type": "Answer", 

            "text": "iXBRL or Inline eXtensible Business Reporting Language is a digital reporting format used for structured financial filings with HMRC and Companies House. " 

          } 

        }, 

        { 

          "@type": "Question", 

          "name": "Who needs iXBRL filing in the UK?", 

          "acceptedAnswer": { 

            "@type": "Answer", 

            "text": "Most companies filing CT600 corporation tax returns with HMRC must submit financial statements in iXBRL format. " 

          } 

        }, 

        { 

          "@type": "Question", 

          "name": "How long does iXBRL tagging take?", 

          "acceptedAnswer": { 

            "@type": "Answer", 

            "text": "Most projects are completed within 24 to 48 hours depending on document complexity and reporting requirements. " 

          } 

        },
        { 

          "@type": "Question", 

          "name": "Do you support IFRS and UK GAAP reporting?", 

          "acceptedAnswer": { 

            "@type": "Answer", 

            "text": "Yes. XbrTags supports IFRS, UK GAAP, FRS 101, FRS 102, and ESEF reporting standards.  " 

          } 

        },
        { 

          "@type": "Question", 

          "name": "Can accounting firms outsource bulk iXBRL projects?", 

          "acceptedAnswer": { 

            "@type": "Answer", 

            "text": "Yes. We provide scalable outsourced iXBRL support for accounting firms handling multiple client filings.  " 

          } 

        },
        { 

          "@type": "Question", 

          "name": "Do you validate reports before delivery?", 

          "acceptedAnswer": { 

            "@type": "Answer", 

            "text": "Yes. Every report undergoes technical validation and expert quality review.  " 

          } 

        },
        { 

          "@type": "Question", 

          "name": "Do you support dormant company filings?", 

          "acceptedAnswer": { 

            "@type": "Answer", 

            "text": "Yes. We provide affordable iXBRL tagging services for dormant companies and small businesses.  " 

          } 

        },
        { 

          "@type": "Question", 

          "name": "Is my financial data secure?", 

          "acceptedAnswer": { 

            "@type": "Answer", 

            "text": "Yes. We maintain secure document handling procedures and confidentiality standards throughout every engagement.  " 

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

    

    /* ═══ PAGE HERO (inner) ═══ */
    .inner-hero {
  background:
    linear-gradient(
      to bottom,
      rgba(0, 0, 0, 0.85) 0%,
      rgba(0, 0, 0, 0.65) 40%,
      rgba(0, 0, 0, 0.85) 100%
    ),
    url('./assets/img/ixbrl-tagging-services-uk.png') no-repeat center center;

  padding: 4rem 3rem 3.5rem;
  position: relative;
  overflow: hidden;
  text-align: center;
  background-size: cover;
}
    .inner-hero::after{
      content:'';position:absolute;right:-60px;top:-60px;
      width:420px;height:420px;border-radius:50%;
      background:rgba(155,28,28,.06);pointer-events:none;
    }
    .ih-breadcrumb{
      display:flex;align-items:center;gap:8px;
      font-family:var(--mono);font-size:14px;letter-spacing:.1em;text-transform:uppercase;
      color:rgba(255,255,255,.3);margin-bottom:2rem;font-weight:700;
    }
    .ih-breadcrumb a{color:rgba(255,255,255,.3);text-decoration:none;transition:color .15s}
    .ih-breadcrumb a:hover{color:rgba(194,6,6,.8)}
    .ih-breadcrumb span{color:rgba(194,6,6,.8)}
    .ih-eyebrow{display:flex;align-items:center;justify-content:center;gap:12px;margin-bottom:1.5rem}
    .ey-line{width:28px;height:1.5px;background:var(--r);flex-shrink:0}
    .ey-text{font-family:var(--mono);font-size:14px;letter-spacing:.14em;text-transform:uppercase;color:rgb(219 9 9 / 90%);font-weight:700}
    .ih-h1{
      font-family:var(--display);font-size:clamp(54px,7vw,100px);
      line-height:.92;letter-spacing:.02em;color:var(--w);margin-bottom:1.5rem;
    }
    .ih-h1 em{color:#bb0000;font-style:normal}
    .ih-body{
  font-family:var(--body);font-size:17px;font-weight:400;line-height:1.75;
  color:rgba(255, 255, 255, 0.87);max-width:680px;margin:0 auto 2rem;
}
    .ih-body strong{font-weight:800;color:rgba(255,255,255,.9)}
    .ih-links{display:flex;flex-wrap:wrap;gap:10px;justify-content:center}
    .ih-link{
      font-family:var(--mono);font-size:10.5px;letter-spacing:.1em;text-transform:uppercase;font-weight:700;
      border:1px solid rgba(255,255,255,.1);padding:7px 14px;color:rgba(255,255,255,.5);
      text-decoration:none;transition:border-color .18s,color .18s;
    }
    .ih-link:hover{border-color:rgba(194,6,6,.6);color:rgba(194,6,6,.85)}
    .ih-link.active{border-color:var(--r);color:var(--r)}

    /* ═══ SHARED SECTION STYLES ═══ */
    .sec{padding:4rem 3rem;background:var(--w)}
    .sec-alt{background:var(--g1)}
    .sec-dark{background:var(--k)}
    .sec-label{
      font-family:var(--mono);font-size:14px;font-weight:700;letter-spacing:.18em;text-transform:uppercase;color:var(--r);
      display:flex;align-items:center;gap:10px;margin-bottom:1.25rem;
    }
    .sec-label::before{content:'';width:22px;height:1.5px;background:var(--r);flex-shrink:0}
    .sec-label-w{color:rgb(194 12 12 / 91%)}.sec-label-w::before{background:rgba(193,4,4,.948)}
    .sec-h2{font-family:var(--display);font-size:clamp(40px,5vw,72px);line-height:.92;letter-spacing:.02em;color:var(--k);margin-bottom:1.25rem}
    .sec-h2 em{color:var(--r);font-style:normal}
    .sec-h2-w{color:var(--w)}
    .sec-body{font-family:var(--body);font-size:19px;font-weight:400;line-height:1.8;color:var(--g4);max-width:520px}
    .sec-body strong{font-weight:800;color:var(--k)}
    .sec-body-w{color:rgba(255, 255, 255, 0.87)}
    .sec-body-w strong{color:#fff}
    .sec-row{display:flex;justify-content:space-between;align-items:flex-end;gap:3rem;flex-wrap:wrap;margin-bottom:3.5rem}

    /* scroll reveal */
    .rv{opacity:0;transform:translateY(28px);transition:opacity .85s var(--ease),transform .85s var(--ease)}
    .rv.in{opacity:1;transform:none}
    .d1{transition-delay:.1s}.d2{transition-delay:.2s}.d3{transition-delay:.32s}.d4{transition-delay:.44s}

    /* ═══ ENHANCED INTRO BLOCK ═══ */
    .intro-block{background:var(--w);border-bottom:1px solid var(--g2)}
    .intro-accent-bar{height:3px;background:linear-gradient(90deg,var(--r) 0%,#c0392b 50%,transparent 100%)}
    .intro-grid{display:grid;gap:0}
    .intro-left{
      padding:3.5rem 3.5rem 3.5rem 3rem;
      border-right:1px solid var(--g2);
      position:relative;
    }
    .intro-left::before{
      content:'';position:absolute;left:0;top:0;bottom:0;width:3px;background:var(--r);
    }
    .intro-eyebrow{
      display:flex;align-items:center;gap:10px;margin-bottom:1.75rem;
    }
    .intro-eyebrow::before{content:'';width:22px;height:1.5px;background:var(--r);flex-shrink:0}
    .intro-eyebrow span{
      font-family:var(--mono);font-size:14px;letter-spacing:.16em;
      text-transform:uppercase;color:var(--r);font-weight:700;
    }
    .intro-body-text{
      font-family:var(--body);font-size:19px;font-weight:400;line-height:1.85;color:var(--g4);
    }
    .intro-body-text p{margin-bottom:1.1rem}
    .intro-body-text p:last-child{margin-bottom:0}
    .intro-body-text strong{font-weight:800;color:var(--k)}
    .intro-right{
      background:var(--k);
      padding:3.5rem 3rem;
      position:relative;overflow:hidden;
    }
    .intro-right::after{
      content:'iXBRL';
      position:absolute;right:-1rem;bottom:-2rem;
      font-family:var(--display);font-size:120px;
      color:rgba(255,255,255,.03);letter-spacing:.02em;
      pointer-events:none;white-space:nowrap;
    }
    .aside-lbl{
      font-family:var(--mono);font-size:14px;letter-spacing:.16em;
      text-transform:uppercase;color:rgba(155,28,28,.9);
      font-weight:700;margin-bottom:1.5rem;
      display:flex;align-items:center;gap:8px;
    }
    .aside-lbl::before{content:'';width:16px;height:1px;background:rgba(155,28,28,.7);flex-shrink:0}
    .aside-items{display:flex;flex-direction:column;gap:0}
    .aside-item{
      display:flex;align-items:center;gap:14px;
      padding:.85rem 0;border-bottom:1px solid rgba(255,255,255,.06);
      position:relative;
      transition:padding-left .2s;
    }
    .aside-item:last-child{border-bottom:none}
    .aside-item:hover{padding-left:6px}
    .aside-dot{
      width:5px;height:5px;border-radius:50%;background:var(--r);
      flex-shrink:0;
    }
    .aside-text{
      font-family:var(--body);font-size:17px;font-weight:500;
      color:rgba(255,255,255,.7);line-height:1.4;
      transition:color .18s;
    }
    .aside-item:hover .aside-text{color:rgba(255,255,255,.95)}
    .aside-arrow{
      margin-left:auto;flex-shrink:0;opacity:0;
      font-family:var(--mono);font-size:14px;color:rgba(155,28,28,.8);
      transition:opacity .2s;
    }
    .aside-item:hover .aside-arrow{opacity:1}

    /* ═══ ENHANCED HMRC SECTION ═══ */
    .hmrc-block{background:var(--g0);border-bottom:1px solid var(--g2)}
    .hmrc-top{
      display:grid;grid-template-columns:1.2fr 1fr;
      gap:0;border-bottom:1px solid var(--g2);
    }
    .hmrc-left{padding:3.5rem 3.5rem 3.5rem 3rem;border-right:1px solid var(--g2)}
    .hmrc-badge{
      display:inline-flex;align-items:center;gap:7px;
      background:var(--k);padding:5px 12px 5px 8px;
      margin-bottom:1.75rem;
    }
    .hmrc-badge-dot{width:6px;height:6px;border-radius:50%;background:var(--r);flex-shrink:0}
    .hmrc-badge-text{
      font-family:var(--mono);font-size:14px;letter-spacing:.14em;
      text-transform:uppercase;color:#fff;font-weight:700;
    }
    .hmrc-h2{
      font-family:var(--display);font-size:clamp(40px,5vw,64px);line-height:.92;
      letter-spacing:.02em;color:var(--k);margin-bottom:1.5rem;
    }
    .hmrc-h2 em{color:var(--r);font-style:normal}
    .hmrc-desc{
      font-family:var(--body);font-size:19px;font-weight:400;
      line-height:1.8;color:var(--g4);
    }
    .hmrc-desc strong{font-weight:800;color:var(--k)}
    .hmrc-right{padding:3.5rem 3rem;display:flex;flex-direction:column;justify-content:center}
    .hmrc-body2{
      font-family:var(--body);font-size:17px;font-weight:400;
      line-height:1.8;color:var(--g4);margin-bottom:2rem;
    }
    .hmrc-body2 strong{font-weight:800;color:var(--k)}
    .hmrc-sub-label{
      display:flex;align-items:center;gap:10px;
      font-family:var(--mono);font-size:14px;font-weight:700;letter-spacing:.18em;
      text-transform:uppercase;color:var(--r);
    }
    .hmrc-sub-label::before{content:'';width:22px;height:1.5px;background:var(--r);flex-shrink:0}
    .hmrc-grid-wrap{padding:0 3rem 3rem}
    .filing-grid{
      display:grid;grid-template-columns:repeat(5,1fr);
      gap:0;border-top:1px solid var(--g2);border-left:1px solid var(--g2);
    }
    .f-cell{
      padding:1.5rem 1.5rem 1.75rem;
      border-right:1px solid var(--g2);border-bottom:1px solid var(--g2);
      position:relative;overflow:hidden;
      transition:background .25s;
      cursor:default;
    }
    .f-cell:hover{background:var(--w)}
    .f-cell::after{
      content:'';position:absolute;bottom:0;left:0;right:0;
      height:0;background:var(--r);
      transition:height .28s var(--ease);
    }
    .f-cell:hover::after{height:2px}
    .f-n{
      font-family:var(--mono);font-size:20px;letter-spacing:.1em;
      text-transform:uppercase;color:var(--g3);font-weight:700;
      margin-bottom:.85rem;
    }
    .f-name{
      font-family:var(--display);font-size:24px;letter-spacing:.03em;
      color:var(--k);line-height:1.2;
    }

    /* ═══ SERVICES TABLE ═══ */
    .svc-table{border-top:1px solid var(--g2)}
    .svc-row{
      display:grid;grid-template-columns:56px 240px 1fr 160px;
      gap:2.5rem;align-items:start;padding:2.25rem 0;border-bottom:1px solid var(--g2);
      cursor:pointer;position:relative;transition:background .25s,padding-left .25s;
    }
    .svc-row::before{content:'';position:absolute;left:-3rem;top:0;bottom:0;width:0;background:var(--r);transition:width .35s var(--ease)}
    .svc-row:hover::before{width:3px}
    .svc-row:hover{background:var(--g0);padding-left:.5rem}
    .svc-n{font-family:var(--mono);font-size:17px;color:var(--g3);letter-spacing:.08em;padding-top:5px;font-weight:700}
    .svc-name{font-family:var(--display);font-size:28px;letter-spacing:.02em;color:var(--k);line-height:1.1}
    .svc-desc{font-family:var(--body);font-size:21px;font-weight:400;line-height:1.8;color:var(--g4)}
    .svc-desc strong{font-weight:800;color:var(--k)}
    .svc-link{
      display:flex;align-items:center;justify-content:flex-end;gap:6px;
      font-family:var(--body);font-size:12px;font-weight:700;letter-spacing:.04em;text-transform:uppercase;
      color:var(--g3);padding-top:5px;opacity:0;transition:opacity .25s,color .2s;
    }
    .svc-row:hover .svc-link{opacity:1;color:var(--r)}
    .svc-link svg{width:13px;height:13px;transition:transform .2s}
    .svc-row:hover .svc-link svg{transform:translateX(4px)}

    /* ═══ PROCESS ═══ */
    .proc-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:0;border-top:1px solid rgba(255,255,255,.08)}
    .proc-step{
      padding:3rem 2.5rem 3.5rem;border-right:1px solid rgba(255,255,255,.07);
      position:relative;overflow:hidden;transition:background .3s;
    }
    .proc-step:last-child{border-right:none}
    .proc-step::after{content:'';position:absolute;top:0;left:0;right:0;height:0;background:var(--r);opacity:.06;transition:height .35s var(--ease)}
    .proc-step:hover::after{height:100%}
    .proc-n{font-family:var(--display);font-size:80px;color:rgba(255, 255, 255, 0.64);line-height:1;letter-spacing:.02em;margin-bottom:1.5rem}
    .proc-icon{width:43px;height:43px;border:1px solid rgba(255, 255, 255, 0.71);display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem}
    .proc-icon svg{width:16px;height:16px;stroke:rgba(255, 255, 255, 0.95);stroke-width:2.5;fill:none;stroke-linecap:round;stroke-linejoin:round}
    .proc-title{font-family:var(--display);font-size:20px;letter-spacing:.04em;color:var(--w);margin-bottom:.75rem;line-height:1.1}
    .proc-desc{font-family:var(--body);font-size:17px;font-weight:400;line-height:1.8;color:rgba(255, 255, 255, 0.97)}
    .proc-desc strong{font-weight:800;color:#fff}
    .proc-chip{display:inline-block;margin-top:1.25rem;font-family:var(--mono);font-size:14px;letter-spacing:.1em;border:1px solid rgba(194,8,8,.5);color:rgba(194,6,6,.9);padding:4px 10px;text-transform:uppercase;font-weight:700}

    /* ═══ WHY US GRID ═══ */
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

    /* ═══ INDUSTRIES ═══ */
    .ind-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:0;border-top:1px solid var(--g2)}
    .ind-cell{
      padding:2rem 2.25rem;border-right:1px solid var(--g2);border-bottom:1px solid var(--g2);
      position:relative;overflow:hidden;transition:background .25s;
    }
    .ind-cell:nth-child(4n){border-right:none}
    .ind-cell:nth-last-child(-n+4){border-bottom:none}
    .ind-cell:hover{background:var(--g0)}
    .ind-cell::before{content:'';position:absolute;left:0;top:0;bottom:0;width:0;background:var(--r);transition:width .3s var(--ease)}
    .ind-cell:hover::before{width:2px}
    .ind-name{font-family:var(--display);font-size:24px;letter-spacing:.04em;color:var(--k);margin-bottom:4px}

    /* ═══ BENEFITS ═══ */
    .ben-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:0;border-top:1px solid rgba(255,255,255,.08)}
    .ben-cell{padding:2.75rem 3rem;border-right:1px solid rgba(255,255,255,.07);border-bottom:1px solid rgba(255,255,255,.07)}
    .ben-cell:nth-child(2n){border-right:none}
    .ben-cell:nth-last-child(-n+2){border-bottom:none}
    .ben-title{font-family:var(--display);font-size:26px;letter-spacing:.04em;color:var(--w);margin-bottom:.75rem}
    .ben-desc{font-family:var(--body);font-size:20px;font-weight:400;line-height:1.8;color:rgb(255 255 255 / 86%)}
    .ben-desc strong{font-weight:800;color:#fff}

    /* ═══ EXPERTISE / STANDARDS ═══ */
    .std-list{list-style:none;display:flex;flex-wrap:wrap;gap:8px;margin-top:1.5rem}
    .std-tag{font-family:var(--mono);font-size:17px;letter-spacing:.1em;border:1px solid var(--g2);padding:6px 14px;color:var(--g4);font-weight:700;transition:border-color .18s,color .18s}
    .std-tag:hover{border-color:var(--r);color:var(--r)}

    /* ═══ FAQ ═══ */
    .faq-list{border-top:1px solid var(--g2)}
    .faq-item{border-bottom:1px solid var(--g2);cursor:pointer;overflow:hidden}
    .faq-hd{
      display:flex;align-items:center;justify-content:space-between;
      padding:1.5rem 0;transition:color .18s;
    }
    .faq-item.open .faq-hd{color:var(--r)}
    .faq-q{font-family:var(--display);font-size:23px;letter-spacing:.03em;color:var(--k);line-height:1.1;transition:color .18s}
    .faq-item.open .faq-q{color:var(--r)}
    .faq-tog{
      width:28px;height:28px;border:1px solid var(--g2);border-radius:50%;
      display:flex;align-items:center;justify-content:center;flex-shrink:0;
      transition:all .3s var(--ease);
    }
    .faq-item.open .faq-tog{background:#fff;border-color:var(--r);transform:rotate(45deg)}
    .faq-tog svg{width:10px;height:10px;stroke:#fff !important;transition:stroke .2s}
    .faq-item.open .faq-tog svg{stroke:#fff}
    .faq-bd{max-height:0;overflow:hidden;transition:max-height .4s var(--ease)}
    .faq-item.open .faq-bd{max-height:200px}
    .faq-a{font-family:var(--body);font-size:20px;font-weight:400;line-height:1.8;color:var(--g4);padding-bottom:1.5rem}

    /* ═══ INTERNAL LINKS ═══ */
    .link-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:0;border-top:1px solid var(--g2)}
    .lnk-cell{
      padding:1.75rem 2rem;border-right:1px solid var(--g2);border-bottom:1px solid var(--g2);
      text-decoration:none;position:relative;transition:background .22s,padding-left .22s;display:flex;align-items:center;justify-content:space-between;gap:1rem;
    }
    .lnk-cell:nth-child(2n){border-right:none}
    .lnk-cell:nth-last-child(-n+2){border-bottom:none}
    .lnk-cell:hover{background:var(--g0);padding-left:2.5rem}
    .lnk-cell::before{content:'';position:absolute;left:0;top:0;bottom:0;width:0;background:var(--r);transition:width .3s var(--ease)}
    .lnk-cell:hover::before{width:2px}
    .lnk-name{font-family:var(--display);font-size:19px;letter-spacing:.04em;color:var(--k)}
    .lnk-arr svg{width:14px;height:14px;stroke:var(--g3);stroke-width:1.2;fill:none;stroke-linecap:round;stroke-linejoin:round;transition:stroke .18s,transform .2s}
    .lnk-cell:hover .lnk-arr svg{stroke:var(--r);transform:translateX(4px)}

    /* ═══ CONTACT ═══ */
    #contact{
      background:var(--k);padding:4rem 3rem;
      display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:3rem;
      border-top:1px solid rgba(255,255,255,.05);
    }
    .ct-h{font-family:var(--display);font-size:clamp(44px,6vw,80px);color:var(--w);line-height:.92;letter-spacing:.02em}
    .ct-h em{color:var(--r)}
    .ct-sub{font-family:var(--body);font-size:20px;font-weight:400;color:rgba(255, 255, 255, 0.81);max-width:440px;line-height:1.8;margin-top:.75rem}
    .ct-sub strong{font-weight:800;color:#fff}
    .ct-btns{display:flex;gap:12px;flex-wrap:wrap;align-items:center}
    .ct-btn{font-family:var(--display);font-size:17px;letter-spacing:.06em;padding:14px 30px;transition:all .18s;display:inline-flex;align-items:center;gap:8px;text-decoration:none}
    .ct-btn-p{background:var(--r);color:var(--w)}.ct-btn-p:hover{background:var(--r2)}
    .ct-btn-g{border:1px solid rgba(255,255,255,.15);color:rgba(255,255,255,.5)}.ct-btn-g:hover{border-color:rgba(255,255,255,.4);color:var(--w)}

    /* ═══ FOOTER ═══ */
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
    .ft-tagline{font-family:var(--body);font-style:italic;font-size:19px;font-weight:400;color:rgba(255, 255, 255, 0.82);line-height:1.8;margin-bottom:1.5rem}
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

    /* ═══ MOBILE ═══ */
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
      .ind-grid{grid-template-columns:1fr 1fr}
      .ind-cell:nth-child(2n){border-right:none}
      .ind-cell:nth-child(4n){border-right:1px solid var(--g2)}
      .ind-cell:nth-child(2n){border-right:none}
      .ben-grid{grid-template-columns:1fr}
      .ben-cell{border-right:none}
      .svc-row{grid-template-columns:48px 180px 1fr}
      .svc-link{display:none}
      /* .intro-grid{grid-template-columns:1fr} */
      .intro-right{padding:2.5rem 3rem}
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
      .ih-links{gap:8px}
      .intro-block{padding:0}
      /* .intro-grid{grid-template-columns:1fr} */
      .intro-left{padding:2.5rem 1.25rem;border-right:none;border-bottom:1px solid var(--g2)}
      .intro-right{padding:2.5rem 1.25rem}
      .hmrc-block{padding:0}
      .hmrc-top{grid-template-columns:1fr}
      .hmrc-left{padding:2.5rem 1.25rem;border-right:none;border-bottom:1px solid var(--g2)}
      .hmrc-right{padding:2.5rem 1.25rem}
      .hmrc-grid-wrap{padding:0 1.25rem 2.5rem}
      .filing-grid{grid-template-columns:repeat(2,1fr)}
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
      .ind-grid{grid-template-columns:1fr 1fr}
      .ind-cell:nth-child(2n){border-right:none}
      .ind-cell:nth-child(4n){border-right:none}
      .ben-grid{grid-template-columns:1fr}
      .ben-cell{border-right:none;padding:2rem 1.25rem}
      .faq-q{font-size:20px}
      .link-grid{grid-template-columns:1fr}
      .lnk-cell{border-right:none}
      .lnk-cell:nth-last-child(-n+2){border-bottom:1px solid var(--g2)}
      .lnk-cell:last-child{border-bottom:none}
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
  

  <!-- ═══ PAGE HERO ═══ -->
  <section class="inner-hero">
    
    <div class="ih-eyebrow">
      <div class="ey-line"></div>
      <div class="ey-text">HMRC Recognised · UK iXBRL Specialists</div>
    </div>
    <h1 class="ih-h1">Professional<br><em>iXBRL Tagging</em><br>Services UK</h1>
    <p class="ih-body">
      XbrTags provides professional iXBRL tagging services in the UK for <strong>accountants, corporations, SMEs, listed companies, audit firms, and tax professionals</strong> requiring accurate HMRC compliant digital financial reporting.
    </p>
  </section>

  <!-- ═══ ENHANCED INTRO ═══ -->
  <div class="intro-block rv">
    <div class="intro-accent-bar"></div>
    <div class="intro-grid">
      <div class="intro-left">
        <div class="intro-eyebrow"><span>HMRC Compliant iXBRL Support</span></div>
        <div class="intro-body-text">
          <p>Our expert team converts annual accounts and financial statements into <strong>Inline XBRL format</strong> suitable for HMRC CT600 filing and Companies House submissions.Using a combination of <strong>AI-powered automation and expert validation</strong>, we deliver fast, scalable, and cost-effective iXBRL conversion services across the United Kingdom.Whether you require <strong>one-time filing support or outsourced bulk tagging services</strong>, XbrTags helps businesses simplify compliance reporting while improving filing accuracy and turnaround efficiency.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- ═══ ENHANCED HMRC COMPLIANT SECTION ═══ -->
  <div class="hmrc-block rv">
    <div class="hmrc-top">
      <div class="hmrc-left">
        <div class="hmrc-badge">
          <div class="hmrc-badge-dot"></div>
          <div class="hmrc-badge-text">HMRC Filing</div>
        </div>
        <h2 class="hmrc-h2">HMRC Compliant<br><em>iXBRL Filing.</em></h2>
        <p class="hmrc-desc">HMRC requires companies filing corporation tax returns to submit accounts in <strong>Inline XBRL format</strong>. Accurate tagging is essential to ensure compliance with UK digital reporting requirements.</p>
      </div>
      <div class="hmrc-right">
        <p class="hmrc-body2">XbrTags provides HMRC compliant iXBRL filing services designed to help businesses avoid submission errors, reduce compliance risks, and streamline financial reporting processes.</p>
        <div class="hmrc-sub-label">Our iXBRL filing services support</div>
      </div>
    </div>
    <div class="hmrc-grid-wrap">
      <div class="filing-grid">
        <div class="f-cell"><div class="f-n">01</div><div class="f-name">CT600 corporation tax filing</div></div>
        <div class="f-cell"><div class="f-n">02</div><div class="f-name">Annual financial statement conversion</div></div>
        <div class="f-cell"><div class="f-n">03</div><div class="f-name">HMRC taxonomy compliance</div></div>
        <div class="f-cell"><div class="f-n">04</div><div class="f-name">Inline XBRL validation</div></div>
        <div class="f-cell"><div class="f-n">05</div><div class="f-name">UK GAAP reporting</div></div>
        <div class="f-cell"><div class="f-n">06</div><div class="f-name">IFRS financial statements</div></div>
        <div class="f-cell"><div class="f-n">07</div><div class="f-name">Group company reporting</div></div>
        <div class="f-cell"><div class="f-n">08</div><div class="f-name">Consolidated accounts</div></div>
        <div class="f-cell"><div class="f-n">09</div><div class="f-name">Dormant company filings</div></div>
        <div class="f-cell"><div class="f-n">10</div><div class="f-name">Charity company reporting</div></div>
      </div>
    </div>
  </div>

  <!-- ═══ OUR SERVICES ═══ -->
  <section class="sec">
    <div class="sec-row rv">
      <div>
        <div class="sec-label">What we do</div>
        <h2 class="sec-h2">Our UK<br><em>iXBRL Services.</em></h2>
      </div>
      <p class="sec-body">From <strong>CT600 filing</strong> to <strong>ESEF reporting</strong> — a complete suite of iXBRL tagging and conversion services under one roof.</p>
    </div>
    <div class="svc-table rv">
      <div class="svc-row">
        <div class="svc-n">01</div>
        <div class="svc-name">CT600 iXBRL<br>Filing Support</div>
        <div>
          <div class="svc-desc">We prepare financial reports for CT600 filing by converting annual accounts into <strong>HMRC compliant Inline XBRL format</strong> with accurate taxonomy mapping and validation.</div>
        </div>
        <div class="svc-link">Explore <svg viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      </div>
      <div class="svc-row">
        <div class="svc-n">02</div>
        <div class="svc-name">Companies House<br>Filing Services</div>
        <div>
          <div class="svc-desc">Our team supports <strong>digital Companies House submissions</strong> through structured and compliant iXBRL financial reporting services.</div>
        </div>
        <div class="svc-link">Explore <svg viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      </div>
      <div class="svc-row">
        <div class="svc-n">03</div>
        <div class="svc-name">IFRS &amp; UK GAAP<br>Tagging</div>
        <div>
          <div class="svc-desc">We provide tagging support for <strong>IFRS, UK GAAP, FRS 101, and FRS 102</strong> reporting requirements across multiple industries.</div>
        </div>
        <div class="svc-link">Explore <svg viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      </div>
      <div class="svc-row">
        <div class="svc-n">04</div>
        <div class="svc-name">ESEF Reporting<br>Services</div>
        <div>
          <div class="svc-desc">XbrTags delivers <strong>ESEF reporting and XBRL tagging solutions</strong> for listed companies and regulated reporting entities.</div>
        </div>
        <div class="svc-link">Explore <svg viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      </div>
      <div class="svc-row">
        <div class="svc-n">05</div>
        <div class="svc-name">Outsourced iXBRL<br>for Accountants</div>
        <div>
          <div class="svc-desc">Accounting firms outsource iXBRL conversion projects to XbrTags for <strong>improved turnaround, scalable delivery</strong>, and compliance-focused reporting support.</div>
        </div>
        <div class="svc-link">Explore <svg viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      </div>
      <div class="svc-row">
        <div class="svc-n">06</div>
        <div class="svc-name">Bulk iXBRL<br>Conversion</div>
        <div>
          <div class="svc-desc">We support <strong>high-volume annual filing projects</strong> for firms managing multiple client reports during peak reporting periods.</div>
        </div>
        <div class="svc-link">Explore <svg viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      </div>
    </div>
  </section>

  <!-- ═══ WHY CHOOSE US ═══ -->
  <section class="sec sec-alt">
    <div class="sec-row rv">
      <div>
        <div class="sec-label">Why choose us</div>
        <h2 class="sec-h2">Why Choose XbrTags<br><em>for iXBRL?</em></h2>
      </div>
      <p class="sec-body">Every commitment backed by our <strong>unconditional guarantee</strong>. Expertise, speed, and compliance — all in one service.</p>
    </div>
    <div class="why-grid rv">
      <div class="wc">
        <div class="wc-ico"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
        <div class="wc-lbl">Turnaround</div>
        <div class="wc-title">Fast Turnaround</div>
        <div class="wc-desc">Most iXBRL tagging projects are completed within <strong>24 to 48 hours</strong> depending on complexity and filing requirements.</div>
      </div>
      <div class="wc">
        <div class="wc-ico"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><polyline points="8 21 12 17 16 21"/></svg></div>
        <div class="wc-lbl">Technology</div>
        <div class="wc-title">AI-Assisted Tagging</div>
        <div class="wc-desc">Our <strong>intelligent automation process</strong> improves efficiency while maintaining high reporting accuracy standards.</div>
      </div>
      <div class="wc">
        <div class="wc-ico"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg></div>
        <div class="wc-lbl">Quality</div>
        <div class="wc-title">Expert Financial Review</div>
        <div class="wc-desc">Every report undergoes <strong>manual review and validation</strong> before delivery.</div>
      </div>
      <div class="wc">
        <div class="wc-ico"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div class="wc-lbl">Compliance</div>
        <div class="wc-title">HMRC &amp; Companies House Compliance</div>
        <div class="wc-desc">We ensure all reports are compatible with <strong>UK filing standards and current taxonomy requirements</strong>.</div>
      </div>
      <div class="wc">
        <div class="wc-ico"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div>
        <div class="wc-lbl">Value</div>
        <div class="wc-title">Affordable Outsourcing</div>
        <div class="wc-desc">Our <strong>flexible pricing structure</strong> helps accounting firms and businesses reduce internal operational costs.</div>
      </div>
      <div class="wc">
        <div class="wc-ico"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
        <div class="wc-lbl">Security</div>
        <div class="wc-title">Secure Document Management</div>
        <div class="wc-desc">Client financial information is handled securely through <strong>controlled document management procedures</strong>.</div>
      </div>
    </div>
  </section>

  <!-- ═══ PROCESS ═══ -->
  <section class="sec sec-dark" style="padding:4rem 0">
    <div class="proc-head rv" style="padding:0 3rem;margin-bottom:0">
      <div class="sec-label sec-label-w">How it works</div>
      <h2 class="sec-h2 sec-h2-w">Our iXBRL<br><em>Tagging Process.</em></h2>
      <p class="sec-body sec-body-w" style="margin-top:1rem">A <strong>four-step workflow</strong> designed to deliver compliant, validated iXBRL files ready for HMRC and Companies House filing.</p>
    </div>
    <div class="proc-grid rv" style="margin-top:3rem">
      <div class="proc-step d1">
        <div class="proc-n">01</div>
        <div class="proc-icon"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg></div>
        <div class="proc-title">Financial Statement Review</div>
        <div class="proc-desc">We review annual reports and financial statements to identify <strong>reporting frameworks and taxonomy requirements</strong>.</div>
        <span class="proc-chip">Step 1</span>
      </div>
      <div class="proc-step d2">
        <div class="proc-n">02</div>
        <div class="proc-icon"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
        <div class="proc-title">Inline XBRL Conversion</div>
        <div class="proc-desc">Our specialists convert reports into <strong>HMRC compliant Inline XBRL format</strong> using accurate financial tagging standards.</div>
        <span class="proc-chip">Step 2</span>
      </div>
      <div class="proc-step d3">
        <div class="proc-n">03</div>
        <div class="proc-icon"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg></div>
        <div class="proc-title">Validation &amp; Quality Checks</div>
        <div class="proc-desc">Each report undergoes <strong>technical validation and expert review</strong> to ensure filing readiness.</div>
        <span class="proc-chip">Step 3</span>
      </div>
      <div class="proc-step d4">
        <div class="proc-n">04</div>
        <div class="proc-icon"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg></div>
        <div class="proc-title">Final Delivery</div>
        <div class="proc-desc">Validated iXBRL files are delivered in <strong>submission-ready format</strong> for HMRC and Companies House filing.</div>
        <span class="proc-chip">Step 4</span>
      </div>
    </div>
  </section>

  <!-- ═══ BENEFITS OF OUTSOURCING ═══ -->
  <section class="sec">
    <div class="sec-row rv">
      <div>
        <div class="sec-label">Outsourcing</div>
        <h2 class="sec-h2">Benefits of<br><em>Outsourcing iXBRL.</em></h2>
      </div>
      <p class="sec-body">Outsourcing your iXBRL conversion requirements to XbrTags provides several <strong>operational and compliance advantages</strong>.</p>
    </div>
    <div class="ben-grid rv" style="background:var(--k);border:1px solid rgba(255,255,255,.07)">
      <div class="ben-cell">
        <div class="ben-title">Reduced Internal Workload</div>
        <div class="ben-desc">Your finance and accounting teams can <strong>focus on core business activities</strong> while we manage technical tagging requirements.</div>
      </div>
      <div class="ben-cell">
        <div class="ben-title">Faster Reporting Cycles</div>
        <div class="ben-desc">Our <strong>scalable workflow supports urgent filings</strong> and high-volume reporting periods.</div>
      </div>
      <div class="ben-cell">
        <div class="ben-title">Improved Filing Accuracy</div>
        <div class="ben-desc"><strong>Expert validation reduces filing errors</strong> and improves submission reliability.</div>
      </div>
      <div class="ben-cell">
        <div class="ben-title">Cost Savings</div>
        <div class="ben-desc"><strong>Avoid expensive software investments</strong> and internal XBRL training costs.</div>
      </div>
      <div class="ben-cell" style="border-bottom:none">
        <div class="ben-title">Scalable Reporting Support</div>
        <div class="ben-desc">We support businesses ranging from <strong>small companies to large accounting firms</strong> handling multiple annual filings.</div>
      </div>
    </div>
  </section>

  <!-- ═══ INDUSTRIES ═══ -->
  <section class="sec sec-alt">
    <div class="sec-row rv">
      <div>
        <div class="sec-label">Industries</div>
        <h2 class="sec-h2">Industries<br><em>We Support.</em></h2>
      </div>
      <p class="sec-body">XbrTags delivers iXBRL tagging services across <strong>multiple industries in the UK</strong>. Our experience across diverse sectors allows us to support complex reporting structures and industry-specific disclosures.</p>
    </div>
    <div class="ind-grid rv">
      <div class="ind-cell"><div class="ind-name">Accounting firms</div></div>
      <div class="ind-cell"><div class="ind-name">Audit firms</div></div>
      <div class="ind-cell"><div class="ind-name">Financial services companies</div></div>
      <div class="ind-cell"><div class="ind-name">Manufacturing businesses</div></div>
      <div class="ind-cell"><div class="ind-name">Technology companies</div></div>
      <div class="ind-cell"><div class="ind-name">Retail organizations</div></div>
      <div class="ind-cell"><div class="ind-name">Healthcare companies</div></div>
      <div class="ind-cell"><div class="ind-name">Non-profit organizations</div></div>
      <div class="ind-cell"><div class="ind-name">Charity companies</div></div>
      <div class="ind-cell"><div class="ind-name">Listed entities</div></div>
      <div class="ind-cell"><div class="ind-name">Real estate businesses</div></div>
      <div class="ind-cell"><div class="ind-name">Investment firms</div></div>
    </div>
  </section>

  <!-- ═══ IFRS & STANDARDS ═══ -->
  <section class="sec">
    <div class="sec-row rv">
      <div>
        <div class="sec-label">Reporting Standards</div>
        <h2 class="sec-h2">IFRS, UK GAAP<br><em>&amp; ESEF Expertise.</em></h2>
      </div>
      <p class="sec-body">XbrTags supports multiple financial reporting standards used across the <strong>UK and European markets</strong>. We help businesses maintain consistency, compliance, and reporting accuracy across multiple filing frameworks.</p>
    </div>
    <div class="rv">
      <ul class="std-list">
        <li class="std-tag">IFRS financial reporting</li>
        <li class="std-tag">UK GAAP reporting</li>
        <li class="std-tag">FRS 101 reporting</li>
        <li class="std-tag">FRS 102 reporting</li>
        <li class="std-tag">ESEF annual reports</li>
        <li class="std-tag">Consolidated group reporting</li>
        <li class="std-tag">Listed company disclosures</li>
        <li class="std-tag">Financial statement taxonomy mapping</li>
      </ul>
    </div>
  </section>

  <!-- ═══ AI TECHNOLOGY ═══ -->
  <section class="sec sec-dark" style="padding:4rem 3rem">
    <div class="sec-row rv">
      <div>
        <div class="sec-label sec-label-w">Technology</div>
        <h2 class="sec-h2 sec-h2-w">AI-Powered<br><em>iXBRL Conversion.</em></h2>
      </div>
      <p class="sec-body sec-body-w">Traditional manual tagging processes are often time-consuming and resource-intensive. XbrTags combines <strong>intelligent automation with expert validation</strong> to improve efficiency across every dimension.</p>
    </div>
    <div class="why-grid rv" style="background:transparent;border-color:rgba(255,255,255,.08)">
      <div class="wc" style="border-color:rgba(255,255,255,.07)">
        <div class="wc-lbl" style="color:rgba(194,6,6,.9)">Speed</div>
        <div class="wc-title" style="color:var(--w)">Reporting speed</div>
        <div class="wc-desc" style="color:rgb(255 255 255 / 86%)">AI-assisted workflows deliver faster turnaround without sacrificing <strong style="color:#fff">quality or accuracy</strong>.</div>
      </div>
      <div class="wc" style="border-color:rgba(255,255,255,.07)">
        <div class="wc-lbl" style="color:rgba(194,6,6,.9)">Consistency</div>
        <div class="wc-title" style="color:var(--w)">Tagging consistency</div>
        <div class="wc-desc" style="color:rgb(255 255 255 / 86%)">Automation ensures <strong style="color:#fff">uniform taxonomy mapping</strong> across every filing.</div>
      </div>
      <div class="wc" style="border-color:rgba(255,255,255,.07)">
        <div class="wc-lbl" style="color:rgba(194,6,6,.9)">Efficiency</div>
        <div class="wc-title" style="color:var(--w)">Workflow efficiency</div>
        <div class="wc-desc" style="color:rgb(255 255 255 / 86%)">Streamlined processes reduce <strong style="color:#fff">operational complexity</strong> and reporting overhead.</div>
      </div>
      <div class="wc" style="border-color:rgba(255,255,255,.07)">
        <div class="wc-lbl" style="color:rgba(194,6,6,.9)">Accuracy</div>
        <div class="wc-title" style="color:var(--w)">Quality control</div>
        <div class="wc-desc" style="color:rgb(255 255 255 / 86%)">Human expert review validates every automated output for <strong style="color:#fff">complete compliance</strong>.</div>
      </div>
      <div class="wc" style="border-color:rgba(255,255,255,.07)">
        <div class="wc-lbl" style="color:rgba(194,6,6,.9)">Volume</div>
        <div class="wc-title" style="color:var(--w)">Bulk filing scalability</div>
        <div class="wc-desc" style="color:rgb(255 255 255 / 86%)">Handle <strong style="color:#fff">high-volume projects</strong> during peak reporting periods with ease.</div>
      </div>
      <div class="wc" style="border-color:rgba(255,255,255,.07)">
        <div class="wc-lbl" style="color:rgba(194,6,6,.9)">Compliance</div>
        <div class="wc-title" style="color:var(--w)">Compliance management</div>
        <div class="wc-desc" style="color:rgb(255 255 255 / 86%)">Automated checks ensure <strong style="color:#fff">every report meets current HMRC taxonomy standards</strong>.</div>
      </div>
    </div>
  </section>

  <!-- ═══ FAQ ═══ -->
  <section class="sec sec-alt">
    <div class="sec-row rv">
      <div>
        <div class="sec-label">FAQ</div>
        <h2 class="sec-h2">Frequently Asked<br><em>Questions.</em></h2>
      </div>
      <p class="sec-body">Everything you need to know about our <strong>iXBRL tagging services</strong>.</p>
    </div>
    <div class="faq-list rv">
      <div class="faq-item open" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">What is iXBRL?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">iXBRL or Inline eXtensible Business Reporting Language is a digital reporting format used for structured financial filings with HMRC and Companies House.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">Who needs iXBRL filing in the UK?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Most companies filing CT600 corporation tax returns with HMRC must submit financial statements in iXBRL format.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">How long does iXBRL tagging take?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Most projects are completed within 24 to 48 hours depending on document complexity and reporting requirements.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">Do you support IFRS and UK GAAP reporting?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Yes. XbrTags supports IFRS, UK GAAP, FRS 101, FRS 102, and ESEF reporting standards.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">Can accounting firms outsource bulk iXBRL projects?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Yes. We provide scalable outsourced iXBRL support for accounting firms handling multiple client filings.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">Do you validate reports before delivery?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Yes. Every report undergoes technical validation and expert quality review.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">Do you support dormant company filings?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Yes. We provide affordable iXBRL tagging services for dormant companies and small businesses.</p></div>
      </div>
      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-hd">
          <div class="faq-q">Is my financial data secure?</div>
          <div class="faq-tog"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        </div>
        <div class="faq-bd"><p class="faq-a">Yes. We maintain secure document handling procedures and confidentiality standards throughout every engagement.</p></div>
      </div>
    </div>
  </section>

  <!-- ═══ CONTACT ═══ -->
  <section id="contact">
    <div class="rv">
      <div class="ct-h">Ready to <em>start?</em></div>
      <p class="ct-sub">Contact XbrTags today to discuss your reporting requirements and receive a <strong>customized iXBRL tagging solution</strong> tailored to your business.</p>
    </div>
    <div class="ct-btns rv d2">
      <a href="#" class="ct-btn ct-btn-p">Create account <svg width="12" height="12" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="tel:08003579468" class="ct-btn ct-btn-g">1234 567 8910</a>
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
</body>
</html>