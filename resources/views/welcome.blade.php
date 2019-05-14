<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>E-Voting</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{url('assets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{url('assets/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{url('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="{{url('assets/img/intro-img.svg')}}" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>PEMILU SERENTAK<br><span>Tahun 2050</span><br>untuk Indonesia!</h2>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>#VISI & MISI PASLON</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </header>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="{{url('assets/img/about-extra-1.svg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Dr. Moch Subagio (Paslon 01)</h4>
            <p>
              Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
            </p>
            <p>
              Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
            </p>
          </div>
        </div>

        <br/>
        <br/>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="{{url('assets/img/about-extra-2.svg')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>KH. Husman Niaga (Paslon 02)</h4>
            <p>
             Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt. 
            </p>
            <p>
              Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
            </p>
            <p>
              Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
            </p>
          </div>
          
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>#VOTING</h3>
           <br/>

        </header>

        <div class="row">

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="{{ route('hasiljok.create') }}">VOTE PASLON 1</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-analytics-outline" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="{{ route('hasilprab.create') }}">VOTE PASLON 2</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #services -->

  </main>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{url('assets/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{url('assets/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{url('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('assets/lib/easing/easing.min.js')}}"></script>
  <script src="{{url('assets/lib/mobile-nav/mobile-nav.js')}}"></script>
  <script src="{{url('assets/lib/wow/wow.min.js')}}"></script>
  <script src="{{url('assets/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{url('assets/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{url('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{url('assets/lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('assets/lib/lightbox/js/lightbox.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{url('assets/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{url('assets/js/main.js')}}"></script>

</body>
</html>
