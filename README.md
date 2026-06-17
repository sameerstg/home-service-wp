# Home Service WP

A WordPress + WooCommerce site for an **Online Home Services Marketplace (OHSM)**, built on a custom `ohsm` child theme.

- **Platform:** WordPress
- **E-commerce:** WooCommerce
- **Theme:** `ohsm` (custom child theme, in `wp-content/themes/ohsm`)
- **Plugins:** WooCommerce, Contact Form 7, Akismet

---

## Running the project with XAMPP

### 1. Prerequisites

- [XAMPP](https://www.apachefriends.org/) (Apache + MySQL/MariaDB + PHP)
- [Git](https://git-scm.com/)

### 2. Clone into the XAMPP web root

The site is the full WordPress install (WordPress core is included in this repo).

```bash
# Clone directly into the Apache document root
cd C:\xampp\htdocs
git clone https://github.com/sameerstg/home-service-wp.git .
```

> If `htdocs` already contains files, clone into a subfolder instead and adjust the URLs below
> (e.g. `git clone ... home-service-wp` → site runs at `http://localhost/home-service-wp`).

### 3. Start XAMPP

Open the **XAMPP Control Panel** and start:

- **Apache**
- **MySQL**

### 4. Create the database

1. Go to <http://localhost/phpmyadmin>.
2. Create a new database named **`homeservice`** (collation `utf8mb4_general_ci`).
3. Import your database dump into it (`Import` tab → choose your `.sql` file → **Go**).

> The database is **not** included in this repo. Use a `.sql` export of your existing site,
> or run the WordPress installer at <http://localhost> for a fresh setup.

### 5. Check `wp-config.php`

The committed `wp-config.php` uses the default local XAMPP credentials:

| Setting       | Value         |
| ------------- | ------------- |
| `DB_NAME`     | `homeservice` |
| `DB_USER`     | `root`        |
| `DB_PASSWORD` | *(empty)*     |
| `DB_HOST`     | `localhost`   |

Update these if your MySQL setup differs.

### 6. Open the site

- **Front end:** <http://localhost>
- **Admin:** <http://localhost/wp-admin>

---

## Project structure

```
.
├── wp-admin/                  # WordPress core (admin)
├── wp-includes/               # WordPress core
├── wp-content/
│   ├── themes/ohsm/           # Custom OHSM child theme
│   ├── plugins/               # WooCommerce, Contact Form 7, Akismet
│   └── uploads/               # Media uploads
├── wp-config.php              # Site configuration (local XAMPP defaults)
└── index.php                  # WordPress entry point
```

---

## Notes

- This repo contains the **WordPress core files** and `wp-config.php`. If you fork it publicly,
  rotate the secret keys in `wp-config.php` and your database credentials.
- The site URL is configured for `http://localhost`. If you run it from a subfolder or a
  different host, update the **Site Address** and **WordPress Address** under
  *Settings → General* (or via the `siteurl`/`home` options in the database).
