# BCHub - Bandung Creative Hub Facility Management System

BCHub is a **web-based facility and room management system** designed for **Bandung Creative Hub**.
This platform allows users to explore available facilities and rooms, while administrators can manage spaces, schedules, and facility information through an integrated dashboard.

This project was developed as a **portfolio project** to demonstrate web development skills using the Laravel framework.

---

## 🚀 Features

### User Features

* Browse available rooms and facilities
* View facility information and details
* Responsive and user-friendly interface

### Admin Features

* Admin dashboard
* Manage facilities and rooms
* Manage room information and content
* Manage system data from a centralized admin panel

---

## 🛠 Tech Stack

This project was built using the following technologies:

* **Laravel** – PHP Web Framework
* **PHP**
* **Blade Template Engine**
* **HTML5**
* **CSS3**
* **JavaScript**
* **MySQL / SQLite (depending on configuration)**
* **Bootstrap / Tailwind (depending on implementation)**

---

## 📂 Project Structure

The project follows the standard Laravel structure:

```
bchub/
│
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
│   ├── views/
│   └── css/
├── routes/
│   └── web.php
├── storage/
├── tests/
└── .env
```

Key directories:

* **resources/views** → Blade templates for UI
* **routes/web.php** → Application routes
* **app/Http/Controllers** → Controller logic
* **database/** → Migrations and database setup

---

## ⚙️ Installation

To run this project locally, follow these steps:

### 1️⃣ Clone the repository

```bash
git clone https://github.com/mochamadkhairan/bchub.git
```

### 2️⃣ Navigate into the project folder

```bash
cd bchub
```

### 3️⃣ Install dependencies

```bash
composer install
```

### 4️⃣ Copy environment file

```bash
cp .env.example .env
```

### 5️⃣ Generate application key

```bash
php artisan key:generate
```

### 6️⃣ Configure database

Edit the `.env` file and set your database configuration.

Example:

```
DB_CONNECTION=mysql
DB_DATABASE=bchub
DB_USERNAME=root
DB_PASSWORD=
```

### 7️⃣ Run migrations

```bash
php artisan migrate
```

### 8️⃣ Start the development server

```bash
php artisan serve
```

Then open in browser:

```
http://127.0.0.1:8000
```

---

## 📸 Screenshots

You can add screenshots of the application here to showcase the interface.

Example:

```
/screenshots/dashboard.png
/screenshots/homepage.png
/screenshots/facilities.png
```

---

## 🎯 Purpose of the Project

This project was created to:

* Practice **Laravel full-stack development**
* Build a **real-world facility management system**
* Showcase **portfolio-quality web development projects**

---

## 👨‍💻 Author

**Mochamad Khairan Athallah & Muhammad Rizky Hakim**

GitHub:
https://github.com/mochamadkhairan

---

## 📄 License

This project is open-source and available for educational and portfolio purposes.
