@extends('frontend.master')
@section('title', 'Home')	
@section('main')

<div class="products">
    <div class="col-md-12 text-center"><h1 style="color: orange;">SẢN PHẨM NỔI BẬT</h1></div>
    <div class="product-list row">
        @foreach($featuredList as $featured)			
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="my-list">
                <img src="{{asset('/../storage/app/avatar/'.$featured->prod_img)}}" height="300px" width="500px" class="img-thumbnail"/>
                <h3>{{$featured->prod_name}}</h3>
                <span>{{number_format($featured->prod_price,0,',','.')}}</span>
                <div class="offer">Extra 5% Off. Cart value Rs 500</div>
                <div class="detail">
                    <img src="{{asset('/../storage/app/avatar/'.$featured->prod_img)}}" class="img-thumbnail"/>
                    <a href="{{asset('cart/add/'.$featured->prod_id)}}" class="btn btn-info">Đặt hàng online</a>
                    <a href="{{asset('detail/'.$featured->prod_id.'/'.$featured->prod_slug.'.html')}}" class="btn btn-info">Xem chi tiết</a>
                </div>
            </div>
        </div>	
        @endforeach   
    </div>    
</div>
<hr><hr>

<div class="products">
    <div class="col-md-12 text-center"><h1 style="color: orange;">SẢN PHẨM MỚI</h1></div>
    <div class="product-list row">
        @foreach($newList as $new)
        <div class="product-item col-md-3 col-sm-6 col-xs-12">
            <a href="#"><img src="{{asset('/../storage/app/avatar/'.$new->prod_img)}}" class="img-thumbnail"></a>
            <p><a href="#">{{$new->prod_name}}</a></p>
            <p class="price">{{number_format($new->prod_price,0,',','.')}}</p>	  
            <div class="marsk">
                <a href="{{asset('detail/'.$new->prod_id.'/'.$new->prod_slug.'.html')}}">Xem chi tiết</a>
            </div>                      	                        
        </div>
        @endforeach
    </div>    
</div>
@stop