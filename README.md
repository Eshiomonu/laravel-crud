# Laravel CRUD Application with Soft Deletes

![Laravel](https://img.shields.io/badge/Laravel-Framework-red)
![PHP](https://img.shields.io/badge/PHP-8%2B-blue)
![License](https://img.shields.io/badge/License-MIT-green)



## Overview

This project is a **Laravel-based CRUD application** showcasing core database operations along with **Soft Delete functionality**.

It serves as a practical implementation of modern Laravel development patterns, emphasizing:

* Clean architecture
* Data integrity
* Non-destructive deletion
* Maintainable code structure


## Features

✅ Create records
✅ Read / list records
✅ Update records
✅ Soft delete records
✅ Restore deleted records
✅ Permanent deletion (force delete)
✅ Input validation
✅ Eloquent ORM integration

---

## 🛠 Technology Stack

* **Framework:** Laravel
* **Language:** PHP
* **Database:** MySQL
* **Frontend:** Blade Templates
* **ORM:** Eloquent

---

## Installation

### **1️⃣ Clone Repository**

```bash
git clone https://github.com/your-username/your-project.git
cd your-project
```

---

### **2️⃣ Install Dependencies**

```bash
composer install
```

---

### **3️⃣ Environment Setup**

```bash
cp .env.example .env
```

Update database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

---

### **4️⃣ Generate App Key**

```bash
php artisan key:generate
```

---

### **5️⃣ Run Migrations**

```bash
php artisan migrate
```

---

### **6️⃣ Start Server**

```bash
php artisan serve
```

---

## 🧩 Soft Delete Implementation

This application utilizes Laravel’s **Soft Deletes** to prevent permanent data loss.

### ✔ How Soft Deletes Work

Instead of removing records:

* Records are flagged via `deleted_at`
* Data remains recoverable
* Supports restore workflows

---

### ✔ Model Configuration

```php
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
}
```

---

### ✔ Operations

```php
Product::find($id)->delete();            // Soft Delete
Product::withTrashed()->restore();       // Restore
Product::forceDelete();                  // Permanent Delete
```

---

## 🔁 CRUD Workflow

| Operation | Description         |
| --------- | ------------------- |
| Create    | Add new records     |
| Read      | View records        |
| Update    | Modify records      |
| Delete    | Soft delete records |

---

## ✅ Validation

Laravel request validation ensures data consistency:

```php
$request->validate([
    'name' => 'required|string|max:255',
    'price' => 'required|numeric',
]);
```

---

## 🗺 Routing

Resourceful routing:

```php
Route::resource('products', ProductController::class);
```

---

## 📈 Future Enhancements

* Role-Based Access Control (RBAC)
* API Endpoints
* Pagination & Search
* Audit Logging
* Performance Optimization

---

## 📄 License

This project is licensed under the **MIT License**.

---

## 🤝 Contribution

Contributions, issues, and feature requests are welcome.

---

---

# ⭐ If you find this project useful, consider giving it a star!


