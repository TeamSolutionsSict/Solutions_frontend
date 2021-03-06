@extends('page.master')

@section ('section-warp')
    <div class="section-warp ask-me">

    </div><!-- End section-warp -->
@endsection

@section('content')

    <div class="page-content">

        <div class="form-style form-style-4">
            {{----}}
            {{--ĐÂY LÀ XEM PROFILE CỦA NGƯỜI DÙNG KHÁC (xem theo Username), KHÔNG THỂ CHỈNH SỬA--}}
            <div class="row">
                <div class="user-profile">
                    <div class="col-md-12">

                        <h2>User name</h2>
                        <div class="user-profile-img"><img width="60" height="60" src="{{url(asset('page/images/demo/admin.jpg'))}}" alt="admin"></div>
                        <div class="ul_list ul_list-icon-ok about-user">
                            <ul>
                                <li>Name : <span>Đây là tên</span></li>
                                <li>Email : <span>abc@xyz.com</span></li>
                                <li>Phone : <span>0123 456 789</span></li>
                            </ul>
                        </div>
                        <hr>
                    </div><!-- End col-md-12 -->
                </div><!-- End user-profile -->
            </div><!-- End row -->

            {{----}}

            <br><br>
            <div class="page-content page-content-user-profile">
                <div class="user-profile-widget">
                    <h2 style="color: #fdb655">(Username) Stats</h2>
                    <div class="ul_list ul_list-icon-ok">
                        <ul>
                            <li><i class="icon-question-sign"></i><a href="user_questions.html">Total Of Questions<span> ( <span>30</span> ) </span></a></li>
                            <li><i class="icon-comment"></i><a href="user_answers.html">Answered Questions<span> ( <span>10</span> ) </span></a></li>
                            <li><i class="icon-question"></i><a href="user_favorite_questions.html">Unanswered Questions<span> ( <span>3</span> ) </span></a></li>
                            <li><i class="icon-remove"></i><a href="user_favorite_questions.html">Reported Questions<span> ( <span>2</span> ) </span></a></li>
                        </ul>
                    </div>
                </div><!-- End user-profile-widget -->
            </div><!-- End page-content -->
            <br><br>
            <div class="page-content page-content-user">
                <div class="user-profile-widget"><br>
                    <h2 style="color: red">Total Of Questions/- Answered Questions/- Unanswered Questions/- Reported Questions</h2><hr>
                    <div class="user-questions">
                        <article class="question user-question">
                            <h3>
                                <a href="single_question.html">This is my first Question</a>
                            </h3>
                            <a class="question-report blue-button" href="{{route('get.QuestionDetails')}}">Details</a>
                            <!-- <div class="question-type-main"></div> -->
                            <div class="question-content">
                                <div class="question-bottom">
                                    <div class="question-answered question-answered-done"><i class="icon-question"></i>In progress</div>
                                    <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                    <span class="question-date"><i class="icon-time"></i>15 secs ago</span>
                                    <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answers</a></span>
                                    <a class="question-reply" href="#"><i class="icon-heart"></i>4 votes</a>
                                    <span class="question-view"><i class="icon-user"></i>70 views</span>
                                </div>
                            </div>
                        </article>
                        <article class="question user-question">
                            <h3>
                                <a href="single_question_poll.html">This Is my second Question</a>
                            </h3>
                            <a class="question-report blue-button" href="{{route('get.QuestionDetails')}}">Details</a>
                            <!-- <div class="question-type-main"><i class="icon-signal"></i>Poll</div> -->
                            <div class="question-content">
                                <div class="question-bottom">
                                    <div class="question-answered"><i class="icon-flag"></i>Reported</div>
                                    <span class="question-category"><a href="#"><i class="icon-folder-close"></i>CSS</a></span>
                                    <span class="question-date"><i class="icon-time"></i>15 secs ago</span>
                                    <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answers</a></span>
                                    <a class="question-reply" href="#"><i class="icon-heart"></i>4 votes</a>
                                    <span class="question-view"><i class="icon-user"></i>70 views</span>
                                </div>
                            </div>
                        </article>
                        <article class="question user-question">
                            <h3>
                                <a href="single_question.html">This is my third Question</a>
                            </h3>
                            <a class="question-report blue-button" href="{{route('get.QuestionDetails')}}">Details</a>
                            <!-- <div class="question-type-main"><i class="icon-question-sign"></i>Question</div> -->
                            <div class="question-content">
                                <div class="question-bottom">
                                    <div class="question-answered question-answered-done"><i class="icon-ok"></i>Solved</div>
                                    <span class="question-category"><a href="#"><i class="icon-folder-close"></i>HTML</a></span>
                                    <span class="question-date"><i class="icon-time"></i>15 secs ago</span>
                                    <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answers</a></span>
                                    <a class="question-reply" href="#"><i class="icon-heart"></i>4 votes</a>
                                    <span class="question-view"><i class="icon-user"></i>70 views</span>
                                </div>
                            </div>
                        </article>

                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="height_20"></div>
    {{--Chuyển trang--}}
    <div class="pagination">
        <a href="#" class="prev-button"><i class="icon-angle-left"></i></a>
        <span class="current">1</span>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <span>...</span>
        <a href="#">11</a>
        <a href="#">12</a>
        <a href="#">13</a>
        <a href="#" class="next-button"><i class="icon-angle-right"></i></a>
    </div><!-- End pagination -->

@endsection
