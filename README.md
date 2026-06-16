# VAI Theme

Custom WordPress theme for **Virtual Assistant Indonesia** (V.A.I) — clean, modern, conversion-focused.

> Personal, executive, and operational support since 2011. Headquartered in Jakarta, serving clients worldwide.

Live: https://vai.168-144-37-19.sslip.io/

## Features

- **Custom page templates** — home, achievement, testimonials, contact, rates
- **Hero + founder + services + how-it-works + testimonials + pricing + CTA** — all composed from scratch, no block editor
- **Testimonials** — featured card (dark navy hero) + 3-col standard grid, sort by impact, flag + country code meta
- **Press logos** — grayscale brand strip with hover-lift links to real outlet URLs
- **Pricing** — Monthly/Annual billing toggle (saves 20%) + On Demand/Dedicated model toggle, JS-driven price swap
- **Contact form** — AJAX + `wp_mail()` + honeypot + 1/30s + 5/hr rate limit, fallback to local log if MTA unavailable
- **Hash link routing** — `vai_hash_link($hash)` helper, returns `#hash` on home, `home_url('/#hash')` elsewhere
- **Mobile-first** — 1-col testimonial + stacked featured card below 600px
- **Accessible** — skip link, semantic `<main>`, focus rings, reduced-motion, form `aria-label`
- **Fast** — preconnect Google Fonts, theme-color, twitter:card, lazy-loaded images below fold

## Page Templates

| Template | Slug | Description |
|---|---|---|
| `page-home.php` | `/` | Landing — hero, founder, services, how-it-works, testimonials, pricing, CTA |
| `page-blog.php` | `/achievement/` | Press / "As Featured In" — 22 outlet logos + 22 article cards |
| `page-testimonial.php` | `/testimonials/` | Region-grouped full testimonials (3 regions × 7 cards) |
| `page-rates.php` | `/pricing/` | Pricing with billing toggle + includes + FAQ |
| `page-contact.php` | `/contact-us/` | Contact form + WhatsApp + email + 4 social + FAQ |

## File Structure

```
vai-wp/
├── docker-compose.yml          # vai-wp (Apache/PHP) + vai-db (MariaDB)
├── .gitignore
└── theme/                      # Mounted at wp-content/themes/vai-theme
    ├── style.css               # 35KB, all custom styles
    ├── functions.php           # vai_hash_link(), vai_handle_contact(), vai_asset()
    ├── header.php / footer.php # Site shell + skip link
    ├── page-*.php              # Custom templates above
    ├── page.php / page-test.php
    ├── index.php
    └── assets/
        ├── vai.js              # Mobile menu, billing toggle, form AJAX
        ├── contact.js
        ├── media-logos/        # 18 press outlet logos
        ├── photos/             # Mimi, articles, brand
        └── icons/              # 9 service icons
```

## Install (local dev)

```bash
git clone https://github.com/creativealip-rgb/vai-wp-theme.git
cd vai-wp-theme
docker compose up -d
# WordPress at http://localhost:8091
# Mount ./theme into container's wp-content/themes/vai-theme
```

## Design Tokens

```
--navy:   #0B2535
--teal:   #2A6263
--teal-3: #4BB2B3
--cream:  #F4EEE2
--sage:   #92AA9B
--serif:  'Cormorant Garamond', Georgia, serif
--sans:   'DM Sans', -apple-system, system-ui, sans-serif
```

## Credits

- Design + build: Alip + V.A.I
- Press logos: respective outlets (Outsource Accelerator, GoodFirms, DesignRush, etc.)

## License

GPLv2 or later — see [LICENSE](LICENSE).
