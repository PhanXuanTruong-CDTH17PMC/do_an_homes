<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class NhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nhanvien')->insert([
        [
            'ho_ten_nv'=> 'Nguyễn Thái C',
            'CMND'=> '01234545789',
            'email'=> 'abc@mail.com',
            'SDT' => '543464331',
            'ngay_sinh'=>'1990/03/06',
            'username' =>'nhanvien02',
            'password'=> hash::make('abcdef'),
            'loai_account_id'=> 2,
            'bo_phan_id'=>2,
        ],
        [
            'ho_ten_nv'=> 'Nguyễn Văn A',
            'CMND'=> '0123456789',
            'email'=> 'abc@mail.com',
            'SDT' => '0123464331',
            'ngay_sinh'=>'1990/03/06',
            'username' =>'nhanvien03',
            'password'=> hash::make('abcdef'),
            'loai_account_id'=> 3,
            'bo_phan_id'=>3,
        ],
        [
            'ho_ten_nv'=> 'Nguyễn Văn B',
            'CMND'=> '0123456789',
            'email'=> 'abc@mail.com',
            'SDT' => '0123464331',
            'ngay_sinh'=>'1990/03/06',
            'username' =>'nhanvien04',
            'password'=> hash::make('abcdef'),
            'loai_account_id'=> 1,
            'bo_phan_id'=>1 ,
        ]
     ]);
    }
}
