<div class="solde-page container">
<div class="list-products flex justify-content-between">

    @if(\DB::table('products')->find('ensolde')->product_status === "ensolde")
        @php
            $count = 0;
        @endphp
        @foreach ($products as $product)
            @if($product->product_status === "ensolde")
            @php
                $count++;
            @endphp
                <div class="product-items">
                    <div class="product" title="{{$product->name}}">
                        <a href="{{route('product.details',['slug'=>$product->slug])}}" class="img-box">
                            <img src="{{asset('assets/images/home-page-img')}}/{{$product->image}}" alt="{{$product->name}}">
                        </a>
                        <div class="product-description text-align-center">
                        <a href="{{route('product.details',['slug'=>$product->slug])}}">{{$product->name}}</a>
                        <a href="{{route('product.details',['slug'=>$product->slug])}}">€{{$product->regular_price}}   <span style="text-decoration: line-through;color: red;"> €{{$product->sale_price}}</span></a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    @else

    <div>
        This page is empty
        <a href="/">Clique ici pour retourner à la page d'acceuil</a>
    </div>

    @endif

    <div class="wrap-pagination-info">
        @if($count>6)
            {{$products->links('pagination::bootstrap-4')}}
        @endif

    </div>

</div>


</div>


