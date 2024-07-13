<!-- resources/views/partials/header.blade.php -->
<!-- Topbar -->
<div class="bg-light py-2 border-bottom">
    <div class="container d-flex justify-content-between">
        <div class="d-flex align-items-center">
            <a href="#" class="me-3 text-dark"><i class="fab fa-facebook-f"></i></a>
            <a href="tel:+1234567890" class="text-dark"><i class="fas fa-phone-alt"></i> +123 456 7890</a>
        </div>
        <div class="d-flex align-items-center">
            <div class="dropdown me-3">
                <a class="dropdown-toggle text-dark" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Language
                </a>
                <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                    <li><a class="dropdown-item" href="#">English</a></li>
                    <li><a class="dropdown-item" href="#">Spanish</a></li>
                </ul>
            </div>
            <div class="dropdown me-3">
                <a class="dropdown-toggle text-dark" href="#" id="currencyDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Currency
                </a>
                <ul class="dropdown-menu" aria-labelledby="currencyDropdown">
                    <li><a class="dropdown-item" href="#">USD</a></li>
                    <li><a class="dropdown-item" href="#">EUR</a></li>
                </ul>
            </div>
            <a href="#" class="me-3 text-dark">Login</a>
            <a href="#" class="text-dark">Register</a>
        </div>
    </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{asset('assets/images/logo.png')}}" class="header-logo img-fluid" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <form class="d-flex me-3">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <a href="#" class="me-3 text-dark"><i class="fas fa-heart"></i></a>
            <a href="#" class="text-dark"><i class="fas fa-shopping-cart"></i></a>
        </div>
    </div>
</nav>
