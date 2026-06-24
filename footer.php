<!-- ═══ FOOTER — FIXED ═══ -->
  <footer>
    <div class="ft-top">
      <!-- Brand column -->
      <div class="ft-brand">
        <div class="ft-logo">
          <img src="./assets/img/XBR Logo.png" height="70" alt="">
        </div>
        <p class="ft-tagline">"Making regulatory reporting <strong>effortless</strong> — so you can focus on what truly matters to your clients."</p>
        <div class="ft-contact-list">
          <div class="ft-contact-item">📞 <a href="tel:08003579468">1234 567 8910</a></div>
          <div class="ft-contact-item">Mon–Fri &nbsp;08:00–20:00</div>
          <!-- <div class="ft-contact-item">2nd Floor, College House, 17 King Edwards Road, Ruislip, London HA4 7AE</div> -->
          <div class="ft-contact-item">7nd street, Loren et, Main Road, maiores, London</div>
        </div>
      </div>

      <!-- Services -->
      <div class="ft-col">
        <div class="ft-col-h">Services</div>
        <ul class="ft-links">
          <li><a href="#">iXBRL conversion</a></li>
          <li><a href="#">CT600 filing</a></li>
          <li><a href="#">Companies House</a></li>
          <li><a href="#">UKSEF · FCA</a></li>
          <li><a href="#">ESEF · ESMA</a></li>
        </ul>
      </div>

      <!-- Markets -->
      <div class="ft-col">
        <div class="ft-col-h">Markets</div>
        <ul class="ft-links">
          <li><a href="#">United Kingdom</a></li>
          <li><a href="#">European Union</a></li>
          <li><a href="#">South Africa</a></li>
          <li><a href="#">Ireland</a></li>
          <li><a href="#">Singapore</a></li>
          <li><a href="#">Malaysia</a></li>
          <li><a href="#">India</a></li>
        </ul>
      </div>

      <!-- Company -->
      <div class="ft-col">
        <div class="ft-col-h">Company</div>
        <ul class="ft-links">
          <li><a href="#">About XBR Tags</a></li>
          <li><a href="#">Why choose us</a></li>
          <li><a href="#">Security &amp; privacy</a></li>
          <li><a href="#">FAQs</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact us</a></li>
        </ul>
      </div>
    </div>

    <div class="ft-bottom">
      <div class="ft-copy">© 2026 XBR TAGS LTD &nbsp;·&nbsp; HMRC RECOGNISED &nbsp;·&nbsp; ISO 27001 &amp; 9001 CERTIFIED &nbsp;·&nbsp; GDPR COMPLIANT</div>
      <div class="ft-legal">
        <a href="#">Terms of use</a>
        <a href="#">Privacy policy</a>
        <a href="#">Cookie settings</a>
      </div>
    </div>
  </footer>

</div><!-- .wrap -->


<script>
/* ════════════════════════════════════════════════════════════
   DESKTOP NAV: hover-only dropdowns
   - Blurs .nl buttons on mousedown so :focus-within never
     keeps a dropdown open after a click
   - Does nothing on mobile (≤900px) — mobile uses the
     separate mm-* drawer instead
════════════════════════════════════════════════════════════ */
(function () {
  var navLinks = document.querySelectorAll('.nav-links .nl');

  navLinks.forEach(function (btn) {
    /* On mousedown (fires before focus), immediately blur so
       :focus-within never activates                          */
    btn.addEventListener('mousedown', function (e) {
      if (window.innerWidth > 900) {
        e.preventDefault(); /* stops focus altogether */
      }
    });

    /* Safety net: if focus lands anyway, blur it */
    btn.addEventListener('focus', function () {
      if (window.innerWidth > 900) {
        this.blur();
      }
    });
  });
})();


/* ════════════════════════════════════════════════════════════
   HAMBURGER DRAWER  (unchanged — keep your existing code)
════════════════════════════════════════════════════════════ */
var hamburger = document.getElementById('hamburger');
var mobileMenu = document.getElementById('mobileMenu');
var mmClose    = document.getElementById('mmClose');
var mmBackdrop = document.getElementById('mmBackdrop');

function openMenu(){
  mobileMenu.classList.add('open');
  hamburger.classList.add('open');
  hamburger.setAttribute('aria-expanded','true');
  document.body.style.overflow='hidden';
}
function closeMenu(){
  mobileMenu.classList.remove('open');
  hamburger.classList.remove('open');
  hamburger.setAttribute('aria-expanded','false');
  document.body.style.overflow='';
}
hamburger.addEventListener('click',function(){
  mobileMenu.classList.contains('open')?closeMenu():openMenu();
});
mmClose.addEventListener('click',closeMenu);
mmBackdrop.addEventListener('click',closeMenu);
document.addEventListener('keydown',function(e){if(e.key==='Escape')closeMenu();});
window.addEventListener('resize',function(){if(window.innerWidth>900)closeMenu();});

/* ── Mobile sub-menu accordion ── */
function toggleSub(el){
  if(!el.classList.contains('has-sub'))return;
  var isOpen=el.classList.contains('open');
  document.querySelectorAll('.mm-item.has-sub').forEach(function(x){x.classList.remove('open');});
  if(!isOpen)el.classList.add('open');
}

/* ── Nav scroll shadow ── */
window.addEventListener('scroll',function(){
  document.getElementById('nav').classList.toggle('scrolled',window.scrollY>10);
},{passive:true});

/* ── Scroll reveal ── */
var io=new IntersectionObserver(function(entries){
  entries.forEach(function(e){if(e.isIntersecting)e.target.classList.add('in');});
},{threshold:0.07,rootMargin:'0px 0px -24px 0px'});
document.querySelectorAll('.rv').forEach(function(el){io.observe(el);});

/* ── Audience accordion ── */
var apd=[
  {g:'500',e:'Accounting Firms',q:'"Your invisible iXBRL team — dedicated, fast, always available."',b:'Over 500 accounting firms across the UK trust us. Dedicated support managers, volume pricing and monthly invoicing make us the preferred iXBRL partner for practices of all sizes.',sn:'500+',sl:'Accounting firms trust XBR Tags'},
  {g:'700',e:'Companies',q:'"15% group discount, priority turnaround — complete peace of mind."',b:'Group companies benefit from 15% off across all entities. Dedicated account manager handles every filing. CT600 and Companies House — all managed end-to-end.',sn:'700+',sl:'Company filings completed'},
  {g:'∞',e:'Small & Micro Entities',q:'"Free iXBRL for qualifying entities — unlimited revisions included."',b:'Small and micro entities under FRS 102/105 may qualify for free iXBRL conversion. Unlimited revisions until HMRC accepts at zero additional cost.',sn:'Free',sl:'For qualifying micro entities'},
  {g:'100',e:'Charities & Dormant',q:'"Specialist SORP expertise, free conversion for qualifying charities."',b:'We understand charity fund accounting and SORP requirements. Qualifying charities receive free iXBRL. Dormant companies get our lowest flat-rate pricing.',sn:'100+',sl:'Charities & dormant companies served'}
];
function doAcc(el,i){
  document.querySelectorAll('.acc-item').forEach(function(x){x.classList.remove('open');});
  el.classList.add('open');
  var d=apd[i];
  document.getElementById('ap-g').textContent=d.g;
  document.getElementById('ap-e').textContent=d.e;
  document.getElementById('ap-q').textContent=d.q;
  document.getElementById('ap-b').textContent=d.b;
  document.getElementById('ap-sn').textContent=d.sn;
  document.getElementById('ap-sl').textContent=d.sl;
}

/* ── Mobile: auto-animate center service row on scroll into view ── */
(function(){
  if(window.innerWidth > 900) return;
  var rows = document.querySelectorAll('.svc-row');
  if(rows.length < 2) return;
  var centerRow = rows[Math.floor(rows.length / 2)];
  function activateCenter(){
    rows.forEach(function(r){r.classList.remove('mob-active');});
    centerRow.classList.add('mob-active');
  }
  function deactivateCenter(){
    centerRow.classList.remove('mob-active');
  }
  var svcSection = document.getElementById('services');
  if(svcSection){
    var obs = new IntersectionObserver(function(entries){
      entries.forEach(function(e){
        if(e.isIntersecting){activateCenter();}
        else{deactivateCenter();}
      });
    },{threshold:0.3});
    obs.observe(svcSection);
  }
  window.addEventListener('resize',function(){
    if(window.innerWidth > 900){
      rows.forEach(function(r){r.classList.remove('mob-active');});
    }
  });
})();
</script>

</body>
</html>
