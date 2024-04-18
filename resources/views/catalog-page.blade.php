<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Catalog - Farlab</title>
    <link rel="stylesheet" href="{{ asset('assetsfront/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsfront/css/Montserrat.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="{{ asset('assetsfront/css/baguetteBox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsfront/css/farlab-custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsfront/css/vanilla-zoom.min.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top bg-body clean-navbar navbar-light" style="padding-bottom: 10px;padding-top: 10px;margin-bottom: 0px;">
        <div class="container"><a class="navbar-brand d-inline-flex logo" href="#"><img src= "{{ asset('assetsfront/img/webpage/logofarlab2.webp')}}" width="32" height="32">Farlab</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link " href="{{route('index')}}" >Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{route('catalog')}}" >Catalog</a></li>
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
    <main class="page catalog-page">
        <section class="clean-block clean-catalog dark">
            <div class="container">
                <div class="block-heading" style="padding-top: 16px;padding-bottom: 0px;margin-bottom: 14px;">
                    <h2 class="text-info">Catalog of products</h2>
                    <p>Quality product and high-end equiments</p>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="d-none d-md-block">
                                <div class="filters">
                                    <div class="filter-item">
                                        <h3>Categories</h3>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Equipment</label></div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Drugs</label></div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3"><label class="form-check-label" for="formCheck-3">Supplies</label></div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-4"><label class="form-check-label" for="formCheck-4">Miscs</label></div>
                                    </div>
                                    <div class="filter-item">
                                        <h3>Manufacturer</h3>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-5"><label class="form-check-label" for="formCheck-5">Spinreact</label></div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-6"><label class="form-check-label" for="formCheck-6">Mindray</label></div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-7"><label class="form-check-label" for="formCheck-7">RightSign</label></div>
                                    </div>
                                    <div class="filter-item">
                                        <h3>Area</h3>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-11"><label class="form-check-label" for="formCheck-11">Chemistry</label></div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-12"><label class="form-check-label" for="formCheck-12">Hematology</label></div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-13"><label class="form-check-label" for="formCheck-13">Coagulation</label></div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-14"><label class="form-check-label" for="formCheck-14">Misc</label></div>
                                    </div>
                                    <div class="filter-item">
                                        <h3>Test per hour</h3>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-8"><label class="form-check-label" for="formCheck-8">&lt;10</label></div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-9"><label class="form-check-label" for="formCheck-9">up to 100</label></div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-10"><label class="form-check-label" for="formCheck-10">up to 1000</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-none"><a class="btn btn-link d-md-none filter-collapse" data-bs-toggle="collapse" aria-expanded="false" aria-controls="filters" href="#filters" role="button">Filters<i class="icon-arrow-down filter-caret"></i></a>
                                <div class="collapse" id="filters">
                                    <div class="filters">
                                        <div class="filter-item">
                                            <h3>Categories</h3>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Equipment</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Drugs</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3"><label class="form-check-label" for="formCheck-3">Supplies</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-4"><label class="form-check-label" for="formCheck-4">Miscs</label></div>
                                        </div>
                                        <div class="filter-item">
                                            <h3>Manufacturer</h3>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-5"><label class="form-check-label" for="formCheck-5">Spinreact</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-6"><label class="form-check-label" for="formCheck-6">Mindray</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-7"><label class="form-check-label" for="formCheck-7">RightSign</label></div>
                                        </div>
                                        <div class="filter-item">
                                            <h3>Area</h3>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-11"><label class="form-check-label" for="formCheck-11">Chemistry</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-12"><label class="form-check-label" for="formCheck-12">Hematology</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-13"><label class="form-check-label" for="formCheck-13">Coagulation</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-14"><label class="form-check-label" for="formCheck-14">Misc</label></div>
                                        </div>
                                        <div class="filter-item">
                                            <h3>Test per hour</h3>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-8"><label class="form-check-label" for="formCheck-8">&lt;10</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-9"><label class="form-check-label" for="formCheck-9">up to 100</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-10"><label class="form-check-label" for="formCheck-10">up to 1000</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="products">
                                @include('catalog.products')
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a class="page-link" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                        <li class="page-item active"><a class="page-link">1</a></li>
                                        <li class="page-item"><a class="page-link">2</a></li>
                                        <li class="page-item"><a class="page-link">3</a></li>
                                        <li class="page-item"><a class="page-link" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                </nav>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assetsfront/js/baguetteBox.min.js') }}"></script>
    <script src="{{ asset('assetsfront/js/vanilla-zoom.js') }}"></script>
    <script src="{{ asset('assetsfront/js/theme.js') }}"></script>

</body>

</html>
