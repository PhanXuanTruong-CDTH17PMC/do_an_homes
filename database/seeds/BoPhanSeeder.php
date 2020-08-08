<?php

use Illuminate\Database\Seeder;

class BoPhanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('bophan')->insert([
            [	
                'ten_bo_phan' => 'Ban quản lý'	
            ],
            [
            	'ten_bo_phan' => 'Kế toán'
            ],
            [
            	'ten_bo_phan' => 'Nhân sự'
            	
            ],
            [
            	'ten_bo_phan' => 'An ninh'
            ],
            [
            	'ten_bo_phan' => 'Vệ sinh'
            ]
        ]);
    }
}
