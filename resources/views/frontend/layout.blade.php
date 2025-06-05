<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vindway Rent</title>
    <link rel="icon" href="{{ asset('storage/logo/logo-mini.png') }}" type="image/png"/>

    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- CDN Font Awesome v6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="{{ asset('frontend/fonts/icomoon/style.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.fancybox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/fonts/flaticon/font/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}" />

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
  </head>

  <body>
    <div class="site-wrap" id="home-section">
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <header class="custom-navbar site-navbar site-navbar-target" role="banner">
        <div class="container">
          <div class="row align-items-center position-relative">
            <div class="col-3"></div> <!--  Kosong-->
            <div class="col-9 text-right">
              <span class="d-inline-block d-lg-none">
                <a href="#" class="custom-toggle site-menu-toggle js-menu-toggle py-5">
                  <span class="icon-menu h3" style="color: white;"></span>
                </a>
              </span>

              <nav
                class="site-navigation text-right ml-auto d-none d-lg-block"
                role="navigation"
              >
                <ul class="site-menu main-menu js-clone-nav ml-auto">
                  <li class="active">
                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                  </li>
                  <li><a href="{{ url('daftar-mobil') }}" class="nav-link">Daftar Mobil</a></li>
                  </li>
                  <!-- <li><a href="{{ url('blog') }}" class="nav-link">Blog</a></li> -->
                  <li><a href="{{ url('tentang-kami') }}" class="nav-link">Tentang Kami</a></li>
                  <li><a href="{{ url('kontak') }}" class="nav-link">Kritik & Saran</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>

      @php
        $waNumber = preg_replace('/[^0-9]/', '', $setting->phone ?? '');
        $message2 = urlencode("Halo Vindway, saya tertarik untuk menyewa mobil. Mohon informasinya terkait unit yang tersedia dan tarif sewanya. Terima kasih.")
      @endphp

      @yield('content')

      <div class="site-section bg-main py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 mb-4 mb-md-0">
              <h2 class="mb-2 text-white"><strong>Tunggu apalagi?</strong></h2>
              <p class="mb-0 opa-7"><strong>
                Sewa mobilmu sekarang di Vindway — drive your way dengan nyaman dan hemat!</p>
            </div></strong>
            <div class="col-lg-5 text-md-right">
              <a href="https://wa.me/{{ $waNumber }}?text={{ $message2 }}" target="_blank" class="btn btn-main btn-white text-main"><i class="fa-brands fa-whatsapp"></i>  Sewa Sekarang</a>
            </div>
          </div>
        </div>
      </div>

      <footer class="site-footer">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-lg-6 mt-5">
              <h1 class="footer-heading mb-4">Social Media</h1>
              <p>{{ $setting->footer_description }}</p>
              <ul class="list-unstyled social">
                <li><a href="{{ $setting->facebook }}"><span class="icon-facebook"></span></a></li>
                <li><a href="{{ $setting->instagram }}"><span class="icon-instagram"></span></a></li>
                <li><a href="{{ $setting->twitter }}"><span class="fa-brands fa-x-twitter"></span></a></li>
                <li><a href="{{ $setting->linkedin }}"><span class="fa-brands fa-tiktok"></span></a></li>
              </ul>
            </div>
            <div class="col-lg-6 ml-auto">
                  <h1 class="footer-heading mb-4 mt-5">About Us</h1>
                  <ul class="list-unstyled">
                    <li class="d-block mb-3">
                      <span class="d-block text-black">Alamat Lengkap:</span>
                      <span>{{ $setting->alamat ?? '-' }}</span>
                    </li>
                    <li class="d-block mb-3">
                      <span class="d-block text-black">Phone:</span
                      ><span>{{ $setting->phone ?? "-" }}</span>
                    </li>
                    <li class="d-block mb-3">
                      <span class="d-block text-black">Email:</span
                      ><span>{{ $setting->email ?? "-" }}</span>
                    </li>
                  </ul>
            </div>
          </div>
              <div class="border-top pt-5 text-center">
                <p>
                  &copy; <script>document.write(new Date().getFullYear());</script> VINDWAY | All rights reserved
                </p>
              </div>
        </div>
      </footer>
    </div>

    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('frontend/js/aos.js') }}"></script>

    <script src="{{ asset('frontend/js/main.js') }}"></script>
    @stack('script-alt')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({
        offset: 50,
        once: true,
        duration: 500,
      });
    </script>
  </body>
</html>
