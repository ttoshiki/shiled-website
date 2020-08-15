"use strict";

jQuery(function() {
  jQuery('a[href^="#"]').click(function(){
    var speed = 300;
    var href= jQuery(this).attr("href");
    var target = jQuery(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    jQuery("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });

  // ヘッダースクロール時固定
  let _window = jQuery(window),
  _header = jQuery(".header"),
  heroBottom;

  _window.on("scroll", function () {
    heroBottom = 94;
    if (_window.scrollTop() > heroBottom) {
      _header.addClass("-fixed");
    } else {
      _header.removeClass("-fixed");
    }
  });

  // タブレットの時はPC版縮小表示
  let ua = navigator.userAgent;
  if((ua.indexOf('iPhone') > 0) || ua.indexOf('iPod') > 0 || (ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0)){
      jQuery('head').prepend('<meta name="viewport" content="width=device-width,initial-scale=1">');
  } else {
      jQuery('head').prepend('<meta name="viewport" content="width=1440">');
  }
})