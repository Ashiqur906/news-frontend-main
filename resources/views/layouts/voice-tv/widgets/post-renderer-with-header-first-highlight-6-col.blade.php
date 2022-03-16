@php
    $setting_json = $layout_widgets[$wid]->widget_settings;
    $setting = widgetSetting($setting_json);
    if($setting->taxonomy == 'category'){
        $cat_name =  \App\Models\Category::where('id' , $setting->data)->first();
    }
    @endphp
<div class="col-md-12 col-lg-12 col-12 py3 ml1">
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
                    @if($key == 0)
                    <div class="col-md-12 col-lg-12 border-col-news w-fit">
                        <a href="{{route('details',[$post->slug])}}">
                            <div class="row country_card">
                                <div class="col-md-2 col-lg-2 col-2 col-sm-2">
                                    <amp-img class="country_card_img" src="{{($post->picture) ? asset('storage'. $post->picture->full) : url('news.jpeg')}}" width="1" height="1" layout="responsive" alt="Example logo image"></amp-img>
                                </div>
                                <div class="col-md-10 col-lg-10 col-10 col-sm-10">
                                    <div class="country_card_text">
                                        <h3>
                                           {{$post->title}}
                                        </h3>
                                        <p>
                                          {{$post->short_description}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                    @if($key != 0)
                    <div class="col-md-6 col-sm-12 col-lg-6 border-col-news w-fit">
                        <a href="{{route('details',[$post->slug])}}">
                            <div class="row country_card">

                                <div class="col-md-2 col-lg-2 col-2">
                                    <amp-img class="country_short_card_img" src="{{($post->picture) ? asset('storage'. $post->picture->full) : url('news.jpeg')}}" width="1" height="1" layout="responsive" alt="Example logo image"></amp-img>
                                </div>
                                <div class="col-md-10 col-lg-10 col-10">
                                    <div class="country_card_text">
                                        <h3>
                                            {{$post->title}}
                                        </h3>

                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                    @endif
                @endforeach    
            </div>
        </div>
    @endif    
@endif        
