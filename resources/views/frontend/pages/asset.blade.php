@extends('frontend/layout/main')
@section('subhead')
    <title>Asset - Sphere</title>
@endsection

@section('subcontent')
    <link rel="stylesheet" href="{{ asset('dist/css/Asset.css') }}" />
    <section class="u-clearfix u-image u-shading u-section-1" id="sec-99ea" data-image-width="4980" data-image-height="3398">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000">ASSET MANAGEMENT<span style="font-weight: 700;"></span>
            </h3>
            <img class="u-expanded-width u-image u-image-default u-image-1" src="{{ asset('dist/images/image5.png')}}" alt="" data-image-width="1314" data-image-height="470" data-animation-name="customAnimationIn" data-animation-duration="1000">
        </div>
    </section>
    <section class="u-align-left u-clearfix u-gradient u-section-2" id="sec-bc1b">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="fr-view u-clearfix u-rich-text u-text u-text-1">
                <h1 style="text-align: left;">
                    <span style="line-height: 2.0;">Asset Management System</span>
                </h1>
                <p style="text-align: left;">
            <span style="line-height: 2.0;">
              Asset Management System Features:<br>Manage Asset<br>Preventive Maintenance Schedule<br>Business Categories
            </span>   </p>
            </div>

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
