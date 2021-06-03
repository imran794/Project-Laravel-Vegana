@extends('layouts.frontend')


@section('content')




        <!--=====================================
                    BANNER PART START
        =======================================-->
        <section class="banner-part slider-arrow slider-dots">
            <!-- BANNER RIGHT CONTENT -->
            <div class="banner-1">
                <div class="banner-overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-lg-6"></div>
                            <div class="col-md-7 col-lg-6">
                                <div class="banner-content-1">
                                    @if ($right_contect)
                                    <h1>{{ $right_contect->banner_title }}</h1>
                                    <p>{{ $right_contect->banner_des }}</p>
                                    <a class="btn btn-inline" href="product-list-1.html">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>{{ $right_contect->banner_btn }}</span>
                                    </a>
                                      @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BANNER MIDDLE CONTENT -->
            <div class="banner-2">
                <div class="banner-overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="banner-content-2">
                                    @if ($middle_contect)
                                    <h1>{{ $middle_contect->banner_title }}</h1>
                                    <p>{{ $middle_contect->banner_des }}</p>
                                    <a class="btn btn-inline" href="product-list-1.html">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>{{ $middle_contect->banner_btn }}</span>
                                    </a>
                                 @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BANNER LEFT CONTENT -->
            <div class="banner-3">
                <div class="banner-overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-lg-6">
                                <div class="banner-content-3">
                                    @if ($laft_contect)
                                    <h1>{{ $laft_contect->banner_title }}</h1>
                                    <p>{{ $laft_contect->banner_des }}</p>
                                    <a class="btn btn-inline" href="product-list-1.html">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>{{ $laft_contect->banner_btn }}</span>
                                    </a>
                                       @endif
                                </div>
                            </div>
                            <div class="col-md-5 col-lg-6"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    BANNER PART END
        =======================================-->


        <!--=====================================
                    TRENDING PART START
        =======================================-->
        <section class="section trend-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2 class="title">Trending products</h2>
                            <a href="product-list-1.html" class="btn btn-outline"><i class="fas fa-eye"></i> show more</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-slider slider-arrow">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="images/product/01.jpg" alt="product">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Product Name</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del> $150</h6>
                                        <div class="product-rating">
                                            <i class="fas fa-star"></i>
                                            <span>4.5/2</span>
                                        </div>
                                    </div>
                                    <div class="product-btn">
                                        <a href="#">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>Add to Cart</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="images/product/02.jpg" alt="product">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Product Name</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del> $150</h6>
                                        <div class="product-rating">
                                            <i class="fas fa-star"></i>
                                            <span>4.5/2</span>
                                        </div>
                                    </div>
                                    <div class="product-btn">
                                        <a href="#">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>Add to Cart</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="images/product/03.jpg" alt="product">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Product Name</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del> $150</h6>
                                        <div class="product-rating">
                                            <i class="fas fa-star"></i>
                                            <span>4.5/2</span>
                                        </div>
                                    </div>
                                    <div class="product-btn">
                                        <a href="#">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>Add to Cart</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="images/product/04.jpg" alt="product">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Product Name</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del> $150</h6>
                                        <div class="product-rating">
                                            <i class="fas fa-star"></i>
                                            <span>4.5/2</span>
                                        </div>
                                    </div>
                                    <div class="product-btn">
                                        <a href="#">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>Add to Cart</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="images/product/05.jpg" alt="product">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Product Name</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del> $150</h6>
                                        <div class="product-rating">
                                            <i class="fas fa-star"></i>
                                            <span>4.5/2</span>
                                        </div>
                                    </div>
                                    <div class="product-btn">
                                        <a href="#">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>Add to Cart</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    TRENDING PART END
        =======================================-->


        <!--=====================================
                    BEST SELL PART START
        =======================================-->
        <section class="section best-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2 class="title">Best selling products</h2>
                            <a href="product-list-1.html" class="btn btn-outline"><i class="fas fa-eye"></i> show more</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-slider slider-arrow">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="images/product/06.jpg" alt="product">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Product Name</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del> $150</h6>
                                        <div class="product-rating">
                                            <i class="fas fa-star"></i>
                                            <span>4.5/2</span>
                                        </div>
                                    </div>
                                    <div class="product-btn">
                                        <a href="#">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>Add to Cart</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="images/product/07.jpg" alt="product">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Product Name</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del> $150</h6>
                                        <div class="product-rating">
                                            <i class="fas fa-star"></i>
                                            <span>4.5/2</span>
                                        </div>
                                    </div>
                                    <div class="product-btn">
                                        <a href="#">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>Add to Cart</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="images/product/08.jpg" alt="product">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Product Name</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del> $150</h6>
                                        <div class="product-rating">
                                            <i class="fas fa-star"></i>
                                            <span>4.5/2</span>
                                        </div>
                                    </div>
                                    <div class="product-btn">
                                        <a href="#">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>Add to Cart</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="images/product/09.jpg" alt="product">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Product Name</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del> $150</h6>
                                        <div class="product-rating">
                                            <i class="fas fa-star"></i>
                                            <span>4.5/2</span>
                                        </div>
                                    </div>
                                    <div class="product-btn">
                                        <a href="#">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>Add to Cart</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="images/product/10.jpg" alt="product">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Product Name</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del> $150</h6>
                                        <div class="product-rating">
                                            <i class="fas fa-star"></i>
                                            <span>4.5/2</span>
                                        </div>
                                    </div>
                                    <div class="product-btn">
                                        <a href="#">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>Add to Cart</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    BEST SELL PART END
        =======================================-->


        <!--=====================================
                    NEW PART START
        =======================================-->
        <section class="section new-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2 class="title">New products</h2>
                            <a href="product-list-1.html" class="btn btn-outline"><i class="fas fa-eye"></i> show more</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-slider slider-arrow">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="images/product/11.jpg" alt="product">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Product Name</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del> $150</h6>
                                        <div class="product-rating">
                                            <i class="fas fa-star"></i>
                                            <span>4.5/2</span>
                                        </div>
                                    </div>
                                    <div class="product-btn">
                                        <a href="#">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>Add to Cart</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="images/product/12.jpg" alt="product">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Product Name</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del> $150</h6>
                                        <div class="product-rating">
                                            <i class="fas fa-star"></i>
                                            <span>4.5/2</span>
                                        </div>
                                    </div>
                                    <div class="product-btn">
                                        <a href="#">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>Add to Cart</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="images/product/13.jpg" alt="product">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Product Name</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del> $150</h6>
                                        <div class="product-rating">
                                            <i class="fas fa-star"></i>
                                            <span>4.5/2</span>
                                        </div>
                                    </div>
                                    <div class="product-btn">
                                        <a href="#">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>Add to Cart</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="images/product/14.jpg" alt="product">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Product Name</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del> $150</h6>
                                        <div class="product-rating">
                                            <i class="fas fa-star"></i>
                                            <span>4.5/2</span>
                                        </div>
                                    </div>
                                    <div class="product-btn">
                                        <a href="#">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>Add to Cart</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="images/product/15.jpg" alt="product">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Product Name</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del> $150</h6>
                                        <div class="product-rating">
                                            <i class="fas fa-star"></i>
                                            <span>4.5/2</span>
                                        </div>
                                    </div>
                                    <div class="product-btn">
                                        <a href="#">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>Add to Cart</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                      NEW PART END
        =======================================-->


        <!--=====================================
                      BLOG PART START
        =======================================-->
        <section class="section blog-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2 class="title">Our latest blogs</h2>
                            <a href="blog-list-1.html" class="btn btn-outline"><i class="fas fa-eye"></i> show more</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-8">
                        <div class="blog-slider slider-arrow">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <img src="images/blog/01.jpg" alt="blog-1">
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="far fa-calendar-alt"></i>
                                            <span>02 feb 2020</span>
                                        </li>
                                        <li>
                                            <i class="far fa-comments"></i>
                                            <span>18 comments</span>
                                        </li>
                                    </ul>
                                    <div class="blog-text">
                                        <h3><a href="#">How to Make Your Breakfast Easy and Yummy...</a></h3>
                                    </div>
                                    <div class="read-btn">
                                        <a href="#">read more <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-card">
                                <div class="blog-img">
                                    <img src="images/blog/02.jpg" alt="blog-2">
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="far fa-calendar-alt"></i>
                                            <span>02 feb 2020</span>
                                        </li>
                                        <li>
                                            <i class="far fa-comments"></i>
                                            <span>18 comments</span>
                                        </li>
                                    </ul>
                                    <div class="blog-text">
                                        <h3><a href="#">How to Make Your Breakfast Easy and Yummy...</a></h3>
                                    </div>
                                    <div class="read-btn">
                                        <a href="#">read more <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-card">
                                <div class="blog-img">
                                    <img src="images/blog/03.jpg" alt="blog-3">
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="far fa-calendar-alt"></i>
                                            <span>02 feb 2020</span>
                                        </li>
                                        <li>
                                            <i class="far fa-comments"></i>
                                            <span>18 comments</span>
                                        </li>
                                    </ul>
                                    <div class="blog-text">
                                        <h3><a href="#">How to Make Your Breakfast Easy and Yummy...</a></h3>
                                    </div>
                                    <div class="read-btn">
                                        <a href="#">read more <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="side-blog">
                            <div class="blog-list">
                                <div class="blog-list-img">
                                    <img src="images/blog/list-1.jpg" alt="blog-list-1">
                                </div>
                                <div class="blog-list-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="far fa-calendar-alt"></i>
                                            <span>02 feb 2020</span>
                                        </li>
                                        <li>
                                            <i class="far fa-comments"></i>
                                            <span>18 comments</span>
                                        </li>
                                    </ul>
                                    <div class="blog-text">
                                        <h3><a href="#">How to Make Your Breakfast Easy and Yummy...</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-list">
                                <div class="blog-list-img">
                                    <img src="images/blog/list-2.jpg" alt="blog-list-2">
                                </div>
                                <div class="blog-list-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="far fa-calendar-alt"></i>
                                            <span>02 feb 2020</span>
                                        </li>
                                        <li>
                                            <i class="far fa-comments"></i>
                                            <span>18 comments</span>
                                        </li>
                                    </ul>
                                    <div class="blog-text">
                                        <h3><a href="#">How to Make Your Breakfast Easy and Yummy...</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-list">
                                <div class="blog-list-img">
                                    <img src="images/blog/list-3.jpg" alt="blog-list-3">
                                </div>
                                <div class="blog-list-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="far fa-calendar-alt"></i>
                                            <span>02 feb 2020</span>
                                        </li>
                                        <li>
                                            <i class="far fa-comments"></i>
                                            <span>18 comments</span>
                                        </li>
                                    </ul>
                                    <div class="blog-text">
                                        <h3><a href="#">How to Make Your Breakfast Easy and Yummy...</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                      BLOG PART END
        =======================================-->


        <!--=====================================
                    FEATURE PART START
        =======================================-->
        <section class="feature-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <div class="feature-card">
                            <i class="flaticon-delivery-truck"></i>
                            <h3>Free Delivery</h3>
                            <p>Tempora odio reiciendis incidunt tenetur deserunt dolores autem beatae</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="feature-card">
                            <i class="flaticon-save-money"></i>
                            <h3>Instant Return</h3>
                            <p>Tempora odio reiciendis incidunt tenetur deserunt dolores autem beatae</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="feature-card">
                            <i class="flaticon-customer-service"></i>
                            <h3>Quick Support</h3>
                            <p>Tempora odio reiciendis incidunt tenetur deserunt dolores autem beatae</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    FEATURE PART END
        =======================================-->


        <!--=====================================
                    NEWSLETTER PART START
        =======================================-->
        <section class="news-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-6">
                        <div class="news-content">
                            <h2>Subscribe for Latest Offers</h2>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6">
                        <form class="search-form news-form">
                            <input type="text" placeholder="Enter Email Address">
                            <button class="btn btn-inline">
                                <i class="fas fa-envelope"></i>
                                <span>Subscribe</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    NEWSLETTER PART END
        =======================================-->

        @endsection