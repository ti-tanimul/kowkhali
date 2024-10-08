<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kowkhali</title>
    <link rel="shortcut icon" href="{{ asset('images/fav.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slider/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slider/css/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <style>
         .item {
                position: relative;
                height: 500px; /* Adjust this height based on your needs */
                background-size: contain; /* Ensure the entire image fits within the container */
                background-position: center; /* Center the image within the slider */
                background-repeat: no-repeat; /* Prevent the image from repeating */
            }

            .slider-captions {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
                color: #fff;
                z-index: 2;
            }

            .slider-title {
                font-size: 2.5em;
                font-weight: bold;
                margin-bottom: 10px;
            }

            .slider-text {
                font-size: 1.2em;
                font-weight: normal;
            }

            @media (max-width: 768px) {
                .slider-title {
                    font-size: 1.8em;
                }

                .slider-text {
                    font-size: 1em;
                }
            }
/* for meet our team script */
        

    </style>
</head>

<body>

<header class="continer-fluid ">
    <div  class="header-top">
        <div class="container">
            <div class="row col-det">
                <div class="col-lg-6 d-none d-lg-block">
                    <ul class="ulleft">
                        <li>
                            <i class="far fa-envelope"></i>
                            sales@smarteyeapps.com
                            <span>|</span></li>
                        <li>
                            <i class="fas fa-phone-volume"></i>
                            +876 987 666 5433</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 folouws">
                  
                    <ul class="ulright">
                       <li> <small>Folow Us </small>:</li>
                        <li>
                            <i class="fab fa-facebook-square"></i>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-3 d-none d-md-block col-md-6 btn-bhed">
                    {{-- <button class="btn btn-sm btn-success">Donate</button> --}}
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Donate Here
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Give Donation</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body" style="text-align: left">
                              <h4>Bkash No: = <strong>017617080</strong></h4>
                              <h4>Nogod No: = <strong>017617080</strong></h4>
                              <h4>Rocket No: = <strong>017617080</strong></h4>
                              <h4>Bank Account No: = <strong>017617080</strong></h4>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="menu-jk" class="header-bottom">
        <div class="container">
            <div class="row nav-row">
                <div class="col-lg-3 col-md-12 logo">
                    <a href="{{ route('fronted-home') }}">
                        <img src="{{ asset('images/logo.jpg') }}" alt="">
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                    </a>

                </div>
                <div id="menu" class="col-lg-9 col-md-12 d-none d-lg-block nav-col">

                    <ul class="navbad">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('fronted-home') }}">Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('aboutUs') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('service') }}">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contactUs') }}">Contact US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> 
</header>