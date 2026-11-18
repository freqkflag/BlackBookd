# Contributing to Project BlackBookd

Thanks for helping improve a privacy-first, self-hosted CRM. This project is **AGPL-3.0** and **based on Monica by monicahq**—keep attribution and license compatibility in mind.

## Before you start

1. Read [README.md](README.md) and [docs/BLACKBOOKD.md](docs/BLACKBOOKD.md).
2. **Never commit personal data** (real contacts, health info, `.env` secrets, or exports).
3. Search [existing issues](https://github.com/freqkflag/BlackBookd/issues) before opening a duplicate.

## Development setup

```bash
composer install
npm ci
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run dev   # Vite
php artisan serve
```

Tests (SQLite example):

```bash
DB_CONNECTION=testing php artisan migrate --force
APP_URL=http://localhost vendor/bin/phpunit --filter 'PaywallHelper|StorageHelper|StorageIndexViewHelper|BlackBookdApi'
```

## Where to put code

- **BlackBookd features:** `app/Domains/BlackBookd/`, `resources/js/Pages/Vault/BlackBookd/`, `resources/js/Pages/Settings/BlackBookd/`
- **Upstream-shaped changes:** follow existing Monica patterns; avoid renaming `config('monica.*')`, `monica:*` artisan commands, or DB identifiers unless you include backward-compatible fallbacks and tests.

## Pull requests

- Use the [pull request template](.github/PULL_REQUEST_TEMPLATE.md).
- Keep PRs focused; reference issues when applicable.
- Run PHPUnit (and lint if you touched JS/PHP style) before pushing.

## Code of conduct

This project follows the [Contributor Covenant](CODE_OF_CONDUCT.md). Report unacceptable behavior via [GitHub issues](https://github.com/freqkflag/BlackBookd/issues) or repository maintainers.

## Security

Do **not** file public issues for vulnerabilities. Use [GitHub Security Advisories](https://github.com/freqkflag/BlackBookd/security/advisories/new) (see [SECURITY.md](SECURITY.md)).