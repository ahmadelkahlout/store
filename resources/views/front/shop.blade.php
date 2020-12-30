@extends('front.layouts.master')

@section('page_title')
    Shop
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
<div class="container">
    <div class="row content">
        <div class="col-md-9 shop-section">
            <div class="row">
                <div class="col-md-12 latest">
                    <h4 class="pull-left">latest first</h4>
                    <ul class="pagination-list pull-right">
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                    </ul>
                </div>
            </div>
            <!--articles-->
            <div class="row articles">
                <div class="col-md-4 col-sm-6">
                    <img src="images/product2.jpg" alt="">
                    <div class="text">
                        <a href="#"><span>
                        Mix of Chocolates </span></a>
                        <p>
                            $ 23.00
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="images/product3.jpg" alt="">
                    <div class="text">
                        <a href="#"><span>
                        Tasty Choco </span></a>
                        <p>
                            $ 30.99
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="images/product4.jpg" alt="">
                    <div class="text">
                        <a href="#"><span>
                        Whole Nuts </span></a>
                        <p>
                            $ 27.00
                        </p>
                    </div>
                </div>
            </div>
            <div class="row articles">
                <div class="col-md-4 col-sm-6">
                    <img src="images/product2.jpg" alt="">
                    <div class="text">
                        <a href="#"><span>
                        HazelNut Choco </span></a>
                        <p>
                            $ 15.00
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="images/product3.jpg" alt="">
                    <div class="text">
                        <a href="#"><span>
                        Tasty Cake </span></a>
                        <p>
                            $ 19.00
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="images/product4.jpg" alt="">
                    <div class="text">
                        <a href="#"><span>
                        SweetChok</span></a>
                        <p>
                            $ 21.00
                        </p>
                    </div>
                </div>
            </div>
            <div class="row articles">
                <div class="col-md-4 col-sm-6">
                    <img src="images/product2.jpg" alt="">
                    <div class="text">
                        <a href="#"><span>
                        Delicio Chocolate </span></a>
                        <p>
                            $ 23.00
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="images/product3.jpg" alt="">
                    <div class="text">
                        <a href="#"><span>
                        Rafaello </span></a>
                        <p>
                            $ 46.00
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="images/product4.jpg" alt="">
                    <div class="text">
                        <a href="#"><span>
                        Ferrero </span></a>
                        <p>
                            $ 24.00
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--end-articles-->
        <div class="col-md-3 shop-sidebar">
            <div class="sidebar-widgets">
                <div class="shop-widget">
                    <h4>Price selector</h4>
                    <div class="price-range">
                        <!-- div to become a slider -->
                        <div class="noUiSlider">
                        </div>
                        <input type="text" id="start-val"/>
                        <input type="text" id="end-val"/>
                    </div>
                </div>
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
