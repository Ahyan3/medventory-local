# 🏥 Medventory – Medical Equipment Inventory System

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="#"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="#"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
  <a href="#"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="#"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

## 📖 About Medventory

Medventory is a hospital-based inventory management system designed to efficiently track and manage medical equipment and pharmacy-issued items.  
It streamlines the entire lifecycle of equipment—from issuance by doctors, active usage, maintenance, and damage reporting, to pharmacy monitoring and full administrative oversight.

With Medventory, hospitals can ensure:

- ✔ Accurate equipment tracking  
- ✔ Reduced losses and misplacements  
- ✔ Improved accountability  
- ✔ Smoother workflow across departments  

---

## 🚀 Features

- Medical Equipment Management  
- Issuance & Return Tracking  
- Damage & Maintenance Reporting  
- Pharmacy Item Monitoring  
- Department & Staff Management  
- Activity Logs & Export Tools  
- Dashboard with Key Statistics  
- TailwindCSS-Driven UI  

---

📦 Prerequisites

Install the following first:

PHP ≥ 8.2 → https://windows.php.net/download/

Composer → https://getcomposer.org/Composer-Setup.exe

MySQL (XAMPP or standalone) → https://www.apachefriends.org/

Node.js LTS → https://nodejs.org/

Git → https://git-scm.com/download/win

⚙️ Installation & Setup
1️⃣ Clone the Repository
git clone https://github.com/your-username/medventory.git
cd medventory

2️⃣ Install Backend Dependencies
composer install

3️⃣ Create Environment File
cp .env.example .env


Update your database settings:

DB_DATABASE=medventory_db
DB_USERNAME=root
DB_PASSWORD=

4️⃣ Generate Application Key
php artisan key:generate

5️⃣ Run Database Migrations
php artisan migrate

6️⃣ Link Storage
php artisan storage:link

7️⃣ (Optional) Seed Demo Data
php artisan db:seed

🎨 Frontend (TailwindCSS)

Install and build assets:

npm install
npm run dev

🔁 Useful Commands
php artisan serve                   # Start the development server
npm run dev                         # Build frontend assets
php artisan migrate:fresh --seed    # Reset database with seeders
php artisan storage:link

📧 Email Testing (Local)

Use log mailer:

MAIL_MAILER=log


Emails appear here:

storage/logs/laravel.log

🛠 Recommended VS Code Extensions

Laravel Extra Intellisense

Laravel Blade Snippets

Tailwind CSS IntelliSense

PHP Intelephense

DotENV

🧪 System Requirements
Component	Minimum	Recommended
OS	Windows 10 (64-bit)	Windows 11 (64-bit)
CPU	Dual-core 2.0 GHz	Quad-core 2.5 GHz+
RAM	4 GB	8 GB+
Storage	10 GB free	20 GB+ SSD
Internet	Required	Stable broadband
🧰 Optional Development Tools

Postman – API Testing

Docker Desktop – For Laravel Sail

Laravel Debugbar / Telescope – Debugging

HeidiSQL / Workbench / phpMyAdmin – DB Management

🤝 Contributing

Pull requests are welcome!
For major changes, open an issue first to discuss your ideas.

🔒 Security

If you discover a security vulnerability, kindly email the project maintainer.

📜 License

This project is licensed under the MIT License.
