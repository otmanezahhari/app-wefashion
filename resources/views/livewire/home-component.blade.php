<main id="main" class="margin-top-70">
    <div class="acceuil-page container">
      <div class="product-number">
        <p><span>{{\DB::table('products')->where('product_published','published')->count()}}</span> résultats</p>
      </div>

      <div class="list-products flex justify-content-between">

        @foreach ($products as $product)

            @if($product->product_published === "published")
                <div class="product-items">
                    <div class="product" title="{{$product->name}}">
                        <a href="{{route('product.details',['slug'=>$product->slug])}}" class="img-box">

                        @if($product->category->name === "men")
                                <img src="{{asset('assets/images/hommes')}}/{{$product->image}}" alt="{{$product->name}}">
                        @else
                                <img src="{{asset('assets/images/femmes')}}/{{$product->image}}" alt="{{$product->name}}">
                        @endif

                        </a>
                        <div class="product-description text-align-center">
                            <h2>
                                <a href="{{route('product.details',['slug'=>$product->slug])}}">{{$product->name}}</a>
                            </h2>
                            <a href="{{route('product.details',['slug'=>$product->slug])}}">€{{$product->regular_price}}</a>
                        </div>
                    </div>
                </div>

            @endif





        @endforeach

        <div class="wrap-pagination-info">


            @if (\DB::table('products')->where('product_published','published')->count()>6)

                {{$products->links('pagination::bootstrap-4')}}
            @endif


        </div>

      </div>


    </div>
  </main>
