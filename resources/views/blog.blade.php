@include('header')

<!--  ************************* Page Title Starts Here ************************** -->
        
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Our Blog</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Blog</li>
            </ul>
        </div>
    </div>
</div>



<!-- ################# Our Blog Starts Here#######################--->

<section class="our-blog">
         <div class="container">
             
            <div class="blog-row row">
                @foreach ($blogs as $blog)
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog">
                        <figure>
                            <img src="{{ asset('images/'.$blog->image) }}" alt="">
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
  

@include('footer')