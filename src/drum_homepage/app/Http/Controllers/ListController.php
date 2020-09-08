<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ListController extends Controller
{
    //
    public function index(){
        // タイトルリストを検索してviewに引き渡す
        $title_list = \DB::table('posts')->get();
        return view('list',['title_list'=>$title_list]);
    }
    public function delete($id = 0){
        //削除対象レコードを検索
        $title = \App\Post::find($id);
        //削除
        $title->delete();
        //リダイレクト
        return redirect('/list');
    }
}
