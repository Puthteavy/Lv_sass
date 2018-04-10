@php
    $base_url = asset('FrontEnd');
    $image_url = asset('{{$base_url}}/images');
@endphp
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') </title>
    @section('css')
        <link rel="shortcut icon" href="{{$base_url}}/{{$base_url}}/images/main/logo.png">
        <link rel="stylesheet" href="{{$base_url}}/css/normalize.css">
        <link rel="stylesheet" href="{{$base_url}}/css/main/main.css">
        <link rel="stylesheet" href="{{$base_url}}/css/main/responsive.css">
        <link rel="stylesheet" href="{{$base_url}}/css/animate.css">
        <link rel="stylesheet" href="{{$base_url}}/css/bootstrap/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Source+Sans+Pro" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    @show
</head>
<body>
<div class="page-wrapper">
    <header id="header-wrap">
        <div class="header-top container">
            <div class="row">
                <div class="col-sm-3 logo"><img src="{{$base_url}}/images/main/logo.png" alt=""></div>
                <div class="col-sm-9 content-head">
                    <div class="user-com">
                        <nav>
                            <ul>
                                <li><a href=""><i class="fas fa-lock"></i>Login</a></li>
                                <li><a href=""><i class="fas fa-user"></i>User</a></li>
                                <li><a href=""><i class="fas fa-mouse-pointer"></i>How to Use</a></li>
                                <li class="lang">
                                    <a href="">EN</a><a href="">KH</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="search-block">
                        <form id="search_no_suggest" action="#" role="form" method="get">
                            <div class="row">
                                <div class="col-sm-5">
                                    <input type="hidden" name="location" value="">
                                    <input type="hidden" name="commune" value="">
                                    <input type="hidden" name="district" value="">
                                    <input type="text" name="q" value="" placeholder="What are you looking for..." id="search_box" class="form_control" autocomplete="off">
                                    <div id="suggestion" style="width: 230px; top: 34px; display: none;"></div>
                                </div>
                                <div class="col-sm-7">
                                    <span class="select">
                                        <select name="category" id="search_cate" class="form_control">
                                            <option value="0">All Categories</option>
                                            <option class="main-cat" value="mobile-phones-tablets">Phones &amp; Tablets</option>
                                            <option class="sub-cat" value="phones-tablets">Phones, Tablets</option>
                                        </select>
                                    </span>
                                    <span class="select">
                                        <select id="search_loc" class="form_control" name="location">
                                            <option value="0">All Locations</option>
                                        </select>
                                    </span>
                                    <input class="btn btn_yellow" type="submit" value="Search">
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </header>

    <div class="content-wrap container">
        @section('content')

        @show
    </div>

    <footer class="footer-wrapper page-section" id="foot">
        <div class="footer-top">
            <div class="container foot-content">
                <div class="row">
                    <div class="col-sm-4 foot-item">
                        <div class="foot-logo">
                            <a href="#"><img src="{{$base_url}}/images/main/logo.png" alt=""></a>
                        </div>
                        <div class="foot-info">
                            <p>With their passion to help address issues commonly arising in business management, operations and processes, a group of professionals from different backgrounds formed a team in 2009 and registered IDEALINK in late 2011.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 foot-item">
                        <div class="foot-con">
                            <h3>Quick Link</h3>
                            <ul>
                                <li><a href="">Who We Are</a></li>
                                <li><a href="">What We Do</a></li>
                                <li><a href="">Where We Are</a></li>
                                <li><a href="">Portfolios</a></li>
                                <li><a href="#">Request</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 foot-item">
                        <div class="foot-con">
                            <h3>Contact</h3>
                            <ul class="footul">
                                <li><i class="fas fa-map-marker"></i> IG Building #163 St 192, Teouk Laak 3, Toulkork 12158, Phnom Penh, Cambodia.</li>
                                <li><i class="fas fa-phone"></i> +85523 555 0026</li>
                                <li><i class="far fa-envelope"></i> info@idealinkconsulting.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container foot-content-bottom">
                <p>© <script>document.write(new Date().getFullYear())</script>2018 Idealink Consulting. All Rights Reserved.</p>
                <div class="foot-socail">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                </div>
            </div>
        </div>
    </footer>
</div>
@section('js')
    <script src="{{$base_url}}/js/vendor/jquery.js"></script>
    <script src="{{$base_url}}/js/vendor/bootstrap/popper.min.js"></script>
    <script src="{{$base_url}}/js/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="{{$base_url}}/js/vendor/bootstrap/holder.min.js"></script>
    <script src="{{$base_url}}/js/wow.min.js"></script>

    <script>
        new WOW().init();
    </script>
    <script src="{{$base_url}}/js/main.js"></script>
    <script>
        $(document).ready(function () {
            $('ul.main_cat > li').hover(
                function(){
                    $(this).toggleClass('active').siblings().removeClass('active');
                }
            );
        })
    </script>
@show
</body>
</html>


























