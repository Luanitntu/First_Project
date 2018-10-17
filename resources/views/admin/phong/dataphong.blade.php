@extends('admin.layoutmaster.master')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Data Tables</h3>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3>Data Phòng</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Mã phòng</th>
                                    <th>Số phòng</th>
                                    <th>Giá phòng</th>
                                    <th>Mã loại phòng</th>
                                    <th>Ảnh phòng</th>
                                    <th>Miêu tả</th>
                                    <th>Num</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($ttphong as $phong)
                                <tr>
                                    <td>{{$phong->maphong}}</td>
                                    <td>{{$phong->sophong}}</td>
                                    <td>{{$phong->giaphong}} USD</td>
                                    <td>{{$phong->maloaiphong}}</td>
                                    <td><img src="img/{{$phong->urlPhong}}" alt="" width="200px"></td>
                                    <td>{{$phong->mieuta}}</td>
                                    <td>{{$phong->num}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>