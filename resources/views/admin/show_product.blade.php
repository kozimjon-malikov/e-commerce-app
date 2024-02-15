@extends('admin.layouts.app')
@section('content')
    <section class="content-header">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">All products</h3>
            </div>
        </div>
        <div class="col-md-12">
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Title</th>
                            <th>
                                description    
                            </th>
                            <th>
                                image
                            </th>
                            <th>
                                catagory
                            </th>
                            <th>
                                quantity
                            </th>
                            <th>
                                price
                            </th>
                            <th>
                                discount_price
                            </th>
                            <th>Actions</th>
                        </tr>
                        @forelse ($products as $product)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->description }}</td>
                                <td><img src="{{ asset('product/'.$product->image) }}" width="160px" alt=""></td>
                                <td>{{ $product->catagory }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->discount_price }}</td>
                                <td>
                                    <a href="{{ url('update_product',$product->id) }}" class="btn bg-blue">Edit</a>
                                </td>
                                <td>
                                    <a onclick="return confirm('are you sure ?')" href="{{ url('delete_product',$product->id) }}" class="btn bg-red">Delete</a>
                                </td>

                            </tr>
                        @empty
                            <p>no data</p>
                        @endforelse

                    </tbody>
                </table>

            </div>
        </div>
    </section>
@endsection
