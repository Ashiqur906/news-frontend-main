<footer class="ampstart-footer">
    <div class="container">
        {{--  Footer Logo section  --}}
        <div class="row py1">
            <div class="col-md-2 col-lg-2 col-sm-12 col-12">
                <a href="#">
                    <amp-img src="https://bn.voicetv.tv/assets/images/logo.png" width="303" height="69" layout="responsive" class="nav-logo" alt="Example logo image"></amp-img>
                </a>
            </div>
            {{--  <div class="col-md-8 col-lg-8"></div>
            <div class="col-md-2 col-lg-2"></div>  --}}
        </div>
        {{--  Footer main section  --}}
        <div class="row border-news">
            {{-- Footer 1st part --}}
            <div class="col-md-2 col-lg-2 col-sm-12 col-12 border-col">
                <div class="footer-left">
                    <h2>সংস্করণ</h2>
                    <ul>
                        <li class="footer-li-active"><a href="#">বাংলা</a></li>
                        <li class="footer-li"><a href="#">English</a></li>
                        <li class="footer-li"><a href="#">আর্কাইভ</a></li>
                    </ul>
                </div>
            </div>
            {{-- Footer 2nd part --}}
            <div class="col-md-5 col-lg-5 col-sm-12 col-12 border-col">
                <div class="footer-middle row">
                    <div class="col-md-6 col-lg-6 col-sm-6 col-6">
                        <ul>
                            <li class="footer-list"><a href="#">আমাদের সম্পর্কে</a></li>
                            <li class="footer-list"><a href="{{ url('/privacy-policy') }}">প্রাইভেসি পলিসি</a></li>
                            <li class="footer-list"><a href="{{ url('/cookie-policy') }}">কুকি পলিসি</a></li>
                            <li class="footer-list"><a href="#">ভিডিও সংবাদ</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-6">
                        <ul>
                            <li class="footer-list"><a href="https://shaplamedia.com/">শাপলা মিডিয়া</a></li>
                            <li class="footer-list"><a href="https://cinebaz.com/">Cinebaz</a></li>
                            <li class="footer-list"><a href="#">প্রযুক্তি</a></li>
                            <li class="footer-list"><a href="#">লাইফস্টাইল</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- Footer 3rd part --}}
            <div class="col-md-5 col-lg-5 col-sm-12 col-12 border-col">
                <div class="footer-right">
                    <p class="text-center my0 mx-auto">প্রতিষ্ঠাতা ও প্রকাশক: মো. সেলিম খান</p>
                    <p class="text-center my0 mx-auto">© স্বত্ব ভয়েস টিভি ২০২০ — <a href="https://bn.voicetv.tv" class="text-decoration-none">ভয়েস টিভি</a></p>
                    <address class="text-center my0 mx-auto">
                        <strong>যোগাযোগঃ</strong> <br>
                        ভয়েস টিভি ৮০/৩, ভিআইপি রোড, খান টাওয়ার, কাকরাইল,<br>
                        ঢাকা-১০০০, বাংলাদেশ<br>
                        ফোনঃ +৮৮ ০২ ৯৩৩৮৫৩০
                    </address>
                </div>
            </div>
        </div>
        {{--  social network name  --}}
        <div class="row border-news">
            <div class="col-md-3 col-lg-3 col-sm-12 col-12">
                <div class="footer-socail-name">
                    <p>আমাদের সঙ্গে থাকুন</p>
                    <ul class="ampstart-social-follow header-nav-social list-reset right-align">
                        @foreach ( getSocial() as $item)
                            @if($item->key == 'facebook')
                                <li class="mr2 sm-cust">
                                    <a href="{{ $item->value }}" class="inline-block" target="blank">
                                        <amp-img src="https://img.icons8.com/color/48/000000/facebook-circled.png" width="16" height="16" layout="fixed" alt="{{ $item->key }}"></amp-img>
                                    </a>
                                </li>
                            @endif
                            @if($item->key == 'youtube')
                                <li class="mr2 sm-cust">
                                    <a href="{{ $item->value }}" class="inline-block" target="blank">
                                        <amp-img src="https://img.icons8.com/color/48/000000/youtube-play.png" width="16" height="16" layout="fixed" alt="{{ $item->key }}"></amp-img>
                                    </a>
                                </li>
                            @endif
                            @if($item->key == 'instagram')
                                <li class="mr2 sm-cust">
                                    <a href="{{ $item->value }}" class="inline-block" target="blank">
                                        <amp-img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png" width="16" height="16" layout="fixed" alt="{{ $item->key }}"></amp-img>
                                    </a>
                                </li>
                            @endif
                            @if($item->key == 'linkedin')
                                <li class="mr2 sm-cust">
                                    <a href="{{ $item->value }}" class="inline-block" target="blank">
                                        <amp-img src="https://img.icons8.com/color/48/000000/linkedin.png" width="16" height="16" layout="fixed" alt="{{ $item->key }}"></amp-img>
                                    </a>
                                </li>
                            @endif
                            @if($item->key == 'twitter')
                                <li class="mr2 sm-cust">
                                    <a href="{{ $item->value }}" class="inline-block" target="blank">
                                        <amp-img src="https://img.icons8.com/color/48/000000/twitter-circled.png" width="16" height="16" layout="fixed" alt="{{ $item->key }}"></amp-img>
                                    </a>
                                </li>
                            @endif
                            
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-lg-9 col-sm-12 col-12">
                <div class="play-store">
                    <a href='https://play.google.com/store/apps/details?id=com.voicetv.tv&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'>
                        <amp-img src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png" width="150" height="60" layout="fixed" alt="Example logo image"></amp-img>
                    </a>
                </div>
            </div>
        </div>
        {{--  Developer Company Name  --}}
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                <div class="develop-name text-center mx-auto">
                    Developed by  — <a href="#">
                        <amp-img src="https://bn.voicetv.tv/assets/images/buildit-logo-red-square.svg" width="16" height="16" layout="fixed" alt="Example logo image"></amp-img>
                    Build it
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
