<!doctype html>
<html ⚡="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="amp-google-client-id-api" content="googleanalytics">

    @yield('extraTags')
    @yield('seo')
    @yield('customjs')
     @include('layouts.voice-tv.assets.js')
     @include('layouts.voice-tv.assets.css_one')
     @include('layouts.voice-tv.assets.css_two')


    <link rel="canonical" href="...">

    <title>VoiceTv</title>
</head>
  <body>
  <amp-auto-ads type="adsense"
  	        data-ad-client="ca-pub-7870052780987701">
  	</amp-auto-ads>
    <!-- Start Navbar -->
        <!-- End Navbar -->
    <div id="main-page">
        @yield('content')
    </div>


        <!-- Start Footer -->
  
        

    <!-- End Footer -->
    <style amp-keyframes>

                            /* @keyframes marquee {
                              0% {
                              transform: translateX(100%);
                              }
                              100% {
                              transform: translateX(-100%);
                              }
                            } */
                            @keyframes marquee {
                              from { transform: translateX(0); }
                              to { transform: translateX(-100%); }
                            }

        </style>

  </body>
</html>
