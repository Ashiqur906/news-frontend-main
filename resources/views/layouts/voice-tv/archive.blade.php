@extends('layouts.voice-tv.master.amp')
@section('customjs')
<script async custom-element="amp-date-picker" src="https://cdn.ampproject.org/v0/amp-date-picker-0.1.js"></script>
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
.archive_submit{
    width: 318px;
    background: #607d8b;
    color: #fff;
    cursor: pointer;
    border: 1px solid #607d8b;
    padding: 5px 0;
}
.arch-rt{
    padding-right: 10px;
}
@endsection
@section('content')
@include('layouts.voice-tv.widgets.header')
    <main class="category-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                       {{-- Breadcrumbs --}}
                        <div class="pt1">
                            <ul class="breadcrumbs">
                                <li><a href="{{url('/')}}" class="text-decoration-none">প্রচ্ছদ</a></li>
                                <li><a href="{{route('archive')}}" class="text-decoration-none">আর্কাইভ</a></li>
                            </ul>
                        </div>
                        {{-- Breadcrumbs end --}}
                </div>
            </div>
            <div class="row">
                {{-- Category Left Side --}}
                <div class="col-md-12 col-sm-12 col-12 col-lg-12">
                    <div class="row border-news">
                        {{-- Archive Post Part --}}
                        <div class="col-md-8 col-sm-12 col-lg-8 arch-rt">
                            {{-- Widget Twenty Three --}}
                            <div class="row">
                                @include('layouts.voice-tv.archive-post.archive-post-list')
                            </div>
                            <div class="row">
                                    <div class="col-12 paginate">
                                        <span>
                                            <!-- appends(Request::all()) -->
                                            {{$archives->links()}}
                                        </span>
                                    </div>
                                </div>
                            {{-- Widget Twenty Three End --}}
                        </div>
                        {{-- Archive Search section --}}
                        <div class="col-md-4 col-lg-4 col-sm-12 col-12 archive-sidebar">
                            <div class="row">
                                {{-- Archive Category Search --}}
                                <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                                    <div class="category-dropen">
                                        <div class="items-center">
                                            <div class="col-12">
                                                <div class="dropen-main-content">
                                                    <h2>
                                                        Archive Search
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items-center">
                                            {{-- {{route('date.wise.post')}} --}}
                                            {{-- /newspaper/news-frontend/public/posts --}}
                                            <form method="GET" action="posts" target="_top">
                                                <amp-date-picker
                                               
                                                layout="fixed-height" 
                                                height="360"
                                                id="range-date-picker" 
                                                min="2017-10-26" 
                                                format="YYYY-MM-DD" 
                                                input-selector="[name=date]"
                                                >
                                                <input type="hidden" name="date" />
                                                
                                                </amp-date-picker>
                                                <input class="archive_submit" type="submit" value="Submit" />
                                            </form>
                                            <!-- <form method="post" action-xhr="/form/echo-json/post" target="_blank">
                                            <amp-date-picker 
                                            type="single" 
                                            on="select: AMP.navigateTo(url='posts')" 
                                            layout="fixed-height" 
                                            height="360" 
                                            id="range-date-picker" 
                                            min="2017-10-26" 
                                            format="YYYY-MM-DD" 
                                            input-selector="[name=archivedate]"
                                            open-after-select class="example-picker space-between">
                                            </amp-date-picker>
                                            </form> -->

                                        </div>
                                    </div>
                                </div>
                                {{-- Last News M --}}
                                {{-- Widget twenty four --}}
                                @include('layouts.voice-tv.archive-post.post-renderer-last-news')
                                {{-- Widget twenty four End --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@include('layouts.voice-tv.widgets.footer')    
@endsection
