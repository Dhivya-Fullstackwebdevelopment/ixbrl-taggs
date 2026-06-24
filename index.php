
  <?php

$page_title = "";

$page_meta = "";

$page_keywords = "";

$canonical_url = "";

$og_title = "";

$og_desc = "";

$og_type = "website";

$og_url = "";



$schema = '

 ';




include 'header.php'; ?>

<style>
  
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800&family=Space+Mono:wght@400;700&display=swap');
    *{box-sizing:border-box;margin:0;padding:0}
    :root{
      --k:#0C0C0C;--w:#FFFFFF;--r:#9B1C1C;--r2:#B01E1E;
      --g0:#F0EEE9;--g1:#F6F5F2;--g2:#E5E3DC;--g3:#252525;--g4:#3D3C3A;
      --display:'Bebas Neue',sans-serif;
      --body:'Figtree',sans-serif;
      --mono:'Plus Jakarta Sans', sans-serif;
      --ease:cubic-bezier(.16,1,.3,1); 
    }
    html{scroll-behavior:smooth}
    .wrap{font-family:var(--body);width:100%;min-width:900px;background:#fff;}

    /* ═══════════════════════════════════════
       TOPBAR
    ═══════════════════════════════════════ */
    .topbar{
      background:var(--k);height:38px;
      display:flex;align-items:center;justify-content:space-between;
      padding:0 2.5rem;gap:1rem;position:relative;z-index:200;
    }
    .tb-l,.tb-r{display:flex;align-items:center;gap:1.25rem;flex-shrink:0}
    .tb-t{font-family:var(--mono);font-size:10.5px;letter-spacing:.06em;color:rgba(255,255,255,.74);text-transform:uppercase;white-space:nowrap}
    .tb-accent{color:#d04a3b;font-family:var(--mono);font-size:11px;letter-spacing:.12em;text-transform:uppercase;white-space:nowrap;font-weight:700}
    .tb-sep{width:1px;height:10px;background:rgba(255,255,255,.12);flex-shrink:0}
    .tb-a{font-family:var(--mono);font-size:10.5px;color:rgba(255,255,255,.77);letter-spacing:.06em;text-transform:uppercase;text-decoration:none;white-space:nowrap;cursor:pointer;transition:color .15s}
    .tb-a:hover{color:#c0392b}

    /* ═══════════════════════════════════════
       NAV
    ═══════════════════════════════════════ */
    .nav{
      background:var(--w);border-bottom:1px solid var(--g2);
      display:flex;align-items:center;justify-content:space-between;
      height:80px;padding:0 2.5rem;gap:1rem;
      position:sticky;top:0;z-index:100;
      transition:box-shadow .25s;
    }
    .nav.scrolled{box-shadow:0 2px 20px rgba(0,0,0,.07)}
    .logo{display:flex;align-items:center;gap:11px;text-decoration:none;flex-shrink:0}
    .logo-bars{display:flex;flex-direction:column;gap:5px}
    .lb1{width:22px;height:3px;background:var(--r)}
    .lb2{width:15px;height:3px;background:var(--r)}
    .logo-text{display:flex;flex-direction:column;gap:2px}
    .logo-name{font-family:var(--body);font-weight:800;font-size:15px;letter-spacing:.01em;color:var(--k);line-height:1}
    .logo-sub{font-family:var(--mono);font-size:8px;letter-spacing:.12em;color:var(--g3);text-transform:uppercase;line-height:1}

    /* Nav links + dropdowns */
    .nav-links{display:flex;height:64px;align-items:center}
    .nl{
      display:flex;align-items:center;gap:5px;height:64px;padding:0 .95rem;
      font-family:var(--body);font-size:15px;font-weight:700;color:var(--g4);
      border:none;background:none;cursor:pointer;position:relative;transition:color .15s;white-space:nowrap;
    }
    .nl:hover{color:#9B1C1C}
    .nl>svg{width:9px;height:9px;opacity:.4;flex-shrink:0;transition:transform .2s}
    .nl:hover>svg{transform:rotate(180deg);opacity:.7}
    /* .nl::after{
      content:'';position:absolute;bottom:0;left:.95rem;right:.95rem;
      height:2px;background:var(--r);
      transform:scaleX(0);transform-origin:left;
      transition:transform .22s var(--ease);
    } */
    .nl:hover::after{transform:scaleX(1)}

    /* Dropdown */
    .dd{
      position:absolute;top:calc(100% + 0px);left:50%;transform:translateX(-50%);
      min-width:200px;background:var(--w);
      border:1px solid var(--g2);border-top:2px solid var(--r);
      box-shadow:0 12px 32px rgba(0,0,0,.1);
      opacity:0;pointer-events:none;
      transform:translateX(-50%) translateY(-6px);
      transition:opacity .22s var(--ease),transform .22s var(--ease);
      z-index:200;
    }
    .nl:hover .dd,.nl:focus-within .dd{
      opacity:1;pointer-events:all;
      transform:translateX(-50%) translateY(0);
    }
    .dd a{
      display:block;padding:.7rem 1.25rem;
      font-family:var(--body);font-size:13.5px;font-weight:600;color:var(--g4);
      text-decoration:none;border-bottom:1px solid var(--g1);
      transition:color .15s,background .15s,padding-left .18s;
    }
    .dd a:last-child{border-bottom:none}
    .dd a:hover{color:var(--r);background:var(--g1);padding-left:1.5rem}

    .nav-right{display:flex;align-items:center;gap:10px;flex-shrink:0}
    .n-sign{
      font-family:var(--body);font-size:14.5px;font-weight:600;color:var(--k);
      padding:8px 18px;border:1px solid var(--g2);background:transparent;cursor:pointer;transition:border-color .18s;white-space:nowrap;
    }
    .n-sign:hover{border-color:var(--g4)}
    .n-quote{
      font-family:var(--body);font-size:14.5px;font-weight:700;color:#fff;
      background:var(--r);padding:9px 22px;border:none;cursor:pointer;transition:background .18s;white-space:nowrap;
    }
    .n-quote:hover{background:var(--r2)}

    /* ═══════════════════════════════════════
       HAMBURGER
    ═══════════════════════════════════════ */
    .hamburger{
      display:none;
      flex-direction:column;justify-content:center;align-items:center;gap:5px;
      width:40px;height:40px;background:none;border:1px solid var(--g2);
      cursor:pointer;flex-shrink:0;padding:8px;transition:border-color .18s;
    }
    .hamburger:hover{border-color:var(--g4)}
    .ham-line{
      width:20px;height:2px;background:var(--k);
      transition:transform .28s var(--ease),opacity .18s;
      transform-origin:center;display:block;
    }
    .hamburger.open .ham-line:nth-child(1){transform:translateY(7px) rotate(45deg)}
    .hamburger.open .ham-line:nth-child(2){opacity:0;transform:scaleX(0)}
    .hamburger.open .ham-line:nth-child(3){transform:translateY(-7px) rotate(-45deg)}

    /* ═══════════════════════════════════════
       MOBILE DRAWER
    ═══════════════════════════════════════ */
    .mobile-menu{
      display:none;position:fixed;top:0;left:0;right:0;bottom:0;z-index:999;
      pointer-events:none;
    }
    .mobile-menu.open{pointer-events:all}
    .mm-backdrop{
      position:absolute;inset:0;background:rgba(0,0,0,0);
      transition:background .3s;
    }
    .mobile-menu.open .mm-backdrop{background:rgba(0,0,0,.5)}
    .mm-panel{
      position:absolute;top:0;right:-100%;width:min(340px,88vw);height:100%;
      background:var(--w);box-shadow:-4px 0 40px rgba(0,0,0,.15);
      display:flex;flex-direction:column;
      transition:right .32s var(--ease);
      overflow-y:auto;-webkit-overflow-scrolling:touch;
    }
    .mobile-menu.open .mm-panel{right:0}
    .mm-header{
      display:flex;align-items:center;justify-content:space-between;
      padding:0 1.25rem;border-bottom:1px solid var(--g2);
      height:60px;flex-shrink:0;
    }
    .mm-logo{display:flex;align-items:center;gap:9px;text-decoration:none}
    .mm-close{
      width:36px;height:36px;background:none;border:1px solid var(--g2);
      cursor:pointer;display:flex;align-items:center;justify-content:center;
      flex-shrink:0;font-size:16px;color:var(--g4);transition:border-color .18s,color .18s;
      font-family:var(--mono);
    }
    .mm-close:hover{border-color:var(--r);color:var(--r)}
    .mm-info{
      background:var(--k);padding:.75rem 1.25rem;display:flex;flex-direction:column;gap:4px;flex-shrink:0;
    }
    .mm-info-row{display:flex;align-items:center;gap:8px}
    .mm-info-accent{color:#d04a3b;font-family:var(--mono);font-size:12px;letter-spacing:.12em;text-transform:uppercase;font-weight:700}
    .mm-info-t{font-family:var(--mono);font-size:12px;color:rgba(255,255,255,.55);letter-spacing:.06em;text-transform:uppercase}
    .mm-nav{flex:1;padding:.25rem 0}
    .mm-item{
      width:100%;background:none;border:none;border-bottom:1px solid var(--g1);
      cursor:pointer;text-align:left;
    }
    .mm-item-hd{
      display:flex;align-items:center;justify-content:space-between;
      padding:.9rem 1.25rem;
      font-family:var(--body);font-size:15px;font-weight:700;color:var(--g4);
      transition:color .15s,background .15s;
    }
    .mm-item:hover .mm-item-hd{color:var(--k);background:var(--g1)}
    .mm-item.has-sub .mm-item-hd{padding-right:1rem}
    .mm-item-arr{
      width:24px;height:24px;border:1px solid var(--g2);border-radius:50%;
      display:flex;align-items:center;justify-content:center;flex-shrink:0;
      transition:transform .28s var(--ease),background .2s,border-color .2s;
    }
    .mm-item-arr svg{width:8px;height:8px;stroke:var(--g3);fill:none;transition:stroke .2s}
    .mm-item.open .mm-item-arr{transform:rotate(180deg);background:var(--r);border-color:var(--r);color: #fff;}
    .mm-item.open .mm-item-arr svg{stroke:var(--w)}
    .mm-sub{max-height:0;overflow:hidden;transition:max-height .38s var(--ease);background:var(--g1)}
    .mm-item.open .mm-sub{max-height:400px}
    .mm-sub a{
      display:flex;align-items:center;gap:8px;
      padding:.7rem 1.25rem .7rem 2.25rem;
      font-family:var(--body);font-size:13.5px;font-weight:600;color:var(--g4);
      text-decoration:none;border-bottom:1px solid rgba(0,0,0,.04);
      transition:color .15s,padding-left .18s;
    }
    .mm-sub a:last-child{border-bottom:none}
    .mm-sub a::before{content:'—';font-size:10px;color:var(--r);opacity:.6;flex-shrink:0}
    .mm-sub a:hover{color:var(--r);padding-left:2.5rem}
    .mm-footer{
      padding:1.25rem;display:flex;flex-direction:column;gap:10px;
      border-top:1px solid var(--g2);flex-shrink:0;
    }
    .mm-sign{
      font-family:var(--body);font-size:14px;font-weight:600;color:var(--k);
      padding:11px 18px;border:1px solid var(--g2);background:transparent;
      cursor:pointer;transition:border-color .18s;width:100%;
    }
    .mm-sign:hover{border-color:var(--g4)}
    .mm-quote{
      font-family:var(--body);font-size:14px;font-weight:800;color:#fff;
      background:var(--r);padding:13px 22px;border:none;cursor:pointer;
      transition:background .18s;width:100%;letter-spacing:.02em;
    }
    .mm-quote:hover{background:var(--r2)}

    /* ═══════════════════════════════════════
       HERO
    ═══════════════════════════════════════ */
    .hero{
      position:relative;overflow:hidden;background:#fff;
      min-height:600px;display:flex;align-items:stretch;
    }
    .hero-skyline{position:absolute;inset:0;width:100%;height:100%}
    .hero-overlay{
      position:absolute;inset:0;
      background:linear-gradient(97deg,rgb(255 255 255) 0%,rgba(255,255,255,.97) 42%,rgb(255 255 255 / 24%) 65%,rgba(255,255,255,.3) 88%,rgba(255,255,255,0) 100%);
    }
    .hero-content{
      position:relative;z-index:2;padding:3rem 2.5rem;max-width:700px;
      display:flex;flex-direction:column;justify-content:center;
    }
    .hero-eyebrow{display:flex;align-items:center;gap:12px;margin-bottom:2rem}
    .ey-line{width:28px;height:1.5px;background:var(--r);flex-shrink:0}
    .ey-text{font-family:var(--mono);font-size:14px;letter-spacing:.14em;text-transform:uppercase;color:var(--r);line-height:1.5;font-weight:700}
    h1.hero-h1{
      font-family:var(--display);font-size:clamp(72px,11vw,130px);
      line-height:.9;letter-spacing:.02em;color:var(--k);margin-bottom:1.50rem;
    }
    h1.hero-h1 .stroke{-webkit-text-stroke:2.5px var(--k);color:transparent}
    h1.hero-h1 .red{color:var(--r)}

    /* Hero body — key phrases bolded */
    .hero-body{font-family:var(--body);font-size:18px;font-weight:400;line-height:1.3;color:var(--g4);margin-bottom:2rem}
    .hero-body strong{font-weight:800;color:var(--k)}

    .hero-btns{display:flex;align-items:center;gap:1.25rem;margin-bottom:2rem;flex-wrap:wrap}
    .hbtn-p{
      display:inline-flex;align-items:center;gap:10px;
      font-family:var(--body);font-size:12.5px;font-weight:800;letter-spacing:.06em;text-transform:uppercase;
      background:var(--k);color:#fff;padding:14px 30px;border:none;cursor:pointer;transition:background .18s;
    }
    .hbtn-p:hover{background:var(--r)}
    .hbtn-p svg{width:12px;height:12px;flex-shrink:0;transition:transform .2s}
    .hbtn-p:hover svg{transform:translateX(4px)}
    .hbtn-s{
      font-family:var(--body);font-size:15px;font-weight:600;color:var(--g4);
      background:none;border:none;cursor:pointer;border-bottom:1px solid var(--g2);padding-bottom:2px;
      transition:color .18s,border-color .18s;
    }
    .hbtn-s:hover{color:var(--k);border-color:var(--k)}
    .hero-stats{display:flex;align-items:flex-start;gap:0;border-top:1px solid var(--g2);padding-top:2rem}
    .hs{padding-right:2.5rem;border-right:1px solid var(--g2);margin-right:2rem}
    .hs:last-child{border-right:none;margin-right:0;padding-right:0}
    .hs-n{font-family:var(--display);font-size:46px;color:var(--k);line-height:1;letter-spacing:.01em}
    .hs-acc{color:var(--r);font-size:.55em;vertical-align:middle}
    .hs-l{font-family:var(--mono);font-size:12.5px;letter-spacing:.1em;text-transform:uppercase;color:var(--g3);margin-top:6px;font-weight:700}

    

    /* ═══════════════════════════════════════
       SHARED SECTION STYLES
    ═══════════════════════════════════════ */
    .sec{padding:3rem 3rem;background:var(--w)}
    .sec-alt{background:var(--g1)}
    .sec-dark{background:var(--k)}
    .sec-label{
      font-family:var(--mono);font-size:15px;font-weight:700;letter-spacing:.18em;text-transform:uppercase;color:var(--r);
      display:flex;align-items:center;gap:10px;margin-bottom:1.25rem;
    }
    .sec-label::before{content:'';width:22px;height:1.5px;background:var(--r);flex-shrink:0}
    .sec-label-w{color:rgb(194 12 12 / 91%)}.sec-label-w::before{background:rgba(193, 4, 4, 0.948)}
    .sec-h2{font-family:var(--display);font-size:clamp(44px,5.5vw,78px);line-height:.92;letter-spacing:.02em;color:var(--k);margin-bottom:1.25rem}
    .sec-h2 em{color:var(--r);font-style:normal}
    .sec-h2-w{color:var(--w)}
    .sec-body{font-family:var(--body);font-size:19px;font-weight:400;line-height:1.8;color:var(--g4);max-width:480px}
    .sec-body strong{font-weight:800;color:var(--k)}
    .sec-body-w{color:rgba(255, 255, 255, 0.833)}
    .sec-body-w strong{color:#fff}
    .sec-row{display:flex;justify-content:space-between;align-items:flex-end;gap:3rem;flex-wrap:wrap;margin-bottom:3.5rem}

    /* scroll reveal */
    .rv{opacity:0;transform:translateY(28px);transition:opacity .85s var(--ease),transform .85s var(--ease)}
    .rv.in{opacity:1;transform:none}
    .d1{transition-delay:.1s}.d2{transition-delay:.2s}.d3{transition-delay:.32s}.d4{transition-delay:.44s}

    /* ═══════════════════════════════════════
       SERVICES
    ═══════════════════════════════════════ */
    .svc-table{border-top:1px solid var(--g2)}
    .svc-row{
      display:grid;grid-template-columns:56px 220px 1fr 160px;
      gap:2.5rem;align-items:start;padding:2.25rem 0;border-bottom:1px solid var(--g2);
      cursor:pointer;position:relative;transition:background .25s,padding-left .25s;
    }
    .svc-row::before{
      content:'';position:absolute;left:-3rem;top:0;bottom:0;
      width:0;background:var(--r);transition:width .35s var(--ease);
    }
    .svc-row:hover::before{width:3px}
    .svc-row:hover{background:var(--g0);padding-left:.5rem}
    .svc-n{font-family:var(--mono);font-size:20px;color:var(--g3);letter-spacing:.08em;padding-top:5px;font-weight:700}
    .svc-name{font-family:var(--display);font-size:30px;letter-spacing:.02em;color:var(--k);line-height:1.1}
    .svc-desc{font-family:var(--body);font-size:18px;font-weight:400;line-height:1.8;color:var(--g4)}
    .svc-desc strong{font-weight:800;color:var(--k)}
    .svc-tags{display:flex;flex-wrap:wrap;gap:5px;margin-top:10px}
    .stag{font-family:var(--mono);font-size:16px;letter-spacing:.06em;border:1px solid var(--g2);padding:3px 9px;color:var(--g3);font-weight:700}
    .svc-link{
      display:flex;align-items:center;justify-content:flex-end;gap:6px;
      font-family:var(--body);font-size:12px;font-weight:700;letter-spacing:.04em;text-transform:uppercase;
      color:var(--g3);padding-top:5px;opacity:0;transition:opacity .25s,color .2s;
    }
    .svc-row:hover .svc-link{opacity:1;color:var(--r)}
    .svc-link svg{width:13px;height:13px;transition:transform .2s}
    .svc-row:hover .svc-link svg{transform:translateX(4px)}
    /* ── Mobile center-row auto-animation ── */
@media(max-width:900px){
  .svc-row.mob-active{
    background:var(--g0);
    padding-left:.5rem;
  }
  .svc-row.mob-active::before{
    width:3px;
  }
}

    /* ═══════════════════════════════════════
       PROCESS
    ═══════════════════════════════════════ */
    #process{padding:3rem 0;background:var(--k)}
    .proc-head{padding:0 3rem;margin-bottom:0}
    .proc-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:0;margin-top:3rem;border-top:1px solid rgba(255,255,255,.08)}
    .proc-step{
      padding:3rem 2.5rem 3.5rem;border-right:1px solid rgba(255,255,255,.07);
      position:relative;overflow:hidden;transition:background .3s;
    }
    .proc-step:last-child{border-right:none}
    .proc-step::after{content:'';position:absolute;top:0;left:0;right:0;height:0;background:var(--r);opacity:.06;transition:height .35s var(--ease)}
    .proc-step:hover::after{height:100%}
    .proc-n{font-family:var(--display);font-size:80px;color:rgba(255, 255, 255, 0.751);line-height:1;letter-spacing:.02em;margin-bottom:2rem}
    .proc-icon{width:38px;height:38px;border:1px solid rgba(255, 255, 255, 0.915);display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem}
    .proc-icon svg{width:16px;height:16px;stroke:rgba(255, 255, 255, 0.903);stroke-width:1.5;fill:none;stroke-linecap:round;stroke-linejoin:round}
    .proc-title{font-family:var(--display);font-size:22px;letter-spacing:.04em;color:var(--w);margin-bottom:.75rem;line-height:1.1}
    .proc-desc{font-family:var(--body);font-size:18px;font-weight:400;line-height:1.8;color:rgba(255, 255, 255, 0.784)}
    .proc-desc strong{font-weight:800;color:rgba(255,255,255,.85)}
    .proc-chip{display:inline-block;margin-top:1.25rem;font-family:var(--mono);font-size:12px;letter-spacing:.1em;border:1px solid rgba(194, 8, 8, 0.853);color:rgba(194, 6, 6, 0.875);padding:4px 10px;text-transform:uppercase;font-weight:700}

    /* ═══════════════════════════════════════
       AUDIENCE
    ═══════════════════════════════════════ */
    #audience{padding:3rem 0;background:var(--g1)}
    .aud-head{padding:0 3rem;margin-bottom:4.5rem}
    .aud-grid{display:grid;grid-template-columns:1fr 1fr;border-top:1px solid var(--g2);border-bottom:1px solid var(--g2);overflow:hidden;min-height:440px}
    .acc-list{border-right:1px solid var(--g2)}
    .acc-item{border-bottom:1px solid var(--g2);cursor:pointer;overflow:hidden}
    .acc-item:last-child{border-bottom:none}
    .acc-hd{display:flex;align-items:center;justify-content:space-between;padding:1.6rem 3rem;transition:background .2s}
    .acc-item.open .acc-hd,.acc-item:hover .acc-hd{background:var(--g0)}
    .acc-left{display:flex;align-items:center;gap:12px}
    .acc-ico{width:32px;height:32px;border:1px solid var(--g2);display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:all .2s}
    .acc-item.open .acc-ico{border-color:var(--r);background:rgba(155,28,28,.05)}
    .acc-ico svg{width:13px;height:13px;stroke:var(--g3);stroke-width:1.5;fill:none;transition:stroke .2s;stroke-linecap:round;stroke-linejoin:round}
    .acc-item.open .acc-ico svg{stroke:var(--r)}
    .acc-title{font-family:var(--display);font-size:22px;letter-spacing:.04em;color:var(--k)}
    .acc-toggle{width:20px;height:20px;border:1px solid var(--g2);border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:all .3s var(--ease)}
    .acc-item.open .acc-toggle{background:#fff;border-color:var(--k);transform:rotate(45deg)}
    .acc-toggle svg{width:8px;height:8px;stroke:var(--g4);transition:stroke .2s}
    .acc-item.open .acc-toggle svg{stroke:var(--w)}
    .acc-bd{max-height:0;overflow:hidden;transition:max-height .4s var(--ease)}
    .acc-item.open .acc-bd{max-height:180px}
    .acc-bd-inner{padding:.25rem 3rem 1.75rem 5.75rem}
    .acc-text{font-family:var(--body);font-size:19px;font-weight:400;line-height:1.8;color:var(--g4)}
    .acc-text strong{font-weight:800;color:var(--k)}
    .acc-chips{display:flex;flex-wrap:wrap;gap:5px;margin-top:10px}
    .acc-chip{font-family:var(--mono);font-size:16px;letter-spacing:.08em;border:1px solid var(--g2);padding:3px 8px;color:var(--g3);font-weight:700}
    .acc-panel{background:var(--k);padding:3.5rem;display:flex;flex-direction:column;justify-content:space-between}
    .ap-glyph{font-family:var(--display);font-size:110px;color:rgba(255, 255, 255, 0.581);line-height:1;letter-spacing:.02em;margin-bottom:.5rem}
    .ap-cat{font-family:var(--mono);font-size:16px;letter-spacing:.16em;text-transform:uppercase;color:rgba(190, 13, 13, 0.903);margin-bottom:1rem;font-weight:700}
    .ap-quote{font-family:var(--body);font-style:italic;font-size:20px;font-weight:700;color:rgba(255,255,255,.85);line-height:1.5;margin-bottom:1rem}
    .ap-body{font-family:var(--body);font-size:20px;font-weight:400;line-height:1.8;color:rgba(255, 255, 255, 0.647)}
    .ap-body strong{font-weight:800;color:rgba(255,255,255,.9)}
    .ap-stat{padding-top:2rem;border-top:1px solid rgba(255,255,255,.07)}
    .ap-stat-n{font-family:var(--display);font-size:52px;color:var(--r);line-height:1;letter-spacing:.02em}
    .ap-stat-l{font-family:var(--mono);font-size:16px;letter-spacing:.12em;text-transform:uppercase;color:rgba(255, 255, 255, 0.852);margin-top:6px;font-weight:700}

    /* ═══════════════════════════════════════
       TESTIMONIALS
    ═══════════════════════════════════════ */
    #testimonials{padding:3rem 0;background:var(--w);border-top:1px solid var(--g2)}
    .q-head{padding:0 3rem;margin-bottom:3.5rem}
    .q-grid{display:grid;grid-template-columns:repeat(3,1fr);border-top:1px solid var(--g2)}
    .qcard{
      padding:3rem;border-right:1px solid var(--g2);
      position:relative;overflow:hidden;transition:background .25s;cursor:default;
    }
    .qcard:last-child{border-right:none}
    .qcard::after{
      content:'';position:absolute;bottom:0;left:3rem;right:3rem;
      height:2px;background:var(--r);transform:scaleX(0);transform-origin:left;
      transition:transform .4s var(--ease);
    }
    .qcard:hover::after{transform:scaleX(1)}
    .qcard:hover{background:var(--g1)}
    .q-stars{display:flex;gap:3px;margin-bottom:1.25rem}
    .star{width:10px;height:10px;background:var(--r);opacity:.75;clip-path:polygon(50% 0%,61% 35%,98% 35%,68% 57%,79% 91%,50% 70%,21% 91%,32% 57%,2% 35%,39% 35%)}
    .q-mark{font-family:var(--display);font-size:72px;color:var(--r);opacity:.60;line-height:.75;margin-bottom:1rem;display:block;letter-spacing:.02em}
    .q-text{font-family:var(--body);font-style:italic;font-weight:400;font-size:18px;line-height:1.7;color:var(--k);margin-bottom:2rem}
    .q-text strong{font-weight:800;font-style:normal;color:var(--r)}
    .q-rule{height:1px;background:var(--g2);margin-bottom:1.25rem}
    .q-name{font-family:var(--display);font-size:19px;letter-spacing:.04em;color:var(--k)}
    .q-role{font-family:var(--mono);font-size:17px;letter-spacing:.08em;color:var(--g3);margin-top:3px;font-weight:700}

    /* ═══════════════════════════════════════
       PRICING
    ═══════════════════════════════════════ */
    #pricing{padding:3rem 0;background:var(--g1)}
    .price-head{padding:0 3rem;margin-bottom:4.5rem}
    .price-table{border:1px solid var(--g2);margin:0 3rem;overflow:hidden}
    .pt-head{display:grid;grid-template-columns:2fr repeat(3,1fr);background:var(--k);padding:1.25rem 2rem;gap:1.5rem}
    .pth{font-family:var(--mono);font-size:11px;letter-spacing:.14em;text-transform:uppercase;text-align:center;color:rgba(255,255,255,.718);font-weight:700}
    .pth.hi{color:rgba(216, 6, 6, 0.892)}
    .pth.li{text-align:start;}
    .pt-row{display:grid;grid-template-columns:2fr repeat(3,1fr);padding:1rem 2rem;gap:1.5rem;align-items:center;border-bottom:1px solid rgba(10,10,10,.05);transition:background .15s}
    .pt-row:hover{background:var(--w)}
    .pt-feat{font-family:var(--body);font-size:18px;font-weight:600;color:var(--g4)}
    .pt-val{font-family:var(--body);font-size:18px;font-weight:800;color:var(--k);text-align:center}
    .pt-val.red{color:var(--r);font-family:var(--display);font-size:18px;letter-spacing:.04em}
    .pt-ck{width:16px;height:16px;border-radius:50%;background:var(--g2);display:flex;align-items:center;justify-content:center;margin:0 auto}
    .pt-ck.on{background:rgba(155,28,28,.1)}
    .pt-ck svg{width:8px;height:8px;stroke:transparent}
    .pt-ck.on svg{stroke:var(--r)}
    .pt-foot{display:grid;grid-template-columns:2fr repeat(3,1fr);padding:1.75rem 2rem;gap:1.5rem;background:var(--w);border-top:2px solid var(--g2);align-items:end}
    .ptf-label{font-family:var(--display);font-size:18px;letter-spacing:.04em;color:var(--k)}
    .ptf-label small{display:block;font-family:var(--mono);font-size:12px;font-weight:700;color:var(--g3);letter-spacing:.08em;margin-top:4px;text-transform:uppercase}
    .ptf-val{text-align:center}
    .ptf-price{font-family:var(--display);font-size:40px;color:var(--k);line-height:1;letter-spacing:.02em}
    .ptf-price.red{color:var(--r)}
    .ptf-price small{font-family:var(--mono);font-size:12px;color:var(--g3);letter-spacing:.06em;vertical-align:middle;font-weight:700}
    .ptf-btn{display:block;text-align:center;margin-top:12px;font-family:var(--display);font-size:16px;letter-spacing:.06em;padding:11px;border:1px solid var(--g2);color:var(--k);transition:all .18s;text-decoration:none}
    .ptf-btn:hover{background:var(--k);color:var(--w);border-color:var(--k)}
    .ptf-btn.primary{background:var(--r);color:var(--w);border-color:var(--r)}
    .ptf-btn.primary:hover{background:var(--r2);border-color:var(--r2)}
    .pt-note{font-family:var(--mono);font-size:12.5px;letter-spacing:.08em;color:var(--g3);margin:1.25rem 3rem 0;text-transform:uppercase;font-weight:700}

    /* ═══════════════════════════════════════
       GLOBAL
    ═══════════════════════════════════════ */
    #global{padding:3rem 0;background:var(--k)}
    .global-head{padding:0 3rem;margin-bottom:0}
    .r-grid{display:grid;grid-template-columns:repeat(4,1fr);border-top:1px solid rgba(255,255,255,.07);margin-top:3rem}
    .r-cell{
      padding:2.5rem 3rem;border-right:1px solid rgba(255,255,255,.07);border-bottom:1px solid rgba(255,255,255,.07);
      position:relative;cursor:pointer;overflow:hidden;transition:background .25s;
    }
    .r-cell:nth-child(4n){border-right:none}
    .r-cell:nth-last-child(-n+4){border-bottom:none}
    .r-cell:hover{background:rgba(155, 28, 28, 0.381)}
    .r-flag{font-size:32px;line-height:1;margin-bottom:.9rem;display:block;color: #B01E1E;}
    .r-country{font-family:var(--display);font-size:20px;letter-spacing:.04em;color:var(--w);margin-bottom:4px}
    .r-reg{font-family:var(--mono);font-size:16px;letter-spacing:.1em;text-transform:uppercase;color:rgb(255 255 255 / 50%);font-weight:700}
    .r-arr{position:absolute;bottom:1.5rem;right:1.5rem;opacity:0;transition:opacity .2s}
    .r-arr svg{width:12px;height:12px;stroke:rgba(255,255,255,.35);stroke-width:1;fill:none;stroke-linecap:round;stroke-linejoin:round}
    .r-cell:hover .r-arr{opacity:1}
    .r-more{display:flex;align-items:center;justify-content:center;font-family:var(--body);font-style:italic;font-size:14px;font-weight:600;color:rgba(255, 255, 255, 0.745)}

    /* ═══════════════════════════════════════
       WHY US
    ═══════════════════════════════════════ */
    #why{padding:3rem 0;background:var(--w);border-top:1px solid var(--g2)}
    .why-head{padding:0 3rem;margin-bottom:4.5rem}
    .why-grid{display:grid;grid-template-columns:repeat(4,1fr);border-top:1px solid var(--g2);border-bottom:1px solid var(--g2)}
    .wc{padding:3rem;border-right:1px solid var(--g2);position:relative;overflow:hidden}
    .wc:last-child{border-right:none}
    .wc::after{content:'';position:absolute;bottom:0;left:0;right:0;height:2px;background:var(--r);opacity:0;transition:opacity .3s}
    .wc:hover::after{opacity:1}
    .wc-n{font-family:var(--display);font-size:56px;color:var(--k);line-height:1;letter-spacing:.02em;margin-bottom:4px}
    .wc-sup{color:var(--r);font-size:.5em;vertical-align:super}
    .wc-lbl{font-family:var(--mono);font-size:15px;letter-spacing:.12em;text-transform:uppercase;color:var(--g3);margin-bottom:1.5rem;font-weight:700}
    .wc-title{font-family:var(--display);font-size:22px;letter-spacing:.04em;color:var(--k);margin-bottom:.6rem}
    .wc-desc{font-family:var(--body);font-size:17px;font-weight:400;line-height:1.8;color:var(--g4)}
    .wc-desc strong{font-weight:800;color:var(--k)}
    .cert-strip{display:flex;align-items:center;gap:8px;flex-wrap:wrap;padding:1.75rem 3rem;border-top:1px solid var(--g2)}
    .cert{display:flex;align-items:center;gap:7px;font-family:var(--mono);font-size:14px;letter-spacing:.1em;text-transform:uppercase;border:1px solid var(--g2);padding:6px 12px;color:var(--g4);background:var(--w);font-weight:700}
    .cert::before{content:'';width:4px;height:4px;border-radius:50%;background:var(--r);opacity:.7;flex-shrink:0}

    /* ═══════════════════════════════════════
       CONTACT
    ═══════════════════════════════════════ */
    #contact{
      background:var(--k);padding:4rem 3rem;
      display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:3rem;
      border-top:1px solid rgba(255,255,255,.05);
    }
    .ct-h{font-family:var(--display);font-size:clamp(44px,6vw,80px);color:var(--w);line-height:.92;letter-spacing:.02em}
    .ct-h em{color:var(--r)}
    .ct-sub{font-family:var(--body);font-size:18px;font-weight:400;color:rgba(255, 255, 255, 0.734);max-width:440px;line-height:1.8;margin-top:.75rem}
    .ct-sub strong{font-weight:800;color:#fff}
    .ct-btns{display:flex;gap:12px;flex-wrap:wrap;align-items:center}
    .ct-btn{font-family:var(--display);font-size:18px;letter-spacing:.06em;padding:14px 30px;transition:all .18s;display:inline-flex;align-items:center;gap:8px;text-decoration:none}
    .ct-btn-p{background:var(--r);color:var(--w)}.ct-btn-p:hover{background:var(--r2)}
    .ct-btn-g{border:1px solid rgba(255,255,255,.15);color:rgba(255,255,255,.5)}.ct-btn-g:hover{border-color:rgba(255,255,255,.4);color:var(--w)}

    /* ═══════════════════════════════════════
       FOOTER — FIXED GRID SPACING
    ═══════════════════════════════════════ */
    footer{
      background:var(--k);
      padding:4rem 3rem 2.5rem;
      border-top:1px solid rgba(255,255,255,.07);
    }
    .ft-top{
      display:grid;
      grid-template-columns:1.8fr 1fr 1fr 1fr;
      gap:0;
      border-bottom:1px solid rgba(255,255,255,.07);
      padding-bottom:3rem;
      margin-bottom:2rem;
    }
    /* Brand column */
    .ft-brand{
      padding-right:8rem;
      border-right:1px solid rgba(255,255,255,.07);
    }
    /* Link columns */
    .ft-col{
      padding:0 2rem;
      border-right:1px solid rgba(255,255,255,.07);
    }
    .ft-col:last-child{
      border-right:none;
      padding-right:0;
    }
    .ft-logo{display:flex;align-items:center;gap:11px;margin-bottom:1.5rem}
    .ft-logo-bars{display:flex;flex-direction:column;gap:5px}
    .ft-lb1{width:20px;height:2.5px;background:var(--r)}
    .ft-lb2{width:14px;height:2.5px;background:var(--r)}
    .ft-name{font-family:var(--body);font-weight:800;font-size:15px;color:var(--w)}
    .ft-sub{font-family:var(--mono);font-size:8px;letter-spacing:.14em;color:rgba(255,255,255,.25);text-transform:uppercase;font-weight:700}
    .ft-tagline{
      font-family:var(--body);font-style:italic;font-size:16px;font-weight:400;
      color:rgba(255,255,255,.5);line-height:1.8;
      margin-bottom:1.5rem;
    }
    .ft-tagline strong{font-weight:800;font-style:normal;color:rgba(255,255,255,.8)}
    .ft-contact-list{display:flex;flex-direction:column;gap:6px;margin-top:auto}
    .ft-contact-item{
      font-family:var(--mono);font-size:14px;letter-spacing:.06em;
      color:rgba(255, 255, 255, 0.721);text-transform:uppercase;font-weight:700;
    }
    .ft-contact-item a{color:rgba(255, 255, 255, 0.721);text-decoration:none;transition:color .15s}
    .ft-contact-item a:hover{color:rgba(194,6,6,.85)}
    .ft-col-h{
      font-family:var(--mono);font-size:17px;letter-spacing:.18em;text-transform:uppercase;
      color:rgba(255,255,255,.9);margin-bottom:1.5rem;font-weight:700;
      padding-bottom:.75rem;border-bottom:1px solid rgba(255,255,255,.07);
    }
    .ft-links{list-style:none;display:flex;flex-direction:column;gap:10px}
    .ft-links a{
      font-family:var(--body);font-size:15px;font-weight:500;
      color:rgba(255,255,255,.45);text-decoration:none;transition:color .15s;
      display:flex;align-items:center;gap:6px;
    }
    .ft-links a::before{
      content:'';width:3px;height:3px;border-radius:50%;background:var(--r);
      flex-shrink:0;opacity:0;transition:opacity .15s;
    }
    .ft-links a:hover{color:rgba(194,6,6,.85)}
    .ft-links a:hover::before{opacity:1}
    .ft-bottom{
      display:flex;justify-content:space-between;align-items:center;
      flex-wrap:wrap;gap:1rem;padding-top:1.5rem;
      border-top:1px solid rgba(255,255,255,.05);
    }
    .ft-copy{font-family:var(--mono);font-size:10.5px;letter-spacing:.05em;color:rgba(255, 255, 255, 0.54);font-weight:700;line-height:1.6}
    .ft-legal{display:flex;gap:2rem;align-items:center}
    .ft-legal a{
      font-family:var(--mono);font-size:10.5px;letter-spacing:.06em;
      color:rgba(255, 255, 255, 0.638);text-decoration:none;transition:color .15s;font-weight:700;
    }
    .ft-legal a:hover{color:rgba(194,6,6,.8)}

    /* ════════════════════════════════════════════════════════
       TABLET  ≤1100px
    ════════════════════════════════════════════════════════ */
    @media(max-width:1100px){
      .proc-grid{grid-template-columns:1fr 1fr}
      .why-grid{grid-template-columns:1fr 1fr}
      .wc:nth-child(2){border-right:none}
      .wc:nth-child(3){border-top:1px solid var(--g2)}
      .r-grid{grid-template-columns:1fr 1fr}
      .r-cell:nth-child(2n){border-right:none}
      .aud-grid{grid-template-columns:1fr}
      /* Footer tablet */
      .ft-top{grid-template-columns:1fr 1fr;gap:0}
      .ft-brand{
        grid-column:1/-1;padding-right:0;border-right:none;
        border-bottom:1px solid rgba(255,255,255,.07);
        padding-bottom:2rem;margin-bottom:2rem;
      }
      .hamburger{display:flex}
      .ft-tagline{max-width:100%}
      .ft-col{padding:1.5rem 1.5rem 0}
      .ft-col:nth-child(3){border-right:none}
      .ft-col:last-child{padding-right:1.5rem}
      .svc-row{grid-template-columns:48px 180px 1fr}
      .svc-link{display:none}
      .q-grid{grid-template-columns:1fr}
      .qcard{border-right:none;border-bottom:1px solid var(--g2)}
      .qcard:last-child{border-bottom:none}
    }

    /* ════════════════════════════════════════════════════════
       MOBILE  ≤900px
    ════════════════════════════════════════════════════════ */
    @media(max-width:900px){
      .wrap{min-width:100%;}
      .topbar{
        padding:0 1rem;height:auto;min-height:40px;
        overflow-x:auto;-webkit-overflow-scrolling:touch;
        flex-wrap:nowrap;gap:0.6rem;justify-content:flex-start;
      }
      .topbar::-webkit-scrollbar{display:none}
      .tb-l,.tb-r{flex-shrink:0;gap:0.6rem}
      .tb-t,.tb-accent,.tb-a{font-size:12px;white-space:nowrap}
      .tb-sep{height:8px}
      .nav{height:60px;padding:0 1rem;flex-wrap:nowrap;justify-content:space-between;gap:0;position:sticky;top:0}
      .nav-links{display:none}
      .nav-right{display:none}
      .hamburger{display:flex}
      .logo{height:60px}
      .logo-name{font-size:16px}
      .logo-sub{font-size:7px}
      .lb1{width:18px}.lb2{width:12px}
      .mobile-menu{display:block}
      .hero{min-height:auto}
      .hero-content{padding:2.5rem 1.25rem 3rem;max-width:100%;width:100%}
      .hero-eyebrow{margin-bottom:1.25rem;flex-wrap:wrap}
      .ey-line{width:20px}
      .ey-text{font-size:9.5px;white-space:normal;line-height:1.5}
      h1.hero-h1{font-size:19vw;line-height:.92;margin-bottom:1.1rem}
      h1.hero-h1 .stroke{-webkit-text-stroke:1.5px var(--k)}
      .hero-body{font-size:17px;line-height:1.65;margin-bottom:1.6rem}
      .hero-btns{gap:.85rem;margin-bottom:1.75rem}
      .hbtn-p{padding:12px 22px;font-size:11.5px}
      .hbtn-s{font-size:14.5px}
      .hero-stats{flex-wrap:wrap;gap:1.25rem 0;padding-top:1.5rem}
      .hs{flex:1 0 45%;padding-right:0;border-right:none;margin-right:0;padding-bottom:1rem;border-bottom:1px solid var(--g2)}
      .hs:nth-last-child(-n+2){border-bottom:none;padding-bottom:0}
      .hs-n{font-size:36px}
      .hs-l{font-size:12px}
      .hero-overlay{background:linear-gradient(170deg,rgba(255,255,255,.97) 0%,rgba(255,255,255,.88) 55%,rgba(255,255,255,.55) 100%)}
      #ticker{height:36px}
      .t-text{font-size:10px}
      .t-badge{font-size:8.5px}
      .sec{padding:3.5rem 1.25rem}
      .sec-h2{font-size:clamp(36px,10vw,56px)}
      .sec-body{font-size:17px;max-width:100%}
      .sec-row{flex-direction:column;align-items:flex-start;gap:1rem;margin-bottom:2.5rem}
      .svc-table{margin-top:0}
      .svc-row{grid-template-columns:1fr;padding:1.5rem 0;gap:.75rem}
      .svc-n{display:none}
      .svc-name{font-size:26px}
      .svc-desc{font-size:16px}
      .svc-link{display:none}
      .svc-row::before{left:-1.25rem}
      #process{padding:3.5rem 0}
      .proc-head{padding:0 1.25rem}
      .proc-grid{grid-template-columns:1fr;margin-top:3rem}
      .proc-step{border-right:none;border-bottom:1px solid rgba(255,255,255,.07);padding:2rem 1.25rem 2.5rem}
      .proc-step:last-child{border-bottom:none}
      .proc-n{font-size:56px;margin-bottom:1.25rem}
      .proc-title{font-size:21px}
      .proc-desc{font-size:16px}
      #audience{padding:3.5rem 0}
      .aud-head{padding:0 1.25rem;margin-bottom:2.5rem}
      .aud-grid{grid-template-columns:1fr;min-height:auto}
      .acc-list{border-right:none}
      .acc-hd{padding:1.25rem 1.25rem}
      .acc-title{font-size:20px}
      .acc-bd-inner{padding:.25rem 1.25rem 1.5rem 3rem}
      .acc-panel{padding:2rem 1.25rem;display:none}
      #testimonials{padding:3.5rem 0}
      .q-head{padding:0 1.25rem;margin-bottom:2.5rem}
      .q-grid{display:block}
      .qcard{padding:2rem 1.25rem;border-right:none;border-bottom:1px solid var(--g2)}
      .qcard:last-child{border-bottom:none}
      .q-text{font-size:16.5px}
      .q-mark{font-size:52px}
      #pricing{padding:3.5rem 0}
      .price-head{padding:0 1.25rem;margin-bottom:2.5rem}
      .price-table{margin:0 1.25rem;overflow-x:auto}
      .pt-head,.pt-row,.pt-foot{grid-template-columns:1.4fr 1fr 1fr;min-width:420px}
      .pt-head .pth:last-child,.pt-row>*:nth-child(4),.pt-foot>*:nth-child(4){display:none}
      .pt-note{margin:1rem 1.25rem 0;font-size:12.5px}
      .ptf-price{font-size:28px}
      #global{padding:3.5rem 0}
      .global-head{padding:0 1.25rem}
      .r-grid{grid-template-columns:1fr 1fr;margin-top:3rem}
      .r-cell{padding:1.5rem 1.25rem;border-right:1px solid rgba(255,255,255,.07)}
      .r-cell:nth-child(2n){border-right:none}
      .r-cell:nth-child(4n){border-right:none}
      .r-country{font-size:20px}
      #why{padding:3.5rem 0}
      .why-head{padding:0 1.25rem;margin-bottom:2.5rem}
      .why-grid{grid-template-columns:1fr}
      .wc{border-right:none;border-bottom:1px solid var(--g2);padding:2rem 1.25rem}
      .wc:last-child{border-bottom:none}
      .wc:nth-child(3){border-top:none}
      .wc-n{font-size:44px}
      .cert-strip{padding:1.25rem;gap:6px}
      .cert{font-size:12px;padding:5px 9px}
      #contact{padding:3.5rem 1.25rem;flex-direction:column;align-items:flex-start;gap:2rem}
      /* Footer mobile */
      footer{padding:3rem 1.25rem 2rem}
      .ft-top{grid-template-columns:1fr}
      .ft-brand{padding-right:0;border-right:none;border-bottom:1px solid rgba(255,255,255,.07);padding-bottom:2rem;margin-bottom:0}
      .ft-col{padding:1.5rem 0 0}
      .ft-col:last-child{padding-right:0}
      .ft-tagline{max-width:100%}
      .ft-bottom{flex-direction:column;align-items:flex-start;gap:.75rem}
      .ft-copy{font-size:8.5px}
      .ft-legal{flex-wrap:wrap;gap:1rem}
    }

    /* ── Very small ≤480px ── */
    @media(max-width:480px){
      .topbar{display: none;}
      .tb-accent,.tb-t,.tb-a{font-size:8px;letter-spacing:.03em}
      .nav{padding:0 .75rem;height:56px}
      h1.hero-h1{font-size:20vw}
      .hs{flex:1 0 48%}
      .hs-n{font-size:32px}
      .hbtn-p{padding:11px 18px;font-size:11px}
      .hero-content{padding:2rem 1rem 2.25rem}
      .price-table{margin:0 1rem}
      .pt-note{margin:1rem 1rem 0}
      .r-grid{grid-template-columns:1fr}
      .ct-btns{flex-direction:column;align-items:flex-start;width:100%}
      .ct-btn{width:100%;justify-content:center}
    }

    /* ── Desktop guard ≥901px ── */
    @media(min-width:901px){
      .wrap{min-width:900px}
      .hamburger{display:none}
      .mobile-menu{display:none}
    }

    /* ═══════════════════════════════════════════════════════════════
   LOGO RESPONSIVE SIZING
   Add this after your main style.css
   The HTML has height="80" hardcoded — CSS overrides it at each
   breakpoint so the logo scales down gracefully on smaller screens.
═══════════════════════════════════════════════════════════════ */

/* ── Base / Desktop (> 1200px) — keep original 80px ── */
a[aria-label="XBR Tags home"] img.logo,
.nav img.logo {
  height: 75px !important;
  width: auto !important;
  display: block;
  object-fit: contain;
  flex-shrink: 0;
}

/* ── Large tablet  ≤ 1250px — slightly tighter nav ── */
@media (max-width: 1250px) {
  a[aria-label="XBR Tags home"] img.logo,
  .nav img.logo {
    height: 54px !important;
  }
  .nav {
    gap : 0rem !important;
  }
}

/* ── Tablet  ≤ 900px — hamburger nav, more space needed ── */
@media (max-width: 1150px) {
  a[aria-label="XBR Tags home"] img.logo,
  .nav img.logo {
    height: 48px !important;
  }

  /* Nav height should match the logo */
  .nav {
    height: 60px;
  }
}

/* ── Small mobile  ≤ 600px ── */
@media (max-width: 600px) {
  a[aria-label="XBR Tags home"] img.logo,
  .nav img.logo {
    height: 50px !important;
  }

  .nav {
    height: 54px;
  }
}

/* ── Very small  ≤ 400px ── */
@media (max-width: 400px) {
  a[aria-label="XBR Tags home"] img.logo,
  .nav img.logo {
    height: 50px !important;
  }

  .nav {
    height: 50px;
  }
}

@media (max-width: 1200px) {

  /* Prevent focus from keeping dropdown visible after click */
  .nl:focus { outline: none; }
  .nl:focus-within .dd { opacity: 0; pointer-events: none; transform: translateX(-50%) translateY(-6px); }

  /* Hover still works normally */
  .nl:hover .dd {
    opacity: 1;
    pointer-events: all;
    transform: translateX(-50%) translateY(0);
  }

  /* Blur the button immediately on mousedown so focus never sticks */
  /* (handled in the JS patch below via CSS attribute trick)        */
  .nl { -webkit-user-select: none; user-select: none;font-size: 12px;padding: 0 .55rem; }
}

.tb-link{
  text-decoration: none;
  color: rgba(255,255,255,.74);
}
.tb-link:hover{
  color: rgba(235, 19, 19, 0.9);
}
</style>
  

  <!-- ═══ HERO ═══ -->
  <section class="hero">
    <svg class="hero-skyline" viewBox="0 0 1400 600" preserveAspectRatio="xMaxYMax slice" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <linearGradient id="sky" x1="0" y1="0" x2="0" y2="1"><stop offset="0%" stop-color="#D8E4EC" stop-opacity="0.45"/><stop offset="100%" stop-color="#EEF3F6" stop-opacity="0.25"/></linearGradient>
        <linearGradient id="water" x1="0" y1="0" x2="0" y2="1"><stop offset="0%" stop-color="#B8C8D4" stop-opacity="0.3"/><stop offset="100%" stop-color="#9BADB8" stop-opacity="0.18"/></linearGradient>
        <linearGradient id="bld" x1="0" y1="0" x2="0" y2="1"><stop offset="0%" stop-color="#C8CDD2" stop-opacity="0.5"/><stop offset="100%" stop-color="#A8ADB2" stop-opacity="0.38"/></linearGradient>
        <linearGradient id="bld2" x1="0" y1="0" x2="0" y2="1"><stop offset="0%" stop-color="#B0B8BF" stop-opacity="0.48"/><stop offset="100%" stop-color="#9098A0" stop-opacity="0.32"/></linearGradient>
        <linearGradient id="bld3" x1="0" y1="0" x2="0" y2="1"><stop offset="0%" stop-color="#C4CBD2" stop-opacity="0.58"/><stop offset="100%" stop-color="#A4ABB2" stop-opacity="0.42"/></linearGradient>
      </defs>
      <rect width="1400" height="600" fill="url(#sky)"/><rect x="500" y="180" width="900" height="320" fill="#D0D8DF" opacity="0.1"/><rect x="0" y="498" width="1400" height="102" fill="url(#water)"/>
      <line x1="550" y1="518" x2="1350" y2="518" stroke="#9BADB8" stroke-width="0.8" opacity="0.28"/><line x1="600" y1="535" x2="1380" y2="535" stroke="#9BADB8" stroke-width="0.5" opacity="0.18"/><line x1="520" y1="550" x2="1300" y2="550" stroke="#9BADB8" stroke-width="0.5" opacity="0.15"/>
      <rect x="1190" y="378" width="28" height="122" fill="#B8BEC4" opacity="0.5"/><rect x="1308" y="378" width="28" height="122" fill="#B8BEC4" opacity="0.5"/><rect x="1065" y="460" width="275" height="10" fill="#B0B6BC" opacity="0.45"/>
      <polygon points="1190,378 1204,330 1218,378" fill="#B0B6BC" opacity="0.48"/><polygon points="1308,378 1322,330 1336,378" fill="#B0B6BC" opacity="0.48"/>
      <line x1="1204" y1="334" x2="1130" y2="465" stroke="#A8AEB4" stroke-width="1.4" opacity="0.3"/><line x1="1204" y1="334" x2="1280" y2="465" stroke="#A8AEB4" stroke-width="1.4" opacity="0.3"/><line x1="1322" y1="334" x2="1280" y2="465" stroke="#A8AEB4" stroke-width="1.4" opacity="0.3"/><line x1="1322" y1="334" x2="1385" y2="465" stroke="#A8AEB4" stroke-width="1.4" opacity="0.3"/>
      <ellipse cx="900" cy="330" rx="26" ry="84" fill="url(#bld3)" opacity="0.68"/><path d="M878,270 Q900,305 922,335 Q900,365 878,395" fill="none" stroke="#8A9AA2" stroke-width="0.7" opacity="0.28"/>
      <polygon points="820,498 832,315 884,295 900,498" fill="url(#bld2)" opacity="0.62"/><rect x="832" y="293" width="68" height="22" fill="#B8C0C8" opacity="0.48" rx="2"/>
      <polygon points="940,498 946,232 977,232 992,498" fill="url(#bld)" opacity="0.58"/><line x1="946" y1="255" x2="988" y2="488" stroke="#A0A8B0" stroke-width="0.7" opacity="0.28"/>
      <rect x="1002" y="248" width="52" height="250" fill="url(#bld3)" opacity="0.58"/><line x1="1028" y1="248" x2="1028" y2="498" stroke="#9AA2AA" stroke-width="0.5" opacity="0.22"/><line x1="1002" y1="305" x2="1054" y2="305" stroke="#9AA2AA" stroke-width="0.5" opacity="0.18"/><line x1="1002" y1="362" x2="1054" y2="362" stroke="#9AA2AA" stroke-width="0.5" opacity="0.18"/><line x1="1002" y1="420" x2="1054" y2="420" stroke="#9AA2AA" stroke-width="0.5" opacity="0.18"/>
      <rect x="1062" y="272" width="38" height="226" fill="url(#bld2)" opacity="0.52"/><rect x="1065" y="260" width="22" height="14" fill="#B0B8C0" opacity="0.48"/>
      <rect x="1110" y="315" width="50" height="183" fill="url(#bld)" opacity="0.48"/><rect x="1117" y="290" width="36" height="27" fill="#B8C0C8" opacity="0.42"/><rect x="1124" y="268" width="22" height="24" fill="#BBC3CB" opacity="0.38"/>
      <polygon points="775,498 782,355 818,325 822,498" fill="url(#bld3)" opacity="0.52"/>
      <rect x="740" y="385" width="38" height="113" fill="#C0C8D0" opacity="0.38"/><rect x="700" y="415" width="42" height="83" fill="#C4CCD4" opacity="0.33"/><rect x="660" y="438" width="44" height="60" fill="#C8D0D8" opacity="0.3"/><rect x="618" y="448" width="46" height="50" fill="#CAD2DA" opacity="0.28"/><rect x="575" y="458" width="48" height="40" fill="#CCD4DC" opacity="0.25"/>
      <rect x="510" y="425" width="80" height="73" fill="#C8CDD2" opacity="0.4"/><ellipse cx="550" cy="425" rx="40" ry="27" fill="#BCC2C8" opacity="0.46"/>
      <rect x="546" y="398" width="8" height="28" fill="#B8BEC4" opacity="0.42"/><ellipse cx="550" cy="398" rx="6" ry="5" fill="#B4BAC0" opacity="0.38"/>
      <line x1="550" y1="386" x2="550" y2="397" stroke="#A8AEB4" stroke-width="1.5" opacity="0.48"/><line x1="546" y1="391" x2="554" y2="391" stroke="#A8AEB4" stroke-width="1.5" opacity="0.48"/>
      <rect x="495" y="448" width="110" height="10" fill="#BCC4CA" opacity="0.38"/>
      <rect x="80" y="445" width="180" height="53" fill="#C4CAD0" opacity="0.3"/><rect x="232" y="376" width="18" height="122" fill="#BEC4CA" opacity="0.4"/>
      <ellipse cx="241" cy="390" rx="10" ry="10" fill="none" stroke="#A8AEB4" stroke-width="1" opacity="0.48"/><polygon points="232,376 241,352 250,376" fill="#BAC0C6" opacity="0.42"/>
      <rect x="80" y="440" width="180" height="8" fill="#BEC4CA" opacity="0.35"/><rect x="95" y="426" width="12" height="18" fill="#BCC2C8" opacity="0.35"/><rect x="130" y="424" width="12" height="22" fill="#BCC2C8" opacity="0.35"/><rect x="165" y="422" width="12" height="25" fill="#BCC2C8" opacity="0.35"/><rect x="200" y="426" width="12" height="18" fill="#BCC2C8" opacity="0.35"/>
      <rect x="80" y="498" width="200" height="8" fill="#B8BEC4" opacity="0.35"/><rect x="0" y="492" width="1400" height="10" fill="#B8C4CC" opacity="0.22"/>
    </svg>
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <div class="hero-eyebrow">
        <div class="ey-line"></div>
        <div class="ey-text">UK's leading iXBRL &amp; CT600 service · HMRC Recognised</div>
      </div>
      <h1 class="hero-h1"><span class="stroke">iXBRL</span> Tagging<br><span class="red">&amp; CT600</span></h1>
      <p class="hero-body">We convert financial statements and tax computations to <strong>iXBRL</strong> and <strong>file directly with HMRC</strong> as authorised agents. <strong>Best price guaranteed</strong>, or we refund in full - no questions asked.</p>
      <div class="hero-btns">
        <button class="hbtn-p">Get started <svg viewBox="0 0 14 14" fill="none" width="13" height="13"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
        <button class="hbtn-s" onclick="document.getElementById('process').scrollIntoView({behavior:'smooth'})">How it works</button>
      </div>
      <div class="hero-stats">
        <div class="hs"><div class="hs-n">1,200<span class="hs-acc">+</span></div><div class="hs-l">Happy customers</div></div>
        <div class="hs"><div class="hs-n">10<span class="hs-acc">+</span></div><div class="hs-l">Years expertise</div></div>
        <div class="hs"><div class="hs-n">7</div><div class="hs-l">Jurisdictions</div></div>
        <div class="hs"><div class="hs-n">100<span class="hs-acc">%</span></div><div class="hs-l">Refund guarantee</div></div>
      </div>
    </div>
  </section>

  <!-- ═══ SERVICES ═══ -->
  <section id="services" class="sec">
    <div class="sec-row rv">
      <div>
        <div class="sec-label">What we do</div>
        <h2 class="sec-h2">Three services.<br><em>One promise.</em></h2>
      </div>
      <p class="sec-body">From <strong>iXBRL tagging</strong> to <strong>direct HMRC filing</strong> — we handle the complete regulatory chain so your clients never miss a deadline.</p>
    </div>
    <div class="svc-table rv">
      <div class="svc-row">
        <div class="svc-n">01</div>
        <div class="svc-name">iXBRL<br>Conversion</div>
        <div>
          <div class="svc-desc">We convert financial statements and tax computations to <strong>HMRC-compliant iXBRL</strong>. Word, Excel or PDF — <strong>all formats accepted at the same price</strong>. Unlimited revisions until you're satisfied.</div>
          <div class="svc-tags"><span class="stag">Financial statements</span><span class="stag">Tax computations</span><span class="stag">From £4/page</span><span class="stag">All formats</span></div>
        </div>
        <div class="svc-link">Explore <svg viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      </div>
      <div class="svc-row">
        <div class="svc-n">02</div>
        <div class="svc-name">HMRC CT600<br>Filing</div>
        <div>
          <div class="svc-desc">We prepare your CT600 and <strong>file corporation tax returns directly with HMRC</strong> as authorised agents. <strong>Zero extra charge for amendments</strong>. Successful filing guaranteed every time.</div>
          <div class="svc-tags"><span class="stag">CT600 preparation</span><span class="stag">HMRC direct filing</span><span class="stag">£60/filing</span><span class="stag">Authorised agents</span></div>
        </div>
        <div class="svc-link">Explore <svg viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      </div>
      <div class="svc-row">
        <div class="svc-n">03</div>
        <div class="svc-name">Companies House<br>&amp; Global</div>
        <div>
          <div class="svc-desc">Annual accounts filed with <strong>Companies House</strong>. <strong>UKSEF</strong> for FCA-regulated entities. <strong>ESEF</strong> for European listed companies. Full XBRL coverage across <strong>seven jurisdictions</strong> worldwide.</div>
          <div class="svc-tags"><span class="stag">Companies House</span><span class="stag">UKSEF / FCA</span><span class="stag">ESEF / ESMA</span><span class="stag">7 jurisdictions</span></div>
        </div>
        <div class="svc-link">Explore <svg viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      </div>
    </div>
  </section>

  <!-- ═══ PROCESS ═══ -->
  <section id="process">
    <div class="proc-head rv">
      <div class="sec-label sec-label-w">How it works</div>
      <h2 class="sec-h2 sec-h2-w">Four steps.<br><em>Zero friction.</em></h2>
      <p class="sec-body sec-body-w" style="margin-top:1rem">An <strong>end-to-end process</strong> designed around your deadline. Sign up, upload, approve, file.</p>
    </div>
    <div class="proc-grid">
      <div class="proc-step rv d1">
        <div class="proc-n">01</div>
        <div class="proc-icon"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
        <div class="proc-title">Sign up &amp; select regulator</div>
        <div class="proc-desc">Create your account in <strong>minutes</strong>. Choose your authority — HMRC, FCA UKSEF, Revenue Ireland, ESMA, CIPC, ACRA, SSM or MCA.</div>
        <span class="proc-chip">2 minutes</span>
      </div>
      <div class="proc-step rv d2">
        <div class="proc-n">02</div>
        <div class="proc-icon"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17,8 12,3 7,8"/><line x1="12" y1="3" x2="12" y2="15"/></svg></div>
        <div class="proc-title">Upload documents</div>
        <div class="proc-desc">Send financial statements and tax computations in <strong>Word, Excel or PDF</strong>. <strong>Any format, same price.</strong> We handle all complexity from here.</div>
        <span class="proc-chip">Any format</span>
      </div>
      <div class="proc-step rv d3">
        <div class="proc-n">03</div>
        <div class="proc-icon"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="9,11 12,14 22,4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg></div>
        <div class="proc-title">Review &amp; approve</div>
        <div class="proc-desc">Download your iXBRL package on schedule. Request <strong>unlimited revisions at zero extra cost</strong> until you are completely satisfied.</div>
        <span class="proc-chip">Unlimited revisions</span>
      </div>
      <div class="proc-step rv d4">
        <div class="proc-n">04</div>
        <div class="proc-icon"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="22,12 18,12 15,21 9,3 6,12 2,12"/></svg></div>
        <div class="proc-title">We file on your behalf</div>
        <div class="proc-desc">As <strong>HMRC-authorised agents</strong>, we transmit your CT600 directly. <strong>Successful filing guaranteed.</strong> Full refund if not delighted.</div>
        <span class="proc-chip">Filing guaranteed</span>
      </div>
    </div>
  </section>

  <!-- ═══ AUDIENCE ═══ -->
  <section id="audience">
    <div class="aud-head rv">
      <div class="sec-label">Who we help</div>
      <h2 class="sec-h2">Every entity.<br><em>Every need.</em></h2>
      <p class="sec-body" style="margin-top:1rem">From <strong>high-volume practices</strong> to <strong>qualifying micro companies</strong> — a dedicated model built for your requirements.</p>
    </div>
    <div class="aud-grid rv">
      <div class="acc-list">
        <div class="acc-item open" onclick="doAcc(this,0)">
          <div class="acc-hd">
            <div class="acc-left">
              <div class="acc-ico"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
              <div class="acc-title">Accounting Firms</div>
            </div>
            <div class="acc-toggle"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
          </div>
          <div class="acc-bd"><div class="acc-bd-inner">
            <div class="acc-text">Your <strong>invisible iXBRL team</strong>. Dedicated support manager, <strong>monthly invoicing</strong>, <strong>volume discounts from batch 5+</strong>, and after-hours availability for peak deadlines.</div>
            <div class="acc-chips"><span class="acc-chip">Dedicated manager</span><span class="acc-chip">Volume pricing</span><span class="acc-chip">Monthly invoice</span><span class="acc-chip">After-hours</span></div>
          </div></div>
        </div>
        <div class="acc-item" onclick="doAcc(this,1)">
          <div class="acc-hd">
            <div class="acc-left">
              <div class="acc-ico"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg></div>
              <div class="acc-title">Companies</div>
            </div>
            <div class="acc-toggle"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
          </div>
          <div class="acc-bd"><div class="acc-bd-inner">
            <div class="acc-text"><strong>15% group entity discount</strong>. Priority turnaround at year-end. Dedicated account manager. <strong>CT600 and Companies House managed end-to-end.</strong></div>
            <div class="acc-chips"><span class="acc-chip">15% group discount</span><span class="acc-chip">Priority turnaround</span><span class="acc-chip">End-to-end filing</span></div>
          </div></div>
        </div>
        <div class="acc-item" onclick="doAcc(this,2)">
          <div class="acc-hd">
            <div class="acc-left">
              <div class="acc-ico"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
              <div class="acc-title">Small &amp; Micro Entities</div>
            </div>
            <div class="acc-toggle"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
          </div>
          <div class="acc-bd"><div class="acc-bd-inner">
            <div class="acc-text"><strong>Free iXBRL</strong> for qualifying entities under <strong>FRS 102/105</strong>. Unlimited revisions until HMRC accepts — at <strong>zero additional cost</strong>.</div>
            <div class="acc-chips"><span class="acc-chip">Free if qualifying</span><span class="acc-chip">FRS 102/105</span><span class="acc-chip">Unlimited revisions</span></div>
          </div></div>
        </div>
        <div class="acc-item" onclick="doAcc(this,3)">
          <div class="acc-hd">
            <div class="acc-left">
              <div class="acc-ico"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></div>
              <div class="acc-title">Charities &amp; Dormant</div>
            </div>
            <div class="acc-toggle"><svg viewBox="0 0 10 10" fill="none"><path d="M5 1v8M1 5h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
          </div>
          <div class="acc-bd"><div class="acc-bd-inner">
            <div class="acc-text"><strong>Charity SORP expertise</strong>. Free iXBRL for qualifying charities. <strong>Low flat-rate for dormant companies</strong> — often free if your entity qualifies.</div>
            <div class="acc-chips"><span class="acc-chip">Charity SORP</span><span class="acc-chip">Free if qualifying</span><span class="acc-chip">24h turnaround</span></div>
          </div></div>
        </div>
      </div>
      <div class="acc-panel" id="acc-panel">
        <div>
          <div class="ap-glyph" id="ap-g">500</div>
          <div class="ap-cat" id="ap-e">Accounting Firms</div>
          <div class="ap-quote" id="ap-q">"Your invisible iXBRL team — dedicated, fast, always available."</div>
          <div class="ap-body" id="ap-b">Over <strong>500 accounting firms</strong> across the UK trust us. <strong>Dedicated support managers</strong>, volume pricing and monthly invoicing make us the preferred iXBRL partner for practices of all sizes.</div>
        </div>
        <div class="ap-stat">
          <div class="ap-stat-n" id="ap-sn">500+</div>
          <div class="ap-stat-l" id="ap-sl">Accounting firms trust XBR Tags</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ TESTIMONIALS ═══ -->
  <section id="testimonials">
    <div class="q-head rv">
      <div class="sec-label">Client voices</div>
      <h2 class="sec-h2">What clients<br><em>actually say.</em></h2>
      <p class="sec-body" style="margin-top:1rem">Spontaneous, <strong>unsolicited feedback</strong> from real customers. We let their words speak for our service.</p>
    </div>
    <div class="q-grid rv">
      <div class="qcard">
        <div class="q-stars"><div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div></div>
        <span class="q-mark">"</span>
        <div class="q-text"><strong>Quality XBRL at a very competitive price.</strong> Quick responses and amendments done fast on request. Will definitely engage again next year without hesitation.</div>
        <div class="q-rule"></div>
        <div class="q-name">Company Secretary</div>
        <div class="q-role">Well-respected Business Group</div>
      </div>
      <div class="qcard">
        <div class="q-stars"><div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div></div>
        <span class="q-mark">"</span>
        <div class="q-text"><strong>Turned this around so quickly with very little notice.</strong> A fantastic job — I look forward to working with you again in the future, absolutely.</div>
        <div class="q-rule"></div>
        <div class="q-name">Director</div>
        <div class="q-role">Real Estate Company, London</div>
      </div>
      <div class="qcard">
        <div class="q-stars"><div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div></div>
        <span class="q-mark">"</span>
        <div class="q-text"><strong>Very impressed with the service and sensible pricing</strong> based on actual size of the accounts. Will strongly recommend whenever asked for tagging services.</div>
        <div class="q-rule"></div>
        <div class="q-name">Director</div>
        <div class="q-role">SW Development Company</div>
      </div>
    </div>
  </section>

  <!-- ═══ PRICING ═══ -->
  <section id="pricing">
    <div class="price-head rv">
      <div class="sec-label">Pricing</div>
      <h2 class="sec-h2">Transparent.<br><em>Best in market.</em></h2>
      <p class="sec-body" style="margin-top:1rem"><strong>Sensible pay-per-page pricing.</strong> No setup fees, no minimum commitment, <strong>no hidden charges</strong> — published openly.</p>
    </div>
    <div class="rv">
      <div class="price-table">
        <div class="pt-head">
          <div class="pth li">Feature</div>
          <div class="pth">iXBRL conversion</div>
          <div class="pth hi">iXBRL + CT600</div>
          <div class="pth">Firm plan</div>
        </div>
        <div class="pt-row"><div class="pt-feat">iXBRL tagging per page</div><div class="pt-val">£4</div><div class="pt-val red">£4</div><div class="pt-val">Custom</div></div>
        <div class="pt-row"><div class="pt-feat">CT600 filing with HMRC</div><div class="pt-ck"><svg viewBox="0 0 8 6" fill="none"></svg></div><div class="pt-ck on"><svg viewBox="0 0 8 6" fill="none"><path d="M1 3l2 2 4-4" stroke="var(--r)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><div class="pt-ck on"><svg viewBox="0 0 8 6" fill="none"><path d="M1 3l2 2 4-4" stroke="var(--r)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg></div></div>
        <div class="pt-row"><div class="pt-feat">Unlimited revisions</div><div class="pt-ck on"><svg viewBox="0 0 8 6" fill="none"><path d="M1 3l2 2 4-4" stroke="var(--r)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><div class="pt-ck on"><svg viewBox="0 0 8 6" fill="none"><path d="M1 3l2 2 4-4" stroke="var(--r)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><div class="pt-ck on"><svg viewBox="0 0 8 6" fill="none"><path d="M1 3l2 2 4-4" stroke="var(--r)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg></div></div>
        <div class="pt-row"><div class="pt-feat">Dedicated support manager</div><div class="pt-ck"></div><div class="pt-ck"></div><div class="pt-ck on"><svg viewBox="0 0 8 6" fill="none"><path d="M1 3l2 2 4-4" stroke="var(--r)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg></div></div>
        <div class="pt-row"><div class="pt-feat">Volume discounts</div><div class="pt-ck"></div><div class="pt-ck"></div><div class="pt-ck on"><svg viewBox="0 0 8 6" fill="none"><path d="M1 3l2 2 4-4" stroke="var(--r)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg></div></div>
        <div class="pt-row"><div class="pt-feat">Monthly invoicing</div><div class="pt-ck"></div><div class="pt-ck"></div><div class="pt-ck on"><svg viewBox="0 0 8 6" fill="none"><path d="M1 3l2 2 4-4" stroke="var(--r)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg></div></div>
        <div class="pt-row"><div class="pt-feat">Full refund guarantee</div><div class="pt-ck on"><svg viewBox="0 0 8 6" fill="none"><path d="M1 3l2 2 4-4" stroke="var(--r)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><div class="pt-ck on"><svg viewBox="0 0 8 6" fill="none"><path d="M1 3l2 2 4-4" stroke="var(--r)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><div class="pt-ck on"><svg viewBox="0 0 8 6" fill="none"><path d="M1 3l2 2 4-4" stroke="var(--r)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg></div></div>
        <div class="pt-foot">
          <div class="ptf-label">Per filing total<small>Based on 10 pages</small></div>
          <div class="ptf-val"><div class="ptf-price">£40<small>/filing</small></div><a href="#" class="ptf-btn">Get started</a></div>
          <div class="ptf-val"><div class="ptf-price red">£100<small>/filing</small></div><a href="#" class="ptf-btn primary">Get started</a></div>
          <div class="ptf-val"><div class="ptf-price" style="font-size:26px;padding-top:.5rem">Talk to us</div><a href="#" class="ptf-btn">Contact</a></div>
        </div>
      </div>
      <p class="pt-note">All prices exclude VAT &nbsp;·&nbsp; Full refund if not delighted — no questions asked</p>
    </div>
  </section>

  <!-- ═══ GLOBAL ═══ -->
  <section id="global">
    <div class="global-head rv">
      <div class="sec-label sec-label-w">Global reach</div>
      <h2 class="sec-h2 sec-h2-w">One team.<br><em>Seven jurisdictions.</em></h2>
      <p class="sec-body sec-body-w" style="margin-top:1rem">XBRL tagging and filing for statutory reports with <strong>regulators across the globe</strong> — from HMRC to ESMA to ACRA.</p>
    </div>
    <div class="r-grid rv">
      <div class="r-cell"><span class="r-flag">🇬🇧</span><div class="r-country">United Kingdom</div><div class="r-reg">HMRC · FCA · Companies House</div><div class="r-arr"><svg viewBox="0 0 12 12" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M2 10l8-8M4 2h6v6" stroke="currentColor" stroke-width="1"/></svg></div></div>
      <div class="r-cell"><span class="r-flag">🇪🇺</span><div class="r-country">European Union</div><div class="r-reg">ESMA · ESEF · iXBRL</div><div class="r-arr"><svg viewBox="0 0 12 12" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M2 10l8-8M4 2h6v6" stroke="currentColor" stroke-width="1"/></svg></div></div>
      <div class="r-cell"><span class="r-flag">🇮🇪</span><div class="r-country">Ireland</div><div class="r-reg">Revenue · iXBRL</div><div class="r-arr"><svg viewBox="0 0 12 12" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M2 10l8-8M4 2h6v6" stroke="currentColor" stroke-width="1"/></svg></div></div>
      <div class="r-cell"><span class="r-flag">🇿🇦</span><div class="r-country">South Africa</div><div class="r-reg">CIPC · iXBRL</div><div class="r-arr"><svg viewBox="0 0 12 12" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M2 10l8-8M4 2h6v6" stroke="currentColor" stroke-width="1"/></svg></div></div>
      <div class="r-cell"><span class="r-flag">🇸🇬</span><div class="r-country">Singapore</div><div class="r-reg">ACRA · BizFin+</div><div class="r-arr"><svg viewBox="0 0 12 12" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M2 10l8-8M4 2h6v6" stroke="currentColor" stroke-width="1"/></svg></div></div>
      <div class="r-cell"><span class="r-flag">🇲🇾</span><div class="r-country">Malaysia</div><div class="r-reg">SSM · MBRS</div><div class="r-arr"><svg viewBox="0 0 12 12" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M2 10l8-8M4 2h6v6" stroke="currentColor" stroke-width="1"/></svg></div></div>
      <div class="r-cell"><span class="r-flag">🇮🇳</span><div class="r-country">India</div><div class="r-reg">MCA · AOC filing</div><div class="r-arr"><svg viewBox="0 0 12 12" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M2 10l8-8M4 2h6v6" stroke="currentColor" stroke-width="1"/></svg></div></div>
      <div class="r-cell r-more">More markets coming</div>
    </div>
  </section>

  <!-- ═══ WHY US ═══ -->
  <section id="why">
    <div class="why-head rv">
      <div class="sec-label">Why choose us</div>
      <h2 class="sec-h2">Not just quality.<br><em>The full commitment.</em></h2>
      <p class="sec-body" style="margin-top:1rem">Every claim is backed by our <strong>unconditional full-refund guarantee</strong>. These are service commitments we stand behind — not marketing copy.</p>
    </div>
    <div class="why-grid rv">
      <div class="wc">
        <div class="wc-n">10<span class="wc-sup">+</span></div>
        <div class="wc-lbl">Years of XBRL experience</div>
        <div class="wc-title">A decade of deep expertise</div>
        <div class="wc-desc">Our team built some of the <strong>earliest iXBRL reports ever filed with HMRC</strong>. That real-world depth is your assurance of precision in every single filing.</div>
      </div>
      <div class="wc">
        <div class="wc-n">100<span class="wc-sup">%</span></div>
        <div class="wc-lbl">Refund guarantee</div>
        <div class="wc-title">Delight or full refund</div>
        <div class="wc-desc">If you're <strong>not completely delighted, we refund in full</strong>. No questions, no conditions, no hoops. That's the strength of our confidence in our service.</div>
      </div>
      <div class="wc">
        <div class="wc-n">£4</div>
        <div class="wc-lbl">Per page minimum</div>
        <div class="wc-title">Best price guaranteed</div>
        <div class="wc-desc">We don't run ads or sponsor conferences. <strong>Every saving is passed to you</strong> — transparent, competitive pricing that consistently <strong>beats the market</strong>.</div>
      </div>
      <div class="wc">
        <div class="wc-n">3<span class="wc-sup">×</span></div>
        <div class="wc-lbl">Security layers</div>
        <div class="wc-title">ISO-certified security</div>
        <div class="wc-desc"><strong>ISO 27001 certified. GDPR compliant.</strong> AWS EU hosting with <strong>three-layer access control</strong> and full encryption in transit and at rest.</div>
      </div>
    </div>
    <div class="cert-strip rv">
      <span class="cert">HMRC Recognised</span>
      <span class="cert">ISO 27001 Certified</span>
      <span class="cert">ISO 9001 Certified</span>
      <span class="cert">PCI DSS Compliant</span>
      <span class="cert">GDPR Ready</span>
      <span class="cert">AWS EU Hosting</span>
    </div>
  </section>

  <!-- ═══ CONTACT ═══ -->
  <section id="contact">
    <div class="rv">
      <div class="ct-h">Ready to <em>start?</em></div>
      <p class="ct-sub">Get a <strong>free trial</strong> or price quote. Our team responds within <strong>60 minutes</strong> on business days. No commitment required.</p>
    </div>
    <div class="ct-btns rv d2">
      <a href="#" class="ct-btn ct-btn-p">Create account <svg width="12" height="12" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="tel:08003579468" class="ct-btn ct-btn-g">1234 567 8910</a>
    </div>
  </section>

  <?php include 'footer.php'; ?>