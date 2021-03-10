"use strict";
jQuery(function () {
  jQuery('.service__executionButton').on('click', function () {
    jQuery('.executionFolded').toggleClass('-open')
    jQuery('.service__executionButton').toggleClass('-open')
    jQuery('.service__executionButton').toggleClass('-close')
    if (jQuery('.executionFolded').hasClass('-open')) {
      jQuery(this).text('CLOSE')
      let scrollElemToWatch_11 = document.getElementById('effect_11'),
        watcher_11 = scrollMonitor.create(scrollElemToWatch_11, -100),
        rev11 = new RevealFx(scrollElemToWatch_11, {
          revealSettings: {
            bgcolor: '#04287e',
            duration: 350,
            onStart: function (contentEl, revealerEl) {
              anime.remove(contentEl);
              contentEl.style.opacity = 0;
            },
            onCover: function (contentEl, revealerEl) {
              contentEl.style.opacity = 1;
              anime({
                targets: contentEl,
                easing: 'easeOutExpo'
              });
            }
          }
        }),
        scrollElemToWatch_12 = document.getElementById('effect_12'),
        watcher_12 = scrollMonitor.create(scrollElemToWatch_12, -100),
        rev12 = new RevealFx(scrollElemToWatch_12, {
          revealSettings: {
            bgcolor: '#04287e',
            duration: 350,
            onStart: function (contentEl, revealerEl) {
              anime.remove(contentEl);
              contentEl.style.opacity = 0;
            },
            onCover: function (contentEl, revealerEl) {
              contentEl.style.opacity = 1;
              anime({
                targets: contentEl,
                easing: 'easeOutExpo'
              });
            }
          }
        }),
        scrollElemToWatch_13 = document.getElementById('effect_13'),
        watcher_13 = scrollMonitor.create(scrollElemToWatch_13, -100),
        rev13 = new RevealFx(scrollElemToWatch_13, {
          revealSettings: {
            bgcolor: '#04287e',
            duration: 350,
            onStart: function (contentEl, revealerEl) {
              anime.remove(contentEl);
              contentEl.style.opacity = 0;
            },
            onCover: function (contentEl, revealerEl) {
              contentEl.style.opacity = 1;
              anime({
                targets: contentEl,
                easing: 'easeOutExpo'
              });
            }
          }
        }),
        scrollElemToWatch_14 = document.getElementById('effect_14'),
        watcher_14 = scrollMonitor.create(scrollElemToWatch_14, -100),
        rev14 = new RevealFx(scrollElemToWatch_14, {
          revealSettings: {
            bgcolor: '#04287e',
            duration: 350,
            onStart: function (contentEl, revealerEl) {
              anime.remove(contentEl);
              contentEl.style.opacity = 0;
            },
            onCover: function (contentEl, revealerEl) {
              contentEl.style.opacity = 1;
              anime({
                targets: contentEl,
                easing: 'easeOutExpo'
              });
            }
          }
        })
      watcher_11.enterViewport(function () {
          rev11.reveal();
          watcher_11.destroy();
        }),
        watcher_12.enterViewport(function () {
          rev12.reveal();
          watcher_12.destroy();
        }),
        watcher_13.enterViewport(function () {
          rev13.reveal();
          watcher_13.destroy();
        }),
        watcher_14.enterViewport(function () {
          rev14.reveal();
          watcher_14.destroy();
        })
    } else {
      jQuery(this).text('OPEN')
    }
  })
  jQuery('.service__nanozoneCoatButton').on('click', function () {
    jQuery('.nanozoneCoatFolded').toggleClass('-open')
    jQuery('.service__nanozoneCoatButton').toggleClass('-open')
    jQuery('.service__nanozoneCoatButton').toggleClass('-close')
    if (jQuery('.nanozoneCoatFolded').hasClass('-open')) {
      jQuery(this).text('CLOSE')
    } else {
      jQuery(this).text('OPEN')
    }
  })
})