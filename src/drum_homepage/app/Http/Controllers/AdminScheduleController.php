<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class AdminScheduleController extends Controller
{
    const SCHEDULE_FILE_NAME = 'schedule';
    //
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // ファイルの全取得

        return view('admin.admin_schedule');
    }
    
    /**
     * 
     * 
     */
    public function schedule_register(Request $request)
    {
        // 画像ファイルが既に存在していたら、リネームして保存する。

        // スケジュールの画像を保存する
        // バリデーションチェック
        $this->validate($request, [
            'file' => [
                // 必須
                'required',
                // アップロードされたファイルであること
                'file',
                // 画像ファイルであること
                'image',
                // MIMEタイプを指定
                'mimes:jpeg,png',
            ]
        ]);
        // バリデーション通過したらファイルを保存
        if ($request->file('file')->isValid([])) {
            // 保存するファイル名を作成:年_月_schedule
            $year = substr($request->month,0,4);
            $month = substr($request->month,5);
            // 年月をキーにしてDBからレコードを取得
            $schedule = Schedule::where('year',$year)
                        ->where('month',$month)
                        ->first();
            // 取得したレコードを確認し、
            if ($schedule){
                // レコードが存在していれば
                $new_image_data = $schedule;
            }else{
                // レコードが存在しなければオブジェクトを作成する
                $new_image_data= new Schedule;
            }

            // クロージャを使ってみる
            // ファイル名を作成するクロージャを準備
            $create_name = function($timing){
                $name = str_replace("-","_",$timing);
                $name .= '_'.self::SCHEDULE_FILE_NAME;
                return $name.'.png';
            };
            // ファイル名の作成
            $file_name = $create_name($request->month);
            // ファイルの保存
            $path = $request->file->storeAs('public',$file_name);
            // ファイルパスの取得
            $file_name = basename($path);
            // 登録したユーザーのidを取得する
            $user_id = Auth::id();
            // レコードに必要な情報をセット
            $new_image_data->year = $year; //年
            $new_image_data->month = $month; //月
            $new_image_data->user_id = $user_id; //登録ユーザーid
            $new_image_data->type_id = 1; //画像Type:1
            $new_image_data->file_path = $path;//ファイルのパス
            $new_image_data->file_name = $file_name;//ファイル名
            // DBに保存
            $new_image_data->save();

            return redirect('/admin/schedule');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors();
        }
    }

}
