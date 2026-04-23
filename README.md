# 🚀 Laravel 11 + Jetstream (Livewire)

Starter kit prêt à l'emploi avec **Laravel 11**, **Jetstream 5**, **Livewire 3**, **Tailwind CSS 3** et **SQLite**.

---

## ✅ Prérequis

| Outil    | Version minimale |
|----------|-----------------|
| PHP      | 8.2+            |
| Composer | 2.x             |
| Node.js  | 18+             |
| NPM      | 9+              |

---

## ⚡ Installation rapide

```bash
chmod +x setup.sh && ./setup.sh
```

---

## 🔧 Installation manuelle

```bash
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
npm install
npm run build
php artisan serve
```

Accès : **http://localhost:8000**

---

## 🔑 Features Jetstream activées

| Feature               | Statut        |
|-----------------------|---------------|
| Inscription           | ✅ actif      |
| Connexion             | ✅ actif      |
| Réinitialisation MDP  | ✅ actif      |
| Photo de profil       | ✅ actif      |
| 2FA (TOTP)            | ✅ actif      |
| Suppression de compte | ✅ actif      |
| API Tokens            | ❌ désactivé  |
| Teams                 | ❌ désactivé  |

Pour activer une feature, éditez `config/jetstream.php` et `config/fortify.php`.

---

## 🗄 Base de données

Par défaut **SQLite** — aucune config serveur requise.

Pour MySQL, éditez `.env` :

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=secret
```

---

## 👤 Compte de test (après `php artisan db:seed`)

```
Email    : test@example.com
Password : password
```

---

## 🛠 Commandes utiles

```bash
php artisan serve          # Serveur local
npm run dev                # Vite watch mode
php artisan migrate        # Migrations
php artisan migrate:fresh --seed  # Reset + seed
php artisan config:clear   # Vider le cache config
```

---

## 📦 Stack technique

- **Laravel** 11 · **Jetstream** 5 · **Livewire** 3
- **Tailwind CSS** 3 · **Alpine.js** 3 · **Vite** 5
- **SQLite** (dev) / MySQL (prod)
