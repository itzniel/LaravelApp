<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

</head>
<body style="background-color:rgba(245,245,220,0.32) ">
<header>
        <nav class="navbar navbar-expand-md bg-dark-subtle">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li><a class="nav-link text-dark" href="{{ url('categories') }}"> Categories </a></li>

                        <li><a class="nav-link" href="{{ url('articles') }}">Articles</a></li>
                    </ul>
                    <span class="navbar-text text-right " style="margin-left: 30%">
                    Last posted article: {{ $lastPostedArticle }}<br></span>

                </div>
            </div>
        </nav>

    </header>
    <div class="container ">
        <div class="row content">
            <div class="col-sm-10 text-left">
                @yield('body')
            </div>
        </div>
    </div>
    <footer class="container-fluid text-center">
        @yield('footer')
    </footer>
</body>

</html>
