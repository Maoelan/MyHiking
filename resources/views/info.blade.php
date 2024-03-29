<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Info</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-3 logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.html"><img src="images/myhiking/logo22.png" alt="#"></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li>
                                 <a href="{{ route('home') }}">Beranda</a>
                              </li>
                              <li>
                                 <a href="{{ route('pegunungan') }}">Pegunungan</a>
                              </li>
                              <li>
                                 <a href="{{ route('story') }}">Cerita Komunitas</a>
                              </li>
                              <li>
                                 <a href="{{ route('info') }}">Info</a>
                              </li>
                              @guest
                                 @if (Route::has('login'))
                                 <li>
                                    <a href="{{ route('login') }}">Login</a>
                                 </li>
                                 @endif

                                 @if (Route::has('register'))
                                 <li>
                                    <a href="{{ route('register') }}">Register</a>
                                 </li>
                                 @endif
                              @else
                              <li>
                                 <a href="{{ route('home') }}"> {{ Auth::user()->name }}</a>
                              </li>
                              <li>
                                 <a href="{{ route('logout') }}">Logout</a>
                                 @csrf
                              </li>
                              @endguest
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <div class="contact-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="contactheading">
               <h3>FAQ</h3>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="section layout_padding">
<div class="container">
   @foreach ($info as $infofaq)
<div class="list-group w-100">
   <a href="#shortExampleAnswer1collapse" data-mdb-toggle="collapse" aria-expanded="false"
     aria-controls="shortExampleAnswer1collapse" class="list-group-item list-group-item-action">
     <div class="d-flex w-100 justify-content-between">
       <h5 class="mb-1">{{ $infofaq->pertanyaan }}</h5>
     </div>
     <p class="mb-1">
      {{ $infofaq->jawaban }}
     </p>
   </a>
</div>
@endforeach
</div>
</div>


<footer>
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-6">
            <a href="#"><img src="images/myhiking/logo22.png" alt="#" /></a>
            <ul class="contact_information">
               <li><span><img src="images/location_icon.png" alt="#" /></span><span class="text_cont">London 145<br>United Kingdom</span></li>
               <li><span><img src="images/phone_icon.png" alt="#" /></span><span class="text_cont">987 654 3210<br>987 654 3210</span></li>
               <li><span><img src="images/mail_icon.png" alt="#" /></span><span class="text_cont">demo@gmail.com<br>support@gmail.com</span></li>
            </ul>
         </div>
      </div>
   </div>
</footer>
<div class="cpy">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <p>Copyright © 2019 Design by <a href="https://html.design/">Free Html Templates</a></p>
         </div>
      </div>
   </div>
</div>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- Scrollbar Js Files -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>

   <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js -->
   </body>
</html>