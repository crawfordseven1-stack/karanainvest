# Karana Investment Group — Website

**Current site = the "EXACT APPROVED" design** from
`https://karana-investment-group.seventhebless.chatgpt.site/`
(source: `KARANA_EXACT_APPROVED_HOSTINGER_SITE.zip`, 2026-09-08).

The entire site is a **single self-contained file**: `index.html` (~3.5 MB).
Design, CSS, JavaScript, logo, and banner are all embedded inside it — there is no
`styles.css`, `assets/` folder, or PHP. The contact link is a `mailto:` to
`info@karanainvest.com`.

## Files

| File | Purpose |
|---|---|
| `index.html` | The whole website (everything embedded) |
| `.htaccess` | HTTPS redirect + security headers (Apache/Hostinger) |
| `robots.txt` / `sitemap.xml` | Search-engine basics (domain: `karanainvest.com`) |
| `.github/workflows/deploy.yml` | Optional FTP auto-deploy to Hostinger on push |
| `READ_ME_FIRST.txt` | The install note that shipped in the approved zip |

## Deploy to Hostinger

### Simplest — upload the one file
1. hPanel → **Files → File Manager** → open **`public_html`**
2. Delete the old `index.html` (and any old `styles.css`, `assets/`, `submit.php`)
3. **Upload** the new `index.html`
4. Visit `https://karanainvest.com` — hard-refresh (Ctrl+F5)

### Or — Hostinger built-in Git
hPanel → **Advanced → GIT** → repo
`https://github.com/crawfordseven1-stack/karanainvest.git`, branch `main`,
directory blank → **Deploy**. Add the webhook it shows to GitHub → repo
**Settings → Webhooks** for auto-deploy on push.

### Or — GitHub Actions (FTP)
Add repo secrets `FTP_SERVER` / `FTP_USERNAME` / `FTP_PASSWORD`
(hPanel → Files → FTP Accounts); every push to `main` then uploads to `public_html/`.

## Design history

Earlier commits held a navy/gold multi-section design that came from several other
ChatGPT zip exports (`..._Netlify.zip`, `..._Hostinger_Professional.zip`,
`KARANA_FINAL_EXTRACT_FIRST_HOSTINGER*.zip`) — those all shared one stylesheet and
were not the approved look. Commit `9e10188` also has a from-scratch Claude redesign
that was never deployed. History is intact if any of those is wanted back.

## Local preview

Double-click `index.html`, or run `python -m http.server 8000` in this folder.
