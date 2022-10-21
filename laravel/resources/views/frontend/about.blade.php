@extends('frontend.layouts.main')

@section('main-container')
			<div role="main" class="main">

				<section class="page-header page-header-modern page-header-background bg-color-dark p-relative z-index-1 lazyload" data-bg-src={{url("frontend/img/demos/digital-agency-2/bg/AboutUs.jpg")}}>
					<span class="custom-circle custom-circle-1 bg-color-light custom-circle-blur appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400"></span>
					<span class="custom-circle custom-circle-2 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="500"></span>
					<span class="custom-circle custom-circle-3 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="600"></span>
					<div class="container">
						<div class="row mt-5">
							<div class="col">
								<ul class="breadcrumb breadcrumb-light custom-title-with-icon-primary d-block">
									<li><a href="#">Home</a></li>
									<li class="active">About Us</li>
								</ul>
								<h1 class="custom-text-10 font-weight-bold">About Us</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container p-relative z-index-2 mt-0 mt-lg-3 mt-xl-0 pt-0 pt-md-4 pt-lg-5 pb-xl-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
					
					<div class="row justify-content-between mt-5 mt-xl-0 mb-lg-4">
						<div class="col-xl-5 d-flex flex-column justify-content-end">
							<p class="custom-font-tertiary custom-text-7 mb-4" style="text-align: justify;">
								The Mejor Solutions inspired to bring about global change in otherwise dulled out technological world TMC delivered and maintains network around 20 sites over 10,000 employees our company’s solutions range from handling five million customer interactions yearly for clients for offshore and near shore locations, we offer permanent & contractual opportunities with internal growth ,  TMC made painstakingly make the list in a unique honor that underscores the success for organization that has realized despite challenging years our goal throughout the practices that always been to help its clients grown in value that increase profits & promote sustainability , this is not the first time that the skyrocketing IT company has made headlines , either TMC landed on Inc. magazine’s 4000 fastest growing private companies, we providing the possible solutions for the cases like web development , digital marketing , mobile application and development we eradicate the lackadaisical points of our clients  with strength full confidence.
							</p>
							
						</div>
						<div class="col-xl-7 py-4 py-xl-0">
							<img class="img-fluid" src={{url("frontend/img/demos/digital-agency-2/about-us/AboutUs2ndImage.jpg")}} alt="About Us">
							<ul class="custom-list list-unstyled my-3">
								<li class="font-weight-medium custom-text-4 mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">The Mejor Solutions Team, 2022</li>
							</ul>
						</div>
					</div>
				</div>

				@include('frontend.sections.features')
			

				{{-- <section class="our-approach py-5">
					<div class="container pb-5">
						<div class="row">
							<div class="col-xl-4 pb-5 pb-xl-0 ">
								<div class="approach-img bg-color-dark">
									<div class="custom-circle custom-circle-1"></div>
									<div class="custom-circle custom-circle-2 bg-color-dark"></div>
									<span class="custom-circle custom-circle-our-approach-deco-1 bg-color-tertiary p-absolute d-block appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
									<span class="custom-circle custom-circle-our-approach-deco-2 bg-color-tertiary p-absolute d-block appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
									<span class="custom-circle custom-circle-our-approach-deco-3 bg-color-tertiary p-absolute d-block appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
								</div>
							</div>
							<div class="col-xl-8 d-flex flex-column justify-content-center align-items-start ps-5">
								<p class="custom-font-tertiary custom-text-6 line-height-6 font-weight-medium appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut tellus ante. Nam suscipit urna risus.</p>
								<p class="custom-text-3 mb-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero.</p>
								<a herf="demo-digital-agency-2-contact-us.html" class="btn btn-outline custom-btn-outline btn-primary rounded-0 text-color-dark custom-text-4 bg-color-hover-transparent text-color-hover-light font-weight-semibold custom-btn-with-arrow px-4 py-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">Get in Touch</a>
							</div>
						</div>
					</div>
				</section> --}}

				{{-- @include('frontend.sections.insights') --}}

				
			</div>
	
@endsection