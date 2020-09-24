<?php

use Illuminate\Database\Seeder;

class InfomationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('infomation')->insert([
            [
                'user_id'           => '1',
                'month'          => date('m'),
                'year'          => date('Y'),
                'image_path'       => '',
                'info_name'       => 'テスト用のタイトルです',
                'info_body'       => 'テスト用に作られたお知らせです。ここに基本的に情報が格納されています。'
            ]
        ]);
    }
}
