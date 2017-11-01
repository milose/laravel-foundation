# Laravel Foundation package

UOverride Laravel Auth/Pagination views using Zurb Foundation instead of Twitter Bootstrap.

## 1. Installation

To install this package run

```bash
composer require milose/laravel-foundation
```

**If you are using Laravel version `>= 5.5` you can skip the next step.**

Add the service provider to your `config/app.php` file by finding `providers` key, and adding this to the end of the list:

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
{{ $users->links('lf::pagination.default') }}
```

Or if you're using `simplePaginate` then add:

```php
{{ $users->links('lf::pagination.simple') }}
```

## 3. Customizing the views

If you want to change how the views look, you need to publish the them to your `resources/views/vendor` directory by running

```bash
php artisan vendor:publish --tag=lf
```

After this, in `resources/views/vendor/laravelFoundation` you will find Blade templates for both authentication and pagination.


## 4. Adding Zurb Foundation to your project

Import npm package and copy settings and utils so you can customize Foundation:

```bash
yarn add foundation-sites motion-ui --dev
mkdir resources/assets/sass/foundation/
cp node_modules/foundation-sites/scss/settings/_settings.scss resources/assets/sass/foundation/
cp -R node_modules/foundation-sites/scss/util/ resources/assets/sass/foundation/util/
```

### SCSS

In your `resources/assets/sass/app.scss` file remove:

```scss
// Bootstrap
@import "node_modules/bootstrap-sass/assets/stylesheets/bootstrap";
```

And add:

```scss
// Foundation
@import 'node_modules/foundation-sites/scss/foundation';
@import "foundation/settings";
@include foundation-everything; //or @include only the components you need

// Motion-Ui
@import 'node_modules/motion-ui/motion-ui'
```

### JavaScript

In your `resources/assets/js/bootstrap.js` file remove:

```js
require('bootstrap-sass');
```

And add:

```js
require('motion-ui')
require('what-input')
require('foundation-sites') // or individual components
$(document).ready(function() {
    $(document).foundation()
})
```

Then run `gulp` to recompile the assets.

##TODO

- Test
