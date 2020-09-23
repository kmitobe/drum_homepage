<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Schedule;
class ScheduleController extends Controller
{
    //
    public function index(){
        // 現在の年月を取得
        $year = date('Y');
        $month = date('m');
        // スケジュール画像検索
        $schedule = Schedule::where('year',$year)->where('month',$month)->first();
        // スケジュールの画像と、当月の文字列をviewへ渡す
        return view ('schedule',['schedule'=>$schedule,'timing'=>date('Y年m月')]);
    }


    public function search(Request $request){
        // 保存するファイル名を作成:年_月_schedule
        $year = substr($request->month,0,4);
        $month = substr($request->month,5);
        // スケジュール画像検索
        $schedule = Schedule::where('year',$year)->where('month',$month)->first();
        return view ('schedule',['schedule'=>$schedule,'timing'=>$year."年".$month."月"]);
    }
    
    public function ajax(){

    }

}
