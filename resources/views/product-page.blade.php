<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Product - Farlab</title>
    <link rel="stylesheet" href="{{ asset('assetsfront/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsfront/css/Montserrat.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsfront/css/baguetteBox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsfront/css/farlab-custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsfront/css/vanilla-zoom.min.css') }}">
    <style>
        .sentiment-bar {
            width: 200px;
            height: 20px;
            background-color: #ddd;
            border-radius: 10px;
            overflow: hidden;
        }

        .sentiment-fill {
            height: 100%;
            background: linear-gradient(to right, red, green);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top bg-body clean-navbar navbar-light" style="padding-bottom: 10px;padding-top: 10px;margin-bottom: 0px;">
        <div class="container"><a class="navbar-brand d-inline-flex logo" href="#">
                <img src="{{ asset('assetsfront/img/webpage/logofarlab2.webp') }}" width="32" height="32">Farlab</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{route('index')}}" >Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('catalog')}}" >Catalog</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('about')}}" >About us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}" >Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('products.index')}}" >Admin</a></li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('logout')}}"
                               onclick="event.preventDefault();this.closest('form').submit();" >
                                Logout
                            </a>
                        </li>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page product-page">
        <section class="clean-block clean-product dark">
            <div class="container">
                @include('product.info')
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-4">
                    <h5>Contact</h5>
                    <ul>
                        <li><a href="#">FARLAB S.A. de C.V.</a></li>
                        <li><a href="#">37 Calle OTE y Pje. YSI #365, Col. la Rabida San Salvador, El Salvador</a></li>
                        <li><a href="#">info@farlab.com.sv</a></li>
                        <li><a href="#">Tel.+(503)2235 2851 / 2235 3851</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2024 Copyright Text</p>
        </div>
    </footer>
    <script src="{{ asset('assets/jquery360.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assetsfront/js/baguetteBox.min.js')}}"></script>
    <script src="{{ asset('assetsfront/js/vanilla-zoom.js')}}"></script>
    <script src="{{ asset('assetsfront/js/theme.js')}}"></script>
</body>

</html>
