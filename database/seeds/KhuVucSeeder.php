<?php

use Illuminate\Database\Seeder;

class KhuVucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('khuvuc')->insert([
        [
        	'ten_khu_vuc' => 'Sân trước'
        	
        ],
        [
        	'ten_khu_vuc' => 'Sân sau'
        	
        ],
        [
        	'ten_khu_vuc' => 'Hầm B1 '
        	
        ],
        [
        	'ten_khu_vuc' => 'Hầm B2'
        ]
        ]);
    }
}
