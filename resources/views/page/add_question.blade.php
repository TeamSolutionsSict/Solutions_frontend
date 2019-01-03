@extends('master-page')
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
                <div id="form-textarea">
                    <p>
                        <textarea id="editor1" aria-required="true" ></textarea>
                        <span class="form-description">Type the description thoroughly and in detail .</span>
                    </p>
                </div>
                <script src="ckeditor/ckeditor.js"></script>
                <script> CKEDITOR.replace('editor1'); </script>
                <p class="form-submit">
                    <input type="submit" id="publish-question" value="Publish Your Question" class="button color small submit">
                </p>
            </form>
        </div>
    </div>

@endsection
