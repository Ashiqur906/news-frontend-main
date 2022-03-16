<div class="container">
    <div class="marque_content row">
        <div class="col-md-2">
            <div class="news-marquee">
                <div class="align-center flex">
                   <div class="alert-spinner">
                       <div class="double-bounce"></div>
                   </div>
                   <span class="d-inline-flex">
                   <span class="pr-1">সংবাদ </span> শিরোনাম</span>
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <div class="marquee">
                <div class="track">
                  <div class="content">
                    <ul>
                        @foreach(getheadline() as $headline)
                            <li>
                                <div class="list-alert-spinner"></div> 
                                <a href="{{route('details',$headline->slug)}}">{{$headline->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
