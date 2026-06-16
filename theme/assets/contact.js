// VAI Theme — Contact form AJAX handler
(function () {
  if (typeof VAI_CONTACT === 'undefined') return;
  var form = document.getElementById('vaiContactForm');
  if (!form) return;
  var btn = document.getElementById('vaiSubmitBtn');
  var status = document.getElementById('vaiFormStatus');
  var label = btn ? btn.querySelector('.vai-submit-label') : null;
  var origLabel = label ? label.textContent : 'Send Inquiry';

  function setStatus(kind, msg) {
    if (!status) return;
    status.className = 'vai-form-status' + (kind ? ' is-' + kind : '');
    status.textContent = msg || '';
  }

  function setLoading(loading) {
    if (!btn) return;
    btn.disabled = !!loading;
    if (label) label.textContent = loading ? 'Sending…' : origLabel;
  }

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    setStatus(null, '');

    // Client-side guards
    var data = new FormData(form);
    var name = (data.get('name') || '').toString().trim();
    var email = (data.get('email') || '').toString().trim();
    var msg = (data.get('message') || '').toString().trim();
    if (!name || !email || !msg) {
      setStatus('err', 'Please fill in your name, email, and message.');
      return;
    }
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      setStatus('err', 'Please enter a valid email address.');
      return;
    }
    if (!data.get('consent')) {
      setStatus('err', 'Please agree to be contacted.');
      return;
    }

    data.set('nonce', VAI_CONTACT.nonce);
    data.set('action', 'vai_contact');

    setLoading(true);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', VAI_CONTACT.ajaxUrl, true);
    xhr.timeout = 20000;
    xhr.onload = function () {
      setLoading(false);
      var resp = null;
      try { resp = JSON.parse(xhr.responseText); } catch (err) { resp = null; }
      if (xhr.status >= 200 && xhr.status < 300 && resp && resp.success) {
        setStatus('ok', (resp.data && resp.data.msg) || 'Thanks! Your message has been sent.');
        form.reset();
      } else {
        var m = (resp && resp.data && resp.data.msg) ? resp.data.msg : 'Sorry, something went wrong. Please try again or message us on WhatsApp.';
        setStatus('err', m);
      }
    };
    xhr.onerror = function () {
      setLoading(false);
      setStatus('err', 'Network error. Please check your connection and try again.');
    };
    xhr.ontimeout = function () {
      setLoading(false);
      setStatus('err', 'Request timed out. Please try again.');
    };
    xhr.send(data);
  });
})();
