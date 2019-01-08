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

    {{--=================================================--}}


    <article class="question single-question question-type-normal">
        <div class="about-author clearfix">
            <div class="author-image avtuser">
                <a href="#" original-title="admin" class="tooltip-n"><img alt="" src="../../ask-me/images/demo/admin.jpg"></a>
            </div>
            <div class="author-bio avtuser">
                <div class="comment-author"><a href="#"><h4>User Name</a></div>
                <div class="comment-vote">
                    <ul class="question-vote">
                        <li><a href="#" class="question-vote-up" title="Like"></a></li>
                        <li><span class="question-vote-result">+1</span></li>
                        <li><a href="#" class="question-vote-down" title="Dislike"></a></li>
                    </ul>
                </div>
                <a class="comment-reply" data-toggle="collapse" href="#answer"><i class="icon-reply"></i>Answer</a>
            </div>
        </div>
            <h2>
                <a href="single_question.html">Tại sao code em hông chạy!?</a>
            </h2>
            <a class="question-report red-button" href="#">Report</a>
            <div class="question-type-main"><a href="#">Votes</a></div>
            <div class="question-inner">
                <div class="question-desc">
                    <p>Em css cho web site phim Nhật của em,nhưng nó ứ chịu chạy mấy anh ạ? ahuhu</p>
                    <pre><code class="language-css">
    body {
        font: 100% Helvetica, sans-serif;
        color: #333;
    }
    .box {
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        -ms-border-radius: 10px;
        border-radius: 10px;
    }
                        </code></pre>
                    <p>Đây là code js nè,ai giúp em đi!! .</p>
                    <pre>
                    <code class="language-js">
    var rows = prompt("How many rows for your multiplication table?");
    var cols = prompt("How many columns for your multiplication table?");
    if(rows == "" || rows == null)
        rows = 10;
    if(cols== "" || cols== null)
        cols = 10;
    createTable(rows, cols);
    function createTable(rows, cols)
    document.write(output);
    }
                    </code>
                    </pre>
                </div>
                <div class="question-details">
                    <span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>
                    {{--<span class="question-favorite"><i class="icon-star"></i>5</span>--}}
                </div>
                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>web</a></span>
                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                <span class="question-view"><i class="icon-user"></i>70 views</span>
                <span class="single-question-vote-result">+22</span>
                <ul class="single-question-vote">
                    <li><a href="#" class="single-question-vote-down" title="Dislike"><i class="icon-thumbs-down"></i></a></li>
                    <li><a href="#" class="single-question-vote-up" title="Like"><i class="icon-thumbs-up"></i></a></li>
                </ul>
                <div class="clearfix"></div>
                    <div id="answer" style="height: 100%; width: 100px; background-color: red;" class="">

                    </div>
            </div>
        </article>


    <div id="commentlist" class="page-content">
        <div class="boxedtitle page-title"><h2>Answers ( <span class="color">1</span> )</h2></div>
        <ol class="commentlist clearfix">
            <li class="comment">
                <div class="comment-body comment-body-answered clearfix">
                    <div class="avatar"><img alt="" src="../../ask-me/images/demo/admin.jpg"></div>
                    <div class="comment-text">
                        <div class="author clearfix">
                            <div class="comment-author"><a href="#">Trùm JAV(a)</a></div>
                            <div class="question-vote">
                                <ul class="question-vote">
                                    <li><a href="#" class="question-vote-up" title="Like"></a></li>
                                    <li><span class="question-vote-result">+1</span></li>
                                    <li><a href="#" class="question-vote-down" title="Dislike"></a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="text">
                            <p>Đây là code php nè,thêm vào tý cho mặn</p>
                            <pre>
                            <code class="language-php">
    namespace Vendor\Model;

    class Foo
    {
        const VERSION = '1.0';
        const DATE_APPROVED = '2012-06-01';
    }
                            </code>
                            </pre>
                        </div>
                        <div class="question-answered question-answered-done"><i class="icon-ok"></i>Best Answer</div>
                        <div class="comment-meta">
                                <div class="date"><i class="icon-time"></i>January 15 , 2014 at 10:00 pm</div>
                        </div>
                    </div>
                </div>
            </li>
        </ol>
    </div>
    <div class="page-content ask-question" id="answer">
        <div class="boxedtitle page-title"><h2>Your answer</h2></div>

        <div class="form-style form-style-3" id="question-submit">
            <form action="" method="POST">
                <div id="form-textarea" style="margin-top:10px;">
                    <p>
                        <textarea id="editor1" aria-required="true" name="content"></textarea>
                    </p>
                </div>
                <script src="{{asset('page/ckeditor/ckeditor.js')}}"></script>
                <script> CKEDITOR.replace('editor1'); </script>
                <p class="form-submit">
                    <input type="submit" id="publish-question" value="Post Answer Your" class="button color small submit">
                </p>
            </form>
        </div>
    </div>

    {{--cuộn trang--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("a").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){
                        window.location.hash = hash;
                    });
                }
            });
        });
    </script>
    {{----}}

@endsection
