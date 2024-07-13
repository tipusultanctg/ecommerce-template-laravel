@extends('layouts.app')

@section('content')
    <style>
        .swiper {
            width: 100%;
            height: 500px;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    <!-- slider area start -->
    <section class="slider-area">
        <div class="container">
            <div class="row my-4">
                <div class="col-md-8">
                    <div class="swiper mySwiper swiper-container">
                        <div class="swiper-wrapper">
                            <div class="slider-item swiper-slide d-flex justify-content-start"
                            style="background-image: url({{ asset('assets/images/slider/slider-2.jpg') }});background-position: center center;
    background-size: cover;">
                                <div class="slider-content">
                                    <span>New Arrivals 2023</span>
                                    <h2 class="slider-title">The Clothing Collection</h2>
                                    <div class="slider-btn">
                                        <a href="shop.html" class="btn btn-border btn-warning rounded-0">Shop Collection</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item swiper-slide grey-bg-5 d-flex justify-content-start"
                                 style="background-image: url({{ asset('assets/images/slider/slider-1.jpg') }});background-position: center center;
    background-size: cover;">
                                <div class="slider-content">
                                    <span>Best Selling 2023</span>
                                    <h2 class="slider-title">The Summer Collection</h2>
                                    <div class="slider-btn">
                                        <a href="shop.html" class="btn btn-warning rounded-0">Shop Collection</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-dot slider-2-dot"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner-1">
                        <img src="{{ asset('assets/images/banner/350x200.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="banner-2 mt-4">
                        <img src="{{ asset('assets/images/banner/350x200.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider area end -->

    <!-- Banner Area Start -->
    <section class="banner-section my-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="banner position-relative">
                        <div class="banner-content">
                            <div class="banner-title mb-3">
                                <h3><a href="">T-Shirt Tunic Tops Blouse</a></h3>
                            </div>
                            <div class="banner-btn">
                                <a href="">Shop Now</a>
                            </div>
                        </div>
                        <div class="banner-thumb position-absolute">
                            <img src="{{ asset('assets/images/banner/shoes.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner position-relative">
                        <div class="banner-content">
                            <div class="banner-title mb-3">
                                <h3><a href="">Satchel Tote Crossbody Bags</a></h3>
                            </div>
                            <div class="banner-btn">
                                <a href="">Shop Now</a>
                            </div>
                        </div>
                        <div class="banner-thumb position-absolute">
                            <img src="{{ asset('assets/images/banner/tshirt.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner position-relative">
                        <div class="banner-content">
                            <div class="banner-title mb-3">
                                <h3><a href="">Men's Tennis Walking Shoes</a></h3>
                            </div>
                            <div class="banner-btn">
                                <a href="">Shop Now</a>
                            </div>
                        </div>
                        <div class="banner-thumb position-absolute">
                            <img src="{{ asset('assets/images/banner/bag.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area end -->

    <!-- Category Start -->
    <scetion>
        <div class="container">
            <div class="category-section py-5 my-5">
                <div class="section-title">
                    <p class="text-center mb-0">Shop By category</p>
                    <h3 class="text-center mb-5">Popular Category</h3>
                </div>
                <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-sm-2 row-cols-2 mb-30">
                    <div class="col category-box">
                        <div class="category-box-item position-relative">
                            <div class="category-img">
                                <img src="{{ asset('assets/images/category/1-600x600.jpg') }}" alt="">
                            </div>
                            <div class="category-content position-absolute">
                                <div class="product-count"> 8 products </div>
                                <h4 class="text-center">
                                    <a href="">Bag</a>
                                </h4>
                                <a class="shop-now-btn" href="">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col category-box">
                        <div class="category-box-item position-relative">
                            <div class="category-img">
                                <img src="{{ asset('assets/images/category/6-600x600.jpg') }}" alt="">
                            </div>
                            <div class="category-content position-absolute">
                                <div class="product-count"> 8 products </div>
                                <h4 class="text-center">
                                    <a href="">Bag</a>
                                </h4>
                                <a class="shop-now-btn" href="">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col category-box">
                        <div class="category-box-item position-relative">
                            <div class="category-img">
                                <img src="{{ asset('assets/images/category/3-600x600.jpg') }}" alt="">
                            </div>
                            <div class="category-content position-absolute">
                                <div class="product-count"> 8 products </div>
                                <h4 class="text-center">
                                    <a href="">Bag</a>
                                </h4>
                                <a class="shop-now-btn" href="">Shop Now</a>
                            </div>

                        </div>
                    </div>
                    <div class="col category-box">
                        <div class="category-box-item position-relative">
                            <div class="category-img">
                                <img src="{{ asset('assets/images/category/6-600x600.jpg') }}" alt="">
                            </div>
                            <div class="category-content position-absolute">
                                <div class="product-count"> 8 products </div>
                                <h4 class="text-center">
                                    <a href="">Bag</a>
                                </h4>
                                <a class="shop-now-btn" href="">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col category-box">
                        <div class="category-box-item position-relative">
                            <div class="category-img">
                                <img src="{{ asset('assets/images/category/4-600x600.jpg') }}" alt="">
                            </div>
                            <div class="category-content position-absolute">
                                <div class="product-count"> 8 products </div>
                                <h4 class="text-center">
                                    <a href="">Bag</a>
                                </h4>
                                <a class="shop-now-btn" href="">Shop Now</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </scetion>
    <!-- Category end -->

    <!-- All Products start -->
    <section">
        <div class="container">
            <div class="products-section my-5 py-5">
                <div class="section-title">
                    <p class="text-center mb-0">All Product Shop</p>
                    <h3 class="text-center mb-5">Customer Favourite Products</h3>
                </div>

                <div class="product-tabs">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#tab1">Clothings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab2">Shoes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab3">Bags</a>
                        </li>
                    </ul>

                    <div class="tab-content mt-2">
                        <div id="tab1" class="tab-pane fade show active">
                            <h3>Tab 1 Content</h3>
                            <p>This is the content of Tab 1.</p>
                        </div>
                        <div id="tab2" class="tab-pane fade">
                            <h3>Tab 2 Content</h3>
                            <p>This is the content of Tab 2.</p>
                        </div>
                        <div id="tab3" class="tab-pane fade">
                            <h3>Tab 3 Content</h3>
                            <p>This is the content of Tab 3.</p>
                        </div>
                    </div>
                </div>


                <div class="row row-cols-xxl-4 row-cols-md-3 row-cols-sm-2 row-cols-2 mb-30">
                    <div class="col">
                        <div class="product-item transition-3 mb-25 ">
                            <div class="product-thumb position-relative fix m-img">
                                <a href="https://shofy.botble.com/products/lg-27uk850-w-27-inch-4k-uhd-ips-monitor">
                                    <img src="https://shofy.botble.com/storage/main/products/product-8-600x600.jpg"
                                         class="img-fluid">
                                </a>

                                <div class="product-badge">
                                    <span style="background-color: #9A3B00 !important;">Sale</span>
                                </div>

                                <div class="product-action">
                                    <div class="d-flex flex-column product-action-item">
                                        <button type="button" class="product-compare-btn product-action-btn"
                                                data-bb-toggle="add-to-compare" title="Add to compare"
                                                data-url="https://shofy.botble.com/compare/39"
                                                data-remove-url="https://shofy.botble.com/compare/39"
                                                data-add-text="Add To Compare" data-remove-text="Remove From Compare">
                                            <i class="ti ti-arrows-left-right"></i>
                                            <span class="product-tooltip">
                                            Add To Compare
                                    </span>
                                        </button>
                                        <button type="button" class="product-quick-view-btn product-action-btn"
                                                title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#product-quick-view-modal"
                                                data-url="https://shofy.botble.com/ajax/quick-view/39">
                                            <i class="ti ti-eye"></i>
                                            <span class="product-tooltip">Quick View</span>
                                        </button>
                                        <button type="button" class="product-add-to-wishlist-btn product-action-btn"
                                                data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                data-url="https://shofy.botble.com/wishlist/39"
                                                data-add-text="Add To Wishlist" data-remove-text="Remove From Wishlist">
                                            <i class="ti ti-heart"></i>
                                            <span class="product-tooltip">
                                            Add To Wishlist
                                    </span>
                                        </button>
                                    </div>
                                </div>

                                <div class="product-add-cart-btn-large-wrapper">
                                    <button type="button" class="product-add-cart-btn-large" data-bb-toggle="add-to-cart"
                                            data-url="https://shofy.botble.com/cart/add-to-cart" data-id="39"
                                            data-product-id="39" data-product-name="LG 27UK850-W 27-Inch 4K UHD IPS Monitor"
                                            data-product-price="2192" data-product-sku="3I-178"
                                            data-product-category="Computers > Laptop" data-product-brand="FoodPound"
                                            data-product-categories="Weekly Best Selling,CPU Heat Pipes,Wireless Headphones,Laptop"
                                            title="Add To Cart">
                                        <i class="ti ti-shopping-cart"></i>
                                        Add To Cart
                                    </button>
                                </div>
                            </div>

                            <div class="product-content">
                                <div class="product-category">
                                    <a href="https://shofy.botble.com/stores/global-store">Global Store</a>
                                </div>
                                <h3 class="text-truncate product-title">
                                    <a href="https://shofy.botble.com/products/lg-27uk850-w-27-inch-4k-uhd-ips-monitor"
                                       title="LG 27UK850-W 27-Inch 4K UHD IPS Monitor">
                                        LG 27UK850-W 27-Inch 4K UHD IPS Monitor
                                    </a>
                                </h3>
                                <div class="product-rating d-flex align-items-center">
                                    <div class="product-rating-icon">
                                        <div class="bb-product-rating" style="--bb-rating-size: 70px">
                                            <span style="width: 77.14286% !important;"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-price-wrapper">
                                    <span class="product-price new-price" data-bb-value="product-price">$791.00</span>

                                    <span class="">
                                    <small>
                                        <del class="product-price old-price" data-bb-value="product-original-price">$2,192.00</del>
                                    </small>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-item transition-3 mb-25 ">
                            <div class="product-thumb position-relative fix m-img">
                                <a href="https://shofy.botble.com/products/lg-27uk850-w-27-inch-4k-uhd-ips-monitor">
                                    <img src="https://shofy.botble.com/storage/main/products/product-8-600x600.jpg"
                                         class="img-fluid">
                                </a>

                                <div class="product-badge">
                                    <span style="background-color: #9A3B00 !important;">Sale</span>
                                </div>

                                <div class="product-action">
                                    <div class="d-flex flex-column product-action-item">
                                        <button type="button" class="product-compare-btn product-action-btn"
                                                data-bb-toggle="add-to-compare" title="Add to compare"
                                                data-url="https://shofy.botble.com/compare/39"
                                                data-remove-url="https://shofy.botble.com/compare/39"
                                                data-add-text="Add To Compare" data-remove-text="Remove From Compare">
                                            <i class="ti ti-arrows-left-right"></i>
                                            <span class="product-tooltip">
                                            Add To Compare
                                    </span>
                                        </button>
                                        <button type="button" class="product-quick-view-btn product-action-btn"
                                                title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#product-quick-view-modal"
                                                data-url="https://shofy.botble.com/ajax/quick-view/39">
                                            <i class="ti ti-eye"></i>
                                            <span class="product-tooltip">Quick View</span>
                                        </button>
                                        <button type="button" class="product-add-to-wishlist-btn product-action-btn"
                                                data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                data-url="https://shofy.botble.com/wishlist/39"
                                                data-add-text="Add To Wishlist" data-remove-text="Remove From Wishlist">
                                            <i class="ti ti-heart"></i>
                                            <span class="product-tooltip">
                                            Add To Wishlist
                                    </span>
                                        </button>
                                    </div>
                                </div>

                                <div class="product-add-cart-btn-large-wrapper">
                                    <button type="button" class="product-add-cart-btn-large" data-bb-toggle="add-to-cart"
                                            data-url="https://shofy.botble.com/cart/add-to-cart" data-id="39"
                                            data-product-id="39" data-product-name="LG 27UK850-W 27-Inch 4K UHD IPS Monitor"
                                            data-product-price="2192" data-product-sku="3I-178"
                                            data-product-category="Computers > Laptop" data-product-brand="FoodPound"
                                            data-product-categories="Weekly Best Selling,CPU Heat Pipes,Wireless Headphones,Laptop"
                                            title="Add To Cart">
                                        <i class="ti ti-shopping-cart"></i>
                                        Add To Cart
                                    </button>
                                </div>
                            </div>

                            <div class="product-content">
                                <div class="product-category">
                                    <a href="https://shofy.botble.com/stores/global-store">Global Store</a>
                                </div>
                                <h3 class="text-truncate product-title">
                                    <a href="https://shofy.botble.com/products/lg-27uk850-w-27-inch-4k-uhd-ips-monitor"
                                       title="LG 27UK850-W 27-Inch 4K UHD IPS Monitor">
                                        LG 27UK850-W 27-Inch 4K UHD IPS Monitor
                                    </a>
                                </h3>
                                <div class="product-rating d-flex align-items-center">
                                    <div class="product-rating-icon">
                                        <div class="bb-product-rating" style="--bb-rating-size: 70px">
                                            <span style="width: 77.14286% !important;"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-price-wrapper">
                                    <span class="product-price new-price" data-bb-value="product-price">$791.00</span>

                                    <span class="">
                                    <small>
                                        <del class="product-price old-price" data-bb-value="product-original-price">$2,192.00</del>
                                    </small>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-item transition-3 mb-25 ">
                            <div class="product-thumb position-relative fix m-img">
                                <a href="https://shofy.botble.com/products/lg-27uk850-w-27-inch-4k-uhd-ips-monitor">
                                    <img src="https://shofy.botble.com/storage/main/products/product-8-600x600.jpg"
                                         class="img-fluid">
                                </a>

                                <div class="product-badge">
                                    <span style="background-color: #9A3B00 !important;">Sale</span>
                                </div>

                                <div class="product-action">
                                    <div class="d-flex flex-column product-action-item">
                                        <button type="button" class="product-compare-btn product-action-btn"
                                                data-bb-toggle="add-to-compare" title="Add to compare"
                                                data-url="https://shofy.botble.com/compare/39"
                                                data-remove-url="https://shofy.botble.com/compare/39"
                                                data-add-text="Add To Compare" data-remove-text="Remove From Compare">
                                            <i class="ti ti-arrows-left-right"></i>
                                            <span class="product-tooltip">
                                            Add To Compare
                                    </span>
                                        </button>
                                        <button type="button" class="product-quick-view-btn product-action-btn"
                                                title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#product-quick-view-modal"
                                                data-url="https://shofy.botble.com/ajax/quick-view/39">
                                            <i class="ti ti-eye"></i>
                                            <span class="product-tooltip">Quick View</span>
                                        </button>
                                        <button type="button" class="product-add-to-wishlist-btn product-action-btn"
                                                data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                data-url="https://shofy.botble.com/wishlist/39"
                                                data-add-text="Add To Wishlist" data-remove-text="Remove From Wishlist">
                                            <i class="ti ti-heart"></i>
                                            <span class="product-tooltip">
                                            Add To Wishlist
                                    </span>
                                        </button>
                                    </div>
                                </div>

                                <div class="product-add-cart-btn-large-wrapper">
                                    <button type="button" class="product-add-cart-btn-large" data-bb-toggle="add-to-cart"
                                            data-url="https://shofy.botble.com/cart/add-to-cart" data-id="39"
                                            data-product-id="39" data-product-name="LG 27UK850-W 27-Inch 4K UHD IPS Monitor"
                                            data-product-price="2192" data-product-sku="3I-178"
                                            data-product-category="Computers > Laptop" data-product-brand="FoodPound"
                                            data-product-categories="Weekly Best Selling,CPU Heat Pipes,Wireless Headphones,Laptop"
                                            title="Add To Cart">
                                        <i class="ti ti-shopping-cart"></i>
                                        Add To Cart
                                    </button>
                                </div>
                            </div>

                            <div class="product-content">
                                <div class="product-category">
                                    <a href="https://shofy.botble.com/stores/global-store">Global Store</a>
                                </div>
                                <h3 class="text-truncate product-title">
                                    <a href="https://shofy.botble.com/products/lg-27uk850-w-27-inch-4k-uhd-ips-monitor"
                                       title="LG 27UK850-W 27-Inch 4K UHD IPS Monitor">
                                        LG 27UK850-W 27-Inch 4K UHD IPS Monitor
                                    </a>
                                </h3>
                                <div class="product-rating d-flex align-items-center">
                                    <div class="product-rating-icon">
                                        <div class="bb-product-rating" style="--bb-rating-size: 70px">
                                            <span style="width: 77.14286% !important;"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-price-wrapper">
                                    <span class="product-price new-price" data-bb-value="product-price">$791.00</span>

                                    <span class="">
                                    <small>
                                        <del class="product-price old-price" data-bb-value="product-original-price">$2,192.00</del>
                                    </small>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-item transition-3 mb-25 ">
                            <div class="product-thumb position-relative fix m-img">
                                <a href="https://shofy.botble.com/products/lg-27uk850-w-27-inch-4k-uhd-ips-monitor">
                                    <img src="https://shofy.botble.com/storage/main/products/product-8-600x600.jpg"
                                         class="img-fluid">
                                </a>

                                <div class="product-badge">
                                    <span style="background-color: #9A3B00 !important;">Sale</span>
                                </div>

                                <div class="product-action">
                                    <div class="d-flex flex-column product-action-item">
                                        <button type="button" class="product-compare-btn product-action-btn"
                                                data-bb-toggle="add-to-compare" title="Add to compare"
                                                data-url="https://shofy.botble.com/compare/39"
                                                data-remove-url="https://shofy.botble.com/compare/39"
                                                data-add-text="Add To Compare" data-remove-text="Remove From Compare">
                                            <i class="ti ti-arrows-left-right"></i>
                                            <span class="product-tooltip">
                                            Add To Compare
                                    </span>
                                        </button>
                                        <button type="button" class="product-quick-view-btn product-action-btn"
                                                title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#product-quick-view-modal"
                                                data-url="https://shofy.botble.com/ajax/quick-view/39">
                                            <i class="ti ti-eye"></i>
                                            <span class="product-tooltip">Quick View</span>
                                        </button>
                                        <button type="button" class="product-add-to-wishlist-btn product-action-btn"
                                                data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                data-url="https://shofy.botble.com/wishlist/39"
                                                data-add-text="Add To Wishlist" data-remove-text="Remove From Wishlist">
                                            <i class="ti ti-heart"></i>
                                            <span class="product-tooltip">
                                            Add To Wishlist
                                    </span>
                                        </button>
                                    </div>
                                </div>

                                <div class="product-add-cart-btn-large-wrapper">
                                    <button type="button" class="product-add-cart-btn-large" data-bb-toggle="add-to-cart"
                                            data-url="https://shofy.botble.com/cart/add-to-cart" data-id="39"
                                            data-product-id="39" data-product-name="LG 27UK850-W 27-Inch 4K UHD IPS Monitor"
                                            data-product-price="2192" data-product-sku="3I-178"
                                            data-product-category="Computers > Laptop" data-product-brand="FoodPound"
                                            data-product-categories="Weekly Best Selling,CPU Heat Pipes,Wireless Headphones,Laptop"
                                            title="Add To Cart">
                                        <i class="ti ti-shopping-cart"></i>
                                        Add To Cart
                                    </button>
                                </div>
                            </div>

                            <div class="product-content">
                                <div class="product-category">
                                    <a href="https://shofy.botble.com/stores/global-store">Global Store</a>
                                </div>
                                <h3 class="text-truncate product-title">
                                    <a href="https://shofy.botble.com/products/lg-27uk850-w-27-inch-4k-uhd-ips-monitor"
                                       title="LG 27UK850-W 27-Inch 4K UHD IPS Monitor">
                                        LG 27UK850-W 27-Inch 4K UHD IPS Monitor
                                    </a>
                                </h3>
                                <div class="product-rating d-flex align-items-center">
                                    <div class="product-rating-icon">
                                        <div class="bb-product-rating" style="--bb-rating-size: 70px">
                                            <span style="width: 77.14286% !important;"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-price-wrapper">
                                    <span class="product-price new-price" data-bb-value="product-price">$791.00</span>

                                    <span class="">
                                    <small>
                                        <del class="product-price old-price" data-bb-value="product-original-price">$2,192.00</del>
                                    </small>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- All Products end -->
@endsection
@section('scripts')
    <script>
        var swiper = new Swiper(".mySwiper", {
            direction: "vertical",
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
    <script type="module">
        $(document).ready(function() {
            const announcements = [
                "This is the content of the first announcement. Stay tuned for more updates!",
                "This is the content of the second announcement. More exciting news coming soon!",
                "This is the content of the third announcement. Keep an eye out for our latest updates!"
            ];

            let currentIndex = 0;

            function showAnnouncement(index) {
                const announcement = announcements[index];
                $('#announcement-container .announcement-content').slideUp(300, function() {
                    $(this).find('p').text(announcement);
                    $(this).slideDown(300);
                });
            }

            $('#prev-announcement').click(function() {
                currentIndex = (currentIndex > 0) ? currentIndex - 1 : announcements.length - 1;
                showAnnouncement(currentIndex);
            });

            $('#next-announcement').click(function() {
                currentIndex = (currentIndex < announcements.length - 1) ? currentIndex + 1 : 0;
                showAnnouncement(currentIndex);
            });

            showAnnouncement(currentIndex);
        });

        $(document).ready(function() {
            // Toggle dropdown menu
            $('#header-lang-toggle').click(function() {
                $('.dropdown-menu').slideToggle();
            });

            // Hide dropdown when clicking outside
            $(document).click(function(event) {
                if(!$(event.target).closest('.header-lang').length) {
                    $('.dropdown-menu').slideUp();
                }
            });

            // Prevent hiding dropdown when clicking inside the dropdown menu
            $('.dropdown-menu').click(function(event){
                event.stopPropagation();
            });
        });
    </script>


@endsection
