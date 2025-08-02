# TruHaven – Real Estate Website (Symfony Project)

A full-stack real estate listing platform in progress, built using **Symfony PHP Framework**, **MySQL**, **Bootstrap**, **AJAX**, and **jQuery**.

---

## 🚀 Overview

TruHaven is a developing web application designed for managing real estate property listings. The project aims to build a scalable admin and user portal where admins can manage properties, and authenticated users can browse listings.

---

## ✨ Current Features

* Frontend Pages: Home, About, Commercial, Residential, Contact Us (Bootstrap-based layout)
* User Registration and Login
* Role management structure prepared for admin and user segregation

---

## 🚧 Upcoming Features (Planned)

* **Admin Panel:**

  * Add, edit, delete property listings (CRUD operations)
  * View logged-in users
* **User Panel:**

  * Authenticated users can view available properties
  * Unauthenticated users will be restricted from accessing listings
* Enhanced UI interactions using AJAX & jQuery for dynamic page rendering

---

## 🛠️ Tech Stack

* **Frontend:** HTML5, CSS3, Bootstrap 5, JavaScript, jQuery, FontAwesome, AJAX
* **Backend:** PHP (Symfony Framework)
* **Database:** MySQL
* **Version Control:** Git & GitHub
* **Development Environment:** XAMPP / LAMP / WAMP

---

## 🧻 Installation & Setup Instructions

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/singla25/symfony_realstate_project.git
   ```
2. **Install Dependencies:**

   ```bash
   composer install
   npm install
   yarn add bootstrap
   yarn add jquery
   yarn add @fortawesome/fontawesome-free
   ```
3. **Setup Localhost Server:**

   * Run using Symfony's local server or configure Apache via XAMPP/LAMP/WAMP.
4. **Database Configuration:**

   * Create a MySQL database (e.g., `truhaven_db`).
   * Update `.env` or `.env.local` with DB credentials.
5. **Run Migrations (when available):**

   ```bash
   php bin/console doctrine:migrations:migrate
   ```
6. **Access the Application:**

   * Navigate to `http://localhost:8000` or configured local URL.

---

## ✅ Future Enhancements

* Complete Admin CRUD dashboard for property management
* User Dashboard with personalized listings
* Access control for unauthenticated users
* Add pagination and search filters for property listings
* Email notifications for admin actions

---

## 📄 License

This project is developed for educational purposes only and is not intended for commercial use.

---

## 👨‍💻 About the Author

Developed by **Sahil Singla**, a passionate full-stack developer currently expanding expertise into Symfony framework and scalable web application design.


