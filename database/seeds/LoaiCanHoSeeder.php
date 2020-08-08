<?php

use Illuminate\Database\Seeder;

class LoaiCanHoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loaicanho')->insert([
        [
            'ten_loai_can_ho'=> 'View sông',
        ],
        [
            'ten_loai_can_ho'=> 'View hồ bơi',
        ],
        [
            'ten_loai_can_ho'=> 'Căn góc',
        ]
      ]);
    }
}
