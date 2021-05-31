<div>

    <style>
nav svg{
    height: 20px;
}

nav .hidden{
    display: block !important;
}
    </style>
    <div class="container padding-35">
        <div class="row">
            <div class="box">
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <div class="flex justify-content-between align-items-center">
                            <div class="admin-table-heading">
                                All Categories
                            </div>

                            <div class="col-md-6">
                                <a class="btn" href="{{route('admin.addcategory')}}">Add New</a>
                            </div>
                         </div>
                    </div>

                    <div class="panel-body-category">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <td class="flex" style="justify-content: center;">
                                            <img  src="{{asset('./assets/images/edit-solid.svg')}}" alt="" style="width:30px;cursor:pointer;margin-right:5px"></a></li>
                                            <img  src="{{asset('./assets/images/user-times-solid.svg')}}" style="width:30px;cursor:pointer"></a></li>
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                        {{$categories->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
