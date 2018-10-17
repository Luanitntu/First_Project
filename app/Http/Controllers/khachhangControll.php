<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use App\khachhang;
use App\phong;
use App\loaiphong;
use App\nhanvien;

class khachhangControll extends Controller
{
     public function khachhangdk(Request $req){
		$req->session()->flash('status', 'Đặt phòng thành công!');
		$kh               = new khachhang;
		$kh->sodienthoai  = $req->txtsdt;
		$kh->tenkhachhang = $req->txttkh;
		$kh->ngayden      = $req->txtngayden;
		$kh->ngaydi       = $req->txtngaydi;
		$kh->nguoilon     = $req->txtnguoilon;
		$kh->treem        = $req->txttreem;
		$kh->maphong      = $req->txtmaphong;
		$kh->save();
        return redirect()->route('dangki',['id' => 1]);
    }
}
