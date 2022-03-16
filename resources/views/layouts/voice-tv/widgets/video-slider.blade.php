@php
    $setting_json = $layout_widgets[$wid]->widget_settings;
    $setting = widgetSetting($setting_json);
@endphp
@if($setting->taxonomy == 'html')
    @include('layouts.voice-tv.widgets.plain-html') 
@else
    @if(getRequestedValue($setting)) 
        <amp-base-carousel class="video-carousel" layout="responsive" width="33" height="7" visible-count="(min-width: 1199px) 6,(min-width: 992px) 5,(min-width: 768px) 4, (min-width: 576px) 3, (min-width: 360px) 2,1" advance-count="(min-width: 1199px) 4,(min-width: 992px) 3,(min-width: 768px) 2, 1" loop="false">
        @foreach(getRequestedValue($setting) as $key => $post)   
        <a href="{{route('details',[$post->slug])}}" class="border-col-news">
            <div class="main-news">
                <div class="main-img">
                    <amp-img src="{{($post->picture) ? asset('storage'. $post->picture->full) : url('news.jpeg')}}" width="16" height="11" layout="responsive" alt="Example logo image"></amp-img>
                </div>
                <div class="main-content">
                    <h3>
                        {{$post->title}}
                    </h3>
                    <amp-img src="https://img.icons8.com/external-prettycons-flat-prettycons/47/000000/external-video-social-media-prettycons-flat-prettycons.png" width="20" height="20" layout="fixed" alt="Example logo image"></amp-img>
                </div>
            </div>
        </a>
        @endforeach
        </amp-base-carousel>
    @endif    
@endif  