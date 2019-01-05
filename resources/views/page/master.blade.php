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
    <section class="container main-content">
            <div class="row">
                <div class="col-md-9">
        
        @yield('content')
                </div>
    </div><!-- End main -->
    <aside class="col-md-3 sidebar">
        {{--NỘI DUNG NÀY CHỈ HIỂN THỊ KHI NGƯỜI DÙNG ĐÃ ĐĂNG NHẬP--}}
        <div class="widget widget_stats">
            <h3 class="widget_title">Stats</h3>
            <div class="ul_list ul_list-icon-ok">
                <a style="color: white; width: 100%; text-align: center" href="#" class="button large lime-green-button">Add Questions</a>
                <ul>
                    <li><i class="icon-question-sign"></i><a href="#">Total Of Questions<span> ( <span>30</span> ) </span></a></li>
                    <li><i class="icon-comment"></i><a href="#">Answered Questions<span> ( <span>10</span> ) </span></a></li>
                    <li><i class="icon-question"></i><a href="#">Unanswered Questions<span> ( <span>3</span> ) </span></a></li>
                    <li><i class="icon-remove"></i><a href="#">Reported Questions<span> ( <span>2</span> ) </span></a></li>
                </ul>
            </div>
        </div>
        {{----}}

        <div class="widget widget_social">
            <h3 class="widget_title">Find Us</h3>
            <ul>
                <li class="rss-subscribers">
                    <a href="#" target="_blank">
                        <strong>
                            <i class="icon-rss"></i>
                            <span>Subscribe</span><br>
                            <small>To RSS Feed</small>
                        </strong>
                    </a>
                </li>
                <li class="facebook-fans">
                    <a href="#" target="_blank">
                        <strong>
                            <i class="social_icon-facebook"></i>
                            <span>5,000</span><br>
                            <small>People like it</small>
                        </strong>
                    </a>
                </li>
                <li class="twitter-followers">
                    <a href="#" target="_blank">
                        <strong>
                            <i class="social_icon-twitter"></i>
                            <span>3,000</span><br>
                            <small>Followers</small>
                        </strong>
                    </a>
                </li>
                <li class="youtube-subs">
                    <a href="#" target="_blank">
                        <strong>
                            <i class="icon-play"></i>
                            <span>1,000</span><br>
                            <small>Subscribers</small>
                        </strong>
                    </a>
                </li>
            </ul>
        </div>

        <div class="widget widget_tag_cloud">
            <h3 class="widget_title">Tags</h3>
            <a href="#">projects</a>
            <a href="#">Portfolio</a>
            <a href="#">Wordpress</a>
            <a href="#">Html</a>
            <a href="#">Css</a>
            <a href="#">jQuery</a>
            <a href="#">2code</a>
            <a href="#">vbegy</a>
        </div>

    </aside><!-- End sidebar -->
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