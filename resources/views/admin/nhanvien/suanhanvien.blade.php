@extends('admin.layoutmaster.master')
<div class="panel box-shadow-none content-header">
    <div class="panel-body">
        <div class="col-md-12">
            <h3 class="animated fadeInLeft">Form Element</h3>
            <p class="animated fadeInDown">
                Form <span class="fa-angle-right fa"></span> Form Element
            </p>
        </div>
    </div>
</div>
<div class="form-element">
    <div class="col-md-2"></div>
    <div class="col-md-10 padding-0">
        <div class="col-md-12">
            <div class="panel form-element-padding">
                <form action="{{route('suanhanvien', $nhanvien->id)}}" method="POST" accept-charset="utf-8">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="panel-heading">
                        <h4>Sửa nhân viên:  {{$nhanvien->tennhanvien}}</h4> @if (session('status'))
                        <div class="alert alert-danger">{{session('status')}}</div>
                        @endif
                    </div>
                    <div class="panel-body" style="padding-bottom:30px;">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-sm-2 control-label text-right">Mã nhân viên</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="txtmnv" value="{{$nhanvien->manhanvien}}" readonly="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label text-right">Tên nhân viên</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="txttennv" value="{{$nhanvien->tennhanvien}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label text-right">Lương nhân viên(USD)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="txtgiaphong" value="{{$nhanvien->luongnhanvien}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label text-right">Ngày sinh</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="txtns" value="{{$nhanvien->ngaysinh}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label text-right">Giới tính</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="txtgt" value="{{$nhanvien->gioitinh}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Nhập">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>