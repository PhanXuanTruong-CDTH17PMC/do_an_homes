<?php

use Illuminate\Database\Seeder;

class HoaDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hoadon')->insert([
            [
                'can_ho_id'=> 1,
                'tong_tien' =>  150000,
                'tinh_trang_tt' => 0,
                'nhan_vien_id'=> 1,

            ],
        ]);
    }
}

