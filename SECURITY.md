# Security policy

## Supported versions

Security fixes are applied on the **default branch** of [freqkflag/BlackBookd](https://github.com/freqkflag/BlackBookd). Older tags may not receive patches unless noted in a release.

## Reporting a vulnerability

**Please do not open a public GitHub issue for security problems.**

1. Open a [**private security advisory**](https://github.com/freqkflag/BlackBookd/security/advisories/new) on this repository, or
2. Contact the maintainers through that advisory workflow with steps to reproduce, impact, and suggested fix if you have one.

We aim to acknowledge reports within a reasonable time and will coordinate disclosure once a fix is available.

## Operator responsibilities

Project BlackBookd is **self-hosted**. Instance operators are responsible for:

- Patching the application and PHP/runtime
- Securing `.env`, database credentials, and backups
- HTTPS, firewall rules, and access control
- Not exposing BlackBookd data in issue reports or public logs

## Attribution

BlackBookd inherits code from [Monica](https://github.com/monicahq/monica) (AGPL-3.0). Upstream Monica’s historical `security@monicahq.com` address applies to **hosted Monica**, not this fork.