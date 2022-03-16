@foreach($cat_posts as $key => $post) 
    @if($key != 0 && $key < 5)
    <div class="col-md-3 col-sm-6 col-lg-3 border-col">
    <div class="main-news">
        <a href="{{route('details',[$post->slug])}}">
            <div class="main-img">
                <amp-img src="{{($post->picture) ? asset('storage'. $post->picture->full) : url('news.jpeg')}}" width="16" height="11" layout="responsive" alt="Example logo image"></amp-img>
            </div>
            <div class="category-main-content">
                <span>
                {{etb($post->created_at)}}
                </span>
                <h2>
                   {{$post->title}}
                </h2>
                <div class="flex others-common-section">
                    <div class="col-4">
                        <span>
                            আন্তর্জাতিক ডেস্ক
                        </span>
                    </div>
                    <div class="col-8 relative">
                        <div class="flex category-chip">
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
                        </div>

                    </div>

                </div>
            </div>

        </a>
    </div>
    </div>
    @endif
@endforeach
