@extends('front.layouts.master')

@section('page_title')
    Cart
    @endsection

    @section('content')


<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-10 produti">
                <h4>CHECKOUT</h4>
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
<div class="container checking-area">
    <div class="row">
        <div class="col-md-9 cart-area">
            <div class="sixteen columns cart-section oflow">
                <!-- Cart -->
                <table class="table cart-table responsive-table">
                    <tr>
                        <th>
                            Item
                        </th>
                        <th>
                            Description
                        </th>
                        <th>
                            Price
                        </th>
                        <th>
                            Quantity
                        </th>
                        <th>
                            Total
                        </th>
                        <th>
                        </th>
                    </tr>
                    <!-- Item #1 -->
                    <tr>
                        <td>
                            <img src="images/product1-small.jpg" alt=""/>
                        </td>
                        <td class="cart-title">
                            <a href="#">Converse All Star Trainers</a>
                        </td>
                        <td>
                            $79.00
                        </td>
                        <td>
                            <form action='#'>
                                <div class="qtyminus">
                                </div>
                                <input type='text' name="quantity" value='1' class="qty"/>
                                <div class="qtyplus">
                                </div>
                            </form>
                        </td>
                        <td class="cart-total">
                            $79.00
                        </td>
                        <td>
                            <a href="#" class="cart-remove"></a>
                        </td>
                    </tr>
                    <!-- Item #2 -->
                    <tr>
                        <td>
                            <img src="images/product2-small.jpg" alt=""/>
                        </td>
                        <td class="cart-title">
                            <a href="#">Wool Two-Piece Suit</a>
                        </td>
                        <td>
                            $99.00
                        </td>
                        <td>
                            <form action='#'>
                                <div class="qtyminus">
                                </div>
                                <input type='text' name="quantity" value='1' class="qty"/>
                                <div class="qtyplus">
                                </div>
                            </form>
                        </td>
                        <td class="cart-total">
                            $99.00
                        </td>
                        <td>
                            <a href="#" class="cart-remove"></a>
                        </td>
                    </tr>
                    <!-- Item #3 -->
                    <tr>
                        <td>
                            <img src="images/product3-small.jpg" alt=""/>
                        </td>
                        <td class="cart-title">
                            <a href="#">Wool Two-Piece Suit</a>
                        </td>
                        <td>
                            $99.00
                        </td>
                        <td>
                            <form action='#'>
                                <div class="qtyminus">
                                </div>
                                <input type='text' name="quantity" value='1' class="qty"/>
                                <div class="qtyplus">
                                </div>
                            </form>
                        </td>
                        <td class="cart-total">
                            $99.00
                        </td>
                        <td>
                            <a href="#" class="cart-remove"></a>
                        </td>
                    </tr>
                    <!-- Item #4 -->
                    <tr>
                        <td>
                            <img src="images/product4-small.jpg" alt=""/>
                        </td>
                        <td class="cart-title">
                            <a href="#">Wool Two-Piece Suit</a>
                        </td>
                        <td>
                            $99.00
                        </td>
                        <td>
                            <form action='#'>
                                <div class="qtyminus">
                                </div>
                                <input type='text' name="quantity" value='1' class="qty"/>
                                <div class="qtyplus">
                                </div>
                            </form>
                        </td>
                        <td class="cart-total">
                            $99.00
                        </td>
                        <td>
                            <a href="#" class="cart-remove"></a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="taxat">
                <form action="#" method="get" class="apply-coupon">
                    <input class="search-field" type="text" placeholder="Coupon Code" value="">
                    <a href="#" class="coupon-btn checkout-btn">Apply Coupon</a>
                </form>
                <div class="cart-buttons">
                    <a href="#">Proceed to Checkout</a>
                    <a href="#">Update Cart</a>
                </div>
                <div class="col-md-6 taxes nopadding">
                    <ul>
                        <li><a href="#">shipping &amp; taxes</a></li>
                    </ul>
                    <p>
                        Enter your destination to get a shipping estimate.
                    </p>
                    <div>
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" placeholder="your name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="password" class="form-control" placeholder="your e-mail">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="password" class="form-control" placeholder="post code">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Cart Totals -->
                <div class="col-md-6 eight columns cart-totals">
                    <table class="table cart-table test">
                        <tbody>
                        <tr>
                            <th>
                                Cart Subtotal
                            </th>
                            <td>
                                <strong>$178.00</strong>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Shipping and Handling
                            </th>
                            <td>
                                Free Shipping
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Order Total
                            </th>
                            <td>
                                <strong>$178.00</strong>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                    <a href="#" class="calculate-shipping">Checkout</a>
                </div>
            </div>
            <!-- Start -->
            <!-- end -->
        </div>
        <!-- Sidebar -->
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
<!--end-prize-->
    @endsection
