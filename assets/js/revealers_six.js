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
				}),

				scrollElemToWatch_4 = document.getElementById('effect_04'),
				watcher_4 = scrollMonitor.create(scrollElemToWatch_4, -100),
				rev4 = new RevealFx(scrollElemToWatch_4, {
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

				scrollElemToWatch_5 = document.getElementById('effect_05'),
				watcher_5 = scrollMonitor.create(scrollElemToWatch_5, -100),
				rev5 = new RevealFx(scrollElemToWatch_5, {
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

				scrollElemToWatch_6 = document.getElementById('effect_06'),
				watcher_6 = scrollMonitor.create(scrollElemToWatch_6, -100),
				rev6 = new RevealFx(scrollElemToWatch_6, {
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
				}),
				watcher_4.enterViewport(function() {
					rev4.reveal();
					watcher_4.destroy();
				}),
				watcher_5.enterViewport(function() {
					rev5.reveal();
					watcher_5.destroy();
				}),
				watcher_6.enterViewport(function() {
					rev6.reveal();
					watcher_6.destroy();
				})
			}
		})();