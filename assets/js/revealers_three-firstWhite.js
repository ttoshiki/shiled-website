"use strict";
// ブロックリビール
(function() {

			setTimeout(init, 10);

			function init() {

				var scrollElemToWatch_1 = document.getElementById('effect_01'),
				watcher_1 = scrollMonitor.create(scrollElemToWatch_1, -10),
				rev1 = new RevealFx(scrollElemToWatch_1, {
					revealSettings : {
						bgcolor: '#ffffff',
						duration: 350,
						onStart: function(contentEl, revealerEl) {
							anime.remove(contentEl);
							contentEl.style.opacity = 0;
						},
						onCover: function(contentEl, revealerEl) {
							contentEl.style.opacity = 1;
							anime({
								targets: contentEl,
								easing: 'easeOutExpo'
							});
						}
					}
				}),

				scrollElemToWatch_2 = document.getElementById('effect_02'),
				watcher_2 = scrollMonitor.create(scrollElemToWatch_2, -100),
				rev2 = new RevealFx(scrollElemToWatch_2, {
					revealSettings : {
						bgcolor: '#04287e',
						duration: 350,
						onStart: function(contentEl, revealerEl) {
							anime.remove(contentEl);
							contentEl.style.opacity = 0;
						},
						onCover: function(contentEl, revealerEl) {
							contentEl.style.opacity = 1;
							anime({
								targets: contentEl,
								easing: 'easeOutExpo'
							});
						}
					}
				}),

				scrollElemToWatch_3 = document.getElementById('effect_03'),
				watcher_3 = scrollMonitor.create(scrollElemToWatch_3, -100),
				rev3 = new RevealFx(scrollElemToWatch_3, {
					revealSettings : {
						bgcolor: '#04287e',
						duration: 350,
						onStart: function(contentEl, revealerEl) {
							anime.remove(contentEl);
							contentEl.style.opacity = 0;
						},
						onCover: function(contentEl, revealerEl) {
							contentEl.style.opacity = 1;
							anime({
								targets: contentEl,
								easing: 'easeOutExpo'
							});
						}
					}
				})

				watcher_1.enterViewport(function() {
					rev1.reveal();
					watcher_1.destroy();
				}),
				watcher_2.enterViewport(function() {
					rev2.reveal();
					watcher_2.destroy();
				}),
				watcher_3.enterViewport(function() {
					rev3.reveal();
					watcher_3.destroy();
				})
			}
		})();