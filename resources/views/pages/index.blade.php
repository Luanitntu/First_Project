@extends('layout.master')
@include('modules.header')
<!--intro-->
<div class="index">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-3 col-6">
                <div class="services wow bounceInUp" data-wow-duration="1.5s">
                    <span class="icon">
                        <img src="img/telegram-app.png">
                    </span>
                    <h3>24/7 Front Desk</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="services wow bounceInUp " data-wow-duration="2s">
                    <span class="icon">
                        <img src="img/telegram-app.png">
                    </span>
                    <h3>Spa Suites</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="services wow bounceInUp" data-wow-duration="2.5s">
                    <span class="icon">
                        <img src="img/telegram-app.png">
                    </span>
                    <h3>Transfer Services</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="services wow bounceInUp" data-wow-duration="3s">
                    <span class="icon">
                        <img src="img/telegram-app.png">
                    </span>
                    <h3>Restaurant & Bar</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                </div>
            </div>
        </div>
    </div>
    <!--room-->
    <div class="fix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="star">
                        <img src="img/star.png">
                    </div>
                    <h2>Rooms & Suites</h2>
                    <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        @foreach($allphong as $allphongs)
                        {{-- {{ dd($allphong) }} --}}
                        <div class="col-md-3 col-sm-3">
                            <div class="block-phong">
                                <div class="block-wrapper">
                                    <div class="front-side thumbnail">
                                        <img src="img/{{ $allphongs->urlPhong }}">
                                    </div>
                                    <div class="back-side">
                                        <div class="back-wrapper">
                                            <h1>{{ $allphongs->sophong }}</h1>
                                            <p>{{ $allphongs->giaphong }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div> </div>
        <!--recent Blog-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 recent">
                    <h2>Recent Blog</h2>
                    <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 img wow bounceInLeft">
                            <img src="img/1.jpg" alt="">
                        </div>
                        <div class="col-md-8 col-sm-6 wow bounceInRight">
                            <a href="" class="blog">
                                <span class="imga" style="background-image: url(img/3.jpg);"></span>
                                <div class="decs">
                                    <span class="date"> Jun 26, 2018</span>
                                    <h3>A Definitive Guide to the Best Dining</h3>
                                    <span class="cat">Activities</span>
                                </div>
                            </a>
                            <a href="" class="blog">
                                <span class="imga" style="background-image: url(img/4.jpg);"></span>
                                <div class="decs">
                                    <span class="date"> Jun 26, 2018</span>
                                    <h3>A Definitive Guide to the Best Dining</h3>
                                    <span class="cat">Activities</span>
                                </div>
                            </a>
                            <a href="" class="blog">
                                <span class="imga" style="background-image: url(img/5.jpg);"></span>
                                <div class="decs">
                                    <span class="date"> Jun 26, 2018</span>
                                    <h3>A Definitive Guide to the Best Dining</h3>
                                    <span class="cat">Activities</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--limit offer-->
        <div id="intro" style="background-image: url(img/6.jpg); background-position: 100% 100px; height: 340px">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8 animate-box fadeInUp animated-fast">
                        <div class="intro-desc">
                            <div class="text-salebox">
                                <div class="text-lefts">
                                    <div class="sale-box">
                                        <div class="sale-box-top">
                                            <h2 class="number">45</h2>
                                            <span class="sup-1">%</span>
                                            <span class="sup-2">Off</span>
                                        </div>
                                        <h2 class="text-sale">Sale</h2>
                                    </div>
                                </div>
                                <div class="text-rights">
                                    <h3 class="title"><b>Just hurry up limited offer!</b></h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    <p><a href="#" class="btn btn-primary" onclick="modal.style.display='block'">Book Now</a> <a href="#" class="btn btn-outline">Read more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4">
                        <div class="video-wrap">
                            <div class="video colorlib-video wow pulse" data-wow-duration="3s" style="background-image: url(img/4.jpg);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 heading">
                <h2>Recommended Room</h2>
                <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="wrap-img">
                            <img src="img/room-1.jpg" alt="">
                            <span>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </span> <small>532 viewer</small>
                            <h3>Room V.I.P</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrap-img">
                            <img src="img/room-3.jpg" alt="">
                            <span>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </span><small>532 viewer</small>
                            <h3>Room V.I.P</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrap-img">
                            <img src="img/room-4.jpg" alt="">
                            <span>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </span> <small>532 viewer</small>
                            <h3>Room V.I.P</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrap-img">
                            <img src="img/room-5.jpg" alt="">
                            <span>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </span> <small>532 viewer</small>
                            <h3>Room V.I.P</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrap-img">
                            <img src="img/room-6.jpg" alt="">
                            <span>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </span> <small>532 viewer</small>
                            <h3>Room V.I.P</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrap-img">
                            <img src="img/room-4.jpg" alt="">
                            <span>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </span> <small>532 viewer</small>
                            <h3>Room V.I.P</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
        <!---------stament------------>
        <div class="fix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <h2>Our Satisfied Guests says</h2>
                        <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="stement">
                            <div class="mySlides">
                                <!-- <div class="img-user" style="background-image: url(img/person1.jpg);"></div> -->
                                <img src="{{asset('img/person3.jpg')}}"><br>
                                <span class="user"><b>Jacob Webb</b></span></br>
                                <small>Athens, Greece</small>
                                <blockquote>
                                    <p>" A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                </blockquote>
                            </div>
                            <div class="mySlides">
                                <!-- <div class="img-user" style="background-image: url(img/person2.jpg);"></div> -->
                                <img src="{{asset('img/person2.jpg')}}"><br>
                                <span class="user"><b>Alysha Myers</b></span></br>
                                <small>Athens, Greece</small>
                                <blockquote>
                                    <p>Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                                </blockquote>
                            </div>
                            <div class="mySlides">
                                <!-- <div class="img-user" style="background-image: url(img/person3.jpg);"></div> -->
                                <img src="{{asset('img/person1.jpg')}}"><br>
                                <span class="user"><b>Jacob Luna</b></span></br>
                                <small>Athens, Greece</small>
                                <blockquote>
                                    <p>One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                </blockquote>
                            </div>
                            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                        </div>
                        <script>
                        var slideIndex = 1;
                        showDivs(slideIndex);

                        function plusDivs(n) {
                            showDivs(slideIndex += n);
                        }

                        function showDivs(n) {
                            var i;
                            var x = document.getElementsByClassName("mySlides");
                            if (n > x.length) { slideIndex = 1 }
                            if (n < 1) { slideIndex = x.length }
                            for (i = 0; i < x.length; i++) {
                                x[i].style.display = "none";
                            }
                            x[slideIndex - 1].style.display = "block";
                        }

                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center heading">
                    <h2>Most Popular Travel Countries</h2>
                    <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="f-tour">
                        <div class="row row-pb-md">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6 wow fadeInDown" data-wow-duration="1s">
                                        <a href="#" class="f-tour-img" style="background-image: url(img/island1.jpg);">
                                            <div class="desc">
                                                <h3>Vinpearl - 7 Days</h3>
                                                <p class="price"><span>$300</span> <small>/ person</small></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">
                                        <a href="#" class="f-tour-img " style="background-image: url(img/island2.jpg);">
                                            <div class="desc">
                                                <h3>Bà Nà Hill - 5 Days</h3>
                                                <p class="price"><span>$420</span> <small>/ person</small></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 wow fadeInDown" data-wow-duration="3s">
                                        <a href="#" class="f-tour-img" style="background-image: url(img/island3.jpg);">
                                            <div class="desc">
                                                <h3>Đà Nẵng - 3 Days</h3>
                                                <p class="price"><span>$220</span> <small>/ person</small></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 wow fadeInDown" data-wow-duration="4s">
                                        <a href="#" class="f-tour-img" style="background-image: url(img/island4.jpg);">
                                            <div class="desc">
                                                <h3>Hạ Long - 4 Days</h3>
                                                <p class="price"><span>$370</span> <small>/ person</small></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="descr">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Italy, Europe</h3>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                            <br>
                                        </div>
                                        <div class="col-md-12">
                                            <h4>Best Tours City</h4>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                    <ul>
                                                        <li><a href="#">Rome</a></li>
                                                        <li><a href="#">Milan</a></li>
                                                        <li><a href="#">Genoa</a></li>
                                                        <li><a href="#">Verona</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                    <ul>
                                                        <li><a href="#">Venice</a></li>
                                                        <li><a href="#">Bologna</a></li>
                                                        <li><a href="#">Trieste</a></li>
                                                        <li><a href="#">Florence</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                    <ul>
                                                        <li><a href="#">Palermo</a></li>
                                                        <li><a href="#">Siena</a></li>
                                                        <li><a href="#">San Marino</a></li>
                                                        <li><a href="#">Naples</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p><a href="#" class="btn btn-primary">View All Places</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('modules.footer')
