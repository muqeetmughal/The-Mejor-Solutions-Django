@extends('frontend.layouts.main')

@section('main-container')

<div role="main" class="main">

    <section class="page-header page-header-modern page-header-background bg-color-dark p-relative z-index-1 lazyload" data-bg-src={{url("frontend/img/demos/digital-agency-2/bg/OurServices.jpg")}}>
        <span class="custom-circle custom-circle-1 bg-color-light custom-circle-blur appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400"></span>
        <span class="custom-circle custom-circle-2 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="500"></span>
        <span class="custom-circle custom-circle-3 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="600"></span>
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <ul class="breadcrumb breadcrumb-light custom-title-with-icon-primary d-block">
                        <li><a href="#">Home</a></li>
                        <li class="active">Our Services</li>
                    </ul>
                    <h1 class="custom-text-10 font-weight-bold">Our Services</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-3 mt-xl-0 py-5 p-relative z-index-2">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h4 class="d-block w-100 text-color-dark custom-text-10 font-weight-bold text-center mb-4 pb-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">We Collaborate With Brands<span class="text-color-primary">.</span></h4>
                <p class="custom-font-tertiary custom-text-7 line-height-6 mb-4 text-center appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                    Over the past seven years we have defined our niche market to deliver services that speak to special technical challenges and training needs not met in the IT field, together we have all worked so hard to not just build great company but to change the landscape of IT services but to really understand what it has meant to be a part of the Mejor solutions.
                </p>
                <p class="custom-text-4 mb-4 text-center appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                    We have diversified experiences of Web development, mobile application digital marketing.  
                </p>
            </div>
        </div>
        <div class="row justify-content-center py-5">
            <div class="col-md-7 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
                <div class="approach-img bg-color-dark">
                    <div class="custom-circle custom-circle-1"></div>
                    <div class="custom-circle custom-circle-2 bg-color-dark"></div>
                    <span class="custom-circle custom-circle-our-approach-deco-1 bg-color-tertiary p-absolute d-block appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
                    <span class="custom-circle custom-circle-our-approach-deco-2 bg-color-tertiary p-absolute d-block appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
                    <span class="custom-circle custom-circle-our-approach-deco-3 bg-color-tertiary p-absolute d-block appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
                </div>							
            </div>
        </div>
    </div>

    @include('frontend.sections.services')
    <!-- @include('frontend.sections.clients') -->

    

</div>

@endsection
			