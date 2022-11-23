<!DOCTYPE html>
<html lang="en">
  <head>
    <title>My Book Collection</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style3/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('style3/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style3/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('style3/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('style3/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('style3/css/bootstrap-datepicker.css')}}">


    <link rel="stylesheet" href="{{asset('style3/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('style3/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('style3/css/jquery.fancybox.min.css')}}">


    <link rel="stylesheet" href="{{asset('style3/css/style.css')}}">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <div class="site-navbar-wrap">

      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-6 col-lg-3">
              <h1 class="my-0 site-logo"><a href="{{route('home')}}">Book Collection</a></h1>
            </div>
            <div class="col-6 col-lg-9">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">

                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3 "><a href="#" class="site-menu-toggle js-menu-toggle text-black">
                    <span class="icon-menu h3"></span>
                  </a></div>

                  <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                    <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
                    <li><a href="{{route('dashboard')}}" class="nav-link">Manage</a></li>
                    <li>
                      <ul class="nav-item dropdown no-arrow">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                            <button type="button" class="btn btn-danger"><a href="{{route('login')}}" style="color: #FFFFFF;">Sign Up / Login</a></button>
                            @endif
                        @else
                            <li class="nav-link" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <span style="">{{ Auth::user()->name }}</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- END .site-navbar-wrap -->


    @yield('konten')


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-12">
                <h3 class="footer-heading mb-4">About Us</h3>
                <p>Book Collection atau My Book Collection merupakan sebuah aplikasi berbasis website yang mana kami menyediakan fitur untuk megetahui buku apa saja yang kalian miliki</p>
              </div>
            </div>



          </div>
          <div class="col-lg-3 ml-auto">

            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigation</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="{{route('home')}}">Home</a></li>
                </ul>
              </div>

            </div>

          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="mb-4">
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | My Book Collection</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="{{asset('style3/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('style3/js/popper.min.js')}}"></script>
  <script src="{{asset('style3/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('style3/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('style3/js/aos.js')}}"></script>
  <script src="{{asset('style3/js/jquery.sticky.js')}}"></script>
  <script src="{{asset('style3/js/stickyfill.min.js')}}"></script>
  <script src="{{asset('style3/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('style3/js/isotope.pkgd.min.js')}}"></script>

  <script src="{{asset('style3/js/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('style3/js/main.js')}}"></script>


  </body>
</html>
