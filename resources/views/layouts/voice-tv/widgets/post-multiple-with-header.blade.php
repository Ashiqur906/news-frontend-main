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
@if($setting->taxonomy == 'html')
        @include('layouts.voice-tv.widgets.plain-html') 
@else
    @if(getRequestedValue($setting)) 
            <div class="col-md-12 col-lg-12 col-12">
                <div class="row">
                   @foreach(getRequestedValue($setting) as $key => $post)
                    <div class="col-md-6 col-sm-6 col-lg-6 border-col-news r-m-a">
                        <div class="main-news">
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
                        </div>
                    </div>
                    @endforeach  
                </div>
            </div>
    @endif   
@endif