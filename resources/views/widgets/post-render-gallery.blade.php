<div class="col-md-12 col-lg-12 col-12 py3 ml2">
    <div class="section-title">
        <h2>ছবি গ্যালারি</h2>
    </div>
</div>
<div class="col-md-12 col-lg-12 col-12 r-b-b">
    <amp-carousel id="carouselWithPreview" width="20" height="11" layout="responsive" type="slides" on="slideChange:carouselWithPreviewSelector.toggle(index=event.index, value=true)">
        <amp-img src="https://unsplash.it/400/300?image=10" width="16" height="9" layout="fill" alt="a sample image"></amp-img>
        <amp-img src="https://unsplash.it/400/300?image=11" width="16" height="9" layout="fill" alt="a sample image"></amp-img>
        <amp-img src="https://unsplash.it/400/300?image=12" width="16" height="9" layout="fill" alt="a sample image"></amp-img>
        <amp-img src="https://unsplash.it/400/300?image=13" width="16" height="9" layout="fill" alt="a sample image"></amp-img>
    </amp-carousel>
    <amp-selector id="carouselWithPreviewSelector" class="carousel-preview text-center pt1" on="select:carouselWithPreview.goToSlide(index=event.targetOption)" layout="container">
        <amp-img option="0" selected src="https://unsplash.it/60/40?image=10" width="60" height="40" alt="a sample image"></amp-img>
        <amp-img option="1" src="https://unsplash.it/60/40?image=11" width="60" height="40" alt="a sample image"></amp-img>
        <amp-img option="2" src="https://unsplash.it/60/40?image=12" width="60" height="40" alt="a sample image"></amp-img>
        <amp-img option="3" src="https://unsplash.it/60/40?image=13" width="60" height="40" alt="a sample image"></amp-img>
    </amp-selector>
</div>
