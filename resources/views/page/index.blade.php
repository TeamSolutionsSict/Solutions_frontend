@extends('page.master')
@section('content')
    {{-- <div class="section-warp ask-me">
        <div class="container clearfix">
            <div class="box_icon box_warp box_no_border box_no_background" box_border="transparent" box_background="transparent" box_color="#FFF">
                <div class="row">
                    <div class="col-md-3">
                        <h2>Welcome to Ask me</h2>
                        <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque.</p>
                        <div class="clearfix"></div>
                        <a class="color button dark_button medium" href="#">About Us</a>
                        <a class="color button dark_button medium" href="#">Join Now</a>
                    </div>
                    <div class="col-md-9">
                        <form class="form-style form-style-2">
                            <p>
                                <textarea rows="4" id="question_title" onfocus="if(this.value=='Ask any question and you be sure find your answer ?')this.value='';" onblur="if(this.value=='')this.value='Ask any question and you be sure find your answer ?';">Ask any question and you be sure find your answer ?</textarea>
                                <i class="icon-pencil"></i>
                                <span class="color button small publish-question">Ask Now</span>
                            </p>
                        </form>
                    </div>
                </div><!-- End row -->
            </div><!-- End box_icon -->
        </div><!-- End container -->
    </div><!-- End section-warp --> --}}


                {{--START CONTENT--}}

                {{--Star content--}}

                <div class="tabs-warp question-tab">
                    <ul class="tabs">
                        <li class="tab"><a href="#" class="current">Recent Questions</a></li>
                        <li class="tab"><a href="#">Most Responses</a></li>
                        <li class="tab"><a href="#">Recently Answered</a></li>
                        <li class="tab"><a href="#">No answers</a></li>
                    </ul>
                    <div class="tab-inner-warp">
                        <div class="tab-inner">

                            <article class="question question-type-normal">
                                <h2>
                                    <a href="question_details.html">This is my first Question</a>
                                </h2>
                                <a class="question-report red-button" href="#">Report</a>
                                <div class="question-type-main"><a href="{{ route('get.QuestionDetails') }}">Answer</a></div>
                                <div class="question-author">
                                    <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../../ask-me/images/demo/avatar.png"></a>
                                </div>
                                <div class="question-inner">
                                    <div class="clearfix"></div>
                                    <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                    <div class="question-details">
                                        <span class="question-answered question-answered-done"><i class="icon-ok"></i>Solved</span>
                                        {{--<span class="question-favorite"><i class="icon-star"></i>5</span>--}}
                                    </div>
                                    <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                    <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                    <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                    <a class="question-reply" href="#"><i class="icon-heart"></i>4 votes</a>
                                    <span class="question-view"><i class="icon-user"></i>70 views</span>
                                    <div class="clearfix"></div>
                                </div>
                            </article>
                            <article class="question question-type-normal">
                                <h2>
                                    <a href="question_details.html">This is my first Question</a>
                                </h2>
                                <a class="question-report red-button" href="{{route('get.QuestionDetails')}}">Report</a>
                                <div class="question-type-main"><a href="#">Answer</a></div>
                                <div class="question-author">
                                    <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../../ask-me/images/demo/avatar.png"></a>
                                </div>
                                <div class="question-inner">
                                    <div class="clearfix"></div>
                                    <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                    <div class="question-details">
                                        <span class="question-answered"><i class="icon-flag"></i>Reported</span>
                                        {{--<span class="question-favorite"><i class="icon-star"></i>5</span>--}}
                                    </div>
                                    <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                    <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                    <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                    <a class="question-reply" href="#"><i class="icon-heart"></i>4 votes</a>
                                    <span class="question-view"><i class="icon-user"></i>70 views</span>
                                    <div class="clearfix"></div>
                                </div>
                            </article>
                            <article class="question question-type-normal">
                                <h2>
                                    <a href="question_details.html">This is my first Question</a>
                                </h2>
                                <a class="question-report red-button" href="#">Report</a>
                                <div class="question-type-main"><a href={{route('get.QuestionDetails')}}">Answer</a></div>
                                <div class="question-author">
                                    <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../../ask-me/images/demo/avatar.png"></a>
                                </div>
                                <div class="question-inner">
                                    <div class="clearfix"></div>
                                    <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                    <div class="question-details">
                                        <span class="question-answered"><i class="icon-ok"></i>In progress</span>
                                        {{--<span class="question-favorite"><i class="icon-star"></i>5</span>--}}
                                    </div>
                                    <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                    <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                    <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                    <a class="question-reply" href="#"><i class="icon-heart"></i>4 votes</a>
                                    <span class="question-view"><i class="icon-user"></i>70 views</span>
                                    <div class="clearfix"></div>
                                </div>
                            </article>

                            <a href="#" class="load-questions"><i class="icon-refresh"></i>Load More Questions</a>
                        </div>
                    </div>

                </div><!-- End page-content -->

                {{--End content--}}

                {{--END CONTENT--}}

            </div><!-- End main -->
            <aside class="col-md-3 sidebar">
                <div class="widget widget_stats">
                    <a href="{{route('get.Terms')}}" title=""><i class="icon-plus-sign-alt"></i> Add Question </a>
                </div>

                {{--MENU--}}
                <div class="widget widget_stats">
                    <div class="ul_list ul_list-icon-ok">
                        <ul>
                            <li>
                                <a href="{{route('get.Home')}}">Home</a>
                            </li>
                            <li class="ask_question">
                                <a href="{{route('get.Terms')}}">Ask Question</a>
                            </li>
                            <li>
                                <a href="{{route('get.User')}}">User</a>
                            </li>

                            <li><a href="{{route('get.Contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

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
    @endsection