# Karana Investment Group — Website

Single-page static site (plain HTML/CSS, no build step). Hosted on **Hostinger**,
source on **GitHub**.

## Files

| File | Purpose |
|---|---|
| `index.html` | Page content |
| `styles.css` | Visual design + mobile layout |
| `.htaccess` | HTTPS redirect, security headers, caching, compression (Apache/Hostinger) |
| `robots.txt` / `sitemap.xml` | Search engine basics |
| `.github/workflows/deploy.yml` | Auto-deploy to Hostinger on push to `main` |

## Before public launch

- Replace `contact@karanainvestmentgroup.com` in `index.html` with the confirmed company email.
- Confirm the legal name / ending (LLC, Inc.).
- Update the domain in `robots.txt` and `sitemap.xml` if it isn't `karanainvestmentgroup.com`.

## Push to GitHub

```bash
cd "C:\Users\User\Karana Investment Group\karanainvest"
git branch -M main
git remote add origin https://github.com/<you>/karanainvest.git
git push -u origin main
```

(Or create the repo with `gh repo create karanainvest --private --source . --push`.)

## Deploy to Hostinger — pick one

### Option A: Hostinger's built-in Git (simplest, no secrets)

1. hPanel → your website → **Advanced → GIT**.
2. Repository: `https://github.com/<you>/karanainvest.git`, branch `main`,
   directory: leave blank (deploys into `public_html`).
3. **Create**, then **Deploy**. For auto-deploy, copy the webhook URL shown and add it
   in GitHub → repo **Settings → Webhooks** (content type `application/json`).

### Option B: GitHub Actions over FTP (already wired up)

1. hPanel → **Files → FTP Accounts** — note the FTP host, username, password.
2. GitHub repo → **Settings → Secrets and variables → Actions** → add:
   - `FTP_SERVER` (e.g. `ftp://yourdomain.com`)
   - `FTP_USERNAME`
   - `FTP_PASSWORD`
3. Push to `main` — `deploy.yml` uploads the site to `public_html/`.
   Adjust `server-dir` in the workflow if the domain uses a subfolder or addon domain.

## Local preview

Open `index.html` in a browser, or run `npx serve` in this folder.
