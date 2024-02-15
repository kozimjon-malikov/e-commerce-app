@extends('admin.layouts.app')
@section('content')
    <section class="content-header">
        <div class="col-md-12">
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
            <div class="bg-green disabled color-palette">
                @if (session('msg_del'))
                    <div class="box box-success">
                        <div class="box-header ui-sortable-handle bg-green" style="cursor: move;">
                            <i class="fa fa-success"></i>
                            <h3 class="box-title">
                                {{ session('msg_del') }}
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
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Category</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="{{ url('/add_catagory') }}" method="POST">
                    @csrf
                    <!-- text input -->
                    <div class="form-group ">
                        <label style="margin:10px">Catagory name</label>
                        <input type="text" name="catagory" class="form-control col-md-10" style="margin: 10px 0px"
                            placeholder="Enter ...">
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>
            </div>
        </div>
        <div class="col-md-12">
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Task</th>
                            <th>Actions</th>
                        </tr>
                        @forelse ($data as $item)
                            <tr>
                                <td>{{ ($data->currentPage() - 1) * $data->perPage() + $loop->index + 1 }}</td>
                                <td>{{ $item->category_name }}</td>

                                <td><a href="{{ url('/delete_catagory', $item->id) }}"
                                        onclick="return confirm('are you sure?')" class="btn bg-red">delete</a></td>
                            </tr>
                        @empty
                            <p>no data</p>
                        @endforelse

                    </tbody>
                </table>
                {{ $data->links() }}
            </div>
        </div>
    </section>
@endsection
