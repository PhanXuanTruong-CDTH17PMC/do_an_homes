<?php

use Illuminate\Database\Seeder;

class CuDanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cudan')->insert([
            [
                'ho_ten_cd'=>'Nguyễn Văn Phúc',
                'CMND' =>'273657742',
                'email'=> 'email1@mail.com',
                'SDT'=>'0909321123',
                'ng_sinh'=>'1999/12/09',
                'can_ho_id'=>1,
                'quan_he_id'=>1,
            ],
            [
                'ho_ten_cd'=>'Trần Chân',
                'CMND' =>'27262584120',
                'email'=> 'email2@mail.com',
                'SDT'=>'0909345543',
                'ng_sinh'=>'1999/02/09',
                'can_ho_id'=>2,
                'quan_he_id'=>1,
            ],
            [
                'ho_ten_cd'=>'Cô Cô ',
                'CMND' =>'23232356120',
                'email'=> 'email3@mail.com',
                'SDT'=>'0123456789',
                'ng_sinh'=>'1999/02/09',
                'can_ho_id'=>1,
                'quan_he_id'=>2,
            ],
            [
                'ho_ten_cd'=>'Nguyễn Phúc',
                'CMND' =>'0123456',
                'email'=> 'email4@mail.com',
                'SDT'=>'0254525',
                'ng_sinh'=>'1999/02/09',
                'can_ho_id'=>1,
                'quan_he_id'=>3,
            ],
            [
                'ho_ten_cd'=>'Nguyễn Văn An',
                'CMND' =>'0123456',
                'email'=> 'email5@mail.com',
                'SDT'=>'0254525',
                'ng_sinh'=>'1999/02/09',
                'can_ho_id'=>3,
                'quan_he_id'=>1,
            ],
            [
                'ho_ten_cd'=>'Nguyễn Văn Mai',
                'CMND' =>'0123456',
                'email'=> 'email6@mail.com',
                'SDT'=>'0254525',
                'ng_sinh'=>'1999/02/09',
                'can_ho_id'=>3,
                'quan_he_id'=>1,
            ],
        ]);
    }
}
