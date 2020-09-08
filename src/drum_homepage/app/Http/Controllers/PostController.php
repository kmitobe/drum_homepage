<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers;
class PostController extends Controller
{
    //
    public function index(){

        return view('post');
    }

    // 投稿機能
    public function create(Request $request){
        if ($request->title || $request->body){

            $post = new Post;
            $post->link_id = 1;
            $post->title = $request->title;
            $post->body = $request->body;

            $post->save();
            $message = "登録完了しました";
            return redirect('/list');
            // return route('index');
            // return view('list');
            // $app = app()->make('ListController');
            // $app->index();
        }else{
            $message = "登録されていません";
            // return route('index');
            return view('post');
        };
    }

    private function title_list_shaping($title_list){
        $list_after = array();
        foreach ($title_list as $key => $value) {
            array_push($list_after,$value->title);
        }
        return $list_after;
    }
}
