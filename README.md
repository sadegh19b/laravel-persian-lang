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

### Setting the Language

After installing the package, the Persian language files are **automatically available without any additional configuration**. 

Simply set the locale to `fa` in your `config/app.php` file:

```php
'locale' => 'fa',
```

Or set it dynamically in your code:

```php
app()->setLocale('fa');
```

That's it! Now you can use Laravel's translation functions normally:

```php
__('validation.required')           // فیلد الزامی است
__('auth.failed')                   // اطلاعات ورود نادرست است
__('passwords.reset')               // رمز عبور بازنشانی شد
trans('pagination.previous')        // قبلی
```

**No need to publish or use any namespace!** The package works automatically when your locale is set to `fa`.

### Publishing Language Files (Optional)

If you want to customize the translations, you can optionally publish them:

```bash
php artisan vendor:publish --tag=persian-lang
```

This will copy the language files to `lang/fa/` in your application. Your published files will automatically take precedence over the package files.

### Validation attributes

If you want to change validation attributes, just copy the `validation-attributes.php` file to your `lang/fa/` directory and don't need to publish other translation files.

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