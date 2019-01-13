<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Solutions</title>

    <meta name="description" content="Ask me Responsive Questions and Answers Template">
    <meta name="author" content="2code.info">

    <meta name="description" content="Ask me something">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('page/style.css') }}">

    <!-- Skins -->
    <link rel="stylesheet" href="{{ asset('page/css/skins/orange.css') }}">

    <!-- Responsive Style -->
    <link rel="stylesheet" href="{{ asset('page/css/responsive.css') }}">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('page/images/favicon.png') }}">
    <!-- PrismJS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('js/prism/prism.css') }}">

</head>
<body>

<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">
    {{--HEADER--}}
    @include('page.header')
    {{--END HEADER--}}

    {{--SLIDE--}}
    @yield ('section-warp')
    {{--END SLIDE--}}

    <section class="container main-content">
        <div class="row">
            <div class="col-md-9">

                {{--START CONTENT--}}
                @yield('content')
                {{--END CONTENT--}}

            </div><!-- End main -->

            {{--SLIDE BAR--}}
            @include ('page.slide-bar')
            {{----}}

        </div><!-- End row -->
    </section><!-- End container -->

    {{--FOOTER--}}
    @include('page.footer')
    {{--END FOOTER--}}

</div><!-- End wrap -->

<div class="go-up"><i class="icon-chevron-up"></i></div>

<!-- js -->
<script src="{{ asset('page/js/jquery.min.js') }}"></script>
<script src="{{ asset('page/js/jquery-ui-1.10.3.custom.min.js') }}"></script>
<script src="{{ asset('page/js/jquery.easing.1.3.min.js') }}"></script>
<script src="{{ asset('page/js/html5.js') }}"></script>
<script src="{{ asset('page/js/twitter/jquery.tweet.js') }}"></script>
<script src="{{ asset('page/js/jflickrfeed.min.js') }}"></script>
<script src="{{ asset('page/js/jquery.inview.min.js') }}"></script>
<script src="{{ asset('page/js/jquery.tipsy.js') }}"></script>
<script src="{{ asset('page/js/tabs.js') }}"></script>
<script src="{{ asset('page/js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('page/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('page/js/jquery.carouFredSel-6.2.1-packed.js') }}"></script>
<script src="{{ asset('page/js/jquery.scrollTo.js') }}"></script>
<script src="{{ asset('page/js/jquery.nav.js') }}"></script>
<script src="{{ asset('page/js/tags.js') }}"></script>
<script src="{{ asset('page/js/jquery.bxslider.min.js') }}"></script>
<script src="{{ asset('page/js/custom.js') }}"></script>
<script src="{{ asset('js/prism/prism.js') }}"></script>
<!-- End js -->

</body>

<!-- Mirrored from 2code.info/demo/html/ask-me-html/orange/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jan 2019 04:27:15 GMT -->
</html>
