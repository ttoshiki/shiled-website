"use strict";

jQuery(function() {
  let eyeCatchSrcUrl = jQuery(".singleProduct__photos > img").attr('src');
  jQuery(".singleProduct__subPhoto").on('click', function() {
    let index = jQuery('.singleProduct__subPhoto').index(this);
    let thumbnailSrcUrl;

    if (index === 0) {
      thumbnailSrcUrl = eyeCatchSrcUrl;
      console.log('a')
    } else {
      thumbnailSrcUrl = jQuery(this).attr('src');
    }
    console.log(thumbnailSrcUrl);
    jQuery('.singleProduct__photos > img').attr('src', thumbnailSrcUrl);
    jQuery('.singleProduct__photos > img').attr('srcset', thumbnailSrcUrl);
  });

  jQuery(".singleProduct__questionWrapper").on('click', function() {
    jQuery(this).next().slideToggle();
    jQuery(this).toggleClass('-open')
  });
})