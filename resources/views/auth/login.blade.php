<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap and Icon CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">
    <main class="container">
    <div class="row">
        <div class="offset-4 col-4">
            <h1 class="display-1 fw-bold text-primary my-5">Connexion</h1>
            <form class="mb-3" method="POST" action="{{ route('login.post') }}">
                @csrf
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control mb-3" name="name" id="name" required>
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control mb-3" name="email" id="email" required>
                <label for="password" class="form-label">Mot de passe:</label>
                <input type="password"  class="form-control mb-3"name="password" id="password" required>
                <button class="btn btn-primary mt-4" type="submit">Connexion/Inscription</button>
            </form>
            @include('layouts.flash-message')
        </div>
    </div>
    </main>
</body>

<!-- Bootstrap JavaScript via CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>
</html>