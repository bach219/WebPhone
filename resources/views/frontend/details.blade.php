@extends('frontend.master')
@section('title', 'Chi tiết sản phẩm')	
@section('main')


<style>
    body {
        font-family: Arial;
        margin: 0;
    }

    * {
        box-sizing: border-box;
    }

    img {
        vertical-align: middle;
    }

    /* Position the image container (needed to position the left and right arrows) */
    .container {
        position: relative;
    }

    /* Hide the images by default */
    .mySlides {
        display: none;
    }

    /* Add a pointer when hovering over the thumbnail images */
    .cursor {
        cursor: pointer;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 40%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
        width: 100px;
        height: 50px;
    }

    /* Container for image text */
    .caption-container {
        text-align: center;
        background-color: #222;
        padding: 2px 16px;
        color: white;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Six columns side by side */
    .column {
        float: left;
        width: 16.66%;
    }

    /* Add a transparency effect for thumnbail images */
    .demo {
        opacity: 0.6;
    }

    .active,
    .demo:hover {
        opacity: 1;
    }
</style>


<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Shop</span></p>
                <h1 class="mb-0 bread">Chi tiết sản phẩm</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">

                <div class="container">
                    <div class="mySlides">
                        <div class="numbertext">1 / 6</div>
                        <a height="10px" width="70%" href="{{asset('../storage/app/avatar/'.$detail->prod_img)}}" class="image-popup prod-img-bg"><img src="{{asset('../storage/app/avatar/'.$detail->prod_img)}}" class="img-fluid" alt="Colorlib Template"></a>
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">2 / 6</div>
                        <a height="10px" width="70%" href="images/product-1.png" class="image-popup prod-img-bg"><img src="images/product-1.png" class="img-fluid" alt="Colorlib Template"></a>
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">3 / 6</div>
                        <a height="10px" width="70%" href="images/product-1.png" class="image-popup prod-img-bg"><img src="images/product-1.png" class="img-fluid" alt="Colorlib Template"></a>
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">4 / 6</div>
                        <a height="10px" width="70%" href="images/product-1.png" class="image-popup prod-img-bg"><img src="images/product-1.png" class="img-fluid" alt="Colorlib Template"></a>
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">5 / 6</div>
                        <a height="10px" width="70%" href="images/product-1.png" class="image-popup prod-img-bg"><img src="images/product-1.png" class="img-fluid" alt="Colorlib Template"></a>
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">6 / 6</div>
                        <a height="10px" width="70%" href="images/product-1.png" class="image-popup prod-img-bg"><img src="images/product-1.png" class="img-fluid" alt="Colorlib Template"></a>
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>


                    <div class="row">
                        <div class="column">
                            <a href="{{asset('../storage/app/avatar/'.$detail->prod_img)}}" class="image-popup prod-img-bg"><img src="{{asset('../storage/app/avatar/'.$detail->prod_img)}}" class="img-fluid" alt="Colorlib Template"></a>
                        </div>
                        <div class="column">
                            <a href="images/product-1.png" class="image-popup prod-img-bg"><img src="images/product-1.png" class="img-fluid" alt="Colorlib Template"></a>
                        </div>
                        <div class="column">
                            <a href="images/product-1.png" class="image-popup prod-img-bg"><img src="images/product-1.png" class="img-fluid" alt="Colorlib Template"></a>
                        </div>
                        <div class="column">
                            <a href="images/product-1.png" class="image-popup prod-img-bg"><img src="images/product-1.png" class="img-fluid" alt="Colorlib Template"></a>
                        </div>
                        <div class="column">
                            <a href="images/product-1.png" class="image-popup prod-img-bg"><img src="images/product-1.png" class="img-fluid" alt="Colorlib Template"></a>
                        </div>    
                        <div class="column">
                            <a href="images/product-1.png" class="image-popup prod-img-bg"><img src="images/product-1.png" class="img-fluid" alt="Colorlib Template"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3>{{$detail->prod_name}}</h3>
                <div class="rating d-flex">
                    <p class="text-left mr-4">
                        <a href="#" class="mr-2">5.0</a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                    </p>
                    <p class="text-left mr-4">
                        <a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
                    </p>
                    <p class="text-left">
                        <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
                    </p>
                </div>
                <p class="price"><span>{{number_format($detail->prod_price,0,',','.')}} đ</span></p>
                <p><h4>Bảo hành:  </h4>{{$detail->prod_warranty}}</p> 
                <p><h4>Phụ kiện:  </h4>{{$detail->prod_accessories}}</p>
                <p><h4>Tình trạng:</h4>{{$detail->prod_condition}}</p>
                <p><h4>Khuyến mại:</h4>{!!$detail->prod_promotion!!}</p>
                <p><h4>Hàng: 
                    @if($detail->prod_status == 1) Còn hàng @endif
                    @if($detail->prod_status == 0) Hết hàng @endif
                   </h4>
                </p>
                <div class="row mt-4">
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <p style="color: #000;">80 piece available</p>
                    </div>
                </div>
                <p><a href="{{asset('cart/add/'.$detail->prod_id)}}" class="btn btn-black py-3 px-5 mr-2">Thêm Vào Giỏ Hàng</a>
                </p>
            </div>
        </div>




        <div class="row mt-5">
            <div class="col-md-12 nav-link-wrap">
                <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link ftco-animate active mr-lg-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Description</a>

                    <a class="nav-link ftco-animate mr-lg-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Manufacturer</a>

                    <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Reviews</a>

                </div>
            </div>
            <div class="col-md-12 tab-wrap">

                <div class="tab-content bg-light" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                        <div class="p-4">
                            <h3 class="mb-4">Chi tiết sản phẩm</h3>
                            <p>{!!$detail->prod_description!!}</p>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                        <div class="p-4">
                            <h3 class="mb-4">Nhà Sản Xuất</h3>
                            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                        <div class="row p-4">
                            <div class="col-md-7">
                                <h3 class="mb-4">{{$count}} Reviews</h3>
                                @foreach($comments as $com)
                                <div class="review">
                                    <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                    <div class="desc">
                                        <h4>
                                            <span class="text-left">{{$com->com_name}}</span>
                                            <span class="text-right">{{date('d/m/Y H:i', strtotime($com->created_at))}}</span>
                                        </h4>
                                        <p class="star">
                                            <span>
                                                <i class="ion-ios-star-outline"></i>
                                                <i class="ion-ios-star-outline"></i>
                                                <i class="ion-ios-star-outline"></i>
                                                <i class="ion-ios-star-outline"></i>
                                                <i class="ion-ios-star-outline"></i>
                                            </span>
                                            <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                        </p>
                                        <p>{{$com->com_content}}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <form method="post" class="bg-white p-5 contact-form">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Email" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <textarea name="content" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>				

@stop

@push('scripts')
<script>
    $(document).ready(function () {

        var quantitiy = 0;
        $('.quantity-right-plus').click(function (e) {

            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            $('#quantity').val(quantity + 1);


            // Increment

        });

        $('.quantity-left-minus').click(function (e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            // Increment
            if (quantity > 0) {
                $('#quantity').val(quantity - 1);
            }
        });

    });

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>
@endpush