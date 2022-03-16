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

                        <amp-sidebar id="header-sidebar" class="ampstart-sidebar" layout="nodisplay">
                            <div class="flex justify-start items-center ampstart-sidebar-header">
                              <div role="button" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger items-start">✕</div>
                                <a href="{{url('/')}}">
                                    <amp-img src="https://bn.voicetv.tv/assets/images/logo.png" width="165" height="40" layout="fixed" class="mt1 mx-auto" alt="Example logo image"></amp-img>
                                </a>  
                            </div>
                            <nav class="ampstart-sidebar-nav ampstart-nav">
                              <ul class="list-reset m0 p0 ampstart-label">

                                <li class="ampstart-nav-item ">
                                    <a href="{{ url('/') }}" class="text-decoration-none">প্রচ্ছদ</a>
                                </li>
                                @foreach(getActiveCategory() as $category)
                                  <li class="ampstart-nav-item nav-side-item">
                                      <a href="{{ route('category.wise.news',$category->slug) }}">{{$category->title}}</a>
                                  </li>
                                @endforeach
 
                              </ul>
                            </nav>

                            <ul class="ampstart-social-follow header-nav-social list-reset right-align">
                                @foreach ( getSocial() as $item)
                                @if($item->key == 'facebook')
                                        <li class="mr2 sm-cust">
                                            <a href="{{ $item->value }}" class="inline-block" target="_blank">
                                                <amp-img src="https://img.icons8.com/color/48/000000/facebook-circled.png" width="16" height="16" layout="fixed" alt="{{ $item->key }}"></amp-img>
                                            </a>
                                        </li>
                                    @endif
                                    @if($item->key == 'youtube')
                                        <li class="mr2 sm-cust">
                                            <a href="{{ $item->value }}" class="inline-block" target="_blank">
                                                <amp-img src="https://img.icons8.com/color/48/000000/youtube-play.png" width="16" height="16" layout="fixed" alt="{{ $item->key }}"></amp-img>
                                            </a>
                                        </li>
                                    @endif
                                    @if($item->key == 'instagram')
                                        <li class="mr2 sm-cust">
                                            <a href="{{ $item->value }}" class="inline-block" target="_blank">
                                                <amp-img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png" width="16" height="16" layout="fixed" alt="{{ $item->key }}"></amp-img>
                                            </a>
                                        </li>
                                    @endif
                                    @if($item->key == 'linkedin')
                                        <li class="mr2 sm-cust">
                                            <a href="{{ $item->value }}" class="inline-block" target="_blank">
                                                <amp-img src="https://img.icons8.com/color/48/000000/linkedin.png" width="16" height="16" layout="fixed" alt="{{ $item->key }}"></amp-img>
                                            </a>
                                        </li>
                                    @endif
                                    @if($item->key == 'twitter')
                                        <li class="mr2 sm-cust">
                                            <a href="{{ $item->value }}" class="inline-block" target="_blank">
                                                <amp-img src="https://img.icons8.com/color/48/000000/twitter-circled.png" width="16" height="16" layout="fixed" alt="{{ $item->key }}"></amp-img>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>

                          </amp-sidebar>
                        </div>
                        {{-- Toggle Sidebar Button End --}}
                        {{-- /newspaper/news-frontend/public/search --}}
                        {{-- {{url('/search')}} --}}
                        <div class="search-btn">
                            <button on="tap:AMP.setState({visible: !visible})" class="btn-search"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24" width="24" role="img" aria-hidden="true"><path d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"></path></svg></button> 
                            <form [class]="visible ? 'show' : 'hide'" class="hide" method="GET" action="{{route('search')}}" target="_top">
                                <input type="text" name="search" class="input-search" placeholder="Type to Search..." required>
                                <button on="tap:AMP.setState({visible: !visible})" class="btn-search"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24" width="24" role="img" aria-hidden="true"><path d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"></path></svg></button>
                            </form>
                        </div>
                    </div>
                    <time class="navbar-staticheader"> {{current_etb()}}</time>
                </div>
                <div class="col-md-3 col-sm-3 col-lg-3">
                    <div class="voice-logo text-center">
                        <a href="{{url('/')}}">
                             <amp-img src="https://bn.voicetv.tv/assets/images/logo.png" width="303" height="69" layout="responsive" class="m-auto nav-logo" alt="Example logo image"></amp-img>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                    <div class="social-search">
                        <div class="en-bn-icon">
                              <a href="{{route('archive')}}" class="ampstart-btn ampstart-btn-secondary engilsh-button">
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
                            @foreach ( getSocial() as $item)
                                @if($item->key == 'facebook')
                                    <li class="mr2 sm-cust">
                                        <a href="{{ $item->value }}" class="inline-block" target="_blank">
                                            <amp-img src="https://img.icons8.com/color/48/000000/facebook-circled.png" width="16" height="16" layout="fixed" alt="{{ $item->key }}"></amp-img>
                                        </a>
                                    </li>
                                @endif
                                @if($item->key == 'youtube')
                                    <li class="mr2 sm-cust">
                                        <a href="{{ $item->value }}" class="inline-block" target="_blank">
                                            <amp-img src="https://img.icons8.com/color/48/000000/youtube-play.png" width="16" height="16" layout="fixed" alt="{{ $item->key }}"></amp-img>
                                        </a>
                                    </li>
                                @endif
                                @if($item->key == 'instagram')
                                    <li class="mr2 sm-cust">
                                        <a href="{{ $item->value }}" class="inline-block" target="_blank">
                                            <amp-img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png" width="16" height="16" layout="fixed" alt="{{ $item->key }}"></amp-img>
                                        </a>
                                    </li>
                                @endif
                                @if($item->key == 'linkedin')
                                    <li class="mr2 sm-cust">
                                        <a href="{{ $item->value }}" class="inline-block" target="_blank">
                                            <amp-img src="https://img.icons8.com/color/48/000000/linkedin.png" width="16" height="16" layout="fixed" alt="{{ $item->key }}"></amp-img>
                                        </a>
                                    </li>
                                @endif
                                @if($item->key == 'twitter')
                                    <li class="mr2 sm-cust">
                                        <a href="{{ $item->value }}" class="inline-block" target="_blank">
                                            <amp-img src="https://img.icons8.com/color/48/000000/twitter-circled.png" width="16" height="16" layout="fixed" alt="{{ $item->key }}"></amp-img>
                                        </a>
                                    </li>
                                @endif
                                      
                            @endforeach
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
                           @foreach(getActiveCategory() as $c)
                               <li class="ampstart-nav-item ">
                                   <a href="{{ route('category.wise.news',$c->slug) }}" class="text-decoration-none block">{{$c->title}}</a>
                               </li>
                          @endforeach

                        </ul>
                      </nav>
                </div>
            </div>
        </div>
    </div>
</main>
