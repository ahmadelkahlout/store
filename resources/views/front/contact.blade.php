@extends('front.layouts.master')

@section('page_title')
    Contact Us
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
        <div class="col-md-9">
            <div class="map">
            </div>
            <div class="row contact-all">
                <div class="triggerAnimation animated" data-animate="fadeInLeft">
                    <form id="contact-form">
                        <h1>contact us</h1>
                        <div class="text-fields">
                            <div class="float-input">
                                <input name="name" id="name" type="text" placeholder="Name">
                                <span><i class="fa fa-user"></i></span>
                            </div>
                            <div class="float-input">
                                <input name="mail" id="mail" type="text" placeholder="e-mail">
                                <span><i class="fa fa-envelope-o"></i></span>
                            </div>
                            <div class="float-input">
                                <input name="website" id="website" type="text" placeholder="website">
                                <span><i class="fa fa-link"></i></span>
                            </div>
                        </div>
                        <div class="submit-area">
                            <textarea name="comment" id="comment" placeholder="Message"></textarea>
                            <input type="submit" id="submit_contact" class="main-button" value="Send Now">
                            <div id="msg" class="message">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3 shop-sidebar">
            <div class="sidebar-widgets">
                <div class="row right-cal">
                    <h4>opening time</h4>
                    <ul>
                        <li><a href="#">monday<span>8am-5pm</span></a></li>
                        <li class="colored"><a href="#">tuesday<span>8am-5pm</span></a></li>
                        <li><a href="#">wednesday<span>8am-5pm</span></a></li>
                        <li class="colored"><a href="#">thursday<span>8am-5pm</span></a></li>
                        <li><a href="#">friday<span>8am-5pm</span></a></li>
                        <li class="colored"><a href="#">saturday<span>8am-5pm</span></a></li>
                        <li><a href="#">sunday<span>8am-5pm</span></a></li>
                    </ul>
                </div>
                <div class="row right-inf">
                    <h4>contact ifno</h4>
                    <ul>
                        <li>
                            <p>
                                Chocco Webshop
                            </p>
                        </li>
                        <li>
                            <p>
                                Street name 0123, Washington, USA
                            </p>
                        </li>
                    </ul>
                    <ul>
                        <li><a href="#">T:0123 456 789</a></li>
                        <li><a href="#">F:0123 456 789</a></li>
                        <li><a href="#">E:info@chocco.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end-shop-page -->
<!-- partners box -->
<div class="container">
</div>
<!--prize-->
<div class="prize">
    <div class="container">
        <h1>win our special prize on our facebook page</h1>
    </div>
</div>
<!--end-prize-->
@endsection

