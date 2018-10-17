@extends('layout.master') @include('modules.header')
<div class="rooms">
    <div class="container">
        <p><b>TRANG CHỦ</b> <b>>>></b> <b><a href="">PHÒNG</a></b></p>
        <div class="row">
            <div class="col-md-10">
                <h4><b>PHÒNG THƯỜNG</b></h4>
                <br>
                <p style="font-size: 16px">Có tất cả {{count($phongbt)}}</p>
                <br>
            </div>
            <div class="col-md-2">
                <button><a href=""><b>Xem tất cả</b></a></button>
            </div>
            @foreach($phongbt as $bt)
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <a href="{{route('chitietphong', $bt->id)}}"><img src="img/{{$bt->urlPhong}}" alt=""></a>
                    <div class="caption">
                        <h3>{{$bt->sophong}}</h3>
                        <span>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </span>
                        <br>
                        <small>342 viewer</small>
                        <p>Giá phòng: {{$bt->giaphong}} usd</p>
                        <p>{{$bt->mieuta}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Phong Cao Cap-->
        <div class="row">
            <div class="col-md-10">
                <h4><b>PHÒNG CAO CẤP</b></h4>
                <br>
                <p style="font-size: 16px">Có tất cả {{count($phongcc)}}</p>
                <br>
            </div>
            <div class="col-md-2">
                <button><a href=""><b>Xem tất cả</b></a></button>
            </div>
            @foreach($phongcc as $cc)
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <a href="{{route('chitietphong', $cc->id)}}"><img src="img/{{$cc->urlPhong}}" alt=""></a>
                    <div class="caption">
                        <h3>{{$cc->sophong}}</h3>
                        <span>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </span>
                        <br>
                        <small>342 viewer</small>
                        <p>Giá phòng: {{$cc->giaphong}} usd</p>
                        <p>{{$cc->mieuta}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!--PHONG VIP-->
                <div class="row">
            <div class="col-md-10">
                <h4><b>PHÒNG VIP</b></h4>
                <br>
                <p style="font-size: 16px">Có tất cả {{count($phongvip)}}</p>
                <br>
            </div>
            <div class="col-md-2">
                <button><a href=""><b>Xem tất cả</b></a></button>
            </div>
            @foreach($phongvip as $cc)
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <a href="{{route('chitietphong', $cc->id)}}"><img src="img/{{$cc->urlPhong}}" alt=""></a>
                    <div class="caption">
                        <h3>{{$cc->sophong}}</h3>
                        <span>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </span>
                        <br>
                        <small>342 viewer</small>
                        <p>Giá phòng: {{$cc->giaphong}} usd</p>
                        <p>{{$cc->mieuta}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@include('modules.footer')