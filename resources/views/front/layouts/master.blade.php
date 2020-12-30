<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My site -@yield('page_title')</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    @yield('csscode')
</head>
<body>
@include('front.layouts.header')
@include('front.layouts.menu')
@yield('content')
@include('front.layouts.footer')
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="js/modernizr.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
    // jQuery
    (function($) {
        "use strict";
        $(document).ready(function() {
            // Main Slider
            $('.main-flexslider').flexslider({
                directionNav: true,
                controlNav: false,
                animation: "fade",
                slideshowSpeed: 7000,
                prevText: "",
                nextText: "",
            });
        });
    })(jQuery);
</script>
@yield('jscode')
</body>
</html>
