@extends('layout.master') @include('modules.header')
<div class="formvali">
    <div class="container">
        <p><b>TRANG CHỦ</b> <b>>></b> <b><a href="">PHÒNG</a></b> <b>>>></b> <b><a href="">PHÒNG THƯỜNG</a></b></p>
        <div class="row">
            <div class="col-md-6">
                <img src="../img/{{$tenphong1->urlPhong}}" alt="" style="padding-bottom: 20px;">
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-4">
                <div class="text" style="margin-top: 30px; font-size: 15px; margin-bottom: 50px;">
                    <p>
                        <p>Mã phòng: {{$tenphong1->maphong}}</p>
                        <p>Số phòng: {{$tenphong1->sophong}}</p>
                        <p>Giá phòng: {{$tenphong1->giaphong}}</p>
                        <p>Mã loại phòng: {{$tenphong1->maloaiphong}}</p>
                        <p>{{$tenphong1->mieuta}}</p>
                        <a href="{{route('dangki',$tenphong1->id)}}">Đăng kí</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@include('modules.footer')