<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>École La Plume</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-brand img { width: 40px; }
        footer { background: #f8f9fa; padding: 20px 0; font-size: 0.85rem; }
        .hero-img { width: 100%; max-height: 280px; object-fit: cover; }
        .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #333;
            font-size: 1.8rem;
            font-style: italic;
            font-weight: 500;
            white-space: nowrap;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="https://img.icons8.com/color/48/school.png" alt="logo">
        </a>
        <div class="navbar-nav flex-row gap-3">
            <a class="nav-link {{ request()->routeIs('home') ? 'fw-bold text-success' : '' }}" href="{{ route('home') }}">Accueil</a>
            <a class="nav-link {{ request()->routeIs('presentation') ? 'fw-bold text-success' : '' }}" href="{{ route('presentation') }}">Présentation</a>
            <a class="nav-link {{ request()->routeIs('resultat') ? 'fw-bold text-success' : '' }}" href="{{ route('resultat') }}">Résultat</a>
            <a class="nav-link {{ request()->routeIs('contact') ? 'fw-bold text-success' : '' }}" href="{{ route('contact') }}">Contact</a>
        </div>
        <form class="d-flex ms-auto" method="GET" action="{{ route('resultat') }}">
            <input class="form-control me-2" type="search" name="search" placeholder="Search" value="{{ request('search') }}">
            <button class="btn btn-outline-success" type="submit">Rechercher</button>
        </form>
    </div>
</nav>

@isset($showHero)
<div class="position-relative">
    <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?w=1200&q=80" class="hero-img" alt="hero">
    <div class="hero-text">Le chemin vers l'excellence</div>
</div>
@endisset

<div class="container py-4">
    @yield('content')
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('home') }}" class="d-block text-dark text-decoration-none">Accueil</a>
                <a href="{{ route('presentation') }}" class="d-block text-dark text-decoration-none">Présentation</a>
                <a href="{{ route('contact') }}" class="d-block text-dark text-decoration-none">Contact</a>
            </div>
            <div class="col-md-4 text-center">
                <p class="mb-0">© copyright 2023</p>
            </div>
            <div class="col-md-4 text-end">
                <p class="mb-0">Téléphone : 0600000000</p>
                <p class="mb-0">Adresse: Rue Mouwahidin, Hay Saada, Fès</p>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
