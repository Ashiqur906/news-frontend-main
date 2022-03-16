@php
    $setting_json = $layout_widgets[$wid]->widget_settings;
    $setting = widgetSetting($setting_json);

    if($setting->taxonomy == 'category'){
        $cat_name =  \App\Models\Category::where('id' , $setting->data)->first();
    }
   
    
@endphp
<div class="col-md-12 col-lg-12 col-sm-12 col-12 ml1 py3">
    <div class="section-title">
        <h2>{{@$cat_name->title}}</h2>
    </div>
</div>
@if($setting->taxonomy == 'html')
    @include('layouts.voice-tv.widgets.plain-html') 
@else
    @if(getRequestedValue($setting)) 
        <div class="col-md-12 col-lg-12 col-sm-12 col-12 pl2 r-m-a">
            <amp-carousel
                type="slides"
                layout="responsive"
                height="600"
                width="500"
                controls
                loop
                autoplay
                delay="2500"
                aria-label="Looping carousel"
                type="slides"
                class="carousel1"
            >
            @foreach(getRequestedValue($setting) as $key => $post)
                    <div class="main-crime-news slide">
                        <a href="{{route('details',[$post->slug])}}">
                            <amp-img src="{{($post->picture) ? asset('storage'. $post->picture->full) : url('news.jpeg')}}" layout="responsive" width="16" height="11" alt="Border Collie"></amp-img>
                            <amp-fit-text class="crime-main-content" layout="responsive" width="500" height="100">
                                <h3>{{$post->title}}</h3>
                            </amp-fit-text>
                        </a>
                    </div>      
            @endforeach
            </amp-carousel>
            {{--  Start  --}}

            {{--  End  --}}
        </div>
    @endif    
@endif        
