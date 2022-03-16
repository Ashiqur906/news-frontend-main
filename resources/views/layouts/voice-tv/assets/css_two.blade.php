<style amp-custom="">/*! Bassplate | MIT License | http://github.com/basscss/bassplate */
    :root {
        --color-error: #B00020;
        --color-primary: #005AF0;
    }
    @font-face {
        font-family: 'SolaimanLipi';
        src: url('{{asset('assets/fonts/solaiman/SolaimanLipi.eot')}}');
        src: url('{{asset('assets/fonts/solaiman/SolaimanLipi.woff')}}') format('woff'),
        url('{{asset('assets/fonts/solaiman/SolaimanLipi.ttf')}}') format('truetype'),
        url('{{asset('assets/fonts/solaiman/SolaimanLipi.svg#SolaimanLipiNormal')}}') format('svg'),
        url('{{asset('assets/fonts/solaiman/SolaimanLipi.eot?#iefix')}}') format('embedded-opentype');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }
    @font-face {
        font-family: 'AdorshoLipi';
        src: url('{{asset('assets/fonts/adorsho-lipi/AdorshoLipi.eot')}}');
        src: url('{{asset('assets/fonts/adorsho-lipi/AdorshoLipi.woff')}}') format('woff'),
        url('{{asset('assets/fonts/adorsho-lipi/AdorshoLipi.ttf')}}') format('truetype'),
        url('{{asset('assets/fonts/adorsho-lipi/AdorshoLipi.svg#AdorshoLipi')}}') format('svg'),
        url('{{asset('assets/fonts/adorsho-lipi/AdorshoLipi.eot?#iefix')}}') format('embedded-opentype');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }
    @font-face {
        font-family: 'voice';
        src: url('{{asset('assets/fonts/voice/voice.eot')}}');
        src: url('{{asset('assets/fonts/voice/voice.woff')}}') format('woff'),
        url('{{asset('assets/fonts/voice/voice.ttf')}}') format('truetype'),
        url('{{asset('assets/fonts/voice/voice.svg#voice')}}') format('svg'),
        url('{{asset('assets/fonts/voice/voice.eot?#iefix')}}') format('embedded-opentype');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }
    /*! normalize.css v5.0.0 | MIT License | github.com/necolas/normalize.css */html{font-family:sans-serif;line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,footer,header,nav,section{display:block}h1{font-size:2em;margin:.67em 0}figcaption,figure,main{display:block}figure{margin:1em 40px}hr{box-sizing:content-box;height:0;overflow:visible}pre{font-family:monospace,monospace;font-size:1em}a{background-color:transparent;-webkit-text-decoration-skip:objects}a:active,a:hover{outline-width:0}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:inherit;font-weight:bolder}code,kbd,samp{font-family:monospace,monospace;font-size:1em}dfn{font-style:italic}mark{background-color:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}audio,video{display:inline-block}audio:not([controls]){display:none;height:0}img{border-style:none}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0}button,input{overflow:visible}button,select{text-transform:none}[type=reset],[type=submit],button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:1px dotted ButtonText}fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em}legend{box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal}progress{display:inline-block;vertical-align:baseline}textarea{overflow:auto}[type=checkbox],[type=radio]{box-sizing:border-box;padding:0}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}details,menu{display:block}summary{display:list-item}canvas{display:inline-block}[hidden],template{display:none}.h00{font-size:4rem}.h0,.h1{font-size:3rem}.h2{font-size:2rem}.h3{font-size:1.5rem}.h4{font-size:1.125rem}.h5{font-size:1rem}.h6{font-size:.75rem}.font-family-inherit{font-family:inherit}.font-size-inherit{font-size:inherit}.text-decoration-none{text-decoration:none}.bold{font-weight:700}.regular{font-weight:400}.italic{font-style:italic}.caps{text-transform:uppercase;letter-spacing:.2em}.left-align{text-align:left}.center{text-align:center}.right-align{text-align:right}.justify{text-align:justify}.nowrap{white-space:nowrap}.break-word{word-wrap:break-word}.line-height-1{line-height:1rem}.line-height-2{line-height:1.125rem}.line-height-3{line-height:1.5rem}.line-height-4{line-height:2rem}.list-style-none{list-style:none}.underline{text-decoration:underline}.truncate{max-width:100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.list-reset{list-style:none;padding-left:0}.inline{display:inline}.block{display:block}.inline-block{display:inline-block}.table{display:table}.table-cell{display:table-cell}.overflow-hidden{overflow:hidden}.overflow-scroll{overflow:scroll}.overflow-auto{overflow:auto}.clearfix:after,.clearfix:before{content:" ";display:table}.clearfix:after{clear:both}.left{float:left}.right{float:right}.fit{max-width:100%}.max-width-1{max-width:24rem}.max-width-2{max-width:32rem}.max-width-3{max-width:48rem}.max-width-4{max-width:64rem}.border-box{box-sizing:border-box}.align-baseline{vertical-align:baseline}.align-top{vertical-align:top}.align-middle{vertical-align:middle}.align-bottom{vertical-align:bottom}.m0{margin:0}.mt0{margin-top:0}.mr0{margin-right:0}.mb0{margin-bottom:0}.ml0,.mx0{margin-left:0}.mx0{margin-right:0}.my0{margin-top:0;margin-bottom:0}.m1{margin:.5rem}.mt1{margin-top:.5rem}.mr1{margin-right:.5rem}.mb1{margin-bottom:.5rem}.ml1,.mx1{margin-left:.5rem}.mx1{margin-right:.5rem}.my1{margin-top:.5rem;margin-bottom:.5rem}.m2{margin:1rem}.mt2{margin-top:1rem}.mr2{margin-right:1rem}.mb2{margin-bottom:1rem}.ml2,.mx2{margin-left:1rem}.mx2{margin-right:1rem}.my2{margin-top:1rem;margin-bottom:1rem}.m3{margin:1.5rem}.mt3{margin-top:1.5rem}.mr3{margin-right:1.5rem}.mb3{margin-bottom:1.5rem}.ml3,.mx3{margin-left:1.5rem}.mx3{margin-right:1.5rem}.my3{margin-top:1.5rem;margin-bottom:1.5rem}.m4{margin:2rem}.mt4{margin-top:2rem}.mr4{margin-right:2rem}.mb4{margin-bottom:2rem}.ml4,.mx4{margin-left:2rem}.mx4{margin-right:2rem}.my4{margin-top:2rem;margin-bottom:2rem}.mxn1{margin-left:calc(.5rem * -1);margin-right:calc(.5rem * -1)}.mxn2{margin-left:calc(1rem * -1);margin-right:calc(1rem * -1)}.mxn3{margin-left:calc(1.5rem * -1);margin-right:calc(1.5rem * -1)}.mxn4{margin-left:calc(2rem * -1);margin-right:calc(2rem * -1)}.m-auto{margin:auto}.mt-auto{margin-top:auto}.mr-auto{margin-right:auto}.mb-auto{margin-bottom:auto}.ml-auto,.mx-auto{margin-left:auto}.mx-auto{margin-right:auto}.my-auto{margin-top:auto;margin-bottom:auto}.p0{padding:0}.pt0{padding-top:0}.pr0{padding-right:0}.pb0{padding-bottom:0}.pl0,.px0{padding-left:0}.px0{padding-right:0}.py0{padding-top:0;padding-bottom:0}.p1{padding:.5rem}.pt1{padding-top:.5rem}.pr1{padding-right:.5rem}.pb1{padding-bottom:.5rem}.pl1{padding-left:.5rem}.py1{padding-top:.5rem;padding-bottom:.5rem}.px1{padding-left:.5rem;padding-right:.5rem}.p2{padding:1rem}.pt2{padding-top:1rem}.pr2{padding-right:1rem}.pb2{padding-bottom:1rem}.pl2{padding-left:1rem}.py2{padding-top:1rem;padding-bottom:1rem}.px2{padding-left:1rem;padding-right:1rem}.p3{padding:1.5rem}.pt3{padding-top:1.5rem}.pr3{padding-right:1.5rem}.pb3{padding-bottom:1.5rem}.pl3{padding-left:1.5rem}.py3{padding-top:1.5rem;padding-bottom:1.5rem}.px3{padding-left:1.5rem;padding-right:1.5rem}.p4{padding:2rem}.pt4{padding-top:2rem}.pr4{padding-right:2rem}.pb4{padding-bottom:2rem}.pl4{padding-left:2rem}.py4{padding-top:2rem;padding-bottom:2rem}.px4{padding-left:2rem;padding-right:2rem}.col{float:left}.col,.col-right{box-sizing:border-box}.col-right{float:right}.col-1{width:8.33333%}.col-2{width:16.66667%}.col-3{width:25%}.col-4{width:33.33333%}.col-5{width:41.66667%}.col-6{width:50%}.col-7{width:58.33333%}.col-8{width:66.66667%}.col-9{width:75%}.col-10{width:83.33333%}.col-11{width:91.66667%}.col-12{width:100%}@media (min-width:40.06rem){.sm-col{float:left;box-sizing:border-box}.sm-col-right{float:right;box-sizing:border-box}.sm-col-1{width:8.33333%}.sm-col-2{width:16.66667%}.sm-col-3{width:25%}.sm-col-4{width:33.33333%}.sm-col-5{width:41.66667%}.sm-col-6{width:50%}.sm-col-7{width:58.33333%}.sm-col-8{width:66.66667%}.sm-col-9{width:75%}.sm-col-10{width:83.33333%}.sm-col-11{width:91.66667%}.sm-col-12{width:100%}}@media (min-width:52.06rem){.md-col{float:left;box-sizing:border-box}.md-col-right{float:right;box-sizing:border-box}.md-col-1{width:8.33333%}.md-col-2{width:16.66667%}.md-col-3{width:25%}.md-col-4{width:33.33333%}.md-col-5{width:41.66667%}.md-col-6{width:50%}.md-col-7{width:58.33333%}.md-col-8{width:66.66667%}.md-col-9{width:75%}.md-col-10{width:83.33333%}.md-col-11{width:91.66667%}.md-col-12{width:100%}}@media (min-width:64.06rem){.lg-col{float:left;box-sizing:border-box}.lg-col-right{float:right;box-sizing:border-box}.lg-col-1{width:8.33333%}.lg-col-2{width:16.66667%}.lg-col-3{width:25%}.lg-col-4{width:33.33333%}.lg-col-5{width:41.66667%}.lg-col-6{width:50%}.lg-col-7{width:58.33333%}.lg-col-8{width:66.66667%}.lg-col-9{width:75%}.lg-col-10{width:83.33333%}.lg-col-11{width:91.66667%}.lg-col-12{width:100%}}.flex{display:-ms-flexbox;display:flex}@media (min-width:40.06rem){.sm-flex{display:-ms-flexbox;display:flex}}@media (min-width:52.06rem){.md-flex{display:-ms-flexbox;display:flex}}@media (min-width:64.06rem){.lg-flex{display:-ms-flexbox;display:flex}}.flex-column{-ms-flex-direction:column;flex-direction:column}.flex-wrap{-ms-flex-wrap:wrap;flex-wrap:wrap}.items-start{-ms-flex-align:start;align-items:flex-start}.items-end{-ms-flex-align:end;align-items:flex-end}.items-center{-ms-flex-align:center;align-items:center}.items-baseline{-ms-flex-align:baseline;align-items:baseline}.items-stretch{-ms-flex-align:stretch;align-items:stretch}.self-start{-ms-flex-item-align:start;align-self:flex-start}.self-end{-ms-flex-item-align:end;align-self:flex-end}.self-center{-ms-flex-item-align:center;-ms-grid-row-align:center;align-self:center}.self-baseline{-ms-flex-item-align:baseline;align-self:baseline}.self-stretch{-ms-flex-item-align:stretch;-ms-grid-row-align:stretch;align-self:stretch}.justify-start{-ms-flex-pack:start;justify-content:flex-start}.justify-end{-ms-flex-pack:end;justify-content:flex-end}.justify-center{-ms-flex-pack:center;justify-content:center}.justify-between{-ms-flex-pack:justify;justify-content:space-between}.justify-around{-ms-flex-pack:distribute;justify-content:space-around}.justify-evenly{-ms-flex-pack:space-evenly;justify-content:space-evenly}.content-start{-ms-flex-line-pack:start;align-content:flex-start}.content-end{-ms-flex-line-pack:end;align-content:flex-end}.content-center{-ms-flex-line-pack:center;align-content:center}.content-between{-ms-flex-line-pack:justify;align-content:space-between}.content-around{-ms-flex-line-pack:distribute;align-content:space-around}.content-stretch{-ms-flex-line-pack:stretch;align-content:stretch}.flex-auto{-ms-flex:1 1 auto;flex:1 1 auto;min-width:0;min-height:0}.flex-none{-ms-flex:none;flex:none}.order-0{-ms-flex-order:0;order:0}.order-1{-ms-flex-order:1;order:1}.order-2{-ms-flex-order:2;order:2}.order-3{-ms-flex-order:3;order:3}.order-last{-ms-flex-order:99999;order:99999}.relative{position:relative}.absolute{position:absolute}.fixed{position:fixed}.top-0{top:0}.right-0{right:0}.bottom-0{bottom:0}.left-0{left:0}.z1{z-index:1}.z2{z-index:2}.z3{z-index:3}.z4{z-index:4}.border{border-style:solid;border-width:1px}.border-top{border-top-style:solid;border-top-width:1px}.border-right{border-right-style:solid;border-right-width:1px}.border-bottom{border-bottom-style:solid;border-bottom-width:1px}.border-left{border-left-style:solid;border-left-width:1px}.border-none{border:0}.rounded{border-radius:3px}.circle{border-radius:50%}.rounded-top{border-radius:3px 3px 0 0}.rounded-right{border-radius:0 3px 3px 0}.rounded-bottom{border-radius:0 0 3px 3px}.rounded-left{border-radius:3px 0 0 3px}.not-rounded{border-radius:0}.hide{position:absolute;height:1px;width:1px;overflow:hidden;clip:rect(1px,1px,1px,1px)}@media (max-width:40rem){.xs-hide{display:none}}@media (min-width:40.06rem) and (max-width:52rem){.sm-hide{display:none}}@media (min-width:52.06rem) and (max-width:64rem){.md-hide{display:none}}@media (min-width:64.06rem){.lg-hide{display:none}}.display-none{display:none}*{box-sizing:border-box}body{background:#fff;color:#4a4a4a;font-family: Arial,voice,Sans-Serif;min-width:315px;overflow-x:hidden;font-smooth:always;-webkit-font-smoothing:antialiased}main{width:100%; margin-right: auto; margin-left: auto;}p{padding:0;margin:0}.ampstart-accent{color:#003f93}#content:target{margin-top:calc(0px - 3.5rem);padding-top:3.5rem}.ampstart-title-lg{font-size:3rem;line-height:3.5rem;letter-spacing:.06rem}.ampstart-title-md{font-size:2rem;line-height:2.5rem;letter-spacing:.06rem}.ampstart-title-sm{font-size:1.5rem;line-height:2rem;letter-spacing:.06rem}.ampstart-subtitle,body{line-height:1.5rem;letter-spacing:normal}.ampstart-subtitle{color:#003f93;font-size:1rem}.ampstart-byline,.ampstart-caption,.ampstart-hint,.ampstart-label{font-size:1rem;color:#4f4f4f;line-height:1.125rem;letter-spacing:.06rem}.ampstart-label{text-transform:uppercase}.ampstart-footer,.ampstart-small-text{font-size:.75rem;line-height:1rem;letter-spacing:.06rem}.ampstart-card{box-shadow:0 1px 1px 0 rgba(0,0,0,.14),0 1px 1px -1px rgba(0,0,0,.14),0 1px 5px 0 rgba(0,0,0,.12)}.h1,h1{font-size:3rem;line-height:3.5rem}.h2,h2{font-size:2rem;line-height:2.5rem}.h3,h3{font-size:1.5rem;line-height:2rem}.h4,h4{font-size:1.125rem;line-height:1.5rem}.h5,h5{font-size:1rem;line-height:1.125rem}.h6,h6{font-size:.75rem;line-height:1rem}h1,h2,h3,h4,h5,h6{margin:0;padding:0;font-weight:400;letter-spacing:.06rem}a,a:active,a:visited{color:inherit}.ampstart-btn{font-family:inherit;font-weight:inherit;font-size:1rem;line-height:1.125rem;padding:.7em .8em;text-decoration:none;white-space:nowrap;word-wrap:normal;vertical-align:middle;cursor:pointer;background-color:#000;color:#fff;border:1px solid #fff}.ampstart-btn:visited{color:#fff}.ampstart-btn-secondary{background-color:#fff;color:#000;border:1px solid #000}.ampstart-btn-secondary:visited{color:#000}.ampstart-btn:active .ampstart-btn:focus{opacity:.8}.ampstart-btn[disabled],.ampstart-btn[disabled]:active,.ampstart-btn[disabled]:focus,.ampstart-btn[disabled]:hover{opacity:.5;outline:0;cursor:default}.ampstart-dropcap:first-letter{color:#000;font-size:3rem;font-weight:700;float:left;overflow:hidden;line-height:3rem;margin-left:0;margin-right:.5rem}.ampstart-initialcap{padding-top:1rem;margin-top:1.5rem}.ampstart-initialcap:first-letter{color:#000;font-size:3rem;font-weight:700;margin-left:-2px}.ampstart-pullquote{border:none;border-left:4px solid #000;font-size:1.5rem;padding-left:1.5rem}.ampstart-byline time{font-style:normal;white-space:nowrap}.amp-carousel-button-next{background-image:url('data:image/svg+xml;charset=utf-8,<svg width="18" height="18" viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg"><title>Next</title><path d="M25.557 14.7L13.818 2.961 16.8 0l16.8 16.8-16.8 16.8-2.961-2.961L25.557 18.9H0v-4.2z" fill="%23FFF" fill-rule="evenodd"/></svg>')}.amp-carousel-button-prev{background-image:url('data:image/svg+xml;charset=utf-8,<svg width="18" height="18" viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg"><title>Previous</title><path d="M33.6 14.7H8.043L19.782 2.961 16.8 0 0 16.8l16.8 16.8 2.961-2.961L8.043 18.9H33.6z" fill="%23FFF" fill-rule="evenodd"/></svg>')}.ampstart-dropdown{min-width:200px}.ampstart-dropdown.absolute{z-index:100}.ampstart-dropdown.absolute>section,.ampstart-dropdown.absolute>section>header{height:100%}.ampstart-dropdown>section>header{background-color:#000;border:0;color:#fff}.ampstart-dropdown>section>header:after{display:inline-block;content:"+";padding:0 0 0 1.5rem;color:#003f93}.ampstart-dropdown>[expanded]>header:after{content:"–"}.absolute .ampstart-dropdown-items{z-index:200}.ampstart-dropdown-item{background-color:#000;color:#003f93;opacity:.9}.ampstart-dropdown-item:active,.ampstart-dropdown-item:hover{opacity:1}.ampstart-footer{background-color:#fff; padding-top:1rem;padding-bottom:1rem}.ampstart-footer .ampstart-icon{fill:#000}.ampstart-footer .ampstart-social-follow li:last-child{margin-right:0}.ampstart-image-fullpage-hero{color:#fff}.ampstart-fullpage-hero-heading-text,.ampstart-image-fullpage-hero .ampstart-image-credit{-webkit-box-decoration-break:clone;box-decoration-break:clone;background:#000;padding:0 1rem .2rem}.ampstart-image-fullpage-hero>amp-img{max-height:calc(100vh - 3.5rem)}.ampstart-image-fullpage-hero>amp-img img{-o-object-fit:cover;object-fit:cover}.ampstart-fullpage-hero-heading{line-height:3.5rem}.ampstart-fullpage-hero-cta{background:transparent}.ampstart-readmore{background:linear-gradient(0deg,rgba(0,0,0,.65) 0,transparent);color:#fff;margin-top:5rem;padding-bottom:3.5rem}.ampstart-readmore:after{display:block;content:"⌄";font-size:2rem}.ampstart-readmore-text{background:#000}@media (min-width:52.06rem){.ampstart-image-fullpage-hero>amp-img{height:60vh}}.ampstart-image-heading{color:#fff;background:linear-gradient(0deg,rgba(0,0,0,.65) 0,transparent)}.ampstart-image-heading>*{margin:0}amp-carousel .ampstart-image-with-heading{margin-bottom:0}.ampstart-image-with-caption figcaption{color:#4f4f4f;line-height:1.125rem}amp-carousel .ampstart-image-with-caption{margin-bottom:0}.ampstart-input{max-width:100%;width:300px;min-width:100px;font-size:1rem;line-height:1.5rem}.ampstart-input [disabled],.ampstart-input [disabled]+label{opacity:.5}.ampstart-input [disabled]:focus{outline:0}.ampstart-input>input,.ampstart-input>select,.ampstart-input>textarea{width:100%;margin-top:1rem;line-height:1.5rem;border:0;border-radius:0;border-bottom:1px solid #4a4a4a;background:none;color:#4a4a4a;outline:0}.ampstart-input>label{color:#003f93;pointer-events:none;text-align:left;font-size:1rem;line-height:1rem;opacity:0;animation:.2s;animation-timing-function:cubic-bezier(.4,0,.2,1);animation-fill-mode:forwards}.ampstart-input>input:focus,.ampstart-input>select:focus,.ampstart-input>textarea:focus{outline:0}.ampstart-input>input:focus:-ms-input-placeholder,.ampstart-input>select:focus:-ms-input-placeholder,.ampstart-input>textarea:focus:-ms-input-placeholder{color:transparent}.ampstart-input>input:focus::placeholder,.ampstart-input>select:focus::placeholder,.ampstart-input>textarea:focus::placeholder{color:transparent}.ampstart-input>input:not(:placeholder-shown):not([disabled])+label,.ampstart-input>select:not(:placeholder-shown):not([disabled])+label,.ampstart-input>textarea:not(:placeholder-shown):not([disabled])+label{opacity:1}.ampstart-input>input:focus+label,.ampstart-input>select:focus+label,.ampstart-input>textarea:focus+label{animation-name:a}@keyframes a{to{opacity:1}}.ampstart-input>label:after{content:"";height:2px;position:absolute;bottom:0;left:45%;background:#003f93;transition:.2s;transition-timing-function:cubic-bezier(.4,0,.2,1);visibility:hidden;width:10px}.ampstart-input>input:focus+label:after,.ampstart-input>select:focus+label:after,.ampstart-input>textarea:focus+label:after{left:0;width:100%;visibility:visible}.ampstart-input>input[type=search]{-webkit-appearance:none;-moz-appearance:none;appearance:none}.ampstart-input>input[type=range]{border-bottom:0}.ampstart-input>input[type=range]+label:after{display:none}.ampstart-input>select{-webkit-appearance:none;-moz-appearance:none;appearance:none}.ampstart-input>select+label:before{content:"⌄";line-height:1.5rem;position:absolute;right:5px;zoom:2;top:0;bottom:0;color:#003f93}.ampstart-input-chk,.ampstart-input-radio{width:auto;color:#4a4a4a}.ampstart-input input[type=checkbox],.ampstart-input input[type=radio]{margin-top:0;-webkit-appearance:none;-moz-appearance:none;appearance:none;width:20px;height:20px;border:1px solid #003f93;vertical-align:middle;margin-right:.5rem;text-align:center}.ampstart-input input[type=radio]{border-radius:20px}.ampstart-input input[type=checkbox]:not([disabled])+label,.ampstart-input input[type=radio]:not([disabled])+label{pointer-events:auto;animation:none;vertical-align:middle;opacity:1;cursor:pointer}.ampstart-input input[type=checkbox]+label:after,.ampstart-input input[type=radio]+label:after{display:none}.ampstart-input input[type=checkbox]:after,.ampstart-input input[type=radio]:after{position:absolute;top:0;left:0;bottom:0;right:0;content:" ";line-height:1.4rem;vertical-align:middle;text-align:center;background-color:#fff}.ampstart-input input[type=checkbox]:checked:after{background-color:#003f93;color:#fff;content:"✓"}.ampstart-input input[type=radio]:checked{background-color:#fff}.ampstart-input input[type=radio]:after{top:3px;bottom:3px;left:3px;right:3px;border-radius:12px}.ampstart-input input[type=radio]:checked:after{content:"";font-size:3rem;background-color:#003f93}.ampstart-input>label,_:-ms-lang(x){opacity:1}.ampstart-input>input:-ms-input-placeholder,_:-ms-lang(x){color:transparent}.ampstart-input>input::placeholder,_:-ms-lang(x){color:transparent}.ampstart-input>input::-ms-input-placeholder,_:-ms-lang(x){color:transparent}.ampstart-input>select::-ms-expand{display:none}.ampstart-headerbar{background-color:#fff;color:#000;z-index:999;box-shadow:0 0 5px 2px rgba(0,0,0,.1)}.ampstart-headerbar+:not(amp-sidebar),.ampstart-headerbar+amp-sidebar+*{margin-top:3.5rem}.ampstart-headerbar-nav .ampstart-nav-item{padding:0 1rem;background:transparent;opacity:.8}.ampstart-headerbar-nav{line-height:3.5rem}.ampstart-nav-item:active,.ampstart-nav-item:focus,.ampstart-nav-item:hover{opacity:1}.ampstart-navbar-trigger:focus{outline:none}.ampstart-nav a,.ampstart-navbar-trigger,.ampstart-sidebar-faq a{cursor:pointer;text-decoration:none}.ampstart-nav .ampstart-label{color:inherit}.ampstart-navbar-trigger{line-height:3.5rem;font-size:2rem}.ampstart-headerbar-nav{-ms-flex:1;flex:1}.ampstart-nav-search{-ms-flex-positive:0.5;flex-grow:0.5}.ampstart-headerbar .ampstart-nav-search:active,.ampstart-headerbar .ampstart-nav-search:focus,.ampstart-headerbar .ampstart-nav-search:hover{box-shadow:none}.ampstart-nav-search>input{border:none;border-radius:3px;line-height:normal}.ampstart-nav-dropdown{min-width:200px}.ampstart-nav-dropdown amp-accordion header{background-color:#fff;border:none}.ampstart-nav-dropdown amp-accordion ul{background-color:#fff}.ampstart-nav-dropdown .ampstart-dropdown-item,.ampstart-nav-dropdown .ampstart-dropdown>section>header{background-color:#fff;color:#000}.ampstart-nav-dropdown .ampstart-dropdown-item{color:#003f93}.ampstart-sidebar{background-color:#fff;color:#000;min-width:300px;width:300px}.ampstart-sidebar .ampstart-icon{fill:#003f93}.ampstart-sidebar-header{line-height:3.5rem;min-height:3.5rem;border-bottom: 0.001rem solid #E0E0E0;;}.ampstart-sidebar .ampstart-dropdown-item,.ampstart-sidebar .ampstart-dropdown header,.ampstart-sidebar .ampstart-faq-item,.ampstart-sidebar .ampstart-nav-item,.ampstart-sidebar .ampstart-social-follow{margin:0 0 2rem}.ampstart-sidebar .ampstart-nav-dropdown{margin:0}.ampstart-sidebar .ampstart-navbar-trigger{line-height:inherit}.ampstart-navbar-trigger svg{pointer-events:none}.ampstart-related-article-section{border-color:#4a4a4a}.ampstart-related-article-section .ampstart-heading{color:#4a4a4a;font-weight:400}.ampstart-related-article-readmore{color:#000;letter-spacing:0}.ampstart-related-section-items>li{border-bottom:1px solid #4a4a4a}.ampstart-related-section-items>li:last-child{border:none}.ampstart-related-section-items .ampstart-image-with-caption{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:center;align-items:center;margin-bottom:0}.ampstart-related-section-items .ampstart-image-with-caption>amp-img,.ampstart-related-section-items .ampstart-image-with-caption>figcaption{-ms-flex:1;flex:1}.ampstart-related-section-items .ampstart-image-with-caption>figcaption{padding-left:1rem}@media (min-width:40.06rem){.ampstart-related-section-items>li{border:none}.ampstart-related-section-items .ampstart-image-with-caption>figcaption{padding:1rem 0}.ampstart-related-section-items .ampstart-image-with-caption>amp-img,.ampstart-related-section-items .ampstart-image-with-caption>figcaption{-ms-flex-preferred-size:100%;flex-basis:100%}}.ampstart-social-box{display:-ms-flexbox;display:flex}.ampstart-social-box>amp-social-share{background-color:#000}.ampstart-icon{fill:#003f93}.ampstart-input{width:100%}main .ampstart-social-follow{margin-left:auto;margin-right:auto;width:315px}main .ampstart-social-follow li{transform:scale(1.8)}h1+.ampstart-byline time{font-size:1.5rem;font-weight:400}
    /* navbar */
    .ampstart-nav-item{float:left;width:50%;margin-bottom:25px;}
    /* tags, labels and badges */
    .tags{list-style:none;overflow:hidden;padding:0}.tags li{float:left}.tag{background:#eee;border-radius:3px 0 0 3px;color:#4e4e4e;display:inline-block;height:26px;line-height:26px;padding:0 20px 0 23px;position:relative;margin:0 10px 10px 0;text-decoration:none;-webkit-transition:color .2s}.tag::before{background:#fff;border-radius:10px;box-shadow:inset 0 1px rgba(0,0,0,.25);content:'';height:6px;left:10px;position:absolute;width:6px;top:10px}.tag::after{background:#fff;border-bottom:13px solid transparent;border-left:10px solid #eee;border-top:13px solid transparent;content:'';position:absolute;right:0;top:0}.tag:hover{background-color:#dc143c;color:#fff}.tag:hover::after{border-left-color:#dc143c}
    /* Articles */
    .article{font-weight:100; font-family: SolaimanLipi,AdorshoLipi,voice;}.article .article-title{font-weight:400;margin:0; font-family: SolaimanLipi,AdorshoLipi,voice;}.article .article-meta{color:#777;font-size:13px;font-size:.85em;margin:5px 0 15px; font-family: SolaimanLipi,AdorshoLipi,voice;}.article .article-meta a{color:#777}.article .article-lead{font-size:20px;font-size:1.25em;font-weight:400;margin:0; font-family: SolaimanLipi,AdorshoLipi,voice;}.article p {font-size:1.1rem; line-height:1.9rem; font-family: SolaimanLipi,AdorshoLipi,voice;}
    /* Breadcrumbs */
    .breadcrumbs{font-size:13px;font-size:.8125rem;line-height:1.84615;margin:5px 0;padding: 0px 15px 0px 0}.breadcrumbs li{display:inline;margin-right:10px}.breadcrumbs li:last-child{margin-right:0}.breadcrumbs li:after{content:"/";color:#ccc;padding-left:12px;vertical-align:middle}.breadcrumbs li:last-child{color:#999}.breadcrumbs li:last-child a{color:#999}.breadcrumbs li:last-child:after{content:""}
    /* helper classes */
    .fill-height {height:100%} .text-center{text-align: center;}
    .ampstart-footer {background: linear-gradient(to right top, rgba(0, 0, 0, 0.2), rgba(103, 12, 21, 0.98)), url("https://bn.voicetv.tv/assets/images/footer.webp"); color:#fff}
    .ampstart-footer .ampstart-label {color: #fff}
    .d-print-block {display: none;}s
    .d-print-none {display: block;}
    @media print {
        .d-print-block {display: block;}
        .d-print-none {display: none;}
    }
    .container,.container-fluid,.container-lg,.container-md,.container-sm,.container-xl,.container-xxl{width:100%;padding-right:var(--bs-gutter-x,.75rem);padding-left:var(--bs-gutter-x,.75rem);margin-right:auto;margin-left:auto}@media (min-width:576px){.container,.container-sm{max-width:540px}}@media (min-width:768px){.container,.container-md,.container-sm{max-width:720px}}@media (min-width:992px){.container,.container-lg,.container-md,.container-sm{max-width:960px}}@media (min-width:1200px){.container,.container-lg,.container-md,.container-sm,.container-xl{max-width:1140px}}@media (min-width:1400px){.container,.container-lg,.container-md,.container-sm,.container-xl,.container-xxl{max-width:1320px}}
    .row{--bs-gutter-y:0;display:flex;flex-wrap:wrap;margin-top:calc(var(--bs-gutter-y) * -1);margin-right:calc(var(--bs-gutter-x) * -.5);margin-left:calc(var(--bs-gutter-x) * -.5)}
    .col-auto{flex:0 0 auto;width:auto}.col-1{flex:0 0 auto;width:8.33333333%}.col-2{flex:0 0 auto;width:16.66666667%}.col-3{flex:0 0 auto;width:25%}.col-4{flex:0 0 auto;width:33.33333333%}.col-5{flex:0 0 auto;width:41.66666667%}.col-6{flex:0 0 auto;width:50%}.col-7{flex:0 0 auto;width:58.33333333%}.col-8{flex:0 0 auto;width:66.66666667%}.col-9{flex:0 0 auto;width:75%}.col-10{flex:0 0 auto;width:83.33333333%}.col-11{flex:0 0 auto;width:91.66666667%}.col-12{flex:0 0 auto;width:100%}
    @media (min-width:768px){
        .col-md-1{flex:0 0 auto;width:8.33333333%}.col-md-2{flex:0 0 auto;width:16.66666667%}.col-md-3{flex:0 0 auto;width:25%}.col-md-4{flex:0 0 auto;width:33.33333333%}.col-md-5{flex:0 0 auto;width:41.66666667%}.col-md-6{flex:0 0 auto;width:50%}.col-md-7{flex:0 0 auto;width:58.33333333%}.col-md-8{flex:0 0 auto;width:66.66666667%}.col-md-9{flex:0 0 auto;width:75%}.col-md-10{flex:0 0 auto;width:83.33333333%}.col-md-11{flex:0 0 auto;width:91.66666667%}.col-md-12{flex:0 0 auto;width:100%}
    }

    @media (min-width:576px){
        .col-sm-1{flex:0 0 auto;width:8.33333333%}.col-sm-2{flex:0 0 auto;width:16.66666667%}.col-sm-3{flex:0 0 auto;width:25%}.col-sm-4{flex:0 0 auto;width:33.33333333%}.col-sm-5{flex:0 0 auto;width:41.66666667%}.col-sm-6{flex:0 0 auto;width:50%}.col-sm-7{flex:0 0 auto;width:58.33333333%}.col-sm-8{flex:0 0 auto;width:66.66666667%}.col-sm-9{flex:0 0 auto;width:75%}.col-sm-10{flex:0 0 auto;width:83.33333333%}.col-sm-11{flex:0 0 auto;width:91.66666667%}.col-sm-12{flex:0 0 auto;width:100%}
    }


    @media (min-width:992px){
        .col-lg-1{flex:0 0 auto;width:8.33333333%}.col-lg-2{flex:0 0 auto;width:16.66666667%}.col-lg-3{flex:0 0 auto;width:25%}.col-lg-4{flex:0 0 auto;width:33.33333333%}.col-lg-5{flex:0 0 auto;width:41.66666667%}.col-lg-6{flex:0 0 auto;width:50%}.col-lg-7{flex:0 0 auto;width:58.33333333%}.col-lg-8{flex:0 0 auto;width:66.66666667%}.col-lg-9{flex:0 0 auto;width:75%}.col-lg-10{flex:0 0 auto;width:83.33333333%}.col-lg-11{flex:0 0 auto;width:91.66666667%}.col-lg-12{flex:0 0 auto;width:100%}
    }
    @media (min-width:1200px){
        .col-xl{flex:1 0 0%}.row-cols-xl-auto>*{flex:0 0 auto;width:auto}.row-cols-xl-1>*{flex:0 0 auto;width:100%}.row-cols-xl-2>*{flex:0 0 auto;width:50%}.row-cols-xl-3>*{flex:0 0 auto;width:33.3333333333%}.row-cols-xl-4>*{flex:0 0 auto;width:25%}.row-cols-xl-5>*{flex:0 0 auto;width:20%}.row-cols-xl-6>*{flex:0 0 auto;width:16.6666666667%}.col-xl-auto{flex:0 0 auto;width:auto}.col-xl-1{flex:0 0 auto;width:8.33333333%}.col-xl-2{flex:0 0 auto;width:16.66666667%}.col-xl-3{flex:0 0 auto;width:25%}.col-xl-4{flex:0 0 auto;width:33.33333333%}.col-xl-5{flex:0 0 auto;width:41.66666667%}.col-xl-6{flex:0 0 auto;width:50%}.col-xl-7{flex:0 0 auto;width:58.33333333%}.col-xl-8{flex:0 0 auto;width:66.66666667%}.col-xl-9{flex:0 0 auto;width:75%}.col-xl-10{flex:0 0 auto;width:83.33333333%}.col-xl-11{flex:0 0 auto;width:91.66666667%}.col-xl-12{flex:0 0 auto;width:100%}
    }
    @media (min-width:1400px){
        .col-xxl{flex:1 0 0%}.row-cols-xxl-auto>*{flex:0 0 auto;width:auto}.row-cols-xxl-1>*{flex:0 0 auto;width:100%}.row-cols-xxl-2>*{flex:0 0 auto;width:50%}.row-cols-xxl-3>*{flex:0 0 auto;width:33.3333333333%}.row-cols-xxl-4>*{flex:0 0 auto;width:25%}.row-cols-xxl-5>*{flex:0 0 auto;width:20%}.row-cols-xxl-6>*{flex:0 0 auto;width:16.6666666667%}.col-xxl-auto{flex:0 0 auto;width:auto}.col-xxl-1{flex:0 0 auto;width:8.33333333%}.col-xxl-2{flex:0 0 auto;width:16.66666667%}.col-xxl-3{flex:0 0 auto;width:25%}.col-xxl-4{flex:0 0 auto;width:33.33333333%}.col-xxl-5{flex:0 0 auto;width:41.66666667%}.col-xxl-6{flex:0 0 auto;width:50%}.col-xxl-7{flex:0 0 auto;width:58.33333333%}.col-xxl-8{flex:0 0 auto;width:66.66666667%}.col-xxl-9{flex:0 0 auto;width:75%}.col-xxl-10{flex:0 0 auto;width:83.33333333%}.col-xxl-11{flex:0 0 auto;width:91.66666667%}.col-xxl-12{flex:0 0 auto;width:100%}
    }
    .togl-btn svg:not([fill]) {
        fill: #fff;
    }

    /* Voice Tv Customize Header Part */

    .header-logo-ham-search{
        background: url("https://bn.voicetv.tv/assets/images/header.jpg");
        padding: 0px 0px;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .header-menu{
        background: url("https://bn.voicetv.tv/assets/images/header.jpg");
        padding: 0px 0px;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .header-logo-ham-search{
        padding: 5px 20px;
    }
    .header-menu{
        border-top: 1px solid #bdb7b7;
        border-bottom: 1px solid #eae5e5;
    }
    .navbar-staticheader{
        display: block;
        color: #e6dede;
        font-size: 17px;
        padding: 10px 0;
    }
    .navbar-button-search {
        padding: 10px 0;
    }
    .voice-logo {
        padding: 10px 0;
        margin-top: 10px;
    }
    #voice-header .ampstart-sidebar-header{
        line-height: 20px;
    }
    .gallery-part{ 
        padding: 0 20px;
    }
    main .ampstart-social-follow{
        width: auto;
    }
    .social-search{
        padding: 10px 0;
    }
    #header-sidebar {
        padding: 0 18px;
    }

    #header-sidebar .ampstart-nav-item {
        margin: 0 0 0rem;
    }

    #header-sidebar .ampstart-label {
        line-height: 3.125rem;
    }

    /* Voice Tv Customize Header Part End */
    /* main news part */
    .border-news {
        padding: 10px 0;
        border-bottom: 1px solid #ccccccb0;
    }
    .border-col {
        padding: 0 8px;
        border-right: 1px solid #ccccccb0;
    }
    .border-col:last-child {
        border-right: 1px solid transparent;
    }
    .news-border:first-child {
        padding-top: 0px;
    }
    .news-border:last-child {
        border-bottom: 1px solid transparent;
    }
    .news-border {
        padding: 10px 0;
        border-bottom: 1px solid #ccccccb0;
    }
    /* main news part ens */
    /* second section part */
    .border-col-news {
        padding: 0 10px;
        border-right: 1px solid #ccccccb0;
    }
    .add-img{
        max-height: 970px;
    }

    .section-title {
        /* margin-bottom: 25px; */
        position: relative;
        /* padding-bottom: 10px; */
        border-bottom: 1px solid #ccccccb0;
        width: 96%;
    }
    .section-title::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100px;
        height: 2px;
        bottom: -1px;
        background: #ff1f1f;
    }
    .section-title h2 {
        font-size: 25px;
        margin-bottom: 12px;
        font-weight: 800;
    }
    .click-border-news{
        padding: 10px 0;
    }
    .video-section .border-news{
        height: 215px;
        max-height: 215px;
    }
    .video-section .main-content {
        position: relative;
    }
    .video-section .main-content amp-img {
        position: absolute;
        right: 5px;
        bottom: 100%;
    }
    .category-main-img{
        padding: 12px;
    }
    .category-main-content {
        padding: 10px 0px;
    }
    .category-main-content h2{
        font-weight: 800;
        overflow: hidden;
        align-items: center;
        flex-wrap: wrap;
        font-size: 20px;
        letter-spacing: 1.2px;
        line-height: 32px;
        font-family: SolaimanLipi,AdorshoLipi,voice;
        white-space: normal;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        color: #0f0f0f;
    }
    .category-main-content span{
        color: rgb(0 0 0 / 83%);
        font-size: .75rem;
        letter-spacing: .0333333333em;
        line-height: 2rem;
        font-weight: 400;
        font-family: SolaimanLipi,AdorshoLipi,voice;
    }
    .category-main-content p{
        white-space: normal;
        -webkit-line-clamp: 6;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        color: rgb(35 33 33 / 88%);
        line-height: 1.2;
        font-size: 15px;
        flex: 1 1 100%;
        overflow: hidden;
        text-overflow: ellipsis;
        font-family: SolaimanLipi,AdorshoLipi,voice;
        padding-top: 10px;
        letter-spacing: .3px;
        margin-bottom: 25px;
    }
    .category-main-content button {
        height: 41px;
        padding: 0px 0px;
        color: #607d8b;
        background: transparent;
        border-color: transparent;
        margin-top: 25px;
    }
    .category-dropen{
        background-color: #fff;
        border-color: #fff;
        border-radius: 8px;
        /* margin-left: 5px; */
    }
    .dropen-main-content h2{
        color: #000;
        font-weight: 800;
        align-items: center;
        flex-wrap: wrap;
        font-size: 20px;
        letter-spacing: 0.2px;
        line-height: 32px;
        margin-left: 4px;
    }
    .post-news{
        background-color: #fff;
        border-color: #fff;
        color: rgba(0,0,0,.87);
        max-height: 350px;
        font-family: SolaimanLipi,AdorshoLipi,voice;
    }
    .Post-section .category-main-content h2{
        color: #444242;
    }
    .sidebar {
        height: 155vh;
        /* height: 163vh; */
        min-height: 200px;
        /* overflow: auto; */
        position: -webkit-sticky;
        position: sticky;
        top: -25%;
    }
    #voice-header{
        z-index: 99;
        position: -webkit-sticky;
        position: sticky;
        top: -17%;
    }
    .category-sidebar{
        height: 125vh;
        min-height: 200px;
        /* overflow: auto; */
        position: -webkit-sticky;
        position: sticky;
        top: 0%;
    }
    .archive-sidebar{
        height: 194vh;
        min-height: 200px;
        /* overflow: auto; */
        position: -webkit-sticky;
        position: sticky;
        top: 0%;
    }
    .amp-sidebar-mask{
        z-index: 9;
    }
    body::-webkit-scrollbar {
        width: 11px;
    }
    
    body::-webkit-scrollbar-track {
        background: #d9d4d4;
    }
    body::-webkit-scrollbar-thumb {
        background-color: #981116;
        border-radius: 0px;
        border: 3px solid #981116;
    }
    #header-sidebar::-webkit-scrollbar-thumb {
        background-color: #981116;
        border-radius: 0px;
        border: 3px solid #981116;
    }
    #header-sidebar::-webkit-scrollbar-track {
        background: #d9d4d4;
    }
    #header-sidebar::-webkit-scrollbar {
        width: 11px;
    }

    /* Responsive Code */
    @media (max-width:960px){
        .header-menu {
            display: none;
        }
        
    }
    @media (max-width: 767.98px){
        .category-section .arch-rt{
            padding-right: 0px;
        }
        .social-search{
            display: flex;
        }
        .en-bn-short-icon{
            display: flex;
            margin-top: 9px;
        }
        main .ampstart-social-follow {
            width: -webkit-fill-available;
            display: none;
        }
        .category-section .shadow-sm .leading-5{
            height: 32px;
            width: 32px;
            line-height: 23px;
            padding: 0px;
            margin-left: 3px;
        }
        .category-section a.-ml-px.active\:bg-gray-100.active\:text-gray-700.bg-white.border.border-gray-300.duration-150.ease-in-out.focus\:border-blue-300.focus\:outline-none {
    display: none;
        }
    }
    @media(max-width: 1360px){
        .sidebar {
        height: 174vh;
        }
        #voice-header{
            top: -22%;
        }
    }
    @media(min-width: 1920px){
        #voice-header{
            top: -13%;
        }
    }
    @media (max-width: 991.98px){
        #voice-header{
            z-index: 99;
            position: -webkit-sticky;
            position: sticky;
            top: 0%;
        }
        .search-btn .show .input-search{
            width: 125px;
        }
        .col-order-1 {
            order: 2;
        }
        .col-order-2 {
            order: 1;
        }
        .col-order-3 {
            order: 3;
        }
        .marquee-section {
            display: none;
        }
        .navbar-staticheader {
            display: none;
        }
        .en-bn-short-icon .en-button{
            color: #fff;
            padding: 4px;
        }
        .sm-cust {
            margin-right: 0;
            margin: 0 7px;
        }
        .header-menu{
            display: none;
        }
        .en-bn-icon{
            display: none;
        }
        .social-hide{
            display: none;
        }
        .voice-logo{
            margin-top: 0px;
        }
        .header-logo-ham-search {
            padding: 0px 0px;
            /* position: relative; */
        }
        .border-col{
            border-right: 1px solid transparent;
            /* margin: auto; */
        }
        .news-border {
            padding: 0px 0px;
            border-bottom: 1px solid transparent;
            margin: auto;
            display: block;
        }
        .social-search {
            position: absolute;
            right: 0;
            top: -10px;
        }
        .main-content button{
            padding: 0 0px;
        }
        .r-b-b{
            border-bottom: 1px solid #ccccccb0;
            padding: 8px 0;
        }
        .border-col-news{
            /* padding: 0 0px; */
            border-right: 1px solid transparent;
            /* width: 100%; */
        }
        .r-m-a{
            margin: auto;
        }
        .dropdown{
            /* transform: translateX(25%); */
        }
        .w-fit{
            width: 100%;
        }
        .video-news {
            max-height: 400px;
        }
        .archive-sidebar{
            overflow: auto;
        }
        .category-sidebar{
            overflow: auto;
        }
        .category-chip .chip_content{
            padding: 0px 3px;
            font-size: 10px;
            line-height: 1.5rem;
            margin-right: 6px;
        }
        .category-sidebar{
            overflow: auto;
        }
        .sidebar{
            overflow: auto;
        }
        .footer-socail-name {
            text-align: center;
        }
        .ampstart-footer .play-store {
            text-align: center;
        }
        .main-section .main-content p{
            display: none;
        }
        .main-section .main-content button{
            display: none;
        }
        .main-section .others-common-section{
            display: flex;
        }
        .second-section .others-common-section{
            display: flex;
        }
        .third-section .others-common-section{
            display: flex;
        }
        .fourth-section .others-common-section{
            display: flex;
        }
        .category-main-content p{
            display: none;
        }
        .category-main-content button{
            display: none;
        }
        .category-section .main-content p{
            display: none;
        }
        .category-section .main-content button{
            display: none;
        }
        .category-section .others-common-section{
            display: flex;
        }


    }
    @media (min-width: 991.98px){
        .en-bn-short-icon{
            display: none;
        }
    }
    /* Responsive */
    .main-content {
        margin-bottom: 15px;
    }
    .others-common-section{
        padding: 20px 0;
        display: none;
    }
    .search-main .others-common-section{
        display: flex;
    }
    .category-section .arch-common-section{
        display: flex;
        padding: 6px 0;
    }
    .others-common-section span{
        color: rgba(0,0,0,.6);
        font-size: .75rem;
        letter-spacing: .0333333333em;
        line-height: 0;
        font-weight: 400;
        font-family: SolaimanLipi,AdorshoLipi,voice;
    }

    .privacy-section{
        padding: 25px 0;
        color: #1c1a1a;
    }
    .footer-left h2{
        font-weight: 800;
        overflow: hidden;
        align-items: center;
        flex-wrap: wrap;
        font-size: 20px;
        letter-spacing: 0.2px;
        line-height: 1.4;
        font-family: SolaimanLipi,AdorshoLipi,voice;
        padding-top: 10px;
    }
    li.footer-li {
        font-weight: 400;
        font-size: 16px;
        line-height: 1.8;
        font-family: SolaimanLipi,AdorshoLipi,voice;
        list-style-type: circle;
    }
    li.footer-li-active{
        font-weight: 800;
        font-size: 16px;
        line-height: 1.4;
        font-family: SolaimanLipi,AdorshoLipi,voice;
    }
    li.footer-list{
        font-weight: 400;
        font-size: 16px;
        line-height: 1.8;
        font-family: SolaimanLipi,AdorshoLipi,voice;
        list-style-type: none;
    }
    .footer-right{
        font-weight: 400;
        font-size: 16px;
        line-height: 1.4;
        font-family: SolaimanLipi,AdorshoLipi,voice;
    }
    .footer-right strong{
        font-weight: 800;
        font-size: 16px;
        line-height: 1.4;
        font-family: SolaimanLipi,AdorshoLipi,voice;
    }
    .footer-socail-name li{
        transform: scale(1.8);
    }
    .footer-socail-name p{
        font-weight: 400;
        font-size: 17px;
        line-height: 1.4;
        font-family: SolaimanLipi,AdorshoLipi,voice;
        letter-spacing: 0.2px;
    }
    .play-store {
        text-align: right;
    }
    .develop-name{
        padding: 10px 0;
    }
    .ampstart-footer{
        padding-bottom: 0px;
    }
    .live-tv-image{
        max-height: 360px;
    }
    .main-crime-news{
        background-color: #fff;
        border-color: #fff;
        color: rgba(0,0,0,.87);
        max-height: 630px;
        z-index: 9;
    }
    .main-section .common-section span{
        color: rgba(0,0,0,.6);
        font-size: .75rem;
        letter-spacing: .0333333333em;
        line-height: 0;
        font-weight: 400;
        font-family: SolaimanLipi,AdorshoLipi,voice;
    }
    .common-section{
        padding: 20px 0;
    }


    /* second section part end */
    .ampstart-footer .border-news{
        border-bottom: 1px solid #cccccc4d;
    }
    .ampstart-footer .border-col{
        border-right: 1px solid #cccccc4d;
    }
    .ampstart-footer .border-col:last-child{
        border-right: 1px solid transparent;
    }

    .ampstart-nav-item{
                           width: auto;
                       }
                       .ampstart-headerbar{
                           background: url("https://bn.voicetv.tv/assets/images/header.jpg");
                       }
                       .ampstart-sidebar {
                           background-color: #932b2a;
                           color: #fff;
                       }
                       .ampstart-navbar-trigger {
                           color: #fff;
                           margin-right: 15px;
                       }
                       .ampstart-nav a{
                           color: #fff;
                           font-weight: 400;
                           font-size: 18px;
                           opacity: 1;
                       }
                       .ampstart-sidebar-faq a{
                           color: black;
                       }
                       .ampstart-navbar-trigger{
                           color: #fff;
                           line-height: 0;

                       }
                       .ampstart-headerbar-nav{
                           overflow: hidden;
                           width: 98%;
                       }
                       .ampstart-headerbar-nav .ampstart-nav-item{
                           margin-bottom: 0px;
                           opacity: 1;
                       }
                       .ampstart-headerbar-nav .ampstart-nav-item:focus{
                           background: #000;
                       }
                       .nav-side-item{
                           width: 100%;
                       }
                       .amp-carousel-button{
                           cursor: pointer;
                       }
                       .ampstart-sidebar-faq{
                            width: fit-content;
                       }
                       .header-nav-social{
                           display: inline-flex;
                       }
                       
                        
                            .btn-search{
                                border-style: none;
                                font-size: 20px;
                                font-weight: bold;
                                outline: none;
                                cursor: pointer;
                                border-radius: 50%;
                                position: absolute;
                                color:#ffffff ;
                                background-color:transparent;
                                pointer-events: painted;  
                            }
                            .show {
                                display: block;
                                background: #75090a;
                                position: absolute;
                            }
                            
                            .show .input-search{
                                width: 300px;
                                border-radius: 0px;
                                background-color: transparent;
                                transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
                                border: 1px solid #ccccccb8;
                                height: 28px;
                                padding: 10px;
                                font-size: 18px;
                                letter-spacing: 2px;
                                outline: none;
                                padding-right: 40px;
                                color:#fff;
                            }
                            .hide {
                                display: none;
                            }
                            
                           
                            .search-btn svg{
                                position: absolute;
                                left: 0;
                            }
                            .search-btn svg:not([fill]) {
                                fill: #fff;
                                border: 1px solid #ccccccb8;
                                margin-top: -1px;
                                height: 28px;
                                width: 30px;
                            }
                        /*  */

                        .ampstart-btn-secondary {
                            background-color: transparent;
                            color: #fff;
                            border: 1px solid transparent;
                        }
                             .nav-logo{
                               margin-left: 0;
                             }
                             .en-bn-icon .engilsh-button{
                               color: #fff;
                               margin-left: 34px;
                             }
                             .en-bn-icon .bangla-button{
                                             color: #fff;
                                           }
                             .social-search {
                                text-align: right;
                             }
                             .nav_logo{
                                margin-top: 40px;
                             }
                             a{
                                 text-decoration: none;
                             }
                             .dual-card{
                                background-color: #fff;
                                border-color: #fff;
                                color: rgba(0,0,0,.87);
                            }
                            .main-content h3{
                                font-weight: 800;
                                overflow: hidden;
                                align-items: center;
                                display: flex;
                                flex-wrap: wrap;
                                font-size: 20px;
                                letter-spacing: 0px;
                                line-height: 1.5;
                                white-space: normal;
                                -webkit-line-clamp: 3;
                                -webkit-box-orient: vertical;
                                display: -webkit-box;
                                padding-top: 15px;
                            }
                            .category-section .main-content h3{
                                padding-top: 0px;
                            }
                            .crime-main-content h3{
                                font-weight: 600;
                                overflow: hidden;
                                align-items: center;
                                display: flex;
                                flex-wrap: wrap;
                                font-size: 18px;
                                letter-spacing: 1px;
                                line-height: 1.5;
                                white-space: normal;
                                -webkit-line-clamp: 2;
                                -webkit-box-orient: vertical;
                                display: -webkit-box;
                            }
                            .crime-main-content{
                                padding: 7px 0;
                            }
                            .main-content p{
                                white-space: normal;
                                text-align: justify;
                                -webkit-line-clamp: 4;
                                -webkit-box-orient: vertical;
                                display: -webkit-box;
                                color: rgba(0,0,0,.6);
                                font-size: 16px;
                                flex: 1 1 100%;
                                overflow: hidden;
                                text-overflow: ellipsis;
                                padding-top: 15px;
                                font-weight: 400;
                                line-height: 22px;
                                letter-spacing: 0.114px;
                            }
                            .main-content button{
                                height: 41px;
                                min-width: 73px;
                                /* padding: 0 18.2222222222px; */
                                color: #607d8b;
                                background: transparent;
                                border-color: transparent;

                            }
                            .main-content span{
                                color: rgba(0,0,0,.6);
                                font-size: .75rem;
                                letter-spacing: .0333333333em;
                                line-height: 2rem;
                                font-weight: 400;
                                font-family: SolaimanLipi,AdorshoLipi,voice;
                            }
                            .sectionTitle {
                                position: relative;
                            }
                            .sectionTitle:after {
                                content: "";
                                z-index: -1;
                                border-top: .32rem solid #b71c1c;
                                position: absolute;
                                width: calc(100% - 1.5em);
                                    bottom: 1.5em;
                            }
                            .sectionTitle:before {
                                content: "";
                                z-index: 0;
                                border-top: .32rem solid #b71c1c;
                                position: absolute;
                                width: calc(100% - 1.5em);
                                bottom: 1.5em;
                            }

                            .sectionTitle:after {
                                width: calc(100% - 4em);
                                bottom: 1.1em;
                                left: 0;
                            }


                            .offset-xl-1 {
                                margin-left: 8.3333333333%;
                                margin-top: 65px;
                            }
                            .country_card{
                                border-bottom: 1px solid #ccccccb0;
                                background-color: #fff;
                                align-items: center;
                                display: flex;
                                flex: 1 1 100%;
                                letter-spacing: normal;
                                min-height: 88px;
                                outline: none;
                                padding: 10px 0;
                                text-decoration: none;

                            }
                            
                            .country_card_text{
                                align-items: center;
                                align-self: stretch;
                                display: flex;
                                flex-wrap: wrap;
                                flex: 1 1;
                                overflow: hidden;
                                padding: 12px 12px;

                            }
                            .country_card_text h3{
                                line-height: 1.6;
                                font-weight: 700;
                                align-self: center;
                                font-size: .929rem;
                                flex: 1 1 100%;
                                overflow: hidden;
                                text-overflow: ellipsis;
                                color: rgba(0,0,0,.87);
                                white-space: normal;
                                -webkit-line-clamp: 2;
                                -webkit-box-orient: vertical;
                                display: -webkit-box;
                                margin-bottom: 5px;
                            }
                            .country_card_text p{
                                white-space: normal;
                                -webkit-line-clamp: 2;
                                -webkit-box-orient: vertical;
                                display: -webkit-box;
                                color: rgba(0,0,0,.6);
                                line-height: 1.4;
                                font-size: .875rem;
                                flex: 1 1 100%;
                                overflow: hidden;
                                text-overflow: ellipsis;
                            }
                            .cst_country_card{
                                width: 10.66667%;
                            }
                            .droppen{
                                background-color: #fff;
                                border-color: #fff;
                                border-radius: 8px;
                                padding: 0 18px;
                            }
                            .single-card{
                                align-items: center;
                                display: flex;
                                flex: 1 1 100%;
                                letter-spacing: normal;
                                min-height: 48px;
                                outline: none;
                                padding: 10px 0px;
                                /* height: 80px; */
                                border-top: 1px solid #bfbfbf;
                                border-bottom: 1px solid #bfbfbf;
                            }
                            .single-card h3{
                                align-items: center;
                                align-self: center;
                                display: flex;
                                flex-wrap: wrap;
                                flex: 1 1;
                                overflow: hidden;
                                padding: 12px 0;
                                margin-right: 12px;
                                margin-left: 12px;
                                color: rgba(0,0,0,.87);
                                line-height: 1.4;
                                font-size: 18px;
                                height: 84px;
                                font-family: SolaimanLipi,AdorshoLipi,voice;
                                white-space: normal;
                                -webkit-line-clamp: 3;
                                -webkit-box-orient: vertical;
                                display: -webkit-box;
                            }

                             @yield('customCss')
                             .category-section .main-content h3{
                                /* padding: 10px 0; */
                                /* height: 70px; */
                                color: #424040;
                            }
                            .category-section .main-content button{
                                padding: 0px;
                            }
                            .category-section .country_card{
                                border-bottom: 1px solid rgb(0 0 0 / 12%);
                                border-radius: 0px;
                            }
                            .category-section .droppen{
                                max-width: 66%;
                            }

                            svg:not([fill]) {
                                fill: #5f5f5f;
                            }
                            .chip_content{
                                background: #e0e0e0;
                                border-color: rgba(0,0,0,.12);;
                                padding: 0px 12px;
                                border-radius: 4px;
                                margin-right: 10px;

                            }
                            .category-chip{
                                align-items: center;
                                position: absolute;
                                right: 0;
                                top: 6px;
                            }
                            .category-section .category-chip{
                                top: 5px;
                            }
                            /* Post Page  */
                            .Post-section svg {
                                height: 18px;
                                width: 18px;
                            }
                            .Post-section .main-content{
                                border-bottom: 1px solid #bfbfbf;
                            }
                            .Post-section .single-card{
                                border-top: 1px solid transparent;
                                height: 100px;
                            }
                            .Post-section .description-content{
                                border-bottom: 1px solid transparent;
                            }
                            .description-content button{
                                cursor: pointer;
                            }
                            .Post-section .country_card{
                                border-bottom: 1px solid rgb(0 0 0 / 12%);
                                border-radius: 0px;
                            }




































</style>
