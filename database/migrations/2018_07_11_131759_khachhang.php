<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Khachhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->string('sodienthoai')->primary('sodienthoai');
            $table->string('tenkhachhang');
            $table->date('ngayden');
            $table->date('ngaydi');
            $table->integer('nguoilon');
            $table->integer('treem');
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
        Schema::dropIfExists('khachhang');
    }
}
