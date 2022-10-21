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
                    <h1 class="custom-text-10 font-weight-bold">{{$service->title}}</h1>
                   
                </div>
            </div>
        </div>
    </section>

    <section class="mt-3 mt-xl-0 py-5 p-relative z-index-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 our-services">
                    <h4 class="text-color- custom-text-8 font-weight-bold custom-title-with-icon custom-title-with-icon-primary mb-4 pb-3">We Can Help You With:</h4>
                    <div class="row flex-column pb-lg-5">


                        @foreach ($services as $service)

                            <div class="col">
                                <a href={{$service->slug}} class="text-decoration-none">
                                    <div class="service-card ps-5 py-4 mb-4 bg-color-dark bg-color-hover-primary w-100 font-weight-semibold custom-text-4 line-height-6 text-color-light p-relative">
                                        {{$service->title}}
                                    </div>
                                </a>
                            </div>
                            
                        @endforeach
                        
                        


                        {{-- <div class="col">
                            <a href="demo-digital-agency-2-our-services-detail.html" class="text-decoration-none">
<div class="service-card ps-5 py-4 mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-4 line-height-6 text-color-dark p-relative">
                                    B2B Software
                                </div>
                            </a>
                        </div> --}}
                   
                    </div>
                </div>
                <div class="col-xl-8 mt-lg-5 mt-xl-0">
                    {!!$content!!}
                </div>
            </div>
        </div>
    </section>

   

</div>


@endsection
			