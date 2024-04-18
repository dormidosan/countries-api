<div class="row g-0">
    @foreach($products as $product)
        <div class="col-12 col-md-6 col-lg-4">
            <div class="border-light-subtle clean-product-item">
                <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="{{asset($product->image_url)}}"></a></div>
                <div class="product-name"><a href="#">{{$product->name}}</a></div>
                <div class="about">
                    <div class="rating"><img src="assetsfront/img/star.svg"><img src="assetsfront/img/star.svg"><img src="assetsfront/img/star.svg"><img src="assetsfront/img/star-half-empty.svg"><img src="assetsfront/img/star-empty.svg"></div>
                    <div class="price">
                        <h3><a href="{{ route('products.show', $product->id) }}">{{ $product->id }}</a></h3>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
