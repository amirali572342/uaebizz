<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Bizdire - Business Directory and classifieds premium html5 CSS template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
          content="business directory website,online business directory website,directory listing sites,bootstrap form template,bootstrap templates,responsive web design,bootstrap website templates,business directory,business directory template,business listing,buy web templates,directory,directory html template,directory listing html template,directory website template,html list template,html template,html5 responsive template,html5 template,local business directory,local business listing,online business directory,online directory,premium,premium bootstrap templates,small business directory,classified,Premium business directory Templates,Directory & Listing HTML Template,business listing websites">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Bootstrap Css -->
    <link id="style" href="{{asset('assets/frontend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Dashboard Css -->
    <link href="{{asset('assets/frontend/css/style.css')}}" rel="stylesheet" />

    <!-- Font-awesome  Css -->
    <link href="{{asset('assets/frontend/css/icons.css')}}" rel="stylesheet" />

</head>

<body>


<!--Loader-->
<div id="global-loader">
    <img src="{{asset('assets/frontend/images/products/products/loader.png')}}" class="loader-img floating" alt="">
</div>


@include('frontend.includes.header')

@yield('content')

<!--Footer Section-->
@include('frontend.includes.footer')
<!--Footer Section-->

<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fa fa-rocket"></i></a>

<!-- JQuery js-->
<script src="{{asset('assets/frontend/js/vendors/jquery.js')}}"></script>

<!-- Bootstrap js -->
<script src="{{asset('assets/frontend/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('assets/frontend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<!--JQuery Sparkline Js-->
<script src="{{asset('assets/frontend/js/vendors/jquery.sparkline.min.js')}}"></script>

<!-- Circle Progress Js-->
<script src="{{asset('assets/frontend/js/vendors/circle-progress.min.js')}}"></script>

<!-- Star Rating-2 Js-->
<script src="{{asset('assets/frontend/plugins/ratings-2/jquery.star-rating.js')}}"></script>
<script src="{{asset('assets/frontend/plugins/ratings-2/star-rating.js')}}"></script>

<!--Counters -->
<script src="{{asset('assets/frontend/plugins/counters/counterup.min.js')}}"></script>
<script src="{{asset('assets/frontend/plugins/counters/waypoints.min.js')}}"></script>
<script src="{{asset('assets/frontend/plugins/counters/numeric-counter.js')}}"></script>

<!--Owl Carousel js -->
<script src="{{asset('assets/frontend/plugins/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('assets/frontend/js/owl-carousel.js')}}"></script>

<!--Horizontal Menu-->
<script src="{{asset('assets/frontend/plugins/horizontal/horizontal-menu/horizontal.js')}}"></script>

<!--JQuery TouchSwipe js-->
<script src="{{asset('assets/frontend/js/jquery.touchSwipe.min.js')}}"></script>

<!--Select2 js -->
<script src="{{asset('assets/frontend/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/select2.js')}}"></script>

<!-- sticky Js-->
<script src="{{asset('assets/frontend/js/sticky.js')}}"></script>

<!-- Cookie js -->
<script src="{{asset('assets/frontend/plugins/cookie/jquery.ihavecookies.js')}}"></script>
<script src="{{asset('assets/frontend/plugins/cookie/cookie.js')}}"></script>

<!--Auto Complete js -->
<script src="{{asset('assets/frontend/plugins/autocomplete/jquery.autocomplete.js')}}"></script>
<script src="{{asset('assets/frontend/plugins/autocomplete/autocomplete.js')}}"></script>

<!-- p-scroll bar Js-->
<script src="{{asset('assets/frontend/plugins/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

<!-- Swipe Js-->
<script src="{{asset('assets/frontend/js/swipe.js')}}"></script>

<!-- Scripts Js-->
<script src="{{asset('assets/frontend/js/scripts2.js')}}"></script>

<!-- Custom Js-->
<script src="{{asset('assets/frontend/js/themeColors.js')}}"></script>
<script src="{{asset('assets/frontend/js/custom.js')}}"></script>
</body>

</html>
