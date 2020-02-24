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
                    <h3>Data Nhân viên</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Mã nhân viên</th>
                                    <th>Tên nhân viên</th>
                                    <th>Lương nhân viên</th>
                                    <th>Ngày sinh</th>
                                    <th>Giới tính</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($ttnhanvien as $nv)
                                <tr>
                                    <td>{{$nv->manhanvien}}</td>
                                    <td>{{$nv->tennhanvien}}</td>
                                    <td>{{$nv->luongnhanvien}} USD</td>
                                    <td>{{$nv->ngaysinh}}</td>
                                    {{-- {{ dd($nv) }} --}}
                                    @if($nv->gioitinh==0)
                                    <td> Nam </td>
                                    @else
                                    <td> Nữ </td>
                                    @endif
                                    <td><a href="{{route('nhanvien',$nv->manhanvien)}}">Sửa</a></td>
                                    <td><a href="{{route('nhanvien',$nv->manhanvien)}}">Xóa</a></td>
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