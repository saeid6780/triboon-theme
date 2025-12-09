# Triboon Theme Boilerplate

A modern hybrid WordPress theme boilerplate based on `_s` (Underscores).
This project is designed for developers looking for a standard structure, dependency management via Composer, PSR-4 compliance, and modern frontend tooling (Sass/ESNext).

## ✨ Features

- **Hybrid Structure:** Combines Object-Oriented logic (Classes) with Functional helpers.
- **Dependency Management:** Uses **Composer** for PHP autoloading and tooling.
- **PSR-4 Standard:** Automatic class loading from the `inc/classes` directory.
- **Build Tools (Optional):** Supports NPM, Webpack, Sass (Dart), and BrowserSync.
- **Code Quality:** Equipped with PHPCS, ESLint, and PHPUnit.

---

## 📋 Prerequisites

Before you begin, ensure you have the following installed on your machine:

- **PHP** (7.4 or higher)
- **Composer**
- **Node.js & NPM** (Optional - only required for compiling SCSS/JS)
- **Local Server** (e.g., LocalWP, XAMPP, Docker)
- **Git**

---

## 🚀 Getting Started

### 1. Search & Replace (Renaming)
Before installation, search and replace the following strings throughout the project files to match your new theme's identity.
It is recommended to perform replacements in this order to avoid conflicts:

| Find String | Replace With (Example) | Context |
| :--- | :--- | :--- |
| `Triboon Theme` | `My Project Name` | Theme Name (style.css) |
| `triboon_theme` | `my_project_name` | Function & Variable prefixes (Snake Case) |
| `triboon-theme` | `my-project-name` | Text Domain & Filenames (Kebab Case) |
| `triboon` | `myproject` | Short Function Prefix |
| `DotLine` | `MyCompany` | PHP Namespace |

### 2. Install PHP Dependencies (Mandatory)
To generate the Autoload file and prevent Fatal Errors, run this command in the theme root:

```bash
composer install
```

### 3. Install Frontend Dependencies (Optional)
If you intend to develop CSS (Sass) and JS files using the build tools, run:

```bash
npm install
```

### 4. Configure Local Proxy
To enable BrowserSync (auto-reload), open `package.json` and update the `proxy` URL in the `scripts` -> `serve` section to match your local development URL:

```JSON 
"serve" : "browser-sync start --proxy \"http://my-site.local\" ..."
```

### 💻 CLI Commands
Available commands for development and maintenance:

### Frontend (NPM)
| Command | Description |
| :--- | :--- |
| `npm start` | Runs Watcher and BrowserSync simultaneously (Development mode). |
| `npm run build` | Compiles final CSS and JS files for Production (Minified). |
| `npm run bundle` | Creates a `.zip` archive of the theme (excludes node_modules/vendor). |
| `npm run lint:js` | Checks JavaScript files for errors. |

### Backend (Composer)
| Command | Description |
| :--- | :--- |
| `composer run lint:php` | Checks all PHP files for syntax errors. |
| `composer run make-pot` | Scans files and generates the translation file (`.pot`) in `languages/`. |
| `composer run test` | Runs PHP Unit Tests. |

---

## 📂 Directory Structure

This boilerplate uses a hybrid approach to code organization:

### 1. `inc/classes` (Core Logic)
All PHP classes must be placed here. These files follow the **PSR-4** standard and are autoloaded by Composer.
*   **Example:** Class `DotLine\Setup` maps to `inc/classes/class-setup.php`.

### 2. `inc/functions` (Helpers)
Simple functions, Template Tags, and Helpers that do not require an Object-Oriented structure are placed here.
*   **Note:** These files must be manually required in `functions.php`.

---

## 🚫 Opting Out of NPM (Lite Mode)

If you do not require SCSS or JS compilation and prefer working with raw CSS/PHP only, you can remove the frontend tooling:

1.  Delete the `node_modules` directory.
2.  Delete `package.json` and `package-lock.json`.
3.  Delete the `.husky` directory.
4.  Delete configuration files: `.eslintrc` and `.stylelintrc.json`.
5.  Ignore `.scss` files in the assets folder and edit `style.css` directly.

*Note: Running `composer install` is still mandatory for PHP class autoloading.*

---

## 🤝 Contribution

When committing changes, please ensure you use `git commit`. The system utilizes Husky hooks to automatically lint your code before committing to ensure code quality.
