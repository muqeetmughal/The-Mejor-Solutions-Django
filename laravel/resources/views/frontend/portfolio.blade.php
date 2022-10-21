@extends('frontend.layouts.main')

@section('main-container')

<div role="main" class="main">

    <section class="page-header page-header-modern page-header-background bg-color-dark p-relative z-index-1 lazyload" data-bg-src={{url("frontend/img/demos/digital-agency-2/bg/OurWork.jpg")}}>
        <span class="custom-circle custom-circle-1 bg-color-light custom-circle-blur appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400"></span>
        <span class="custom-circle custom-circle-2 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="500"></span>
        <span class="custom-circle custom-circle-3 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="600"></span>
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <ul class="breadcrumb breadcrumb-light custom-title-with-icon-primary d-block">
                        <li><a href="#">Home</a></li>
                        <li class="active">Our Work</li>
                    </ul>
                    <h1 class="custom-text-10 font-weight-bold">Our Work</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container sticky-container">
            <div class="row justify-content-between">
                <div class="col-xl-3 position-relative">
                    <div id="sidebar" class="side-menu-our-work sidebar position-relative mb-5">
                        <div data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.sticky-container', 'padding': {'top': 140}}">
                            <h4 class="text-color-dark custom-text-8 font-weight-bold custom-title-with-icon custom-title-with-icon-primary">Filter by Category:</h4>
                            <ul class="list-unstyled sort-source sort-source-light" data-sort-id="portfolio" data-option-key="filter">
                                <li class="nav-item active" data-option-value="*">
                                    <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="text-color-quaternary text-color-hover-dark text-decoration-none mb-2 p-0 d-block font-weight-medium">View All</a>
                                </li>
                                <li class="nav-item" data-option-value=".ui-design">
                                    <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="text-color-quaternary text-color-hover-dark text-decoration-none mb-2 p-0 d-block font-weight-medium">UI Design</a>
                                </li>
                                <li class="nav-item" data-option-value=".web-development">
                                    <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="text-color-quaternary text-color-hover-dark text-decoration-none mb-2 p-0 d-block font-weight-medium">Web Development</a>
                                </li>
                                <li class="nav-item" data-option-value=".b2b-software">
                                    <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="text-color-quaternary text-color-hover-dark text-decoration-none mb-2 p-0 d-block font-weight-medium">B2B Software</a>
                                </li>
                                <li class="nav-item" data-option-value=".content-marketing">
                                    <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="text-color-quaternary text-color-hover-dark text-decoration-none mb-2 p-0 d-block font-weight-medium">Content Marketing</a>
                                </li>
                                <li class="nav-item" data-option-value=".email-marketing">
                                    <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="text-color-quaternary text-color-hover-dark text-decoration-none mb-2 p-0 d-block font-weight-medium">Email Marketing</a>
                                </li>
                                <li class="nav-item" data-option-value=".search-engine-optimize">
                                    <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="text-color-quaternary text-color-hover-dark text-decoration-none mb-2 p-0 d-block font-weight-medium">Search Engine Optimize</a>
                                </li>
                                <li class="nav-item" data-option-value=".social-media-ads">
                                    <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="text-color-quaternary text-color-hover-dark text-decoration-none mb-2 p-0 d-block font-weight-medium">Social Media Ads</a>
                                </li>
                                <li class="nav-item" data-option-value=".brand-and-identity">
                                    <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="text-color-quaternary text-color-hover-dark text-decoration-none mb-2 p-0 d-block font-weight-medium">Brand and Identity</a>
                                </li>
                                <li class="nav-item" data-option-value=".content-strategy">
                                    <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="text-color-quaternary text-color-hover-dark text-decoration-none mb-2 p-0 d-block font-weight-medium">Content Strategy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 our-work" id="ourWork">
                    <div class="sort-destination w-100" data-sort-id="portfolio">
                        <div class="row w-100 mb-4 isotope-item search-engine-optimize social-media-ads">
                            <div class="col-sm-12 custom-our-work overlay overlay-op-9 overlay-show p-0">
                                <a href="demo-digital-agency-2-our-work-detail.html" class="d-block h-100">
                                    <img src="img/demos/digital-agency-2/bg/bg-5.jpg" class="w-100 h-100">
                                    <div class="w-100 custom-our-work-text px-5 py-3 d-flex align-items-end p-absolute bottom-0">
                                        <div class="text-start p-relative z-index-2 mb-3">
                                            <h4 class="text-color-light custom-text-8 font-weight-bold text-decoration-none mb-2">Okler Campaing</h4>
                                            <p class="text-uppercase custom-text-3 text-color-quaternary text-decoration-none mb-3">search engine optimize, social media ads</p>
                                            <span class="custom-text-4 font-weight-semibold m-0 p-0 text-color-light custom-btn-with-arrow custom-btn-with-arrow-primary text-decoration-none">View Work</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row w-100 mb-4 isotope-item content-marketing email-marketing search-engine-optimize">
                            <div class="col-sm-12 custom-our-work overlay overlay-op-9 overlay-show p-0">
                                <a href="demo-digital-agency-2-our-work-detail.html" class="d-block h-100">
                                    <img src="img/demos/digital-agency-2/bg/bg-6.jpg" class="w-100 h-100">
                                    <div class="w-100 custom-our-work-text px-5 py-3 d-flex align-items-end p-absolute bottom-0">
                                        <div class="text-start p-relative z-index-2 mb-3">
                                            <h4 class="text-color-light custom-text-8 font-weight-bold text-decoration-none mb-2">Porto Dashboard</h4>
                                            <p class="text-uppercase custom-text-3 text-color-quaternary text-decoration-none mb-3">content marketing, email marketing, search engine optimize</p>
                                            <span class="custom-text-4 font-weight-semibold m-0 p-0 text-color-light custom-btn-with-arrow custom-btn-with-arrow-primary text-decoration-none">View Work</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row w-100 mb-4 isotope-item ui-design web-development b2b-software">
                            <div class="col-sm-12 custom-our-work overlay overlay-op-9 overlay-show p-0">
                                <a href="demo-digital-agency-2-our-work-detail.html" class="d-block h-100">
                                    <img src="img/demos/digital-agency-2/bg/bg-7.jpg" class="w-100 h-100">
                                    <div class="w-100 custom-our-work-text px-5 py-3 d-flex align-items-end p-absolute bottom-0">
                                        <div class="text-start p-relative z-index-2 mb-3">
                                            <h4 class="text-color-light custom-text-8 font-weight-bold text-decoration-none mb-2">Okler Responsive Photos</h4>
                                            <p class="text-uppercase custom-text-3 text-color-quaternary text-decoration-none mb-3">ui design, web development, b2b software</p>
                                            <span class="custom-text-4 font-weight-semibold m-0 p-0 text-color-light custom-btn-with-arrow custom-btn-with-arrow-primary text-decoration-none">View Work</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row w-100 mb-4 isotope-item brand-and-identity content-strategy">
                            <div class="col-sm-12 custom-our-work overlay overlay-op-9 overlay-show p-0">
                                <a href="demo-digital-agency-2-our-work-detail.html" class="d-block h-100">
                                    <img src="img/demos/digital-agency-2/bg/bg-8.jpg" class="w-100 h-100">
                                    <div class="w-100 custom-our-work-text px-5 py-3 d-flex align-items-end p-absolute bottom-0">
                                        <div class="text-start p-relative z-index-2 mb-3">
                                            <h4 class="text-color-light custom-text-8 font-weight-bold text-decoration-none mb-2">Okler Mobile App</h4>
                                            <p class="text-uppercase custom-text-3 text-color-quaternary text-decoration-none mb-3">brand and identity, content strategy</p>
                                            <span class="custom-text-4 font-weight-semibold m-0 p-0 text-color-light custom-btn-with-arrow custom-btn-with-arrow-primary text-decoration-none">View Work</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

</div>

@endsection
			