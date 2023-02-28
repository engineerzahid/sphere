<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sphere.">
    <meta name="keywords" content="Sphere">
    <meta name="author" content="newwave">
        @yield('subhead')
    <script class="u-script" type="text/javascript" src="{{ asset('dist/js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('dist/js/nicepage.js') }}" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Unified Platform",
		"logo": "{{ asset('dist/images/sphere-removebg-preview.png') }}"
}</script>
    <script src="{{ asset('dist/js/app.js') }}"></script>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('dist/css/nicepage.css') }}" />

    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

@yield('body')
</html>
