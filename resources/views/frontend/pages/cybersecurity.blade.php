@extends('frontend/layout/main')
@section('subhead')
    <title>Cyber Security - Sphere</title>
@endsection

@section('subcontent')
    <link rel="stylesheet" href="{{ asset('dist/css/cybersecurity.css') }}" />
    <section class="u-clearfix u-image u-shading u-section-1" id="sec-a785" data-image-width="5531" data-image-height="3586">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000">
                <span style="font-weight: 700;"> CYBER SECURITY</span>
            </h1>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-gradient u-section-2" id="sec-f188">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-text u-text-default" style="font-weight: bold" data-animation-name="flipIn" data-animation-duration="1000" data-animation-direction="X">
                Cloud Security
            </h2>
         <div class="main-row">
             <div class="row-3 box-main">
                 <div class="box-contents">
                     <div class="img-wrap">
                         <img class="u-image" src="{{asset('dist/images/860239.png')}}" alt="" >
                     </div>
                     <h4 class="et_pb_module_header"><span>Data Protection</span></h4>
                     <ul class="u-align-left u-text u-text-default u-text-3">
                         <li>Provides services that help in protecting critical information and data from unauthorzed access using advances encryption.</li>
                         <li>Provide key management and threat detection that monitors and protects data continuously</li>
                     </ul>
                 </div>

             </div>
             <div class="row-3 box-main">
                 <div class="box-contents">
                     <div class="img-wrap">
                         <img class="u-image" src="{{asset('dist/images/3301591.png')}}" alt="" >
                     </div>
                     <h4 class="et_pb_module_header"><span>Infrastructure Protection</span></h4>
                     <ul class="u-align-left u-text u-text-default u-text-3">
                         <li>Implements a security assessment, analyzes needs, and work closely to customize the security rules.</li>
                         <li>A services that developed based on the adaptive security architecture to ensure the continuous of security monitoring and data analytics.</li>
                         <li>Provides quick recovery from security risks to protect data</li>
                     </ul>
                 </div>

             </div>
             <div class="row-3 box-main">
                 <div class="box-contents">
                     <div class="img-wrap">
                         <img class="u-image" src="{{asset('dist/images/6918103.png')}}" alt="" >
                     </div>
                     <h4 class="et_pb_module_header"><span>Identity and Access Management</span></h4>
                     <ul class="u-align-left u-text u-text-default u-text-3">
                         <li>Enable a secure identites, resources, and permissions management</li>
                         <li>One secure digital identity per user</li>
                     </ul>
                 </div>

             </div>

         </div>
            <br/>
            <div class="main-row">
                <div class="row-3 box-main">
                    <div class="box-contents">
                        <div class="img-wrap">
                            <img class="u-image" src="{{asset('dist/images/2170711.png')}}" alt="" >
                        </div>
                        <h4 class="et_pb_module_header"><span>Threat Detection & Continuous Monitoring</span></h4>
                        <ul class="u-align-left u-text u-text-default u-text-9">
                            <li>Monitoring the network activity and account behaviour within cloud environment continuously</li>
                        </ul>
                    </div>

                </div>
                <div class="row-3 box-main">
                    <div class="box-contents">
                        <div class="img-wrap">
                            <img class="u-image" src="{{asset('dist/images/4438936.png')}}" alt="" >
                        </div>
                        <h4 class="et_pb_module_header"><span>Compliance and Data Privacy</span></h4>
                        <ul class="u-align-left u-text u-text-default u-text-11">
                            <li>Provides a comprehensive view of compliance status and monitors environment continuously using automated compliance checks according to industry standards followed by your organizations</li>
                        </ul>
                    </div>

                </div>

            </div>
            <br/>
         </div>

        <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-text u-text-default" style="font-weight: bold" data-animation-name="flipIn" data-animation-duration="1000" data-animation-direction="X">
                Products
            </h2>
            <div class="main-row">
                <div class="row-3 box-main">
                    <div class="box-contents">
                        <div class="img-wrap">
                            <h1><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/57164.png')}}" alt="" width="39" height="39"> Proxy Filtering</h1>
                        </div>
                        <p>Restricting access to unwanted sites and applications</p>
                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">

                                <div class="et_pb_blurb_description"><p>Block access to questionable &amp; risky websites</p></div>
                            </div>
                        </div>
                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">

                                <div class="et_pb_blurb_description"><p>  Optimize and control the internet connection
                                    </p></div>
                            </div>
                        </div>
                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">

                                <div class="et_pb_blurb_description"><p>Filter dangerous, fraudulent, gaming websites
                                    </p></div>
                            </div>
                        </div>
                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">

                                <div class="et_pb_blurb_description"><p>  Access Control List
                                    </p></div>
                            </div>
                        </div>
                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">
                                <div class="et_pb_blurb_description"><p> Scheduling when a devices can access the internet
                                    </p></div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="row-3 box-main">
                    <div class="box-contents">
                        <div class="img-wrap">
                            <h1><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/8967884.png')}}" alt="" width="39" height="39">Advanced Firewall</h1>
                        </div>
                        <p>Monitor and secure traffic across physical and virtual networks by defining security rules and policies</p>
                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">

                                <div class="et_pb_blurb_description"><p>  Global Block
                                    </p></div>
                            </div>
                        </div>
                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">

                                <div class="et_pb_blurb_description"><p>DNSBL
                                    </p></div>
                            </div>
                        </div>
                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">

                                <div class="et_pb_blurb_description"><p>FScheduling
                                    </p></div>
                            </div>
                        </div>
                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">

                                <div class="et_pb_blurb_description"><p> Traffic Shaping

                                    </p></div>
                            </div>
                        </div>
                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">
                                <div class="et_pb_blurb_description"><p>   Anti-Spoofing  </p></div>
                            </div>
                        </div>

                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">
                                <div class="et_pb_blurb_description"><p>

                                        Spam Filter
                                    </p></div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="row-3 box-main">
                    <div class="box-contents">
                        <div class="img-wrap">
                            <h1><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/2592258.png')}}" alt="" width="39" height="39"> Proxy Filtering</h1>
                        </div>
                        <p>Restricting access to unwanted sites and applications</p>
                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">

                                <div class="et_pb_blurb_description"><p>Block access to questionable &amp; risky websites</p></div>
                            </div>
                        </div>
                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">
                                <div class="et_pb_blurb_description"><p> Block access to questionable & risky websites
                                    </p></div>
                            </div>
                        </div>
                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">

                                <div class="et_pb_blurb_description"><p>Optimize and control the internet connection</p></div>
                            </div>
                        </div>
                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">

                                <div class="et_pb_blurb_description"><p>    Filter dangerous, fraudulent, gaming websites</p></div>
                            </div>
                        </div>
                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">
                                <div class="et_pb_blurb_description"><p> Access Control List
                                    </p></div>
                            </div>
                        </div>

                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">
                                <div class="et_pb_blurb_description"><p>Scheduling when a devices can access the internet

                                    </p></div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="main-row">
                <div class="row-3 box-main">
                    <div class="box-contents">
                        <div class="img-wrap">
                            <h1><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/955040.png')}}" alt="" width="39" height="39"> Proxy Filtering</h1>
                        </div>
                        <p>  Virtual Private Network
                        </p>
                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">

                                <div class="et_pb_blurb_description"><p>Block access to questionable &amp; risky websites</p></div>
                            </div>
                        </div>
                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">

                                <div class="et_pb_blurb_description"><p>  Open VPN

                                    </p></div>
                            </div>
                        </div>
                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">

                                <div class="et_pb_blurb_description"><p>  Ipsec VPN

                                    </p></div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="row-3 box-main">
                    <div class="box-contents">
                        <div class="img-wrap">
                            <h1><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/900772.png')}}" alt="" width="39" height="39">Management Console</h1>
                        </div>
                        <p>Provides graphical interface, monitoring, faster troubleshooting, and security analytics</p>
                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">

                                <div class="et_pb_blurb_description"><p>    Dashboard widgets visualisation

                                    </p></div>
                            </div>
                        </div>
                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">

                                <div class="et_pb_blurb_description"><p>    Graphic Report

                                    </p></div>
                            </div>
                        </div>
                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">

                                <div class="et_pb_blurb_description"><p>

                                        Analysis and visualisation

                                    </p></div>
                            </div>
                        </div>
                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">

                                <div class="et_pb_blurb_description"><p>

                                        Real-Time interface traffic graphs


                                    </p></div>
                            </div>
                        </div>
                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">
                                <div class="et_pb_blurb_description"><p>

                                        Real-Time Attacks Monitoring
                                    </p></div>
                            </div>
                        </div>

                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">
                                <div class="et_pb_blurb_description"><p>


                                        Social Media Control

                                    </p></div>
                            </div>
                        </div>

                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">
                                <div class="et_pb_blurb_description"><p>


                                        Incoming and outgoing network IPs data


                                    </p></div>
                            </div>
                        </div>
                        <div class="et_pb_blurb_content">
                            <div class="et_pb_main_blurb_image"><img decoding="async" class="wp-image-350 alignleft" src="{{asset('dist/images/green-tick2.png')}}" alt="" width="26" height="26"> </div>
                            <div class="et_pb_blurb_container">
                                <div class="et_pb_blurb_description"><p>


                                        Users source and destination information



                                    </p></div>
                            </div>
                        </div>


                    </div>

                </div>

            </div>
            <br/>

            <br/>

        </div>
    </section>


@endsection

@extends('frontend/layout/footer')
