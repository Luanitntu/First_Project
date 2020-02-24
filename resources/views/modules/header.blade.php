<div class="bgr">
    <div id="mainmenu-area">
        <div class="container-fluid fixed-top">
            <div class="row">
                <div class="col-md-12 col-sm-12" style="background: #4B2B2B; opacity: 0.8;">
                    <div class="fixmenu">
                        <ul style="margin-top: -130px">
                            <div><img src="{{asset('img/logo.png')}}" width="150px" height="150px"></div>
                            <li class="active"><a href="{{route('trangchu')}}">Trang Chủ</a></li>
                            <li><a href="{{asset('about')}}">Giới thiệu</a></li>
                            <li><a href="{{asset('rooms')}}">Phòng</a>
                                <ul class="dropmenu">
                                    <li><a href="{{asset('rooms')}}">Thường</a></li>
                                    <li><a href="{{asset('rooms')}}">Cao Cấp</a></li>
                                    <li><a href="{{asset('rooms')}}">VIP</a></li>
                                </ul>
                            </li>
                            <li><a href="{{asset('gallery')}}">Sưu tập</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('img/room-1.jpg')}}" alt="First slide" height="600px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('img/room-3.jpg')}}" alt="Second slide" height="600px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('img/room-4.jpg')}}" alt="Third slide" height="600px">
    </div>
  </div>
</div>
</div>
    </div>