
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
        <meta name="name" content="vegana">
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

        <!-- FOR BOOTSTRAP -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/vendor/bootstrap.min.css">

        <!-- FOR COMMON STYLE -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/custom/main.css">

        <!-- FOR SIGNIN-UP PAGE -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/custom/signin-up.css">
        <!--=====================================
                    CSS LINK PART END
        =======================================-->
    </head>
    <body>
        <!--=====================================
                    SIGNIN-UP PART START
        =======================================-->
        <section class="sign-part">
            <div class="sign-content">
                <div class="content-cover">
                    <a href="#"><img src="images/logo.png" alt="logo"></a>
                    <h1>Biggest online vegan food ecommerce store in worldwide.</h1>
                </div>
            </div>
            <div class="sign-form">
                <div class="back-arrow">
                    <a href="#"><img src="images/logo.png" alt="logo"></a>
                    <a href="index.html"><i class="fas fa-arrow-left"></i></a>
                </div>
                <div class="sign-cate">
                    <ul class="nav nav-tabs">
                        <li><a href="#signin" class="nav-link active" data-toggle="tab">sign in</a></li>
                        <li><a href="#signup" class="nav-link" data-toggle="tab">sign up</a></li>
                    </ul>
                </div>

                <!-- SIGN IN TAB CONTENT -->
                <div class="tab-pane active" id="signin">
                    <div class="sign-heading">
                        <h2>Login</h2>
                        <p>Use credentials to access your account.</p>
                    </div>
                       <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <label class="form-label">
                            <input type="text" placeholder="Email" name="email">
                            <small>Please follow this example - mironcoder@gmail.com</small>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </label>
                        <label class="form-label">
                            <input type="password" id="pass" placeholder="Password" name="password">
                            <button type="button"><i class="eye fas fa-eye"></i></button>
                            <small>Password must be 6 characters</small>
                               @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </label>
                        <label class="form-link">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="signin-check">
                                <label class="custom-control-label" for="signin-check">Remember me</label>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                            </div>
                            <a href="#">Forgot password?</a>
                        </label>
                        <label class="form-btn">
                            <button type="submit" class="btn btn-outline">sign in now</button>
                        </label>
                    </form>
                    <div class="form-bottom">
                        <p>Don't have an account? click on the <span>( sign up )</span> button above.</p>
                    </div>
                </div>

                <!-- SIGN UP TAB CONTENT -->
                <div class="tab-pane" id="signup">
                    <div class="sign-heading">
                        <h2>Register</h2>
                        <p>Setup a new account in a minute.</p>
                    </div>
                    <ul class="form-option">
                        <li><a href="#">
                            <i class="fab fa-facebook-f"></i>
                            <span>facebook</span>
                        </a></li>
                        <li><a href="#">
                            <i class="fab fa-twitter"></i>
                            <span>twitter</span>
                        </a></li>
                        <li><a href="#">
                            <i class="fab fa-google"></i>
                            <span>google</span>
                        </a></li>
                    </ul>
                    <div class="or-text">
                        <p>or</p>
                    </div>
                     <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <label class="form-label">
                            <input type="text" placeholder="Name" name="name">
                            <small>Please follow this example - Imran</small>
                             @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </label>
                        <label class="form-label">
                            <input type="text" placeholder="Email" name="email">
                            <small>Please follow this example - Imran@gmail.com</small>
                             @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </label>
                        <label class="form-label">
                            <input type="text" placeholder="Phone number" name="number">
                            <small>Please follow this example - 01XXXXXXXXX</small>
                              @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </label>
                        
                        <label class="form-label">
                            <input type="password" id="pass" placeholder="Password" name="password">
                            <button type="button"><i class="eye fas fa-eye"></i></button>
                            <small>Password must be 6 characters</small>
                             @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </label>
                        <label class="form-label">
                            <input type="password" id="pass" placeholder="Repeat Password" name="password_confirmation">
                            <button type="button"><i class="eye fas fa-eye"></i></button>
                            <small>Password must be 6 characters</small>
                        </label>
                        <div class="form-link">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="signup-check">
                                <label class="custom-control-label" for="signup-check">I agree to the all <a href="#">terms & consitions</a> of bebostha.</label>
                            </div>
                        </div>
                        <div class="form-btn">
                            <button type="submit" class="btn btn-outline">sign up free</button>
                        </div>
                    </form>
                    <div class="form-bottom">
                        <p>Already have an account? click on the <span>( sign in )</span> button above.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    SIGNIN-UP PART END
        =======================================-->

        
        <!--=====================================
                    JS LINK PART START
        =======================================-->
        <!-- FOR BOOTSTRAP -->
        <script src="{{ asset('frontend') }}/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="{{ asset('frontend') }}/js/vendor/popper.min.js"></script>
        <script src="{{ asset('frontend') }}/js/vendor/bootstrap.min.js"></script>

        <!-- FOR COMMON SCRIPT -->
        <script src="{{ asset('frontend') }}/js/custom/main.js"></script> 
        <!--=====================================
                    JS LINK PART END
        =======================================-->
    </body>
</html>


























