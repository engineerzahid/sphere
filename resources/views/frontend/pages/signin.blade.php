@extends('frontend/layout/main')
@section('subhead')
    <title>Sign In - Sphere</title>
@endsection

@section('subcontent')
    <link rel="stylesheet" href="{{ asset('dist/css/Signin.css') }}" />
    <section class="u-clearfix u-image u-shading u-section-1" id="sec-95aa" data-image-width="1280" data-image-height="800">
        <div class="u-clearfix u-image-contain u-sheet u-sheet-1" data-image-width="1341" data-image-height="641">
            <h3 class="u-text u-text-default u-text-1">WELCOME</h3>
            <div class="u-border-3 u-border-palette-2-light-1 u-container-style u-group u-radius-38 u-shape-round u-group-1">
                <div class="u-container-layout u-valign-top u-container-layout-1">
                    <h2 class="u-text u-text-default u-text-2">SIGN UP<span style="font-size: 2.25rem;"></span>
                    </h2>
                    <a href="https://nicepage.com/c/counter-html-templates" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-4 u-hover-custom-color-2 u-radius-6 u-btn-1">Log In</a>
                </div>
            </div>
            <div class="u-border-3 u-border-grey-90 u-shape u-shape-rectangle u-shape-1"></div>
            <p class="u-text u-text-default u-text-3">Email</p>
            <div class="u-border-3 u-border-grey-90 u-shape u-shape-rectangle u-shape-2"></div>
            <p class="u-text u-text-default u-text-4">Password</p>
        </div>
    </section>
@endsection

@extends('frontend/layout/footer')
