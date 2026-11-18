# Project BlackBookd

**Self-hosted, privacy-first, 100% FOSS personal CRM** for queer and gay dating and kink life: connections, sexual health, encounters, and an API for your own assistant (**GayHook**).

Project BlackBookd is **AGPL-3.0** software, **based on [Monica](https://github.com/monicahq/monica) by monicahq** (Laravel 12 / Inertia v5). This repository is the starting point toward a **ground-up FOSS rebuild**; the BlackBookd module layers dating, health, and privacy features on Monica’s vault/contact model without hosted paywalls or telemetry.

- **Documentation:** [docs/README.md](docs/README.md) · [BLACKBOOKD.md](docs/BLACKBOOKD.md) · [BLACKBOOKD-API.md](docs/BLACKBOOKD-API.md) · [ROADMAP.md](docs/ROADMAP.md)
- **Issues & security:** [GitHub Issues](https://github.com/freqkflag/BlackBookd/issues) · [Security advisories](https://github.com/freqkflag/BlackBookd/security/advisories)

---

## Who it’s for

Adults who want a **private, self-hosted** place to track dating and kink-related life: who you’re talking to, what stage things are in, encounters, per-contact sexual-health notes, your own test/PrEP/vaccine log, and optional blur on sensitive dashboard data—**on your server**, not a vendor’s.

## Privacy stance

- **Self-hosted:** you operate the instance; freqkflag does not run a SaaS for this fork.
- **No paywalls by default** (`BLACKBOOKD_NO_PAYWALLS=true`): storage limits and upgrade prompts are disabled for self-hosting.
- **No product telemetry** is added by this fork beyond what you configure (e.g. optional Sentry, email, maps).
- **Do not commit personal data:** no real contacts, messages, or health details in the repo—use your own `.env` and database locally.

## Features (implemented on this branch)

| Area | What you get |
|------|----------------|
| **Vaults & contacts** | Monica v5 PRM: vaults, templates, relationships, journal, reminders, documents, Sanctum API |
| **BlackBookd module** (opt-in per account) | Encounters, per-contact sexual-health profile, owner health log (STI / PrEP / doxyPEP / vaccines + reminders) |
| **Dating pipeline** | Per-contact handle, stage board, last message, next step, red flags, long-term fit; quiet list & weekly roundup API |
| **Partner notification helper** | Contacts with encounters in a lookback window from a test date |
| **Privacy** | Module disabled by default; optional dashboard blur |
| **GayHook API** | REST under `/api/blackbookd/*` with Sanctum `read`/`write` tokens ([BLACKBOOKD-API.md](docs/BLACKBOOKD-API.md)) |
| **Export** | JSON export of BlackBookd data |

### Planned (not in repo yet)

- Drag-and-drop pipeline board UI
- Inline BlackBookd fields on contact templates/modules
- Full i18n pass beyond inherited Monica locales
- DAV/CardDAV or SQL export extensions for pipeline fields
- Ground-up FOSS app (long-term; see [ROADMAP.md](docs/ROADMAP.md))

## Quick start (Docker dev image)

```bash
git clone https://github.com/freqkflag/BlackBookd.git
cd BlackBookd
cp .env.example .env
# Set APP_KEY, DB_*, etc. — never commit real secrets or personal exports.

docker build -f scripts/docker/Dockerfile -t blackbookd:local .
docker run --rm -p 8080:80 --env-file .env blackbookd:local
```

Or use npm helpers (same Dockerfile):

```bash
npm run docker:build
npm run docker:run
```

For local PHP development, see [CONTRIBUTING.md](CONTRIBUTING.md).

Enable BlackBookd in **Settings → BlackBookd** after login, then use the vault **BlackBookd** tab and the API docs.

## License & attribution

This project is licensed under **AGPL-3.0-or-later** (see [LICENSE.md](LICENSE.md)).

**Based on Monica by [monicahq](https://github.com/monicahq/monica), AGPL-3.0.** We thank the Monica community for the foundation. Project BlackBookd is maintained by [freqkflag/BlackBookd](https://github.com/freqkflag/BlackBookd); upstream Monica hosting, Patreon, and commercial services are unrelated to this fork.