<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Chitiethoadon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiethoadon', function (Blueprint $table) {
            $table->string('mahoadon')->primary('mahoadon')->foreign('mahoadon')->references('mahoadon')->on('hoadon');
            $table->string('manhanvien')->foreign('manhanvien')->references('manhanvien')->on('nhanvien');
            $table->string('sodienthoai')->foreign('sodienthoai')->references('sodienthoai')->on('khachhang');
            $table->date('ngayinhoadon');
            $table->integer('tongtien');
            $table->string('maloaiphong')->foreign('maloaiphong')->references('maloaiphong')->on('loaiphong');
            $table->string('maphong')->foreign('maphong')->references('maphong')->on('phong');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitiethoadon');
    }
}
