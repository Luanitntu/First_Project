<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use App\nhanvien;

class nhanvienControll extends Controller
{
    public function getnhanvien($id){
        $nhanvien = nhanvien::where('id',$id)->first();
        return view('admin.nhanvien.suanhanvien',['manhanvien' => 1], compact('nhanvien'));
    }
    public function suanhanvien(Request $req, $id){
		$req->session()->flash('status', 'Sửa nhân viên thành công!');
		$nhvien                = nhanvien::find($id);
		$nhvien->tennhanvien   = $req->txttennhanvien;
		$nhvien->luongnhanvien = $req->txtluongnhanvien;
		$nhvien->ngaysinh      = $req->txtngaysinh;
		$nhvien->gioitinh      = $req->txtgt;
		$nhvien->save();
        return redirect()->route('nhanvien',['manhanvien' => 1]);
    }
}
