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
      <title>MyHiking</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="../css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="../images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="../images/loading.gif" alt="" /></div>
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
                        <div class="logo"> <a href="index.html"><img src="../images/myhiking/logo22.png" alt="#"></a> </div>
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
                                 <a href="{{ route('user_setting') }}">User</a>
                              </li>
                              <li>
                                 <a href="{{ route('pegunungan_setting') }}">Pegunungan</a>
                              </li>
                              <li>
                                 <a href="{{ route('story_setting') }}">Story</a>
                              </li>
                              <li>
                                 <a href="{{ route('info_setting') }}">Info</a>
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
      <!-- end section -->
      <!-- section --> 
      <div class="section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                <br>
                  <div class="heading">
      <form method="POST" action="{{ url('/user_setting_edit_action/' . $data->id) }}" enctype="multipart/form-data">
        @csrf

            <div class="row">
               <div class="col-md-12">
                  <div class="heading">
                     <h4>Edit <span class="orange_color">User | Role : 0 = user, 1 = admin</span></h4>
                  </div>
               </div>
            </div>
        <div class="card">
            <div class="card-body">

                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" placeholder ="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $data -> name }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" placeholder ="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $data -> email }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" placeholder ="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ $data -> password }}" required autocomplete="password" autofocus>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>

                    <div class="col-md-6">
                        <input id="role" type="text" placeholder ="role" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ $data -> role }}" required autocomplete="role" autofocus>

                        @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-0">
                  <div class="col-md-8 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          {{ __('SIMPAN') }}
                      </button>
                  </div>
              </div>
            </div>
        </div>

      </form>
      </div>
   </div>
</div>
</div>
</div>
      <!-- end section -->
      <!-- footer -->
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
      <script src="../js/jquery.min.js"></script>
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.bundle.min.js"></script>
      <script src="../js/jquery-3.0.0.min.js"></script>
      <script src="../js/plugin.js"></script>
      <!-- Scrollbar Js Files -->
      <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../js/custom.js"></script>
   </body>
</html>
