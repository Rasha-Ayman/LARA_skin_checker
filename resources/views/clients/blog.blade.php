@extends('layout.app')

@section('title')
Blog
@endsection
@section('content')
<!--Page Title-->
<section class="page-title text-center" style="background-image:url({{ asset('frontend/images/background/1.jpg') }});">
    <div class="container">
        <div class="title-text">
            <h1>blog</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">home &nbsp;/</a>
                </li>
                <li>Blog</li>
            </ul>
        </div>
    </div>
    </section>
    <!--End Page Title-->
    <!-- Contact Section -->
<section class="blog-section style-four section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="left-side">
                    <div class="item-holder">
                        <div class="image-box">
                            <figure>
                                <a href="single-blog.html"><img src="{{ asset('frontend/images/3.jpg') }}" alt=""></a>
                            </figure>
                        </div>
                        <div class="content-text">
                            <a href="single-blog.html"><h6>Recognising Skin Cancer in Primary Care</h6></a>
                            <span>By Owain T. Jones / 16 Nov 2019 </span>
                            <p>Skin cancer, including melanoma, basal cell carcinoma and cutaneous squamous cell carcinoma, has one of the highest global incidences of any form of cancer. In 2016 more than 16,000 people were diagnosed with melanoma in the UK. </p>
                            <div class="link-btn">
                                <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC6969010/" class="btn-style-one">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="item-holder">
                        <div class="image-box">
                            <figure>
                                <a href="single-blog.html"><img src="{{ asset('frontend/images/5.jpg') }}" alt=""></a>
                            </figure>
                        </div>
                        <div class="content-text">
                            <a href="single-blog.html"><h6>What are the symptoms of skin cancer?</h6></a>
                            <span>By Amanda Barrell  / 13 May 2021</span>
                            <p>Healthcare professionals advise people to check for symptoms of skin cancer regularly throughout the year. Early detection improves the outlook of each type of skin cancer.</p>
                            <div class="link-btn">
                                <a href="https://www.medicalnewstoday.com/articles/323486" class="btn-style-one">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="item-holder">
                        <div class="image-box">
                            <figure>
                                <a href="single-blog.html"><img src="{{ asset('frontend/images/6.jpg') }}" alt=""></a>
                            </figure>
                        </div>
                        <div class="content-text">
                            <a href="single-blog.html"><h6>Disease risk scores for skin cancers</h6></a>
                            <span>By Nature Communications / 08 January 2021</span>
                            <p>We trained and validated risk prediction models for the three major types of skin cancer— basal cell carcinoma (BCC), squamous cell carcinoma (SCC), and melanoma—on a cross-sectional and longitudinal dataset of 210,000 consented research participants</p>
                            <div class="link-btn">
                                <a href="https://www.nature.com/articles/s41467-020-20246-5" class="btn-style-one">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="item-holder">
                        <div class="image-box">
                            <figure>
                                <a href="single-blog.html"><img src="{{ asset('frontend/images/7.jpg') }}" alt="" height="435px" width="823px"></a>
                            </figure>
                        </div>
                        <div class="content-text">
                            <a href="single-blog.html"><h6>Skin Cancer—The Importance of Prevention</h6></a>
                            <span>By Eleni Linos / 1 Oct 2016</span>
                            <p>In 2009, the US Preventive Services Task Force (USPSTF) found insufficient evidence to recommend skin examinations for the early detection of skin cancer in adults. The conclusion followed from a systematic review of the effectiveness and harms of clinical visual skin examinations by physicians or patient self-examinations</p>
                            <div class="link-btn">
                                <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5489348/" class="btn-style-one">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="left-side">
                      <div class="item-holder">
                          <div class="image-box">
                              <figure>
                                  <a href="single-blog.html"><img src="{{ asset('frontend/images/8.jpg') }}" alt=""></a>
                              </figure>
                          </div>
                          <div class="content-text">
                              <a href="single-blog.html"><h6>How Do You Prevent Skin Cancer?</h6></a>
                              <span>By Kalah Siegel / 15 September 2020</span>
                              <p>Dermatologists and skin cancer survivors stress that it’s not too late for sun worshippers to adopt sun-protection habits — and to be extra-vigilant about skin cancer prevention from now on, including routine screenings.</p>
                              <div class="link-btn">
                                  <a href="https://www.everydayhealth.com/skin-cancer/how-do-you-prevent-skin-cancer/" class="btn-style-one">read more</a>
                              </div>
                          </div>
                      </div>
                      <div class="item-holder">
                          <div class="image-box">
                              <figure>
                                  <a href="single-blog.html"><img src="{{ asset('frontend/images/7.jpg') }}" alt="" height="435px" width="823px"></a>
                              </figure>
                          </div>
                          <div class="content-text">
                              <a href="single-blog.html"><h6>What Is Basal Cell Carcinoma Skin Cancer?</h6></a>
                              <span>By Kalah Siegel / 15 September 2020</span>
                              <p>Skin cancer has two major classifications: nonmelanoma and melanoma. Melanoma is usually more serious. Basal cell carcinoma (BCC) falls under the nonmelanoma category, along with squamous cell carcinoma, which is the second most common form of skin cancer after BCC.</p>
                              <div class="link-btn">
                                  <a href="https://www.everydayhealth.com/skin-cancer/basal-cell-carcinoma/" class="btn-style-one">read more</a>
                              </div>
                          </div>
                      </div>
                      <div class="item-holder">
                          <div class="image-box">
                              <figure>
                                  <a href="single-blog.html"><img src="{{ asset('frontend/images/6.jpg') }}" alt=""></a>
                              </figure>
                          </div>
                          <div class="content-text">
                              <a href="single-blog.html"><h6>What Is Melanoma? Symptoms, Causes, Diagnosis, Treatment, and Prevention</h6></a>
                              <span>By Pamela Kaufman / 13 August 2020</span>
                              <p>Melanoma is most often caused by exposure to ultraviolet (UV) rays. Overexposure to UV rays — whether from the sun, sun lamps, or tanning beds — damages the DNA of genes that control skin-cell growth. These damaged genes (mutations)</p>
                              <div class="link-btn">
                                  <a href="https://www.everydayhealth.com/melanoma/" class="btn-style-one">read more</a>
                              </div>
                          </div>
                      </div>
                      <div class="item-holder">
                          <div class="image-box">
                              <figure>
                                  <a href="single-blog.html"><img src="{{ asset('frontend/images/8.jpg') }}" alt=""></a>
                              </figure>
                          </div>
                          <div class="content-text">
                              <a href="single-blog.html"><h6>A Parent’s Guide to Skin Cancer in Kids</h6></a>
                              <span>By Shari Roan / 6 July  2020</span>
                              <p>About 60,000 cases of melanoma, the most serious type of skin cancer, are diagnosed in the United States each year. Only around 450 of those affected are under the age of 20, according to CureSearch for Children’s Cancer, a foundation dedicated to driving research and innovation for children’s cancers.</p>
                              <div class="link-btn">
                                  <a href="https://www.everydayhealth.com/cancer/skin-cancer/a-parents-guide-to-skin-cancer-in-children/" class="btn-style-one">read more</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
        </div>
        <div class="styled-pagination">

        </div>
    </div>
</section>
<!-- End Contact Section -->
@endsection
