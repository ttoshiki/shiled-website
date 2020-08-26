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
				})

				watcher_1.enterViewport(function() {
					rev1.reveal();
					watcher_1.destroy();
				})
			}
		})();