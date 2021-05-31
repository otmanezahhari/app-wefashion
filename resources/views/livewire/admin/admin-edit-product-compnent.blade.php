<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div style="margin:50px auto;" class="flex justify-content-between align-items-center">
                            <div class="admin-table-heading">
                                Edit New Product
                            </div>
                            <div class="col-md-6">
                                <a class="btn" href="{{route('admin.products')}}">All Products</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('message')}}
                            </div>
                        @endif
                        <form class="storecategory" wire:submit.prevent = "updateProduct"    class="form-horizental" enctype="multipart/form-data">
                            <div class="form-group flex align-items-center">
                                <label class="col-md-4 control-label">Product Name</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="name" wire.keyup="generateSlug"  >
                                </div>
                            </div>

                            <div class="form-group flex align-items-center">
                                <label >Product slug</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Product slug" class="form-control input-md" wire:model="slug"  >
                                </div>
                            </div>

                            <div class="form-group flex align-items-center">
                                <label >Short Description</label>
                                <div class="col-md-4">
                                <textarea class="form-control" placeholder="short Description" wire:model="short_description"  ></textarea>
                                </div>
                            </div>

                            <div class="form-group flex align-items-center">
                                <label >Description</label>
                                <div class="col-md-4">
                                <textarea class="form-control" placeholder="Description" wire:model="description"></textarea>
                                </div>
                            </div>

                            <div class="form-group flex align-items-center">
                                <label >Regular price</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Regular price" class="form-control input-md" wire:model="regular_price"  >
                                </div>
                            </div>

                            <div class="form-group flex align-items-center">
                                <label >Sale Price</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Sale Price" class="form-control input-md"  wire:model="sale_price" >
                                </div>
                            </div>


                            <div class="form-group form-group flex align-items-center">
                                <label >stock</label>
                                <div class="col-md-4 select">
                                    <select class="form-control"  wire:model="stock_status" >
                                        <option value="instock">InStock</option>
                                        <option value="outofstock">OutOfStock</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group flex align-items-center">
                                <label >Quantity</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Quantity" class="form-control input-md" wire:model="quantity" >
                                </div>
                            </div>


                            <div class="form-group flex align-items-center ">
                                <label >Product Image</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="image"  >
                                    @if($newimage)
                                        <img src="{{$newimage->temporaryUrl()}}" style="width: 60px;height:60px" alt="">
                                    @else
                                        <img src="{{asset('assets/images/home-page-img')}}/{{$image}}" style="width: 60px;height:60px" alt="">
                                    @endif
                                </div>
                            </div>

                            <div class="form-group flex align-items-center">
                                <label >Category</label>
                                <div class="col-md-4 form-group select">
                                    <select class="form-control" wire:model="category_id" >
                                        <option value="0">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label ></label>
                                <div class="col-md-4">
                                    <button class="btn" type="submit">Update</button>
                                </div>
                            </div>


                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
