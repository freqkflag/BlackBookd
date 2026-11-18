# Roadmap

## Vision

**Project BlackBookd** aims to become a **fully FOSS**, self-hosted personal CRM built for queer/gay dating and kink life—privacy-first, without SaaS paywalls or vendor lock-in.

Today this repo is a **Monica v5 fork** with an isolated `BlackBookd` domain (`app/Domains/BlackBookd`, `blackbookd_*` tables). That keeps upstream merges possible while we ship real features.

## Now (this branch)

- Opt-in BlackBookd module: encounters, sexual-health profiles, owner health log, dating pipeline, partner-notification helper, JSON export
- Sanctum API for **GayHook** and other assistants
- Self-host defaults: no storage paywalls, AGPL attribution preserved

## Next (near term)

- Pipeline UX: drag-and-drop stage board
- Contact-template integration: BlackBookd fields/modules on the contact sheet
- Tighter i18n for BlackBookd-specific strings
- Export: DAV/CardDAV or SQL for non-sensitive pipeline fields (design + implementation)

## Long term

- **Ground-up FOSS rebuild** using lessons from Monica + BlackBookd—same values (self-host, AGPL, queer dating/kink use cases), cleaner domain model, smaller attack surface
- Until then: keep BlackBookd changes concentrated in one migration + `app/Domains/BlackBookd` and thin route/view hooks

## Explicitly out of scope for the fork

- Hosted Monica/OfficeLife billing, Paddle, or customers.monicahq flows
- Committing real user data, contacts, or health records to the repository
- Telemetry or analytics added by the fork beyond operator-configured tools

Track execution on [GitHub Issues](https://github.com/freqkflag/BlackBookd/issues) and [milestones](https://github.com/freqkflag/BlackBookd/milestones) as they are defined.