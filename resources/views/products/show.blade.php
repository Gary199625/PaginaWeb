<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Optica rojas</title>
    <link rel="icon" href="{{asset('images/logo.png')}}">
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <!--pop-up-box-->
    <link href="{{asset('css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!--//pop-up-box-->
    <!-- price range -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui1.css')}}">
    <!-- flexslider -->
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" />
    <!-- fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
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






<div class="banner-bootom-w3-agileits">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">{{$product->title}}
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <!-- //tittle heading -->
        <div class="col-md-5 single-right-left ">
            <div class="grid images_3_of_2">
                <div class="flexslider">
                    <ul class="slides">
                        <li data-thumb="{{asset('images/projects/m2.jpg')}}">
                            <div class="thumb-image">
                                <img src="{{asset('images/projects/m2.jpg')}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                        </li>
                        <li data-thumb="{{asset('images/projects/m3.jpg')}}">
                            <div class="thumb-image">
                                <img src="{{asset('images/projects/m3.jpg')}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                        </li>
                        <li data-thumb="{{asset('images/projects/s6.png')}}">
                            <div class="thumb-image">
                                <img src="{{asset('images/projects/s6.png')}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="col-md-7 single-right-left simpleCart_shelfItem">
            <h3>{{$product->title}} </h3>
            <div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked="">
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
            </div>
            <p>
                <span class="item_price">{{$product->pricing}}</span>
                <del>$200</del>
                <label>Pague con Paypal</label>
            </p>
            <div class="single-infoagile">
                <ul>
                    <li>
                        O alilo diglicol carbonatado (ADC), es un plástico polímero comúnmente
                    </li>
                    <li>
                        utilizado en la fabricación de lentes. Las siglas corresponden a “Columbia resina #39”.
                    </li>
                    <li>
                        Su aparición reemplaza al vidrio, pesa 50% menos que el cristal, permite cualquier tratamiento.
                    </li>
                    <li>
                        a solo
                        <span class="item_price">$150</span>
                    </li>
                </ul>
            </div>
            <div class="product-single-w3l">
                <p>
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>POLICARBONATOS</p>
                <ul>
                    <li>
                        Es el material mas liviano que existe en el merado, 45% mas liviano que una resina CR -39
                    </li>
                    <li>
                        y un 15% mas liviano que las resinas de alto índice. Alta resistencia a los impactos 50 veces mas
                    </li>
                    <li>
                        resistente que la resina. La composición molecular del policarbonato le otorga un excelente filtro contra los nocivos rayos ultravioleta al 100%, dándole al usuario una excelente salud
                    </li>
                    <li>
                        visual ocular ya que puede evitar la aparición de pterigion, cataratas, degeneración macular.
                    </li>
                </ul>
                <p>
                    <i class="fa fa-refresh" aria-hidden="true"></i>Todos nuestros productos
                    <label>son de garantia</label>
                </p>
            </div>
            <div class="occasion-cart">
                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="#" method="post">
                        <fieldset>
                            <input type="hidden" name="cmd" value="_cart" />
                            <input type="hidden" name="add" value="1" />
                            <input type="hidden" name="business" value=" " />
                            <input type="hidden" name="item_name" value="Zeeba Premium Basmati Rice - 5 KG" />
                            <input type="hidden" name="amount" value="951.00" />
                            <input type="hidden" name="discount_amount" value="1.00" />
                            <input type="hidden" name="currency_code" value="USD" />
                            <input type="hidden" name="return" value=" " />
                            <input type="hidden" name="cancel_return" value=" " />
                            <input type="submit" name="submit" value="Add to cart" class="button" />
                        </fieldset>
                    </form>
                </div>

            </div>

        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //Single Page -->
<!-- special offers -->
    <!-- special offers -->
    <div class="featured-section" id="projects">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">Ofertas especiales
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <!-- //tittle heading -->
            <div class="content-bottom-in">
                <ul id="flexiselDemo1">
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="single.html">
                                    <img src="{{asset('images/s1.png')}}" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="single.html">nano_vista1</a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>S/. 220.00</h6>
                                    <p>Llevetelo S./ 200.00</p>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Aashirvaad, 5g" />
                                            <input type="hidden" name="amount" value="220.00" />
                                            <input type="hidden" name="discount_amount" value="1.00" />
                                            <input type="hidden" name="currency_code" value="USD" />
                                            <input type="hidden" name="return" value=" " />
                                            <input type="hidden" name="cancel_return" value=" " />
                                            <input type="submit" name="submit" value="Add to cart" class="button" />
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="single.html">
                                    <img src="{{asset('images/s4.png')}}" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="single.html">C</a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>S./ 99.00</h6>
                                    <p>Llevatelo S./ 60.00</p>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Kissan Tomato Ketchup, 950g" />
                                            <input type="hidden" name="amount" value="99.00" />
                                            <input type="hidden" name="discount_amount" value="1.00" />
                                            <input type="hidden" name="currency_code" value="USD" />
                                            <input type="hidden" name="return" value=" " />
                                            <input type="hidden" name="cancel_return" value=" " />
                                            <input type="submit" name="submit" value="Add to cart" class="button" />
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="single.html">
                                    <img src="{{asset('images/s2.png')}}" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="single.html">nano_vista3</a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>S./ 69.00</h6>
                                    <p>Llevatelo  S./ 20.00</p>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Madhur Pure Sugar, 1g" />
                                            <input type="hidden" name="amount" value="69.00" />
                                            <input type="hidden" name="discount_amount" value="1.00" />
                                            <input type="hidden" name="currency_code" value="USD" />
                                            <input type="hidden" name="return" value=" " />
                                            <input type="hidden" name="cancel_return" value=" " />
                                            <input type="submit" name="submit" value="Add to cart" class="button" />
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="single2.html">
                                    <img src="{{asset('images/s3.png')}}" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="single2.html">nano_vista4</a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>S/. 187.00</h6>
                                    <p>Llevatelo S/. 90.00</p>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Surf Excel Liquid, 1.02L" />
                                            <input type="hidden" name="amount" value="187.00" />
                                            <input type="hidden" name="discount_amount" value="1.00" />
                                            <input type="hidden" name="currency_code" value="USD" />
                                            <input type="hidden" name="return" value=" " />
                                            <input type="hidden" name="cancel_return" value=" " />
                                            <input type="submit" name="submit" value="Add to cart" class="button" />
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="single.html">
                                    <img src="{{asset('images/s8.png')}}" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="single.html">nano_vista5</a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>S/. 160.00</h6>
                                    <p>Llevatelo S/. 60.00</p>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Cadbury Choclairs, 655.5g" />
                                            <input type="hidden" name="amount" value="160.00" />
                                            <input type="hidden" name="discount_amount" value="1.00" />
                                            <input type="hidden" name="currency_code" value="USD" />
                                            <input type="hidden" name="return" value=" " />
                                            <input type="hidden" name="cancel_return" value=" " />
                                            <input type="submit" name="submit" value="Add to cart" class="button" />
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="single2.html">
                                    <img src="{{asset('images/s6.png')}}" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="single2.html">nano_vista6</a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>S/. 121.60</h6>
                                    <p>Llevatelo S/. 30.00</p>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Fair & Lovely, 80 g" />
                                            <input type="hidden" name="amount" value="121.60" />
                                            <input type="hidden" name="discount_amount" value="1.00" />
                                            <input type="hidden" name="currency_code" value="USD" />
                                            <input type="hidden" name="return" value=" " />
                                            <input type="hidden" name="cancel_return" value=" " />
                                            <input type="submit" name="submit" value="Add to cart" class="button" />
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="single.html">
                                    <img src="{{asset('images/s5.png')}}" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="single.html">nano_vista7</a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>S/. 180.00</h6>
                                    <p>Llevatelo S/. 30.00</p>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Sprite, 2.25L (Pack of 2)" />
                                            <input type="hidden" name="amount" value="180.00" />
                                            <input type="hidden" name="discount_amount" value="1.00" />
                                            <input type="hidden" name="currency_code" value="USD" />
                                            <input type="hidden" name="return" value=" " />
                                            <input type="hidden" name="cancel_return" value=" " />
                                            <input type="submit" name="submit" value="Add to cart" class="button" />
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="single2.html">
                                    <img src="{{asset('images/s9.png')}}" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="single2.html">nano_vista8</a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>S/. 153.00</h6>
                                    <p>Llevatelo S/ 40.00</p>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Lakme Eyeconic Kajal, 0.35 g" />
                                            <input type="hidden" name="amount" value="153.00" />
                                            <input type="hidden" name="discount_amount" value="1.00" />
                                            <input type="hidden" name="currency_code" value="USD" />
                                            <input type="hidden" name="return" value=" " />
                                            <input type="hidden" name="cancel_return" value=" " />
                                            <input type="submit" name="submit" value="Add to cart" class="button" />
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<!-- //special offers -->

<!-- newsletter -->
<div class="footer-top">
    <div class="container-fluid">
        <div class="col-xs-8 agile-leftmk">
            <h2>Contactanos con nosotros</h2>
            <p>Estamos a tus ordenes!</p>
            <form action="#" method="post">
                <input type="email" placeholder="E-mail" name="email" required="">
                <input type="submit" value="Subscribete">
            </form>
            <div class="newsform-w3l">
                <span class="fa fa-envelope-o" aria-hidden="true"></span>
            </div>
        </div>
        <div class="col-xs-4 w3l-rightmk">
            <img src="{{asset('images/tab3.png')}}" alt=" ">
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //newsletter -->
<!-- footer -->
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
<!-- //copyright -->

<!-- js-files -->
<!-- jquery -->
<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<!-- //jquery -->

<!-- popup modal (for signin & signup)-->
<script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
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
    paypalm.minicartk.render(); //use only unique class names other than paypal1.minicart1.Also Replace same class name in css and minicart.min.js

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

<!-- smoothscroll -->
<script src="{{asset('js/SmoothScroll.min.js')}}"></script>
<!-- //smoothscroll -->

<!-- start-smooth-scrolling -->
<script src="{{asset('js/move-top.js')}}"></script>
<script src="{{asset('js/easing.js')}}"></script>
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

<!-- imagezoom -->
<script src="{{asset('js/imagezoom.js')}}"></script>
<!-- //imagezoom -->

<!-- FlexSlider -->
<script src="{{asset('js/jquery.flexslider.js')}}"></script>
<script>
    // Can also be used with $(document).ready()
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
<!-- //FlexSlider-->

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

<!-- for bootstrap working -->
<script src="{{asset('js/bootstrap.js')}}"></script>
<!-- //for bootstrap working -->
<!-- //js-files -->

</body>

</html>