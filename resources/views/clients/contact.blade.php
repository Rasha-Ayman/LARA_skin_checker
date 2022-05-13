@extends('layout.app')

@section('title')
Contact
@endsection
@section('content')
<!--Page Title-->
<section class="page-title text-center" style="background-image:url({{ asset('frontend/images/background/1.jpg') }});">
    <div class="container">
        <div class="title-text">
            <h1>contact</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">home &nbsp;/</a>
                </li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
    </section>
    <!--End Page Title-->
    <!--==================================
=            Contact Form            =
===================================-->
<section class="section contact">
    <!-- container start -->
    <div class="container">
      <div class="row">
            <div class="col-md-8">
                  <div class="section-title">
            <h3>Contact</h3>
        </div>
                <div class="contact-form">
                    <!-- contact form start -->
                    <form action="#" class="row">
                        <!-- name -->
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control main" placeholder="Name" required>
                        </div>
                        <!-- email -->
                        <div class="col-md-6">
                            <input type="email" class="form-control main" placeholder="Email" required>
                        </div>
                        <!-- phone -->
                        <div class="col-md-12">
                            <input type="text" class="form-control main" placeholder="Phone" required>
                        </div>
                        <!-- message -->
                        <div class="col-md-12">
                            <textarea name="message" rows="15" class="form-control main" placeholder="Your message"></textarea>
                        </div>
                        <!-- submit button -->
                        <div class="col-md-12 text-right">
                            <button class="btn btn-style-one" type="submit">Send Message</button>
                        </div>
                    </form>
                    <!-- contact form end -->
                </div>
            </div>
        </div>
    </div>
    <!-- container end -->
</section>
<!--====  End of Contact Form  ====-->



    @endsection
