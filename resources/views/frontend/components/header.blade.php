<header>
    <!-- Begin Header Top Area -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <!-- Begin Header Top Left Area -->
                <div class="col-lg-3 col-md-4">
                    <div class="header-top-left">
                        <ul class="phone-wrap">
                            <li><span>Telephone Enquiry:</span><a href="#">(+123) 123 321 345</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Header Top Left Area End Here -->
                <!-- Begin Header Top Right Area -->
                <div class="col-lg-9 col-md-8">
                    <div class="header-top-right">
                        <ul class="ht-menu">
                            <!-- Begin Setting Area -->
                            <li>
                                <div class="ht-setting-trigger"><span>Setting</span></div>
                                <div class="setting ht-setting">
                                    <ul class="ht-setting-list">
                                        <li><a href="login-register.html">My Account</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="login-register.html">Sign In</a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Setting Area End Here -->
                            <!-- Begin Currency Area -->
                            <li>
                                <span class="currency-selector-wrapper">Currency :</span>
                                <div class="ht-currency-trigger"><span>USD $</span></div>
                                <div class="currency ht-currency">
                                    <ul class="ht-setting-list">
                                        <li><a href="#">EUR €</a></li>
                                        <li class="active"><a href="#">USD $</a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Currency Area End Here -->
                            <!-- Begin Language Area -->
                            <li>
                                <span class="language-selector-wrapper">Language :</span>
                                <div class="ht-language-trigger"><span>English</span></div>
                                <div class="language ht-language">
                                    <ul class="ht-setting-list">
                                        <li class="active"><a href="#"><img src="{{ asset('frontend/images/menu/flag-icon/1.jpg') }}" alt="">English</a></li>
                                        <li><a href="#"><img src="{{ asset('frontend/images/menu/flag-icon/2.jpg') }}" alt="">Français</a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Language Area End Here -->
                        </ul>
                    </div>
                </div>
                <!-- Header Top Right Area End Here -->
            </div>
        </div>
    </div>
    <!-- Header Top Area End Here -->
    <!-- Begin Header Middle Area -->
    <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
        <div class="container">
            <div class="row">
                <!-- Begin Header Logo Area -->
                <div class="col-lg-3">
                    <div class="logo pb-sm-30 pb-xs-30">
                        <a href="index.html">
                            <img src="{{ asset('frontend/images/menu/logo/1.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Header Logo Area End Here -->
                <!-- Begin Header Middle Right Area -->
                <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                    <!-- Begin Header Middle Searchbox Area -->
                    <form action="#" class="hm-searchbox">
                        <select class="nice-select select-search-category">
                            <option value="0">All</option>                         
                            <option value="10">Laptops</option>                     
                        </select>
                        <input type="text" placeholder="Enter your search key ...">
                        <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <!-- Header Middle Searchbox Area End Here -->
                    <!-- Begin Header Middle Right Area -->
                    @include('frontend.mycards')
                    <!-- Header Middle Right Area End Here -->
                </div>
                <!-- Header Middle Right Area End Here -->
            </div>
        </div>
    </div>
    <!-- Header Middle Area End Here -->
    <!-- Begin Header Bottom Area -->
    <div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Begin Header Bottom Menu Area -->
                    <div class="hb-menu">
                        <nav>
                            <ul>
                                <li class="dropdown-holder"><a href="/">Home</a>
                                    <ul class="hb-dropdown">
                                        <li class="active"><a href="index.html">Home One</a></li>
                                        <li><a href="index-2.html">Home Two</a></li>
                                        <li><a href="index-3.html">Home Three</a></li>
                                        <li><a href="index-4.html">Home Four</a></li>
                                    </ul>
                                </li>
                                <li class="megamenu-holder"><a href="shop-left-sidebar.html">Shop</a>
                                    <ul class="megamenu hb-megamenu">
                                        <li><a href="shop-left-sidebar.html">Shop Page Layout</a>
                                            <ul>
                                                <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                                <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                <li><a href="shop-list.html">Shop List</a></li>
                                                <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                                <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="single-product-gallery-left.html">Single Product Style</a>
                                            <ul>
                                                <li><a href="single-product-carousel.html">Single Product Carousel</a></li>
                                                <li><a href="single-product-gallery-left.html">Single Product Gallery Left</a></li>
                                                <li><a href="single-product-gallery-right.html">Single Product Gallery Right</a></li>
                                                <li><a href="single-product-tab-style-top.html">Single Product Tab Style Top</a></li>
                                                <li><a href="single-product-tab-style-left.html">Single Product Tab Style Left</a></li>
                                                <li><a href="single-product-tab-style-right.html">Single Product Tab Style Right</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="single-product.html">Single Products</a>
                                            <ul>
                                                <li><a href="single-product.html">Single Product</a></li>
                                                <li><a href="single-product-sale.html">Single Product Sale</a></li>
                                                <li><a href="single-product-group.html">Single Product Group</a></li>
                                                <li><a href="single-product-normal.html">Single Product Normal</a></li>
                                                <li><a href="single-product-affiliate.html">Single Product Affiliate</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-holder"><a href="blog-left-sidebar.html">Blog</a>
                                    <ul class="hb-dropdown">
                                        <li class="sub-dropdown-holder"><a href="blog-left-sidebar.html">Blog Grid View</a>
                                            <ul class="hb-dropdown hb-sub-dropdown">
                                                <li><a href="blog-2-column.html">Blog 2 Column</a></li>
                                                <li><a href="blog-3-column.html">Blog 3 Column</a></li>
                                                <li><a href="blog-left-sidebar.html">Grid Left Sidebar</a></li>
                                                <li><a href="blog-right-sidebar.html">Grid Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-dropdown-holder"><a href="blog-list-left-sidebar.html">Blog List View</a>
                                            <ul class="hb-dropdown hb-sub-dropdown">
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-list-left-sidebar.html">List Left Sidebar</a></li>
                                                <li><a href="blog-list-right-sidebar.html">List Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-dropdown-holder"><a href="blog-details-left-sidebar.html">Blog Details</a>
                                            <ul class="hb-dropdown hb-sub-dropdown">
                                                <li><a href="blog-details-left-sidebar.html">Left Sidebar</a></li>
                                                <li><a href="blog-details-right-sidebar.html">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-dropdown-holder"><a href="blog-gallery-format.html">Blog Format</a>
                                            <ul class="hb-dropdown hb-sub-dropdown">
                                                <li><a href="blog-audio-format.html">Blog Audio Format</a></li>
                                                <li><a href="blog-video-format.html">Blog Video Format</a></li>
                                                <li><a href="blog-gallery-format.html">Blog Gallery Format</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="megamenu-static-holder"><a href="index.html">Pages</a>
                                    <ul class="megamenu hb-megamenu">
                                        <li><a href="blog-left-sidebar.html">Blog Layouts</a>
                                            <ul>
                                                <li><a href="blog-2-column.html">Blog 2 Column</a></li>
                                                <li><a href="blog-3-column.html">Blog 3 Column</a></li>
                                                <li><a href="blog-left-sidebar.html">Grid Left Sidebar</a></li>
                                                <li><a href="blog-right-sidebar.html">Grid Right Sidebar</a></li>
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-list-left-sidebar.html">List Left Sidebar</a></li>
                                                <li><a href="blog-list-right-sidebar.html">List Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog-details-left-sidebar.html">Blog Details Pages</a>
                                            <ul>
                                                <li><a href="blog-details-left-sidebar.html">Left Sidebar</a></li>
                                                <li><a href="blog-details-right-sidebar.html">Right Sidebar</a></li>
                                                <li><a href="blog-audio-format.html">Blog Audio Format</a></li>
                                                <li><a href="blog-video-format.html">Blog Video Format</a></li>
                                                <li><a href="blog-gallery-format.html">Blog Gallery Format</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index.html">Other Pages</a>
                                            <ul>
                                                <li><a href="login-register.html">My Account</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="compare.html">Compare</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index.html">Other Pages 2</a>
                                            <ul>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="404.html">404 Error</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="shop-left-sidebar.html">Smartwatch</a></li>
                                <li><a href="shop-left-sidebar.html">Accessories</a></li>
                                @if (Route::has('login'))
                                    @auth
                                     <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button class="btn btn-danger" type="submit">Logout</button>
                                        </form>
                                     </li>
                                    @else
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                    @endauth
                                @endif
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Bottom Menu Area End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header Bottom Area End Here -->
    <!-- Begin Mobile Menu Area -->

    <!-- Mobile Menu Area End Here -->
</header>
