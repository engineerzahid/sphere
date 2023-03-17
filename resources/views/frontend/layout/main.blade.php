@extends('frontend/layout/base')
@section('body')
    <style>
        @media only screen and (max-width: 700px) {
            .u-header .u-text-1 {
               display: none;
            }
            .u-section-1 .u-text-1{
                margin: 0px !important;
            }
            .u-section-1 .u-container-layout-1 {
                padding-top: 0px!important;
                padding-bottom: 0px !important;
            }
            .u-section-3 .u-image-1{
                height: auto;
                width: 100%;
            }
        }

    </style>
    <body class="u-body u-image u-xl-mode" data-lang="en" style="background-position: 50% 50%; background-attachment: scroll; background-image: url({{asset('dist/images/default-image-8.jpg')}});">
    <header class="u-clearfix u-header u-sticky u-sticky-919e u-white u-header" id="sec-b758">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href="/" class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500">
                <img src="{{ @asset('dist/images/sphere-removebg-preview.png') }}" class="u-logo-image u-logo-image-1">
            </a>
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
                    <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-decoration u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                        <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
                        <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
                            </g></svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-custom-color-3 u-border-hover-palette-4-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="/" style="padding: 10px 0px;">Home</a>
                        </li><li class="u-nav-item"><a class="u-border-2 u-border-active-custom-color-3 u-border-hover-palette-4-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="/#carousel_61e5" style="padding: 10px 0px;">About</a>
                        </li><li class="u-nav-item"><a class="u-border-2 u-border-active-custom-color-3 u-border-hover-palette-4-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="/#carousel_09df" style="padding: 10px 0px;">Contact</a>
                        </li><li class="u-nav-item"><a class="u-border-2 u-border-active-custom-color-3 u-border-hover-palette-4-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="/#carousel_db7d" style="padding: 10px 0px;">Services</a><div class="u-nav-popup"><ul class="u-border-1 u-border-grey-30 u-h-spacing-20 u-nav u-unstyled u-v-spacing-10"><li class="u-nav-item"><a class="u-button-style u-grey-5 u-nav-link" href="/health-care">Healthcare</a>
                                    </li><li class="u-nav-item"><a class="u-button-style u-grey-5 u-nav-link" href="/tourism">Tourism</a>
                                    </li><li class="u-nav-item"><a class="u-button-style u-grey-5 u-nav-link" href="/project-management">Project Management</a>
                                    </li><li class="u-nav-item"><a class="u-button-style u-grey-5 u-nav-link" href="/business-management">Business Management</a>
                                    </li><li class="u-nav-item"><a class="u-button-style u-grey-5 u-nav-link" href="/cyber-security">Cyber Security</a>
                                    </li><li class="u-nav-item"><a class="u-button-style u-grey-5 u-nav-link" href="/asset">Asset</a>
                                    </li></ul>
                            </div>
                        </li><li class="u-nav-item"><a class="u-border-2 u-border-active-custom-color-3 u-border-hover-palette-4-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="/pricing" style="padding: 10px 0px;">Pricing</a>
                        </li></ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/">Home</a>
                                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/#carousel_61e5">About</a>
                                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/#carousel_09df">Contact</a>
                                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/#carousel_db7d">Services</a><div class="u-nav-popup"><ul class="u-border-1 u-border-grey-30 u-h-spacing-20 u-nav u-unstyled u-v-spacing-10"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/health-care">Healthcare</a>
                                            </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/tourism">Tourism</a>
                                            </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/project-management">Project Management</a>
                                            </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/construction">Construction</a>
                                            </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/cyber-security">Cyber Security</a>
                                            </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/asset">Asset</a>
                                            </li></ul>
                                    </div>
                                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="pricing">Pricing</a>
                                </li></ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
            <p class="u-text u-text-1"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 53 53" x="0px" y="0px" style="width: 1em; height: 1em;"><path style="fill:#E7ECED;" d="M18.613,41.552l-7.907,4.313c-0.464,0.253-0.881,0.564-1.269,0.903C14.047,50.655,19.998,53,26.5,53
	c6.454,0,12.367-2.31,16.964-6.144c-0.424-0.358-0.884-0.68-1.394-0.934l-8.467-4.233c-1.094-0.547-1.785-1.665-1.785-2.888v-3.322
	c0.238-0.271,0.51-0.619,0.801-1.03c1.154-1.63,2.027-3.423,2.632-5.304c1.086-0.335,1.886-1.338,1.886-2.53v-3.546
	c0-0.78-0.347-1.477-0.886-1.965v-5.126c0,0,1.053-7.977-9.75-7.977s-9.75,7.977-9.75,7.977v5.126
	c-0.54,0.488-0.886,1.185-0.886,1.965v3.546c0,0.934,0.491,1.756,1.226,2.231c0.886,3.857,3.206,6.633,3.206,6.633v3.24
	C20.296,39.899,19.65,40.986,18.613,41.552z"></path><g><path style="fill:#556080;" d="M26.953,0.004C12.32-0.246,0.254,11.414,0.004,26.047C-0.138,34.344,3.56,41.801,9.448,46.76
		c0.385-0.336,0.798-0.644,1.257-0.894l7.907-4.313c1.037-0.566,1.683-1.653,1.683-2.835v-3.24c0,0-2.321-2.776-3.206-6.633
		c-0.734-0.475-1.226-1.296-1.226-2.231v-3.546c0-0.78,0.347-1.477,0.886-1.965v-5.126c0,0-1.053-7.977,9.75-7.977
		s9.75,7.977,9.75,7.977v5.126c0.54,0.488,0.886,1.185,0.886,1.965v3.546c0,1.192-0.8,2.195-1.886,2.53
		c-0.605,1.881-1.478,3.674-2.632,5.304c-0.291,0.411-0.563,0.759-0.801,1.03V38.8c0,1.223,0.691,2.342,1.785,2.888l8.467,4.233
		c0.508,0.254,0.967,0.575,1.39,0.932c5.71-4.762,9.399-11.882,9.536-19.9C53.246,12.32,41.587,0.254,26.953,0.004z"></path>
</g></svg><img></span>&nbsp;<a href="sign-in">SIGN IN</a></p>
            </p>
        </div>
    </header>

    @yield('subcontent')

        <!-- BEGIN: JS Assets-->



        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="{{ mix('dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->

        @yield('script')



    @yield('footer');
    </body>

@endsection
