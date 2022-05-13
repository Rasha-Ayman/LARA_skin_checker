@extends('layout.app')

@section('title')
Team
@endsection
@section('content')
<!--Page Title-->
<section class="page-title text-center" style="background-image:url({{ asset('frontend/images/background/1.jpg') }});">
    <div class="container">
        <div class="title-text">
            <h1>team</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">home &nbsp;/</a>
                </li>
                <li>Team</li>
            </ul>
        </div>
    </div>
    </section>
    <!--End Page Title-->
    <section class="team-section section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>Great
                            <span>Team</span>
                        </h3>
                        <p>The team members have high experience in treating skin cancer and detecting it <b>Early</b></p>
                    </div>
                    <!-- Nav tabs -->
                    <div class="tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#doctor" data-toggle="tab">doctor list-1</a>
                            </li>
                            <li role="presentation">
                                <a href="#event-planning" data-toggle="tab">doctor list-2</a>
                            </li>
                            <li role="presentation">
                                <a href="#lab" data-toggle="tab">doctor list-3</a>
                            </li>
                            <li role="presentation">
                                <a href="#marketing" data-toggle="tab">doctor list-4</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <!--Start single tab content-->
                        <div class="team-members tab-pane fade in active row" id="doctor">
                            <div class="col-md-4 col-sm-6">
                                <div class="team-person text-center">
                                    <img src="  {{ asset('frontend/images/team/doctor1.jpg') }}" class="img-responsive" alt="team">
                                    <h6>Dr. Mohamed Sharaf</h6>
                                    <i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="team-person text-center">
                                    <img src="  {{ asset('frontend/images/team/doctor2.jpg') }}" class="img-responsive" alt="team">
                                    <h6>Dr. Amira Hamed</h6>
                                    <i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="team-person text-center">
                                    <img src="  {{ asset('frontend/images/team/doctor3.jpg') }}" class="img-responsive" alt="team">
                                    <h6>Dr. Walaa Eladawy</h6>
                                    <i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <!--End single tab content-->
                        <!--Start single tab content-->
                        <div class="team-members tab-pane fade in row" id="event-planning">
                            <div class="col-md-4 col-sm-6">
                                <div class="team-person text-center">
                                    <img src="  {{ asset('frontend/images/team/doctor4.jpg') }}" class="img-responsive" alt="team">
                                    <h6>Dr.Ahmed Ibrahim</h6>
                                    <i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="team-person text-center">
                                    <img src="  {{ asset('frontend/images/team/doctor5.jpg') }}" class="img-responsive" alt="team">
                                    <h6>Dr. Mohamed Mashaly</h6>
                                    <i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="team-person text-center">
                                    <img src="  {{ asset('frontend/images/team/doctor6.jpg') }}" class="img-responsive" alt="team">
                                    <h6>Dr. Hadeel Omar</h6>
                                    <i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <!--End single tab content-->
                        <!--Start single tab content-->
                        <div class="team-members tab-pane fade in row" id="lab">
                            <div class="col-md-4 col-sm-6">
                                <div class="team-person text-center">
                                    <img src="  {{ asset('frontend/images/team/doctor7.jpg') }}" class="img-responsive" alt="team">
                                    <h6>Dr. Mohamed Hady</h6>
                                    <i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="team-person text-center">
                                    <img src="  {{ asset('frontend/images/team/doctor8.jpg') }}" class="img-responsive" alt="team">
                                    <h6>Dr. Salma Yousry</h6>
                                    <i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="team-person text-center">
                                    <img src="  {{ asset('frontend/images/team/doctor9.jpg') }}" class="img-responsive" alt="team">
                                    <h6>Dr. Salah Essam</h6>
                                    <i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <!--End single tab content-->
                        <!--Start single tab content-->
                        <div class="team-members tab-pane fade in row" id="marketing">
                            <div class="col-md-4 col-sm-6">
                                <div class="team-person text-center">
                                    <img src="  {{ asset('frontend/images/team/doctor10.jpg') }}" class="img-responsive" alt="team">
                                    <h6>Dr. Eslam Elemam</h6>
                                    <i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="team-person text-center">
                                    <img src="  {{ asset('frontend/images/team/doctor11.jpg') }}" class="img-responsive" alt="team">
                                    <h6>Dr. Mohamed Diab</h6>
                                    <i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="team-person text-center">
                                    <img src="  {{ asset('frontend/images/team/doctor12.jpg') }}" class="img-responsive" alt="team">
                                    <h6>Dr. Mohee Elghobary</h6>
                                    <i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i><i class="fa fa-solid fa-star text-success" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <!--End single tab content-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
