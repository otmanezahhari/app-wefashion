<div>
   <div class="container">
    <div class="row">
        <div class="box">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">

                        <div class="box-add-category">
                            Add New Category
                        </div>

                        <div class="box-category">
                            <a href="{{route('admin.categories')}}">All Category</a>
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    @if(Session::has('message'))
                        <div class="alert-success">
                            {{Session::get('message')}}
                        </div>

                    @endif
                    <form  wire:submit.prevent="storeCategory">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Category Name</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Category Name" class="form-control input-md" wire:model="name" wire:keyup="generateslug" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Category Slug</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Category Slug" class="form-control input-md" wire:model="slug"   >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn">Submit</button>
                                </div>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   </div>
</div>
