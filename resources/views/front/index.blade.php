@extends('front.layouts.master')
@section('page_title')
    Home page
@endsection

@section('jscode')
    <script>
        alert('welcome to store')
        </script>
@endsection
@section('content')
    <!--flex-slider-->
    <div class="main-flexslider">
        <ul class="slides">
            <li class="slides"><img src="images/slide-01.jpg" alt="slide 01">
                <div class="slide-caption">
                    <h2>We are Delicio</h2>
                    <h2>ideal for every Chocoholic</h2>
                    <h2><a href="#">SEE OUR OFFER</a></h2>
                </div>
            </li>
            <li class="slides"><img src="images/slide-02.jpg" alt="slide 01">
                <div class="slide-caption">
                    <h2>We are Delicio</h2>
                    <h2>ideal for every Chocoholic</h2>
                    <h2><a href="#">SEE OUR OFFER</a></h2>
                </div>
            </li>
            <li class="slides"><img src="images/slide-03.jpg" alt="slide 01">
                <div class="slide-caption">
                    <h2>We are Delicio</h2>
                    <h2>ideal for every Chocoholic</h2>
                    <h2><a href="#">SEE OUR OFFER</a></h2>
                </div>
            </li>
            <li class="slides"><img src="images/slide-04.jpg" alt="slide 01">
                <div class="slide-caption">
                    <h2>We are Delicio</h2>
                    <h2>ideal for every Chocoholic</h2>
                    <h2><a href="#">SEE OUR OFFER</a></h2>
                </div>
            </li>
        </ul>
    </div>
    <!--end-flex-slider-->
    <!--Icon Blocks-->
    <div class="container">
        <div class="icon-blocks">
            <div class="col-md-4">
                <p>
                    <i class="fa fa-group"></i>personalized shop
                </p>
            </div>
            <div class="col-md-4">
                <p>
                    <i class="fa fa-bell"></i>email notification
                </p>
            </div>
            <div class="col-md-4">
                <p>
                    <i class="fa fa-globe"></i>worldwide shipping
                </p>
            </div>
        </div>
    </div>
    <!--end Icon Blocks-->
    <!--articles-->
    <div class="container">
        <div class="row articles">
            <div class="col-md-3 col-sm-6">
                <img src="images/product1.jpg" alt="img">
                <div class="text">
                    <a href="#"><span>
                Delicious Chocolate </span></a>
                    <p>
                        $ 23.00
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="images/product2.jpg" alt="img">
                <div class="text">
                    <a href="#"><span>
                Mix of Chocolates </span></a>
                    <p>
                        $ 32.00
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="images/product3.jpg" alt="img">
                <div class="text">
                    <a href="#"><span>
                Choco Nuts </span></a>
                    <p>
                        $ 20.00
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="images/product4.jpg" alt="img">
                <div class="text">
                <span>
                Soft Cake </span>
                    <p>
                        $ 15.00
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--end-articles-->
    <!-- partners box -->
    <div class="container">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <ul class="partner-list">
                        <li><img alt="" src="images/client1.png"></li>
                        <li><img alt="" src="images/client2.png"></li>
                        <li><img alt="" src="images/client3.png"></li>
                        <li><img alt="" src="images/client4.png"></li>
                    </ul>
                </div>
                <div class="item">
                    <ul class="partner-list">
                        <li><img alt="" src="images/client1.png"></li>
                        <li><img alt="" src="images/client2.png"></li>
                        <li><img alt="" src="images/client3.png"></li>
                        <li><img alt="" src="images/client4.png"></li>
                    </ul>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"></a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"></a>
        </div>
    </div>
    <!--end-partners box -->
    <!--articles-->
    <div class="container">
        <div class="row articles">
            <div class="col-md-3 col-sm-6">
                <img src="images/product1.jpg" alt="img">
                <div class="text">
                <span>
                CC Circualr Cake</span>
                    <p>
                        $ 55.00
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="images/product2.jpg" alt="img">
                <div class="text">
                <span>
                Mixy Choco </span>
                    <p>
                        $ 12.00
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="images/product3.jpg" alt="img">
                <div class="text">
                <span>
                All Nuts Choco </span>
                    <p>
                        $ 26.00
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="images/product4.jpg" alt="img">
                <div class="text">
                <span>
                Tasty Chocolate </span>
                    <p>
                        $ 23.00
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--end-articles-->
    <!--prize-->
    <div class="prize">
        <div class="container">
            <h1>win our special prize on our facebook page</h1>
        </div>
    </div>
    <!--end-prize-->

@endsection
