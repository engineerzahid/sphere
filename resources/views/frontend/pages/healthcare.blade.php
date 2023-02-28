@extends('frontend/layout/main')
@section('subhead')
    <title>Health Care - Sphere</title>
@endsection

@section('subcontent')
    <link rel="stylesheet" href="{{ asset('dist/css/Healthcare.css') }}" />
    <section class="u-align-center u-clearfix u-image u-shading u-section-1" id="sec-f422" data-image-width="1280" data-image-height="853">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction="">HEALTHCARE</h2>
            <!-- <p class="u-text u-text-2">Sample text. Click to select the text box. Click again or double click to start editing the text.</p> -->
            <img class="u-image u-image-default u-image-1" src="{{asset('dist/images/image1.png')}}" alt="" data-image-width="1363" data-image-height="651" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction="">
        </div>
    </section>
    <section class="u-clearfix u-gradient u-section-2" id="carousel_02bd">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-list-item u-repeater-item u-list-item-1">
                        <div class="u-container-layout u-similar-container u-container-layout-1">
                            <img class="u-expanded-width u-image u-image-default u-image-1" src="{{asset('dist/images/image.png')}}" alt="" data-image-width="1363" data-image-height="431">
                            <h5 class="u-text u-text-default u-text-1" data-animation-name="flipIn" data-animation-duration="1000" data-animation-direction="X">CLINICAL</h5>
                            <p class="u-text u-text-default u-text-2">Track patient's and staff information</p>
                            <p class="u-text u-text-default u-text-2">Appointment</p>
                            <p class="u-text u-text-default u-text-2">Manageable health flow services</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-list u-list-2">
                <div class="u-repeater u-repeater-2">
                    <div class="u-list-item u-repeater-item u-list-item-2">
                        <div class="u-container-layout u-similar-container u-container-layout-2">
                            <img class="u-image u-image-default u-image-2" src="{{asset('dist/images/image.png')}}" alt="" data-image-width="1363" data-image-height="431">
                            <h5 class="u-text u-text-default u-text-3" data-animation-name="flipIn" data-animation-duration="1000" data-animation-direction="X">non-CLINICAL</h5>
                            <p class="u-text u-text-default u-text-4">Monitoring equipment availability</p>
                            <p class="u-text u-text-default u-text-4">Monitoring equipment order</p>
                            <p class="u-text u-text-default u-text-4">Monitoring equipment stocks</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-row">
             <div class="row-6">
            <a href="https://nicepage.com/k/blank-html-templates" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-4 u-hover-palette-4-dark-1 u-radius-6 u-btn-1">REQUEST DEMO</a>
             </div> <div class="row-6">
            <a href="https://nicepage.com/k/blank-html-templates" class="u-black u-border-none u-btn u-btn-round u-button-style u-hover-palette-5-light-1 u-radius-6 u-btn-2">CONTACT US</a>
                </div>
        </div>
    </section>


@endsection

@extends('frontend/layout/footer')
