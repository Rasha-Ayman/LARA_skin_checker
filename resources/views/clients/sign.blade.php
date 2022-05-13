@extends('layout.app')

@section('title')
Sign Up
@endsection
@section('content')
<!--Page Title-->
<section class="page-title text-center" style="background-image:url({{ asset('frontend/images/background/1.jpg') }});">
    <div class="container">
        <div class="title-text">
            <h1>registration</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">home &nbsp;/</a>
                </li>
                <li>Registration</li>
            </ul>
        </div>
    </div>
    </section>
    <!--End Page Title-->
    <!--registration-->

<section class="login registration section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12 signup">
                <div class="form-head">
                    <h4 class="title">Registration</h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="#!" method="post" enctype="multipart/form-data">
                        @csrf
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
                        <div class="alt-option">
                            <span>Or</span>
                        </div>
                        <div class="form-group">
                            <input name="password" type="text" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" placeholder="Confirm Password">
                        </div>
                        Sign as :  </br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="FlexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">
                            Dermatologist
                          </label>
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="FlexRadioDefault2">
                          <label class="form-check-label" for="flexRadioDefault2">
                            Patient
                          </label>
                        </div>
                        <div class="check-and-pass">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <div class="form-check">
                                        <input type="checkbox" class=" width-auto" id="exampleCheck1">
                                        <label class="form-check-label">Agree to our <a href="javascript:void(0)">Terms and
                                                Conditions</a></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button">
                            <button type="submit" class="btn">Sign Up</button>
                        </div>
                        <p class="outer-link">Already have an account? <a href="login.html"> Login Now</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end registration-->
@endsection
