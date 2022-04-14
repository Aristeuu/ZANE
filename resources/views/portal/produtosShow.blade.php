@extends('layouts.app')

@push('title')

    <title>ZANNE CONNECT-PRODUTOS</title>

@endpush


@push('body')
    
    
  <!-- product section -->

  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
            {{$produto->nome}}
        </h2>
      </div>
      <div class="row">        
            <div class="col-sm-6 col-lg-4">
              <div class="box">
                <div class="img-box">
                <img src="public/images/{{$produto->foto}}" alt="">                    
                </div>                
                <div class="detail-box">                  
                  
                </div>
              </div>
            </div>                  
    </div>
      <!--div class="btn_box">
        <a href="" class="view_more-link">
          View More
        </a>
      </div-->
    </div>
  </section>

  <!-- end product section -->

    nome

@endpush