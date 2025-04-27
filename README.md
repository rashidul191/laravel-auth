## Laravel Auth

1. Install Laravel

```bash
composer create-project lravel/laravel my-project "10.*"
```

2. Install Laravel Auth breeze

```bash
composer require laravel/breeze --dev
php artisan breeze:install
php artisan migrate
npm install && npm run dev
php artisan serve
```

## CK Editor Rich Editor Laravel

### copy ck editor js cdn link and code

```bash
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1');
</script>
```

### Form Code of Laravel

```bash
   <form action="{{ route('form-data') }}" method="post">
        @csrf
        <textarea name="message" id="editor1"></textarea>
        <button class="btn" type="submit">Submit</button>
   </form>
```

# Laravel Toastify

1. Installation

```bash
composer require redot/laravel-toastify
```

Then, add the following line to the head section of your `app.blade.php` file:

```bash
@toastifyCss
```

And the following line to the bottom of your `app.blade.php` file:

```bash
@toastifyJs
```

If you want to customize the default configuration, you can publish the configuration file using this command: (Optional)

```bash
php artisan vendor:publish --tag=toastify-config
```

## Usage

To display a toast message, simply call the toastify() helper function with the desired type and message:

`success`
`error`
`info`
`warning`

```bash
  <!-- Success Toast -->
    @if (session('success'))
    <script>
        toastify().success("{{ session('success') }}");
    </script>
    @endif

    <!-- Error Toast -->
    @if (session('error'))
    <script>
        toastify().success("{{ session('error') }}");
    </script>
    @endif
```

## Configuration

The configuration file for Laravel Toastify is located at `config/toastify.php`. Here you can specify the CDN links for the toastify library and customize the default toastifiers.

```bash
'toastifiers' => [
    'custom' => [
        'duration' => 5000,
        'style' => [
            'background' => '#2fb344',
            'color' => '#fff',
        ],
    ],
],
```

# Key Pear Value Get form Database

1. Create Helper.php `app/Http/Helper.php` file.

````bash
<?php

use App\Models\BusinessSetting;
if (!function_exists("business_setting")) {
    function business_setting($key, $default = null)
    {
        return BusinessSetting::where('key', $key)->value('value') ?? $default;
    }
}
````
2. add code of `composer.json` file
````bash
 "autoload": {
    // ------
        "files": [
            "app/Http/Helpers.php"
        ]
    },
````

3. Run this command
After editing `composer.json`, you need to update the Composer autoload files:
````bash
composer dump-autoload
````

4. Laravel Blade File Code
````bash
  <h2>{{ business_setting('about_title') }}</h2>
````