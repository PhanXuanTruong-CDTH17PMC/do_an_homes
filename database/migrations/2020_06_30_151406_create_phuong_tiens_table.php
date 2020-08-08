<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhuongTiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phuongtien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nhan_hieu');
            $table->Text('mau_sac');
            $table->Text('bien_so');
            $table->Integer('can_ho_id');
            $table->Integer('khu_vuc_id');
            $table->Integer('loai_phuong_tien_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phuongtien');
    }
}
