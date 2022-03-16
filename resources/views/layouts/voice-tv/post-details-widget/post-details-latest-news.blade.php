<div class="col-md-12 col-lg-12 col-sm-12 col-12 py2">
    <div class="section-title">
        <h2>সর্বশেষ সংবাদ</h2>
    </div>
</div>
<div class="col-md-12 col-lg-12 col-sm-12 col-12">
    <div class="row">
        @foreach($latest_posts as $key => $post)    
            <div class="col-md-3 col-lg-3 col-sm-6 col-12 border-col-news">
                <div class="main-news">
                    <a href="{{route('details',[$post->slug])}}">
                        <div class="main-img">
                            <amp-img src="{{($post->picture) ? asset('storage'. $post->picture->full) : url('news.jpeg')}}" width="16" height="11" layout="responsive" alt="Example logo image"></amp-img>

                        </div>
                        <div class="category-main-content">
                            <span>
                            {{etb(date('F d , Y',strtotime($post->created_at)))}}
                            </span>
                            <h2>{{$post->title}}
                            </h2>
                        </div>

                    </a>
                </div>
            </div>
        @endforeach  
    </div>
</div>
