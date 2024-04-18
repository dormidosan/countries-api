<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact Us - Farlab</title>
    <link rel="stylesheet" href="{{ asset('assetsfront/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsfront/css/Montserrat.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsfront/css/baguetteBox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsfront/css/farlab-custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsfront/css/vanilla-zoom.min.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top bg-body clean-navbar navbar-light" style="padding-bottom: 10px;padding-top: 10px;margin-bottom: 0px;">
        <div class="container"><a class="navbar-brand d-inline-flex logo" href="#"><img src="assetsfront/img/webpage/logofarlab2.webp" width="32" height="32">Farlab</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link " href="{{route('index')}}" >Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('catalog')}}" >Catalog</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('about')}}" >About us</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{route('contact')}}" >Contact</a></li>
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
    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container" style="padding-top: 16px;margin-top: 0px;">
                <div class="content">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <iframe allowfullscreen frameborder="0" loading="lazy" src="https://www.google.com/maps/embed/v1/search?key=AIzaSyA5TCJyD3XmyWK1wtZi1LnniCQmCnx4o9I&amp;q=national+college+ireland&amp;zoom=16" width="100%" height="400"></iframe>
                        </div>
                        <div class="col">
                            <div class="row row-contact">
                                <div class="col-2">
                                    <div class="text-center" style="display: block;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-phone-vibrate fs-1 text-primary">
                                            <path d="M10 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zM6 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2z"></path>
                                            <path d="M8 12a1 1 0 1 0 0-2 1 1 0 0 0 0 2M1.599 4.058a.5.5 0 0 1 .208.676A6.967 6.967 0 0 0 1 8c0 1.18.292 2.292.807 3.266a.5.5 0 0 1-.884.468A7.968 7.968 0 0 1 0 8c0-1.347.334-2.619.923-3.734a.5.5 0 0 1 .676-.208m12.802 0a.5.5 0 0 1 .676.208A7.967 7.967 0 0 1 16 8a7.967 7.967 0 0 1-.923 3.734.5.5 0 0 1-.884-.468A6.967 6.967 0 0 0 15 8c0-1.18-.292-2.292-.807-3.266a.5.5 0 0 1 .208-.676M3.057 5.534a.5.5 0 0 1 .284.648A4.986 4.986 0 0 0 3 8c0 .642.12 1.255.34 1.818a.5.5 0 1 1-.93.364A5.986 5.986 0 0 1 2 8c0-.769.145-1.505.41-2.182a.5.5 0 0 1 .647-.284m9.886 0a.5.5 0 0 1 .648.284C13.855 6.495 14 7.231 14 8c0 .769-.145 1.505-.41 2.182a.5.5 0 0 1-.93-.364C12.88 9.255 13 8.642 13 8c0-.642-.12-1.255-.34-1.818a.5.5 0 0 1 .283-.648z"></path>
                                        </svg></div>
                                </div>
                                <div class="col">
                                    <div><span>Tel 089 981 9041</span></div>
                                </div>
                            </div>
                            <div class="row row-contact">
                                <div class="col-2">
                                    <div class="text-center" style="display: block;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope-check fs-1 text-warning">
                                            <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"></path>
                                            <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z"></path>
                                        </svg></div>
                                </div>
                                <div class="col">
                                    <div><span>info@farlab.ie</span></div>
                                </div>
                            </div>
                            <div class="row row-contact">
                                <div class="col-2">
                                    <div class="text-center" style="display: block;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-pin-map fs-1 text-success">
                                            <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8z"></path>
                                            <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"></path>
                                        </svg></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-4">
                    <h5>Contact</h5>
                    <ul>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assetsfront/js/baguetteBox.min.js"></script>
    <script src="assetsfront/js/vanilla-zoom.js"></script>
    <script src="assetsfront/js/theme.js"></script>
</body>

</html>
