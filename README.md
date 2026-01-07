# Todo List App - Laravel Repository Pattern

This is a **Todo List application** built with **Laravel** to demonstrate the **Repository Design Pattern** and clean architecture principles.

---

## 🚀 Features
- Create, view, and list todos
- Clean architecture using Repository Pattern
- Dependency Injection
- Separation of concerns
- Simple and clean **Bootstrap 5 UI**

---

## 🧱 Architecture
Controller → Repository Interface → Repository → Model


- **Controller:** Handles HTTP requests and responses  
- **Repository Interface:** Defines the contract for data operations  
- **Repository:** Implements the interface using Eloquent ORM  
- **Model:** Represents the Todo entity

---

## 📂 Project Structure

app/
├── Http/Controllers
│ └── TodoController.php
├── Repositories
│ ├── TodoRepository.php
├── Interfaces
│ └── TodoInterface.php
└── Models
└── Todo.php
resources/
└── views/
├── todos/
│ ├── layout.blade.php
│ ├── index.blade.php
---

## ⚙️ Installation

1. Clone the repository:
```bash
git clone https://github.com/USERNAME/Repository_designPattern_TodoApp.git
Install dependencies:

composer install
Copy .env.example:


cp .env.example .env
Generate application key
php artisan key:generate
Configure database in .env file

Run migrations:
php artisan migrate
Start the application:
php artisan serve

🧪 Purpose
This project is created for learning purposes, to practice:
Applying the Repository Design Pattern
Writing clean, testable Laravel code
Using Dependency Injection for better maintainability

📌 Author
samiulla mohammadi – Laravel Developer
GitHub: https://github.com/USERNAME

