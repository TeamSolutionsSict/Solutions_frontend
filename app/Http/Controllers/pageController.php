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

//    public function getQuestionDetails($id){
//        $post=PostModel::select('*')
//            ->join('tb_user', 'tb_user.username', '=', 'tb_post.username')
//            ->where('tb_post.id',$id)->get()->toArray();
//        $now = new DateTime(date('Y-m-d H:i:s'));
//        $ref = new DateTime($post[0]['timepost']);
//        $diff = $now->diff($ref);
//        // printf('%d days, %d hours, %d minutes', $diff->d, $diff->h, $diff->i);
//        $post[0]['timepost']=$diff->d." days, ".$diff->h." hours ".$diff->i." minutes ago";
//
//        $allKey=PostkeyModel::select('*')->where('id_post',$id)->get()->toArray();
//        $post[0]['keyWordName']= array();
//        foreach ($allKey as $val) {
//            $keyname=KeywordModel::find($val['id_keyword']);
//
//            $post[0]['keyWordName'][]=$keyname->keyword;
//        }
//        $comment=CommentModel::select('tb_comment.*','tb_user.avatar')
//            ->join('tb_user', 'tb_user.username', '=', 'tb_comment.username')
//            ->where('tb_comment.id_post',$id)
//            ->get()
//            ->toArray();
//        foreach ($comment as $key=>$value) {
//            // $now = new DateTime(date('Y-m-d H:i:s'));
//            $ref = new DateTime($value['time_cmt']);
//            $diff = $now->diff($ref);
//            $comment[$key]['time_cmt']=$diff->d." days, ".$diff->h." hours ".$diff->i." minutes ago";
//        }
//        return view('page.question_details', compact('post','comment'));
//    }

//    public function postAddQuestion(Request $request){
//        //Lấy thời gian hiện tại
//        $date = new Datetime();
//        //Lấy username
//        $username = 'cuongdeptrai';
//        //id_post = username + ngày giờ hiện tại + random 8 ký tự
//        $ahihi = $username.$date->format('d-m-Y').Str::random(8);
//        $idPost = Hash::make($ahihi);
//
//        //Validator form nhập vào
//        $rules = [
//            'title' => 'required',
//            'content' => 'required',
//        ];
//        $validator = $request->validate($rules);
//
//        $keyArr = explode(',',$request->question_tags);
//        foreach ($keyArr as $key => $value) {
//            $keyword = KeywordModel::where('keyword','=',$value)->get()->toArray();
//            //dd($keyword[0]['id']);
//
//            if(count($keyword) == 0){
//                $keyword = new KeywordModel();
//                $keyword->keyword = $value;
//                $keyword->status = 1;
//                $keyword->save();
//
//                $keypost = new PostkeyModel();
//                $keypost->id_post = $idPost;
//                $keypost->id_keyword = $keyword->id;
//                $keypost->save();
//            }else{
//                $keypost = new PostkeyModel();
//                $keypost->id_post = $idPost;
//                // dd($keyword[0]['id']);
//                $keypost->id_keyword = $keyword[0]['id'];
//                $keypost->save();
//            }
//        }
//
//        $post = new PostModel();
//        $post->id = $idPost;
//        $post->title = $request->title;
//        $post->content = $request->content;
//        $post->username = $username;
//        $post->timepost = $date;
//        $post->status = 1;
//        $post->save();
//
//        return redirect()->back()->with(['flag'=>'success','message'=>'Thành công !']);
//
//    }

//    Question Details
    public function getQuestionDetails(){
        return view('page.question_details');
    }
//    Profile
    public function getProfile(){
        return view('page.profile');
    }
    //User (xem trang cá nhân cửa người khá - theo Username)
    public function getUser(){
        return view('page.user');
    }
    //contact_us
    public function getContact(){
        return view('page.contact_us');
    }
}
