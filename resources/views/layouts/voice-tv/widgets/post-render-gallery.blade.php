@php
    $setting_json = $layout_widgets[$wid]->widget_settings;
    $setting = widgetSetting($setting_json);
@endphp
<div class="col-md-12 col-lg-12 col-12 py3 ml2">
    <div class="section-title">
        <h2>ছবি গ্যালারি</h2>
    </div> 
</div>
@if($setting->taxonomy == 'html')
    @include('layouts.voice-tv.widgets.plain-html') 
@else
    @if(getRequestedValue($setting)) 
        <div class="col-md-12 col-lg-12 col-12 r-b-b gallery-part">
                <amp-carousel id="carouselWithPreview" width="16" height="11" layout="responsive" type="slides" on="slideChange:carouselWithPreviewSelector.toggle(index=event.index, value=true)">
                @foreach(getRequestedValue($setting) as $key => $list)
                    <a href="{{route('details',[$list->slug])}}">
                        <amp-img src="{{($list->picture) ? asset('storage'.$list->picture->full) : url('news.jpeg')}}" width="16" height="11" layout="fill" alt="a sample image"></amp-img>
                    </a>
                @endforeach 
                </amp-carousel>
                
                <amp-selector id="carouselWithPreviewSelector" class="carousel-preview text-center pt1" on="select:carouselWithPreview.goToSlide(index=event.targetOption)" layout="container">
                @foreach(getRequestedValue($setting) as $key => $list)
                    <amp-img option="{{$key}}" selected src="{{($list->picture) ? asset('storage'.$list->picture->full) : url('news.jpeg')}}" width="60" height="40" alt="a sample image"></amp-img>
                @endforeach 
                </amp-selector>
               
        </div>
    @endif
@endif        
