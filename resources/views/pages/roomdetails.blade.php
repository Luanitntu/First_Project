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
                    <div class="detail-room">
                        <ul>
                            <li>Mã phòng: {{$tenphong1->maphong}}</li>
                            <li>Số phòng: {{$tenphong1->sophong}}</li>
                            <li>Giá phòng: {{$tenphong1->giaphong}}</li>
                            <li>Mã loại phòng: {{$tenphong1->maloaiphong}}</li>
                        </ul>
                        <p>{{$tenphong1->mieuta}}</p>
                    </div>
                    <div class="btn-dangki">
                        <a href="{{route('dangki',$tenphong1->id)}}">Đăng kí</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('modules.footer')