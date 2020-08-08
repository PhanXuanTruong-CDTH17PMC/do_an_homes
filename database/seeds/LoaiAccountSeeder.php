<?php

use Illuminate\Database\Seeder;

class LoaiAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loaiaccount')->insert([
            [	
                'ten_loai_account' => 'Admin '	
            ],
            [	
                'ten_loai_account' => 'Nhân viên '	
            ],
            [	
                'ten_loai_account' => 'Quản lí '	
            ]
        ]);
    }
}
