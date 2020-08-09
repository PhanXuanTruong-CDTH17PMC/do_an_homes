<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CanHoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('canho')->insert([
            [
                'Tang'=>1,
                'dien_tich'=>200,   
                'name'=>'CH101',
                'password'=>hash::make('273657749'),
                'loai_can_ho_id'=>1,
                'chu_ho_id'=>1
            ],
            [
                'Tang'=>1,
                'dien_tich'=>200,   
                'name'=>'CH102',
                'password'=>hash::make('273657749'),
                'loai_can_ho_id'=>2,
                'chu_ho_id'=>2
            ],
            [
                'Tang'=>3,
                'dien_tich'=>56,   
                'name'=>'CH301',
                'password'=>hash::make('123456789'),
                'loai_can_ho_id'=>3,
                'chu_ho_id'=>5
            ]
        ]);


    }
}
