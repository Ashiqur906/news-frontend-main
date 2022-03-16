@php
    $setting_json = $layout_widgets[$wid]->widget_settings;
    $setting = widgetSetting($setting_json);
@endphp
<div class="heading-news">
    @if($setting->taxonomy == 'html')
       @include('layouts.voice-tv.widgets.plain-html')  
    @else
        @if(getRequestedValue($setting)) 
      
            @foreach(getRequestedValue($setting) as $key => $post)
          
                <a href="{{route('details',[$post->slug])}}">
                    <div class="main-img">
                        <amp-img src="{{($post->picture)?asset('storage'. $post->picture->full) : url('news.jpeg')}}" width="16" height="11" layout="responsive" alt="Example logo image"></amp-img>
            
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
                        <p>
                            {{$post->short_description}}
                        </p>
                        <button type="button">বিস্তারিত..</button>
                    </div>

                </a>
            @endforeach
        @endif     
    @endif  
</div>
