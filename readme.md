# Laravel Foundation package
Use this package to override bootstrap templates for auth and home page with Zurb Foundation.

# DO NOT USE THIS YET

# 1. Installation
To install this package run
```bash
composer require milose/laravel-foundation
```

Next, you should add tbe service provider to your `config/app.php` file by finding `providers` key, and adding this to the end of the list:
```php
Milose\LaravelFoundation\LaravelFoundationServiceProvider::class,
```

# 2. Using
## Auth scafolding
Open `app/Http/Controllers/Auth` files and and before every trait add `\Milose\LaravelFoundation\Auth\` to override the default view. So, for example, Login controller trait inside the class sould look like:
```php
use \Milose\LaravelFoundation\Auth\AuthenticatesUsers;
```
Instead of:
```php
use AuthenticatesUsers;
```
Do this for all four files.

## Pagination
In your blade files

# 3. Customize
If you want to change how the layout of the files look, you need to publish the views to your `resources/views/vendor` folder by running
```bash
php artisan vendor:publish --tag=foundation
```
After this, in `resources/views/vendor/laravelFoundation` you will find Blade templates for both authentication and pagination.

#TODO
- Design Foundation forms
- Design Foundation paginantion files
