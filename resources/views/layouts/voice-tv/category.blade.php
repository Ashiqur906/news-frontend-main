@extends('layouts.voice-tv.master.amp')
@section('customjs')
{{--  <script async custom-element="amp-date-picker" src="https://cdn.ampproject.org/v0/amp-date-picker-0.1.js"></script>  --}}
<script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
@endsection
@section('customCss')
.paginate{
    padding: 40px 0;
    align-items: center;
    margin: 0 auto;
    align-content: center;
}
.shadow-sm{
    display: flex;
}
.shadow-sm span{
    display: grid;
 }
 .shadow-sm svg{
    height: 24px;
 }
 .shadow-sm .leading-5{
    display: grid;
    padding: 2px;
    border-radius: 50%;
    margin-left: 5px;
    height: 35px;
    width: 35px;
    text-align: center;
    line-height: 15px;
    border: 1px solid transparent;
    box-shadow: 0px 1px 3px 1px #999;
    font-size: 12px;
 }
 .text-sm{
     display: none;
 }
 nav .border{
    display:none;
 }
.justify-between {
    -ms-flex-pack: justify;
    justify-content: center;
}
.shadow-sm .cursor-default{
    background-color: #607d8b;
    color: #fff;
    border-color: #607d8b;
}
@endsection

@section('content')
    @include('layouts.voice-tv.widgets.header')
    <main class="category-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                    <div class="pt1">
                        <ul class="breadcrumbs">
                            <li><a href="#" class="text-decoration-none"><strong><h4>{{$cat_info->title}}<h4></strong></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12 col-lg-12">
                    {{-- Catetgory Latest News --}}
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                            <div class="row border-news">
                                {{-- Big News --}}
                                {{--  Widget Seventeen  --}}
                                <div class="col-md-9 col-sm-12 col-12 col-lg-9">
                                    @include('layouts.voice-tv.category-post-widget.post-renderer-category-single-right-image')
                                </div>
                                {{--  Widget Seventeen End --}}
                                {{-- Add Manage --}}
                                {{--  Widget Add  --}}
                                <div class="col-md-3 col-sm-12 col-12 col-lg-3">
                                    @include('layouts.voice-tv.widgets.google-adds')
                                </div>
                                {{--  Widget Add End --}}
                            </div>
                            {{-- Bottom Part News --}}
                            {{--  Widget Eighteen  --}}
                            <div class="row border-news">
                                @include('layouts.voice-tv.category-post-widget.category-multiple-post')
                            </div>
                            {{--  Widget Eighteen End --}}
                        </div>
                    </div>
                    {{-- Category Regular News --}}
                    <div class="row border-news">
                        {{-- Category news --}}
                        <div class="col-md-8 col-sm-12 col-12 col-lg-8 border-col-news">
                            {{--  Widget Nineteen  --}}
                            <div class="row">
                                @include('layouts.voice-tv.category-post-widget.category-multiple-post-2')
      
                            </div>
                            <div class="row">
                                <div class="col-12 paginate">
                                    <span>
                                        <!-- appends(Request::all()) -->
                                        {{$pagi_posts->links()}}
                                    </span>
                                </div>
                            </div>
                            {{--  Widget Nineteen End --}}
                        </div>
                        {{-- Last News --}}
                        <div class="col-md-4 col-sm-12 col-12 col-lg-4 category-sidebar"> 
                            <div class="row p2">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                                    <div class="section-title">
                                        <h2>সর্বশেষ সংবাদ</h2>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                                    {{--  Widget Twenty  --}}
                                    <div class="row">
                                        @include('layouts.voice-tv.category-post-widget.post-renderer-category-multiple-last-news')
                                     
                                    </div>
                                    {{--  Widget Twenty End --}}
                                    <div class="row">
                                        {{--  Widget Add  --}}
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                                            @include('layouts.voice-tv.widgets.google-adds')
                                        </div>
                                        {{--  Widget Add End --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>

                </div>
            </div>
        </div>
    </main>
    @include('layouts.voice-tv.widgets.footer')
@endsection
