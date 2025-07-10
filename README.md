# SimplePerpustakaan - RESTful API Learning Project

## 📚 Project Overview

**SimplePerpustakaan** adalah proyek pembelajaran yang bertujuan untuk memahami dan mengimplementasikan konsep RESTful API menggunakan Laravel Framework. Proyek ini mengembangkan sistem manajemen perpustakaan sederhana dengan fokus pada pengembangan API yang mengikuti prinsip-prinsip REST.

## 🎯 Tujuan Pembelajaran

- **Memahami Konsep RESTful API**: Mempelajari prinsip-prinsip REST (Representational State Transfer)
- **Implementasi CRUD Operations**: Mengembangkan operasi Create, Read, Update, Delete melalui API
- **Authentication & Authorization**: Implementasi sistem autentikasi menggunakan Laravel Sanctum
- **API Design Patterns**: Mempelajari best practices dalam mendesain API
- **Database Management**: Pengelolaan database dengan Eloquent ORM
- **API Documentation**: Dokumentasi API yang baik dan terstruktur

## 🛠️ Tech Stack

- **Backend Framework**: Laravel 9.x
- **Database**: MySQL/PostgreSQL
- **Authentication**: Laravel Sanctum
- **API Testing**: Postman/Insomnia
- **PHP Version**: ^8.0.2

## 📁 Project Structure

```
SimplePerpustakaan/
├── app/
│   ├── Http/Controllers/
│   │   ├── UserController.php      # User management
│   │   └── CollectionController.php # Collection management
│   └── Models/
│       ├── User.php               # User model
│       └── Collection.php         # Collection model
├── database/
│   └── migrations/
│       ├── create_users_table.php
│       └── create_collections_table.php
├── routes/
│   ├── api.php                   # API routes
│   └── web.php                   # Web routes
└── resources/views/              # Blade templates
```

## 🗄️ Database Schema

### Users Table
- `id` (Primary Key)
- `name` (String)
- `email` (String, Unique)
- `password` (String, Hashed)
- `telp` (String)
- `address` (Text)
- `email_verified_at` (Timestamp)
- `remember_token` (String)
- `created_at` (Timestamp)
- `updated_at` (Timestamp)

### Collections Table
- `id` (Primary Key)
- `namaKoleksi` (String)
- `jenisKoleksi` (TinyInteger)
- `jumlahKoleksi` (Integer)
- `tahunTerbit` (Date)
- `created_at` (Timestamp)
- `updated_at` (Timestamp)

## 🚀 Installation & Setup

### Prerequisites
- PHP >= 8.0.2
- Composer
- MySQL/PostgreSQL
- Node.js & NPM (for frontend assets)

### Installation Steps

1. **Clone Repository**
   ```bash
   git clone <repository-url>
   cd Tugas-Pemrograman-Integrative/SimplePerpustakaan
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment Setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database Configuration**
   - Update database credentials in `.env` file
   - Run migrations:
   ```bash
   php artisan migrate
   ```

5. **Seed Database (Optional)**
   ```bash
   php artisan db:seed
   ```

6. **Start Development Server**
   ```bash
   php artisan serve
   ```

## 📡 API Endpoints

### Authentication
- `GET /api/user` - Get authenticated user info (requires Sanctum auth)

### Users Management
- `GET /user` - List all users
- `GET /userRegistration` - Show user registration form
- `POST /userStore` - Create new user
- `GET /userView/{user}` - Show specific user details

### Collections Management
- `GET /koleksi` - List all collections
- `GET /koleksiTambah` - Show collection creation form
- `POST /koleksiStore` - Create new collection
- `GET /koleksiView/{collection}` - Show specific collection details

## 🔐 Authentication

Proyek ini menggunakan **Laravel Sanctum** untuk autentikasi API. Sanctum menyediakan:
- Token-based authentication
- SPA authentication
- Mobile application authentication
- API token management

## 🧪 Testing API

### Using Postman/Insomnia

1. **Setup Collection**
   - Create new collection in Postman
   - Set base URL: `http://localhost:8000`

2. **Test Endpoints**
   - Import the following endpoints:
     - GET `/user`
     - POST `/userStore`
     - GET `/koleksi`
     - POST `/koleksiStore`

3. **Authentication Testing**
   - Use Laravel Sanctum tokens for protected routes
   - Include `Authorization: Bearer {token}` header

## 📖 Learning Objectives

### RESTful API Principles
- **Stateless**: Each request contains all necessary information
- **Client-Server**: Separation of concerns
- **Cacheable**: Responses can be cached
- **Uniform Interface**: Consistent resource identification
- **Layered System**: Architecture can be layered

### HTTP Methods Implementation
- **GET**: Retrieve resources
- **POST**: Create new resources
- **PUT/PATCH**: Update existing resources
- **DELETE**: Remove resources

### Status Codes
- `200 OK`: Successful request
- `201 Created`: Resource created successfully
- `400 Bad Request`: Invalid request
- `401 Unauthorized`: Authentication required
- `404 Not Found`: Resource not found
- `500 Internal Server Error`: Server error

## 🔧 Development Guidelines

### Code Standards
- Follow PSR-12 coding standards
- Use meaningful variable and function names
- Add proper comments and documentation
- Implement proper error handling

### API Design Best Practices
- Use consistent naming conventions
- Implement proper validation
- Return appropriate HTTP status codes
- Provide meaningful error messages
- Version your APIs when necessary

## 📚 Additional Resources

### Laravel Documentation
- [Laravel Official Docs](https://laravel.com/docs)
- [Laravel Sanctum](https://laravel.com/docs/sanctum)
- [Laravel Eloquent](https://laravel.com/docs/eloquent)

### RESTful API Resources
- [REST API Tutorial](https://restfulapi.net/)
- [HTTP Status Codes](https://httpstatuses.com/)
- [API Design Guidelines](https://github.com/microsoft/api-guidelines)

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Add tests if applicable
5. Submit a pull request

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 👨‍💻 Author

**SimplePerpustakaan Team**
- Created for educational purposes
- Focus on RESTful API implementation
- Built with Laravel Framework

---

**Note**: This project is designed for learning purposes. For production use, additional security measures, comprehensive testing, and proper documentation should be implemented.
