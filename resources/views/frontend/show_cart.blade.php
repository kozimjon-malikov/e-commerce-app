@extends('frontend.components.app')
@section('content')
    <div class="content-wraper">
        <div class="container">
            <div class="row single-product-area">
                <div class="col-md-12">
                    @if (session('msg'))
                        <h2 class="alert alert-success p-2 m-2">
                            {{ session('msg') }}
                        </h2>
                    @endif
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="product-details-view-content sp-group-content pt-60">
                        <div class="product-info">
                            <div class="rating-box pt-20">
                                <h2>Name of user: <span style="color: red">{{ $user_info->name }}</span></h2>
                            </div>
                            <div class="choose-group-product">
                                <div class="cart-table table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <th>
                                                #
                                            </th>
                                            <th>
                                                Title
                                            </th>
                                            <th>
                                                Price
                                            </th>
                                            <th>
                                                Quantity
                                            </th>
                                            <th>
                                                Image
                                            </th>
                                            <th>
                                                User
                                            </th>
                                            <th>Actions</th>
                                        </thead>

                                        <tbody>
                                            <?php $totalprice = 0; ?>
                                            @forelse ($cart as $cart)
                                                <tr>
                                                    <td>
                                                        {{ $loop->index + 1 }}
                                                    </td>
                                                    <td>
                                                        {{ $cart->product_title }}
                                                    </td>
                                                    <td>
                                                        {{ $cart->price }}
                                                    </td>
                                                    <td>
                                                        {{ $cart->quantity }}
                                                    </td>
                                                    <td>
                                                        <img src="{{ asset('product/' . $cart->image) }}" width="130px"
                                                            alt="">
                                                    </td>
                                                    <td>
                                                        {{ $cart->user_id }}
                                                    </td>
                                                    <th>
                                                        <a data-confirm-delete="true" href="{{ url('delete_cart_item', $cart->id) }}"
                                                            onclick="return confirm('are you sure ?')"
                                                            class="btn btn-danger">Delete</a>
                                                    </th>
                                                </tr>
                                                <?php $totalprice = $totalprice + $cart->price; ?>
                                            @empty
                                            @endforelse

                                        </tbody>
                                    </table>
                                    <div class="price-box pt-20">
                                        <h2>Totalprice: <span class="new-price new-price-2">{{ $totalprice }}</span></h2>

                                    </div>
                                </div>
                            </div>

                            <div class="footer-shipping   pt-60 pb-25">
                                <div class="row">
                                    <!-- Begin Li's Shipping Inner Box Area -->
                                    <a href="{{ url('cart_order') }}" class="btn btn-outline-light mx-2" style="border: 2px solid crimson">
                                        <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                                            <div class="li-shipping-inner-box">
                                                <div class="shipping-icon">
                                                    <img src="{{ asset('frontend/images/shipping-icon/1.png') }}"
                                                        alt="Shipping Icon">
                                                </div>
                                                <div class="shipping-text">
                                                    <h2>Cash on Delivery</h2>
                                                    <p>And free returns. See checkout for delivery dates.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Li's Shipping Inner Box Area End Here -->
                                    <!-- Begin Li's Shipping Inner Box Area -->
                                    <a href="{{ url('stripe',$totalprice) }}" class="btn btn-outline-light" style="border: 2px solid crimson">
                                        <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                                            <div class="li-shipping-inner-box">
                                                <div class="shipping-icon">
                                                    <img src="{{ asset('frontend/images/shipping-icon/2.png') }}"
                                                        alt="Shipping Icon">
                                                </div>
                                                <div class="shipping-text">
                                                    <h2>Pay using Card</h2>
                                                    <p>Pay with the world's most popular and secure payment methods.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
