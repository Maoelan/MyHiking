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
                           <ul>
                              <li class="active">
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
                                 <a href="{{ route('home') }}" style="color : white"> {{ Auth::user()->name }}</a>
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
        <form method="POST" action="{{ route('pegunungan_setting_insert_action') }}" enctype="multipart/form-data">
        @csrf
            <div class="row">
               <div class="col-md-12">
                  <div class="heading">
                     <h4>Insert Data <span class="orange_color">Pegunungan</span></h4>
                  </div>
               </div>
            </div>
        <div class="card">
            <div class="card-body">

                <div class="row mb-3">
                    <label for="nama_gunung" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                    <div class="col-md-6">
                        <input id="nama_gunung" type="text" placeholder ="Nama Gunung" class="form-control @error('nama_gunung') is-invalid @enderror" name="nama_gunung" value="" required autocomplete="nama_gunung" autofocus>

                        @error('nama_gunung')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="letak_gunung" class="col-md-4 col-form-label text-md-end">{{ __('Letak') }}</label>

                    <div class="col-md-6">
                        <input id="letak_gunung" type="letak_gunung" placeholder ="Letak Gunung" class="form-control @error('letak_gunung') is-invalid @enderror" name="letak_gunung" value="" required autocomplete="letak_gunung" autofocus>

                        @error('letak_gunung')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="ketinggian_gunung" class="col-md-4 col-form-label text-md-end">{{ __('Ketinggian') }}</label>

                    <div class="col-md-6">
                        <input id="ketinggian_gunung" type="text" placeholder ="Ketinggian Gunung" class="form-control @error('ketinggian_gunung') is-invalid @enderror" name="ketinggian_gunung" value="" required autocomplete="ketinggian_gunung" autofocus>

                        @error('ketinggian_gunung')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jenis_gunung" class="col-md-4 col-form-label text-md-end">{{ __('Jenis') }}</label>

                    <div class="col-md-6">
                        <input id="jenis_gunung" type="text" placeholder ="Jenis Gunung" class="form-control @error('jenis_gunung') is-invalid @enderror" name="jenis_gunung" value="" required autocomplete="jenis_gunung" autofocus>

                        @error('jenis_gunung')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="foto_gunung" class="col-md-4 col-form-label text-md-end">{{ __('Foto') }}</label>

                    <div class="col-md-6">
                        <input id="foto_gunung" type="file" placeholder ="Foto Gunung" class="form-control @error('foto_gunung') is-invalid @enderror" name="foto_gunung" value="" required autocomplete="foto_gunung" autofocus>

                        @error('foto_gunung')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="deskripsi" class="col-md-4 col-form-label text-md-end">{{ __('Deskripsi') }}</label>

                    <div class="col-md-6">
                        <textarea id="deskripsi" type="text" placeholder ="Deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="" required autocomplete="deskripsi" autofocus></textarea>

                        @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jalur_pendakian" class="col-md-4 col-form-label text-md-end">{{ __('Jalur Pendakian') }}</label>

                    <div class="col-md-6">
                        <textarea id="jalur_pendakian" type="text" placeholder ="Jalur Pendakian" class="form-control @error('jalur_pendakian') is-invalid @enderror" name="jalur_pendakian" value="" required autocomplete="jalur_pendakian" autofocus></textarea>

                        @error('jalur_pendakian')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="level_pendakian" class="col-md-4 col-form-label text-md-end">{{ __('Level Pendakian') }}</label>

                    <div class="col-md-6">
                        <input id="level_pendakian" type="text" placeholder ="Level Pendakian" class="form-control @error('level_pendakian') is-invalid @enderror" name="level_pendakian" value="" required autocomplete="level_pendakian" autofocus>

                        @error('level_pendakian')
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
                  <a href="#"><img src="../images/footer_logo.png" alt="#" /></a>
                  <ul class="contact_information">
                     <li><span><img src="../images/location_icon.png" alt="#" /></span><span class="text_cont">London 145<br>United Kingdom</span></li>
                     <li><span><img src="../images/phone_icon.png" alt="#" /></span><span class="text_cont">987 654 3210<br>987 654 3210</span></li>
                     <li><span><img src="../images/mail_icon.png" alt="#" /></span><span class="text_cont">demo@gmail.com<br>support@gmail.com</span></li>
                  </ul>
                  <ul class="social_icon">
                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                     <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
               </div>
               <div class="col-lg-2 col-md-6">
                  <div class="footer_links">
                     <h3>Quick link</h3>
                     <ul>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Home</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Features</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Evens</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Markrting</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Blog</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Testimonial</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Contact</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="footer_links">
                     <h3>Instagram</h3>
                     <ol>
                        <li><img class="img-responsive" src="../images/footer_blog.png" alt="#" /></li>
                        <li><img class="img-responsive" src="../images/footer_blog.png" alt="#" /></li>
                        <li><img class="img-responsive" src="../images/footer_blog.png" alt="#" /></li>
                        <li><img class="img-responsive" src="../images/footer_blog.png" alt="#" /></li>
                     </ol>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="footer_links">
                     <h3>Contact us</h3>
                     <form action="index.html">
                        <fieldset>
                           <div class="field">
                              <input type="text" name="name" placeholder="Your Name" required="" />
                           </div>
                           <div class="field">
                              <input type="email" name="email" placeholder="Email" required="" />
                           </div>
                           <div class="field">
                              <input type="text" name="subject" placeholder="Subject" required="" />
                           </div>
                           <div class="field">
                              <textarea placeholder="Message"></textarea>
                           </div>
                           <div class="field">
                              <div class="center">
                                 <button class="reply_bt">Send</button>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
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
