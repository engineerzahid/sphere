@extends('frontend/layout/main')
@section('subhead')
    <title>Tourism - Sphere</title>
@endsection

@section('subcontent')
    <link rel="stylesheet" href="{{ asset('dist/css/tourism.css') }}" />
    <section class="u-clearfix u-image u-shading u-section-1" id="sec-7728" data-image-width="1280" data-image-height="859">
        <div class="u-clearfix u-sheet u-sheet-1 main-row">
            <h3 class="u-text u-text-default u-text-1" data-animation-name="pulse" data-animation-duration="1000" data-animation-direction="">TOURISM</h3>
            <img class="u-image u-image-default u-image-1" src="{{asset('dist/images/image8.png')}}" alt="" data-image-width="642" data-image-height="357">
        </div>
    </section>
    <section class="u-align-center u-clearfix u-gradient u-section-2" id="sec-4358">
        <div class="u-clearfix u-sheet u-sheet-1 ">

            <div class="row-6">
            <h1 class="u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction="">Hotel Management<span style="font-weight: 700;"></span>
            </h1>
            <p class="u-align-justify u-text u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction="">
                Booking Management<br>Hotel Registration<br>Staff Management<br>Wholesaler Management<br>Room Availability<br>Issue invoice<br>Content Management System<br>Report Generate</p>
            </div>
            <div class="row-6">
            <img class="u-image u-image-default u-image-1" src="{{asset('dist/images/hoteline.png')}}" alt="" data-image-width="1361" data-image-height="593">
            </div>

            <div class="main-row">
            <div class="row-6">
                <a href="https://nicepage.com/k/blank-html-templates" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-4 u-hover-palette-4-dark-1 u-radius-6 u-btn-1">REQUEST DEMO</a>
                </div>
            <div class="row-6">
            <a href="https://nicepage.com/k/blank-html-templates" class="u-black u-border-none u-btn u-btn-round u-button-style u-hover-palette-5-light-1 u-radius-6 u-btn-2">CONTACT US</a>
            </div>
            </div>
            </div>
    </section>

@endsection

@extends('frontend/layout/footer')
