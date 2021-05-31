<div class="container">

    <div class="product-number">
        <p><span>{{\DB::table('products')->where('category_id','2')->count()}}</span> résultats</p>
    </div>

    <div class="list-products flex justify-content-between">

        @foreach ($products as $product)
            @if($product->category->name  === 'women')
                <div class="product-items">
                <div class="product" title="{{$product->name}}">
                    <a href="{{route('product.details',['slug'=>$product->slug])}}" class="img-box">
                        <img src="{{asset('assets/images/femmes')}}/{{$product->image}}" alt="{{$product->name}}">
                    </a>
                    <div class="product-description text-align-center">
                    <a href="{{route('product.details',['slug'=>$product->slug])}}">{{$product->name}}</a>
                    <a href="{{route('product.details',['slug'=>$product->slug])}}">€{{$product->regular_price}}</a>
                    </div>
                </div>
                </div>

            @endif

        @endforeach

    <div class="wrap-pagination-info">
        @if (\DB::table('products')->where('category_id','2')->count()>6)
            {{$products->links('pagination::bootstrap-4')}}
        @endif

    </div>

    </div>
</div>
