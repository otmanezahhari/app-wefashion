<div class="description-page container">

    <div class="product-description flex align-items-center">

        <div class="box-description-img">
            <img src="{{asset('assets/images/home-page-img')}}/{{$product->image}}" alt="{{$product->name}}">
        </div>

        <div class="product-left-description">


            <h1 class="heading">{{$product->name}}</h1>
            <p class="short-deacription">{{$product->short_description}}</p>
            @if($product->product_status === "ensolde")
                <p>€{{$product->regular_price}}   <span style="text-decoration: line-through;color: red;"> €{{$product->sale_price}}</span></p>
            @else
                <p>€{{$product->regular_price}}</p>
            @endif

            <form>
                <select style="font-size: 20px; padding:10px">
                    <option value="m">M</option>
                    <option value="m">L</option>
                    <option value="m">S</option>
                    <option value="m">XL</option>
                    <option value="m">M</option>
                </select>

                <button type="submit" class="btn">Acheter</button>

            </form>

        </div>


    </div>

    <div class="description-global" style="text-align: center; max-width:700px;margin:auto;padding-bottom:60px">
        {{$product->description}}
    </div>

</div>
