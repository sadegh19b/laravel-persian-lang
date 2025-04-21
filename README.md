# Laravel Persian Language Files

This package provides Persian language files for Laravel.

- Support Laravel 6 to 12

## Installation

### Option 1: Via Composer (Recommended)

You can install the package via composer:

```bash
composer require sadegh19b/laravel-persian-lang
```

### Option 2: Manual Installation

If you prefer not to use Composer, you can manually copy the language files:

1. Download or clone this repository
2. Copy the `fa` folder from `lang/` to your Laravel application's `lang/` directory
3. The language files will be available in your application

## Usage

### 1. Publishing Language Files

Run the following command to publish the language files:

```bash
php artisan vendor:publish --tag=persian-lang
```

This will copy the language files to `lang/fa/` in your application. You can then modify them as needed.

### 2. Setting the Language

To use Persian as your application's language, set the locale in your `config/app.php` file:

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