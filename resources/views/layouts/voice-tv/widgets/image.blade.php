@php
    $setting_json = $layout_widgets[$wid]->widget_settings;
    $setting = widgetSetting($setting_json);
@endphp
@if($setting->taxonomy == 'html')
        @include('layouts.voice-tv.widgets.plain-html') 
@else
    @if(getRequestedValue($setting)) 
        @foreach(getRequestedValue($setting) as $key => $post)
                <div class="col-md-12 col-lg-12 col-12 news-border">
                    <a href="{{route('details',[$post->slug])}}">
                    <amp-img src="{{($post->picture) ? asset('storage'. $post->picture->full) : url('news.jpeg')}}" width="15" height="9" layout="responsive" alt="Example logo image"></amp-img>
                    <a>
                </div>
        @endforeach  
    @endif   
@endif    