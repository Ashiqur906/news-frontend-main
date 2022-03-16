@extends('layouts.voice-tv.master.amp')
@section('customjs')
@include('layouts.voice-tv.assets.index_js')
@endsection
@section('customCss')
@include('layouts.voice-tv.assets.index_css')
@endsection
@section('content')
<main>     

    <div class="marquee-section">
        @include('layouts.voice-tv.widgets.marquee')
    </div>

    <div class="main-section">
        <div class="container">
            <div class="row border-news">
                {{-- First Section --}}

                {{-- Post Renderer Multi --}}
                <div class="col-md-3 col-lg-3 col-sm-12 border-col r-m-a r-b-b col-order-1">

                    {{--  Widget Two  --}}
                    <div class="row">
                        @include('layouts.voice-tv.widgets.post-renderer-multiple-1')
                    </div>
                    {{--  Widget Two End  --}}

                </div>
                {{-- Second Section --}}

                {{-- Post Renderer Single Main --}}
                <div class="col-md-5 col-lg-5 col-sm-12 col-12 border-col r-m-a r-b-b col-order-2">

                    {{--  Widget One  --}}
                    @include('layouts.voice-tv.widgets.post-renderer-single-main')
                    {{--  Widget One  End --}}

                </div>

                {{-- Third Section --}}
                <div class="col-md-4 col-lg-4 col-sm-12 border-col r-m-a col-order-3">

                    {{--  Widget Three  --}}
                        <div class="row news-border r-b-b">
                            @include('layouts.voice-tv.widgets.live-tv')
                        </div>
                    {{--  Widget Three End  --}}

                    {{--  Widget Four  --}}
                        <div class="row pt1">
                            @include('layouts.voice-tv.widgets.post-renderer-single-1')
                        </div>
                        
                    {{--  Widget Four End  --}}
                </div>
            </div>
        </div>

    </div>

    <div class="second-section">
        <div class="container">
            <div class="row border-news">
                {{-- Left section --}}
                <div class="col-md-5 col-lg-5 col-sm-12 col-12">
                    {{--  Post Renderer Multiple 4 colums  --}}

                    {{--  Widget Five  --}}
                    <div class="row">
                        @include('layouts.voice-tv.widgets.post-renderer-multiple-2-rows')
                    </div>
                    {{--  Widget Five End  --}}

                    {{--  Post Renderer Multiple 4 colums End --}}

                </div>
                {{-- Middle Section --}}
                <div class="col-md-4 col-lg-4 col-sm-12 col-12 border-col">

                    {{--  Post Renderer Multiple List One --}}
                    {{-- Widget Six --}}
                     <div class="row">
                        @include('layouts.voice-tv.widgets.post-renderer-multiple-list-1')
                    </div>
                    {{-- Widget Six End --}}
                    {{--  Post Renderer Multiple List End --}}
                    {{--  Post Renderer Multiple List Two --}}
                    {{-- Widget Six --}}
                    {{-- <div class="row">
                        @include('layouts.voice-tv.widgets.post-renderer-multiple-list-2')
                    </div> --}}
                    {{-- Widget Six End --}}
                    {{--  Post Renderer Multiple List End --}}
                </div>
                {{-- Right Section --}}
                <div class="col-md-3 col-lg-3 col-sm-12 col-12 border-col">
                    {{--  Post Renderer Add Section --}}
                    <div class="add-img">
                        {{--  Widget Seven  --}}
                        <div class="row">
                            @include('layouts.voice-tv.widgets.image')
                        </div>
                        {{--  Widget Seven End --}}
                    </div>
                    {{--  Post Renderer Add Section End --}}
                </div>
            </div>
        </div>

    </div>

    <div class="third-section">
        <div class="container">
            <div class="row border-news">
                {{-- First Part --}}
                <div class="col-md-9 col-lg-9 col-sm-12">
                    {{-- Top Part (Entertainment And Crime Part) --}}
                    <div class="row border-news">
                        {{-- Entertainment Part --}}
                        <div class="col-md-8 col-sm-12 col-12 col-lg-8">
                            {{--  Widget Eight  --}}
                            <div class="row">
                                @include('layouts.voice-tv.widgets.post-multiple-with-header')
                            </div>
                            {{--  Widget Eight End --}}
                        </div>
                        {{-- Crime Part --}}
                        <div class="col-md-4 col-sm-12 col-12 col-lg-4">
                            {{--  Widget Nine  --}}
                            <div class="row">
                                @include('layouts.voice-tv.widgets.post-slider-with-header')
                            </div>
                            {{--  Widget Nine End --}}
                        </div>
                    </div>
                    {{-- BOttom Part (Politics and National news Part)  --}}
                    <div class="row">
                        {{-- Politics Part --}}
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            {{--  Widget ten  --}}
                            <div class="row">
                                @include('layouts.voice-tv.widgets.post-renderer-with-header-first-highlight')
                            </div>
                            {{--  Widget ten End --}}
                        {{-- National News Part --}}
                        <div class="col-md-8 col-sm-12 col-lg-8">
                            {{--  widget eleven  --}}
                            <div class="row">
                                @include('layouts.voice-tv.widgets.post-renderer-with-header-first-highlight-6-col')
                            </div>
                            {{--  widget eleven  End --}}
                        </div>
                    </div>
                </div>
                {{-- Second Part (One click district News) --}}
                <div class="col-md-3 col-lg-3 col-sm-12">
                    {{--  Widget Twelve  --}}
                    <div class="row click-border-news">
                        @include('layouts.voice-tv.widgets.post-renderer-district-news')
                        {{--  Widget Add  --}}
                        <div class="col-md-12 col-lg-12 col-12 ml2">
                            @include('layouts.voice-tv.widgets.google-adds')
                        </div>
                        {{--  Widget Add End --}}
                    </div>
                    {{--  Widget Twelve End --}}

                </div>
            </div>
            {{-- Voice News Add --}}
            <div class="row py2">
                @include('layouts.voice-tv.widgets.advertisement-html')
            </div>
        </div>

    </div>

    <div class="video-news">
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
                {{--  Widget Fourteen  --}}
                @include('layouts.voice-tv.widgets.video-slider')
                {{--  Widget Fourteen End --}}
            </div>

        </main>
    </div>

    <div class="fourth-section">
        <div class="container">
            <div class="row border-news">
                {{-- World News Part --}}
                <div class="col-md-3 col-sm-6 col-lg-3">
                    <div class="row">
                        @include('layouts.voice-tv.widgets.post-renderer-with-header-first-highlight-2')
                    </div>
                </div>
                {{-- Sports News Part --}}
                <div class="col-md-3 col-sm-6 col-lg-3">
                    <div class="row">
                        @include('layouts.voice-tv.widgets.post-renderer-with-header-first-highlight-3')
                    </div>
                </div>
                {{-- Image Gallery Part --}}
                <div class="col-md-6 col-sm-12 col-lg-6">
                    {{--  widget sixteen  --}}
                    <div class="row">
                        @include('layouts.voice-tv.widgets.post-render-gallery')
                    </div>
                    {{--  widget sixteen end --}}
                </div>
            </div>
        </div>
    </div>

</main>

@endsection



