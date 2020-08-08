<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCanHosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canho', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('Tang');
            $table->Integer('dien_tich');   
            $table->Text('name');
            $table->Text('password');
            $table->Integer('loai_can_ho_id');
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
        Schema::dropIfExists('canho');
    }
}
