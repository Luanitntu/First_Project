@extends('layout.master')
@include('modules.header')

<div class="abouts">
    <div class="container">
            <p><b>TRANG CHỦ</b> <b>>>></b> <b><a href="">GIỚI THIỆU</a></b></p>
        <div class="row">
            <div class="col-md-4">
                <div class="gallery">
                    <div class="row">
                            <div class="col-md-4">
                                    <img src="img/food1.jpg" width="120px" height="100px" alt="">
                                </div>
                                <div class="col-md-4">
                                    <img src="img/food2.jpg" width="120px" height="100px" alt="">
                                </div>
                                <div class="col-md-4">
                                    <img src="img/food3.jpg" width="120px" height="100px" alt="">
                                </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                            <div class="col-md-4">
                                    <img src="img/food4.jpg" width="120px" height="100px" alt="">
                                </div>
                                <div class="col-md-4">
                                    <img src="img/food5.jpg" width="120px" height="100px" alt="">
                                </div>
                                <div class="col-md-4">
                                    <img src="img/food6.jpg" width="120px" height="100px" alt="">
                                </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">   
                                <div class="col-md-4">
                                    <img src="img/food7.jpg" width="120px" height="100px" alt="">
                                </div>
                                <div class="col-md-4">
                                    <img src="img/food8.jpg" width="120px" height="100px" alt="">
                                </div>
                                <div class="col-md-4">
                                    <img src="img/food1.jpg" width="120px" height="100px" alt="">
                                </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="aboutstop">
                        <p>
                                <b>Chúng tôi thực sự tận tâm làm cho trải nghiệm du lịch của bạn đơn giản và thú vị nhất có thể!</b><br><br>
                                Mang đến cho bạn trải nghiệm du lịch hiện đại, thoải mái và được kết nối là một trong những ưu tiên cao nhất của chúng tôi và đó là
                                tại sao chúng tôi liên tục cố gắng cải thiện trải nghiệm của bạn khi bạn đặt bất kỳ thứ gì với chúng tôi. <br><br>
                                Chúng tôi thực sự đánh giá cao và hoan nghênh bất kỳ suggstions bạn có thể có cho chúng tôi, do đó, cảm thấy tự do thả chúng tôi dòng bất cứ lúc nào.
                        </p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="giatri">
                        <p><b>
                                Giá trị cốt lõi của chúng tôi
                        </b></p>
                        <div class="tab">
                                <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Khách hàng hài lòng</button>
                                <button class="tablinks" onclick="openCity(event, 'Paris')">Chuyến tham quan</button>
                                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Nghề nghiệp</button>
                              </div>
                              
                              <div id="London" class="tabcontent">
                                <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="img/1.6.jpg" width="150px" height="100px" alt="">
                                    </div>
                                    <div class="col-md-8" style="margin-top: 20px;">
                                        <p>
                                                <b>Ocean Park Tour</b><br>
                                                Đây là mức độ cao nhất, ở mức độ này, khách hàng của bạn đang cực kỳ hài lòng!

Họ sẵn sàng kể với mọi người xung quanh những điều tốt đẹp nhất về bạn. Adidas, Nike hay Reebok chính là 3 trong số những thương hiệu luôn cố gắng để đạt được số lượng tối đa khách hàng có mức độ hài lòng cao nhất.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p></p>
                                    </div>
                                </div>
                              </div>
                              
                              <div id="Paris" class="tabcontent">
                                <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                                <div class="row">
                                        <div class="col-md-4">
                                            <img src="img/1.5.jpg" width="150px" height="100px" alt="">
                                        </div>
                                        <div class="col-md-8" style="margin-top: 20px;">
                                            <p>
                                                    <b>Ocean Park Tour</b><br>
                                                    Những chuyến thamquan, du lịch sẽ đem lại rất nhiều điều bổ ích cho học sinh. Đầu tiên, đó là một môi trường học tập thoải mái và năng động. Khi đi tham quan du lịch, học sinh được nhìn thấy tận mắt những gì mình đã được học trong sách vở.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p></p>
                                        </div>
                                    </div>
                              </div>
                              
                              <div id="Tokyo" class="tabcontent">
                                <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                                <div class="row">
                                        <div class="col-md-4">
                                            <img src="img/1.4.jpg" width="150px" height="100px" alt="">
                                        </div>
                                        <div class="col-md-8" style="margin-top: 20px;">
                                            <p>
                                                    <b>Ocean Park Tour</b><br>
                                                    Với những nhân viên nhân sự làm việc trong các khách sạn được quản lý bởi các Tập đoàn nước ngoài thì mọi email trao đổi, liên hệ đều phải sử dụng tiế...
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p></p>
                                        </div>
                                    </div>
                              </div>
                              <script>
                                    function openCity(evt, cityName) {
                                        var i, tabcontent, tablinks;
                                        tabcontent = document.getElementsByClassName("tabcontent");
                                        for (i = 0; i < tabcontent.length; i++) {
                                            tabcontent[i].style.display = "none";
                                        }
                                        tablinks = document.getElementsByClassName("tablinks");
                                        for (i = 0; i < tablinks.length; i++) {
                                            tablinks[i].className = tablinks[i].className.replace(" active", "");
                                        }
                                        document.getElementById(cityName).style.display = "block";
                                        evt.currentTarget.className += " active";
                                    }
                                    
                                    // Get the element with id="defaultOpen" and click on it
                                    document.getElementById("defaultOpen").click();
                                    </script>
                </div>
            </div>
            <div class="col-md-6">
                <div class="biet">
                        <p><b>
                                Biết thêm về chúng tôi
                        </b></p>
                        <button class="accordion">Bảo hiểm du lịch</button>
                        <div class="panel">
                        <p>
                        Bảo hiểm du lịch có thể giúp đỡ bạn khi gặp phải những rủi ro không đáng có, các trường hợp ốm đau nơi “đất khách quê người”, hủy chuyến...
                        </p>
                        </div>

                        <button class="accordion">Ưu đãi Ăn tối / Ăn trưa</button>
                        <div class="panel">
                        <p>
                        Bạn đang phân vân không biết ăn gì & đang tìm một không gian mới cho bữa trưa hoặc bữa tối?
                        </p>
                        </div>

                        <button class="accordion">Căn hộ sang trọng cho gia đình</button>
                        <div class="panel">
                        <p>Căn hộ này được thiết kế bởi kỹ sư Marcelo Rosset Arquitetura với phong cách thiết kế hiện đại mang nhiều nét đặc trưng riêng cực kỳ ấn tượng với điểm nhấn từ chất liệu gạch thô và những mảng màu tương phản trắng- xám</p>
                        </div>

                        <script>
                        var acc = document.getElementsByClassName("accordion");
                        var i;

                        for (i = 0; i < acc.length; i++) {
                        acc[i].addEventListener("click", function() {
                            this.classList.toggle("active");
                            var panel = this.nextElementSibling;
                            if (panel.style.maxHeight){
                            panel.style.maxHeight = null;
                            } else {
                            panel.style.maxHeight = panel.scrollHeight + "px";
                            } 
                        });
                        }
                        </script>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
            <div class="row">
                <div class="jpo">
                    <div class="col-md-12">
                        <p><b>Đội ngũ chuyên dụng Travel</b></p>
                    </div>
                        <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="img/JPO1.jpg" alt="">
                                    <div class="caption">
                                        <h3>Jessica Brown</h3>
                                        <small>CHIEF EXECUTIVE</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                    <div class="thumbnail">
                                        <img src="img/JPO2.jpg" alt="">
                                        <div class="caption">
                                                <h3>David Jackson</h3>
                                                <small>DIRECTOR – HOTELS</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <img src="img/JPO3.jpg" alt="">
                                            <div class="caption">
                                                    <h3>Kyle Martin</h3>
                                                    <small>CHIEF OPERATING OFFICER</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                            <div class="thumbnail">
                                                <img src="img/JPO4.jpg" alt="">
                                                <div class="caption">
                                                        <h3>Angela Jolly</h3>
                                                        <small>FOUNDER & DIRECTOR</small>
                                                </div>
                                            </div>
                                        </div>
                </div>
            </div>
        </div>
</div>

@include('modules.footer')