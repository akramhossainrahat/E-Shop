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
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (Session::has('success'))
        <div class="alert alert-info alert-dismissable">
            <i class="fa fa-info"></i>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <b>Alert!</b> {{ Session::get('success') }}.
        </div>
    @endif


    <section class="content"

    <!-- Small boxes (Stat box) -->
    <div class="col col-md-3">
    </div>
    <div class="col col-md-6">
        <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Add New Category</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{URL::to('save-product-category')}}" method="post">
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Category Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputPassword3" placeholder="New Category Name"
                                       type="text" name="cat_name">
                            </div>
                        </div>
                        {{--<div class="form-group">
                            <label for="exampleInputFile" class="col-sm-2 control-label">File input</label>
                            <div class="col-sm-10">
                                <input id="exampleInputFile" type="file">
                            </div>
                        </div>--}}
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
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Category List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Category Name</th>
                        <th style="width: 40px">Status</th>
                    </tr>
                    <?php $x = 1; ?>
                    @foreach($cat_lists as $cats)
                        <td>{{$x++}}</td>
                        <td>{{$cats->category_name}}</td>
                        <td><span class="badge bg-red">-</span></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>
<!-- /.content-wrapper -->
@endsection