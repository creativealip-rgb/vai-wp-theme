<?php
/* Template Name: VAI Contact */
get_header();
?>

<!-- HERO -->
<section class="hero" style="min-height:36vh; padding:80px 0 50px;">
  <div class="container" style="text-align:center;">
    <span class="hero-eyebrow">Get in touch</span>
    <h1>Let's build something<br><em>together</em>.</h1>
    <p class="hero-sub" style="max-width:640px; margin:18px auto 0;">
      Free consultation. We'll review your workload, recommend the right plan, and answer everything you need to know — no strings attached.
    </p>
    <div class="svc-hero-stats" style="margin-top:40px;">
      <div class="svc-hero-stat"><b>&lt; 2h</b><span>avg reply</span></div>
      <div class="svc-hero-stat"><b>4</b><span>channels</span></div>
      <div class="svc-hero-stat"><b>14+</b><span>years</span></div>
      <div class="svc-hero-stat"><b>99%</b><span>satisfaction</span></div>
    </div>
  </div>
</section>

<!-- CONTACT + FORM -->
<section class="section">
  <div class="container">
    <div class="contact-grid">
      <!-- LEFT: form -->
      <div class="contact-form-wrap">
        <div class="svc-detail-head" data-num="01" style="text-align:left; margin-bottom:32px; max-width:none;">
          <span class="svc-detail-tag" style="margin:0;">Inquiry form</span>
          <h2 style="margin:8px 0 12px;">Send us a <em>message</em>.</h2>
          <p style="color:var(--ink-soft);">We reply within 1 business day — usually faster. No spam, no sales pressure, just a real conversation about whether we're the right fit.</p>
        </div>

        <form id="vaiContactForm" class="vai-form" novalidate aria-label="Contact form">
          <div class="form-row">
            <div class="form-field">
              <label for="vaiName">Your name *</label>
              <input type="text" id="vaiName" name="name" required>
            </div>
            <div class="form-field">
              <label for="vaiEmail">Email *</label>
              <input type="email" id="vaiEmail" name="email" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-field">
              <label for="vaiCompany">Company / brand</label>
              <input type="text" id="vaiCompany" name="company">
            </div>
            <div class="form-field">
              <label for="vaiCountry">Country</label>
              <input type="text" id="vaiCountry" name="country" placeholder="e.g. Singapore">
            </div>
          </div>
          <div class="form-field">
            <label for="vaiNeed">What kind of help do you need?</label>
            <select id="vaiNeed" name="need">
              <option value="">Select an area (optional)</option>
              <option>Personal Assistant</option>
              <option>Executive Administration</option>
              <option>Travel Management</option>
              <option>Marketing &amp; Advertising</option>
              <option>Social Media Management</option>
              <option>Research &amp; Data Entry</option>
              <option>Event Planner</option>
              <option>Legal Consultant</option>
              <option>Project Support / Custom</option>
              <option>Not sure yet</option>
            </select>
          </div>
          <div class="form-field">
            <label for="vaiMsg">Tell us about your workload *</label>
            <textarea id="vaiMsg" name="message" rows="5" required placeholder="A few sentences about the kind of work you'd like to delegate, hours per week, timing, etc."></textarea>
          </div>
          <div class="form-field form-field--check">
            <label>
              <input type="checkbox" name="consent" required>
              <span>I agree to be contacted by VAI about my inquiry.</span>
            </label>
          </div>
          <!-- Honeypot — hidden from humans and screen readers, bots will fill it -->
          <div aria-hidden="true" style="position:absolute;left:-9999px;width:1px;height:1px;overflow:hidden;">
            <label for="vaiWebsite" aria-label="Website (do not fill)">Website</label>
            <input type="text" id="vaiWebsite" name="vai_website" tabindex="-1" autocomplete="off" value="">
          </div>
          <button type="submit" class="btn btn--primary btn--lg" id="vaiSubmitBtn">
            <span class="vai-submit-label">Send Inquiry</span>
            <svg class="arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </button>
          <div id="vaiFormStatus" class="vai-form-status" role="status" aria-live="polite"></div>
        </form>

        <noscript>
          <p style="margin-top:24px; padding:14px 18px; background:var(--cream); border-radius:10px; font-size:14px;">
            JavaScript is disabled. Email us directly at <a href="mailto:hello@virtualassistant.id"><strong>hello@virtualassistant.id</strong></a> or use the WhatsApp button.
          </p>
        </noscript>
      </div>

      <!-- RIGHT: contact details -->
      <aside class="contact-aside">
        <div class="contact-card">
          <div class="contact-card-icon">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          </div>
          <div>
            <div class="contact-card-label">WhatsApp</div>
            <a class="contact-card-value" href="https://wa.me/6281234567890" target="_blank" rel="noopener">+62 812 3456 7890</a>
            <div class="contact-card-meta">Fastest reply · 9am–7pm WIB</div>
          </div>
        </div>

        <div class="contact-card">
          <div class="contact-card-icon">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          </div>
          <div>
            <div class="contact-card-label">Email</div>
            <a class="contact-card-value" href="mailto:hello@virtualassistant.id">hello@virtualassistant.id</a>
            <div class="contact-card-meta">Reply within 1 business day</div>
          </div>
        </div>

        <div class="contact-card">
          <div class="contact-card-icon">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <div>
            <div class="contact-card-label">Head office</div>
            <div class="contact-card-value">Jl. Tanah Kusir 2, Arteri Pondok Indah<br>Jakarta Selatan, Indonesia</div>
            <div class="contact-card-meta">By appointment only</div>
          </div>
        </div>

        <div class="contact-card contact-card--social">
          <div class="contact-card-label">Follow us</div>
          <div class="contact-social-row">
            <a href="https://www.instagram.com/virtualassistant_id/" target="_blank" rel="noopener" aria-label="Instagram">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 12a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM17.5 6.5h.01"/></svg>
            </a>
            <a href="https://www.linkedin.com/company/virtual-assistant-indonesia/" target="_blank" rel="noopener" aria-label="LinkedIn">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2zM4 6a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>
            </a>
            <a href="https://www.facebook.com/virtualassistant.id" target="_blank" rel="noopener" aria-label="Facebook">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
            </a>
            <a href="https://www.youtube.com/@VirtualAssistantIndonesia" target="_blank" rel="noopener" aria-label="YouTube">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"/><polygon points="9.75,15.02 15.5,11.75 9.75,8.48"/></svg>
            </a>
          </div>
        </div>

        <div class="contact-faq">
          <span class="eyebrow">Quick answers</span>
          <details class="contact-faq-item">
            <summary>How quickly do you reply?</summary>
            <p>Within 1 business day — usually the same day. WhatsApp replies typically within 2 hours during business hours (9am–7pm WIB).</p>
          </details>
          <details class="contact-faq-item">
            <summary>Do you sign NDAs?</summary>
            <p>Yes, before kickoff for every engagement. Standard mutual NDA or your template — whichever you prefer.</p>
          </details>
          <details class="contact-faq-item">
            <summary>What's the minimum commitment?</summary>
            <p>None. On Demand plans are month-to-month. Cancel any time with 30 days notice, no questions asked.</p>
          </details>
        </div>
      </aside>
    </div>
  </div>
</section>

<section class="cta-band">
  <div class="container">
    <h2>Prefer to <em>book a call</em>?</h2>
    <p style="margin:18px auto 32px;">Pick a time directly via our scheduling form. 30 minutes, free, no obligation.</p>
    <a href="https://form.jotform.com/202773574256057" target="_blank" rel="noopener" class="btn btn--cream btn--lg">Book a Free Consultation
      <svg class="arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
    </a>
  </div>
</section>

<style>
/* Contact page — local styles */
.contact-grid { display: grid; grid-template-columns: 1.2fr .8fr; gap: 64px; align-items: start; }
.vai-form { display: flex; flex-direction: column; gap: 18px; }
.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; }
.form-field { display: flex; flex-direction: column; gap: 8px; }
.form-field label { font-family: var(--sans); font-size: 13px; font-weight: 600; color: var(--ink); }
.form-field input, .form-field select, .form-field textarea {
  width: 100%; padding: 13px 15px; border: 1.5px solid var(--line-strong); border-radius: 10px;
  font-family: var(--sans); font-size: 15px; color: var(--ink); background: #fff;
  transition: border-color .2s ease, box-shadow .2s ease;
}
.form-field input:hover, .form-field select:hover, .form-field textarea:hover { border-color: rgba(42,98,99,.35); }
.form-field input:focus, .form-field select:focus, .form-field textarea:focus {
  outline: none; border-color: var(--teal); box-shadow: 0 0 0 4px rgba(42,98,99,.10);
}
.form-field--check label { display: flex; align-items: flex-start; gap: 10px; font-weight: 400; font-size: 14px; color: var(--ink-soft); }
.form-field--check input { width: auto; margin-top: 3px; }
.vai-form .btn { align-self: flex-start; margin-top: 4px; }
.vai-form-status { font-size: 14px; min-height: 22px; padding: 12px 16px; border-radius: 10px; line-height: 1.45; }
.vai-form-status:empty { display: none; }
.vai-form-status.is-ok { color: var(--teal); background: rgba(42,98,99,.10); border: 1px solid rgba(42,98,99,.25); }
.vai-form-status.is-err { color: #b54545; background: rgba(181,69,69,.08); border: 1px solid rgba(181,69,69,.25); }

.contact-aside { display: flex; flex-direction: column; gap: 14px; position: sticky; top: 100px; }
.contact-card { display: flex; gap: 14px; padding: 18px 20px; background: #fff; border: 1px solid var(--line); border-radius: 14px; transition: border-color .2s ease, transform .2s ease; }
.contact-card:hover { border-color: var(--teal); transform: translateY(-1px); }
.contact-card-icon { width: 42px; height: 42px; border-radius: 10px; background: var(--cream); color: var(--teal); display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
.contact-card-label { font-family: var(--sans); font-size: 11px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: var(--teal); margin-bottom: 4px; }
.contact-card-value { font-family: var(--sans); font-size: 15px; color: var(--navy); font-weight: 600; line-height: 1.4; display: block; }
a.contact-card-value:hover { color: var(--teal); }
.contact-card-meta { font-size: 13px; color: var(--ink-soft); margin-top: 4px; }
.contact-card--social { flex-direction: column; gap: 10px; }
.contact-social-row { display: flex; gap: 10px; }
.contact-social-row a { width: 38px; height: 38px; border-radius: 10px; background: var(--cream); color: var(--navy); display: flex; align-items: center; justify-content: center; transition: background .2s, color .2s; }
.contact-social-row a:hover { background: var(--navy); color: var(--cream); }

/* Quick answers (collapsible) */
.contact-faq { margin-top: 6px; padding: 20px 22px; background: var(--cream); border-radius: 14px; }
.contact-faq .eyebrow { display: block; margin-bottom: 14px; }
.contact-faq-item { border-top: 1px solid var(--line); padding: 14px 0; }
.contact-faq-item:first-of-type { border-top: 0; padding-top: 0; }
.contact-faq-item summary {
  font-family: var(--sans); font-size: 14px; font-weight: 600;
  color: var(--navy); cursor: pointer; list-style: none;
  display: flex; justify-content: space-between; align-items: center; gap: 12px;
}
.contact-faq-item summary::-webkit-details-marker { display: none; }
.contact-faq-item summary::after { content: '+'; font-size: 20px; color: var(--teal); font-weight: 400; line-height: 1; transition: transform .2s ease; }
.contact-faq-item[open] summary::after { content: '−'; }
.contact-faq-item p { margin-top: 8px; font-size: 13.5px; color: var(--ink-soft); line-height: 1.6; }

@media (max-width: 920px) {
  .contact-grid { grid-template-columns: 1fr; gap: 40px; }
  .contact-aside { position: static; }
  .form-row { grid-template-columns: 1fr; }
}
</style>

<?php get_footer(); ?>
