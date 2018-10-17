<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Phong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phong', function (Blueprint $table) {
            $table->string('maphong')->primary('maphong');
            $table->string('sophong');
            $table->integer('giaphong');
            $table->string('maloaiphong')->foreign('maloaiphong')->references('maloaiphong')->on('loaiphong');
            $table->string('urlPhong');
            $table->string('mieuta');
            $table->integer('num');
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
        Schema::dropIfExists('phong');
    }
}
