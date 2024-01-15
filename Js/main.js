$(document).ready(function() {


  // Button Up
        var span = $(".up");
        $(window).scroll(function() {
          if ($(this).scrollTop() >= 250) {
            span.addClass("show");
          } else {
            span.removeClass("show");
          }
        });
    

        // Function Click Button Up
        span.click(function() {
          $("html, body").animate({
            scrollTop: 0
          }, 1000);
        });


        // Library Owl Carousel
        $('.owl-carousel').owlCarousel({
          nav:true,
          slideBy: 2,
          margin:10,
          autoPlay: true,
          animateIn: 'fadeIn', 
          animateOut: 'fadeOut',
          loop:true,
          responsive:{
            0: {
              itmes: 1,
            }
          }
          
      })

      
// Slider Slick Background
    $('.fade-slider-background').slick({
      slidesToShow: 1, // عدد الشرائح
      slidesToScroll: 1, // عدد الشرائح في التنقل في كل مره
      autoplay: true, // تشغيل تلقائي
      // autoplaySpeed: 1000, // سرعة التبديل التلقائي بين الشرائح بالميللي ثانية
      infinite: true, // إمكانية التنقل اللانهائي بين الشرائح
      // speed: 500, //سرعة الانتقال بين الشرائح بالميللي ثانية
      fade: true, // التاثثر يبقي بنعومه
      cssEase: 'linear', // نمط التأثير الذي يتم استخدامه لتغيير الشريحة
      arrows: true // إضافة خاصية الأسهم
    });
      




  
});
      

	
