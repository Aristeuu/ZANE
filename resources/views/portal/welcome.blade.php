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

  <title>ZANECOONNECT</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome style -->
  <link href="public/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="public/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="public/css/responsive.css" rel="stylesheet" />

</head>

<body>

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
                <li class="nav-item active">
                  <a class="nav-link" href="{{route('inicio')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item {{( request()->is('sobre')) ? 'active' : ''}}">
                  <a class="nav-link" href="{{route('sobre')}}"> Sobre</a>
              </li>
              <li class="nav-item {{( request()->is('produtos')) ? 'active' : ''}}">
                  <a class="nav-link" href="{{route('produtos')}}">Produtos</a>
              </li>
                <li class="nav-item">
                  <!--a class="nav-link" href="why.html">Why Us</a-->
                </li>
                <li class="nav-item">
                  <!--a class="nav-link" href="testimonial.html">Testimonial</a-->
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          @if($banners->isNotEmpty())
              @foreach ($banners as $banner)
                  <div class="carousel-item active">
                    <div class="container ">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="detail-box">
                            <h1>
                                {{$banner->titulo}}
                            </h1>
                            <p>
                                {!!$banner->descricao!!}
                            </p>
                            <!--a href="#">
                              Read More
                            </a-->
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="img-box">
                            <img src="public/images/{{$banner->foto}}" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                   
              @endforeach

          @else
            <div class="carousel-item active">
              <div class="container ">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>
                        Welcome to our shop
                      </h1>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quam velit saepe dolorem deserunt quo quidem ad optio.
                      </p>
                      <a href="">
                        Read More
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="public/images/slider-img.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div> 
          @endif                   
        </div>
        <div class="carousel_btn_box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- product section -->

  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Nossos Produtos
        </h2>
      </div>
      <div class="row">
        @if($produtos->isNotEmpty())
          @foreach ($produtos as $item)
          <div class="col-sm-6 col-lg-4">
            <div class="box">
              <div class="img-box">
                <img src="public/images/{{$item->foto}}" alt="">
                  <a  class="add_cart_btn" data-toggle="modal" data-target="#modal-default{{$item->id}}">
                  <span>
                    Adquirir
                  </span>
                </a>
              </div>

                    
        <div class="modal fade" id="modal-default{{$item->id}}">
          <div class="modal-dialog modal-sm">
          <div class="modal-content">
              <div class="modal-header">
              <h4 class="modal-title">Onde receberá a sua encomenda?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              </div>
                    <div class="modal-body">
                            <!-- form start -->
                    <form id="ctedForm" action="" method="post" enctype="multipart/form-data" id="formLocal{{$item->id}}">
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <select name="local" id="idLocal">
                              <option value="">Escolher Destino</option>
                              @foreach ($locais as $local)
                                <option value="{{$local->id}}">{{$local->local}} - {{number_format($local->preco,2)}} Kz</option>
                              @endforeach

                            </select>
                          </div>                                      
                            
                          <div class="form-group">
                            
                          <input type="hidden" name="produto" value="{{$item->id}}" class="form-control" id="titulo">
                          </div>  
                                                                
                        </div>
                      <!-- /.card-body -->                            
                      </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" form="formLocal{{$item->id}}">Save</button>
                    </div>
                </div>
                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

              <div class="detail-box">
                <h5>
                  {{$item->nome}}
                </h5>
                <div class="product_info">
                  <h5>
                      @if($item->desconto != null)
                        <s>{{number_format($item->preco, 2)}} Kz</s>
                           {{number_format($item->preco - (($item->desconto/100)*$item->preco) ,2)}} <span>Kz</span> 
                      @else
                           {{number_format($item->preco, 2)}} <span>Kz</span> 
                      @endif  
                  </h5>
                  <div class="star_container">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
          @endforeach
        
        @else
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="public/images/p1.png" alt="">
              <a href="" class="add_cart_btn">
                <span>
                  Add To Cart
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                Product Name
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span> 300
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="public/images/p2.png" alt="">
              <a href="" class="add_cart_btn">
                <span>
                  Add To Cart
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                Product Name
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span> 300
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="public/images/p3.png" alt="">
              <a href="" class="add_cart_btn">
                <span>
                  Add To Cart
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                Product Name
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span> 300
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="public/images/p4.png" alt="">
              <a href="" class="add_cart_btn">
                <span>
                  Add To Cart
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                Product Name
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span> 300
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="public/images/p5.png" alt="">
              <a href="" class="add_cart_btn">
                <span>
                  Add To Cart
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                Product Name
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span> 300
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="public/images/p6.png" alt="">
              <a href="" class="add_cart_btn">
                <span>
                  Add To Cart
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                Product Name
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span> 300
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="public/images/p7.png" alt="">
              <a href="" class="add_cart_btn">
                <span>
                  Add To Cart
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                Product Name
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span> 300
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="public/images/p8.png" alt="">
              <a href="" class="add_cart_btn">
                <span>
                  Add To Cart
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                Product Name
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span> 300
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="public/images/p9.png" alt="">
              <a href="" class="add_cart_btn">
                <span>
                  Add To Cart
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                Product Name
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span> 300
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endif
      </div>
      <div class="btn_box">
      <a href="{{route('produtos')}}" class="view_more-link">
          Ver mais
        </a>
      </div>
    </div>
  </section>

  <!-- end product section -->

  <!-- about section -->

  <section class="about_section">
    <div class="container-fluid  ">
      <div class="row">
        <div class="col-md-5 ml-auto">
          <div class="detail-box pr-md-3">
            <div class="heading_container">
              <h2>
                We Provide Best For You
              </h2>
            </div>
            <p>
              Totam architecto rem beatae veniam, cum officiis adipisci soluta perspiciatis ipsa, expedita maiores quae accusantium. Animi veniam aperiam, necessitatibus mollitia ipsum id optio ipsa odio ab facilis sit labore officia!
              Repellat expedita, deserunt eum soluta rem culpa. Aut, necessitatibus cumque. Voluptas consequuntur vitae aperiam animi sint earum, ex unde cupiditate, molestias dolore quos quas possimus eveniet facilis magnam? Vero, dicta.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="public/images/about-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- why us section -->

  <section class="why_us_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Why Choose Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="public/images/w1.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Entrega Rápida
              </h5>
              <p>
                variations of passages of Lorem Ipsum available
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="public/images/w2.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Free Shiping
              </h5>
              <p>
                variations of passages of Lorem Ipsum available
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="public/images/w3.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Melhor Quality
              </h5>
              <p>
                variations of passages of Lorem Ipsum available
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end why us section -->


  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Depoimentos
        </h2>
      </div>
    </div>
    <div class="client_container ">
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          @if(isset($depoimentos))
            @foreach ($depoimentos as $item)
                  <div class="carousel-item active">
                    <div class="container">
                      <div class="box">
                        <div class="detail-box">
                          <p>
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                          </p>
                          <p>
                              {!!$item->texto!!}
                          </p>
                        </div>
                        <div class="client-id">
                          <div class="img-box">
                            <img src="public/images/{{$item->foto}}" alt="">
                          </div>
                          <div class="name">
                            <h5>
                                {{$item->nome}}
                            </h5>
                            <h6>                              
                            </h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
  
            @endforeach
          
          @else

          <div class="carousel-item active">
            <div class="container">
              <div class="box">
                <div class="detail-box">
                  <p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </p>
                  <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it lookIt is a
                    long established fact that a reader will be distracted by the readable content of a page when
                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look
                  </p>
                </div>
                <div class="client-id">
                  <div class="img-box">
                    <img src="public/images/client.jpg" alt="">
                  </div>
                  <div class="name">
                    <h5>
                      James Dew
                    </h5>
                    <h6>
                      Photographer
                    </h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="box">
                <div class="detail-box">
                  <p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </p>
                  <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it lookIt is a
                    long established fact that a reader will be distracted by the readable content of a page when
                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look
                  </p>
                </div>
                <div class="client-id">
                  <div class="img-box">
                    <img src="public/images/client.jpg" alt="">
                  </div>
                  <div class="name">
                    <h5>
                      James Dew
                    </h5>
                    <h6>
                      Photographer
                    </h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="box">
                <div class="detail-box">
                  <p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </p>
                  <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it lookIt is a
                    long established fact that a reader will be distracted by the readable content of a page when
                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look
                  </p>
                </div>
                <div class="client-id">
                  <div class="img-box">
                    <img src="public/images/client.jpg" alt="">
                  </div>
                  <div class="name">
                    <h5>
                      James Dew
                    </h5>
                    <h6>
                      Photographer
                    </h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endif
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <span>
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <span>
              <i class="fa fa-angle-right" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->

   <!-- info section -->
   <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              <a href="{{route('inicio')}}" class="navbar-brand">
                <span>
                  <img class="d-block mx-auto mb-4" src="public/images/logoFooter.png" alt="" width="200" height="175">
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
                  Productos
                </a>
              </li>
              <li>
                <!--a href="why.html">
                  Why Us
                </a-->
              </li>
              <li>
                <!--a href="testimonial.html">
                  Testimonial
                </a-->
              </li>
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
  <script src="public/js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="public/js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="public/js/custom.js"></script>


</body>

</html>