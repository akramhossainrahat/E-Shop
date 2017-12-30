@extends('Front.home_page')
@section('home')
    <div class="span9">
        <div class="well np">
            <div id="myCarousel" class="carousel slide homCar">
                <div class="carousel-inner">
                    <div class="item">
                        <img style="width:100%" src="assets/img/bootstrap_free-ecommerce.png"
                             alt="bootstrap ecommerce templates">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item">
                        <img style="width:100%" src="assets/img/carousel1.png" alt="bootstrap ecommerce templates">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item active">
                        <img style="width:100%" src="assets/img/carousel3.png" alt="bootstrap ecommerce templates">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item">
                        <img style="width:100%" src="assets/img/bootstrap-templates.png" alt="bootstrap templates">
                        <div class="carousel-caption">
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div>
        </div>
        <!--
        New Products
        -->


        <div class="well well-small">
            <h3>New Products </h3>
            <hr class="soften"/>
            <div class="row-fluid">
                <div id="newProductCar" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <ul class="thumbnails">
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.html" title="add to cart"><span
                                                    class="icon-search"></span> QUICK VIEW</a>
                                        <a href="#" class="tag"></a>
                                        <a href="product_details.html">{{ HTML::image("assets/img/bootstrap-ring.png") }}</a>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.html" title="add to cart"><span
                                                    class="icon-search"></span> QUICK VIEW</a>
                                        <a href="#" class="tag"></a>
                                        <a href="product_details.html">{{ HTML::image("assets/img/i.jpg") }}</a>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.html" title="add to cart"><span
                                                    class="icon-search"></span> QUICK VIEW</a>
                                        <a href="#" class="tag"></a>
                                        <a href="product_details.html">{{ HTML::image("assets/img/g.jpg") }}</a>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.html" title="add to cart"><span
                                                    class="icon-search"></span> QUICK VIEW</a>
                                        <a href="product_details.html">{{ HTML::image("assets/img/s.png") }}</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="thumbnails">
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.html" title="add to cart"><span
                                                    class="icon-search"></span> QUICK VIEW</a>
                                        <a href="product_details.html">{{ HTML::image("assets/img/i.jpg") }}</a>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.html" title="add to cart"><span
                                                    class="icon-search"></span> QUICK VIEW</a>
                                        <a href="product_details.html">{{ HTML::image("assets/img/f.jpg") }}</a>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.html" title="add to cart"><span
                                                    class="icon-search"></span> QUICK VIEW</a>
                                        <a href="product_details.html">{{ HTML::image("assets/img/h.jpg") }}</a>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.html" title="add to cart"><span
                                                    class="icon-search"></span> QUICK VIEW</a>
                                        <a href="product_details.html">{{ HTML::image("assets/img/j.jpg") }}</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#newProductCar" data-slide="prev">&lsaquo;</a>
                    <a class="right carousel-control" href="#newProductCar" data-slide="next">&rsaquo;</a>
                </div>
            </div>
            <div class="row-fluid">
                <ul class="thumbnails">
                    <li class="span4">
                        <div class="thumbnail">

                            <a class="zoomTool" href="product_details.html" title="add to cart"><span
                                        class="icon-search"></span> QUICK VIEW</a>
                            <a href="product_details.html">{{ HTML::image("assets/img/b.jpg") }}</a>
                            <div class="caption cntr">
                                <p>Manicure & Pedicure</p>
                                <p><strong> $22.00</strong></p>
                                <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
                                <div class="actionList">
                                    <a class="pull-left" href="#">Add to Wish List </a>
                                    <a class="pull-left" href="#"> Add to Compare </a>
                                </div>
                                <br class="clr">
                            </div>
                        </div>
                    </li>
                    <li class="span4">
                        <div class="thumbnail">
                            <a class="zoomTool" href="product_details.html" title="add to cart"><span
                                        class="icon-search"></span> QUICK VIEW</a>
                            <a href="product_details.html">{{ HTML::image("assets/img/c.jpg") }}</a>
                            <div class="caption cntr">
                                <p>Manicure & Pedicure</p>
                                <p><strong> $22.00</strong></p>
                                <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
                                <div class="actionList">
                                    <a class="pull-left" href="#">Add to Wish List </a>
                                    <a class="pull-left" href="#"> Add to Compare </a>
                                </div>
                                <br class="clr">
                            </div>
                        </div>
                    </li>
                    <li class="span4">
                        <div class="thumbnail">
                            <a class="zoomTool" href="product_details.html" title="add to cart"><span
                                        class="icon-search"></span> QUICK VIEW</a>
                            <a href="product_details.html">{{ HTML::image("assets/img/a.jpg") }}</a>
                            <div class="caption cntr">
                                <p>Manicure & Pedicure</p>
                                <p><strong> $22.00</strong></p>
                                <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
                                <div class="actionList">
                                    <a class="pull-left" href="#">Add to Wish List </a>
                                    <a class="pull-left" href="#"> Add to Compare </a>
                                </div>
                                <br class="clr">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--
        Featured Products
        -->
        <div class="well well-small">
            <h3><a class="btn btn-mini pull-right" href="products.html" title="View more">VIew More<span
                            class="icon-plus"></span></a> Featured Products </h3>
            <hr class="soften"/>
            <div class="row-fluid">
                <ul class="thumbnails">

                    <!-- Retrieve data from Database -->
                    @foreach($products as $pro)
                        <li class="span4">
                            <div class="thumbnail">
                                <a class="zoomTool" href="{{URL::to('product-quick-view', $pro->product_id)}}" title="add to cart"><span
                                            class="icon-search"></span> QUICK VIEW</a>
                                <a href="product_details.html">{{ HTML::image($pro->product_image) }}</a>
                                <div class="caption">
                                    <h5><strong>{{$pro->product_name}}</strong></h5>
                                    <h4>
                                        <a class="defaultBtn" href="product_details.html" title="Click to view"><span
                                                    class="icon-zoom-in"></span></a>
                                        <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
                                        <span class="pull-right">${{$pro->product_price}}</span>
                                    </h4>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="well well-small">
            <a class="btn btn-mini pull-right" href="#">View more <span class="icon-plus"></span></a>
            Popular Products
        </div>
        <hr>
        <div class="well well-small">
            <a class="btn btn-mini pull-right" href="#">View more <span class="icon-plus"></span></a>
            Best selling Products
        </div>
    </div>
@endsection