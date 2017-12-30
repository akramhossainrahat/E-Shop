@extends("admin.admin_dashboard")
@section("home_content");
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control Panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
            <li class="active">Add Product</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="col col-md-2"></div>

        <div class="col col-md-8">
            <div class="box box-primary">
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add New Product</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="{{URL::to('add-new-product')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Product Category</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="pro_cat">
                                        <option selected>Select a category</option>
                                        @foreach($cat_lists as $cats)
                                        <option value="{{$cats->category_id}}">{{$cats->category_name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>

                                <div class="col-sm-10">
                                    <input class="form-control" id="inputEmail3" name="pro_name"
                                           placeholder="Product Name" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Brand</label>

                                <div class="col-sm-10">
                                    <input class="form-control" id="inputPassword3" name="pro_brand"
                                           placeholder="Product Brand"
                                           type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Description</label>

                                <div class="col-sm-10">
                                    <textarea class="form-control" placeholder="Product Description"
                                              name="pro_desc"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Price</label>

                                <div class="col-sm-10">
                                    <input class="form-control" id="inputPassword3" placeholder="Product Price"
                                           type="number" name="pro_price">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile" class="col-sm-2 control-label">Product Image</label>
                                <div class="col-sm-10">
                                    <input id="exampleInputFile" type="file" name="image">
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-info pull-right">Add</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection