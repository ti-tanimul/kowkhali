@include('header')

  <!--  ************************* Page Title Starts Here ************************** -->
        
  <div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Popular Causes</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> About Us</li>
            </ul>
        </div>
    </div>
</div>



<!-- ################# Events Start Here#######################--->
<section class="events">
    <div class="container">
       
        <div class="event-ro row">
            @foreach ($services as $service)
            <div class="col-md-4 col-sm-6">
                <div class="event-box">
                    <img src="{{ asset('images/'.$service->image) }}" alt="" style="height: 250px">
                    <h4>{{ $service->title }}</h4>
                    <p class="desic">{{ $service->description }}</p>
                    <hr>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>  

@include('footer')