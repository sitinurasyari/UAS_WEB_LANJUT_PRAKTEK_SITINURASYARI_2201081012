<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Restoran Siti - @yield('title', 'Website')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Restoran Siti</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Daftar Menu
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/menu/makanan">Menu Makanan</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/menu/minuman">Menu Minuman</a></li>
                        </ul>
                        @auth
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bi bi-card-checklist {{ request()->is('orders*') ? 'active' : '' }}"
                            href="/orders"> Orderan Saya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bi bi-cart {{ request()->is('order*') ? 'active' : '' }}"
                            href="/order/form"> Order Here</a>
                    </li>
                    @endauth
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container my-2">
        @yield('content')
    </div>

    <footer class="bg-dark text-center text-white py-2">
        Copyright &copy; {{ date('Y') }} Siti Nur Asyari
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
