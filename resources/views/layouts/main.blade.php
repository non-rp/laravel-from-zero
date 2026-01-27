<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>Document</title>
</head>
<body class="container bg-body-secondary">
<header class="mb-4">
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{route('main.index')}}" class="nav-link active" aria-current="page">Main</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('posts.index')}}">Posts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about.index')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contacts.index')}}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">Register</a>
                        </li>
                        @can('view', auth()->user())
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.index')}}">Admin Panel</a>
                            </li>
                        @endcan
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<main>
    @yield('content')
</main>
</body>
</html>
