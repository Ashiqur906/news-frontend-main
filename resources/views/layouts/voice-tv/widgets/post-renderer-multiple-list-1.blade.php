@php
    $setting_json = $layout_widgets[$wid]->widget_settings;
    $setting = widgetSetting($setting_json);
@endphp
<div class="col-md-12 col-lg-12 col-sm-12 col-12">
    <div class="section-title">
        <h2>সব খবর</h2>
    </div>
</div>
<div class="col-md-12 col-lg-12 col-sm-12 col-12">
    <div class="p1">
        <div class="scrollNews">
        @if($setting->taxonomy == 'html')
           @include('layouts.voice-tv.widgets.plain-html') 
        @else
            @if(getRequestedValue($setting)) 
                @foreach(getRequestedValue($setting) as $key => $post)
                    <a href="{{route('details',[$post->slug])}}" class="news-list-item">
                        <div class="news-list-item_content">
                            <div class="new-list-item_title">
                                {{$post->title}}
                            </div>
                        </div>
                    </a>
                 @endforeach 
            @endif     
        @endif       
        </div>
    </div>
</div>
