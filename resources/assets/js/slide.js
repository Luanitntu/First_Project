jQuery(document).ready(function() {
    $('.bgr').backstretch([
        "../img/1.jpg", "{{!!asset('img/1.jpg')!!}}", "{{asset('../img/1.1jpg')}}", "{{asset('./img/1.2jpg')}}", "{{asset('img/2.jpg')}}", "{{asset('img/3.jpg')}}"
    ], { duration: 3000, fade: 750 });
});
