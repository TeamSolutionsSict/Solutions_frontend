<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;

class pageController extends Controller
{
    //PHẦN NÀY CỦA CHÂU
    //trang chủ
    public function getHome(){
        return view('page.index');
    }
    //điều khoản bắt buộc trước khi thêm câu hỏi
    public function getTerms(){
        return view('page.terms');
    }
    //Add question
    public function getAddQuestion(){
        return view('page.add_question');
    }

    public function postAddQuestion(Request $request){
        //Hash id post hihi
        $date = new Datetime();

        $idPost = $date->format('d-m-Y').'1'.'nqcuong';
        //Date+index+admin
        dd(Hash::make($idPost));
    }

    //Question Details
    public function getQuestionDetails(){
        return view('page.question_details');
    }
    //User
    public function getUser(){
        return view('page.user');
    }
    //contact_us
    public function getContact(){
        return view('page.contact_us');
    }
}
