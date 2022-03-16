@php
    $setting_json = $layout_widgets[$wid]->widget_settings;
    $setting = widgetSetting($setting_json);
    if($setting->taxonomy == 'category'){
        $cat_name =  \App\Models\Category::where('id' , $setting->data)->first();
    }
@endphp
<div class="col-md-12 col-lg-12 col-12 py3">
    <div class="section-title">
        <h2>{{@$cat_name->title}}</h2>
    </div>
</div>

<div class="col-md-12 col-lg-12 col-12 border-col-news w-fit r-b-b">
    <div class="dual-card">
    @if($setting->taxonomy == 'html')
        @include('layouts.voice-tv.widgets.plain-html') 
    @else
        @if(getRequestedValue($setting)) 
            @foreach(getRequestedValue($setting) as $key => $post)
                @if($key == 0)
                <a href="{{route('details',[$post->slug])}}">
                    <div class="main-img">
                        <amp-img src="{{($post->picture) ? asset('storage'. $post->picture->full) : url('news.jpeg')}}" width="16" height="11" layout="responsive" alt="Example logo image"></amp-img>
                    </div>
                    <div class="main-content">
                        <h3>
                            {{$post->title}}
                        </h3>
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
                @endif
                @if($key == 1)
                <a href="{{route('details',[$post->slug])}}">
                    <div class="row single-card">
                        <div class="col-md-2 col-lg-2 col-sm-2 col-2">
                            <amp-img src="{{($post->picture) ? asset('storage'. $post->picture->full) : url('news.jpeg')}}" width="1" height="1" layout="responsive" alt="Example logo image"></amp-img>
                        </div>
                        <div class="col-md-10 col-lg-10 col-sm-10 col-10">
                            <h3>
                               {{$post->title}}
                            </h3>

                        </div>
                    </div>
                </a>
                @endif
            @endforeach
            <br>   
                @if(getPolitics($cat = 'রাজনীতি') != null)
                <a href="{{route('category.wise.news',getPolitics($cat = 'রাজনীতি'))}}" class="main-content">
                    বিস্তারিত...  
                </a> 
                @endif
        @endif        
    @endif    
    </div>
</div>
 