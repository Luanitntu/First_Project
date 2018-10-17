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
                    <h3>Data Khách hàng</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Số điện thoại</th>
                                    <th>Tên khách hàng</th>
                                    <th>Ngày đến</th>
                                    <th>Ngày đi</th>
                                    <th>Người lớn</th>
                                    <th>Trẻ em</th>
                                    <th>Mã phòng</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($ttkh as $tt)
                                <tr>
                                    <td>{{$tt->sodienthoai}}</td>
                                    <td>{{$tt->tenkhachhang}}</td>
                                    <td>{{$tt->ngayden}}</td>
                                    <td>{{$tt->ngaydi}}</td>
                                    <td>{{$tt->nguoilon}}</td>
                                    <td>{{$tt->treem}}</td>
                                    <td>{{$tt->maphong}}</td>
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