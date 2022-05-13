@extends('layout.app')

@section('title')
Login
@endsection
@section('content')
<!--Page Title-->
<section class="page-title text-center" style="background-image:url({{ asset('frontend/images/background/1.jpg') }});">
    <div class="container">
        <div class="title-text">
            <h1>login</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">home &nbsp;/</a>
                </li>
                <li>Login</li>
            </ul>
        </div>
    </div>
    </section>
    <!--End Page Title-->
    <!--login-->
<section class="login section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12 login">
                <div class="form-head">
                    <h4 class="title">Login To Your Account</h4>
                    <form action="#!" method="post">
                        <div class="form-group">
                            <input name="email" type="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" placeholder="Password">
                        </div>
                        <div class="check-and-pass">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input width-auto" id="exampleCheck1">
                                        <label class="form-check-label">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <a href="javascript:void(0)" class="lost-pass">Lost your password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="button">
                            <button type="submit" class="btn">Login Now</button>
                        </div>
                        <div class="alt-option">
                            <span>Or</span>
                        </div>
                        <div class="socila-login">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                      <li><a href="https://www.facebook.com/" class="facebook"><img src="{{ asset('frontend/images/Facebook.svg.png') }}" width="15px" height="15px"> Import From Facebook</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="javascript:void(0)" class="google"><img src="{{ asset('frontend/images/Google_Plus.svg.png') }}" width="20px" height="20px"> Import From Google Plus</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="https://www.instagram.com/" class="instagram"><img src="{{ asset('frontend/images/instagram.jpg') }}"width="15px" height="15px" > Import From Instagram</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="https://www.linkedin.com/login/ar" class="linkedin"><img src="{{ asset('frontend/images/linkedin.jpeg') }}"width="20px" height="20px" > Import From Linkedin</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="outer-link">Don't have an account? <a href="signup.html">Register here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end login-->
@endsection
