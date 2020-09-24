<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Infomation;
class AdminInfomationDetailController extends Controller
{
    //
    public function index(Request $request){
        $infomation = Infomation::where('id',$request->id)->first();

        return view('admin/admin_infomation_detail',['infomation'=>$infomation]);
    }

    public function update(Request $request){
        if(isset($request->info_name) && isset($request->info_body) ){
            // お知らせの取得
            $infomation = Infomation::where('id',$request->id)->first();

            $infomation->info_name = $request->info_name;// タイトル
            $infomation->info_body = $request->info_body;// 内容
            $infomation->image_path = '';// 画像パス
            $infomation->month = $request->month;// 月
            $infomation->year = $request->year;// 年
            // DBに保存
            $infomation->save();

            return redirect('admin/infomation');
        }else{

            return redirect('admin/infomation/detail/{$request->id}');
        }
    }
    public function delete(Request $request){
        $infomation = Infomation::where('id',$request->id)->first();
        $infomation->delete();
        return redirect('admin/infomation');
    }
}

