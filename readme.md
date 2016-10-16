# Laravel Foundation package
Use this package to override Bootstrap templates for auth and pagination with Zurb Foundation (zf).

# DO NOT USE THIS YET

## 1. Installation
To install this package run
```bash
composer require milose/laravel-foundation
```

Next, you should add tbe service provider to your `config/app.php` file by finding `providers` key, and adding this to the end of the list:
```php
Milose\LaravelFoundation\LaravelFoundationServiceProvider::class,
```

## 2. Using the views
### Auth scafolding
In order for Laravel to use the custom views for Authentication, we must import this package traits to the appropriate controllers. These traits override the original methods with updated view names.
Open all of the files in `app/Http/Controllers/Auth`, and before every trait add `\Milose\LaravelFoundation\Auth\` to override the default view. So, for example, Login controller trait inside the class sould look like:

```php
use \Milose\LaravelFoundation\Auth\AuthenticatesUsers;
```
Instead of:
```php
use AuthenticatesUsers;
```
Do this for all files.

### Pagination
In your blade files you can `paginate` as usual, by adding:
```php
{{ $users->links('zf::pagination.default') }}
```
Or if you're using `simplePaginate` then add:
```php
{{ $users->links('zf::pagination.simple') }}
```

## 3. Customize the views
If you want to change how the views look, you need to publish the them to your `resources/views/vendor` folder by running
```bash
php artisan vendor:publish --tag=zf
```
After this, in `resources/views/vendor/laravelFoundation` you will find Blade templates for both authentication and pagination.

##TODO
- Design Foundation forms
- Design Foundation paginantion files
- Test
