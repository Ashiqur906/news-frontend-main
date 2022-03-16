<div class="col-md-12 col-lg-12 col-12 ml2 py3">
    <div class="section-title">
        <h2>জেলার সংবাদ</h2>
    </div>
</div>
<div class="col-md-12 col-lg-12 col-12">
    <div class="droppen">
        <div class="click_news_text">এক ক্লিকে জেলার সংবাদ</div>
        <div class="dropdown p2">
          <input type="checkbox" id="my-dropdown" value="" name="my-checkbox">
          <label for="my-dropdown"
             data-toggle="dropdown">
          জেলা 
          </label>
          <ul>
            @foreach(getDistrict() as $key => $district)
            <li><a href="{{route('district',$district->slug)}}">{{$district->title_bn}}</a></li>
            @endforeach
          </ul> 
        </div>

    </div>
</div>

