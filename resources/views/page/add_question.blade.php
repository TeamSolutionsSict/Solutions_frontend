@extends('page.master')

@section('wrap-content')
<div class="breadcrumbs">
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Ask Question</h1>
            </div>
            <div class="col-md-12">
                <div class="crumbs">
                    <a href="#">Home</a>
                    <span class="crumbs-span">/</span>
                    <a href="#">Pages</a>
                    <span class="crumbs-span">/</span>
                    <span class="current">Ask Question</span>
                </div>
            </div>
        </div><!-- End row -->
    </section><!-- End container -->
</div>
@endsection

@section('content')

    <div class="page-content ask-question">
        <div class="boxedtitle page-title"><h2>Ask Question</h2></div>

        <div class="form-style form-style-3" id="question-submit">
            <form>
                <div class="form-inputs clearfix">
                    <p>
                        <label class="required">Question Title<span>*</span></label>
                        <input type="text" id="question-title">
                        <span class="form-description">Please choose an appropriate title for the question to answer it even easier .</span>
                    </p>
                    <p>
                        <label>Tags</label>
                        <input type="text" class="input" name="question_tags" id="question_tags" data-seperator=",">
                        <span class="form-description">Please choose  suitable Keywords Ex : <span class="color">question , poll</span> .</span>
                    </p>
                    <label class="required">Details<span>*</span></label>
                </div>
                <div id="form-textarea" style="margin-top:10px;">
                    <p>
                        <textarea id="editor1" aria-required="true" ></textarea>
                    </p>
                </div>
                <script src="public/page/ckeditor/ckeditor.js"></script>
                <script> CKEDITOR.replace('editor1'); </script>
                <p class="form-submit">
                    <input type="submit" id="publish-question" value="Publish Your Question" class="button color small submit">
                </p>
            </form>
        </div>
    </div>

@endsection
