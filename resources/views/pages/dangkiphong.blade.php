@extends('layout.master') @include('modules.header')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form class="well form-horizontal" action="{{route('themkhachhang')}}" method="POST" id="contact_form">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <fieldset>
                    <!-- Form Name -->
                    <legend>Đăng kí phòng!</legend>
                    @if (session('status'))
                    <div class="alert alert-danger">{{session('status')}}</div>
                    @endif
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Số điện thoại</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input name="txtsdt" placeholder="Số điện thoại" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Tên khách hàng</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input name="txttkh" placeholder="Tên Khách Hàng" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Ngày đến</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input name="txtngayden" placeholder="Ngày khách hàng đến" class="form-control" type="date">
                            </div>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Ngày đi</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input name="txtngaydi" placeholder="Ngày khách hàng đi" class="form-control" type="date">
                            </div>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Người lớn</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input name="txtnguoilon" placeholder="Số người lớn" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Trẻ em</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input name="txttreem" placeholder="Số trẻ em" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Mã phòng</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input name="txtmaphong" class="form-control" type="text" readonly="" value="{{$tenphong->maphong}}">
                            </div>
                        </div>
                    </div>
                    <!-- radio checks -->
{{--                     <div class="form-group">
                        <label class="col-md-4 control-label">Dịch vụ muốn sử dụng</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="checkbox" name="dichvu" value="dienthoai" />Điện thoại
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="checkbox" name="dichvu" value="inter" />Internet
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="checkbox" name="dichvu" value="giatui" />Giặt ủi
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="checkbox" name="dichvu" value="anuong" />Ăn uống
                                </label>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                             <input type="submit" name="submit" value="Book Now">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!-- /.container -->