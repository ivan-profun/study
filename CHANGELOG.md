# Change log: 


## Version 0.0.4 — (2025-10-22 - 2025-10-24)
---
### 2025-10-24
**Updated:** The project structure has been rewritten. (Commit 4737b48)    

### 2025-10-23
**Added:** Manual determination of project languages. (Commit cb2ff1e)   
**Added:** Page styling and structure.(Commit e8a06ae)  

### 2025-10-22
**Added:** CSS files to the `/public/styles/` directory.   
**Added:** JS files to the `/public/scripts/` directory.   
**Added:** Ajax scripts to the `/public/ajax/` directory.   
**Updated:** Added an Ajax script for writing data to cookies.   
**Added:** Pages for testing functionality.  

---
## Version 0.0.3 — 2025-10-20

### commit id - 32b1acf (32b1acf502a0cdbc4156f73ec3acf5592e9b3d29)   
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

---
## Version 0.0.2 — 2025-10-14

**Changed:** Docker configuration adapted for Windows (WSL2 / Docker Desktop compatibility).  
**Added:** `php.ini` (PHP-FPM / runtime settings).  
**Changed:** Additional code added to `index.php`.  
**Added:** `README.md` with startup and deployment instructions.  
**Added:** Began maintaining change log.  

---
## Version 0.0.1 — 2025-10-13

**Initial release:** repository scaffold — folders `site`, `site_api`, `site_docker`.  
**Added:** `Dockerfile`, `docker-compose.yml`, `nginx.conf`, `index.php` (basic homepage).  
**Added:** Basic PHP code in `index.php` (simple response/router).  
**Added:** Initial configuration tested and successfully started on Linux (Ubuntu 25.04, Docker 28.5.1).  
