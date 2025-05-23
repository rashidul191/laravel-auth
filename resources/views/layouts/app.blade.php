<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Toastify Link -->
    <!-- Toastify Link -->
    <!-- Toastify Link -->
    @toastifyCss

</head>

<body class="font-sans antialiased">







    <!-- toastify()->success('Your action was successful!'); -->
    <!-- toastify()->success('Your action was successful!'); -->

    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script>


    <!-- Quill JS -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <!-- Initialize Quill -->
    <script>
        var quill = new Quill('#quill-editor', {
            theme: 'snow'
        });

        // Sync content on form submit
        function syncEditorContent() {
            var html = quill.root.innerHTML;
            document.getElementById('content').value = html;
        }
    </script>

    @toastifyJs

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



</body>

</html>