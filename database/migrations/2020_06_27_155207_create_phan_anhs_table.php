<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhanAnhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phananh', function (Blueprint $table) {
            $table->increments('id');
            $table->string('noi_dung_pa');
            $table->Date('ngay_tao');
            $table->Boolean('tinh_trang_xl');
            $table->Integer('nhan_vien_id');
            $table->Integer('chu_ho_id');
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
        Schema::dropIfExists('phananh');
    }
}
