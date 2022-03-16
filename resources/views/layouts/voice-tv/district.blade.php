@extends('layouts.voice-tv.master.amp')
@section('customjs')

@endsection
@section('customCss')
.click_news_text {
    align-items: center;
    display: flex;
    flex-wrap: wrap;
    font-size: 20px;
    font-weight: bold;
    letter-spacing: 0.2px;
    line-height: 32px;
    word-break: break-all;
    padding: 16px;
    color: #de3902;
    border-bottom: 1px solid #c1bbbb;
    font-family: SolaimanLipi,AdorshoLipi,voice;
}
.dropdown {
  position: relative;
  display: inline-block;
}
.dropdown > label,
.dropdown > a[role="button"] {
  display: inline-block;
  padding: 6px 100px;
  color: #000;
  line-height: 1.5em;
  text-decoration: none;
  border: 1px solid #8c8c8c;
  cursor: pointer;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  font-size: 20px;
      font-weight: 700;
      font-family: SolaimanLipi,AdorshoLipi,voice;
}
.dropdown > ul {
  position: absolute;
  z-index: 999;
  display: block;
  left: -100vw;
  top: calc(1.5em + 30px);
  border: 1px solid #8c8c8c;
  background: #fff;
  padding: 6px 0;
  margin: 0;
  list-style: none;
  width: 87%;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  -webkit-box-shadow: 0 3px 8px rgba(0,0,0,.15);
  -moz-box-shadow: 0 3px 8px rgba(0,0,0,.15);
  box-shadow: 0 3px 8px rgba(0,0,0,.15);
}

.dropdown > ul a {
  display: block;
  padding: 6px 15px;
  text-decoration: none;
  color: #333;
  font-family: SolaimanLipi,AdorshoLipi,voice;
}

.dropdown > ul a:hover,
.dropdown > ul a:focus {
  background: #ececec;
}

.dropdown > input[type="checkbox"]:checked ~ ul,
.dropdown > ul:target {
  left: 18px;
}
.dropdown > input[type="checkbox"] {
  position: absolute;
  left: -100vw;
}
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
@endsection
@section('content')
@include('layouts.voice-tv.widgets.header')
    <main class="category-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12 col-lg-12">
                    {{-- Breadcrumbs --}}
                     <div class="pt1">
                         <ul class="breadcrumbs">
                             <li><a href="#" class="text-decoration-none">প্রচ্ছদ</a></li>
                             <li><a href="#" class="text-decoration-none">অনুসন্ধান</a></li>
                         </ul>
                     </div>
                     {{-- Breadcrumbs end --}}
             </div>
            </div>
            <div class="row">
                    {{-- Category Left Side --}}
                <div class="col-sm-12 col-12 col-lg-12 col-md-12">

                    <div class="row border-news">
                        {{-- Category news --}}
                        <div class="col-md-8 col-lg-8 col-sm-12 col-12 border-col-news">
                            <div class="row">
                                @foreach($posts as $key => $post)
                                <div class="col-md-12 col-lg-12 col-sm-12 col-12 border-news">
                                    <a href="{{route('details',[$post->slug])}}">
                                        <div class="row ml3">
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-12">
                                                <div class="main-img">
                                                    <amp-img src="{{($post->picture) ? asset('storage'. $post->picture->full) : url('news.jpeg')}}" width="16" height="1" layout="responsive" alt="Example logo image"></amp-img>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-8 col-sm-12 col-12">
                                                <div class="main-content px2">
                                                    <h3>
                                                      {{$post->title}}
                                                    </h3>
                                                    <span>
                                                    {{etb($post->created_at)}}
                                                    </span>
                                                    <p>
                                                    {{$post->short_title}}
                                                    </p>
                                                    <button type="button">বিস্তারিত..</button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                                <div class="col-12 paginate">
                                    <span>
                                        <!-- appends(Request::all()) -->
                                        {{$posts->links()}}
                                    </span>
                                </div>
                            </div>
                        </div>
                        {{-- Last News --}}
                        <div class="col-md-4 col-lg-4 col-sm-12 col-12 category-sidebar">
                            <div class="row p2">
                                <div class="col-md-12 col-lg-12 col-12 ml2">
                                    <div class="section-title">
                                        <h2>জেলার সংবাদ</h2>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-12">
                                    <div class="droppen">
                                        <div class="click_news_text">এক ক্লিকে জেলার সংবাদ</div>
                                        <div class="dropdown p2">
                                          <input type="checkbox" id="my-dropdown" value="" name="my-checkbox">
                                          <label for="my-dropdown"
                                             data-toggle="dropdown">
                                          জেলা
                                          </label>
                                          <ul>
                                            @foreach(getDistrict() as $key => $district)
                                              <li><a href="{{route('district',$district->slug)}}">{{$district->title_bn}}</a></li>
                                            @endforeach
                                          </ul> 
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row p2">
                                {{-- Last News M --}}
                                <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                                    <div class="section-title">
                                        <h2>সর্বশেষ সংবাদ</h2>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                                    <div class="row">
                                    @foreach($latest_posts as $key => $post)
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                                            <a href="{{route('details',[$post->slug])}}">
                                                <div class="row country_card">

                                                    <div class="col-md-2 col-lg-2 col-sm-2 col-2">
                                                          <amp-img class="country_short_card_img" src="{{($post->picture) ? asset('storage'. $post->picture->full) : url('news.jpeg')}}" width="1" height="1" layout="responsive" alt="Example logo image"></amp-img>
                                                    </div>
                                                    <div class="col-md-10 col-lg-10 col-sm-10 col-10">
                                                         <div class="country_card_text">
                                                              <h3>
                                                                 {{$post->title}}
                                                              </h3>

                                                         </div>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                    @endforeach    
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Pagination section --}}
                        <div class="col-md-12 col-lg-12 col-sm-12 col-12"></div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@include('layouts.voice-tv.widgets.footer')
@endsection
