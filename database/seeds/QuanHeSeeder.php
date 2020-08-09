<?php

use Illuminate\Database\Seeder;

class QuanHeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quanhe')->insert([
            [
                'ten_quan_he' => 'Chủ hộ'
                
            ],
            [
                'ten_quan_he' => 'Con cái'
                
            ],
            [
                'ten_quan_he' => 'Vợ '
                
            ],
            [
                'ten_quan_he' => 'Chồng'
            ],
            [
                'ten_quan_he' => 'Anh/chị '
                
            ],
            [
                'ten_quan_he' => 'Ông/bà'
            ]
            ]);
    }
}
