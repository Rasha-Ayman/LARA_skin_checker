@extends('layout.app')

@section('title')
Service
@endsection
@section('content')
<!--Page Title-->
<section class="page-title text-center" style="background-image:url({{ asset('frontend/images/background/1.jpg') }});">
    <div class="container">
        <div class="title-text">
            <h1>service</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">home &nbsp;/</a>
                </li>
                <li>service</li>
            </ul>
        </div>
    </div>
    </section>
    <!--End Page Title-->
    <section class="service-overview section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="content-block">
                        <h2>Our Objective</h2>
                        <p>This website is about skin cancer detection.It provides a lot of services and guarantees high accuracy in diagnostic results.
                        </p>
                        <a href="appointment.html" class="btn btn-style-one">Appoint</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion-section">
                        <div class="accordion-holder">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                What is Skin Checker?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            Skin Checker is a regulated medical service that takes control over your skin health to a new level. It expands your ability to self-examine your skin and elevates your knowledge when to act, how and why. It is designed to provide accurate and timely skin cancer detection.
                                          </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                What are the symptoms of skin cancer?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            Most cancers have some pretty obvious signs, including lumps and bumps, tenderness, pain or sickness. But when it comes to skin cancer symptoms, they aren’t always as plain to see. Skin cancer is slow-growing and often free of glaring warning signs. This can make early detection tricky.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                Know more about our application
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                          It has more advantages as it provides a chat between the patient and the dermatologist to answer the patient's questions,also provides a chatbot to answer the patient's questions at any time,provides a community of patients with psychological support,reminds patients of their appointments with the dermatologist or medicines and recommends pharmacies close to users of the application.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!--Service Section-->
<section class="service-section bg-gray section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Provided
                <span>Services</span>
            </h3>
            <p>The site provides many services to users.</p>
        </div>
        <div class="row items-container clearfix">
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="{{ asset('frontend/images/gallery/diagnosis.jpg') }}" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service For Free</span>
                        <a href="service.html">
                            <h6> Diagnosis</h6>
                        </a>
                        <p>By uploading a skin image.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="{{ asset('frontend/images/gallery/appointment.jpg') }}" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service For Free</span>
                        <a href="service.html">
                            <h6>Appointment booking online.</h6>
                        </a>
                        <p>Through website</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="{{ asset('frontend/images/gallery/articles.png') }}" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service For Free</span>
                        <a href="service.html">
                            <h6>More information about the disease</h6>
                        </a>
                        <p>By publishing articles.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="{{ asset('frontend/images/gallery/dermatologists.jpeg') }}" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service For Free</span>
                        <a href="service.html">
                            <h6>Recommend Best Dermatologists</h6>
                        </a>
                        <p>Based on the highest ratings.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Service Section-->

@endsection
