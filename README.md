# SMTB Transaction Management System

A small transaction-management application with a Vue 2 frontend, Slim PHP API, and MariaDB/MySQL schema.

## Project layout

- `vSMTB/` contains the Vue frontend and its webpack configuration.
- `slimapp/` contains the Slim API.
- `SMTB_Databaza/smtb.sql` contains the database schema and demo rows.

## Local setup

1. Import `SMTB_Databaza/smtb.sql` into a local MariaDB/MySQL instance.
2. Install the PHP dependencies with `composer install` from `slimapp/`.
3. Install the frontend dependencies with `npm install` from `vSMTB/`.
4. Update the local database settings in `slimapp/src/config/db.php` before running the API.
5. Start the frontend from `vSMTB/` with `npm run dev`.

This is a learning/demo project. The SQL dump contains sample transactions, and the current app configuration and API should be reviewed before any internet-facing deployment.
