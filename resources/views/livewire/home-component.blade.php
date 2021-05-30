<main id="main" class="margin-top-70">
    <div class="acceuil-page container">
      <div class="product-number">
        <p><span>{{\DB::table('products')->count()}}</span> résultats</p>
      </div>

      <div class="list-products flex justify-content-between">

        @foreach ($products as $product)
            <div class="product-items">
                <div class="product" title="{{$product->name}}">
                    <a href="{{route('product.details',['slug'=>$product->slug])}}" class="img-box">
                        <img src="{{asset('assets/images/home-page-img')}}/{{$product->image}}" alt="{{$product->name}}">
                    </a>
                    <div class="product-description text-align-center">
                        <h2>
                            <a href="{{route('product.details',['slug'=>$product->slug])}}">{{$product->name}}</a>
                        </h2>
                        <a href="{{route('product.details',['slug'=>$product->slug])}}">€{{$product->regular_price}}</a>
                    </div>
                </div>
            </div>

        @endforeach

        <div class="wrap-pagination-info">
            {{$products->links('pagination::bootstrap-4')}}

        </div>

      </div>


    </div>
  </main>
