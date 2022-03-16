.news-marquee{
    background-color: black;
    padding: 10px 5px;
 }

 {{--  --}}
 {{-- background: linear-gradient(
    45deg,transparent,#3c010c);
    padding: 10px 5px;
    overflow: hidden; --}}
    
 .marquee {
   background: linear-gradient( 
45deg
,#d32121,#3c010c);
    position: relative;
    width: 100vw;
    max-width: 100%;
    height: 44px;
    overflow-x: hidden;
    padding: 0px 10px;
 }
 .marquee ul{
   padding-left: 500px;
   margin-top: 10px;
 }
 .marquee li{
   display:inline; 
   color: #fff;
 }
 .track {
   position: absolute;
   white-space: nowrap;
   will-change: transform;
   animation: marquee 80s linear infinite;
   height: 44px;
 }
 .list-alert-spinner{
   width: 13px;
   height: 13px;
   display: inline-block;
   margin-right: 12px;
   position: relative;
   vertical-align: middle;
   margin-left: 5px;
   margin-top: 0px;
    background: #fff;
    border-radius: 50%;
}


     .news-marquee span{
        color: #fff;
        font-weight: bold;
     }
     .heading-news {
        {{-- box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%); --}}
        background-color: #fff;
        border-color: #fff;
        color: rgba(0,0,0,.87);
        {{-- border-radius: 4px; --}}
        {{-- border-bottom: 4px solid red; --}}
        max-height: 700px;
     }
     .heading-news a{
        text-decoration: none;
     }
     .main-news{
        {{-- box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%); --}}
        background-color: #fff;
        border-color: #665f5f;
        color: rgba(0,0,0,.87);
        {{-- border-radius: 4px; --}}
        {{-- border-bottom: 4px solid red; --}}
        max-height: 700px;
        font-family: SolaimanLipi,AdorshoLipi,voice;
     }
     .main-news a{
        text-decoration: none;
     }

     .youtube-text h3{
        font-weight: 800;
        font-size: 16px;
        letter-spacing: .03125em;
        line-height: 20px;
        margin-left: 10px;
        font-family: SolaimanLipi,AdorshoLipi,voice;
     }
     .second-section{
        {{-- background-color: #f5f5f5; --}}
     }
     .second-section .main-news{
        {{-- box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%); --}}
        background-color: #fff;
        border-color: #fff;
        color: rgba(0,0,0,.87);
        {{-- border-radius: 4px; --}}
        {{-- max-height: 450px; --}}
     }


     .scrollNews{
        {{-- box-shadow: 0 3px 1px -2px rgba(0,0,0,.2),0 2px 2px 0 rgba(0,0,0,.14),0 1px 5px 0 rgba(0,0,0,.12); --}}
        background: #fff;
        color: rgba(0,0,0,.87);
        display: block;
        padding: 8px 0;
        position: static;
        transition: box-shadow .28s cubic-bezier(.4,0,.2,1);
        will-change: box-shadow;
        max-height: 400px;
        overflow: auto;
     }
     .news-list-item {
         align-items: center;
         display: flex;
         flex: 1 1 100%;
         letter-spacing: normal;
         min-height: 48px;
         outline: none;
         padding: 0 16px;
         position: relative;
         text-decoration: none;
         border-bottom: 1px solid #e7e7e7;
         min-height: 40px;
     }
     .news-list-item:before {
         background-color: currentColor;
         bottom: 0;
         content: "";
         left: 0;
         opacity: 0;
         pointer-events: none;
         position: absolute;
         right: 0;
         top: 0;
         transition: .3s cubic-bezier(.25,.8,.5,1);
     }
     .news-list-item_content {
         align-items: center;
         align-self: center;
         display: flex;
         flex-wrap: wrap;
         flex: 1 1;
         overflow: hidden;
             padding: 12px 0;
     }
     .new-list-item_title{
        font-weight: 800;
     }
     .news-list-item:after {
         content: "";
         min-height: inherit;
         font-size: 0;
     }

     .third-section .main-news{
        background-color: #fff;
        border-color: #fff;
        color: rgba(0,0,0,.87);
        max-height: 350px;
        z-index: 9;
     }

     a{
        text-decoration: none;
     }


     .click_news_text {
         align-items: center;
         display: flex;
         flex-wrap: wrap;
         font-size: 20px;
         font-weight: bold;
         letter-spacing: 0.2px;
         line-height: 32px;
         word-break: break-all;
         padding: 16px;
         color: #de3902;
         border-bottom: 1px solid #c1bbbb;
         font-family: SolaimanLipi,AdorshoLipi,voice;
     }
     .dropdown {
       position: relative;
       display: inline-block;
     }
     .dropdown > label,
     .dropdown > a[role="button"] {
       display: inline-block;
       padding: 6px 100px;
       color: #000;
       line-height: 1.5em;
       text-decoration: none;
       border: 1px solid #8c8c8c;
       cursor: pointer;
       -webkit-border-radius: 3px;
       -moz-border-radius: 3px;
       border-radius: 3px;
       font-size: 20px;
           font-weight: 700;
           font-family: SolaimanLipi,AdorshoLipi,voice;
     }
     .dropdown > ul {
       position: absolute;
       z-index: 999;
       display: block;
       left: -100vw;
       top: calc(1.5em + 30px);
       border: 1px solid #8c8c8c;
       background: #fff;
       padding: 6px 0;
       margin: 0;
       list-style: none;
       width: 87%;
       -webkit-border-radius: 3px;
       -moz-border-radius: 3px;
       border-radius: 3px;
       -webkit-box-shadow: 0 3px 8px rgba(0,0,0,.15);
       -moz-box-shadow: 0 3px 8px rgba(0,0,0,.15);
       box-shadow: 0 3px 8px rgba(0,0,0,.15);
     }

     .dropdown > ul a {
       display: block;
       padding: 6px 15px;
       text-decoration: none;
       color: #333;
       font-family: SolaimanLipi,AdorshoLipi,voice;
     }

     .dropdown > ul a:hover,
     .dropdown > ul a:focus {
       background: #ececec;
     }

     .dropdown > input[type="checkbox"]:checked ~ ul,
     .dropdown > ul:target {
       left: 18px;
     }
     .dropdown > input[type="checkbox"] {
       position: absolute;
       left: -100vw;
     }
     .video-news{
        {{-- padding: 10px 0; --}}
     }
     .video-text{
        padding: 10px 20px;
        background-color: #b71c1c;
     }
     .video-section{
        padding: 10px 20px;
        background-color: #212121;
     }
     .videos_text{
        color: #fff;
        font-size: 18px;
        font-weight: 700;
        font-family: SolaimanLipi,AdorshoLipi,voice;
     }
     .video-section .main-news{
        background-color: #212121;
        color: #fff;
        max-height: 350px;
        cursor: pointer;
        font-family: SolaimanLipi,AdorshoLipi,voice;
     }

         amp-selector.tabpanels [role=tabpanel] {
           display: none;
           /* custom styling, feel free to change */
           padding: var(--space-4);
         }
         amp-selector.tabpanels [role=tabpanel][selected] {
           outline: none;
           display: block;
         }
         .tab-youtube-section .main-content{
            box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
            background-color: #1e1e1e;
            border-color: #1e1e1e;
            color: #fff;
            border-radius: 4px;
         }
         .tab-youtube-section .main-content p{
            margin-left: 16px;
         }
         /* Styles for the selector based tabs */
         amp-selector[role=tablist].tabs-with-selector {
            display: flex;

         }
         .news-list-item .country_card{
            border-bottom: none;
         }
         .add-padd{
            padding: 40px 17px;
         }
         .third-section{
            padding-top: 18px;
         }
