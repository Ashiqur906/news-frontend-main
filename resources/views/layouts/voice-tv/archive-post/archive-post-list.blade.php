{{-- 1 --}}
@foreach($archives as $key => $post)
<div class="col-md-12 col-lg-12 col-sm-12 col-12 border-news">
    <a href="{{route('details',[$post->slug])}}">
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-12 col-12">
                <div class="main-img">
                    <amp-img src="{{($post->picture) ? asset('storage'. $post->picture->thumbnail ? $post->picture->full:'') : url('news.jpeg')}}" width="16" height="11" layout="responsive" alt="Example logo image"></amp-img>
                </div>
            </div>
            <div class="col-md-8 col-lg-8 col-sm-12 col-12">
                <div class="main-content px2">
                    <h3>
                    {{$post->title}}
                    </h3>
                    <div class="flex others-common-section arch-common-section">
                        <div class="col-4">
                            <span>  
                            {{etb($post->created_at)}}
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

                    <p>
                       {{$post->short_description}}
                    </p>
                    <button type="button">বিস্তারিত..</button>
                </div>
            </div>
        </div>
    </a>
</div>
@endforeach
