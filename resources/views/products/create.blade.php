<!DOCTYPE html>
<html lang="es">

<head>
    <title>Optica Rojas</title>
    <link rel="icon" href="{{asset('images/logo.png')}}">
    <!--/tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--//tags -->
    <link href="{{asset('css/bootstrap.css')}}"@ rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <!--pop-up-box-->
    <link href="{{asset('css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!--//pop-up-box-->
    <!-- price range -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui1.css')}}">
    <!-- fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style6.css')}}" />
    <script src="{{asset('js/modernizr.custom.63321.js')}}"></script>
</head>

<body>

@foreach ( $empresas as $emp)
    <!-- top-header -->
    <div class="header-most-top">
        <p>{{$emp->oferta}}</p>
    </div>
    <!-- //top-header -->
    <!-- header-bot-->
    <div class="header-bot">
        <div class="header-bot_inner_wthreeinfo_header_mid">
            <!-- header-bot-->
            <div class="col-md-4 logo_agile">

                <h1>
                    <a href="{{url('welcome')}}" style="color: #a4093c">{{$emp->nombre}}
                        <img src="{{asset('images/logo2.jpg')}}" alt=" " width="40" >
                    </a>
                </h1>
            </div>
            <!-- header-bot -->
            <div class="col-md-8 header">
                <!-- header lists -->
                <ul>

                    <li>
                        <span class="fa fa-phone" aria-hidden="true"></span> {{$emp->telefono}}
                    </li>


                    @endforeach

                    @if (Route::has('login'))
                        @auth
                            <li>





                            </li>
                            <li>

                            </li>
                            <li></li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                        Cerrar sesión

                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>



                                </div>
                            </li>



                            @else


                                <li>
                                    <a href="#" data-toggle="modal" data-target="#myModal1">
                                        <span class="fa fa-unlock-alt" aria-hidden="true"></span>Login</a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#myModal2">
                                        <span class="fa fa-pencil-square-o" aria-hidden="true"></span>Registrese </a>
                                </li>

                                @endauth

                            @endif




                </ul>
                <!-- //header lists -->
                <!-- search -->
                <div class="agileits_search">
                    <form action="#" method="post">
                        <input name="Search" type="search" placeholder="Buscar producto" required="">
                        <button type="submit" class="btn btn-default" aria-label="Left Align">
                            <span  style="background-color: #a4093c" class="fa fa-search" aria-hidden="true"> </span>
                        </button>
                    </form>
                </div>
                <!-- //search -->
                <!-- cart details -->
                <div class="top_nav_right">
                    <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                        <form action="#" method="post" class="last">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="display" value="1">
                            <button style="background-color:#a4093c " class="w3view-cart" type="submit" name="submit" value="">
                                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- //cart details -->
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- shop locator (popup) -->
    <!-- Button trigger modal(shop-locator) -->

    <!-- //shop locator (popup) -->
    <!-- signin Model -->
    <!-- Modal1 -->
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body modal-body-sub_agile">
                    <div class="main-mailposi">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                    </div>
                    <div class="modal_body_left modal_body_left1">
                        <h3 class="agileinfo_sign">Inicia sesión  </h3>
                        <a href="{{asset('login/google')}}" style="text-align: center">
                            <img src="images/gmail.jpg" alt="" width="20">
                            Continuar con Google

                        </a>
                        <p>
                            Si no tienes cuenta.
                            <a href="#" data-toggle="modal" data-target="#myModal2">
                                Registrate</a>
                        </p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="styled-input agile-styled-input-top">
                                <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  placeholder="Email" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            </div>
                            <div class="styled-input">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <input type="submit" value="Logearse">
                        </form>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- //Modal content-->
        </div>
    </div>
    <!-- //Modal1 -->
    <!-- //signin Model -->
    <!-- signup Model -->
    <!-- Modal2 -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body modal-body-sub_agile">
                    <div class="main-mailposi">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                    </div>
                    <div class="modal_body_left modal_body_left1">
                        <h3 class="agileinfo_sign">Registrate</h3>
                        <p>
                            Unete a opticas Rojas.
                        </p>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf


                            <div class="styled-input agile-styled-input-top">
                                <input id="name" placeholder="Nombre" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif


                            </div>
                            <div class="styled-input">
                                <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif


                            </div>
                            <div class="styled-input">
                                <input id="password" type="password" placeholder="Contraseña" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            </div>
                            <div class="styled-input">
                                <input id="password-confirm" placeholder="Confirmar Contraseña" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                            <input type="submit" value="Registrase">

                        </form>
                        <p>
                            <a href="#">
                                Al hacer clic en Registrarse, acepto sus términos</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- //Modal content-->
        </div>
    </div>
    <!-- //Modal2 -->
    <!-- //signup Model -->
    <!-- //header-bot -->
    <!-- navigation -->
    <div class="ban-top">
        <div class="container">
            <div class="agileits-navi_search">
                <form action="#" method="post">

                </form>
            </div>
            <div class="top_nav_left">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                                    aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav menu__list">
                                <li class="active">
                                    <a class="nav-stylehead" href="index.html">
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                @foreach($categorias as $categoria)
                                    <li class="">

                                        <a class="nav-stylehead" href="about.html">{{$categoria->descripcion}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="page-head_agile_info_w3l">

    </div>

    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="{{url('welcome')}}l">Inicio</a>
                        <i>|</i>
                    </li>
                    <li>Optica Rojas</li>
                </ul>
            </div>
        </div>
    </div>

    @include('products.nav')

    <!-- product right -->

    <div class="agileinfo-ads-display col-md-9 w3l-rightpro">
        <div class="wrapper">
            <!-- first section -->

            <div class="product-sec1">
                @foreach($product as $p)
                <div class="col-xs-4 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="{{asset('images/projects/'.$p->img)}}" alt=""  width="200px">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="{{url('/products/'.$p->id)}}" class="link-product-add-cart">Ver detalle</a>
                                </div>
                            </div>
                            <span class="product-new-top">Nuevo</span>
                        </div>
                        <div class="item-info-product ">
                            <h4>
                                <a href="single2.html">{{$p->title}}</a>
                            </h4>
                            <div class="info-product-price">
                                <span class="item_price">{{$p->pricing}}</span>
                                <del>$120.00</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Vim Dishwash Gel, 500 ml" />
                                        <input type="hidden" name="amount" value="99.00" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Agregar Al carrito" class="button" />
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                @endforeach
                <div class="clearfix"></div>
            </div>

        </div>
    </div>


    <!-- //product right -->
    <br><br><br><br>
    <!-- //top products -->
    <footer style="text-align: center">
        <div class="container">
            <!-- footer first section -->
            <!-- //brands -->
            <!-- payment -->
            <div class="sub-some child-momu">
                <h5>Metodos de pago</h5>
                <ul>

                    <li>
                        <img src="{{asset('images/pay1.jpg')}}" alt="" width="230" >
                    </li>
                    <li>
                        <img src="{{asset('images/paypal.jpg')}}" alt="" >
                    </li>

                </ul>
            </div>
            <!-- //payment -->
        </div>
        <!-- //footer fourth section (text) -->
        </div>
    </footer>


    @include('footer')
<!-- jquery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jquery -->

<!-- popup modal (for signin & signup)-->
<script src="js/jquery.magnific-popup.js"></script>
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<!-- Large modal -->
<!-- <script>
    $('#').modal('show');
</script> -->
<!-- //popup modal (for signin & signup)-->

<!-- cart-js -->
<script src="{{asset('js/minicart.js')}}"></script>
<script>
    paypalm.minicartk.render(); //use only unique class names other than paypalm.minicartk.Also Replace same class name in css and minicart.min.js

    paypalm.minicartk.cart.on('checkout', function (evt) {
        var items = this.items(),
            len = items.length,
            total = 0,
            i;

        // Count the number of each item in the cart
        for (i = 0; i < len; i++) {
            total += items[i].get('quantity');
        }

        if (total < 3) {
            alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
            evt.preventDefault();
        }
    });
</script>
<!-- //cart-js -->

<!-- price range (top products) -->
<script src="js/jquery-ui.js"></script>
<script>
    //<![CDATA[
    $(window).load(function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 9000,
            values: [50, 6000],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

    }); //]]>
</script>
<!-- //price range (top products) -->

<!-- flexisel (for special offers) -->
<script src="{{asset('js/jquery.flexisel.js')}}"></script>
<script>
    $(window).load(function () {
        $("#flexiselDemo1").flexisel({
            visibleItems: 3,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 2
                }
            }
        });

    });
</script>
<!-- //flexisel (for special offers) -->

<!-- password-script -->
<script>
    window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- //password-script -->

<!-- smoothscroll -->
<script src="{{asset('js/SmoothScroll.min.js')}}"></script>
<!-- //smoothscroll -->

<!-- start-smooth-scrolling -->
<script src="{{asset('js/move-top.js')}}"></script>
<script src="{{asset('js/easing.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.dropdown.js')}}"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->

<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //smooth-scrolling-of-move-up -->

<!-- for bootstrap working -->
<script src="{{asset('js/bootstrap.js')}}"></script>
<!-- //for bootstrap working -->
<!-- //js-files -->


</body>

</html>