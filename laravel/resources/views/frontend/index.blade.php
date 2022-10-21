@extends('frontend.layouts.main')

@section('main-container')
<div role="main" class="main">

	<section class="section custom-circles-container section-angled bg-dark border-0 m-0" style="background-image: url({{url("frontend/img/demos/digital-agency-2/bg/Home.jpg")}}); background-size: cover; background-position: center;">
		<span class="custom-circle custom-circle-1 bg-color-light custom-circle-blur appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100" data-plugin-options="{'forceAnimation': true}"></span>
		<span class="custom-circle custom-circle-2 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="200" data-plugin-options="{'forceAnimation': true}"></span>
		<span class="custom-circle custom-circle-3 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="300" data-plugin-options="{'forceAnimation': true}"></span>
		<span class="custom-circle custom-circle-1 bg-color-light custom-circle-blur appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400" data-plugin-options="{'forceAnimation': true}"></span>
		<span class="custom-circle custom-circle-2 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="500" data-plugin-options="{'forceAnimation': true}"></span>
		<span class="custom-circle custom-circle-3 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="600" data-plugin-options="{'forceAnimation': true}"></span>
		<div class="section-angled-layer-bottom section-angled-layer-increase-angle bg-light"></div>
		<div class="section-angled-content h-100">
			<div class="container pt-md-5 pb-lg-4 mt-5 mb-lg-5">
				<div class="row pb-lg-5 mt-5 mb-lg-5">
					<div class="col-lg-7 pt-5 pt-md-0 pb-lg-5 mt-5 mb-md-5">
						<h2 class="custom-title-with-icon custom-title-with-icon-primary font-weight-normal text-color-default text-5 mb-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">Welcome to the Age of Digital Transformation</h2>
						<h1 class="text-color-light font-weight-extra-bold text-10 text-md-12-13 line-height-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="850">Experience Design and Intelligent Marketing.</h1>
						<a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="btn btn-outline custom-btn-outline btn-primary rounded-0 font-weight-semibold text-color-light bg-color-hover-primary custom-btn-with-arrow text-4 btn-px-4 py-3 mt-2 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1100">Get Started</a>
					</div>
				</div>
				<div class="spacer py-5 mt-lg-5 mb-md-5"></div>
			</div>
		</div>
	</section>

	<section class="custom-cards p-relative mb-5 pb-5 z-index-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-custom-cards">
					<div class="card border-0 bg-color-dark rounded-0 z-index-1 p-5 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">
						<div class="card-body d-flex flex-column justify-content-center align-items-center p-0 my-3">
							<img src={{url("frontend/img/demos/digital-agency-2/icons/24-7-icon.png")}} alt="Solution" class="mb-5">
							<h4 class="card-title custom-text-8 font-weight-bold text-color-light text-center mb-3">24/7 Support</h4>
							<p class="card-text text-center custom-text-4 font-weight-lighter text-color-light">We are providing 24/7 services with positive consistency.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-custom-cards">
					<div class="card border-0 bg-color-primary rounded-0 z-index-1 p-5 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
						<div class="card-body d-flex flex-column justify-content-center align-items-center p-0 my-3">
							<img src={{url("frontend/img/demos/digital-agency-2/icons/Quality-Services-Icons.png")}} alt="Solution" class="mb-5">
							<h4 class="card-title custom-text-8 font-weight-bold text-color-light text-center mb-3">Quality Services</h4>
							<p class="card-text text-center custom-text-4 font-weight-lighter text-color-light">We also sheer of quality experts of work with excellent tracking records.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-custom-cards">
					<div class="card border-0 bg-color-dark rounded-0 z-index-1 p-5 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">
						<div class="card-body d-flex flex-column justify-content-center align-items-center p-0 my-3">
							<img src={{url("frontend/img/demos/digital-agency-2/icons/Range-of-services-Icons.png")}} alt="Solution" class="mb-5">
							<h4 class="card-title custom-text-8 font-weight-bold text-color-light text-center mb-3">Range of Services</h4>
							<p class="card-text text-center custom-text-4 font-weight-lighter text-color-light">We also offer a unique range of services to our clients.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	@include('frontend.sections.services')
	
	@include('frontend.sections.work')
	
	{{-- @include('frontend.sections.approch') --}}

	{{-- @include('frontend.sections.insights') --}}

	

</div>

@endsection
			