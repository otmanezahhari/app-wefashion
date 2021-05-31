<div>
    <div class="container padding-35">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="flex justify-content-between align-items-center">
                            <div class = "admin-table-heading">
                                All Categories
                            </div>

                            <div class="col-md-6">
                                <a class="btn" href="{{route('admin.addproduct')}}">Add New</a>
                            </div>
                         </div>
                    </div>

                    <div class="panel-product-body">

                    @if(Session::has('message'))
                        <div class="alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Action</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>
                                            @if($product->category->name === "men")
                                                <img src="{{asset('assets/images/hommes')}}/{{$product->image}}" style="width:60px;height:60px">
                                            @else
                                                <img src="{{asset('assets/images/femmes')}}/{{$product->image}}" style="width:60px;height:60px">
                                            @endif
                                        </td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->stock_status}}</td>
                                        <td>{{$product->regular_price}}</td>
                                        <td>{{$product->category->name}}</td>
                                        <td>{{$product->created_at}}</td>

                                        <td style="justify-content: center;">
                                            <a style="display: inline-block;" href="{{route('admin.editproduct',['product_slug'=>$product->slug])}}"><img  src="{{asset('./assets/images/edit-solid.svg')}}" alt="" style="width:30px;cursor:pointer;margin:0px"></a>
                                            <a style="display: inline-block;margin: 20px 0;" wire:click.prevent="deleteProduct({{$product->id}})" ><img  src="{{asset('./assets/images/user-times-solid.svg')}}" style="width:30px;cursor:pointer;margin:0px"></a>
                                        </td>


                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                        @if (\DB::table('products')->count()>10)

                            {{$products->links('pagination::bootstrap-4')}}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
