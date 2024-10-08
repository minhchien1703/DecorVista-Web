<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/dkoor/dkoor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 10:54:08 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dkoor - Home Decor & Furniture Store Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ mix('resources/images/favicon.png') }}">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,300;1,400;1,700&amp;family=Poppins:wght@400;600&amp;family=Roboto:ital,wght@0,400;0,500;0,700;1,400&amp;display=swap" rel="stylesheet">


    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="{{ mix('resources/css/vendor/bootstrap.min.css') }}">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{ mix('resources/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ mix('resources/css/plugins/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ mix('resources/css/plugins/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ mix('resources/css/plugins/fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ mix('resources/css/plugins/nice-select.css') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ mix('resources/css/style.css') }}">

</head>

<body>
    <div class="wrapper">
        <!-- header -->
        <x-header />

        <!-- main content -->
        <main class="wrapper-main">
            {{ $slot }}
        </main>

        <!-- footer -->
        <x-footer />

        <!--== Scroll Top Button ==-->
        <div class="scroll-to-top"><span class="icon-arrow-up"></span></div>

        <!--== Start Product Quick View Modal ==-->
        <aside class="product-cart-view-modal modal fade" id="action-QuickViewModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="product-quick-view-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"><span>×</span></button>
                            <div class="row row-gutter-0">
                                <div class="col-lg-6">
                                    <div class="single-product-slider">
                                        <div class="single-product-thumb">
                                            <div class="swiper single-product-quick-view-slider">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="thumb-item">
                                                            <img src="assets/images/shop/details/single-product-1.jpg" width="600" height="700" alt="Image-HasTech">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="thumb-item">
                                                            <img src="assets/images/shop/details/single-product-2.jpg" width="600" height="700" alt="Image-HasTech">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="thumb-item">
                                                            <img src="assets/images/shop/details/single-product-3.jpg" width="600" height="700" alt="Image-HasTech">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Add Arrows -->
                                                <div class="swiper-button-next"></div>
                                                <div class="swiper-button-prev"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-product-content">
                                        <h3 class="single-product-title">1. New and sale badge product</h3>
                                        <div class="single-product-price">$110.00 <del>$130.00</del></div>
                                        <ul class="single-product-meta">
                                            <li><span class="label">SKU :</span> <span class="value">1110</span></li>
                                            <li><span class="label">Vendor :</span> <span class="value">Vendor 3</span></li>
                                            <li><span class="label">Type :</span> <span class="value">Type 3</span></li>
                                            <li><span class="label">Availability :</span> <span class="value">11 Left in Stock</span></li>
                                        </ul>
                                        <ul class="single-product-variations">
                                            <li><span class="label">Size :</span>
                                                <div class="value">
                                                    <div class="single-product-variation-size-wrap">
                                                        <div class="single-product-variation-size-item"><input type="radio" name="size" id="size-sq" checked><label for="size-sq">s</label></div>
                                                        <div class="single-product-variation-size-item"><input type="radio" name="size" id="size-mq"><label for="size-mq">m</label></div>
                                                        <div class="single-product-variation-size-item"><input type="radio" name="size" id="size-lq"><label for="size-lq">l</label></div>
                                                        <div class="single-product-variation-size-item"><input type="radio" name="size" id="size-xlq"><label for="size-xlq">xl</label></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><span class="label">Color :</span>
                                                <div class="value">
                                                    <div class="single-product-variation-color-wrap">
                                                        <div class="single-product-variation-color-item"><input type="radio" name="color" id="qcolor-purple" checked><label for="qcolor-purple" style="background-color: purple;">purple</label></div>
                                                        <div class="single-product-variation-color-item"><input type="radio" name="color" id="qcolor-violet"><label for="qcolor-violet" style="background-color: violet;">violet</label></div>
                                                        <div class="single-product-variation-color-item"><input type="radio" name="color" id="qcolor-black"><label for="qcolor-black" style="background-color: black;">black</label></div>
                                                        <div class="single-product-variation-color-item"><input type="radio" name="color" id="qcolor-pink"><label for="qcolor-pink" style="background-color: pink;">pink</label></div>
                                                        <div class="single-product-variation-color-item"><input type="radio" name="color" id="qcolor-orange"><label for="qcolor-orange" style="background-color: orange;">orange</label></div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="single-product-additional-information">
                                            <button class="single-product-info-btn" data-bs-toggle="modal" data-bs-target="product-size-guide"><i class="icon-equalizer"></i> Size Guide</button>
                                            <button class="single-product-info-btn" data-bs-toggle="modal" data-bs-target="product-shipping-policy"><i class="icon-plane"></i> Shipping</button>
                                            <button class="single-product-info-btn" data-bs-toggle="modal" data-bs-target="product-enquiry"><i class="icon-envelope"></i> Ask About This product</button>
                                        </div>
                                        <div class="single-product-actions">
                                            <div class="single-product-actions-item">
                                                <div class="product-quantity-count">
                                                    <button class="dec qty-btn">-</button>
                                                    <input class="product-quantity-box" type="text" name="quantity" value="1">
                                                    <button class="inc qty-btn">+</button>
                                                </div>
                                            </div>
                                            <div class="single-product-actions-item"><button class="btn btn-cart">ADD TO CART</button></div>
                                            <div class="single-product-actions-item"><button class="btn btn-icon "><i class="icon-heart"></i></button></div>
                                            <div class="single-product-actions-item"><button class="btn btn-icon"><i class="icon-refresh"></i></button></div>
                                        </div>
                                        <ul class="single-product-meta">
                                            <li><span class="label">Categories :</span> <span class="value links">
                    <a href="shop.html">Accessories</a>
                    <a href="shop.html">Deal Collections</a>
                    <a href="shop.html">New Products</a>
                    <a href="shop.html">Upsell Products</a>
                  </span></li>
                                            <li><span class="label">Tags :</span> <span class="value links">
                    <a href="shop.html">black</a>
                    <a href="shop.html">fiber</a>
                    <a href="shop.html">leather</a>
                  </span></li>
                                            <li><span class="label">Share :</span> <span class="value social">
                    <a href="#/"><img src="assets/images/icons/social/facebook.png" alt="facebook"></a>
                    <a href="#/"><img src="assets/images/icons/social/twitter.png" alt="twitter"></a>
                    <a href="#/"><img src="assets/images/icons/social/pinterest.png" alt="pinterest"></a>
                  </span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!--== End Product Quick View Modal ==-->

        <!--== Start Product Quick Wishlist Modal ==-->
        <aside class="product-action-modal modal fade" id="action-WishlistModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="product-action-view-content">
                            <div class="d-flex align-items-center">
                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                    <i class="icofont-close"></i>
                                </button>
                                <div class="modal-action-messages">
                                    <i class="fa fa-check-square-o"></i> Added to wishlist successfully!
                                </div>
                            </div>
                            <div class="modal-action-product">
                                <div class="thumb">
                                    <img src="assets/images/shop/1.jpg" alt="Organic Food Juice" width="466" height="320">
                                </div>
                                <h4 class="product-name"><a href="single-product.html">Product with video</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!--== End Product Quick Wishlist Modal ==-->

        <!--== Start Product Quick Add Cart Modal ==-->
        <aside class="product-action-modal modal fade" id="action-CartAddModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="product-action-view-content">
                            <div class="d-flex align-items-center">
                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                    <i class="icofont-close"></i>
                                </button>
                                <div class="modal-action-messages">
                                    <i class="fa fa-check-square-o"></i> Added to cart successfully!
                                </div>
                            </div>
                            <div class="modal-action-product">
                                <div class="thumb">
                                    <img src="assets/images/shop/1.jpg" alt="Organic Food Juice" width="466" height="320">
                                </div>
                                <h4 class="product-name"><a href="single-product.html">Product with video</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!--== End Product Quick Add Cart Modal ==-->

        <!--== Start Product Quick Add Cart Modal ==-->
        <aside class="product-action-modal modal fade" id="action-CompareModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="product-action-view-content">
                            <div class="d-flex align-items-center">
                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                    <i class="icofont-close"></i>
                                </button>
                                <div class="modal-action-messages">
                                    <i class="fa fa-check-square-o"></i> Added to compare successfully!
                                </div>
                            </div>
                            <div class="modal-action-product">
                                <div class="thumb">
                                    <img src="assets/images/shop/1.jpg" alt="Organic Food Juice" width="466" height="320">
                                </div>
                                <h4 class="product-name"><a href="single-product.html">Product with video</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!--== End Product Quick Add Cart Modal ==-->

        <!--== Start Sidebar Cart Menu ==-->
        <aside class="sidebar-cart-modal offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithCartSidebar">
            <div class="offcanvas-header">
                <button type="button" class="btn-close cart-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="sidebar-cart-inner offcanvas-body">
                <div class="sidebar-cart-content">
                    <div class="sidebar-cart-all">
                        <div class="cart-header">
                            <h3>Shopping Cart</h3>
                            <div class="close-style-wrap">
                                <button type="button" class="btn-close cart-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="icon-close"></i></button>
                            </div>
                        </div>
                        <div class="cart-content cart-content-padding">
                            <ul>
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="shop-single-product.html"><img src="assets/images/shop/details/single-product-thumb-1.jpg" alt="Image" width="70" height="82"></a>
                                    </div>
                                    <div class="cart-title">
                                        <h4><a href="shop-single-product.html">Product with video</a></h4>
                                        <span> 1 × <span class="price"> $12.00 </span></span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#/"><i class="pe-7s-trash icons"></i></a>
                                    </div>
                                </li>
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="shop-single-product.html"><img src="assets/images/shop/details/single-product-thumb-2.jpg" alt="Image" width="70" height="82"></a>
                                    </div>
                                    <div class="cart-title">
                                        <h4><a href="shop-single-product.html">Product with large title</a></h4>
                                        <span> 1 × <span class="price"> $59.90 </span></span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#/"><i class="pe-7s-trash icons"></i></a>
                                    </div>
                                </li>
                            </ul>
                            <div class="cart-total">
                                <h4>Subtotal: <span>$71.90</span></h4>
                            </div>
                            <div class="cart-checkout-btn">
                                <a class="cart-btn" href="/shop-cart">view cart</a>
                                <a class="checkout-btn" href="/checkout">checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!--== End Sidebar Cart Menu ==-->

        <!--== Start Aside Search Menu ==-->
        <aside class="aside-search-box-wrapper offcanvas offcanvas-top" data-bs-scroll="true" tabindex="-1" id="AsideOffcanvasSearch">
            <div class="offcanvas-header">
                <h5 class="d-none" id="offcanvasTopLabel">Aside Search</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="icofont-close-line"></i></button>
            </div>
            <div class="offcanvas-body">
                <div class="container pt--0 pb--0">
                    <div class="search-box-form-wrap">
                        <div class="search-note">
                            <p>Start typing and press Enter to search</p>
                        </div>
                        <form action="#" method="post">
                            <div class="search-form position-relative">
                                <label for="search-input3" class="visually-hidden">Search</label>
                                <input id="search-input3" type="search" class="form-control" placeholder="Search entire store…">
                                <button class="search-button" type="button"><i class="icofont-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </aside>
        <!--== End Aside Search Menu ==-->

        <!--== Start Side Menu ==-->
        <aside class="aside-side-menu-wrapper off-canvas-area offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions">
            <div class="offcanvas-header" data-bs-dismiss="offcanvas">
                <button type="button" class="btn-close"><i class="icon icon-close"></i></button>
            </div>
            <div class="offcanvas-body">
                <div class="aside-search-form">
                    <form action="#" method="post">
                        <input id="search-input2" type="search" class="form-control" placeholder="Search our store">
                        <button class="search-button" type="button"><i class="icon-magnifier"></i></button>
                    </form>
                </div>
                <!-- Start Mobile Menu Wrapper -->
                <div class="res-mobile-menu">
                    <nav id="offcanvasNav" class="offcanvas-menu">
                        <ul>
                            <li><a href="javascript:void(0)">Home</a>
                                <ul>
                                    <li><a href="index.html">Home One</a></li>
                                    <li><a href="index-two.html">Home Two</a></li>
                                    <li><a href="index-three.html">Home Three</a></li>
                                    <li><a href="index-four.html">Home Four</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Shop</a>
                                <ul>
                                    <li><a href="javascript:void(0)">Shop Layout</a>
                                        <ul>
                                            <li><a href="shop-three-columns.html">Shop 3 Column</a></li>
                                            <li><a href="shop-four-columns.html">Shop 4 Column</a></li>
                                            <li><a href="shop.html">Shop Left Sidebar</a></li>
                                            <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0)">Single Product</a>
                                        <ul>
                                            <li><a href="shop-single-product.html">Single Product Normal</a></li>
                                            <li><a href="shop-single-product-sticky-content.html">Product Sticky Content</a></li>
                                            <li><a href="shop-single-product-thumbnail-right.html">Product Thumbnail Right</a></li>
                                            <li><a href="shop-single-product-gallery.html">Single Product Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0)">Others Pages</a>
                                        <ul>
                                            <li><a href="shop-cart.html">Shopping Cart</a></li>
                                            <li><a href="shop-checkout.html">Checkout</a></li>
                                            <li><a href="shop-wishlist.html">Wishlist</a></li>
                                            <li><a href="shop-compare.html">Compare</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Pages</a>
                                <ul>
                                    <li><a href="about-us.html">About</a></li>
                                    <li><a href="account.html">Account</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="page-not-found.html">Page Not Found</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog Grid</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                    <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                    <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- End Mobile Menu Wrapper -->

                <nav id="offcanvasNav2" class="offcanvas-menu offcanvas-menu-two">
                    <ul>
                        <li><a href="javascript:void(0)">Currency</a>
                            <ul>
                                <li><a href="javascript:void(0)">USD - US Dollar</a></li>
                                <li><a href="javascript:void(0)">EUR - Euro</a></li>
                                <li><a href="javascript:void(0)">GBP - British Pound</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Account</a>
                            <ul>
                                <li><a href="login-register.html">Login</a></li>
                                <li><a href="login-register.html">Register</a></li>
                                <li><a href="account.html">My Account</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>

            </div>
        </aside>
        <!--== Start Side Menu ==-->

    </div>


    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="{{ mix('resources/js/vendor/modernizr-3.11.7.min.js') }}"></script>
    <script src="{{ mix('resources/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ mix('resources/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
    <script src="{{ mix('resources/js/vendor/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ mix('resources/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ mix('resources/js/plugins/fancybox.min.js') }}"></script>
    <script src="{{ mix('resources/js/plugins/jquery.nice-select.min.js') }}"></script>
    <script src="{{ mix('resources/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ mix('resources/js/plugins/jquery.zoom.min.js') }}"></script>
    <script src="{{ mix('resources/js/plugins/jquery.sticky-sidebar.min.js') }}"></script>

    <!-- Custom Main JS -->
    <script src="{{ mix('resources/js/main.js') }}"></script>

</body>


<!-- Mirrored from htmldemo.net/dkoor/dkoor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 10:54:09 GMT -->

</html>