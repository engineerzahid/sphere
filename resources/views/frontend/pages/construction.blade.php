@extends('frontend/layout/main')
@section('subhead')
    <title>Constructions - Sphere</title>
@endsection

@section('subcontent')
    <link rel="stylesheet" href="{{ asset('dist/css/Construction.css') }}" />
    <section class="u-clearfix u-image u-shading u-section-1" id="sec-a785" data-image-width="5531" data-image-height="3586">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000">CONSTRUCTION AND BUILDING<span style="font-weight: 700;"></span>
            </h3>
            <!-- <p class="u-text u-text-default u-text-2">Sample text. Click to select the Text Element.</p> -->
            <img class="u-image u-image-1" src="{{ asset('dist/images/image2.png')}}" data-image-width="1366" data-image-height="768" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction="">
        </div>
    </section>
    <section class="u-align-center u-clearfix u-gradient u-section-2" id="sec-f188">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-text-default u-text-1" data-animation-name="flipIn" data-animation-duration="1000" data-animation-direction="X">Design Perfection</h1>
            <p class="u-text u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1000">
                Manage Procurement<br>Dashboard Presentation<br>Routine Checklist
            </p>
            <div class="main-row">
                <div class="row-6">
                    <a href="https://nicepage.com/k/blank-html-templates" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-4 u-hover-palette-4-dark-1 u-radius-6 u-btn-1">REQUEST DEMO</a>
                </div>  <div class="row-6">
                    <a href="https://nicepage.com/k/blank-html-templates" class="u-black u-border-none u-btn u-btn-round u-button-style u-hover-palette-5-light-1 u-radius-6 u-btn-2">CONTACT US</a>
                </div>
            </div>

         </div>
    </section>


@endsection

@extends('frontend/layout/footer')
