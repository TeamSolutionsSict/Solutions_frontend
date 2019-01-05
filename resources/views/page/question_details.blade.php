@extends('page.master')

@section ('section-warp')
    <div class="section-warp ask-me">

    </div><!-- End section-warp -->
@endsection

@section('content')

    {{--<article class="question single-question question-type-normal">--}}
        {{--<h2>--}}
            {{--<a href="single_question.html">{{$post[0]['title']}}</a>--}}
        {{--</h2>--}}
        {{--<a class="question-report red-button" href="#">Report</a>--}}
        {{--<div class="question-type-main"><a href="#">Votes</a></div>--}}
        {{--<div class="question-inner">--}}
            {{--<div class="clearfix"></div>--}}
            {{--<div class="question-desc">--}}
                {{--{!! $post[0]['content'] !!}--}}
            {{--</div>--}}
            {{--<div class="question-details">--}}
                {{--<span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>--}}
                {{--<span class="question-favorite"><i class="icon-star"></i>5</span>--}}
            {{--</div>--}}
            {{--<span class="question-date"><i class="icon-time"></i>{{$post[0]['timepost']}}</span>--}}
            {{--<span class="question-comment"><a href="#"><i class="icon-comment"></i>{{count($comment)}} Answer</a></span>--}}
            {{--<a class="question-reply" href="#"><i class="icon-heart"></i>{{$post[0]['votes']}} votes</a>--}}
            {{--<span class="question-view"><i class="icon-user"></i>{{$post[0]['view']}} views</span>--}}
            {{--<ul class="single-question-vote">--}}
                {{--<li><a href="#" class="single-question-vote-down" title="Dislike"><i class="icon-thumbs-down"></i></a></li>--}}
                {{--<li><a href="#" class="single-question-vote-up" title="Like"><i class="icon-thumbs-up"></i></a></li>--}}
            {{--</ul>--}}
            {{--<div class="clearfix"></div>--}}
            {{--<br>--}}
            {{--@foreach ($post[0]['keyWordName'] as $value)--}}
                {{--<span class="question-category"><a href="#"><i class="icon-folder-close"></i>{{$value}}</a></span>--}}
            {{--@endforeach--}}
        {{--</div>--}}
    {{--</article>--}}

    {{--<div id="commentlist" class="page-content">--}}
        {{--<div class="boxedtitle page-title"><h2>Answers ( <span class="color">{{count($comment)}} </span> )</h2></div>--}}
        {{--<ol class="commentlist clearfix">--}}
            {{--@foreach ($comment as $value)--}}
                {{--<li class="comment">--}}
                    {{--<div class="comment-body comment-body-answered clearfix">--}}
                        {{--<div class="avatar"><img alt="" src="{{$value['avatar']}}"></div>--}}
                        {{--<div class="comment-text">--}}

                            {{--<div class="author clearfix">--}}
                                {{--<div class="comment-author"><a href="#">{{$value['username']}}</a></div>--}}
                                {{--<div class="comment-vote">--}}
                                    {{--<ul class="question-vote">--}}
                                        {{--<li><a href="#" class="question-vote-up" title="Like"></a></li>--}}
                                        {{--<li><a href="#" class="question-vote-down" title="Dislike"></a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                                {{--<span class="question-vote-result">{{$value['votes']}}</span>--}}
                                {{--<div class="comment-meta">--}}
                                    {{--<div class="date"><i class="icon-time"></i>{{$value['time_cmt']}}</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="text">--}}
                                {{--{!! $value['content'] !!}--}}
                            {{--</div>--}}
                            {{--@if($value['best'])--}}
                                {{--<div class="question-answered question-answered-done"><i class="icon-ok"></i>Best Answer</div>--}}
                            {{--@endif--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li>--}}
            {{--@endforeach--}}

        {{--</ol><!-- End commentlist -->--}}
    {{--</div>--}}


    <article class="question single-question question-type-normal">
        <h2>
            <a href="single_question.html">This Is My first Question</a>
        </h2>
        <a class="question-report red-button" href="#">Report</a>
        <div class="question-type-main"><a href="#">Votes</a></div>
        <div class="question-inner">
            <div class="clearfix"></div>
            <div class="question-desc">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat. Donec congue commodo mi, sed commodo velit fringilla ac. Fusce placerat venenatis mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ornare, dolor a aliquet rutrum, dolor turpis condimentum leo, a semper lacus purus in felis. Quisque blandit posuere turpis, eget auctor felis pharetra eu .</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat. Donec congue commodo mi, sed commodo velit fringilla ac. Fusce placerat venenatis mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ornare, dolor a aliquet rutrum, dolor turpis condimentum leo, a semper lacus purus in felis. Quisque blandit posuere turpis, eget auctor felis pharetra eu .</p>
            </div>
            <div class="question-details">
                <span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>
                <span class="question-favorite"><i class="icon-star"></i>5</span>
            </div>
            <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
            <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
            <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
            <a class="question-reply" href="#"><i class="icon-heart"></i>4 votes</a>
            <span class="question-view"><i class="icon-user"></i>70 views</span>
            <span class="single-question-vote-result">+22</span>
            <ul class="single-question-vote">
                <li><a href="#" class="single-question-vote-down" title="Dislike"><i class="icon-thumbs-down"></i></a></li>
                <li><a href="#" class="single-question-vote-up" title="Like"><i class="icon-thumbs-up"></i></a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </article>


    <div id="commentlist" class="page-content">
        <div class="boxedtitle page-title"><h2>Answers ( <span class="color">5</span> )</h2></div>
        <ol class="commentlist clearfix">
            <li class="comment">
                <div class="comment-body comment-body-answered clearfix">
                    <div class="avatar"><img alt="" src="../../ask-me/images/demo/admin.jpg"></div>
                    <div class="comment-text">
                        <div class="author clearfix">
                            <div class="comment-author"><a href="#">admin</a></div>
                            <div class="comment-vote">
                                <ul class="question-vote">
                                    <li><a href="#" class="question-vote-up" title="Like"></a></li>
                                    <li><a href="#" class="question-vote-down" title="Dislike"></a></li>
                                </ul>
                            </div>
                            <span class="question-vote-result">+1</span>
                            <div class="comment-meta">
                                <div class="date"><i class="icon-time"></i>January 15 , 2014 at 10:00 pm</div>
                            </div>

                        </div>
                        <div class="text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat.</p>
                        </div>
                        <div class="question-answered question-answered-done"><i class="icon-ok"></i>Best Answer</div>
                    </div>
                </div>
            </li>
            <li class="comment">
                <div class="comment-body clearfix">
                    <div class="avatar"><img alt="" src="../../ask-me/images/demo/avatar.png"></div>
                    <div class="comment-text">
                        <div class="author clearfix">
                            <div class="comment-author"><a href="#">2code</a></div>
                            <div class="comment-vote">
                                <ul class="question-vote">
                                    <li><a href="#" class="question-vote-up" title="Like"></a></li>
                                    <li><a href="#" class="question-vote-down" title="Dislike"></a></li>
                                </ul>
                            </div>
                            <span class="question-vote-result">+1</span>
                            <div class="comment-meta">
                                <div class="date"><i class="icon-time"></i>January 15 , 2014 at 10:00 pm</div>
                            </div>

                        </div>
                        <div class="text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat.</p>
                        </div>
                    </div>
                </div>
            </li>
        </ol>
    </div>



@endsection
