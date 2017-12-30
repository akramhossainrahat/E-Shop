<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>E-Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
{!!HTML::style("assets/css/bootstrap.css")!!}
<!-- Customize styles -->
{!!HTML::style("assets/style.css")!!}
<!-- font awesome styles -->
    {!!HTML::style("assets/font-awesome/css/font-awesome.css")!!}
		<!--[if IE 7]>
    {!!HTML::style("css/font-awesome-ie7.min.css")!!}
    <![endif]-->

    <!--[if lt IE 9]>
    {!! HTML::script("http://html5shim.googlecode.com/svn/trunk/html5.js")!!}
    <![endif]-->

    <!-- Favicons -->
    {!!HTML::style("assets/ico/favicon.ico")!!}
</head>
<body>
<!--
	Upper Header Section
-->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="topNav">
        <div class="container">
            <div class="alignR">
                <div class="pull-left socialNw">
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-youtube"></span></a>
                    <a href="#"><span class="icon-tumblr"></span></a>
                </div>
                <a class="active" href="index.html"> <span class="icon-home"></span> Home</a>
                <a href="#"><span class="icon-user"></span> My Account</a>
                <a href="register.html"><span class="icon-edit"></span> Register </a>
                <a href="contact.html"><span class="icon-envelope"></span> Contact us</a>
                <a href="cart.html"><span class="icon-shopping-cart"></span> 2 Item(s) - <span
                            class="badge badge-warning"> $448.42</span></a>
            </div>
        </div>
    </div>
</div>

<!--
Lower Header Section
-->
<div class="container">
    <div id="gototop"></div>
    <header id="header">
        <div class="row">
            <div class="span4">
                <h1>
                    <a class="logo" href="index.html"><span>Shop Cart</span>
                        {{ HTML::image("assets/img/logo-bootstrap-shoping-cart.png") }}
                    </a>
                </h1>
            </div>
            <div class="span4">
                <div class="offerNoteWrapper">
                    <strong>WELCOME !</strong>
                </div>
            </div>
            <div class="span4 alignR">
                <p><br> <strong> Support (24/7) : 0800 1234 678 </strong><br><br></p>
                <span class="btn btn-mini">[ 2 ] <span class="icon-shopping-cart"></span></span>
                <span class="btn btn-warning btn-mini">$</span>
                <span class="btn btn-mini">&pound;</span>
                <span class="btn btn-mini">&euro;</span>
            </div>
        </div>
    </header>

    <!--
    Navigation Bar Section
    -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="nav-collapse">
                    <ul class="nav">
                        <li class="active"><a href="{{URL::to('/')}}">Home </a></li>
                        <li class=""><a href="{{URL::to('products-list-view')}}">Products List</a></li>
                        <li class=""><a href="grid-view.html">Categories</a></li>
                        <li class=""><a href="three-col.html">How to Buy</a></li>
                        <li class=""><a href="four-col.html">About Us</a></li>
                        <li class=""><a href="general.html">Contact Us</a></li>
                    </ul>
                    <form action="#" class="navbar-search pull-left">
                        <input type="text" placeholder="Search" class="search-query span2">
                    </form>
                    <ul class="nav pull-right">
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span>
                                Login <b class="caret"></b></a>
                            <div class="dropdown-menu">
                                <form class="form-horizontal loginFrm" action="{{route('login')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="control-group">
                                        <input type="text" class="span2" name="email" id="inputEmail" placeholder="Email">
                                    </div>
                                    <div class="control-group">
                                        <input type="password" class="span2" name="password" id="inputPassword" placeholder="Password">
                                    </div>
                                    <div class="control-group">
                                        <label class="checkbox">
                                            <input type="checkbox"> Remember me
                                        </label>
                                        <button type="submit" class="shopBtn btn-block">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--
    Body Section
    -->
    <div class="row">
        <div id="sidebar" class="span3">
            <div class="well well-small">
                <ul class="nav nav-list">
                    <li><a href="products.html"><span class="icon-chevron-right"></span>Fashion</a></li>
                    <li><a href="products.html"><span class="icon-chevron-right"></span>Watches</a></li>
                    <li><a href="products.html"><span class="icon-chevron-right"></span>Fine Jewelry</a></li>
                    <li><a href="products.html"><span class="icon-chevron-right"></span>Fashion Jewelry</a></li>
                    <li><a href="products.html"><span class="icon-chevron-right"></span>Engagement & Wedding</a></li>
                    <li><a href="products.html"><span class="icon-chevron-right"></span>Men's Jewelry</a></li>
                    <li><a href="products.html"><span class="icon-chevron-right"></span>Vintage & Antique</a></li>
                    <li><a href="products.html"><span class="icon-chevron-right"></span>Loose Diamonds </a></li>
                    <li><a href="products.html"><span class="icon-chevron-right"></span>Loose Beads</a></li>
                    <li><a href="products.html"><span class="icon-chevron-right"></span>See All Jewelry & Watches</a>
                    </li>
                    <li style="border:0"> &nbsp;</li>
                    <li><a class="totalInCart" href="cart.html"><strong>Total Amount <span
                                        class="badge badge-warning pull-right" style="line-height:18px;">$448.42</span></strong></a>
                    </li>
                </ul>
            </div>

            <div class="well well-small alert alert-warning cntr">
                <h2>50% Discount</h2>
                <p>
                    only valid for online order. <br><br><a class="defaultBtn" href="#">Click here </a>
                </p>
            </div>
            <div class="well well-small"><a href="#">{{ HTML::image("assets/img/paypal.jpg") }}</a>
            </div>

            <a class="shopBtn btn-block" href="#">Upcoming products <br>
                <small>Click to view</small>
            </a>
            <br>
            <br>
            <ul class="nav nav-list promowrapper">
                <li>
                    <div class="thumbnail">
                        <a class="zoomTool" href="{{URL::to('product_quick_view')}}" title="add to cart"><span
                                    class="icon-search"></span> QUICK VIEW</a>
                {{ HTML::image("assets/img/bootstrap-ecommerce-templates.png") }}
                <div class="caption">
                    <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span>
                    </h4>
                </div>
            </div>
        </li>
        <li style="border:0"> &nbsp;</li>
        <li>
            <div class="thumbnail">
                <a class="zoomTool" href="{{URL::to('product_quick_view')}}" title="add to cart"><span
                                    class="icon-search"></span> QUICK VIEW</a>
                {{ HTML::image("assets/img/shopping-cart-template.png") }}
                <div class="caption">
                    <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span>
                    </h4>
                </div>
            </div>
        </li>
        <li style="border:0"> &nbsp;</li>
        <li>
            <div class="thumbnail">
                <a class="zoomTool" href="{{URL::to('product_quick_view')}}" title="add to cart"><span
                                    class="icon-search"></span> QUICK VIEW</a>
                        {{ HTML::image("assets/img/bootstrap-template.png") }}
                        <div class="caption">
                            <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span>
                            </h4>
                        </div>
                    </div>
                </li>
            </ul>

        </div>

        @yield('home')

    </div>
    <!--
    Clients
    -->
    <section class="our_client">
        <hr class="soften"/>
        <h4 class="title cntr"><span class="text">Manufactures</span></h4>
        <hr class="soften"/>
        <div class="row">
            <div class="span2">
                <a href="#">{{ HTML::image("assets/img/1.png") }}</a>
            </div>
            <div class="span2">
                <a href="#">{{ HTML::image("assets/img/2.png") }} ></a>
            </div>
            <div class="span2">
                <a href="#">{{ HTML::image("assets/img/3.png") }} ></a>
            </div>
            <div class="span2">
                <a href="#">{{ HTML::image("assets/img/4.png") }} ></a>
            </div>
            <div class="span2">
                <a href="#">{{ HTML::image("assets/img/5.png") }} ></a>
            </div>
            <div class="span2">
                <a href="#">{{ HTML::image("assets/img/6.png") }} ></a>
            </div>
        </div>
    </section>

    <!--
    Footer
    -->
    <footer class="footer">
        <div class="row-fluid">
            <div class="span2">
                <h5>Your Account</h5>
                <a href="#">YOUR ACCOUNT</a><br>
                <a href="#">PERSONAL INFORMATION</a><br>
                <a href="#">ADDRESSES</a><br>
                <a href="#">DISCOUNT</a><br>
                <a href="#">ORDER HISTORY</a><br>
            </div>
            <div class="span2">
                <h5>Iinformation</h5>
                <a href="contact.html">CONTACT</a><br>
                <a href="#">SITEMAP</a><br>
                <a href="#">LEGAL NOTICE</a><br>
                <a href="#">TERMS AND CONDITIONS</a><br>
                <a href="#">ABOUT US</a><br>
            </div>
            <div class="span2">
                <h5>Our Offer</h5>
                <a href="#">NEW PRODUCTS</a> <br>
                <a href="#">TOP SELLERS</a><br>
                <a href="#">SPECIALS</a><br>
                <a href="#">MANUFACTURERS</a><br>
                <a href="#">SUPPLIERS</a> <br/>
            </div>
            <div class="span6">
                <h5>The standard chunk of Lorem</h5>
                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
                those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et
                Malorum" by Cicero are also reproduced in their exact original form,
                accompanied by English versions from the 1914 translation by H. Rackham.
            </div>
        </div>
    </footer>
</div><!-- /container -->

<div class="copyright">
    <div class="container">
        <p class="pull-right">
            <a href="#">{{ HTML::image("assets/img/maestro.png") }}</a>
            <a href="#">{{ HTML::image("assets/img/mc.png") }}</a>
            <a href="#">{{ HTML::image("assets/img/pp.png") }}</a>
            <a href="#">{{ HTML::image("assets/img/visa.png") }}</a>
            <a href="#">{{ HTML::image("assets/img/disc.png") }}</a>
        </p>
        <span>Copyright &copy; 2018</span>
    </div>
</div>
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
<!-- Placed at the end of the document so the pages load faster -->
{!! HTML::script("assets/js/jquery.js")!!}
{!! HTML::script("assets/js/bootstrap.min.js")!!}
{!! HTML::script("assets/js/jquery.easing-1.3.min.js")!!}
{!! HTML::script("assets/js/jquery.scrollTo-1.4.3.1-min.js")!!}
{!! HTML::script("assets/js/shop.js")!!}
</body>
</html>