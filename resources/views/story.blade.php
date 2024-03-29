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
      <title>Story</title>
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
      <!-- revolution slider -->

     <!-- <div class="row mb-0">
         <div class="col-md-8 offset-md">
             <a  class="btn btn-primary" href="{{ route('story_insert') }}">
                 {{ __('TAMBAH') }}
             </a>
           </div>
        </div>-->

<div class="Blog-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="Blogheading">
               <h3>Story</h3>
               <a  class="btn btn-primary" href="{{ route('story_insert') }}">
                  {{ __('TAMBAH') }}
              </a>
            </div>
         </div>
      </div>
   </div>
</div>


      @foreach ($story as $postory)
      <!-- section --> 
      <div class="section layout_padding blog_blue_bg light_silver">
         <div class="container">
            
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="full">
                     <div class="big_blog">
                        <img class="img-responsive rounded mx-auto d-block" src="/images/{{ $postory->foto_story }}" alt="#" />
                     </div>
                     <div class="blog_cont_2">
                        <h3>{{ $postory->judul_story }}</h3>
                        <p class="sublittle">{{ $postory->tanggal_post }}</p>
                        <p class="sublittle">Nama : {{ $postory->nama }}</p>
                        <p>{{ $postory->post_story }}</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
      @endforeach

<!-- section -->
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
   </body>
</html>