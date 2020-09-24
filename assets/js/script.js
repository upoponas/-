$(function () {
  $(".menu-list ul").hide();
  $(".menu-list").has("ul").css("cursor", "default");

  $(".menu-list").hover(function () {
    $(this).children("ul").stop().slideDown(500);
  }, function () {
    $(this).children("ul").stop().slideUp(500);
  });

  $(".menu-icon").click(function () {
    $("header nav").css("transform", "translateX(100%)");
  });
  $(".close-btn").click(function () {
    $("header nav").css("transform", "translateX(-100%)");
  });

  // メニュー尾行設定
  var position = $(".chase").offset().top;
  var under = $("footer").offset().top;
  var height = $(".chase").innerHeight() + 60;
  var articleBottom = $("article").offset().top+$("article").innerHeight();
  $(window).scroll(function () {
    var y = $(window).scrollTop();
    var a = parseFloat(y-position) + 80;
    var m = a + "px";
    if (y < under-height) {
      if (y>position) {
      $(".chase").animate({ marginTop: m },10);
      } else {
        $(".chase").animate({ marginTop: 0 }, 10);
    }
    }
    if (y > articleBottom - height) {
      $(".chase").animate({ marginTop: articleBottom - height - position + 80 }, 10);
    }

  });


  /////////////////////
  // レスポンシブデザイン/
  /////////////////////
  if (window.matchMedia('(max-width:1024px)').matches){
    $(function () {
      var headerHeight = $('header').innerHeight()+'px';
      $('main').css('margin-top', headerHeight);
      $('.menu-icon').css('line-height', headerHeight);
    })
  }
  if (window.matchMedia('(max-width:468px)').matches) {
    $(function () {
      var headerHeight = $('header').innerHeight() + 'px';
      $('main').css('margin-top', headerHeight);
    })
  }


});
