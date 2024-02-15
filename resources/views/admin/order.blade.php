@extends('admin.layouts.app')
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">All Orders</h3>
        </div>
    </div>
    <div class="box-tools">
        <form action="{{ url('table_search') }}" method="GET">
            @csrf
            <div class="input-group input-group-sm " style="width: 250px;margin:15px 25px">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-12">
        <div class="box-body table">
            <table class="table table-bordered">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>User_id</th>
                    <th>Title</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>product_id</th>
                    <th>payment_status</th>
                    <th>delivery_status</th>
                    <th>Delivered</th>
                    <th>PDF print</th>
                    <th>Send Email</th>
                </thead>
                <tbody>
                    @forelse ($orders as $order)
                        <tr>
                            <td>{{ ($orders->currentpage() - 1) * $orders->perpage() + $loop->index + 1 }}</td>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->email }}</td>
                            <td>{{ $order->phone }}</td>
                            <td>{{ $order->address }}</td>
                            <td><img src="{{ asset('product/' . $order->image) }}" width="80px" alt=""></td>
                            <td>{{ $order->product_title }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>{{ $order->price }}</td>
                            <td>{{ $order->product_id }}</td>
                            <td class="">{{ $order->payment_status }}</td>
                            <td class="badge bg-red" style="margin: 10px">{{ $order->delivery_status }}</td>
                            @if ($order->delivery_status == 'processing')
                                <td>
                                    <a href="{{ url('delivered', $order->id) }}" class="btn btn-success">Delivered</a>
                                </td>
                            @else
                                <td>
                                    Delivered
                                </td>
                            @endif
                            <td>
                                <a class="btn bg-maroon btn-flat margin" href="{{ url('print_pdf', $order->id) }}">Download
                                    (PDF/Print)</a>
                            </td>
                            <td>
                                <a href="{{ url('send_email', $order->id) }}" class="btn bg-purple margin">Send Email</a>
                            </td>
                        </tr>
                    @empty
                        <p>No orders</p>
                    @endforelse
                </tbody>
                {{ $orders->links() }}
            </table>
        </div>
    </div>
@endsection
