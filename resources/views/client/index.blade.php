<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{config('app.name')}} - A place buy Shell Backdoor!</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('cl/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('cl/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('cl/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Maundy - v2.1.0
  * Template URL: https://bootstrapmade.com/maundy-free-coming-soon-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center">

      <h1>{{config('app.name')}}</h1>
      <h2>A place to buy shell backdoor</h2>
      <div class="countdown d-flex justify-content-center" data-count="2020/12/3">
        <div>
          <h3>{{$count_user}}</h3>
          <h4>User</h4>
        </div>
        <div>
          <h3>{{$count_shell}}</h3>
          <h4>Availble</h4>
        </div>
        <div>
          <h3>{{$count_shell_sold}}</h3>
          <h4>Sold Out</h4>
        </div>
        <div>
          <h3>{{$total_shell}}</h3>
          <h4>Total</h4>
        </div>
      </div>

      <div class="subscribe">
        <h4>Join Us To Buy Shell Backdoor!</h4>
        <div class="row">
          <div class="col-md-6">
            @if (Route::has('login'))
            @auth
            <a href="{{ url('/home') }}" class="btn btn-danger mt-2 " style="border-radius: 50px; width: 210%">Home</a>
            @else
            <a href="{{route('login')}}" class="btn btn-success mt-2" style="border-radius: 50px; width: 100%">Login</a>
          </div>
          @if (Route::has('register'))
          <div class="col-md-6">
            <a href="{{route('register')}}" class="btn btn-info mt-2" style="border-radius: 50px; width: 100%"> Register </a>
            @endif
            @endif

            @endif


          </div>
        </div>
      </div>

      <div class="social-links text-center">
        <a href="https://github.com/imyhacker" class="twitter" target="_blank"><i class="icofont-github"></i></a>
        
      </div>

    </div>
  </header><!-- End #header -->
  <main id="main">
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
          <p>This web is a place for buying and selling backdoor shells, and only on this web that sells backdoor shells at low prices</p>
        </div>

        <div class="row mt-2">
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-user"></i></div>
            <h4 class="title"><a href="">Low Price</a></h4>
            <p class="description">Only with $ 10 you can join get access</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
            <h4 class="title"><a href="">Quality</a></h4>
            <p class="description">There are many shells of good quality, PA or DA</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-earth"></i></div>
            <h4 class="title"><a href="">Many Country</a></h4>
            <p class="description">There are many shells from various countries</p>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-dollar"></i></div>
            <h4 class="title"><a href="">Payment Method</a></h4>
            <p class="description">Paypal, OVO, Dana</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-flash"></i></div>
            <h4 class="title"><a href="">Fast Response</a></h4>
            <p class="description">Admin's Always Online 19h</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-mail"></i></div>
            <h4 class="title"><a href="">Using Mail</a></h4>
            <p class="description">Transaction Shell Using Mail (GMAIL)</p>
          </div>
        </div>
      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Indonesia, Jakarta</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>shellinbackdoor@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>xxxxxxxxxxxxx</p>
              </div>

            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            
              <iframe src="https://maps.google.com/maps?q=palmerah&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 320px;" allowfullscreen></iframe>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>{{config('app.name')}}</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/maundy-free-coming-soon-bootstrap-theme/ -->
        Designed by <a href="https://github.com/imyhacker">Arikun</a>
      </div>
    </div>
  </footer><!-- End #footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('cl/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('cl/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('cl/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('cl/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('cl/assets/vendor/jquery-countdown/jquery.countdown.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('cl/assets/js/main.js')}}"></script>

</body>

</html>