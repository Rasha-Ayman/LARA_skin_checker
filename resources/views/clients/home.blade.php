@extends('layout.app')

@section('title') Home Page @endsection

@section('content')


<!--=================================
=            Page Slider            =
==================================-->
<div class="hero-slider">
    <!-- Slider Item -->

    <div class="slider-item slide1" style="background-image:url( {{ asset('frontend/images/slider/slider-bg-1.jpg ') }})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start -->
                    <div class="content style text-center">
                        <h2 class="text-white text-bold mb-2">Our Best Dermatologists</h2>
                        <p class="tag-text mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel sunt animi sequi ratione quod at earum. <br>
                             Quis quos officiis numquam!</p>
                        <a href="#" class="btn btn-main btn-white">explore</a>
                    </div>
                    <!-- Slide Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Item -->
    <div class="slider-item" style="background-image:url( {{ asset('frontend/images/slider/slider-bg-2.jpg ') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start-->
                    <div class="content style text-right">
                        <h2 class="text-white">We Care About <br>Your Health</h2>
                        <p class="tag-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                        <a href="#" class="btn btn-main btn-white">about us</a>
                    </div>
                    <!-- Slide Content End-->
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Item -->
    <div class="slider-item" style="background-image:url( {{ asset('frontend/images/slider/slider-bg-3.jpg ') }})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start -->
                    <div class="content text-center style">
                        <h2 class="text-white text-bold mb-2">Best Medical Services</h2>
                        <p class="tag-text mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae deserunt,
                            <br>eius pariatur minus itaque nostrum.</p>
                        <a href="shop.html" class="btn btn-main btn-white">shop now</a>
                    </div>
                    <!-- Slide Content End -->
                </div>
            </div>
        </div>
    </div>
</div>

<!--====  End of Page Slider  ====-->

<section class="cta">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cta-block">
                    <div class="top-doctor item">
                        <i class="fa fa-stethoscope"></i>
                        <h2>24 Hour Service</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore dignissimos officia dicta suscipit vel eum</p>
                        <a href="#" class="btn btn-main">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--about section-->
<section class="feature-section section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="image-content">
					<div class="section-title text-center">
						<h3>Best Features
							<span>of Our Website</span>
						</h3>
						<p>The website has many advantages, including:</p>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="#">
											<img src="{{ asset('frontend/images/resource/1.jpg') }}" alt="">
										</a>
									</figure>
								</div>
								<h6>Saving time and effort
                                </h6>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur
									at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="#">
											<img src="{{ asset('frontend/images/resource/2.jpg') }}" alt="">
										</a>
									</figure>
								</div>
								<h6>Security</h6>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur
								at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="#">
											<img src="{{ asset('frontend/images/resource/3.png') }}" alt="">
										</a>
									</figure>
								</div>
								<h6>Diagnostic accuracy</h6>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur
								at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="#">
											<img src="{{ asset('frontend/images/resource/forfree.png') }}" alt="">
										</a>
									</figure>
								</div>
								<h6>For Free</h6>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur
								at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End about section-->

<!--Start about us area-->
<!--End about us area-->

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

<!--testimonial-section-->
<section class="testimonial-section" style="background: url({{ asset('frontend/images/testimonials/1.jpg') }});">
    <div class="container">
        <div class="section-title text-center">
            <h3>What Our
                <span>Patients Says</span>
            </h3>
        </div>
        <div class="testimonial-carousel">
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="{{ asset('frontend/images/testimonials/1.png') }}" alt="">
                        </figure>
                    </div>
                    <h6>Mohamed Ahmed</h6>
                    <p>Wonderful website! Hopefully in the future more people will get to know about this so that more  cases of skin cancer can be found earlier.</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="{{ asset('frontend/images/testimonials/2.png') }}" alt="">
                        </figure>
                    </div>
                    <h6>Ahmed Ali</h6>
                    <p>I fully recommend Skin checker, the website turned out to be accurate in my case so far. Special thanks to the developers for this great work.</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="{{ asset('frontend/images/testimonials/3.png') }}" alt="">
                        </figure>
                    </div>
                    <h6>Amr Mohamed</h6>
                    <p>This is a great website to use to check your skin, especially your moles. I had one that I found suspicious and by using the website I found out it was just normal and did need to be worried.</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="{{ asset('frontend/images/testimonials/1.png') }}" alt="">
                        </figure>
                    </div>
                    <h6>Adam Alaa</h6>
                    <p>Wonderful website! Hopefully in the future more people will get to know about this so that more  cases of skin cancer can be found earlier.</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="{{ asset('frontend/images/testimonials/2.png') }}" alt="">
                        </figure>
                    </div>
                    <h6>Mahmoud Ali</h6>
                    <p>I fully recommend Skin checker, the website turned out to be accurate in my case so far. Special thanks to the developers for this great work.</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="{{ asset('frontend/images/testimonials/3.png') }}" alt="">
                        </figure>
                    </div>
                    <h6>Hazem Suliman</h6>
                    <p>This is a great website to use to check your skin, especially your moles. I had one that I found suspicious and by using the website I found out it was just normal and did need to be worried.</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="{{ asset('frontend/images/testimonials/1.png') }}" alt="">
                        </figure>
                    </div>
                    <h6>Ayman Ali</h6>
                    <p>Wonderful website! Hopefully in the future more people will get to know about this so that more  cases of skin cancer can be found earlier.</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="{{ asset('frontend/images/testimonials/2.png') }}" alt="">
                        </figure>
                    </div>
                    <h6>Emad Salem</h6>
                    <p>I fully recommend Skin checker, the website turned out to be accurate in my case so far. Special thanks to the developers for this great work.</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="{{ asset('frontend/images/testimonials/3.png') }}" alt="">
                        </figure>
                    </div>
                    <h6>Adam Ahmed</h6>
                    <p>This is a great website to use to check your skin, especially your moles. I had one that I found suspicious and by using the website I found out it was just normal and did need to be worried.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End testimonial-section-->

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
