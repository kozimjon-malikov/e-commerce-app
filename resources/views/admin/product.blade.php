@extends('admin.layouts.app')
@section('content')
    <section class="content-header">
        <div class="box box-info">
            <div class="bg-green disabled color-palette">
                @if (session('msg'))
                    <div class="box box-success">
                        <div class="box-header ui-sortable-handle bg-green" style="cursor: move;">
                            <i class="fa fa-success"></i>
                            <h3 class="box-title">
                                {{ session('msg') }}
                            </h3>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <button type="button" class="btn bg-maroon btn-sm" data-widget="remove"
                                    data-toggle="tooltip" title="" data-original-title="Remove">
                                    <i class="fa fa-times"></i></button>
                            </div>
                            <!-- /. tools -->
                        </div>

                    </div>
                @endif
            </div>
            <div class="box-header with-border">
                <h3 class="box-title">Add product</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{ url('add_product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="text" class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control" id="text" placeholder="title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10">
                            <input type="text" name="description" class="form-control" id="text" placeholder="Description">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text" class="col-sm-2 control-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" name="image" class="form-control" id="text" placeholder="Image">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text" class="col-sm-2 control-label">Catagory</label>
                        <select class="form-control" name="catagory" style="position: relative;width: 80%;left:14px">
                            @foreach ($catagory as $catagory)
                                <option>{{ $catagory->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="text" class="col-sm-2 control-label">Quantity</label>
                        <div class="col-sm-10">
                            <input type="text" name="quantity" class="form-control" id="text" placeholder="Quantity">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text" class="col-sm-2 control-label">Price</label>
                        <div class="col-sm-10">
                            <input type="text" name="price" class="form-control" id="price" placeholder="price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text" class="col-sm-2 control-label">Discount_price</label>
                        <div class="col-sm-10">
                            <input type="text" name="dis_price" class="form-control" id="price" placeholder="Discount_price">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info ">Submit</button>
                </div>
            </form>
        </div>
    </section>
@endsection
