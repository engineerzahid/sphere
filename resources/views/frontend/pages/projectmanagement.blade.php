@extends('frontend/layout/main')
@section('subhead')
    <title>Project Management - Sphere</title>
@endsection

@section('subcontent')
    <link rel="stylesheet" href="{{ asset('dist/css/Project-Management.css') }}" />
    <section class="u-clearfix u-image u-shading u-section-1" id="sec-95aa" data-image-width="1280" data-image-height="800">
        <div class="u-clearfix u-image-contain u-sheet u-sheet-1" data-image-width="1341" data-image-height="641">
            <h3 class="u-text u-text-default u-text-1">PROJECT MANAGEMENT</h3>
            <img class="u-expanded-width u-image u-image-default u-image-1" src="{{ asset('dist/images/image4.png')}}" alt="" data-image-width="1352" data-image-height="648">
        </div>
    </section>
    <section class="u-align-center u-clearfix u-gradient u-section-2" id="sec-a386">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h1 class="u-text u-text-default u-text-1">Business and Project Management</h1>
            <p class="u-text u-text-2">
                Strategy Execution Plan</p>
            <p class="u-text u-text-2">
                Strategy Initiative Monitoring</p>
            <p class="u-text u-text-2">
                Dashboard Presentation<br></p>
            <div class="main-row">
            <div class="row-6">
            <a href="https://nicepage.com/k/blank-html-templates" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-4 u-hover-palette-4-dark-1 u-radius-6 u-btn-1">REQUEST DEMO</a>
            </div>  <div class="row-6">
            <a href="https://nicepage.com/k/blank-html-templates" class="u-black u-border-none u-btn u-btn-round u-button-style u-hover-palette-5-light-1 u-radius-6 u-btn-2">CONTACT US</a>
            </div>
        </div></div>
    </section>

@endsection

@extends('frontend/layout/footer')
