@extends('frontend.master')
@section('title', 'Giỏ Hàng')	
@section('main')
<script>
    function updateCart(qty, rowId){
    $.get('{{asset('cart/update')}}',
    {qty:qty, rowId:rowId},
            function(){
            location.reload();
            });
    }
</script>

<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{asset('/')}}">Home</a></span> <span>Cart</span></p>
                <h1 class="mb-0 bread">Giỏ Hàng</h1>
            </div>
        </div>
    </div>
</div>
@if(Cart::count() >= 1)
<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <form>
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th></th>
                                <th>Ảnh mô tả</th>
                                <th>Sản Phẩm</th>
                                <th>Giá</th>
                                <th>Số Lượng</th>
                                <th>Thành Tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $prod)
                            <tr class="text-center">
                                <td class="product-remove"><a href="{{asset('cart/delete/'.$prod->rowId)}}"><span class="ion-ios-close"></span></a></td>

                                <td class="image-prod"><div class="img" style="background-image:url({{asset('../storage/app/avatar/'.$prod->options->img)}});"></div></td>

                                <td class="product-name">
                                    <h3>{{$prod->name}}</h3>
                                </td>

                                <td class="price">{{number_format($prod->price,0,',','.')}} đ</td>

                                <td class="quantity">
                                    <div class="input-group mb-3">
                                        <input type="number" value="{{$prod->qty}}" onchange="updateCart(this.value,'{{$prod->rowId}}')" class="quantity form-control input-number">
                                    </div>
                                </td>

                                <td class="total">{{number_format($prod->qty*$prod->price,0,',','.')}} đ</td>
                            </tr><!-- END TR-->
                            @endforeach
                        </tbody>
                    </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="row justify-content-start">
            <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Hóa đơn</h3>
                    <p class="d-flex">
                        <span>Đơn hàng</span>
                        <span>{{Cart::subtotal()}} đ</span>
                    </p>
                    <p class="d-flex">
                        <span>Thuế</span>
                        <span>{{Cart::tax()}} đ</span>
                    </p>
                    <hr>
                    <p class="d-flex total-price">
                        <span>Tổng hóa đơn</span>
                        <span>{{$total}} đ</span>
                    </p>
                </div>
                <p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4">Thanh toán</a></p>
            </div>
        </div>
    </div>
</section>
@endif
@stop