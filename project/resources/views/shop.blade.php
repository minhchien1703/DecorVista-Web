<x-layout>
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area">
        <div class="page-header-content bg-img" data-bg-img="assets/images/photos/bg1.jpg">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <div class="product-area section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-0 order-lg-1">
                    <!--== Start Product Top Bar Area Wrapper ==-->
                    <div class="shop-top-bar">

                        <div class="shop-top-bar-item">
                            <label for="SortBy">Sort by :</label>
                            <select class="select-shoing" name="SortBy" id="SortBy">
                                <option value="title-ascending">Alphabetically, A-Z</option>
                                <option value="manual">Featured</option>
                                <option value="best-selling">Best Selling</option>
                                <option value="title-descending">Alphabetically, Z-A</option>
                                <option value="price-ascending">Price, low to high</option>
                                <option value="price-descending">Price, high to low</option>
                                <option value="created-descending">Date, new to old</option>
                                <option value="created-ascending">Date, old to new</option>
                            </select>
                        </div>

                        <div class="shop-top-bar-item">
                            <p>Showing 1 - 12 of 25 result</p>
                        </div>

                        <div class="shop-top-bar-item">
                            <label for="paginateBy">Show :</label>
                            <select class="select-shoing-count" name="paginateBy" id="paginateBy">
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12" selected>12</option>
                                <option value="13">13</option>
                            </select>
                        </div>

                        <div class="shop-top-bar-item">
                            <div class="nav list-grid-toggle">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#column-three"><i
                                        class="icon-grid icons"></i></button>
                                <button class="nav-link mr-0" data-bs-toggle="tab" data-bs-target="#nav-list"><i
                                        class="icon-menu icons"></i></button>
                            </div>
                        </div>

                    </div>

                    <!--== End Product Top Bar Area Wrapper ==-->
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="column-three">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6 col-xl-4 mb-4">
                                    <!--== Start Product Item ==-->
                                    <div class="product-item">
                                        <div class="product-item-thumb-wrap">
                                            <a class="product-item-thumb" href="shop-single-product.html">
                                                <img src="assets/images/shop/1.jpg" width="268" height="313"
                                                    alt="Image-HasTech">
                                            </a>
                                            <span class="label">Sale</span>
                                            <span class="label label-two">-15%</span>
                                            <span class="label label-new">New</span>
                                            <div class="product-item-action">
                                                <button type="button" class="product-action-btn action-btn-quick-view"
                                                    data-tooltip-text="Quick View" data-bs-toggle="modal"
                                                    data-bs-target="#action-QuickViewModal">
                                                    <i class="icon-magnifier"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-wishlist"
                                                    data-tooltip-text="Add to wishlist" data-bs-toggle="modal"
                                                    data-bs-target="#action-WishlistModal">
                                                    <i class="icon-heart"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-compare"
                                                    data-tooltip-text="Compare" data-bs-toggle="modal"
                                                    data-bs-target="#action-CompareModal">
                                                    <i class="icon-refresh"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-cart"
                                                    data-tooltip-text="Add to cart" data-bs-toggle="modal"
                                                    data-bs-target="#action-CartAddModal">
                                                    <i class="icon-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-item-info">
                                            <h5 class="product-item-title"><a href="shop-single-product.html">1.
                                                    New and sale badge product</a></h5>
                                            <div class="product-item-price"><span class="price-old">$130.00</span>
                                                $110.00</div>
                                            <div class="product-item-review-icon">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Product Item ==-->
                                </div>
                                <div class="col-sm-6 col-lg-6 col-xl-4 mb-4">
                                    <!--== Start Product Item ==-->
                                    <div class="product-item">
                                        <div class="product-item-thumb-wrap">
                                            <div class="tab-content product-item-tab-content"
                                                id="productItem1-tabContent">
                                                <div class="tab-pane fade show active" id="product-item1"
                                                    role="tabpanel" aria-labelledby="product-item1-tab">
                                                    <a class="product-item-thumb" href="shop-single-product.html">
                                                        <img src="assets/images/shop/2.jpg" width="268" height="313"
                                                            alt="Image-HasTech">
                                                    </a>
                                                </div>
                                                <div class="tab-pane fade" id="product-item2" role="tabpanel"
                                                    aria-labelledby="product-item2-tab">
                                                    <a class="product-item-thumb" href="shop-single-product.html">
                                                        <img src="assets/images/shop/3.jpg" width="268" height="313"
                                                            alt="Image-HasTech">
                                                    </a>
                                                </div>
                                                <div class="tab-pane fade" id="product-item3" role="tabpanel"
                                                    aria-labelledby="product-item3-tab">
                                                    <a class="product-item-thumb" href="shop-single-product.html">
                                                        <img src="assets/images/shop/4.jpg" width="268" height="313"
                                                            alt="Image-HasTech">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="nav nav-tabs product-item-tab-btn" id="productItem1-tab"
                                                role="tablist">
                                                <button class="nav-link active" id="product-item1-tab"
                                                    data-bs-toggle="tab" data-bs-target="#product-item1" type="button"
                                                    role="tab" aria-controls="product-item1" aria-selected="true"
                                                    data-bg-img="assets/images/shop/2.jpg"></button>
                                                <button class="nav-link" id="product-item2-tab" data-bs-toggle="tab"
                                                    data-bs-target="#product-item2" type="button" role="tab"
                                                    aria-controls="product-item2" aria-selected="false"
                                                    data-bg-img="assets/images/shop/3.jpg"></button>
                                                <button class="nav-link" id="product-item3-tab" data-bs-toggle="tab"
                                                    data-bs-target="#product-item3" type="button" role="tab"
                                                    aria-controls="product-item3" aria-selected="false"
                                                    data-bg-img="assets/images/shop/4.jpg"></button>
                                            </div>
                                            <span class="label">Sale</span>
                                            <span class="label label-two">-10%</span>
                                            <div class="product-item-action">
                                                <button type="button" class="product-action-btn action-btn-quick-view"
                                                    data-tooltip-text="Quick View" data-bs-toggle="modal"
                                                    data-bs-target="#action-QuickViewModal">
                                                    <i class="icon-magnifier"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-wishlist"
                                                    data-tooltip-text="Add to wishlist" data-bs-toggle="modal"
                                                    data-bs-target="#action-WishlistModal">
                                                    <i class="icon-heart"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-compare"
                                                    data-tooltip-text="Compare" data-bs-toggle="modal"
                                                    data-bs-target="#action-CompareModal">
                                                    <i class="icon-refresh"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-cart"
                                                    data-tooltip-text="Add to cart" data-bs-toggle="modal"
                                                    data-bs-target="#action-CartAddModal">
                                                    <i class="icon-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-item-info">
                                            <h5 class="product-item-title"><a href="shop-single-product.html">10. This
                                                    is the large
                                                    title</a></h5>
                                            <div class="product-item-price"><span class="price-old">$21.00</span> $19.00
                                            </div>
                                            <div class="product-item-review-icon">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Product Item ==-->
                                </div>
                                <div class="col-sm-6 col-lg-6 col-xl-4 mb-4">
                                    <!--== Start Product Item ==-->
                                    <div class="product-item">
                                        <div class="product-item-thumb-wrap">
                                            <div class="tab-content product-item-tab-content"
                                                id="productItem2-tabContent">
                                                <div class="tab-pane fade show active" id="product-item4"
                                                    role="tabpanel" aria-labelledby="product-item4-tab">
                                                    <a class="product-item-thumb" href="shop-single-product.html">
                                                        <img src="assets/images/shop/3.jpg" width="268" height="313"
                                                            alt="Image-HasTech">
                                                    </a>
                                                </div>
                                                <div class="tab-pane fade" id="product-item5" role="tabpanel"
                                                    aria-labelledby="product-item5-tab">
                                                    <a class="product-item-thumb" href="shop-single-product.html">
                                                        <img src="assets/images/shop/4.jpg" width="268" height="313"
                                                            alt="Image-HasTech">
                                                    </a>
                                                </div>
                                                <div class="tab-pane fade" id="product-item6" role="tabpanel"
                                                    aria-labelledby="product-item6-tab">
                                                    <a class="product-item-thumb" href="shop-single-product.html">
                                                        <img src="assets/images/shop/5.jpg" width="268" height="313"
                                                            alt="Image-HasTech">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="nav nav-tabs product-item-tab-btn" id="productItem2-tab"
                                                role="tablist">
                                                <button class="nav-link active" id="product-item4-tab"
                                                    data-bs-toggle="tab" data-bs-target="#product-item4" type="button"
                                                    role="tab" aria-controls="product-item4" aria-selected="true"
                                                    data-bg-img="assets/images/shop/3.jpg"></button>
                                                <button class="nav-link" id="product-item5-tab" data-bs-toggle="tab"
                                                    data-bs-target="#product-item5" type="button" role="tab"
                                                    aria-controls="product-item5" aria-selected="false"
                                                    data-bg-img="assets/images/shop/4.jpg"></button>
                                                <button class="nav-link" id="product-item6-tab" data-bs-toggle="tab"
                                                    data-bs-target="#product-item6" type="button" role="tab"
                                                    aria-controls="product-item6" aria-selected="false"
                                                    data-bg-img="assets/images/shop/5.jpg"></button>
                                            </div>
                                            <div class="product-item-action">
                                                <button type="button" class="product-action-btn action-btn-quick-view"
                                                    data-tooltip-text="Quick View" data-bs-toggle="modal"
                                                    data-bs-target="#action-QuickViewModal">
                                                    <i class="icon-magnifier"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-wishlist"
                                                    data-tooltip-text="Add to wishlist" data-bs-toggle="modal"
                                                    data-bs-target="#action-WishlistModal">
                                                    <i class="icon-heart"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-compare"
                                                    data-tooltip-text="Compare" data-bs-toggle="modal"
                                                    data-bs-target="#action-CompareModal">
                                                    <i class="icon-refresh"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-cart"
                                                    data-tooltip-text="Add to cart" data-bs-toggle="modal"
                                                    data-bs-target="#action-CartAddModal">
                                                    <i class="icon-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-item-info">
                                            <h5 class="product-item-title"><a href="shop-single-product.html">11.
                                                    Product with video</a>
                                            </h5>
                                            <div class="product-item-price"> $39.00</div>
                                            <div class="product-item-review-icon">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Product Item ==-->
                                </div>
                                <div class="col-sm-6 col-lg-6 col-xl-4 mb-4">
                                    <!--== Start Product Item ==-->
                                    <div class="product-item">
                                        <div class="product-item-thumb-wrap">
                                            <div class="tab-content product-item-tab-content"
                                                id="productItem3-tabContent">
                                                <div class="tab-pane fade show active" id="product-item7"
                                                    role="tabpanel" aria-labelledby="product-item7-tab">
                                                    <a class="product-item-thumb" href="shop-single-product.html">
                                                        <img src="assets/images/shop/4.jpg" width="268" height="313"
                                                            alt="Image-HasTech">
                                                    </a>
                                                </div>
                                                <div class="tab-pane fade" id="product-item8" role="tabpanel"
                                                    aria-labelledby="product-item8-tab">
                                                    <a class="product-item-thumb" href="shop-single-product.html">
                                                        <img src="assets/images/shop/5.jpg" width="268" height="313"
                                                            alt="Image-HasTech">
                                                    </a>
                                                </div>
                                                <div class="tab-pane fade" id="product-item9" role="tabpanel"
                                                    aria-labelledby="product-item9-tab">
                                                    <a class="product-item-thumb" href="shop-single-product.html">
                                                        <img src="assets/images/shop/6.jpg" width="268" height="313"
                                                            alt="Image-HasTech">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="nav nav-tabs product-item-tab-btn" id="productItem3-tab"
                                                role="tablist">
                                                <button class="nav-link active" id="product-item7-tab"
                                                    data-bs-toggle="tab" data-bs-target="#product-item7" type="button"
                                                    role="tab" aria-controls="product-item7" aria-selected="true"
                                                    data-bg-img="assets/images/shop/4.jpg"></button>
                                                <button class="nav-link" id="product-item8-tab" data-bs-toggle="tab"
                                                    data-bs-target="#product-item8" type="button" role="tab"
                                                    aria-controls="product-item8" aria-selected="false"
                                                    data-bg-img="assets/images/shop/5.jpg"></button>
                                                <button class="nav-link" id="product-item9-tab" data-bs-toggle="tab"
                                                    data-bs-target="#product-item9" type="button" role="tab"
                                                    aria-controls="product-item9" aria-selected="false"
                                                    data-bg-img="assets/images/shop/6.jpg"></button>
                                            </div>
                                            <span class="label">Sale</span>
                                            <span class="label label-two">-11%</span>
                                            <div class="product-item-action">
                                                <button type="button" class="product-action-btn action-btn-quick-view"
                                                    data-tooltip-text="Quick View" data-bs-toggle="modal"
                                                    data-bs-target="#action-QuickViewModal">
                                                    <i class="icon-magnifier"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-wishlist"
                                                    data-tooltip-text="Add to wishlist" data-bs-toggle="modal"
                                                    data-bs-target="#action-WishlistModal">
                                                    <i class="icon-heart"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-compare"
                                                    data-tooltip-text="Compare" data-bs-toggle="modal"
                                                    data-bs-target="#action-CompareModal">
                                                    <i class="icon-refresh"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-cart"
                                                    data-tooltip-text="Add to cart" data-bs-toggle="modal"
                                                    data-bs-target="#action-CartAddModal">
                                                    <i class="icon-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-item-info">
                                            <h5 class="product-item-title"><a href="shop-single-product.html">10. This
                                                    is the large
                                                    title</a></h5>
                                            <div class="product-item-price"><span class="price-old">$21.00</span> $19.00
                                            </div>
                                            <div class="product-item-review-icon">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Product Item ==-->
                                </div>
                                <div class="col-sm-6 col-lg-6 col-xl-4 mb-4">
                                    <!--== Start Product Item ==-->
                                    <div class="product-item">
                                        <div class="product-item-thumb-wrap">
                                            <a class="product-item-thumb" href="shop-single-product.html">
                                                <img src="assets/images/shop/5.jpg" width="268" height="313"
                                                    alt="Image-HasTech">
                                            </a>
                                            <span class="label label-new">New</span>
                                            <div class="product-item-action">
                                                <button type="button" class="product-action-btn action-btn-quick-view"
                                                    data-tooltip-text="Quick View" data-bs-toggle="modal"
                                                    data-bs-target="#action-QuickViewModal">
                                                    <i class="icon-magnifier"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-wishlist"
                                                    data-tooltip-text="Add to wishlist" data-bs-toggle="modal"
                                                    data-bs-target="#action-WishlistModal">
                                                    <i class="icon-heart"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-compare"
                                                    data-tooltip-text="Compare" data-bs-toggle="modal"
                                                    data-bs-target="#action-CompareModal">
                                                    <i class="icon-refresh"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-cart"
                                                    data-tooltip-text="Add to cart" data-bs-toggle="modal"
                                                    data-bs-target="#action-CartAddModal">
                                                    <i class="icon-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-item-info">
                                            <h5 class="product-item-title"><a href="shop-single-product.html">2.
                                                    New badge product</a></h5>
                                            <div class="product-item-price">$80.00</div>
                                            <div class="product-item-review-icon">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Product Item ==-->
                                </div>
                                <div class="col-sm-6 col-lg-6 col-xl-4 mb-4">
                                    <!--== Start Product Item ==-->
                                    <div class="product-item">
                                        <div class="product-item-thumb-wrap">
                                            <a class="product-item-thumb" href="shop-single-product.html">
                                                <img src="assets/images/shop/6.jpg" width="268" height="313"
                                                    alt="Image-HasTech">
                                            </a>
                                            <span class="label">Sale</span>
                                            <span class="label label-two">-18%</span>
                                            <div class="product-item-action">
                                                <button type="button" class="product-action-btn action-btn-quick-view"
                                                    data-tooltip-text="Quick View" data-bs-toggle="modal"
                                                    data-bs-target="#action-QuickViewModal">
                                                    <i class="icon-magnifier"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-wishlist"
                                                    data-tooltip-text="Add to wishlist" data-bs-toggle="modal"
                                                    data-bs-target="#action-WishlistModal">
                                                    <i class="icon-heart"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-compare"
                                                    data-tooltip-text="Compare" data-bs-toggle="modal"
                                                    data-bs-target="#action-CompareModal">
                                                    <i class="icon-refresh"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-cart"
                                                    data-tooltip-text="Add to cart" data-bs-toggle="modal"
                                                    data-bs-target="#action-CartAddModal">
                                                    <i class="icon-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-item-info">
                                            <h5 class="product-item-title"><a href="shop-single-product.html">3.
                                                    Variable product</a></h5>
                                            <div class="product-item-price"><span class="price-old">$85.00</span> $70.00
                                            </div>
                                            <div class="product-item-review-icon">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Product Item ==-->
                                </div>
                                <div class="col-sm-6 col-lg-6 col-xl-4 mb-4">
                                    <!--== Start Product Item ==-->
                                    <div class="product-item">
                                        <div class="product-item-thumb-wrap">
                                            <a class="product-item-thumb" href="shop-single-product.html">
                                                <img src="assets/images/shop/7.jpg" width="268" height="313"
                                                    alt="Image-HasTech">
                                            </a>
                                            <span class="label">Soldout</span>
                                            <div class="product-item-action">
                                                <button type="button" class="product-action-btn action-btn-quick-view"
                                                    data-tooltip-text="Quick View" data-bs-toggle="modal"
                                                    data-bs-target="#action-QuickViewModal">
                                                    <i class="icon-magnifier"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-wishlist"
                                                    data-tooltip-text="Add to wishlist" data-bs-toggle="modal"
                                                    data-bs-target="#action-WishlistModal">
                                                    <i class="icon-heart"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-compare"
                                                    data-tooltip-text="Compare" data-bs-toggle="modal"
                                                    data-bs-target="#action-CompareModal">
                                                    <i class="icon-refresh"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-cart"
                                                    data-tooltip-text="Add to cart" data-bs-toggle="modal"
                                                    data-bs-target="#action-CartAddModal">
                                                    <i class="icon-bag"></i>
                                                </button>
                                            </div>
                                            <div class="countdown1" data-countdown="2025/01/05"></div>
                                        </div>
                                        <div class="product-item-info">
                                            <h5 class="product-item-title"><a href="shop-single-product.html">4.
                                                    Soldout product</a></h5>
                                            <div class="product-item-price"><span class="price-old">$29.00</span> $19.00
                                            </div>
                                            <div class="product-item-review-icon">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Product Item ==-->
                                </div>
                                <div class="col-sm-6 col-lg-6 col-xl-4 mb-4">
                                    <!--== Start Product Item ==-->
                                    <div class="product-item">
                                        <div class="product-item-thumb-wrap">
                                            <a class="product-item-thumb" href="shop-single-product.html">
                                                <img src="assets/images/shop/8.jpg" width="268" height="313"
                                                    alt="Image-HasTech">
                                            </a>
                                            <div class="product-item-action">
                                                <button type="button" class="product-action-btn action-btn-quick-view"
                                                    data-tooltip-text="Quick View" data-bs-toggle="modal"
                                                    data-bs-target="#action-QuickViewModal">
                                                    <i class="icon-magnifier"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-wishlist"
                                                    data-tooltip-text="Add to wishlist" data-bs-toggle="modal"
                                                    data-bs-target="#action-WishlistModal">
                                                    <i class="icon-heart"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-compare"
                                                    data-tooltip-text="Compare" data-bs-toggle="modal"
                                                    data-bs-target="#action-CompareModal">
                                                    <i class="icon-refresh"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-cart"
                                                    data-tooltip-text="Add to cart" data-bs-toggle="modal"
                                                    data-bs-target="#action-CartAddModal">
                                                    <i class="icon-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-item-info">
                                            <h5 class="product-item-title"><a href="shop-single-product.html">5.
                                                    Simple product</a></h5>
                                            <div class="product-item-price">$50.00</div>
                                            <div class="product-item-review-icon">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Product Item ==-->
                                </div>
                                <div class="col-sm-6 col-lg-6 col-xl-4 mb-4">
                                    <!--== Start Product Item ==-->
                                    <div class="product-item mb-4">
                                        <div class="product-item-thumb-wrap">
                                            <a class="product-item-thumb" href="shop-single-product.html">
                                                <img src="assets/images/shop/9.jpg" width="268" height="313"
                                                    alt="Image-HasTech">
                                            </a>
                                            <span class="label label-new">New</span>
                                            <div class="product-item-action">
                                                <button type="button" class="product-action-btn action-btn-quick-view"
                                                    data-tooltip-text="Quick View" data-bs-toggle="modal"
                                                    data-bs-target="#action-QuickViewModal">
                                                    <i class="icon-magnifier"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-wishlist"
                                                    data-tooltip-text="Add to wishlist" data-bs-toggle="modal"
                                                    data-bs-target="#action-WishlistModal">
                                                    <i class="icon-heart"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-compare"
                                                    data-tooltip-text="Compare" data-bs-toggle="modal"
                                                    data-bs-target="#action-CompareModal">
                                                    <i class="icon-refresh"></i>
                                                </button>
                                                <button type="button" class="product-action-btn action-btn-cart"
                                                    data-tooltip-text="Add to cart" data-bs-toggle="modal"
                                                    data-bs-target="#action-CartAddModal">
                                                    <i class="icon-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-item-info">
                                            <h5 class="product-item-title"><a href="shop-single-product.html">6.
                                                    Variable with soldout product</a></h5>
                                            <div class="product-item-price"><span class="price-old">$75.00</span> $55.00
                                            </div>
                                            <div class="product-item-review-icon">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                                <img src="assets/images/icons/star.svg" width="17" height="17"
                                                    alt="icon-star">
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Product Item ==-->
                                </div>
                                <div class="col-12">
                                    <nav class="pagination-area">
                                        <ul class="page-numbers justify-content-center">
                                            <li>
                                                <a class="page-number prev" href="shop.html">
                                                    <i class="icon-arrow-left"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="page-number active" href="shop.html">1</a>
                                            </li>
                                            <li>
                                                <a class="page-number" href="shop.html">2</a>
                                            </li>
                                            <li>
                                                <a class="page-number next" href="shop.html">
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-list">
                            <div class="product-list-items">
                                <!--== Start Product Item ==-->
                                <div class="product-two-item mb-4">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="product-two-item-thumb-wrap">
                                                <a class="product-two-item-thumb" href="shop-single-product.html">
                                                    <img src="assets/images/shop/1.jpg" width="268" height="313"
                                                        alt="Image-HasTech">
                                                </a>
                                                <span class="label">Sale</span>
                                                <span class="label label-two">-15%</span>
                                                <span class="label label-new">New</span>
                                                <div class="product-two-item-action">
                                                    <button type="button"
                                                        class="product-action-btn action-btn-quick-view"
                                                        data-tooltip-text="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#action-QuickViewModal">
                                                        <i class="icon-magnifier-add"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 align-self-center">
                                            <div class="product-two-item-info">
                                                <h3 class="product-two-item-title mt-n1"><a
                                                        href="shop-single-product.html">1. New and sale badge
                                                        product</a></h3>
                                                <p class="product-two-item-desc">Contrary to popular belief,
                                                    Lorem Ipsum is not simply random text. It has roots in a
                                                    piece of classical Latin literature from 45 BC, making it
                                                    over 2000 years old. Richard McClintock, a Latin professor
                                                    at Hampden-Sydney College in Virginia,</p>
                                                <div class="product-two-item-price">$110.00 <span
                                                        class="price-old">$130.00</span></div>
                                                <div class="product-two-item-review-icon">
                                                    <img src="assets/images/icons/star.svg" width="19" height="19"
                                                        alt="icon-star">
                                                    <img src="assets/images/icons/star.svg" width="19" height="19"
                                                        alt="icon-star">
                                                    <img src="assets/images/icons/star.svg" width="19" height="19"
                                                        alt="icon-star">
                                                    <img src="assets/images/icons/star.svg" width="19" height="19"
                                                        alt="icon-star">
                                                    <img src="assets/images/icons/star.svg" width="19" height="19"
                                                        alt="icon-star">
                                                </div>
                                                <div class="product-item-action">
                                                    <button type="button" class="product-action-btn action-btn-wishlist"
                                                        data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                        <i class="icon-heart"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-cart"
                                                        data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                        <i class="icon-basket-loaded"></i> <span>Add To
                                                            Cart</span>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-compare"
                                                        data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                                        <i class="icon-refresh"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--== End Product Item ==-->

                                <!--== Start Product Item ==-->
                                <div class="product-two-item mb-4">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="product-two-item-thumb-wrap">
                                                <a class="product-two-item-thumb" href="shop-single-product.html">
                                                    <img src="assets/images/shop/2.jpg" width="268" height="313"
                                                        alt="Image-HasTech">
                                                </a>
                                                <span class="label">Sale</span>
                                                <span class="label label-two">-10%</span>
                                                <div class="product-two-item-action">
                                                    <button type="button"
                                                        class="product-action-btn action-btn-quick-view"
                                                        data-tooltip-text="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#action-QuickViewModal">
                                                        <i class="icon-magnifier-add"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 align-self-center">
                                            <div class="product-two-item-info">
                                                <h3 class="product-two-item-title mt-n1"><a
                                                        href="shop-single-product.html">10. This is the large
                                                        title</a></h3>
                                                <p class="product-two-item-desc">A long established fact that a
                                                    reader will be distracted by the readable content of a page
                                                    when looking at its layout. The point of using Lorem Ipsum
                                                    is that it has a more-or-less normal distribution of
                                                    letters, as opposed...</p>
                                                <div class="product-two-item-price">$19.00 <span
                                                        class="price-old">$21.00</span></div>
                                                <div class="product-two-item-review-icon">
                                                    <img src="assets/images/icons/star.svg" width="19" height="19"
                                                        alt="icon-star">
                                                    <img src="assets/images/icons/star.svg" width="19" height="19"
                                                        alt="icon-star">
                                                    <img src="assets/images/icons/star.svg" width="19" height="19"
                                                        alt="icon-star">
                                                    <img src="assets/images/icons/star.svg" width="19" height="19"
                                                        alt="icon-star">
                                                    <img src="assets/images/icons/star.svg" width="19" height="19"
                                                        alt="icon-star">
                                                </div>
                                                <div class="product-item-action">
                                                    <button type="button" class="product-action-btn action-btn-wishlist"
                                                        data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                        <i class="icon-heart"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-cart"
                                                        data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                        <i class="icon-basket-loaded"></i> <span>Add To
                                                            Cart</span>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-compare"
                                                        data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                                        <i class="icon-refresh"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--== End Product Item ==-->

                                <!--== Start Product Item ==-->
                                <div class="product-two-item mb-4">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="product-two-item-thumb-wrap">
                                                <a class="product-two-item-thumb" href="shop-single-product.html">
                                                    <img src="assets/images/shop/7.jpg" width="268" height="313"
                                                        alt="Image-HasTech">
                                                </a>
                                                <div class="product-two-item-action">
                                                    <button type="button"
                                                        class="product-action-btn action-btn-quick-view"
                                                        data-tooltip-text="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#action-QuickViewModal">
                                                        <i class="icon-magnifier-add"></i>
                                                    </button>
                                                </div>
                                                <div class="countdown1" data-countdown="2025/01/05"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 align-self-center">
                                            <div class="product-two-item-info">
                                                <h3 class="product-two-item-title mt-n1"><a
                                                        href="shop-single-product.html">4. Soldout product</a>
                                                </h3>
                                                <p class="product-two-item-desc">At vero eos et accusamus et
                                                    iusto odio dignissimos ducimus qui blanditiis praesentium
                                                    voluptatum deleniti atque corrupti quos dolores et quas
                                                    molestias excepturi sint animi, id est laborum et dolorum
                                                    fuga.</p>
                                                <div class="product-two-item-price">$19.00 <span
                                                        class="price-old">$21.00</span></div>
                                                <div class="product-two-item-review-icon">
                                                    <img src="assets/images/icons/star.svg" width="19" height="19"
                                                        alt="icon-star">
                                                    <img src="assets/images/icons/star.svg" width="19" height="19"
                                                        alt="icon-star">
                                                    <img src="assets/images/icons/star.svg" width="19" height="19"
                                                        alt="icon-star">
                                                    <img src="assets/images/icons/star.svg" width="19" height="19"
                                                        alt="icon-star">
                                                    <img src="assets/images/icons/star.svg" width="19" height="19"
                                                        alt="icon-star">
                                                </div>
                                                <div class="product-item-action">
                                                    <button type="button" class="product-action-btn action-btn-wishlist"
                                                        data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                        <i class="icon-heart"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-cart"
                                                        data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                        <i class="icon-basket-loaded"></i> <span>Add To
                                                            Cart</span>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-compare"
                                                        data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                                        <i class="icon-refresh"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--== End Product Item ==-->

                                <!--== Start Product Item ==-->
                                <div class="product-two-item mb-4">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="product-two-item-thumb-wrap">
                                                <a class="product-two-item-thumb" href="shop-single-product.html">
                                                    <img src="assets/images/shop/8.jpg" width="268" height="313"
                                                        alt="Image-HasTech">
                                                </a>
                                                <span class="label label-new">New</span>
                                                <div class="product-two-item-action">
                                                    <button type="button"
                                                        class="product-action-btn action-btn-quick-view"
                                                        data-tooltip-text="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#action-QuickViewModal">
                                                        <i class="icon-magnifier-add"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 align-self-center">
                                            <div class="product-two-item-info">
                                                <h3 class="product-two-item-title mt-n1"><a
                                                        href="shop-single-product.html">5. Simple product</a>
                                                </h3>
                                                <p class="product-two-item-desc">On the other hand, we denounce
                                                    with righteous indignation and dislike men who are so
                                                    beguiled and demoralized by the charms of pleasure of the
                                                    moment, so blinded by blame belongs to those who fail in
                                                    their duty through weakness of will</p>
                                                <div class="product-two-item-price">$50.00</div>
                                                <div class="product-two-item-review-icon">
                                                    <img src="assets/images/icons/star.svg" width="19" height="19"
                                                        alt="icon-star">
                                                    <img src="assets/images/icons/star.svg" width="19" height="19"
                                                        alt="icon-star">
                                                    <img src="assets/images/icons/star.svg" width="19" height="19"
                                                        alt="icon-star">
                                                    <img src="assets/images/icons/star.svg" width="19" height="19"
                                                        alt="icon-star">
                                                    <img src="assets/images/icons/star.svg" width="19" height="19"
                                                        alt="icon-star">
                                                </div>
                                                <div class="product-item-action">
                                                    <button type="button" class="product-action-btn action-btn-wishlist"
                                                        data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                        <i class="icon-heart"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-cart"
                                                        data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                        <i class="icon-basket-loaded"></i> <span>Add To
                                                            Cart</span>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-compare"
                                                        data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                                        <i class="icon-refresh"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--== End Product Item ==-->

                                <nav class="pagination-area pt-6">
                                    <ul class="page-numbers justify-content-center">
                                        <li>
                                            <a class="page-number prev" href="shop.html">
                                                <i class="icon-arrow-left"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="page-number active" href="shop.html">1</a>
                                        </li>
                                        <li>
                                            <a class="page-number" href="shop.html">2</a>
                                        </li>
                                        <li>
                                            <a class="page-number next" href="shop.html">
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 order-1 order-lg-0 mt-10 mt-lg-0">
                    <!--== Start Sidebar Area Wrapper ==-->
                    <div class="sidebar-area">
                        <div class="accordion" id="accordionSidebar">

                            <!-- Sidebar Price Start -->
                            <div class="accordion-item shop-sidebar-item">
                                <button class="shop-sidebar-toggle accordion-button" data-bs-toggle="collapse"
                                    data-bs-target="#sidebarPrice">Price</button>
                                <div id="sidebarPrice" class="accordion-collapse collapse show">
                                    <div class="shop-sidebar-body accordion-body">
                                        <div class="sidebar-price-filter">
                                            <div class="filter-range-from">
                                                <span>$</span>
                                                <input name="filter.v.price.gte" id="Filter-price-1" type="number"
                                                    placeholder="0" min="0" max="110.00">
                                                <label for="Filter-price-1">From</label>
                                            </div>
                                            <div class="filter-price-range-to">
                                                <span>$</span>
                                                <input name="filter.v.price.lte" id="Filter-price-2" type="number"
                                                    placeholder="110" min="0" max="110.00">
                                                <label for="Filter-price-2">To</label>
                                            </div>
                                        </div>
                                        <input class="mt-20 sidebar-price-filter-btn" type="submit" value="Filter">
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Price End -->

                            <!-- Sidebar Availability Start -->
                            <div class="accordion-item shop-sidebar-item">
                                <button class="shop-sidebar-toggle accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#sidebarAvailability">Availability</button>
                                <div id="sidebarAvailability" class="accordion-collapse collapse">
                                    <div class="shop-sidebar-body accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="stock"
                                                id="in-stock">
                                            <label class="form-check-label" for="in-stock">In stock <span
                                                    class="ms-auto">(23)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="stock"
                                                id="out-of-stock" checked>
                                            <label class="form-check-label" for="out-of-stock">Out of stock
                                                <span class="ms-auto">(12)</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Availability End -->

                            <!-- Sidebar Product Type Start -->
                            <div class="accordion-item shop-sidebar-item">
                                <button class="shop-sidebar-toggle accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#sidebarProductType">Product
                                    Type</button>
                                <div id="sidebarProductType" class="accordion-collapse collapse">
                                    <div class="shop-sidebar-body accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="type"
                                                id="type-1">
                                            <label class="form-check-label" for="type-1">Type 1 <span
                                                    class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="type"
                                                id="type-2">
                                            <label class="form-check-label" for="type-2">Type 2 <span
                                                    class="ms-auto">(3)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="type"
                                                id="type-3">
                                            <label class="form-check-label" for="type-3">Type 3 <span
                                                    class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="type"
                                                id="type-4">
                                            <label class="form-check-label" for="type-4">Type 4 <span
                                                    class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="type"
                                                id="type-5">
                                            <label class="form-check-label" for="type-5">Type 5 <span
                                                    class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="type"
                                                id="type-6">
                                            <label class="form-check-label" for="type-6">Type 6 <span
                                                    class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="type"
                                                id="type-7">
                                            <label class="form-check-label" for="type-7">Type 7 <span
                                                    class="ms-auto">(3)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="type"
                                                id="type-8">
                                            <label class="form-check-label" for="type-8">Type 8 <span
                                                    class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="type"
                                                id="type-9">
                                            <label class="form-check-label" for="type-9">Type 9 <span
                                                    class="ms-auto">(2)</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Product Type End -->

                            <!-- Sidebar Brand Start -->
                            <div class="accordion-item shop-sidebar-item">
                                <button class="shop-sidebar-toggle accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#sidebarBrand">Brand</button>
                                <div id="sidebarBrand" class="accordion-collapse collapse">
                                    <div class="shop-sidebar-body accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="vendor"
                                                id="vendor-1">
                                            <label class="form-check-label" for="vendor-1">Vendor 1 <span
                                                    class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="vendor"
                                                id="vendor-2">
                                            <label class="form-check-label" for="vendor-2">Vendor 2 <span
                                                    class="ms-auto">(3)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="vendor"
                                                id="vendor-3">
                                            <label class="form-check-label" for="vendor-3">Vendor 3 <span
                                                    class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="vendor"
                                                id="vendor-4">
                                            <label class="form-check-label" for="vendor-4">Vendor 4 <span
                                                    class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="vendor"
                                                id="vendor-5">
                                            <label class="form-check-label" for="vendor-5">Vendor 5 <span
                                                    class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="vendor"
                                                id="vendor-6">
                                            <label class="form-check-label" for="vendor-6">Vendor 6 <span
                                                    class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="vendor"
                                                id="vendor-7">
                                            <label class="form-check-label" for="vendor-7">Vendor 7 <span
                                                    class="ms-auto">(3)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="vendor"
                                                id="vendor-8">
                                            <label class="form-check-label" for="vendor-8">Vendor 8 <span
                                                    class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="vendor"
                                                id="vendor-9">
                                            <label class="form-check-label" for="vendor-9">Vendor 9 <span
                                                    class="ms-auto">(2)</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Brand End -->

                            <!-- Sidebar Color Start -->
                            <div class="accordion-item shop-sidebar-item">
                                <button class="shop-sidebar-toggle accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#sidebarColor">Color</button>
                                <div id="sidebarColor" class="accordion-collapse collapse">
                                    <div class="shop-sidebar-body accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color"
                                                id="black">
                                            <label class="form-check-label" for="black">Black <span
                                                    class="ms-auto">(4)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color"
                                                id="blue">
                                            <label class="form-check-label" for="blue">Blue <span
                                                    class="ms-auto">(7)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color"
                                                id="gold">
                                            <label class="form-check-label" for="gold">Gold <span
                                                    class="ms-auto">(7)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color"
                                                id="gray">
                                            <label class="form-check-label" for="gray">Gray <span
                                                    class="ms-auto">(7)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color"
                                                id="green">
                                            <label class="form-check-label" for="green">Green <span
                                                    class="ms-auto">(7)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color"
                                                id="magenta">
                                            <label class="form-check-label" for="magenta">Magenta <span
                                                    class="ms-auto">(5)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color"
                                                id="maroon">
                                            <label class="form-check-label" for="maroon">Maroon <span
                                                    class="ms-auto">(5)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color"
                                                id="navy">
                                            <label class="form-check-label" for="navy">Navy <span
                                                    class="ms-auto">(5)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color"
                                                id="orange">
                                            <label class="form-check-label" for="orange">Orange <span
                                                    class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color"
                                                id="pink">
                                            <label class="form-check-label" for="pink">Pink <span
                                                    class="ms-auto">(4)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color"
                                                id="purple">
                                            <label class="form-check-label" for="purple">Purple <span
                                                    class="ms-auto">(4)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color"
                                                id="red">
                                            <label class="form-check-label" for="red">Red <span
                                                    class="ms-auto">(7)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color"
                                                id="violet">
                                            <label class="form-check-label" for="violet">Violet <span
                                                    class="ms-auto">(4)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color"
                                                id="white">
                                            <label class="form-check-label" for="white">White <span
                                                    class="ms-auto">(6)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color"
                                                id="yellow">
                                            <label class="form-check-label" for="yellow">Yellow <span
                                                    class="ms-auto">(4)</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Color End -->

                            <!-- Sidebar Size Start -->
                            <div class="accordion-item shop-sidebar-item">
                                <button class="shop-sidebar-toggle accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#sidebarSize">Size</button>
                                <div id="sidebarSize" class="accordion-collapse collapse">
                                    <div class="shop-sidebar-body accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="size" id="s">
                                            <label class="form-check-label" for="s">S <span
                                                    class="ms-auto">(8)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="size" id="m">
                                            <label class="form-check-label" for="m">M <span
                                                    class="ms-auto">(11)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="size" id="l">
                                            <label class="form-check-label" for="l">L <span
                                                    class="ms-auto">(11)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="size"
                                                id="xl">
                                            <label class="form-check-label" for="xl">XL <span
                                                    class="ms-auto">(9)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="size"
                                                id="xxl">
                                            <label class="form-check-label" for="xxl">XXL <span
                                                    class="ms-auto">(5)</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Size End -->

                        </div>
                    </div>
                    <!--== End Sidebar Area Wrapper ==-->
                </div>
            </div>
        </div>
    </div>
    <!--== End Product Area Wrapper ==-->
</x-layout>