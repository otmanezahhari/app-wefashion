<div class="list-products flex justify-content-between">
        @php
            $count = 0;
        @endphp
        @foreach ($products as $product)

            @if($product->product_category === 'men')

                <div class="product-items">
                <div class="product" title="{{$product->name}}">
                    <a href="{{route('product.details',['slug'=>$product->slug])}}" class="img-box">
                        <img src="{{asset('assets/images/hommes')}}/{{$product->image}}" alt="{{$product->name}}">
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

        {{$products->links('pagination::bootstrap-4')}}

</div>

</div>
