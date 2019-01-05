<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Datetime;
use Hash;
use Auth;
use Validator;
use Session;

use App\KeywordModel;
use App\PostkeyModel;
use App\PostModel;

class pageController extends Controller
{
    public function getHome(){
        return view('page.index');
    }

    public function getTerms(){
        return view('page.terms');
    }

    public function getAddQuestion(){
        return view('page.add_question');
    }

    public function postAddQuestion(Request $request){
        //Lấy thời gian hiện tại
        $date = new Datetime();
        //Lấy username
        $username = 'cuongdeptrai';
        //id_post = username + ngày giờ hiện tại + random 8 ký tự
        $ahihi = $username.$date->format('d-m-Y').Str::random(8);
        $idPost = Hash::make($ahihi);

        //Validator form nhập vào
        $rules = [
            'title' => 'required',
            'content' => 'required',
        ];
        $validator = $request->validate($rules);

        $keyArr = explode(',',$request->question_tags);
        foreach ($keyArr as $key => $value) {
            $keyword = KeywordModel::where('keyword','=',$value)->get()->toArray();
            //dd($keyword[0]['id']);

            if(count($keyword) == 0){
                $keyword = new KeywordModel();
                $keyword->keyword = $value;
                $keyword->status = 1;
                $keyword->save();

                $keypost = new PostkeyModel();
                $keypost->id_post = $idPost;
                $keypost->id_keyword = $keyword->id;
                $keypost->save();
            }else{
                $keypost = new PostkeyModel();
                $keypost->id_post = $idPost;
                // dd($keyword[0]['id']);
                $keypost->id_keyword = $keyword[0]['id'];
                $keypost->save();
            }
        }

        $post = new PostModel();
        $post->id = $idPost;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->username = $username;
        $post->timepost = $date;
        $post->status = 1;
        $post->save();

        return redirect()->back()->with(['flag'=>'success','message'=>'Thành công !']);

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
