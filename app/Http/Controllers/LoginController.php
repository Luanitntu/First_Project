<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use App\khachhang;
use App\phong;
use App\loaiphong;
use App\nhanvien;
class LoginController extends Controller
{
	public function dangnhap(){
		return view('admin.dangnhap');
	}
    public function login(Request $request){
        if (Auth::attempt([
            'name' =>$request['name'],
            'password'=> $request['password']
        ]))
        {   
            $slphong     = phong::all();
            $slkhachhang = khachhang::all();
            return view('admin.dashboard', compact('slphong', 'slkhachhang'));
        }     
        else
            return view('admin.dangnhap')->with('message','dang nhap that bai');
    }
    public function database(){
        $ttkh = khachhang::all();
        return view('admin..khachhang.datakhachhang', compact('ttkh'));
    }
    public function dataphong(){
        $ttphong = phong::all();
        return view('admin.phong.dataphong', compact('ttphong'));
    }
    public function datanhanvien(){
        $ttnhanvien = nhanvien::all();
        return view('admin.nhanvien.datanhanvien', compact('ttnhanvien'));
    }
    public function form(){
        $maphong = loaiphong::all();
        return view('admin.phong.themphong', compact('maphong'));
    }
    public function themphong(Request $req){
        $req->session()->flash('status', 'Thêm phòng thành công!');
        $nhap              = new phong;
        $nhap->maphong     = $req->txtmphong;
        $nhap->sophong     = $req->txtsophong;
        $nhap->giaphong    = $req->txtgiaphong;
        $nhap->maloaiphong = $req->txtmaloaiphong;
        if($req->hasFile('myfile'))
        {
            $file=$req->file('myfile');
            $file->move('img',$file->getClientOriginalName());

            $nhap->urlPhong = $file->getClientOriginalName();
        }
        $nhap->mieuta      = $req->txtmieuta;
        $nhap->num         = $req->txtnum;
        $nhap->save();
        return redirect()->route('form');
    }
}
