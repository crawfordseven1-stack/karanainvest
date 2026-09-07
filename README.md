# Karana Investment Group — Website

Multi-section marketing site with a PHP contact-form handler. Static HTML/CSS/JS +
one PHP script — **no build step**. Hosted on **Hostinger** (needs PHP + `mail()`),
source on **GitHub**.

## Files

| File | Purpose |
|---|---|
| `index.html` | Main page (hero, about, criteria, partnerships, inquiry forms) |
| `styles.css` | Visual design + mobile layout |
| `script.js` | Mobile menu + inquiry dialog (`<dialog>`) |
| `submit.php` | Form handler — emails inquiries to `info@karanainvest.com`, then redirects to `thank-you.html` |
| `thank-you.html` | Post-submit confirmation page |
| `assets/` | Logo + hero banner |
| `.htaccess` | HTTPS redirect, security headers, caching, compression (Apache/Hostinger) |
| `robots.txt` / `sitemap.xml` | Search engine basics (domain: `karanainvest.com`) |
| `.github/workflows/deploy.yml` | Auto-deploy to Hostinger on push to `main` |

## Before public launch

- Confirm the domain is `karanainvest.com` — otherwise update the canonical/OG tags in
  `index.html`, `robots.txt`, and `sitemap.xml`.
- Create the mailbox `info@karanainvest.com` in Hostinger (hPanel → Emails) so
  `submit.php` can deliver.
- Send one test inquiry after deploying. If it doesn't arrive: confirm PHP `mail()` is
  enabled for the plan, and check the spam folder.
- Have a securities attorney review the final public copy before any fundraising —
  the copy is written to avoid publicly offering securities or quoting returns.

## Push to GitHub

```bash
cd "C:\Users\User\Karana Investment Group\karanainvest"
git push
```

Remote `origin` is already set to `https://github.com/crawfordseven1-stack/karanainvest`.

## Deploy to Hostinger — pick one

### Option A: Hostinger's built-in Git (in hPanel, not GitHub)

1. hPanel → your website → **Advanced → GIT**.
2. Repository `https://github.com/crawfordseven1-stack/karanainvest.git`, branch `main`,
   directory blank (deploys into `public_html`).
3. **Create**, then use the **Deploy** button on the repo row. For auto-deploy, add the
   webhook URL it shows to GitHub → repo **Settings → Webhooks** (`application/json`).
   - Private repo: add the SSH key hPanel shows you to GitHub → repo **Settings → Deploy keys** first.

### Option B: GitHub Actions over FTP (workflow already included)

1. hPanel → **Files → FTP Accounts** — note host, username, password.
2. GitHub repo → **Settings → Secrets and variables → Actions** → add
   `FTP_SERVER`, `FTP_USERNAME`, `FTP_PASSWORD`.
3. Push to `main` (or run the workflow from the **Actions** tab). Uploads to `public_html/`.

## Local preview

`index.html` opens in a browser, but the contact form needs PHP: run `php -S localhost:8000`
in this folder to test `submit.php` (mail delivery only works on the real host).
