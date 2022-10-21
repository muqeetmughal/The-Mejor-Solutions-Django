<section class="our-services p-relative py-5 my-5">
    <span class="custom-circle custom-circle-2 bg-color-quaternary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
    <div class="container">
        <div class="row justify-content-center">
            <h4 class="text-color-dark custom-text-10 font-weight-bold text-center custom-title-with-icon-center custom-title-with-icon custom-title-with-icon-primary pb-5 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">We Can Help You With:</h4>
        </div>
        <div class="row">
            @php

            $dark="text-color-light bg-color-dark";
            $tertiary = "text-color-dark bg-color-tertiary";

            $current_service_theme = $tertiary;

                
            @endphp



            @foreach ($services as $service)


            

                <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <a href={{"/services/".$service->slug}} class="text-decoration-none">
                        <div class="service-card mb-4 bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-6 line-height-6 p-relative {{$current_service_theme}}">
                            {{$service->title}}
                        </div>
                    </a>
                </div>


                @php

                if ($current_service_theme == $tertiary){
                    $current_service_theme = $dark;
                }else{
                    $current_service_theme = $tertiary;
                }

                

                    
                    
                @endphp

                        
                        
            @endforeach
            
        
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <p class="custom-text-4 mt-4 mb-0 text-center appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                    If there is one thing that stands true about TMC is that we will continue true about Mejor solutions is that we will continue to seek growth and stay ahead of technology curves, we not only seek to bring lights of technologies and we also strive bring more radical to the IT market place, we will continue to embrace training and tech those comings behind us the technology languages, software and standards that are crucial for global systems, in addition we will work with companies , organizations and the government to develop IT business solutions that can run their resources efficiently and without failure.
                </p>
            </div>
        </div>
    </div>
</section>