
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--=====================================
                    META TAG PART START
        =======================================-->
        <!-- REQUIRE META -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- AUTHOR META -->
        <meta name="author" content="mironcoder">
        <meta name="email" content="mironcoder@gmail.com">
        <meta name="profile" content="https://themeforest.net/user/mironcoder">

        <!-- TEMPLATE META -->
        <meta name="template" content="vegana"> 
        <meta name="created" content="09-November-2020">
        <meta name="title" content="vegana - organic food html template">
        <meta name="keywords" content="vegana, organic, food, shop, ecommerce, store, html, agriculture, vegetable, organic food,  organic product, organic farm, organic life, organic shop, food store">
        <!--=====================================
                    META-TAG PART END
        =======================================-->

        <!-- FOR WEBPAGE TITLE -->
        <title>@yield('title')</title>

        <!--=====================================
                    CSS LINK PART START
        =======================================-->
        <!-- FOR FAVICON -->
        <link rel="icon" href="{{ asset('frontend') }}/images/favicon.png">

        <!-- FOR FLATICON -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/fonts/flaticon/flaticon.css">

        <!-- FOR FONT AWESOME -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/fonts/font-awesome/fontawesome.css">

        <!-- FOR SLICK SLIDER -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/vendor/slick.css">

        <!-- FOR BOOTSTRAP -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/vendor/bootstrap.min.css">

        <!-- FOR COMMON STYLE -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/custom/main.css">

        <!-- FOR HOME-1 PAGE -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/custom/index.css">
          <!-- FOR FAVICON -->
          <link rel="stylesheet" href="{{ asset('frontend') }}/css/custom/faq.css">
            <link rel="stylesheet" href="{{ asset('backend') }}/lib/toastr/toastr.css">
       
        <!--=====================================
                    CSS LINK PART END
        =======================================-->
    </head>
    <body>
        <!--=====================================
                    HEADER PART START
        =======================================-->
        <header class="header-part">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <ul class="header-info">
                            <li>
                                <i class="fas fa-envelope"></i>
                                <p>info@vegana.com</p>
                            </li>
                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <p>+12027953213</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="header-option">
                            <div class="header-curr">
                                <i class="fas fa-money-bill"></i>
                                <select class="header-select custom-select">
                                    <option class="clr" selected>currency</option>
                                    <option class="clr" value="1">Dollers</option>
                                    <option class="clr" value="2">Pound</option>
                                    <option class="clr" value="3">Euro</option>
                                </select>
                            </div>
                            <div class="header-lang">
                                <i class="fas fa-globe"></i>
                                <select class="header-select custom-select">
                                    <option class="clr" selected>language</option>
                                    <option class="clr" value="1">English</option>
                                    <option class="clr" value="2">Turkish</option>
                                    <option class="clr" value="3">italian</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--=====================================
                    HEADER PART END
        =======================================-->


        <!--=====================================
                    NAVBAR PART START
        =======================================-->
        <nav class="navbar-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navbar-element">
                            <ul class="left-widget">
                                <li><a class="icon icon-inline menu-bar" href="#"><i class="fas fa-align-left"></i></a></li>
                            </ul>
                            <a class="navbar-logo" href="#">
                                <img src="images/logo.png" alt="logo">
                            </a>
                            <form class="search-form navbar-src">
                                <input type="text" placeholder="Search anything...">
                                <button class="btn btn-inline">
                                    <i class="fas fa-search"></i>
                                    <span>search</span>
                                </button>
                            </form>
                            <ul class="right-widget">
                                <li><a class="icon icon-inline" href="signin-up.html"><i class="fas fa-user"></i></a></li>
                                <li><a class="icon icon-inline" href="wishlist.html"><i class="fas fa-heart"></i><sup>0</sup></a></li>
                                <li><a class="icon icon-inline" href="cartlist.html"><i class="fas fa-shopping-cart"></i><sup>0</sup></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navbar-slide">
                            <div class="navbar-content">
                                <div class="navbar-slide-cross">
                                    <a class="icon icon-inline cross-btn" href="#"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="navbar-slide-logo">
                                    <a href="#"><img src="images/logo.png" alt="logo"></a>
                                </div>
                                <form class="search-form mb-4 navbar-slide-src">
                                    <input type="text" placeholder="Search anything...">
                                    <button class="btn btn-inline">
                                        <i class="fas fa-search"></i>
                                        <span>search</span>
                                    </button>
                                </form> 
                                <ul class="navbar-list">
                                    <li class="navbar-item active"><a class="navbar-link" href="index.html">Home</a></li>
                                    <li class="navbar-item navbar-dropdown navbar-megamenu">
                                        <a class="navbar-link dropdown-indicator" href="#">
                                            <span>Categories</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <div class="megamenu">
                                            <ul>
                                                <li><a href="#"><i class="flaticon-groceries"></i> <span>Groceries (17)</span></a></li>
                                                <li><a href="#"><i class="flaticon-bread"></i> <span>bakery (23)</span></a></li>
                                                <li><a href="#"><i class="flaticon-vegetable"></i> <span>vegetables (42)</span></a></li>
                                                <li><a href="#"><i class="flaticon-healthy-food"></i> <span>fruits (14)</span></a></li>
                                                <li><a href="#"><i class="flaticon-salad"></i> <span>salads (21)</span></a></li>
                                                <li><a href="#"><i class="flaticon-drinks"></i> <span>drinks (36)</span></a></li>
                                                <li><a href="#"><i class="flaticon-seaweed"></i> <span>seaweeds (14)</span></a></li>
                                                <li><a href="#"><i class="flaticon-nuts"></i> <span>nuts (22)</span></a></li>
                                                <li><a href="#"><i class="flaticon-marmite"></i> <span>Nutrition (18)</span></a></li>
                                                <li><a href="#"><i class="flaticon-cereal"></i> <span>cereal (54)</span></a></li>
                                                <li><a href="#"><i class="flaticon-tofu"></i> <span>tofu (17)</span></a></li>
                                                <li><a href="#"><i class="flaticon-peas"></i> <span>Legumes (43)</span></a></li>
                                                <li><a href="#"><i class="flaticon-spread"></i> <span>Seeds (36)</span></a></li>
                                                <li><a href="#"><i class="flaticon-cheese"></i> <span>cheeses (68)</span></a></li>
                                                <li><a href="#"><i class="flaticon-milk"></i> <span>Plant Milks (45)</span></a></li>
                                                <li><a href="#"><i class="flaticon-cereal"></i> <span>cereal (23)</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="navbar-item navbar-dropdown">
                                        <a class="navbar-link dropdown-indicator" href="#">
                                            <span>Shop</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <ul class="dropdown-list">
                                            <li><a class="dropdown-link" href="product-list-1.html">Product list-1</a></li>
                                            <li><a class="dropdown-link" href="product-list-2.html">Product list-2</a></li>
                                            <li><a class="dropdown-link" href="product-list-3.html">Product list-3</a></li>
                                            <li><a class="dropdown-link" href="product-details-1.html">Product details-1</a></li>
                                            <li><a class="dropdown-link" href="product-details-2.html">Product details-2</a></li>
                                            <li><a class="dropdown-link" href="product-details-3.html">Product details-3</a></li>
                                        </ul>
                                    </li>
                                    <li class="navbar-item navbar-dropdown">
                                        <a class="navbar-link dropdown-indicator" href="#">
                                            <span>pages</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <ul class="dropdown-list">
                                            <li><a class="dropdown-link" href="cartlist.html">Cartlist</a></li>
                                            <li><a class="dropdown-link" href="wishlist.html">Wisthlist</a></li>
                                            <li><a class="dropdown-link" href="checkout.html">Checkout</a></li>
                                            <li><a class="dropdown-link" href="compare.html">Compare</a></li>
                                            <li><a class="dropdown-link" href="account.html">Account</a></li>
                                            <li><a class="dropdown-link" href="error.html">Error</a></li>
                                            <li><a class="dropdown-link" href="faq.html">Faqs</a></li>
                                            @auth
                                            <li><a class="dropdown-link" href="{{ route('login') }}">Profile</a></li>
                                            @else
                                            <li><a class="dropdown-link" href="{{ route('login') }}">Login or Register</a></li>
                                            @endauth
                                      
                                        </ul>
                                    </li>
                                    <li class="navbar-item navbar-dropdown">
                                        <a class="navbar-link dropdown-indicator" href="#">
                                            <span>blogs</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <ul class="dropdown-list">
                                            <li><a class="dropdown-link" href="blog-list-1.html">Blog list-1</a></li>
                                            <li><a class="dropdown-link" href="blog-list-2.html">Blog list-2</a></li>
                                            <li><a class="dropdown-link" href="blog-list-3.html">Blog list-3</a></li>
                                            <li><a class="dropdown-link" href="blog-details-1.html">Blog details-1</a></li>
                                            <li><a class="dropdown-link" href="blog-details-2.html">Blog details-2</a></li>
                                            <li><a class="dropdown-link" href="blog-details-3.html">Blog details-3</a></li>
                                        </ul>
                                    </li>
                                    <li class="navbar-item"><a class="navbar-link" href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!--=====================================
                    NAVBAR PART END
        =======================================-->


        <!--=====================================
                    MOBILE-MENU PART START
        =======================================-->
        <div class="btmbar-part">
            <ul class="btmbar-widget">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="wishlist.html" class="wish-icon">
                        <i class="fas fa-heart"></i>
                        <span>Wishlist</span>
                        <sup>0</sup>
                    </a>
                </li>
                <li>
                    <a href="cartlist.html" class="cart-icon">
                        <i class="fas fa-shopping-basket"></i>
                        <span>Cart</span>
                        <sup>0</sup>
                    </a>
                </li>
                <li>
                    <a href="account.html">
                        <i class="fas fa-cog"></i>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </div>
        <!--=====================================
                    MOBILE-MENU PART END
        =======================================-->

     @yield('content')

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
  


        <!--=====================================
                     FOOTER PART START
        =======================================-->
        <footer class="footer-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-content">
                            <a href="#"><img src="images/logo.png" alt="logo"></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur repudiandae quisquam adipisci asperiores, ipsum ipsa repellat assumenda dolor perspiciatis.</p>
                            <ul class="footer-icon">
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-content">
                            <h3 class="title">Useful Links</h3>
                            <div class="footer-widget">
                                <ul>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Order Tracking</a></li>
                                    <li><a href="#">Best Seller</a></li>
                                    <li><a href="#">New Arrivals</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">Location</a></li>
                                    <li><a href="#">Affiliates</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Carrer</a></li>
                                    <li><a href="#">Faq</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="footer-content">
                            <h3 class="title">Download the App</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit dicta amet tenetur soluta blanditiis at optio molestias facilis praesentium eos! Sed placeat a labore corporis aliquam reiciendis eaque quisquam corrupti.</p>
                        </div>
                        <ul class="download-app">
                            <li><a href="#"><img src="images/google-store.png" alt="google"></a></li>
                            <li><a href="#"><img src="images/app-store.png" alt="app"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--=====================================
                      FOOTER PART END
        =======================================-->
        

        <!--=====================================
                 FOOTER BOTTOM PART START
        =======================================-->
        <div class="footer-bottom">
            <div class="container">
                <p>Copyright &copy; 2020 | All rights reserved by - <a target="_blank" href="https://themeforest.net/user/mironcoder">Mironcoder</a></p>
                <ul class="pay-card">
                    <li><a href="#"><img src="{{ asset('frontend') }}/images/pay-card/01.jpg" alt="payment-1"></a></li>
                    <li><a href="#"><img src="{{ asset('frontend') }}/images/pay-card/02.jpg" alt="payment-2"></a></li>
                    <li><a href="#"><img src="{{ asset('frontend') }}/images/pay-card/03.jpg" alt="payment-3"></a></li>
                    <li><a href="#"><img src="{{ asset('frontend') }}/images/pay-card/04.jpg" alt="payment-4"></a></li>
                </ul>
            </div>
        </div>
        <!--=====================================
                 FOOTER BOTTOM PART END
        =======================================-->
        

        <!--=====================================
                    JS LINK PART START
        =======================================-->
        <!-- FOR BOOTSTRAP -->
        <script src="{{ asset('frontend') }}/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="{{ asset('frontend') }}/js/vendor/popper.min.js"></script>
        <script src="{{ asset('frontend') }}/js/vendor/bootstrap.min.js"></script>

        <!-- FOR SLICK SLIDER -->
        <script src="{{ asset('frontend') }}/js/vendor/slick.min.js"></script>
        <script src="{{ asset('frontend') }}/js/custom/slick.js"></script>
        <script src="{{ asset('frontend') }}/js/custom/price-range.js"></script>
        <!-- FOR COMMON SCRIPT -->
        <script src="{{ asset('frontend') }}/js/custom/main.js"></script>

         <script type="text/javascript" src="{{ asset('backend') }}/lib/toastr/toastr.min.js"></script>

    <script>
      @if(Session::has('message'))
        var type ="{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info':
                toastr.info(" {{Session::get('message')}} ");
                break;

            case 'success':
                toastr.success(" {{Session::get('message')}} ");
                break;

            case 'warning':
                toastr.warning(" {{Session::get('message')}} ");
                break;

            case 'error':
                toastr.error(" {{Session::get('message')}} ");
                break;
        }
    @endif
    </script> 
        <!--=====================================
                    JS LINK PART END
        =======================================-->
    </body>
</html>






