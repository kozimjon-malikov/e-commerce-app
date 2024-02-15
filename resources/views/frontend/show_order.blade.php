@extends('frontend.components.app')
@section('content')
<div style="display: flex;justify-content:center">
    <div class="col-10">
        <div class="table-content table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="li-product-remove">Name</th>
                        <th class="li-product-thumbnail">Quantity</th>
                        <th class="cart-product-name">Price</th>
                        <th class="li-product-price">Payment_status</th>
                        <th class="li-product-stock-status">Delivery_status</th>
                        <th class="li-product-add-cart">Image</th>
                        <th class="li-product-add-cart">Cancel</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order as $order)
                        <tr>
                            <td>
                                {{ $order->product_title }}
                            </td>
                            <td>
                                {{ $order->quantity }}
                            </td>
                            <td>
                                {{ $order->price }}
                            </td>
                            <td>
                                {{ $order->payment_status }}
                            </td>
                            <td>
                                {{ $order->delivery_status }}
                            </td>
                            <td>
                                <img src="{{ asset('product/'.$order->image) }}" alt="order img" width="200px">
                            </td>
                            <td>
                                @if ($order->delivery_status=='processing')
                                <a href="{{ url('cancel_order',$order->id) }}" class="btn btn-danger">Cancel Order</a>
                            @else
                                <p class="text-blue">Not Allowed</p>
                            @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
</div>
@endsection