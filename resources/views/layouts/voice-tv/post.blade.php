@extends('layouts.voice-tv.master.amp')
@section('customjs')
<script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
<script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>
@endsection
@section('customCss')
.tag:hover a {
    color: #fff;
}
@endsection
@section('content')
@include('layouts.voice-tv.widgets.header')
    <main class="Post-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                       {{-- Breadcrumbs --}}
                        <div class="pt1">
                            <ul class="breadcrumbs">
                                <li><a href="{{url('/')}}" class="text-decoration-none">প্রচ্ছদ</a></li>
                                <li><a href="{{ @$cat_info->slug ? route('category.wise.news',$cat_info->slug) : '#'}}" class="text-decoration-none">{{$cat_info->title ?? ''}}</a></li>
                                <li><a href="#" class="text-decoration-none">{{$post->title ?? ''}}</a></li>
                            </ul>
                        </div>
                        {{-- Breadcrumbs end --}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12 col-lg-12">
                    <div class="row border-news">
                        {{-- News Post Page --}}
                        <div class="col-md-9 col-lg-9 col-sm-12 col-12">
                            <article class="article">
                                <header>
                                    <h1 class="mb1 article-title ampstart-title-md">{{$post->title}}</h1>
                                    <div class="article-meta">
                                        <time class="ampstart-byline-pubdate bold my1" datetime="{{etb($post->created_at)}}">{{etb($post->created_at)}}</time>

                                        <div class="right d-print-none">
                                            <amp-social-share
                                                    class="circle mr1"
                                                    type="facebook"
                                                    width="18"
                                                    height="18"
                                                    data-param-app_id="563400841004160"
                                            >
                                            </amp-social-share>
                                            <amp-social-share
                                                    class="circle mr1"
                                                    type="twitter"
                                                    width="18"
                                                    height="18"
                                            >
                                            </amp-social-share>
                                            <amp-social-share
                                                    class="circle mr1"
                                                    type="whatsapp"
                                                    width="18"
                                                    height="18"
                                            >
                                            </amp-social-share>
                                            <amp-social-share
                                                    class="circle mr1"
                                                    type="linkedin"
                                                    width="18"
                                                    height="18"
                                            >
                                            </amp-social-share>
                                            <a class="circle mr1" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24" width="24" role="img" aria-hidden="true">
                                                    <path d="M18,3H6V7H18M19,12A1,1 0 0,1 18,11A1,1 0 0,1 19,10A1,1 0 0,1 20,11A1,1 0 0,1 19,12M16,19H8V14H16M19,8H5A3,3 0 0,0 2,11V17H6V21H18V17H22V11A3,3 0 0,0 19,8Z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                        <ul class="tags block">
                                            <li class="tag"> <a href="#">{{$cat_info->title ?? ''}}</a></li>
                                        </ul>
                                    </div>

                                    <!-- End byline -->
                                        <amp-img src="{{($post->picture) ? asset('storage'. $post->picture->full) : url('news.jpeg')}}" width="16" height="11" layout="responsive" alt="featured image" class="mb4"></amp-img>
                                </header>
                                    <p class="mb4">
                                       {!! $post->description !!}
                                        <div class="justify-center md-flex my2 d-print-none">

                                        </div>
                                        </p>
                                <div class="d-print-none">
                                    @if($post->video_link != null)
                                        <amp-youtube
                                            data-videoid="{{$post->video_link}}"
                                            layout="responsive"
                                            width="480"
                                            height="270"
                                        ></amp-youtube>
                                    @endif
                                </div>
                            </article>
                        </div>
                        {{-- Post Page Related News --}}
                        <div class="col-md-3 col-lg-3 col-sm-12 col-12 sidebar">
                            <div class="row px3">
                                {{-- Amp Add --}}
                                {{-- Widget Add section --}}
                                <div class="col-md-12 col-lg-12 col-sm-12 col-12">

                                    @include('layouts.voice-tv.widgets.google-adds')

                                </div>
                                {{-- Widget Add section End --}}
                                {{-- Widget Twenty One --}}
                                {{-- Last News M --}}
                                @if($cat_posts != null)
                                  @include('layouts.voice-tv.post-details-widget.post-details-related-news')
                                @endif
                                {{-- Widget Twenty One End --}}
                            </div>
                        </div>
                    </div>
                    {{-- Leatest News --}}
                    <div class="row border-news">
                        {{-- Widget Twenty Two --}}
                        <div class="col-md-9 col-sm-12 col-12 col-lg-9">
                            @include('layouts.voice-tv.post-details-widget.post-details-latest-news')
                        </div>
                        {{-- Widget Twenty Two End --}}
                        {{-- right Section --}}
                        <div class="col-md-3 col-sm-12 col-12 col-lg-3">
                            <div class="row">
                                {{-- Widget Add section --}}
                                <div class="col-md-12 col-lg-12 col-sm-12 col-12 p2">
                                    @include('layouts.voice-tv.widgets.google-adds')
                                </div>
                                {{-- Widget Add section End --}}
                            </div>
                        </div>

                    </div>
                    {{-- Leatest News End --}}

                </div>
            </div>
        </div>
    </main>
@include('layouts.voice-tv.widgets.footer')
@endsection
