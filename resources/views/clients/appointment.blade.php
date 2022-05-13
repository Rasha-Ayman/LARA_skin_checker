@extends('layout.app')

@section('title')
Appointment
@endsection
@section('content')
<!--Page Title-->
<section class="page-title text-center" style="background-image:url({{ asset('frontend/images/background/1.jpg') }});">
    <div class="container">
        <div class="title-text">
            <h1>appointment</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">home &nbsp;/</a>
                </li>
                <li>Appointment</li>
            </ul>
        </div>
    </div>
    </section>
    <!--End Page Title-->
    <!-- Contact Section -->
<section class="blog-section section style-three pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="contact-area style-two">
                    <div class="section-title">
                        <h3>Request <span>Appointment</span></h3>
                    </div>
                    <form name="contact_form" class="default-form contact-form" action={{url('appointment')}} method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>
                                <div class="form-group">
                                    <input type="time" name="time" placeholder="Time" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="Phone" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="date" placeholder="Date" required="" id="datepicker">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </div>
                                <div class="form-group">
                                  <select name="dermatologist">
                                    <option>Dermatologist</option>
                                    <option>Dr.Mohamed Sharaf</option>
                                    <option>Dr.Amira Hamed</option>
                                    <option>Dr.Walaa Eladawy</option>
                                    <option>Dr.Ahmed Ibrahim</option>
                                    <option>Dr.Mohamed Mashaly</option>
                                    <option>Dr.Hadeel Omar</option>
                                    <option>Dr.Mohamed Hady</option>
                                    <option>Dr.Salma Yousry</option>
                                    <option>Dr.Salah Essam</option>
                                    <option>Dr.Eslam Elemam</option>
                                    <option>Dr.Mohamed Diab</option>
                                    <option>Dr.Mohee Elghobary</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="message" placeholder="Your Message" required=""></textarea>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn-style-one">submit now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="appointment-image-holder">
                    <figure>
                        <img src="{{ asset('frontend/images/background/appoinment.jpg') }}" alt="Appointment">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Section -->
<!--team section-->
<section class="team-section section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Our Expert
                <span>Dermatologists</span>
            </h3>
            <p>The team members have high experience in treating skin cancer and detecting it Early</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">

                    <img src="{{ asset('frontend/images/team/doctor1.jpg') }}" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4>Dr. Mohamed Sharaf</h4>
                        <i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true">
                        </i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i>

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="{{ asset('frontend/images/team/doctor2.jpg') }}" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4>Dr. Amira Hamed</h4>
                        <i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i>

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="{{ asset('frontend/images/team/doctor3.jpg') }}" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4>Dr. Walaa Eladawy</h4>
                         <i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true">
                         </i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End team section-->
    @endsection
