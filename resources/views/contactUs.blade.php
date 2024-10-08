@include('header')

<!--  ************************* Page Title Starts Here ************************** -->
        
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Contact Us</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Contact US</li>
            </ul>
        </div>
    </div>
</div>

<!--  ************************* Contact Us Starts Here ************************** -->


<div class="row contact-rooo no-margin">
    <div class="container">
        <div class="row">
            <div style="padding:20px" class="col-sm-7">
                <h2 >Contact Form</h2> <br>
                <form action="{{ route('contactUs-store') }}" method="post">
                    @csrf
                    <div class="row cont-row">
                        <div  class="col-sm-3"><label>Enter Name </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Email Address </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" name="email" placeholder="Enter Email Address" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" name="mobile" placeholder="Enter Mobile Number" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Enter Message</label><span>:</span></div>
                        <div class="col-sm-8">
                            <textarea rows="5" name="message" placeholder="Enter Your Message" class="form-control input-sm"></textarea>
                        </div>
                    </div>
                    <div style="margin-top:10px;" class="row">
                        <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                            <button class="btn btn-primary btn-sm" name="send">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-5">

                <div style="margin:50px" class="serv">
                    <h2 style="margin-top:10px;">Address</h2>
                   Antonya Street, <br>
                    23/H-2, Building<br>
                    TA, AUS District<br>
                    Phone:+91 9159669599<br>
                    Email:support@smarteyeapps.com<br>
                    Website:www.smarteyeapps.com.com<br>
                </div>
            </div>
        </div>
    </div>
</div>
   
  

@include('footer')