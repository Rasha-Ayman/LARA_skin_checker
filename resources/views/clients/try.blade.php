@extends('layout.app')

@section('title')
Try
@endsection
@section('content')
<!--Page Title-->
<section class="page-title text-center" style="background-image:url({{ asset('frontend/images/background/1.jpg') }});">
    <div class="container">
        <div class="title-text">
            <h1>try</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">home &nbsp;/</a>
                </li>
                <li>Try</li>
            </ul>
        </div>
    </div>
    </section>
    <!--End Page Title-->
    <!--Try-->
<section class="try-section section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
					<div class="section-title text-center">
						<h3>Welcome To Skin Cancer Prediction</h3>
                                    </div>
                                    <form>
                                    <div class="form-group">
                                    <label>Choose File</label>
                                    <input type="file" width="100%" class="file">
                                    <div class="button">
                                          <button type="submit" class="btn1">Submit</button>
                                      </div>
                                    </form>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </section>
<!--end Try-->

    @endsection
