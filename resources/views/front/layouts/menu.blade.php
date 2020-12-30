<!--navbar-->
<div class="container header">
    <nav id="myNavbar" class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{route('front.index')}}">Home</a></li>
                    <li><a href="{{route('front.shop')}}">Shop</a></li>
                    <li><a href="{{route('front.single')}}">Single</a></li>
                    <li><a href="{{route('front.cart')}}">Cart</a></li>
                    <li><a href="{{route('front.checkout')}}">Checkout</a></li>
                    <li><a href="{{route('front.about')}}">About us</a></li>
{{--                    <li class="dropdown">--}}
{{--                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown</a>--}}
{{--                        <ul class="dropdown-menu">--}}
{{--                            <li><a href="#">Lorem</a></li>--}}
{{--                            <li><a href="#">Ipsum</a></li>--}}
{{--                            <li><a href="#">Dolor sit amet</a></li>--}}
{{--                            <li><a href="#">Dropdown</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                    <li><a href="{{route('front.contact')}}">Contact</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
</div>
<!--end-navbar-->
