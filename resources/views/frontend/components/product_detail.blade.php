@extends('frontend.components.app')
@section('content')
    <div class="content-wraper">
        <div class="container">
            <div class="row single-product-area">
                <div class="col-lg-5 col-md-6">
                    <!-- Product Details Left -->
                    <div class="product-details-left">
                        <img src="{{ asset('product/'.$product->image) }}"  alt="">
                    </div>
                    <!--// Product Details Left -->
                </div>

                <div class="col-lg-7 col-md-6">
                    <div class="product-details-view-content sp-normal-content pt-60">
                        <div class="product-info">
                            <h2>{{ $product->title }}</h2>
                            <small class="product-details-ref">Catagory: {{ $product->catagory }}</small>
                            <div class="price-box">
                                @if ($product->discount_price != null)
                                Discount price <span class="new-price" style="color: #222" >
                                       $ {{ $product->discount_price }}
                                   </span>
                                   <div class="price-box">
                                       Old price: <span class="new-price" style="text-decoration: line-through">$ {{ $product->price }}</span>
                                   </div>
                                   @else
                                   <div class="price-box">
                                    <span class="new-price">Price: $ {{ $product->price }}</span>
                                   </div>
                                @endif
                            </div>
                            <div class="product-desc">
                                <p>
                                    <span>
                                        {{ $product->description }}
                                    </span>
                                </p>
                            </div>
                            <div class="single-add-to-cart">
                                <form action="{{ url('add_cart',$product->id) }}" method="POST" class="cart-quantity">
                                    @csrf
                                    {{-- @method('POST') --}}
                                    <div class="quantity">
                                        <label>Availble quantity</label>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" min="1" value="1" name="quantity" type="text">
                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div><div class="inc qtybutton"><i class="fa fa-angle-up"></i></div></div>
                                    </div>
                                    <button class="add-to-cart" type="submit">Add to cart</button>
                                </form>
                            </div>
                            <div class="product-additional-info">
                                <div class="product-social-sharing">
                                    <ul>
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a>
                                        </li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a>
                                        </li>
                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google
                                                +</a></li>
                                        <li class="instagram"><a href="#"><i
                                                    class="fa fa-instagram"></i>Instagram</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
