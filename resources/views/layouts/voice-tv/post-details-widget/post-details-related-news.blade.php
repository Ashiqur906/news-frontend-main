<div class="col-md-12 col-lg-12 col-sm-12 col-12">
    <div class="section-title">
        <h2>এ সম্পর্কিত পড়ুন</h2>
    </div>
</div>
<div class="col-md-12 col-lg-12 col-sm-12 col-12">
    {{-- top News --}}
    <div class="row">
        {{-- Related News --}}
       
            @foreach($cat_posts as $key => $list)
                
                @if($key == 0 && $post->id != $list->id)
                    <div class="col-md-12 col-lg-12 col-sm-12 col-12 border-news">
                        <div class="main-news">
                            <a href="{{route('details',[$list->slug])}}">
                                <div class="main-img">
                                    <amp-img src="{{($list->picture) ? asset('storage'.$list->picture->full) : url('news.jpeg')}}" width="16" height="11" layout="responsive" alt="Example logo image"></amp-img>
                                </div>
                                <div class="category-main-content">
                                    <h2>
                                        {{$list->title}}
                                    </h2>
                                    <span>
                                    {{etb(date('F d , Y',strtotime($list->created_at)))}}
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                @endif
                @if($key != 0 && $post->id != $list->id)
                    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                        <a href="{{route('details',[$list->slug])}}">
                            <div class="row country_card">
                                <div class="col-md-2 col-lg-2 col-sm-2 col-2">
                                    <amp-img class="country_short_card_img" src="{{($list->picture) ? asset('storage'.$list->picture->full) : url('news.jpeg')}}" width="1" height="1" layout="responsive" alt="Example logo image"></amp-img>
                                </div>
                                <div class="col-md-10 col-lg-10 col-sm-10 col-10">
                                    <div class="country_card_text">
                                        <h3>  {{$list->title}}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
        {{-- Related mews end --}}
       
    </div>
    {{-- end --}}
</div>
