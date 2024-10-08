@include('header')

<!--  ************************* Page Title Starts Here ************************** -->
        
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Our Gallery</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Gallery</li>
            </ul>
        </div>
    </div>
</div>

<!--  ************************* Gallery Starts Here ************************** -->
    <div id="portfolio" class="gallery">    
       <div class="container">
          
          <div class="row">
    {{-- <div class="gallery-filter d-none d-sm-block">
        <button class="btn btn-default filter-button" data-filter="all">All</button>
        <button class="btn btn-default filter-button" data-filter="hdpe">Finance</button>
        <button class="btn btn-default filter-button" data-filter="sprinkle">Digital Marketing</button>
        <button class="btn btn-default filter-button" data-filter="spray"> Money</button>
        <button class="btn btn-default filter-button" data-filter="irrigation">Business Alaysis</button>
    </div> --}}
    <br/>
        @foreach ($blogs as $blog)
        <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter hdpe">
            <img src="{{ asset('images/'.$blog->image) }}" class="img-responsive"
            >
        </div>
        @endforeach

        @foreach ($services as $service)
        <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter hdpe">
            <img src="{{ asset('images/'.$service->image) }}" class="img-responsive">
        </div>
        @endforeach

        @foreach ($abouts as $about)
        <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter hdpe">
            <img src="{{ asset('images/'.$about->mission_image) }}" class="img-responsive">
            {{-- <img src="{{ asset('images/'.$about->vission_image) }}" class="img-responsive"> --}}
        </div>
        @endforeach  
    </div>
</div>
</div>
@include('footer')