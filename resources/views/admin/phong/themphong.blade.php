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
                <form action="{{route('themphong')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="panel-heading">
                        <h4>Nhập Phòng</h4>
                         @if (session('status'))
                            <div class="alert alert-danger">{{session('status')}}</div>
                        @endif
                    </div>
                    <div class="panel-body" style="padding-bottom:30px;">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-sm-2 control-label text-right">Mã phòng</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="txtmphong" placeholder="Bắt đầu bằng 'p' ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label text-right">Số phòng</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="txtsophong">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label text-right">Giá phòng (Đêm/USD)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="txtgiaphong">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label text-right">Select Option</label>
                                <div class="col-sm-10">
                                    <div class="col-sm-12 padding-0">
                                        <select class="phong" name="txtmaloaiphong">
                                            @foreach($maphong as $phong)
                                                <option>{{$phong->maloaiphong}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label text-right">File ảnh</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="myfile">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label text-right">Miêu tả</label>
                                <div class="col-sm-10">
                                    <textarea name="txtmieuta" style="width: 800px"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label text-right">Num</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="txtnum" placeholder="Loại 1,2,3">
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