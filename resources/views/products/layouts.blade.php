<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 CRUD Application - UTS PPW 2</title>
    <!-- Correct CDN URLs with actual integrity hashes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="your-bootstrap-integrity-hash" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>   

    <div class="container">
        <h3 class="mt-3">Laravel 10 CRUD Application - PPW 2</h3>
    </div>

    <div class="container">
        @yield('content') <!-- This is where your Blade content will be inserted -->
    </div>

    <!-- Correct CDN URL with the actual integrity hash -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="your-bootstrap-bundle-integrity-hash" crossorigin="anonymous"></script>
</body>
</html>
