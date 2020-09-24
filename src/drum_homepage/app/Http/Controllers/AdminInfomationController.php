<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Infomation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class AdminInfomationController extends Controller
{   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function index(){

        $infomations = Infomation::get();

        return view('admin.admin_infomation',['infomations'=>$infomations]);
    }

    public function infomation_register(Request $request){
        if(isset($request->info_name) && isset($request->info_body) ){
            // レコードに必要な情報をセット
            $infomations = new Infomation;
            $infomations->user_id = Auth::id();
            $infomations->info_name = $request->info_name;// タイトル
            $infomations->info_body = $request->info_body;// 内容
            $infomations->image_path = '';// 画像パス
            $infomations->month = date('m');// 月
            $infomations->year = date('Y');// 年
            // DBに保存
            $infomations->save();

            return redirect('admin/infomation');
        }else{

            return redirect('admin/infomation');
        }
    }
}
