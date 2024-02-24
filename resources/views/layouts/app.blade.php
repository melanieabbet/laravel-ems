<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap and Icon CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class=" bg-light">
    <nav class="navbar navbar-expand navbar-dark bg-dark mb-4">
    <div class="container-fluid">
        <a class="navbar-brand px-5" href="#">Laravel EMS</a>
        <ul class="navbar-nav mb-2 mb-md-0 px-5">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('retraites.index') }}">Retraités</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('ems.index') }}">Ems</a>
            </li>
        </ul>
    </div>
    </nav>
    <main class="container">
        @include('layouts.flash-message')
        @yield('content')
    </main>
</body>

<!-- Bootstrap JavaScript via CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>
</html>