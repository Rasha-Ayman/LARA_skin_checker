@extends('layout.app')

@section('title')
About
@endsection
@section('content')
<!--Page Title-->
<section class="page-title text-center" style="background-image:url({{ asset('frontend/images/background/1.jpg') }});">
    <div class="container">
        <div class="title-text">
            <h1>about us</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">home &nbsp;/</a>
                </li>
                <li>about us</li>
            </ul>
        </div>
    </div>
    </section>
    <!--End Page Title-->

    <!-- Our Story -->
    <section class="story">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('frontend/images/services/service-one.jpg') }}" class="responsive" alt="story">
            </div>
            <div class="col-md-6">
                <div class="story-content">
                    <h2>Our Story</h2>
                    <p>Skin cancer is considered as one of the most dangerous types of cancers
                      and there is a drastic increase in the rate of deaths due to lack of
                      knowledge on the symptoms and their prevention. Thus, early detection
                      at premature stage is necessary so that one can prevent the spreading of
                      cancer.</p>
                    <h3>Mission</h3>
                    <p>So we Decide to create a skin checker website to make it easy for people
                      to know about the disease without the need for clinics. </p>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!--Our Gallery-->
    <section class="gallery bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3>Collected Shots
                        <span>of Skin Cancer</span>
                    </h3>
                    <p>These are pictures of different types of skin cancer,
                        <br>such as non-melanoma, melanoma and other rare types...</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="{{ asset('frontend/images/gallery/gallery 1.png') }}" class="img-responsive" alt="gallery-image">
                    <a data-fancybox="images" href="images/gallery/gallery 1.png"></a>
                    <h3>Basal Cell Carcinoma</h3>
                    <p>A shiny bump or nodule</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="{{ asset('frontend/images/gallery/gallery 2.png') }}" class="img-responsive" alt="gallery-image">
                    <a data-fancybox="images" href="images/gallery/gallery 2.png"></a>
                    <h3>Basal Cell Carcinoma</h3>
                    <p>A reddish patch or irritated area</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="{{ asset('frontend/images/gallery/gallery 3.jpeg') }}" class="img-responsive" alt="gallery-image">
                    <a data-fancybox="images" href="images/gallery/gallery 3.jpeg"></a>
                    <h3>Squamous Cell Carcinoma</h3>
                    <p>An ulcer with hard, raised edges</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="{{ asset('frontend/images/gallery/gallery 4.jpg') }}" class="img-responsive" alt="gallery-image">
                    <a data-fancybox="images" href="images/gallery/gallery 4.jpg"></a>
                    <h3>Melanoma</h3>
                    <p>Big brown spot</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="{{ asset('frontend/images/gallery/gallery 5.jpg') }}" class="img-responsive" alt="gallery-image">
                    <a data-fancybox="images" href="images/gallery/gallery 5.jpg"></a>
                    <h3>Merkel Cell Carcinoma</h3>
                    <p>Tend to be firm and raised may be pink, red, or purple</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="{{ asset('frontend/images/gallery/gallery 6.jpg') }}" class="img-responsive" alt="gallery-image">
                    <a data-fancybox="images" href="images/gallery/gallery 6.jpg"></a>
                    <h3>Kaposi's Sarcoma</h3>
                    <p>Purple colored skin lesions</p>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Contact Section -->
    <section class="appoinment-section section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="accordion-section">
    <div class="section-title">
        <h3>FAQ</h3>
    </div>
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
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="contact-area">
    <div class="section-title">
        <h3>Request
            <span>Appointment</span>
        </h3>
    </div>
    <form name="contact_form" class="default-form contact-form" action="sendmail.php" method="post">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <input type="text" name="Name" placeholder="Name" required="">
                </div>
                <div class="form-group">
                    <input type="email" name="Email" placeholder="Email" required="">
                </div>
                <div class="form-group">
                  <input type="time" name="Time" placeholder="Time" required="">
                 </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <input type="text" name="Phone" placeholder="Phone" required="">
                </div>
                <div class="form-group">
                    <input type="text" name="Date" placeholder="Date" required="" id="datepicker">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                </div>
                <div class="form-group">
                  <select name="subject">
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
                    <textarea name="form_message" placeholder="Your Message" required=""></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn-style-one">submit now</button>
                </div>
            </div>
        </div>
    </form>
    </div>
            </div>
        </div>
    </div>
    </section>
    <!-- End Contact Section -->
@endsection
