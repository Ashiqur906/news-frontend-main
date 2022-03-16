@extends('layouts.voice-tv.master.amp')
@section('customjs')
@include('layouts.voice-tv.assets.index_js')
@endsection
@section('customCss')
@include('layouts.voice-tv.assets.index_css')
@endsection
@section('content')
<main>
    <!-- header -->
    <div class="header" id="{{ $wid = 'voice-header'}}">
        <div class="col-12">
        {{getWidgetRender($lw ,$wid, $wi)}}
        </div>
    </div>
    <!-- marquee -->
    <div class="marquee-section" id="{{ $wid = 'voice-marquee-section'}}">
        {{getWidgetRender($lw ,$wid, $wi)}}
    </div>
     <!-- first row -->
    <div class="main-section">
        <div class="container">
            <div class="row border-news">
                <div class="col-md-3 col-lg-3 col-sm-12 border-col r-m-a r-b-b col-order-1" >
                    <div class="row">                  
                        <div class="col-md-12 col-lg-12 col-sm-6 col-12 r-b-b news-border" id="{{ $wid = 'voice-main-1'}}">
                            {{getWidgetRender($lw ,$wid, $wi)}}
                        </div>

                        <div class="col-md-12 col-lg-12 col-sm-6 col-12 r-b-b news-border" id="{{ $wid = 'voice-main-2'}}">
                            {{getWidgetRender($lw ,$wid, $wi)}}
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5 col-sm-12 col-12 border-col r-m-a r-b-b col-order-2" id="{{ $wid = 'voice-main-3'}}">
                        {{getWidgetRender($lw ,$wid, $wi)}}
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 border-col r-m-a col-order-3">
                    <div class="row news-border r-b-b" id="{{ $wid = 'voice-live-tv'}}">
                        {{getWidgetRender($lw ,$wid, $wi)}}
                    </div>
                    <div class="row pt1" id="{{ $wid = 'voice-main-4'}}">
                        {{getWidgetRender($lw ,$wid, $wi)}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- second row -->
    <div class="second-section">
        <div class="container">
            <div class="row border-news">
                <div class="col-md-5 col-lg-5 col-sm-12 col-12" id="{{ $wid = 'voice-two-col-two-row'}}">
                    <div class="row">
                        {{getWidgetRender($lw ,$wid, $wi)}}
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-12 border-col" id="{{ $wid = 'voice-all-news'}}">
                    <div class="row">
                        {{getWidgetRender($lw ,$wid, $wi)}}
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12 col-12 border-col" id="{{ $wid = 'voice-advertise'}}">
                    <div class="add-img">
                        <div class="row">
                        {{getWidgetRender($lw ,$wid, $wi)}}
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <!-- third row -->
    <div class="third-section">
        <div class="container">
            {{-- 1st row --}}
            <div class="row border-news">
                <div class="col-md-6 col-sm-12 col-12 col-lg-6" id="{{ $wid = 'voice-ent'}}">
                    <div class="row">
                      {{getWidgetRender($lw ,$wid, $wi)}}
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-12 col-lg-3" id="{{ $wid = 'voice-crime'}}">
                    <div class="row">
                      {{getWidgetRender($lw ,$wid, $wi)}}
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-12 col-lg-3" id="{{ $wid = 'voice-dist-news'}}">
                    <div class="row">
                      {{getWidgetRender($lw ,$wid, $wi)}}
                    </div>
                </div>
            </div>
            {{-- 2nd row --}}
            <div class="row">
                <div class="col-md-3 col-sm-12 col-12 col-lg-3" id="{{ $wid = 'voice-politics'}}">
                    <div class="row">
                     {{getWidgetRender($lw ,$wid, $wi)}}
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12 col-lg-6" id="{{ $wid = 'voice-all-country'}}">
                    <div class="row">
                    {{getWidgetRender($lw ,$wid, $wi)}}
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-12 col-lg-3" id="{{ $wid = 'voice-advert'}}">
                    <div class="row add-padd">
                        <div class="col-md-12 col-lg-12 col-12">
                          {{getWidgetRender($lw ,$wid, $wi)}}
                        </div>
                    </div>
                </div>
            </div>
            {{-- 3rd row --}}
            <div class="row py2">
                <div class="col-md-12 col-sm-12 col-12 col-lg-12" id="{{ $wid = 'voice-adv-sec'}}">
                  {{getWidgetRender($lw ,$wid, $wi)}}
                </div>
            </div>
        </div>
    </div> 
    {{-- Video section --}}
    <div class="video-news" id="{{ $wid = 'voice-video-news'}}">
        <!-- Video Text Part -->
        <main class="video-text">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <a href="">
                        <span class="videos_text">
                                ভিডিও সংবাদ
                        </span>
                        </a>
                    </div>
                </div>
            </div>
        </main>
        <!-- Video News Part -->
        <main class="video-section">
            <div class="container">
                {{getWidgetRender($lw ,$wid, $wi)}}
            </div>

        </main>
    </div>
    <div class="fourth-section">
        <div class="container">
            <div class="row border-news">
                <div class="col-md-3 col-sm-6 col-lg-3" id="{{ $wid = 'voice-world'}}">
                    <div class="row">
                       {{getWidgetRender($lw ,$wid, $wi)}}
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-lg-3" id="{{ $wid = 'voice-sports'}}">
                    <div class="row">
                        {{getWidgetRender($lw ,$wid, $wi)}}
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-6" id="{{ $wid = 'voice-gallery'}}">
                    <div class="row">
                        {{getWidgetRender($lw ,$wid, $wi)}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="footer" id="{{ $wid = 'voice-footer'}}">
        <div class="col-12">
        {{getWidgetRender($lw ,$wid, $wi)}}
        </div>
    </div>  
     

</main>

@endsection



