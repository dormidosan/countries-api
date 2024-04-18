<div class="block-content">
    <div class="product-info">
        <div class="row">
            <div class="col-md-6">
                <div class="gallery">
                    <div id="product-preview" class="vanilla-zoom">
                        <div class="zoomed-image"></div>
                        <div class="sidebar">
                            <img class="img-fluid d-block small-preview" src="{{ asset($product->image_url)}}">
                            <img class="img-fluid d-block small-preview" src="{{ asset($product->image_url)}}">
                            <img class="img-fluid d-block small-preview" src="{{ asset($product->image_url)}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info">
                    <h3>BS-800</h3>
                    <div class="rating">
                        <img src="{{ asset('assetsfront/img/star.svg')}}">
                        <img src="{{ asset('assetsfront/img/star.svg')}}">
                        <img src="{{ asset('assetsfront/img/star.svg')}}">
                        <img src="{{ asset('assetsfront/img/star-half-empty.svg')}}">
                        <img src="{{ asset('assetsfront/img/star-empty.svg')}}">
                    </div>
                    <div class="price">
                        <h3>{{$product->manufacturer}}</h3>
                    </div>
                    <div class="price">
                        <h3>{{$product->name}}</h3>
                    </div>
                    <div class="summary">
                        <p>
                            <span style="color: rgb(0, 0, 0);">
                            {{$product->description}}
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-info">
        <div>
            <ul class="nav nav-tabs" role="tablist" id="myTab">
                <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" id="reviews-tab" href="#reviews">Coments</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" id="documentos-tab" href="#documentos">Documents</a></li>
            </ul>
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" role="tabpanel" id="reviews">
                    @include('product.comments')
                </div>

                <div class="tab-pane fade" role="tabpanel" id="documentos">
                    <div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th>Accion</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Manual de usuario</td>

                                </tr>
                                <tr>
                                    <td>Brochure</td>

                                </tr>
                                <tr>
                                    <td>Manual de instalacion</td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clean-related-items">
        <h3>Related products&nbsp;</h3>
        <!-- div class="items">
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="clean-related-item">
                        <div>
                            <h3 class="text-center text-primary">BS-640</h3>
                        </div>
                        <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="assetsfront/img/resources/equipos/bs_380.webp"></a></div>
                        <div class="related-name"><a href="#">+1000 test per minute</a>
                            <div class="rating"><img src="assetsfront/img/star.svg"><img src="assetsfront/img/star.svg"><img src="assetsfront/img/star.svg"><img src="assetsfront/img/star-half-empty.svg"><img src="assetsfront/img/star-empty.svg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="clean-related-item">
                        <div>
                            <h3 class="text-center text-primary">BS-600</h3>
                        </div>
                        <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="assetsfront/img/resources/equipos/bs_480.webp"></a></div>
                        <div class="related-name"><a href="#">+4000&nbsp;test per minute</a>
                            <div class="rating"><img src="assetsfront/img/star.svg"><img src="assetsfront/img/star.svg"><img src="assetsfront/img/star.svg"><img src="assetsfront/img/star-half-empty.svg"><img src="assetsfront/img/star-empty.svg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="clean-related-item">
                        <div>
                            <h3 class="text-center text-primary">BS-400</h3>
                        </div>
                        <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="assetsfront/img/resources/equipos/bs_600.webp"></a></div>
                        <div class="related-name"><a href="#">+6000 test per minute</a>
                            <div class="rating"><img src="assetsfront/img/star.svg"><img src="assetsfront/img/star.svg"><img src="assetsfront/img/star.svg"><img src="assetsfront/img/star-half-empty.svg"><img src="assetsfront/img/star-empty.svg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div -->

    </div>
</div>
