<!DOCTYPE html>
<html>
    <head>
        <base href={{asset('../public/layout/backend')}}/">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title') | Bach's shop</title><!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
        <!-- Our Custom CSS -->
        <link href="css/styles.css" rel="stylesheet">
        <link href="css/style4.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/datepicker3.css" rel="stylesheet">
        
        <style>
            /* @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"; */
            body {
                font-family: Arial, Helvetica, sans-serif;
                background: #fafafa;
            }
            #content{
                width: 100%;
            }
            a, a:hover, a:focus {
                color: inherit;
                text-decoration: none;
                transition: all 0.3s;
            }
        </style>
                </head>
                <body>
                    <div class="wrapper">
                        <!-- Sidebar Holder -->
                        <nav id="sidebar">
                            <div class="sidebar-header">
                                <h3><a style="color: white" href="{{asset('admin/home')}}">{{Auth::user()->email}}</a></h3>
                                <strong>AD</strong>
                            </div>
            
                <ul class="list-unstyled components">
                    <li>
                        <a href="{{asset('admin/home')}}">
                            <i class="glyphicon glyphicon-home"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('admin/category')}}">
                            <i class="glyphicon glyphicon-tasks"></i>
                            Category
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('admin/product')}}">
                            <i class="glyphicon glyphicon-list"></i>
                            Product
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('admin/user')}}">
                            <i class="glyphicon glyphicon-user"></i>
                            User
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-link"></i>
                            Portfolio
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-paperclip"></i>
                            FAQ
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-send"></i>
                            Contact
                        </a>
                    </li>
                </ul>

                <ul class="list-unstyled CTAs">
                    <li>
                        <a href="{{asset('logout')}}" style="font-size: 200px;">
                            <i class="glyphicon glyphicon-log-out"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">
            <nav class="navbar navbar-inverse alert alert-success" role="alert" >
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" style=" cursor: pointer;" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="glyphicon glyphicon-align-left"></i> 
                            <span>ADMIN</span>
                        </a>
                        <!--                         
                        <ul class="nav navbar-nav navbar-right" style="right: 40px;">
                            <div>
                                <li><h3>{{Auth::user()->email}}</h3></li>
                                <hr>
                                <li><a href="{{asset('logout')}}"><span class="glyphicon glyphicon-log-out" ></span> Logout</a></li>
                            </div>
                        </ul> -->
                    </div>
                </div>
            </nav>
                @yield('main')
            </div>
        </div>

        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <script src="js/jquery-1.11.1.min.js"></script>
	     <script src="js/bootstrap.min.js"></script>
	     <script src="js/chart.min.js"></script>
	     <script src="js/chart-data.js"></script>
	     <script src="js/easypiechart.js"></script>
	     <script src="js/easypiechart-data.js"></script>
	     <script src="js/bootstrap-datepicker.js"></script>
         <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <script src="js/lumino.glyphs.js"></script>
        
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
             
         </script>
         @stack('scripts')
    </body>
</html>
