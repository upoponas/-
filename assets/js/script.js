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
  })
  $(".close-btn").click(function () {
    $("header nav").css("transform", "translateX(-100%)");
  })


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
});
