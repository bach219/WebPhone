<!DOCTYPE html>
<html>
    <head>
        <base href={{asset('../public/layout/frontend')}}/">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Bach's Shop - @yield('title')</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/details.css">
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            #footer-t, #footer-b{
                background-image: linear-gradient(to right, #636365 , black);
            }
            #cart a:last-child{
                margin-left: 70px;
                color: #ff6600;
            }	
            img{max-width:100%;}
            *{transition: all .5s ease;-moz-transition: all .5s ease;-webkit-transition: all .5s ease}
            .my-list {
                width: 100%;
                height: 380px;
                padding: 10px;
                border: 1px solid #f5efef;
                float: left;
                margin: 15px 0;
                border-radius: 5px;
                box-shadow: 2px 3px 0px #e4d8d8;
                position:relative;
                overflow:hidden;
            }
            .my-list h3{
                text-align: left;
                font-size: 14px;
                font-weight: 500;
                line-height: 21px;
                margin: 0px;
                padding: 0px;
                border-bottom: 1px solid #ccc4c4;
                margin-bottom: 5px;
                padding-bottom: 5px;
            }
            .my-list span{float:left;font-weight: bold;}
            .my-list span:last-child{float:right;}
            .my-list .offer{
                width: 100%;
                float: left;
                margin: 5px 0;
                border-top: 1px solid #ccc4c4;
                margin-top: 5px;
                padding-top: 5px;
                color: #afadad;
            }
            .detail {
                position: absolute;
                top: -100%;
                left: 0;
                text-align: center;
                background: #fff;height: 100%;width:100%;

            }

            .my-list:hover .detail{top:0;}
        </style>
        <script type="text/javascript">
            $(function () {
                var pull = $('#pull');
                menu = $('nav ul');
                menuHeight = menu.height();

                $(pull).on('click', function (e) {
                    e.preventDefault();
                    menu.slideToggle();
                });
            });

            $(window).resize(function () {
                var w = $(window).width();
                if (w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            });
        </script>
    </head>
    <body>    
        <!-- header -->
        <header id="header">
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="{{asset('/')}}">Bach's Shop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{asset('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Danh mục sản phẩm
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                @foreach($categories as $cate)
                                <a class="dropdown-item" href="{{asset('category/'.$cate->cate_id.'/'.$cate->cate_slug.'.html')}}">{{$cate->cate_name}}</a>
                                @endforeach
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline mt-2 mt-md-0" method="get"  accept-charset="utf-8" action="{{asset('search/')}}">
                        <input class="form-control mr-sm-2" type="text" name="result" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>		
                    <div id="cart" class="col-md-2 col-sm-12 col-xs-12" class="img-fluid">
                        <a class="display" href="{{asset('cart/show')}}">Giỏ hàng</a>
                        <a href="{{asset('cart/show')}}">{{Cart::count()}}</a>				    
                    </div>
                </div>
            </nav>
        </header>
        <div style="width: 1000px; height: 100px;"></div>

        <!-- /header -->
        <!-- endheader -->
        <!-- main -->
        <section id="body">
            <div class="container">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/home/slide-1.png" style="width: 100px; height: 300px;" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>...</h5>
                                <p>...</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/home/slide-2.png" style="width: 100px; height: 300px;" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/home/slide-3.png" style="width: 100px; height: 300px;" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <br><br>
                <div class="row">
                    @yield('main')
                    <!-- end main -->
                </div>
            </div>
        </div>
    </section>
    <!-- endmain -->
    <!-- footer -->
    <footer id="footer">			
        <div id="footer-t">
            <div class="container">
                <div class="row">				
                    <div id="logo-f" class="col-md-3 col-sm-12 col-xs-12 text-center">						
                        <a href="{{asset('/')}}"><img style="width: 250px; height: 90px" src="{{asset('layout/frontend/img/home/paradox.jpg')}}"></a>		
                    </div>
                    <div id="about" class="col-md-3 col-sm-12 col-xs-12">
                        <h3>About us</h3>
                        <p class="text-justify">Nguyen Van Bach</p>
                    </div>
                    <div id="hotline" class="col-md-3 col-sm-12 col-xs-12">
                        <h3>Hotline</h3>
                        <p>Phone Sale: (+84) 0333148314</p>
                        <p>Email: cuavip1999@gmial.com</p>
                    </div>
                    <div id="contact" class="col-md-3 col-sm-12 col-xs-12">
                        <h3>Contact Us</h3>
                        <p>Address 1: B8A Võ Văn Dũng - Hoàng Cầu Đống Đa - Hà Nội</p>
                        <p>Address 2: Số 25 Ngõ 178/71 - Tây Sơn Đống Đa - Hà Nội</p>
                    </div>
                </div>				
            </div>
            <div id="footer-b">				
                <div class="container">
                    <div class="row">
                        <div id="footer-b-l" class="col-md-6 col-sm-12 col-xs-12 text-center">
                            <p>Học viện Ky thuat Mat Ma - www.vietpro.edu.vn</p>
                        </div>
                        <div id="footer-b-r" class="col-md-6 col-sm-12 col-xs-12 text-center">
                            <p>© 2017 Vietpro Academy. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
                <div id="scroll">
                    <a href="{{asset('/')}}"><img src="img/home/scroll.png"></a>
                </div>	
            </div>
        </div>
    </footer>
    <!-- endfooter -->
</body>
</html>