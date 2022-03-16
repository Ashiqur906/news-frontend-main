@extends('layouts.voice-tv.master.amp')
@section('customjs')
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
    padding: 5px;
    border-radius: 50%;
    margin-left: 8px;
    height: 40px;
    width: 40px;
    text-align: center;
    line-height: 30px;
    border: 1px solid transparent;
    box-shadow: 0px 1px 3px 1px #999;
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
    width: 94%;
    background: #607d8b;
    color: #fff;
    cursor: pointer;
    border: 1px solid #607d8b;
    padding: 5px 0;
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
                                <li><a href="" class="text-decoration-none">অনুসন্ধান</a></li>
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
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            {{-- Widget Twenty Three --}}
                            <div class="row">
                                @include('layouts.voice-tv.widgets.search')
                            </div>
                            <div class="row">
                                    <div class="col-12 paginate">
                                        <span>
                                            <!-- appends(Request::all()) -->
                                            {{-- {{$archives->links()}} --}}

                                        </span>
                                    </div>
                                </div>
                            {{-- Widget Twenty Three End --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@include('layouts.voice-tv.widgets.footer')    
@endsection
