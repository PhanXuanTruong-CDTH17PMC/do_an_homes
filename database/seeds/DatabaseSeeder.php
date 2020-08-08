<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this-> call([
             BoPhanSeeder::class,
             LoaiCanHoSeeder::class,
             CanHoSeeder::class,
             ChiTietHoaDonSeeder::class,
             CuDanSeeder::class,
             HoaDonSeeder::class,
             KhuVucSeeder::class,
             LoaiAccountSeeder::class,
             LoaiPhuongTienSeeder::class,
             LoaiCanHoSeeder::class,
             NhanVienSeeder::class,
             PhanAnhSeeder::class,
             PhuongTienSeeder::class,
             QuanHeSeeder::class,
             DichVuSeeder::class,
             ThongBaoSeeder::class,
             TinTucSeeder::class,
        ]);

  	}
}
