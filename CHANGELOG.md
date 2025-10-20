## Change log: 
---
### Version 0.0.1 — 2025-10-13

**Initial release:** repository scaffold — folders `site`, `site_api`, `site_docker`.
**Added:** `Dockerfile`, `docker-compose.yml`, `nginx.conf`, `index.php` (basic homepage).
**Added:** Basic PHP code in `index.php` (simple response/router).
**Added:** Initial configuration tested and successfully started on Linux (Ubuntu 25.04, Docker 28.5.1). 

---
### Version 0.0.2 — 2025-10-14

**Changed:** Docker configuration adapted for Windows (WSL2 / Docker Desktop compatibility).
**Added:** `php.ini` (PHP-FPM / runtime settings).
**Changed:** Additional code added to `index.php`.
**Added:** `README.md` with startup and deployment instructions.
**Added:** Began maintaining change log.

---
### Version 0.0.3 — 2025-10-20

**Changed:** The directory structure has been updated to improve organization.
**Deleted:** Redundant levels in the site folder.
**Added:** New directories `db` and `external_services` for better code separation.
**Changed:** The PHP server configuration folder has been moved to `site_docker/php` for better organization.
**Added:** A new `.gitignore` file to exclude unnecessary files from the version control system.
**Updated:** fixed the content `README.md `for a more suitable one.
**Changed:** changes log moved to `CHANGELOG.md`.
**Updated:** `docker-compose.yml` to match the new project structure.
**Changed:** The nginx server configuration folder has been moved to `site_docker/nginx` for better organization.
**Added:** All `.md` files get a new styling.