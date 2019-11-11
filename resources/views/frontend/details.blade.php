@extends('frontend.master')
@section('title', 'Chi tiết sản phẩm')	
@section('main')

					<div id="wrap-inner">
						<div id="product-info">
							<div class="clearfix"></div>
							<h3>{{$detail->prod_name}}</h3>
							<div class="row">
								<div id="product-img" class="col-xs-12 col-sm-12 col-md-3 text-center">
									<img class="thumbnail"  src="{{asset('../storage/app/avatar/'.$detail->prod_img)}}">
								</div>
								<div id="product-details" class="col-xs-12 col-sm-12 col-md-9">
									<p>Giá: <span class="price">{{number_format($detail->prod_price,0,',','.')}}</span></p>
									<p><h4>Bảo hành:  </h4>{{$detail->prod_warranty}}</p> 
									<p><h4>Phụ kiện:  </h4>{{$detail->prod_accessories}}</p>
									<p><h4>Tình trạng:</h4>{{$detail->prod_condition}}</p>
									<p><h4>Khuyến mại:</h4>{!!$detail->prod_promotion!!}</p>
									<p><h4>Hàng: @if($detail->prod_status == 1) Còn hàng @endif
									             @if($detail->prod_status == 0) Hết hàng @endif</h4></p>
									<p class="add-cart text-center"><a href="{{asset('cart/add/'.$detail->prod_id)}}">Đặt hàng online</a></p>
								</div>
							</div>							
						</div>
						<div id="product-detail">
							<h3>Chi tiết sản phẩm</h3>
							<p class="text-justify">{!!$detail->prod_description!!}</p>
						</div>
						<div id="comment">
							<h3>Bình luận</h3>
							<div class="col-md-9 comment">
								<form method="post">
									@csrf
									<div class="form-group">
										<label for="email">Email:</label>
										<input required type="email" class="form-control" id="email" name="email">
									</div>
									<div class="form-group">
										<label for="name">Tên:</label>
										<input required type="text" class="form-control" id="name" name="name">
									</div>
									<div class="form-group">
										<label for="cm">Bình luận:</label>
										<textarea required rows="10" id="cm" class="form-control" name="content"></textarea>
									</div>
									<div class="form-group text-right">
										<button type="submit" class="btn btn-default">Gửi</button>
									</div>
								</form>
							</div>
						</div>
						<div id="comment-list">
							@foreach($comments as $com)
							<ul>
								<li class="com-title">
									{{$com->com_name}}
									<br>
									<span>{{date('d/m/Y H:i', strtotime($com->created_at))}}</span>	
								</li>
								<li class="com-details">
									{{$com->com_content}}
								</li>
							</ul>
							@endforeach
						</div>
					</div>					
					
@stop