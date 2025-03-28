# Laravel Persian Language Files

This package provides Persian language files for Laravel.

## Requirements

- PHP >= 7.0
- Laravel >= 5.0

## Installation

### Option 1: Via Composer (Recommended)

You can install the package via composer:

```bash
composer require sadegh19b/laravel-persian-lang
```

### Option 2: Manual Installation

If you prefer not to use Composer, you can manually copy the language files:

1. Download or clone this repository
2. Copy the `fa` folder from `lang/` to your Laravel application's `resources/lang/` directory
3. The language files will be available in your application

## Configuration

### Option 1: Automatic Registration (Laravel 5.5+)

For Laravel 5.5 and above, the service provider will be automatically registered by Laravel's package discovery.

### Option 2: Manual Registration (Laravel 5.0-5.4)

If you're using Laravel 5.0-5.4, you need to manually register the service provider in `config/app.php`:

```php
'providers' => [
    // Other Service Providers...
    Sadegh19b\PersianLang\PersianLangServiceProvider::class,
],
```

## Usage

### 1. Publishing Language Files

#### For Laravel 5.3 and above:
```bash
php artisan vendor:publish --tag=persian-lang
```

#### For Laravel 5.0-5.2:
The language files will be automatically published when the service provider is registered. If you need to republish the files, you can run:
```bash
php artisan vendor:publish
```

This will copy the language files to `resources/lang/fa/` in your application. You can then modify them as needed.

### 2. Setting the Language

To use Persian as your application's language, you should set the locale in your `config/app.php` file:

```php
'locale' => 'fa',
```

## Available Language Files

- `auth.php` - Authentication related translations
- `passwords.php` - Password reset related translations
- `validation.php` - Validation related translations
- `validation-attributes.php` - Validation attributes related translations (added by me)
- `pagination.php` - Pagination related translations

## Contributing

Please feel free to submit any issues or pull requests.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information. 