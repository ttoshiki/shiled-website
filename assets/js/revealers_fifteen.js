"use strict";
// ブロックリビール
(function() {

			setTimeout(init, 10);

			function init() {

				let scrollElemToWatch_1 = document.getElementById('effect_01'),
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
				}),

				scrollElemToWatch_7 = document.getElementById('effect_07'),
				watcher_7 = scrollMonitor.create(scrollElemToWatch_7, -100),
				rev7 = new RevealFx(scrollElemToWatch_7, {
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

				scrollElemToWatch_8 = document.getElementById('effect_08'),
				watcher_8 = scrollMonitor.create(scrollElemToWatch_8, -100),
				rev8 = new RevealFx(scrollElemToWatch_8, {
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

				scrollElemToWatch_9 = document.getElementById('effect_09'),
				watcher_9 = scrollMonitor.create(scrollElemToWatch_9, -100),
				rev9 = new RevealFx(scrollElemToWatch_9, {
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

				scrollElemToWatch_10 = document.getElementById('effect_10'),
				watcher_10 = scrollMonitor.create(scrollElemToWatch_10, -100),
				rev10 = new RevealFx(scrollElemToWatch_10, {
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

				scrollElemToWatch_15 = document.getElementById('effect_15'),
				watcher_15 = scrollMonitor.create(scrollElemToWatch_15, -100),
				rev15 = new RevealFx(scrollElemToWatch_15, {
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

				scrollElemToWatch_16 = document.getElementById('effect_16'),
				watcher_16 = scrollMonitor.create(scrollElemToWatch_16, -100),
				rev16 = new RevealFx(scrollElemToWatch_16, {
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
				}),
				watcher_7.enterViewport(function() {
					rev7.reveal();
					watcher_7.destroy();
				}),
				watcher_8.enterViewport(function() {
					rev8.reveal();
					watcher_8.destroy();
				}),
				watcher_9.enterViewport(function() {
					rev9.reveal();
					watcher_9.destroy();
				}),
				watcher_10.enterViewport(function() {
					rev10.reveal();
					watcher_10.destroy();
				}),
				watcher_15.enterViewport(function() {
					rev15.reveal();
					watcher_15.destroy();
				}),
				watcher_16.enterViewport(function() {
					rev16.reveal();
					watcher_16.destroy();
				})
			}
		})();