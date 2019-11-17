@extends('frontend.master')
@section('title', 'Tìm kiếm')	
@section('main')

<section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Kết quả tìm kiếm: <span>{{$search}}</span></h2>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
			@foreach($product as $featured)
    			<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
    				<div class="product d-flex flex-column">
    					<a href="{{asset('detail/'.$featured->prod_id.'/'.$featured->prod_slug.'.html')}}" class="img-prod"><img class="img-fluid" src="{{asset('/../storage/app/avatar/'.$featured->prod_img)}}" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3">
    						<div class="d-flex">
    							<div class="cat">
		    						<span>Lifestyle</span>
		    					</div>
		    					<div class="rating">
	    							<p class="text-right mb-0">
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    							</p>
	    						</div>
	    					</div>
    						<h3><a href="#">{{$featured->prod_name}}</a></h3>
    						<div class="pricing">
	    						<p class="price"><span>{{number_format($featured->prod_price,0,',','.')}}</span></p>
	    					</div>
	    					<p class="bottom-area d-flex px-3">
    							<a href="{{asset('cart/add/'.$featured->prod_id)}}" class="add-to-cart text-center py-2 mr-1"><span>Thêm vào giỏ <i class="ion-ios-add ml-1"></i></span></a>
    							<a href="{{asset('detail/'.$featured->prod_id.'/'.$featured->prod_slug.'.html')}}" class="buy-now text-center py-2">Xem chi tiết<span><i class="ion-ios-cart ml-1"></i></span></a>
    						</p>
    					</div>
    				</div>
    			</div>
			@endforeach 	
    		</div>
                        <div class="block-27">
                            <ul class="pagination justify-content-center">
                                {{$product->links()}}
                            </ul>
                        </div>
    	</div>
    </section>

<!-- endmain -->
@stop
