<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Solutions</title>
    <meta name="description" content="Ask me something">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Main Style -->
    <link rel="stylesheet" href="{{ url('public/page/style.css') }}">

    <!-- Skins -->
    <link rel="stylesheet" href="{{ url('public/page/css/skins/orange.css') }}">

    <!-- Responsive Style -->
    <link rel="stylesheet" href="{{ url('public/page/css/responsive.css') }}">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ url('public/page/images/favicon.png') }}">

</head>
<body>
    <div class="loader"><div class="loader_html"></div></div>
    <div id="wrap" class="grid_1200">
        @include('page.header')
        @yield('wrap-content')
        <section class="container main-content">
            <div class="row">
                <div class="col-md-9">
                    @yield('content')
                    @include('page.slide-bar')
                </div>
            </div><!-- End row -->
        </section><!-- End container -->

        @include('page.footer')
    </div><!-- End wrap -->
    <div class="go-up"><i class="icon-chevron-up"></i></div>

<!-- js -->
<script src="{{ url('public/page/js/jquery.min.js') }}"></script>
<script src="{{ url('public/page/js/jquery-ui-1.10.3.custom.min.js') }}"></script>
<script src="{{ url('public/page/js/jquery.easing.1.3.min.js') }}"></script>
<script src="{{ url('public/page/js/html5.js') }}"></script>
<script src="{{ url('public/page/js/twitter/jquery.tweet.js') }}"></script>
<script src="{{ url('public/page/js/jflickrfeed.min.js') }}"></script>
<script src="{{ url('public/page/js/jquery.inview.min.js') }}"></script>
<script src="{{ url('public/page/js/jquery.tipsy.js') }}"></script>
<script src="{{ url('public/page/js/tabs.js') }}"></script>
<script src="{{ url('public/page/js/jquery.flexslider.js') }}"></script>
<script src="{{ url('public/page/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ url('public/page/js/jquery.carouFredSel-6.2.1-packed.js') }}"></script>
<script src="{{ url('public/page/js/jquery.scrollTo.js') }}"></script>
<script src="{{ url('public/page/js/jquery.nav.js') }}"></script>
<script src="{{ url('public/page/js/tags.js') }}"></script>
<script src="{{ url('public/page/js/jquery.bxslider.min.js') }}"></script>
<script src="{{ url('public/page/js/custom.js') }}"></script>
<!-- End js -->

</body>
</html>