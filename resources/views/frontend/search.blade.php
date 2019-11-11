@extends('frontend.master')
@section('title', 'Tìm kiếm')	
@section('main')

					<div id="wrap-inner">
						<div class="products">
							<h3>Tìm kiếm với từ khóa: <span>{{$search}}</span></h3>
							<div class="product-list row" style="width: 300%">
								@foreach($product as $prod)
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="{{asset('/../storage/app/avatar/'.$prod->prod_img)}}" class="img-thumbnail"></a>
									<p><a href="#">{{$prod->prod_name}}</a></p>
									<p class="price">{{number_format($prod->prod_price,0,',','.')}}</p>	  
									<div class="marsk">
										<a href="{{asset('detail/'.$prod->prod_id.'/'.$prod->prod_slug.'.html')}}">Xem chi tiết</a>
									</div>                                    
								</div>
								@endforeach 
							</div>                	                	
						</div>

						<div id="pagination">
                            <ul class="pagination pagination-lg justify-content-center">
                                {{$product->links()}}
                            </ul>
                        </div>
					</div>

	<!-- endmain -->
@stop