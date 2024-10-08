@include('header')
  <!--  ************************* Page Title Starts Here ************************** -->
        
  <div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>About Our Charity</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> About Us</li>
            </ul>
        </div>
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

@include('footer')