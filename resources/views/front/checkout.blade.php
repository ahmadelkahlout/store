@extends('front.layouts.master')

@section('page_title')
    Checkout
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
        <div class="col-md-9 checkout-accordion">
            <div class="col-md-12 white-bg">
                <div class="bs-example">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1. Checkout Method</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in panel-body">
                                <div class="accordion-list-content" style="overflow: hidden; display: block;">
                                    <div class="col-md-6 checking">
                                        <h4>new costumer</h4>
                                        <div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" value="option1" checked="">
                                                    check as guset </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" value="option2">
                                                    register </label>
                                            </div>
                                        </div>
                                        <p>
                                            By creating an account you will be able to shop and be up to date with a status od an order, keep track of previous orders and buy faster when you decide to return.
                                        </p>
                                        <a href="#">continue</a>
                                    </div>
                                    <div class="col-md-6 check-name">
                                        <h4>returning costumer</h4>
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
                                            </form>
                                            <a href="#">forgot your pasword ?</a>
                                            <br>
                                            <a href=""><span>Log in</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2. Billing Information</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body pb2">
                                    <div class="accordion-list-content" style="overflow: hidden; display: block;">
                                        <div class="col-md-6 check-name">
                                            <div>
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="email" class="form-control" placeholder="Your First Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="password" class="form-control" placeholder="Your Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="email" class="form-control" placeholder="Your Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="password" class="form-control" placeholder="Your Telephone">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="email" class="form-control" placeholder="Your Post Fax">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="password" class="form-control" placeholder="Your Company">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="email" class="form-control" placeholder="Your Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="password" class="form-control" placeholder="confirm Your Password">
                                                        </div>
                                                    </div>
                                                </form>
                                                <a href="#">forgot your pasword ?</a>
                                                <button type="submit" class="btn btn-default">log in</button>
                                            </div>
                                        </div>
                                        <div class="col-md-6 check-name">
                                            <div>
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="email" class="form-control" placeholder="Your Addres">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="password" class="form-control" placeholder="Your Addres">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="email" class="form-control" placeholder="Your City">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="password" class="form-control" placeholder="Your Post Code">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="email" class="form-control" placeholder="Your Post Country">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="password" class="form-control" placeholder="Your Post Region/State">
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" value="option1" checked="">
                                                        I have read and agree to the Privacy Polic </label>
                                                </div>
                                                <button type="submit" class="btn btn-default">log in</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">3. Delivery Details</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body pb2">
                                    <div class="accordion-list-content" style="overflow: hidden; display: block;">
                                        <div class="col-md-6 check-name">
                                            <div>
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="email" class="form-control" placeholder="Your First Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="password" class="form-control" placeholder="Your Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="email" class="form-control" placeholder="Your Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="password" class="form-control" placeholder="Your Telephone">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="email" class="form-control" placeholder="Your Post Fax">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="password" class="form-control" placeholder="Your Company">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="email" class="form-control" placeholder="Your Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="password" class="form-control" placeholder="confirm Your Password">
                                                        </div>
                                                    </div>
                                                </form>
                                                <a href="#">forgot your pasword ?</a>
                                                <button type="submit" class="btn btn-default">log in</button>
                                            </div>
                                        </div>
                                        <div class="col-md-6 check-name">
                                            <div>
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="email" class="form-control" placeholder="Your Addres">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="password" class="form-control" placeholder="Your Addres">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="email" class="form-control" placeholder="Your City">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="password" class="form-control" placeholder="Your Post Code">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="email" class="form-control" placeholder="Your Post Country">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="password" class="form-control" placeholder="Your Post Region/State">
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" value="option1" checked="">
                                                        My delivery and billing addresses are the same </label>
                                                </div>
                                                <button type="submit" class="btn btn-default">log in</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">4. Delivery Method</a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="accordion-list-content" style="overflow: hidden; display: block;">
                                        <p>
                                            Please select the preferred payment method to use on this order.
                                        </p>
                                        <label class="checkbox payment-method inline">
                                            <input type="checkbox" value="option1"> PayPal </label>
                                        <label class="checkbox payment-method inline">
                                            <input type="checkbox" value="option2"> Credit Card </label>
                                        <label class="checkbox payment-method inline">
                                            <input type="checkbox" value="option3"> Google Checkout </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">5. Payment Method</a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="accordion-list-content" style="overflow: hidden; display: block;">
                                        <p>
                                            Please select the preferred payment method to use on this order.
                                        </p>
                                        <label class="checkbox payment-method inline">
                                            <input type="checkbox" id="customCheck1" value="option1"> Flat Shipping Rate </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">6. Confirm Order</a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse">
                                <div class="col-md-12 checkout-cart">
                                    <div class="sixteen columns">
                                        <!-- Cart -->
                                        <table class="table cart-table responsive-table">
                                            <tbody>
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
                                                    <img src="images/small_product_list_08.jpg" alt="">
                                                </td>
                                                <td class="cart-title">
                                                    <a href="#">Converse All Star Trainers</a>
                                                </td>
                                                <td>
                                                    $79.00
                                                </td>
                                                <td>
                                                    <form action="#">
                                                        <div class="qtyminus">
                                                        </div>
                                                        <input type="text" name="quantity" value="1" class="qty">
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
                                                    <img src="images/small_product_list_09.jpg" alt="">
                                                </td>
                                                <td class="cart-title">
                                                    <a href="#">Wool Two-Piece Suit</a>
                                                </td>
                                                <td>
                                                    $99.00
                                                </td>
                                                <td>
                                                    <form action="#">
                                                        <div class="qtyminus">
                                                        </div>
                                                        <input type="text" name="quantity" value="1" class="qty">
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
                                                    <img src="images/small_product_list_09.jpg" alt="">
                                                </td>
                                                <td class="cart-title">
                                                    <a href="#">Wool Two-Piece Suit</a>
                                                </td>
                                                <td>
                                                    $99.00
                                                </td>
                                                <td>
                                                    <form action="#">
                                                        <div class="qtyminus">
                                                        </div>
                                                        <input type="text" name="quantity" value="1" class="qty">
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
                                                    <img src="images/small_product_list_09.jpg" alt="">
                                                </td>
                                                <td class="cart-title">
                                                    <a href="#">Wool Two-Piece Suit</a>
                                                </td>
                                                <td>
                                                    $99.00
                                                </td>
                                                <td>
                                                    <form action="#">
                                                        <div class="qtyminus">
                                                        </div>
                                                        <input type="text" name="quantity" value="1" class="qty">
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
                                            </tbody>
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
                                </div>
                            </div>
                        </div>
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
<!--end-prize-->

    @endsection
