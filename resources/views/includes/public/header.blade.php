<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amanda Blog</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!--vendor css ================================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home/vendor.css') }}">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!--Bootstrap ================================================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <!-- Style Sheet ================================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home/style.css') }}">

    <!-- Google Fonts ================================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaldi&family=Merriweather:wght@300;400;700&display=swap"
          rel="stylesheet">


    <!-- script ================================================== -->
    <script src="{{ asset('js/home/modernizr.js') }}"></script>

</head>


<body>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-icon" viewBox="0 0 512 512">
        <path fill="currentColor"
              d="m359.873 121.377l-22.627 22.627l95.997 95.997H16v32.001h417.24l-95.994 95.994l22.627 22.627L494.498 256L359.873 121.377z" />
    </symbol>
    <symbol id="search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
        <title>Search</title>
        <path fill="currentColor"
              d="M19 3C13.488 3 9 7.488 9 13c0 2.395.84 4.59 2.25 6.313L3.281 27.28l1.439 1.44l7.968-7.969A9.922 9.922 0 0 0 19 23c5.512 0 10-4.488 10-10S24.512 3 19 3zm0 2c4.43 0 8 3.57 8 8s-3.57 8-8 8s-8-3.57-8-8s3.57-8 8-8z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 16 16">
        <path
            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
    </symbol>
</svg>


<div class="search-popup">
    <div class="search-popup-container">

        <form role="search" method="get" class="form-group" action="index.html">
            <input type="search" id="search-form" class="form-control border-0 border-bottom" placeholder="Type and press enter" value="" name="s">
            <button type="submit" class="search-submit border-0 position-absolute bg-white" style="top: 15px;right: 15px;"><svg class="search" width="24" height="24">
                    <use xlink:href="#search"></use>
                </svg></button>
        </form>

        <h5 class="cat-list-title">Browse Categories</h5>

        <ul class="cat-list">
            <li class="cat-list-item">
                <a href="#" title="Self Love">Self Love</a>
            </li>
            <li class="cat-list-item">
                <a href="#" title="Relationships">Relationships</a>
            </li>
            <li class="cat-list-item">
                <a href="#" title="Skin Care">Skin Care</a>
            </li>
            <li class="cat-list-item">
                <a href="#" title="Health">Health</a>
            </li>
            <li class="cat-list-item">
                <a href="#" title="Spa">Spa</a>
            </li>
            <li class="cat-list-item">
                <a href="#" title="Friendship">Friendship</a>
            </li>
            <li class="cat-list-item">
                <a href="#" title="Healing">Healing</a>
            </li>
        </ul>

    </div>
</div>


<!-- Navigation Section Starts -->
<nav id="header-nav" class="navbar navbar-expand-lg container-fluid py-4 px-3 px-lg-5 position-fixed">
    <a class="navbar-brand" href="index.html"><img src="images/Amanda.png" alt="logo"></a>
    <p class="title-paragraph mb-0 mt-2">a freelance blog writer</p>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav text-center align-items-center justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link active pe-lg-5" aria-current="page" href="{{ route('main.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-lg-5" href="{{route('about.index')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-lg-5" href="{{route('contacts.index')}}">Contact</a>
                </li>
                @can('view', auth()->user())
                    <li class="nav-item">
                        <a class="nav-link pe-lg-5" href="{{route('admin.index')}}">Admin Panel</a>
                    </li>
                @endcan
                <li class="nav-item">
                    <a class="nav-link pe-lg-5" href="{{route('posts.index')}}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-lg-5" href="gallery.html">Gallery</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link pe-lg-5" href="faq.html">FAQs</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link pe-lg-5 dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                       aria-expanded="false"> Pages <iconify-icon icon="ic:outline-arrow-drop-down"></iconify-icon>
                    </a>
                    <ul class="dropdown-menu">
                        <li class=""><a href="about.html" class="dropdown-item text-uppercase">About <span
                                    class="badge bg-secondary">Pro</span></a></li>
                        <li class=""><a href="blog.html" class="dropdown-item text-uppercase">Blog <span
                                    class="badge bg-secondary">Pro</span></a></li>
                        <li class=""><a href="blog-single.html" class="dropdown-item text-uppercase">Blog-Single <span
                                    class="badge bg-secondary">Pro</span></a>
                        </li>
                        <li class=""><a href="gallery.html" class="dropdown-item text-uppercase">Gallery <span
                                    class="badge bg-secondary">Pro</span></a></li>
                        <li class=""><a href="contact.html" class="dropdown-item text-uppercase">Contact <span
                                    class="badge bg-secondary">Pro</span></a></li>
                        <li class=""><a href="faq.html" class="dropdown-item text-uppercase">FAQs <span
                                    class="badge bg-secondary">Pro</span></a></li>
                        <li class=""><a href="styles.html" class="dropdown-item text-uppercase">Styles <span
                                    class="badge bg-secondary">Pro</span></a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold pe-lg-5" href="{{route('login')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold pe-lg-5" href="{{route('register')}}">Register</a>
                </li>

                <li class="nav-item search-item mt-2 mt-lg-0 ">
                    <a href="#" class="search-button">
                        <svg class="search">
                            <use xlink:href="#search"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>




