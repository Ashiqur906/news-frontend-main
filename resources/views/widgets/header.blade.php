<main id="voice-header" class="">
    {{-- top Part --}}
    <div class="header-logo-ham-search">
        <div class="container">
            <div class="row relative">
                <div class="col-md-5 col-sm-5 col-lg-5">
                    <div class="navbar-button-search flex">
                        {{-- Toggle Sidebar Button Start --}}
                        <div class="togl-btn">
                            <div role="button" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger pr2">
                                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 18v1h-24v-1h24zm0-6v1h-24v-1h24zm0-6v1h-24v-1h24z" fill="#1040e2"/><path d="M24 19h-24v-1h24v1zm0-6h-24v-1h24v1zm0-6h-24v-1h24v1z"/></svg>
                            </div>

                        <?php
                        $categoriesJson = '[{"id":16,"title":"জাতীয়"},{"id":5,"title":"রাজনীতি"},{"id":4,"title":"অপরাধ"},{"id":13,"title":"খেলাধুলা"},{"id":9,"title":"শিক্ষাঙ্গন"},{"id":12,"title":"দেশের খবর"},{"id":8,"title":"মুক্তমত"},{"id":41,"title":"পশ্চিমবঙ্গ"},{"id":14,"title":"প্রবাসী"},{"id":3,"title":"বিনোদন"},{"id":7,"title":"বিশ্ব"},{"id":20,"title":"ভিডিও সংবাদ"},{"id":15,"title":"ভ্রমণ"},{"id":6,"title":"অর্থনীতি"},{"id":10,"title":"চিকিৎসা"},{"id":11,"title":"ধর্ম"}]';
                        $categories = json_decode($categoriesJson);
                        ?>
                        <amp-sidebar id="header-sidebar" class="ampstart-sidebar" layout="nodisplay">
                            <div class="flex justify-start items-center ampstart-sidebar-header">
                              <div role="button" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger items-start">✕</div>
                              <amp-img src="https://bn.voicetv.tv/assets/images/logo.png" width="165" height="40" layout="fixed" class="my0 mx-auto" alt="Example logo image"></amp-img>
                            </div>
                            <nav class="ampstart-sidebar-nav ampstart-nav">
                              <ul class="list-reset m0 p0 ampstart-label">

                                <li class="ampstart-nav-item ">
                                    <a href="{{ url('/') }}" class="text-decoration-none">প্রচ্ছদ</a>
                                </li>
                                @foreach($categories as $c)
                                  <li class="ampstart-nav-item nav-side-item">
                                      <a href="{{ url('/category') }}">{{$c->title}}</a>
                                  </li>
                                @endforeach

                              </ul>
                            </nav>

                            <ul class="ampstart-social-follow header-nav-social list-reset right-align">
                                <li class="mr2">
                                    <a href="#" class="inline-block">
                                        <amp-img src="https://img.icons8.com/color/48/000000/facebook-circled.png" width="16" height="16" layout="fixed" alt="Example logo image"></amp-img>
                                    </a>
                                </li>
                                <li class="mr2">
                                    <a href="#" class="inline-block">
                                      <amp-img src="https://img.icons8.com/color/48/000000/youtube-play.png" width="16" height="16" layout="fixed" alt="Example logo image"></amp-img>
                                    </a>
                                </li>
                                <li class="mr2">
                                    <a href="#" class="inline-block">
                                        <amp-img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png" width="16" height="16" layout="fixed" alt="Example logo image"></amp-img>
                                    </a>
                                </li>
                                <li class="mr2">
                                    <a href="#" class="inline-block">
                                        <amp-img src="https://img.icons8.com/color/48/000000/twitter-circled.png" width="16" height="16" layout="fixed" alt="Example logo image"></amp-img>
                                    </a>
                                </li>
                                <li class="mr2">
                                    <a href="#" class="inline-block">
                                        <amp-img src="https://img.icons8.com/color/48/000000/linkedin.png" width="16" height="16" layout="fixed" alt="Example logo image"></amp-img>
                                    </a>
                                </li>
                            </ul>

                          </amp-sidebar>
                        </div>
                        {{-- Toggle Sidebar Button End --}}
                        <div class="search-btn">
                            <form method="GET" action="#" target="_top">
                                <input name="search" type="search" placeholder="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24" width="24" role="img" aria-hidden="true"><path d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"></path></svg>
                         </form>
                        </div>
                    </div>
                    <time class="navbar-staticheader">রোববার, ১২ সেপ্টেম্বর ২০২১</time>
                </div>
                <div class="col-md-3 col-sm-3 col-lg-3">
                    <div class="voice-logo text-center">
                        <amp-img src="https://bn.voicetv.tv/assets/images/logo.png" width="303" height="69" layout="responsive" class="m-auto nav-logo" alt="Example logo image"></amp-img>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                    <div class="social-search">
                        <div class="en-bn-icon"> 
                              <a href="{{ route('archive')}}" class="ampstart-btn ampstart-btn-secondary engilsh-button">
                                আর্কাইভ
                              </a>

                             <a href="https://voicetv.tv/" class="ampstart-btn ampstart-btn-secondary bangla-button">
                                 ENGLISH
                             </a>

                        </div>
                        <div class="en-bn-short-icon">
                              <a href="{{route('archive')}}" class="ampstart-btn ampstart-btn-secondary en-button">
                                AR
                              </a>

                             <a href="https://voicetv.tv/" class="ampstart-btn ampstart-btn-secondary en-button">
                                 EN
                             </a>

                        </div>

                          <ul class="ampstart-social-follow header-nav-social list-reset right-align">
                                      <li class="mr2 sm-cust">
                                          <a href="#" class="inline-block">
                                              <amp-img src="https://img.icons8.com/color/48/000000/facebook-circled.png" width="16" height="16" layout="fixed" alt="Example logo image"></amp-img>
                                          </a>
                                      </li>
                                      <li class="mr2 sm-cust">
                                          <a href="#" class="inline-block">
                                            <amp-img src="https://img.icons8.com/color/48/000000/youtube-play.png" width="16" height="16" layout="fixed" alt="Example logo image"></amp-img>
                                          </a>
                                      </li>
                                      <li class="mr2 social-hide">
                                          <a href="#" class="inline-block">
                                              <amp-img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png" width="16" height="16" layout="fixed" alt="Example logo image"></amp-img>
                                          </a>
                                      </li>
                                      <li class="mr2 social-hide">
                                          <a href="#" class="inline-block">
                                              <amp-img src="https://img.icons8.com/color/48/000000/twitter-circled.png" width="16" height="16" layout="fixed" alt="Example logo image"></amp-img>
                                          </a>
                                      </li>
                                      <li class="mr2 social-hide">
                                          <a href="#" class="inline-block">
                                              <amp-img src="https://img.icons8.com/color/48/000000/linkedin.png" width="16" height="16" layout="fixed" alt="Example logo image"></amp-img>
                                          </a>
                                      </li>
                           </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Bottom part --}}
    <div class="header-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="ampstart-headerbar-nav ampstart-nav xs-hide sm-hide">
                        <ul class="list-reset center m0 p0 flex nowrap">
                           <li class="ampstart-nav-item ">
                               <a href="{{ url('/') }}" class="text-decoration-none block">প্রচ্ছদ</a>
                           </li>
                           @foreach($categories as $c)
                               <li class="ampstart-nav-item ">
                                   <a href="{{ url('/category') }}" class="text-decoration-none block">{{$c->title}}</a>
                               </li>
                          @endforeach

                        </ul>
                      </nav>
                </div>
            </div>
        </div>
    </div>
</main>
