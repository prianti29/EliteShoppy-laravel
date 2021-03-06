<!-- header -->
<div class="header" id="home">
    <div class="container">
        <ul>
            <li>
                <form action="{{ url('/login') }}" method="GET">
                    @csrf
                    <button class="nav-link" type="submit" style="background-color: black">
                        {{-- <i class="fa fa-sign-out"></i> --}}
                        <i class="fa fa-unlock-alt " aria-hidden="true"></i> Sign In </a>
            </li>
            </button>
            </form>
            </li>
            <li>
                <form action="{{ url('/register') }}" method="GET">
                    @csrf
                    <button class="nav-link" type="submit" style="background-color: black">
                        {{-- <i class="fa fa-sign-out"></i> --}}
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a>
            </li>
            </button>
            </form>
            </li>
            <li><i class="fa fa-phone" aria-hidden="true"></i> Call : 01234567898</li>
            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a
                    href="mailto:info@example.com">info@example.com</a></li>
        </ul>
    </div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
    <div class="header-bot_inner_wthreeinfo_header_mid">
        <div class="col-md-4 header-middle">
            <form action="#">
                <input type="search" placeholder="Search here..." required="">
                <input type="submit" value=" ">
                <div class="clearfix"></div>
            </form>
        </div>
        <!-- header-bot -->
        <div class="col-md-4 logo_agile">
            <h1><a href="index.html"><span>E</span>lite Shoppy <i class="fa fa-shopping-bag top_logo_agile_bag"
                        aria-hidden="true"></i></a></h1>
        </div>
        <!-- header-bot -->
        <div class="col-md-4 agileits-social top_content">
            <ul class="social-nav model-3d-0 footer-social w3_agile_social">
                @auth
                <li><a href="#" class="pinterest">
                        <div class="front"><i aria-hidden="true">{{Auth::user()->name}}</i></div>
                        <div class="back"><i class="fa fa-user" aria-hidden="true"></i></div>
                    </a></li>
                <li>
                    <form action="{{ url('/logout') }}" method="POST">
                        @csrf
                        <button class="nav-link" type="submit">
                            <i class="fa fa-sign-out"></i>
                        </button>
                    </form>
                </li>
                @endauth
                

                <li class="share">Share On : </li>
                <li><a href="#" class="facebook">
                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                    </a></li>
                <li><a href="#" class="twitter">
                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                    </a></li>
                <li><a href="#" class="instagram">
                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                    </a></li>
                <li><a href="#" class="pinterest">
                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                    </a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
    <div class="container">
        <div class="top_nav_left">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu__list">
                            <li class="active menu__item menu__item--current"><a class="menu__link"
                                    href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a></li>
                            <li class=" menu__item"><a class="menu__link" href="about.html">About</a></li>
                            <li class="dropdown menu__item">
                                <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Men's wear <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="agile_inner_drop_nav_info">
                                        <div class="col-sm-6 multi-gd-img1 multi-gd-text ">
                                            <a href="mens.html"><img src="{{ asset ("site/images/top2.jpg" ) }}"
                                                    alt=" " /></a>
                                        </div>
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                @foreach ($category_list_men as $c)
                                                <li><a href="{{ url("mens/$c->id") }}">{{ $c->name }}</a></li>
                                                @endforeach 
                                                
                                            </ul> 
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li> 
                            <li class="dropdown menu__item">
                                <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Women's wear <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="agile_inner_drop_nav_info">
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                @foreach ($category_list_women as $c)
                                                <li><a href="{{ url("womens/$c->id") }}">{{ $c->name }}</a></li>  
                                                @endforeach 
                                            </ul> 
                                        </div>
                                        {{-- <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="womens.html">Jewellery</a></li>
                                                <li><a href="womens.html">Sunglasses</a></li>
                                                <li><a href="womens.html">Perfumes</a></li>
                                                <li><a href="womens.html">Beauty</a></li>
                                                <li><a href="womens.html">Shirts</a></li>
                                                <li><a href="womens.html">Sunglasses</a></li>
                                                <li><a href="womens.html">Swimwear</a></li>
                                            </ul>
                                        </div> --}}
                                        <div class="col-sm-6 multi-gd-img multi-gd-text ">
                                            <a href="womens.html"><img src="{{ asset ("site/images/top1.jpg" ) }}"
                                                    alt=" " /></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li class="menu__item dropdown">
                                <a class="menu__link" href="#" class="dropdown-toggle" data-toggle="dropdown">Short
                                    Codes <b class="caret"></b></a>
                                <ul class="dropdown-menu agile_short_dropdown">
                                    <li><a href="icons.html">Web Icons</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                </ul>
                            </li>
                            <li class=" menu__item"><a class="menu__link" href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="top_nav_right">
            <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                <form action="{{ url('/checkout') }}" method="get" class="last">
                    {{-- <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="display" value="1"> --}}
                    <button class="w3view" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down"
                            aria-hidden="true"></i></button>
                    {{-- <i class="fa fa-cart-arrow-down"
                            aria-hidden="true"></i> --}}
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //banner-top -->
