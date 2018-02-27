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
                    <a href="index.html" style="color: #a4093c">{{$emp->nombre}}
                        <img src="images/logo2.jpg" alt=" " width="40" >
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
    <!-- //navigation -->
    <!-- banner -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>

        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Las mejores
                            <span>marcas</span>
                        </h3>
                        <p>Hasta
                            <span>10%</span> descuentos</p>
                        <a class="button2" href="product.html">Ver promoción </a>
                    </div>
                </div>
            </div>
            <div class="item item2">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Visitanos
                            <span>Ya</span>
                        </h3>


                    </div>
                </div>
            </div>
            <div class="item item3">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Lentes
                            <span>de sol</span>
                        </h3>
                        <p>Hata con
                            <span>20%</span>
                        </p>
                        <a class="button2" href="product.html">Ver promoción</a>
                    </div>
                </div>
            </div>

        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- //banner -->
