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
                                        <td><img src="{{asset('assets/images/home-page-img')}}/{{$product->image}}" style="width:60px;height:60px"></td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->stock_status}}</td>
                                        <td>{{$product->regular_price}}</td>
                                        <td>{{$product->category->name}}</td>
                                        <td>{{$product->created_at}}</td>

                                        <td class="flex" style="justify-content: center;height: 88px;">
                                            <img  src="{{asset('./assets/images/edit-solid.svg')}}" alt="" style="width:30px;cursor:pointer;margin-right:5px"></a></li>
                                            <img  src="{{asset('./assets/images/user-times-solid.svg')}}" style="width:30px;cursor:pointer"></a></li>
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
