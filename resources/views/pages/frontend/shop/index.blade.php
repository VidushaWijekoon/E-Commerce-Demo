@extends('layouts.frontend.app')
@section('content')
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Events</a></li>
                <li class="breadcrumb-item active" aria-current="page">List</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="toolbox">
                        <div class="toolbox-left">
                            <div class="toolbox-info">
                                Showing <span>9 of 56</span> Products
                            </div><!-- End .toolbox-info -->
                        </div><!-- End .toolbox-left -->

                        <div class="toolbox-right">
                            <div class="toolbox-sort">
                                <label for="sortby">Sort by:</label>
                                <div class="select-custom">
                                    <select name="sortby" id="sortby" class="form-control">
                                        <option value="popularity" selected="selected">Most Popular</option>
                                        <option value="rating">Most Rated</option>
                                        <option value="date">Date</option>
                                    </select>
                                </div>
                            </div><!-- End .toolbox-sort -->

                        </div><!-- End .toolbox-right -->
                    </div><!-- End .toolbox -->

                    <div class="products mb-3">
                        <div class="product product-list">
                            <div class="row">
                                <div class="col-6 col-lg-3">
                                    <figure class="product-media">
                                        <span class="product-label label-new">New</span>
                                        <a href="product.html">
                                            <img src="{{ asset('https://rtechglobal.ae/frontend/images/events/wedding.jpg') }}"
                                                alt="Product image" class="product-image">
                                        </a>
                                    </figure><!-- End .product-media -->
                                </div><!-- End .col-sm-6 col-lg-3 -->

                                <div class="col-6 col-lg-3 order-lg-last">
                                    <div class="product-list-action">
                                        <div class="product-price">
                                            AED 60.00
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 20%;"></div>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                title="Quick view"><span>quick view</span></a>
                                            <a href="#" class="btn-product btn-compare"
                                                title="Compare"><span>compare</span></a>
                                        </div><!-- End .product-action -->

                                        <a href="{{ route('frontend.checkout') }}" class="btn-product btn-cart"><span>book
                                                now</span></a>
                                    </div><!-- End .product-list-action -->
                                </div><!-- End .col-sm-6 col-lg-3 -->

                                <div class="col-lg-6">
                                    <div class="product-body product-action-inner">
                                        <a href="#" class="btn-product btn-wishlist" title="Add to wishlist"><span>add
                                                to wishlist</span></a>
                                        <div class="product-cat">
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="#">Lorem ipsum dolor sit amet, consectetuer
                                                skirt</a></h3><!-- End .product-title -->

                                        <div class="product-content">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus
                                                hendrerit. Pellentesque </p>
                                        </div><!-- End .product-content -->

                                        <div class="product-nav product-nav-thumbs">
                                            <a href="#" class="active">
                                                <img src="{{ asset('img/room1.jpg') }}" alt="product desc">
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('img/room1.jpg') }}" alt="product desc">
                                            </a>

                                            <a href="#">
                                                <img src="{{ asset('img/room1.jpg') }}" alt="product desc">
                                            </a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .col-lg-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .product -->

                        <div class="product product-list">
                            <div class="row">
                                <div class="col-6 col-lg-3">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="{{ asset('https://rtechglobal.ae/frontend/images/events/coopate-events.jpg') }}"
                                                alt="Product image" class="product-image">
                                        </a>
                                    </figure><!-- End .product-media -->
                                </div><!-- End .col-sm-6 col-lg-3 -->

                                <div class="col-6 col-lg-3 order-lg-last">
                                    <div class="product-list-action">
                                        <div class="product-price">
                                            AED 84.00
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 0%;"></div>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 0 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                title="Quick view"><span>quick view</span></a>
                                            <a href="#" class="btn-product btn-compare"
                                                title="Compare"><span>compare</span></a>
                                        </div><!-- End .product-action -->

                                        <a href="{{ route('frontend.checkout') }}" class="btn-product btn-cart"><span>book
                                                now</span></a>
                                    </div><!-- End .product-list-action -->
                                </div><!-- End .col-sm-6 col-lg-3 -->

                                <div class="col-lg-6">
                                    <div class="product-body product-action-inner">
                                        <a href="#" class="btn-product btn-wishlist"
                                            title="Add to wishlist"><span>add to wishlist</span></a>
                                        <div class="product-cat">
                                            <a href="#">Luxury</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Lorem ipsum dolor sit amet,
                                                consectetuer
                                                dress</a></h3><!-- End .product-title -->

                                        <div class="product-content">
                                            <p>Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id,
                                                mattis vel, nisi. </p>
                                        </div><!-- End .product-content -->

                                        <div class="product-nav product-nav-thumbs">
                                            <a href="#" class="active">
                                                <img src="{{ asset('img/room1.jpg') }}" alt="product desc">
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('img/room1.jpg') }}" alt="product desc">
                                            </a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .col-lg-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .product -->

                        <div class="product product-list">
                            <div class="row">
                                <div class="col-6 col-lg-3">
                                    <figure class="product-media">
                                        <span class="product-label label-new">New</span>
                                        <a href="product.html">
                                            <img src="{{ asset('https://rtechglobal.ae/frontend/images/events/Types-of-Promotional-events.jpg') }}"
                                                alt="Product image" class="product-image">
                                        </a>
                                    </figure><!-- End .product-media -->
                                </div><!-- End .col-sm-6 col-lg-3 -->

                                <div class="col-6 col-lg-3 order-lg-last">
                                    <div class="product-list-action">
                                        <div class="product-price">
                                            AED 60.00
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 20%;"></div>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                title="Quick view"><span>quick view</span></a>
                                            <a href="#" class="btn-product btn-compare"
                                                title="Compare"><span>compare</span></a>
                                        </div><!-- End .product-action -->

                                        <a href="{{ route('frontend.checkout') }}"
                                            class="btn-product btn-cart"><span>book
                                                now</span></a>
                                    </div><!-- End .product-list-action -->
                                </div><!-- End .col-sm-6 col-lg-3 -->

                                <div class="col-lg-6">
                                    <div class="product-body product-action-inner">
                                        <a href="#" class="btn-product btn-wishlist"
                                            title="Add to wishlist"><span>add
                                                to wishlist</span></a>
                                        <div class="product-cat">

                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="#">Lorem ipsum dolor sit amet,
                                                consectetuer
                                                skirt</a></h3><!-- End .product-title -->

                                        <div class="product-content">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus
                                                hendrerit. Pellentesque </p>
                                        </div><!-- End .product-content -->

                                        <div class="product-nav product-nav-thumbs">
                                            <a href="#" class="active">
                                                <img src="{{ asset('img/room1.jpg') }}" alt="product desc">
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('img/room1.jpg') }}" alt="product desc">
                                            </a>

                                            <a href="#">
                                                <img src="{{ asset('img/room1.jpg') }}" alt="product desc">
                                            </a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .col-lg-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .product -->

                        <div class="product product-list">
                            <div class="row">
                                <div class="col-6 col-lg-3">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="{{ asset('https://rtechglobal.ae/frontend/images/events/decorations.jpg') }}"
                                                alt="Product image" class="product-image">
                                        </a>
                                    </figure><!-- End .product-media -->
                                </div><!-- End .col-sm-6 col-lg-3 -->

                                <div class="col-6 col-lg-3 order-lg-last">
                                    <div class="product-list-action">
                                        <div class="product-price">
                                            AED 84.00
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 0%;"></div>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 0 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                title="Quick view"><span>quick view</span></a>
                                            <a href="#" class="btn-product btn-compare"
                                                title="Compare"><span>compare</span></a>
                                        </div><!-- End .product-action -->

                                        <a href="{{ route('frontend.checkout') }}"
                                            class="btn-product btn-cart"><span>book
                                                now</span></a>
                                    </div><!-- End .product-list-action -->
                                </div><!-- End .col-sm-6 col-lg-3 -->

                                <div class="col-lg-6">
                                    <div class="product-body product-action-inner">
                                        <a href="#" class="btn-product btn-wishlist"
                                            title="Add to wishlist"><span>add to wishlist</span></a>
                                        <div class="product-cat">
                                            <a href="#">Luxury</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Lorem ipsum dolor sit amet,
                                                consectetuer
                                                dress</a></h3><!-- End .product-title -->

                                        <div class="product-content">
                                            <p>Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id,
                                                mattis vel, nisi. </p>
                                        </div><!-- End .product-content -->

                                        <div class="product-nav product-nav-thumbs">
                                            <a href="#">
                                                <img src="{{ asset('img/room1.jpg') }}" alt="product desc">
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('img/room1.jpg') }}" alt="product desc">
                                            </a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .col-lg-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .product -->

                        <div class="product product-list">
                            <div class="row">
                                <div class="col-6 col-lg-3">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="{{ asset('https://rtechglobal.ae/frontend/images/events/event-background.jpg') }}"
                                                alt="Product image" class="product-image">
                                        </a>
                                    </figure><!-- End .product-media -->
                                </div><!-- End .col-sm-6 col-lg-3 -->

                                <div class="col-6 col-lg-3 order-lg-last">
                                    <div class="product-list-action">
                                        <div class="product-price">
                                            AED 84.00
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 0%;"></div>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 0 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                title="Quick view"><span>quick view</span></a>
                                            <a href="#" class="btn-product btn-compare"
                                                title="Compare"><span>compare</span></a>
                                        </div><!-- End .product-action -->

                                        <a href="{{ route('frontend.checkout') }}"
                                            class="btn-product btn-cart"><span>book
                                                now</span></a>
                                    </div><!-- End .product-list-action -->
                                </div><!-- End .col-sm-6 col-lg-3 -->

                                <div class="col-lg-6">
                                    <div class="product-body product-action-inner">
                                        <a href="#" class="btn-product btn-wishlist"
                                            title="Add to wishlist"><span>add to wishlist</span></a>
                                        <div class="product-cat">
                                            <a href="#">Luxury</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Lorem ipsum dolor sit amet,
                                                consectetuer
                                                dress</a></h3><!-- End .product-title -->

                                        <div class="product-content">
                                            <p>Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id,
                                                mattis vel, nisi. </p>
                                        </div><!-- End .product-content -->

                                        <div class="product-nav product-nav-thumbs">
                                            <a href="#">
                                                <img src="{{ asset('img/room1.jpg') }}" alt="product desc">
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('img/room1.jpg') }}" alt="product desc">
                                            </a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .col-lg-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .product -->

                        <div class="product product-list">
                            <div class="row">
                                <div class="col-6 col-lg-3">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="{{ asset('https://rtechglobal.ae/frontend/images/events/event-background.jpg') }}"
                                                alt="Product image" class="product-image">
                                        </a>
                                    </figure><!-- End .product-media -->
                                </div><!-- End .col-sm-6 col-lg-3 -->

                                <div class="col-6 col-lg-3 order-lg-last">
                                    <div class="product-list-action">
                                        <div class="product-price">
                                            AED 84.00
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 0%;"></div>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 0 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                title="Quick view"><span>quick view</span></a>
                                            <a href="#" class="btn-product btn-compare"
                                                title="Compare"><span>compare</span></a>
                                        </div><!-- End .product-action -->

                                        <a href="{{ route('frontend.checkout') }}"
                                            class="btn-product btn-cart"><span>book
                                                now</span></a>
                                    </div><!-- End .product-list-action -->
                                </div><!-- End .col-sm-6 col-lg-3 -->

                                <div class="col-lg-6">
                                    <div class="product-body product-action-inner">
                                        <a href="#" class="btn-product btn-wishlist"
                                            title="Add to wishlist"><span>add to wishlist</span></a>
                                        <div class="product-cat">
                                            <a href="#">Luxury</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Lorem ipsum dolor sit amet,
                                                consectetuer
                                                dress</a></h3><!-- End .product-title -->

                                        <div class="product-content">
                                            <p>Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id,
                                                mattis vel, nisi. </p>
                                        </div><!-- End .product-content -->

                                        <div class="product-nav product-nav-thumbs">
                                            <a href="#">
                                                <img src="{{ asset('img/room1.jpg') }}" alt="product desc">
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('img/room1.jpg') }}" alt="product desc">
                                            </a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .col-lg-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .product -->
                    </div><!-- End .products -->

                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1"
                                    aria-disabled="true">
                                    <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item-total">of 6</li>
                            <li class="page-item">
                                <a class="page-link page-link-next" href="#" aria-label="Next">
                                    Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div><!-- End .col-lg-9 -->

            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
@endsection
