@foreach($cat_posts as $key => $post)
    @if($key < 5)
    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
        <a href="{{route('details',[$post->slug])}}">
            <div class="row country_card">

                <div class="{col-md-2 col-lg-2 col-sm-2 col-2">
                    <amp-img class="country_short_card_img" src="{{($post->picture) ? asset('storage'. $post->picture->full) : url('news.jpeg')}}" width="1" height="1" layout="responsive" alt="Example logo image"></amp-img>
                </div>
                <div class="col-md-10 col-lg-10 col-sm-10 col-10">
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
