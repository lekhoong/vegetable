
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- site metas -->
    <title>fresh</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- favicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<header>
    <!-- header inner -->   
    <div class="header">
       <div class="container">
          <div class="row">
             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                <div class="full">
                   <div class="center-desk">
                      <div class="logo">
                         <a href="{{ url('vegetables') }}"><img src="images/logo.png" alt="#" style=""/></a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                <nav class="navigation navbar navbar-expand-md navbar-dark">
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarsExample04">
                      <ul class="navbar-nav mr-auto">
                         <li class="nav-item">
                            <a class="nav-link" href="{{ url('vegetables') }}">Home</a>
                         </li>
                         <li class="nav-item active">
                            <a class="nav-link" href="{{ url('juice') }}">Order</a>
                         </li>
                         @auth
                         <li class="nav-item">
                             <a class="nav-link" href="{{ url('profile/' . Auth::user()->name) }}">{{ Auth::user()->name }}</a>
                         </li>
                         <li class="nav-item">
                             <form id="logout-form" action="{{ route('logoutFunction') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
                             <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                 Logout
                             </a>
                         </li>
                     @else
                         <li class="nav-item">
                             <a class="nav-link" href="{{ url('login') }}">Login</a>
                         </li>
                     @endauth  
                      <li class="nav-item ">
                        <a class="nav-link" href="{{ url('cart') }}">CART</a>
                      </li>                             
                      <li class="nav-item ">
                        <a class="nav-link" href="{{ url('track-purchases') }}">TRACK</a>
                     </li>         
                      </ul>
                   </div>
                </nav>
             </div>
          </div>
       </div>
    </div>
 </header>
 <body class="main-layout inner_page">
    @yield('content')
</body>
 <!-- end header -->
 {{-- <footer id="contact">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <div class="col-md-10 offset-md-1">
                    <form id="request" class="main_form">
                        <div class="row">
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Full Name" type="text" name="Full Name"> 
                            </div>
                            <div class="col-md-7">
                                <input class="contactus" placeholder="Email" type="email" name="Email"> 
                            </div>
                            <div class="col-md-7">
                                <input class="contactus" placeholder="Phone Number" type="tel" name="Phone Number">                          
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                                <ul class="social_icon">
                                    <h3>Follow Me</h3>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-md-12">
                                <textarea class="contactus1" placeholder="Message" name="Message"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-10 offset-md-1">
                    <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a> Locations</li>
                        <li><a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a> +71 9087654321</li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a> demo@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer> --}}
</body>
</html>
