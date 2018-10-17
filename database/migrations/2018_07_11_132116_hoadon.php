<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hoadon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadon', function (Blueprint $table) {
            $table->string('mahoadon')->primary('mahoadon');
            $table->string('manhanvien')->foreign('manhanvien')->references('manhanvien')->on('nhanvien');
            $table->string('sodienthoai')->foreign('sodienthoai')->references('sodienthoai')->on('khachhang');
            $table->integer('tongtien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoadon');
    }
}
