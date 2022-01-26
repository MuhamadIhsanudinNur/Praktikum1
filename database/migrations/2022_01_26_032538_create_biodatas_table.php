<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->String('nama');
            $table->String('lahir')->nulllable();
            $table->date('tgl')->nulllable();
            $table->String('jk');
            $table->String('hoby')->nulllable();
            $table->String('agama');
            $table->String('alamat')->nulllable();
            $table->String('telp')->nulllable();
            $table->String('email');
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
        Schema::dropIfExists('biodatas');
    }
}
