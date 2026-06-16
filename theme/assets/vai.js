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
  if (toggle && nav) {
    toggle.addEventListener('click', function() {
      open = !open;
      nav.classList.toggle('nav--open', open);
      toggle.setAttribute('aria-expanded', open);
    });
    nav.querySelectorAll('a').forEach(function(a) {
      a.addEventListener('click', function() {
        open = false;
        nav.classList.remove('nav--open');
        toggle.setAttribute('aria-expanded', 'false');
      });
    });
  }

  // Scroll fade-in
  var els = document.querySelectorAll('.fade-up');
  if ('IntersectionObserver' in window) {
    var obs = new IntersectionObserver(function(es) {
      es.forEach(function(e) {
        if (e.isIntersecting) { e.target.classList.add('visible'); obs.unobserve(e.target); }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    els.forEach(function(el) { obs.observe(el); });
  }

  // Back to top
  var backBtn = document.getElementById('backTop');
  if (backBtn) {
    window.addEventListener('scroll', function() {
      backBtn.classList.toggle('show', window.scrollY > 600);
    });
  }
})();
