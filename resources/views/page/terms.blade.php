@extends('master-page')
@section('content')

    <div class="page-content ask-question">
        <div class="boxedtitle page-title"><h2>Đây là điều khoản</h2></div>
        <p>Nội dung điều khoản đang để trống</p>

        <h2>Cứ tích đã đọc và đồng ý là được nhé :v</h2>
        <hr>
        <br>
        <div class="row">
            <div class="col-md-10">
                <input type="checkbox" name="agree" id="agree"> I agree to the terms of use.
            </div>
            <div class="col-md-2">
                <a href="{{ route('getAddQuestion') }}" title=""><input type="submit" id="publish-question" value="Continue" class="button color small submit"></a>
            </div>
        </div>

        <div class="form-style form-style-3" id="question-submit">

        </div>
    </div>

@endsection
