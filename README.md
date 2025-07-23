<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# Laravel 12 Breeze Starter Kit with Vue.js, Roles & Email 2FA

<div align="center">
  <img src="https://laravel.com/img/logomark.min.svg" alt="Laravel" width="50" height="50">
  <img src="https://vuejs.org/logo.svg" alt="Vue.js" width="50" height="50">
  <img src="https://tailwindcss.com/_next/static/media/tailwindcss-mark.3c5441fc7a190fb1800d4a5c7f07ba4b1345a9c8.svg" alt="Tailwind CSS" width="50" height="50">
</div>

<h3 align="center">🚀 Production-Ready Authentication Starter Kit</h3>

<p align="center">
  A comprehensive Laravel 12 starter kit featuring role-based authentication, email verification, and two-factor authentication via email using Laravel Breeze and Vue.js.
</p>

<p align="center">
  <a href="#features">Features</a> •
  <a href="#installation">Installation</a> •
  <a href="#usage">Usage</a> •
  <a href="#security">Security</a> •
  <a href="#contributing">Contributing</a>
</p>

---

## ✨ Features

### 🔐 **Complete Authentication System**
- **Email Verification** - Users must verify their email before accessing the application
- **Two-Factor Authentication** - 6-digit codes sent via email on every login
- **Role-Based Access Control** - Three user levels with different permissions
- **Secure Session Management** - Proper logout and session invalidation

### 👥 **User Roles**
- **🦸 Super Admin** - Full system access and user management
- **👨‍💼 Admin** - Administrative access with user management
- **👤 User** - Standard user access with limited permissions

### 🛡️ **Security Features**
- Email-based 2FA with 6-digit codes
- Code expiration (10 minutes)
- Rate limiting on code resend (60 seconds)
- Secure code generation using `random_int()`
- Protected routes with middleware
- CSRF protection

### 🎨 **Modern Tech Stack**
- **Laravel 12** - Latest PHP framework
- **Vue.js 3** - Progressive JavaScript framework
- **Inertia.js** - Modern monolith approach
- **Tailwind CSS** - Utility-first CSS framework
- **Laravel Breeze** - Minimal authentication scaffolding

---

## 📋 Requirements

- PHP 8.2+
- Composer
- Node.js 18+
- MySQL/PostgreSQL/SQLite
- SMTP Email Service

---

## 🚀 Installation

### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/laravel-breeze-starter-kit.git
cd laravel-breeze-starter-kit
```

### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### 3. Environment Setup

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Configure Environment

Edit your `.env` file with your database and email settings:

```env
# Database Configuration
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

# Email Configuration (Required for 2FA)
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-email@example.com
MAIL_PASSWORD=your-email-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@example.com
MAIL_FROM_NAME="${APP_NAME}"
```

### 5. Database Setup

```bash
# Run migrations and seed test users
php artisan migrate:fresh --seed
```

### 6. Build Assets

```bash
# Build frontend assets
npm run build

# For development
npm run dev
```

### 7. Start the Application

```bash
php artisan serve
```

Visit `http://localhost:8000` to access your application.

---

## 👤 Default Test Users

The seeder creates the following test accounts:

| Role | Email | Password | Status |
|------|-------|----------|---------|
| Super Admin | `superadmin@example.com` | `password` | ✅ Verified |
| Admin | `admin@example.com` | `password` | ✅ Verified |
| User | `user@example.com` | `password` | ✅ Verified |

---

## 🔄 Authentication Flow

### New User Registration
1. **Register** → User creates account
2. **Email Verification** → Verification email sent
3. **Verify Email** → User clicks verification link
4. **Login** → User enters credentials
5. **2FA Code** → 6-digit code sent to email
6. **Access Granted** → Redirected to role-specific dashboard

### Existing User Login
1. **Login** → User enters credentials
2. **Email Check** → System verifies email is confirmed
3. **2FA Code** → 6-digit code sent to email
4. **Verify Code** → User enters 2FA code
5. **Access Granted** → Redirected to dashboard

---

## 🏗️ Project Structure

```
├── app/
│   ├── Http/
│   │   ├── Controllers/Auth/
│   │   │   ├── AuthenticatedSessionController.php
│   │   │   ├── RegisteredUserController.php
│   │   │   ├── TwoFactorController.php
│   │   │   └── VerifyEmailController.php
│   │   └── Middleware/
│   │       ├── RoleMiddleware.php
│   │       └── TwoFactorMiddleware.php
│   ├── Models/
│   │   └── User.php
│   └── Notifications/
│       └── TwoFactorCode.php
├── resources/
│   ├── js/
│   │   └── Pages/
│   │       ├── Auth/
│   │       │   ├── Login.vue
│   │       │   ├── Register.vue
│   │       │   ├── TwoFactor.vue
│   │       │   └── VerifyEmail.vue
│   │       ├── Admin/
│   │       ├── SuperAdmin/
│   │       └── User/
│   └── views/
└── routes/
    ├── web.php
    └── auth.php
```

---

## 🛡️ Security Considerations

### Two-Factor Authentication
- **Code Generation**: Uses cryptographically secure `random_int()`
- **Expiration**: Codes expire after 10 minutes
- **Rate Limiting**: 60-second cooldown between resend requests
- **Single Use**: Codes are invalidated after successful verification

### Email Verification
- **Required**: Users must verify email before accessing 2FA
- **Signed URLs**: Verification links use Laravel's signed URL feature
- **Throttling**: Rate limited to prevent abuse

### Role-Based Access Control
- **Middleware Protection**: All routes protected by role middleware
- **Hierarchical Permissions**: Super Admin > Admin > User
- **Route Segregation**: Each role has dedicated routes and views

### Session Security
- **Regeneration**: Session IDs regenerated on login
- **Invalidation**: Proper session cleanup on logout
- **CSRF Protection**: All forms protected against CSRF attacks

---

## 🎨 Customization

### Adding New Roles

1. **Update User Model**:
```php
// Add new role to enum in migration
$table->enum('role', ['super_admin', 'admin', 'user', 'moderator'])->default('user');

// Add role check method
public function isModerator()
{
    return $this->role === 'moderator';
}
```

2. **Create Controller**:
```bash
php artisan make:controller ModeratorController
```

3. **Add Routes**:
```php
Route::middleware(['role:moderator'])->group(function () {
    Route::get('/moderator', [ModeratorController::class, 'index'])->name('moderator.dashboard');
});
```

### Customizing 2FA Settings

```php
// In User model
public function generateTwoFactorCode()
{
    $this->two_factor_code = random_int(100000, 999999); // 6-digit code
    $this->two_factor_expires_at = Carbon::now()->addMinutes(15); // Custom expiry
    $this->two_factor_verified = false;
    $this->save();
}
```

### Email Templates

Customize the 2FA email template in:
```
app/Notifications/TwoFactorCode.php
```

---

## 🧪 Testing

### Run Tests
```bash
# Run all tests
php artisan test

# Run specific test suite
php artisan test --testsuite=Feature

# Run with coverage
php artisan test --coverage
```

### Test 2FA Flow
1. Register new user with `unverified@example.com`
2. Check email verification requirement
3. Verify email and attempt login
4. Confirm 2FA code is sent
5. Test code expiration and resend functionality

---

## 📝 API Documentation

### Authentication Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| POST | `/register` | User registration |
| POST | `/login` | User login |
| POST | `/logout` | User logout |
| GET | `/verify-email` | Email verification page |
| POST | `/email/verification-notification` | Resend verification |
| GET | `/two-factor` | 2FA verification page |
| POST | `/two-factor` | Verify 2FA code |
| POST | `/two-factor/resend` | Resend 2FA code |

### Protected Routes

| Route | Middleware | Description |
|-------|------------|-------------|
| `/dashboard` | `auth`, `verified`, `two-factor` | Main dashboard |
| `/super-admin` | `role:super_admin` | Super admin panel |
| `/admin` | `role:admin` | Admin panel |
| `/user` | `role:user` | User dashboard |

---

## 🚀 Deployment

### Production Checklist

- [ ] Configure production database
- [ ] Set up email service (SendGrid, Mailgun, etc.)
- [ ] Update `APP_ENV=production` in `.env`
- [ ] Run `php artisan config:cache`
- [ ] Run `php artisan route:cache`
- [ ] Run `php artisan view:cache`
- [ ] Set up SSL certificate
- [ ] Configure proper file permissions
- [ ] Set up monitoring and logging

### Docker Deployment

```dockerfile
FROM php:8.2-fpm

# Install dependencies and setup Laravel
COPY . /var/www/html
WORKDIR /var/www/html

RUN composer install --no-dev --optimize-autoloader
RUN npm ci && npm run build

CMD ["php", "artisan", "serve", "--host=0.0.0.0"]
```

---

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

### Development Guidelines

- Follow PSR-12 coding standards
- Write tests for new features
- Update documentation for changes
- Use conventional commit messages



---

## 🙏 Acknowledgments

- [Laravel Team](https://laravel.com) for the amazing framework
- [Vue.js Team](https://vuejs.org) for the progressive framework
- [Tailwind CSS](https://tailwindcss.com) for the utility-first CSS framework
- [Inertia.js](https://inertiajs.com) for bridging the gap between server and client


## 🔗 Links

- [Laravel Documentation](https://laravel.com/docs)
- [Vue.js Documentation](https://vuejs.org/guide/)
- [Inertia.js Documentation](https://inertiajs.com/)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)

---

<div align="center">
  <p>Made with ❤️ by <a href="https://github.com/yourusername">Your Name</a></p>
  <p>⭐ Star this repo if you find it helpful!</p>
</div>
>>>>>>> bc36cd0d54a10b555d1505db4167d2c1f6e85345
