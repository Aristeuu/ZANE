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
            Nossos Productos
        </h2>
      </div>
      <div class="row">
        @forelse ($data as $item)
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
                      <form id="ctedForm" action="{{route('produtosShow')}}" method="post" enctype="multipart/form-data" id="formLocal{{$item->id}}">
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
        
        @empty
            <div>Sem produtos</div>
        @endforelse
        
       
      </div>
      <!--div class="btn_box">
        <a href="" class="view_more-link">
          View More
        </a>
      </div-->
    </div>
  </section>

  <!-- end product section -->
  

@endpush