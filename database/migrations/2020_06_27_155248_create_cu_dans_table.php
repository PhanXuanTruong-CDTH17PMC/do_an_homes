<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuDansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cudan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ho_ten_cd');
            $table->Text('CMND');
            $table->Text('email');
            $table->Text('SDT');
            $table->Date('ng_sinh');
            $table->Integer('can_ho_id');
            $table->Integer('quan_he_id');
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
        Schema::dropIfExists('cudan');
    }
}
