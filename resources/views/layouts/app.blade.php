<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  @stack('title')


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome style -->
  <link href="/public/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="/public/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="/public/css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="top_nav_container">
            <div class="contact_nav">
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                    (+244) 929 366 854 / 998 257 459 
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                    Email : geral@zaneconnec.ao
                </span>
              </a>
            </div>
            <from class="search_form">
              <input type="text" class="form-control" placeholder="Search here...">
              <button class="" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </from>
            <div class="user_option_box">
              <!--a href="" class="account-link">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>
                  My Account
                </span>
              </a-->
              <a href="" class="cart-link">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span>
                  Cart
                </span>
              </a>
            </div>
          </div>

        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="{{route('inicio')}}">
                <span>
                      <img class="d-block mx-auto mb-4" src="public/images/logo.png" alt="" width="72" height="72">
                </span>
              </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <li class="nav-item {{( request()->is('inicio')) ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('inicio')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{( request()->is('sobre')) ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('sobre')}}"> Sobre</a>
                </li>
                <li class="nav-item {{( request()->is('produtos')) ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('produtos')}}">Produtos</a>
                </li>
                <!--li class="nav-item">
                  <a class="nav-link" href="why.html">Why Us</a>
                </li-->
                <!--li class="nav-item">
                  <a class="nav-link" href="testimonial.html">Testimonial</a>
                </li-->
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
  </div>

  @stack('body')

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h5>
                <a href="{{route('inicio')}}" class="navbar-brand">
                    <span>
                      <img class="d-block mx-auto mb-4" src="/public/images/logoFooter.png" alt="" width="200" height="175">
                    </span>
                  </a>
            </h5>
            <p>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                Endereço
            </p>
            <p>
                <i class="fa fa-phone" aria-hidden="true"></i>
                +244 929 366 854
            </p>
            <p>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                geral@zaneconnec.ao
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Information
            </h5>
            <p>
              Eligendi sunt, provident, debitis nemo, facilis cupiditate velit libero dolorum aperiam enim nulla iste maxime corrupti ad illo libero minus.
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_links">
             <!--h5>
              Useful Link
            </h5-->
            <ul>
            <li>
                 <a href="{{route('inicio')}}">
                    Home
                 </a>
            </li>
             <li>
                <a href="{{route('sobre')}}">
                  About
                </a>
            </li>
            <li>
                <a href="{{route('produtos')}}">
                  Products
                </a>             
            </li>
            <!--li>
                <a href="why.html">
                  Why Us
                </a>
            </li-->
            <!--li>
                <a href="testimonial.html">
                  Testimonial
                </a>
            </li-->
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            <div class="social_box">
                <a href="//www.facebook.com/Zaneconnect.ao" target="_blank">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <!--a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a-->
                <a href="//www.instagram.com/Zaneconnect" target="_blank">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <!--a href="">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a-->
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->


   <!-- footer section -->
   <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="#">Zaneconnect</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="/public/js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="/public/js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="/public/js/custom.js"></script>


</body>

</html>