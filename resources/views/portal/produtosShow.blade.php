@extends('layouts.app')

@push('title')

    <title>ZANNE CONNECT-PRODUTOS</title>

@endpush


@push('body')
    
    
<section class="product_section layout_padding">
    <div class="container-fluid  ">
      <div class="row">
        <div class="col-md-5 ml-auto">
          <div class="detail-box pr-md-3">
            <div class="heading_container">
              <h2>
                    {{$produto->nome}}
              </h2>
            </div>
            <p>
                {!!$produto->descricao!!}
            </p>
            
            <p>
                PREÇO A PAGAR :
                <b> 
                    @if($produto->desconto != null)
                        <s></s>
                            {{number_format( ($produto->preco - (($produto->desconto/100)*$produto->preco) + $local->preco ) ,2)}} <span>Kz</span> 
                    @else
                            {{number_format($produto->preco + $local->preco, 2)}} <span>Kz</span> 
                    @endif
                </b> 
                <div class="whatsapp">
                    <a href="https://api.whatsapp.com/send?l=pt-BR&phone=244948806223" target="_blank" class="whatsapp_link"> <i class="fa fa-whatsapp"></i></a>
              </div>
            </p>
            
            
            <!--a href="">
              Read More
            </a-->

          
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="/public/images/{{$produto->foto}}" alt="" width="200px" >
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->
@endpush