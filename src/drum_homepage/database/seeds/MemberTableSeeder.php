<?php

use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('members')->insert([
            [
                'name_kanji' => '三戸部 純一',
                'name_kana' => 'ミトベ ジュンイチ',
                'name_english' => 'Junichi Mitobe',
                'status_no' => 1,
                'image_path' => '',
                'message' => '',
                'genre' => 'ジャズ',
                'musical_instrument' => 'ドラム',
                'profile_url' => '',
                'user_id' => 1
            ],
            [
                'name_kanji' => '三戸部 智江',
                'name_kana' => 'ミトベ トモエ',
                'name_english' => 'Tomoe Mitobe',
                'status_no' => 1,
                'image_path' => '',
                'message' => '',
                'genre' => 'ジャズ',
                'musical_instrument' => 'ピアノ',
                'profile_url' => '',
                'user_id' => 1
            ]
        ]);
    }
}
