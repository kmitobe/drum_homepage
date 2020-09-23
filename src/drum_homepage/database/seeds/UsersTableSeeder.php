<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'name'           => 'ミトベ　コウ',
                'email'          => 'admin@gmail.com',
                'password'       => Hash::make('adminadmin'),

            ]
        ]);
    }
}
