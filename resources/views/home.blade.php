@extends('master')

@section('home')
  <!-- ******************** Slider Starts Here ******************* -->
  <div class="slider">
    <!-- Set up your HTML -->
    <div class="owl-carousel">
        @foreach ($banners as $banner)
        <div class="item" style="position: relative; height: 500px; background-image: url('{{ asset('images/'.$banner->image) }}'); background-size: cover; background-position: center;">
            <div class="slider-captions text-center">
                <h1 class="slider-title">{{ $banner->title }}</h1>
                <p class="slider-text hidden-xs">{{ $banner->description }}</p> 
            </div>
        </div>
        @endforeach
    </div>
    

</div>                 
              
<!--  ************************* About Us Starts Here ************************** -->    
   
<div class="about-us container-fluid">
<div class="container">

    <div class="row natur-row no-margin w-100">
        <div class="text-part col-md-6">
            <h2>About Our Charity</h2>
            <p>{{ $abouts->about_description }}</p>
        </div>
        <div class="image-part col-md-6">
            <div class="about-quick-box row">
                <div class="col-md-6">
                    <div class="about-qcard">
                       <i class="fas fa-user"></i>
                        <p>Becom a Volunteer</p>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="about-qcard ">
                       <i class="fas fa-search-dollar red"></i>
                        <p>Quick Fundrais</p>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="about-qcard ">
                       <i class="fas fa-donate yell"></i>
                        <p>Giv Donation</p>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="about-qcard ">
                       <i class="fas fa-hands-helping blu"></i>
                        <p>Help Someone</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>     


<!-- ################# Mission Vision Start Here #######################--->

<section class="container-fluid mission-vision">
  <div class="container">
      <div class="row mission">
          <div class="col-md-6 mv-det">
              <h1>Our Mission</h1>
              <p>{{ $abouts->mission_description }}</p>
          </div>
          <div class="col-md-6 mv-img">
              <img src="{{ asset('images/'.$abouts->mission_image) }}" alt="">
          </div>
      </div>
      <div class="row vision">
          <div class="col-md-6 mv-img">
               <img src="{{ asset('images/'.$abouts->vission_image) }}" alt="">
          </div>
          <div class="col-md-6 mv-det">
               <h1>Our Vision</h1>
               <p>{{ $abouts->vission_description }}</p>
          </div>
      </div>
  </div>
</section>   



 <!-- ################# Events Start Here#######################--->
<section class="events">
    <div class="container">
        <div class="session-title row">
            <h2>Popular Causes</h2>
            <p>We are a non-profital & Charity raising money for child education</p> 
        </div>
        <div class="event-ro row">
            @foreach ($services as $service)
            <div class="col-md-4 col-sm-6">
                <div class="event-box">
                    <img src="{{ asset('images/'.$service->image) }}" alt="" style="height: 250px">
                    <h4>{{ $service->title }}</h4>
                    <p class="desic">{{ $service->description }}</p>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
</section>   




<!-- ################# Charity Number Starts Here#######################--->


<div class="doctor-message">
    <div class="inner-lay">
        <div class="container">
           <div class="row session-title">
               <h2>Our Achievemtns in Numbers</h2>
               <p>We can talk for a long time about advantages of our Dental clinic before other medical treatment facilities.
                    But you can read the following facts in order to make sure of all pluses of our clinic:</p>
           </div>
            <div class="row">
                <div class="col-sm-2 numb">
                    <h3>{{ $number->expereance }}</h3>
                    <span>YEARS OF EXPEREANCE</span>
                </div>
                <div class="col-sm-2 numb">
                    <h3>{{ $number->volunteer }}</h3>
                    <span>VOLUNTEER</span>
                </div>
                <div class="col-sm-2 numb">
                    <h3>{{ $number->event }}</h3>
                    <span>COMPLEATE EVENTS</span>
                </div>
                <div class="col-sm-2 numb">
                    <h3>{{ $number->family }}</h3>
                    <span>HELP FAMILY</span>
                </div>
                <div class="col-sm-2 numb">
                    <h3>{{ $number->person }}</h3>
                    <span>HELP FOR MEDICAL</span>
                </div>
                <div class="col-sm-2 numb">
                    <h3>{{ $number->childreen }}</h3>
                    <span>HELP EDUCATION CHILDREEN</span>
                </div>
            </div>
        </div>

    </div>

</div> 
     
<!--################### Our Team Starts Here #######################--->
      <section class="our-team team-11">
        <div class="container">
            <div class="session-title row">
                  <h2>Meet our Team</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit velit</p>
            </div>
        
            <div class="row team-row">
                @foreach ($teams as $team)
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="{{ asset('images/'.$team->image) }}" alt="" style="height: 250px">
                        <div class="det-o">
                            <h4>{{ $team->name }}</h4>
                            <i>{{ $team->designation }}</i>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            
        </div>
    </section>      
      

<!-- ################# Our Blog Starts Here#######################--->

<section class="our-blog">
         <div class="container">
             <div class="row session-title">
                <h2> Our Blog </h2>
                <p>Take a look at what people say about US </p>
            </div>
            <div class="blog-row row">
                @foreach ($blogs as $blog)
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog">
                            <figure>
                                <img src="{{ asset('images/'.$blog->image) }}" alt="" style="height: 250px">
                            </figure>
                            <div class="blog-detail">
                                <h4>{{ $blog->title }}</h4>
                                <p>{{ $blog->description }}</p>
                                <div class="link">
                                    <a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
         </div>
     </section>
     
@endsection
