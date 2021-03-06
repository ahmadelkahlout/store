@extends('front.layouts.master')

@section('page_title')
    Single
    @endsection

    @section('content')

<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-10 produti">
                <h4>products</h4>
            </div>
            <div class="col-md-2 cart">
                <h4><a href="#">chart (2 items)</a></h4>
                <ul>
                    <li><a href="#">home /</a></li>
                    <li><a href="#">products</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- shop-page -->
<div class="container content">
    <div class="row">
        <div class="col-md-9 white-bg">
            <!-- Single Product -->
            <div class="single-product cold-md-12">
                <div class="flexslider col-md-6">
                    <ul class="slides">
                        <li data-thumb="images/product-slide2.jpg">
                            <img src="images/product-slide2.jpg" alt=""/>
                        </li>
                        <li data-thumb="images/product-slide1.jpg">
                            <img src="images/product-slide1.jpg" alt=""/>
                        </li>
                        <li data-thumb="images/product-slide3.jpg">
                            <img src="images/product-slide3.jpg" alt=""/>
                        </li>
                        <li data-thumb="images/product-slide4.jpg">
                            <img src="images/product-slide4.jpg" alt=""/>
                        </li>
                    </ul>
                </div>
                <div class="product-details col-md-6">
                    <h1>TASTY CHOCOLATE</h1>
                    <p class="price">
                        $23.00
                    </p>
                    <span>$27.00</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non vestibulum massa, sit amet bibendum eros. In accumsan dignissim tellus ac faucibus. Mauris vel sollicitudin metus. Praesent ut neque nec velit euismod fermentum.
                    </p>
                    <form action="#">
                        <div class="qtyminus">
                        </div>
                        <input type="text" name="quantity" value="1" class="qty">
                        <div class="qtyplus">
                        </div>
                    </form>
                    <a href="#">Add to Cart</a>
                    <hr>
                    <div class="availability">
                        <p>
                            Availability:
                        </p>
                        <span>in stock</span>
                    </div>
                    <div class="reviews">
                        <ul>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Single Product -->
            </div>
            <div class="col-md-12 tabs">
                <div class="bs-example">
                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab1" data-loading-text="Loading...">Section 1</a></li>
                            <li><a data-toggle="tab" href="#tab2" data-loading-text="Loading...">Section 2</a></li>
                            <li><a data-toggle="tab" href="#tab3" data-loading-text="Loading...">Section 3</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab1" class="tab-pane active fade in">
                                <p>
                                    Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi.
                                </p>
                            </div>
                            <div id="tab2" class="tab-pane fade">
                                <p>
                                    Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing. Duis auctor dictum erat hendrerit dapibus.
                                </p>
                            </div>
                            <div id="tab3" class="tab-pane fade">
                                <p>
                                    WInteger convallis, nulla in sollicitudin placerat, ligula enim auctor lectus, in mollis diam dolor at lorem. Sed bibendum nibh sit amet dictum feugiat. Vivamus arcu sem, cursus a feugiat ut, iaculis at erat. Donec vehicula at ligula vitae venenatis. Sed nunc nulla, vehicula non porttitor in, pharetra et dolor. Fusce nec velit velit. Pellentesque consectetur eros nec interdum varius. Quisque at mi dolor.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--articles-->
            <div class="row articles">
                <div class="col-md-4">
                    <img src="images/product2.jpg" alt="">
                    <div class="text">
                        <a href="#"><span>
                        worldwide shipping </span></a>
                        <p>
                            $ 23.00
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="images/product3.jpg" alt="">
                    <div class="text">
                        <a href="#"><span>
                        worldwide shipping </span></a>
                        <p>
                            $ 23.00
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="images/product4.jpg" alt="">
                    <div class="text">
                        <a href="#"><span>
                        worldwide shipping </span></a>
                        <p>
                            $ 23.00
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 shop-sidebar">
            <div class="sidebar-widgets">
                <div class="shop-widget">
                    <h4>Categories</h4>
                    <ul class="category-shop-list">
                        <li>
                            <a class="accordion-link" href="#">Watches <span>(4)</span></a>
                            <ul class="accordion-list-content">
                                <li><a href="#">Jackets <span>(7)</span></a></li>
                                <li><a href="#">Electronics <span>(10)</span></a></li>
                                <li><a href="#">Sports <span>(12)</span></a></li>
                                <li><a href="#">Garden <span>(2)</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-link" href="#">Jewellery <span>(8)</span></a>
                            <ul class="accordion-list-content">
                                <li><a href="#">Jackets <span>(7)</span></a></li>
                                <li><a href="#">Electronics <span>(10)</span></a></li>
                                <li><a href="#">Sports <span>(12)</span></a></li>
                                <li><a href="#">Garden <span>(2)</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-link" href="#">Technology <span>(6)</span></a>
                            <ul class="accordion-list-content">
                                <li><a href="#">Jackets <span>(7)</span></a></li>
                                <li><a href="#">Electronics <span>(10)</span></a></li>
                                <li><a href="#">Sports <span>(12)</span></a></li>
                                <li><a href="#">Garden <span>(2)</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-link" href="#">Kids <span>(5)</span></a>
                            <ul class="accordion-list-content">
                                <li><a href="#">Jackets <span>(7)</span></a></li>
                                <li><a href="#">Electronics <span>(10)</span></a></li>
                                <li><a href="#">Sports <span>(12)</span></a></li>
                                <li><a href="#">Garden <span>(2)</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-link" href="#">Electronics <span>(4)</span></a>
                            <ul class="accordion-list-content">
                                <li><a href="#">Jackets <span>(7)</span></a></li>
                                <li><a href="#">Electronics <span>(10)</span></a></li>
                                <li><a href="#">Sports <span>(12)</span></a></li>
                                <li><a href="#">Garden <span>(2)</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-link" href="#">Sports <span>(5)</span></a>
                            <ul class="accordion-list-content">
                                <li><a href="#">Jackets <span>(7)</span></a></li>
                                <li><a href="#">Electronics <span>(10)</span></a></li>
                                <li><a href="#">Sports <span>(12)</span></a></li>
                                <li><a href="#">Garden <span>(2)</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-link" href="#">Bicycles <span>(7)</span></a>
                            <ul class="accordion-list-content">
                                <li><a href="#">Jackets <span>(7)</span></a></li>
                                <li><a href="#">Electronics <span>(10)</span></a></li>
                                <li><a href="#">Sports <span>(12)</span></a></li>
                                <li><a href="#">Garden <span>(2)</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="shop-widget">
                    <h4>Popular Products</h4>
                    <ul class="popular-product">
                        <li>
                            <img alt="" src="images/product.png">
                            <div>
                                <h6><a href="#">Iphone 5 black</a></h6>
                                <span>$766.00</span>
                            </div>
                        </li>
                        <li>
                            <img alt="" src="images/product2.png">
                            <div>
                                <h6><a href="#">Samasung Galaxy note 3</a></h6>
                                <span>$555.00</span>
                            </div>
                        </li>
                        <li>
                            <img alt="" src="images/product3.png">
                            <div>
                                <h6><a href="#">Iphone 5 black</a></h6>
                                <span>$766.00</span>
                            </div>
                        </li>
                        <li>
                            <img alt="" src="images/product4.png">
                            <div>
                                <h6><a href="#">Samasung Galaxy note 3</a></h6>
                                <span>$555.00</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--prize-->
<div class="prize">
    <div class="container">
        <h1>win our special prize on our facebook page</h1>
    </div>
</div>

    @endsection
