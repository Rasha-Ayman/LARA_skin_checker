@extends('layout.app')

@section('title')
Gallery
@endsection
@section('content')
<!--Page Title-->
<section class="page-title text-center" style="background-image:url({{ asset('frontend/images/background/1.jpg') }});">
    <div class="container">
        <div class="title-text">
            <h1>gallery</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">home &nbsp;/</a>
                </li>
                <li>Gallery</li>
            </ul>
        </div>
    </div>
    </section>
    <!--End Page Title-->
    <section class="video-gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>Collected Media
                            <span>of Skin Cancer</span>
                        </h3>
                    </div>
                </div>
                    <div class="col-sm-6">
                    <div class="video-gallery-item">
                        <div class="image-holder">
                            <video width="550" height="300" controls>
                                  <source src="{{ asset('frontend/video/Metastasis How Cancer Spreads.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                        <h3>
                            Metastasis: How Cancer Spreads </h3>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="video-gallery-item">
                        <div class="image-holder">
                            <video width="550" height="300" controls>
                                  <source src="{{ asset('frontend/video/What You Need to Know about Sun Safety.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                        <h3>What You Need to Know about Sun Safety</h3>
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

@endsection
