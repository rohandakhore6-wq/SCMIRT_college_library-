# College Library Management System (PHP + MySQL)

This package is prepared for deployment as a Docker web service. It uses a separate MySQL-compatible database; Render web services do not include a built-in MySQL database.

## Important security notes
- The original report PDF and sample student/payment/notice records were removed from the deployable package.
- A sample book catalogue remains.
- Initial admin login: **admin** / **ChangeMe123!**. Change this before public use. Do not share the live site before changing it.
- Configure database credentials as environment variables; never commit `.env` or database passwords.
- This is a student project starter. Review all business flows and security before using real student data or collecting real payments.

## Run locally with XAMPP
1. Copy this folder to `C:\xampp\htdocs\library`.
2. Start Apache and MySQL in XAMPP.
3. Open phpMyAdmin and create a database named `library`.
4. Import `database.sql` into that database.
5. For local development, the defaults in `db.php` use `127.0.0.1`, user `root`, blank password, database `library`, port `3306`.
6. Open `http://localhost/library/`.

## Deploy on Render
1. Push the contents of this folder to a new GitHub repository. Do not upload the original ZIP or personal PDF.
2. Create a MySQL-compatible database with a provider that allows external connections (for example, a managed MySQL service). Render's web service itself does not provide MySQL.
3. Note the database host, port, database name, username, and password from that provider.
4. In Render, create **New + → Web Service**, connect the GitHub repository, and choose **Docker** as the runtime.
5. Add these environment variables in Render's Environment settings:
   - `DB_HOST` = database hostname
   - `DB_PORT` = database port (usually `3306`)
   - `DB_NAME` = database name
   - `DB_USER` = database username
   - `DB_PASSWORD` = database password
6. Import `database.sql` into the hosted database using the database provider's SQL import tool or a MySQL client. Do not import it into a different database by mistake.
7. Deploy. Open the service URL and test the home page, student registration/login, book search, admin login, and admin pages.
8. Sign in to `/admin/login.php` with the initial admin account, then change the credentials before public sharing. If you cannot change the admin password from the UI, update the `admin` table password using a PHP-generated `password_hash()` value.

## Database
`database.sql` creates the application tables and inserts only a sample book catalogue and one initial admin account. It intentionally excludes original personal student, payment, notification, and report data.

## Troubleshooting
- `Database connection failed`: check all five DB environment variables, remote access rules, and whether the provider requires TLS.
- `Table doesn't exist`: import `database.sql` into the exact database configured by `DB_NAME`.
- `Access denied`: confirm the database user is allowed to connect from the web host.
- PHP syntax check: `find . -name '*.php' -print0 | xargs -0 -n1 php -l`
