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

### copy ck js cdn link and code
```bash
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script>
```

### Form Code
```bash
   <form action="{{ route('form-data') }}" method="post">
                    @csrf
                    <textarea name="message" id="editor1"></textarea>
                    <br>
                    <br>
                    <button class="btn" type="submit">Submit</button>
                </form>
```
