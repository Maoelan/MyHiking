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
        <form method="POST" action="{{ url('/story_setting_edit_action/' . $story->id_story) }}" enctype="multipart/form-data">
        @csrf
            <div class="row">
               <div class="col-md-12">
                  <div class="heading">
                     <h4>Edit Data <span class="orange_color">Story</span></h4>
                  </div>
               </div>
            </div>
        <div class="card">
            <div class="card-body">

                <div class="row mb-3">
                    <label for="judul_story" class="col-md-4 col-form-label text-md-end">{{ __('Judul') }}</label>

                    <div class="col-md-6">
                        <input id="judul_story" type="text" placeholder ="judul_story" class="form-control @error('judul_story') is-invalid @enderror" name="judul_story" value="{{ $story -> judul_story }}" required autocomplete="judul_story" autofocus>

                        @error('judul_story')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nama" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                    <div class="col-md-6">
                        <input id="nama" type="text" placeholder ="nama" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $story -> nama }}" required autocomplete="nama" autofocus>

                        @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tanggal_post" class="col-md-4 col-form-label text-md-end">{{ __('Tanggal') }}</label>

                    <div class="col-md-6">
                        <input id="tanggal_post" type="date" placeholder ="tanggal_post" class="form-control @error('tanggal_post') is-invalid @enderror" name="tanggal_post" value="{{ $story -> tanggal_post }}" required autocomplete="tanggal_post" autofocus>

                        @error('tanggal_post')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="foto_story" class="col-md-4 col-form-label text-md-end">{{ __('Foto') }}</label>

                    <div class="col-md-6">
                     <strong>Image : </strong>
                     <div class="mb-2"></div>
                        <input id="foto_story" type="file" placeholder ="Foto Story" class="form-control @error('foto_story') is-invalid @enderror" name="foto_story" value="{{ $story -> foto_story }}" required autocomplete="foto_story" autofocus>
                        <div class="mb-2"></div>
                        <img src="/images/{{ $story->foto_story }}" width="300px">
                        @error('foto_gunung')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="post_story" class="col-md-4 col-form-label text-md-end">{{ __('Story') }}</label>

                    <div class="col-md-6">
                        <textarea id="post_story" type="text" placeholder ="Story" class="form-control @error('post_story') is-invalid @enderror" name="post_story" value="" required autocomplete="post_story" autofocus>{{ $story -> post_story }}</textarea>

                        @error('post_story')
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
