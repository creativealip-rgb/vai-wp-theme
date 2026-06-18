// VAI Theme — JS
(function() {
  // Plan toggle (On Demand / Dedicated)
  document.querySelectorAll('.pricing-toggle button').forEach(function(btn) {
    btn.addEventListener('click', function() {
      document.querySelectorAll('.pricing-toggle button').forEach(function(b) { b.classList.remove('is-active'); });
      btn.classList.add('is-active');
      document.querySelectorAll('[data-grid]').forEach(function(g) {
        g.style.display = g.dataset.grid === btn.dataset.plan ? 'grid' : 'none';
      });
    });
  });

  // Billing toggle (Monthly / Annual) — swaps price-meta text via data attributes
  document.querySelectorAll('.billing-toggle button').forEach(function(btn) {
    btn.addEventListener('click', function() {
      document.querySelectorAll('.billing-toggle button').forEach(function(b) { b.classList.remove('is-active'); });
      btn.classList.add('is-active');
      var billing = btn.dataset.billing;
      document.querySelectorAll('.price-meta[data-monthly][data-annual]').forEach(function(el) {
        var next = el.getAttribute('data-' + billing);
        if (next) el.textContent = next;
      });
    });
  });

  // Mobile menu
  var toggle = document.querySelector('.menu-toggle');
  var nav = document.querySelector('.nav');
  var open = false;
  function closeMenu() {
    open = false;
    nav.classList.remove('nav--open');
    toggle.setAttribute('aria-expanded', 'false');
  }
  function openMenu() {
    open = true;
    nav.classList.add('nav--open');
    toggle.setAttribute('aria-expanded', 'true');
  }
  if (toggle && nav) {
    toggle.addEventListener('click', function(e) {
      e.stopPropagation();
      if (open) closeMenu(); else openMenu();
    });
    nav.querySelectorAll('a').forEach(function(a) {
      a.addEventListener('click', closeMenu);
    });
    // Click outside closes menu
    document.addEventListener('click', function(e) {
      if (open && !nav.contains(e.target) && !toggle.contains(e.target)) closeMenu();
    });
    // Escape key closes menu
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && open) closeMenu();
    });
  }

  // Scroll fade-in — observe + immediately reveal anything already in viewport on load
  var els = document.querySelectorAll('.fade-up');
  if ('IntersectionObserver' in window) {
    var obs = new IntersectionObserver(function(es) {
      es.forEach(function(e) {
        if (e.isIntersecting) { e.target.classList.add('is-visible'); obs.unobserve(e.target); }
      });
    }, { threshold: 0.05, rootMargin: '0px 0px -20px 0px' });
    els.forEach(function(el) { obs.observe(el); });
    // Belt-and-suspenders: after first paint, reveal anything within 2x viewport (handles initial render + cached pages)
    requestAnimationFrame(function() {
      els.forEach(function(el) {
        var r = el.getBoundingClientRect();
        if (r.top < window.innerHeight * 2 && r.bottom > 0) {
          el.classList.add('is-visible');
          obs.unobserve(el);
        }
      });
    });
  } else {
    // No IO support — reveal everything immediately
    els.forEach(function(el) { el.classList.add('is-visible'); });
  }

  // Back to top
  var backBtn = document.getElementById('backTop');
  if (backBtn) {
    window.addEventListener('scroll', function() {
      backBtn.classList.toggle('show', window.scrollY > 600);
    });
  }
})();
