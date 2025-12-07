/*
Name: 			Theme Base
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version:	12.1.0
*/

// Theme
window.theme = {};

// Theme Common Functions
window.theme.fn = {

	getOptions(opts) {

		if (typeof(opts) == 'object') {

			return opts;

		} else if (typeof(opts) == 'string') {

			try {
				return JSON.parse(opts.replace(/'/g, '"').replace(';', ''));
			} catch (e) {
				return {};
			}

		} else {

			return {};

		}

	},

	execPluginFunction(functionName, context) {
		const args = Array.prototype.slice.call(arguments, 2);
		const namespaces = functionName.split(".");
		const func = namespaces.pop();

		for (let i = 0; i < namespaces.length; i++) {
			context = context[namespaces[i]];
		}

		return context[func](...args);
	},

	intObs(selector, functionName, intObsOptions, alwaysObserve) {
		const $el = document.querySelectorAll(selector);
		let intersectionObserverOptions = {
			rootMargin: '0px 0px 200px 0px'
		};

		if (Object.keys(intObsOptions).length) {
			intersectionObserverOptions = $.extend(intersectionObserverOptions, intObsOptions);
		}

		const observer = new IntersectionObserver(entries => {
            for (const entry of entries) {
                if (entry.intersectionRatio > 0) {
					if (typeof functionName === 'string') {
						Function('return ' + functionName)();
					} else {
                        functionName.call($(entry.target));
					}

					// Unobserve
					if (!alwaysObserve) {
						observer.unobserve(entry.target);
					}

				}
            }
        }, intersectionObserverOptions);

		$($el).each(function() {
			observer.observe($(this)[0]);
		});
	},

	intObsInit(selector, functionName) {
		const $el = document.querySelectorAll(selector);
		const intersectionObserverOptions = {
			rootMargin: '200px'
		};

		const observer = new IntersectionObserver(entries => {
            for (const entry of entries) {
                if (entry.intersectionRatio > 0) {
                    const $this = $(entry.target);
                    let opts;

                    const pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
                    if (pluginOptions)
						opts = pluginOptions;

                    theme.fn.execPluginFunction(functionName, $this, opts);

                    // Unobserve
                    observer.unobserve(entry.target);
                }
            }
        }, intersectionObserverOptions);

		$($el).each(function() {
			observer.observe($(this)[0]);
		});
	},

	dynIntObsInit(selector, functionName, pluginDefaults) {
		const $el = document.querySelectorAll(selector);

		$($el).each(function() {
            const $this = $(this);
            let opts;

            const pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
            if (pluginOptions)
				opts = pluginOptions;

            const mergedPluginDefaults = theme.fn.mergeOptions(pluginDefaults, opts);

            const intersectionObserverOptions = {
				rootMargin: theme.fn.getRootMargin(functionName, mergedPluginDefaults),
				threshold: 0
			};

            if (!mergedPluginDefaults.forceInit) {

				const observer = new IntersectionObserver(entries => {
                    for (const entry of entries) {
                        if (entry.intersectionRatio > 0) {
							theme.fn.execPluginFunction(functionName, $this, mergedPluginDefaults);

							// Unobserve
							observer.unobserve(entry.target);
						}
                    }
                }, intersectionObserverOptions);

				observer.observe($this[0]);

			} else {
				theme.fn.execPluginFunction(functionName, $this, mergedPluginDefaults);
			}
        });
	},

	getRootMargin(plugin, {accY}) {
		switch (plugin) {
			case 'themePluginCounter':
				return accY ? `0px 0px ${accY}px 0px` : '0px 0px 200px 0px';

			case 'themePluginAnimate':
				return accY ? `0px 0px ${accY}px 0px` : '0px 0px 200px 0px';

			case 'themePluginIcon':
				return accY ? `0px 0px ${accY}px 0px` : '0px 0px 200px 0px';

			case 'themePluginRandomImages':
				return accY ? `0px 0px ${accY}px 0px` : '0px 0px 200px 0px';

			default:
				return '0px 0px 200px 0px';
		}
	},

	mergeOptions(obj1, obj2) {
		const obj3 = {};

		for (var attrname1 in obj1) {
			obj3[attrname1] = obj1[attrname1];
		}
		for (var attrname2 in obj2) {
			obj3[attrname2] = obj2[attrname2];
		}

		return obj3;
	},

	execOnceTroughEvent($el, event, callback) {
		const self = this, dataName = self.formatDataName(event);

		$($el).on(event, function() {
			if (!$(this).data(dataName)) {

				// Exec Callback Function
				callback.call($(this));

				// Add data name
				$(this).data(dataName, true);

				// Unbind event
				$(this).off(event);
			}
		});

		return this;
	},

	execOnceTroughWindowEvent($el, event, callback) {
		const self = this, dataName = self.formatDataName(event);

		$($el).on(event, function() {
			if (!$(this).data(dataName)) {

				// Exec Callback Function
				callback();

				// Add data name
				$(this).data(dataName, true);

				// Unbind event
				$(this).off(event);
			}
		});

		return this;
	},

	formatDataName(name) {
		name = name.replace('.', '');
		return name;
	},

	showErrorMessage(title, content) {

		if ($('html').hasClass('disable-local-warning')) {
			return;
		}

		$('.modalThemeErrorMessage').remove();
		$('body').append('<div class="modal fade" id="modalThemeErrorMessage"><div class="modal-dialog modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">' + title + '</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body">' + content + '</div><div class="modal-footer"><button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button></div></div></div></div>');
        document.getElementById('modalThemeErrorMessage');
        var modalThemeErrorMessage = bootstrap.Modal.getOrCreateInstance(modalThemeErrorMessage);
        modalThemeErrorMessage.show();

    }


};

(((theme = {}, $) => {
	/*
	Local Environment Warning
	*/
	try {
		if ("file://" === location.origin) {
			if ($('[data-icon]').length || $('iframe').length) {

				theme.fn.showErrorMessage('Local Environment Warning', 'SVG Objects, Icons, YouTube and Vimeo Videos might not show correctly on local environment. For better result, please preview on a server.<br><br><a target="_blank" href="https://www.okler.net/forums/topic/how-to-disable-local-environment-warning/" class="fw-semibold"><i class="fa-solid fa-link"></i> How to Disable Local Environment Warning</a>');

			}
		}
	} catch (e) {}

	/*
	Browser Selector
	*/
	$.extend({

		browserSelector() {

			// jQuery.browser.mobile (http://detectmobilebrowser.com/)
			(a => {(jQuery.browser=jQuery.browser||{}).mobile=/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series([46])0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br([ev])w|bumb|bw-([nu])|c55\/|capi|ccwa|cdm-|cell|chtm|cldc|cmd-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc-s|devi|dica|dmob|do([cp])o|ds(12|-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly([-_])|g1 u|g560|gene|gf-5|g-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd-([mpt])|hei-|hi(pt|ta)|hp( i|ip)|hs-c|ht(c([- _agpst])|tp)|hu(aw|tc)|i-(20|go|ma)|i230|iac([ \-\/])|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja([tv])a|jbro|jemu|jigs|kddi|keji|kgt([ \/])|klon|kpt |kwc-|kyo([ck])|le(no|xi)|lg( g|\/([klu])|50|54|-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);

			// Touch
			const hasTouch = 'ontouchstart' in window || navigator.msMaxTouchPoints;

			const u = navigator.userAgent, ua = u.toLowerCase(), is = t => ua.includes(t), g = 'gecko', w = 'webkit', s = 'safari', o = 'opera', h = document.documentElement, b = [(!(/opera|webtv/i.test(ua)) && /msie\s(\d)/.test(ua)) ? (`ie ie${parseFloat(navigator.appVersion.split("MSIE")[1])}`) : is('firefox/2') ? `${g} ff2` : is('firefox/3.5') ? `${g} ff3 ff3_5` : is('firefox/3') ? `${g} ff3` : is('gecko/') ? g : is('opera') ? o + (/version\/(\d+)/.test(ua) ? ` ${o}${RegExp.jQuery1}` : (/opera(\s|\/)(\d+)/.test(ua) ? ` ${o}${RegExp.jQuery2}` : '')) : is('konqueror') ? 'konqueror' : is('chrome') ? `${w} chrome` : is('iron') ? `${w} iron` : is('applewebkit/') ? `${w} ${s}${/version\/(\d+)/.test(ua) ? ` ${s}${RegExp.jQuery1}` : ''}` : is('mozilla/') ? g : '', is('j2me') ? 'mobile' : is('iphone') ? 'iphone' : is('ipod') ? 'ipod' : is('mac') ? 'mac' : is('darwin') ? 'mac' : is('webtv') ? 'webtv' : is('win') ? 'win' : is('freebsd') ? 'freebsd' : (is('x11') || is('linux')) ? 'linux' : '', 'js'];

			let c = b.join(' ');

			if ($.browser.mobile) {
				c += ' mobile';
			}

			if (hasTouch) {
				c += ' touch';
			}

			h.className += ` ${c}`;

			// Edge Detect
			const isEdge = /Edge/.test(navigator.userAgent);

			if(isEdge) {
				$('html').removeClass('chrome').addClass('edge');
			}

			// Dark and Boxed Compatibility
            let $body = $('body');
			if($body.hasClass('dark')) {
				$('html').addClass('dark');
			}

			if($body.hasClass('boxed')) {
				$('html').addClass('boxed');
			}

		}

	});

	$.browserSelector();

	/*
	Browser Workarounds
	*/
	if (/iPad|iPhone|iPod/.test(navigator.platform)) {

		// iPad/Iphone/iPod Hover Workaround
		$(document).ready($ => {
			$('.thumb-info').attr('onclick', 'return true');
		});
	}

	/*
	Lazy Load Bacground Images
	*/

	// Check for IntersectionObserver support
	if ('IntersectionObserver' in window) {
		document.addEventListener("DOMContentLoaded", function() {

			function handleIntersection(entries) {
				entries.map((entry) => {
					if (entry.isIntersecting) {
						// Item has crossed our observation
						// threshold - load src from data-src
						entry.target.style.backgroundImage = "url('" + entry.target.dataset.bgSrc + "')";
						// Job done for this item - no need to watch it!
						observer.unobserve(entry.target);
					}
				});
			}

			const lazyLoadElements = document.querySelectorAll('.lazyload');
			const observer = new IntersectionObserver(
				handleIntersection, {
					rootMargin: "100px"
				}
			);
			lazyLoadElements.forEach(lazyLoadEl => observer.observe(lazyLoadEl));
		});
	} else {
		// No interaction support? Load all background images automatically
		const lazyLoadElements = document.querySelectorAll('.lazyload');
		lazyLoadElements.forEach(lazyLoadEl => {
			lazyLoadEl.style.backgroundImage = "url('" + lazyLoadEl.dataset.bgSrc + "')";
		});
	}

	/*
	Tabs
	*/
	if( $('a[data-bs-toggle="tab"]').length ) {
		$('a[data-bs-toggle="tab"]').on('shown.bs.tab', function({target}) {
			const $tabPane = $($(target).attr('href'));

			// Carousel Refresh
			if($tabPane.length) {
				$tabPane.find('.owl-carousel').trigger('refresh.owl.carousel');
			}

			// Change Active Class
			$(this).parents('.nav-tabs').find('.active').removeClass('active');
			$(this).addClass('active').parent().addClass('active');
		});

		if( window.location.hash ) {
			$(window).on('load', () => {
				if( window.location.hash !== '*' && $( window.location.hash ).get(0) ) {
					new bootstrap.Tab( $('a.nav-link[href="'+ window.location.hash +'"]:not([data-hash])')[0] ).show();
				}
			});
		}
	}

	/*
	On Load Scroll
	*/
	if( !$('html').hasClass('disable-onload-scroll') && window.location.hash && !['#*'].includes( window.location.hash ) ) {

		window.scrollTo(0, 0);

		$(window).on('load', () => {
			setTimeout(() => {
				const target = window.location.hash;
				let offset = ( $(window).width() < 768 ) ? 180 : 90;

				if (!$(target).length) {
					return;
				}

				if ( $("a[href$='" + window.location.hash + "']").is('[data-hash-offset]') ) {
					offset = parseInt( $("a[href$='" + window.location.hash + "']").first().attr('data-hash-offset') );
				} else if ( $("html").is('[data-hash-offset]') ) {
					offset = parseInt( $("html").attr('data-hash-offset') );
				}

				if (isNaN(offset)) {
					offset = 0;
				}

				$('body').addClass('scrolling');

				$('html, body').animate({
					scrollTop: $(target).offset().top - offset
				}, 600, 'easeOutQuad', () => {
					$('body').removeClass('scrolling');
				});
			}, 1);
		});
	}

	/*
	* Text Rotator
	*/
	$.fn.extend({
		textRotator(options) {

			const defaults = {
				fadeSpeed: 500,
				pauseSpeed: 100,
				child: null
			};

			var options = $.extend(defaults, options);

			return this.each(function() {
				const o = options;
				const obj = $(this);
				const items = $(obj.children(), obj);
				items.each(function() {
					$(this).hide();
				})
				if (!o.child) {
					var next = $(obj).children(':first');
				} else {
					var next = o.child;
				}
				$(next).fadeIn(o.fadeSpeed, () => {
					$(next).delay(o.pauseSpeed).fadeOut(o.fadeSpeed, function() {
						let next = $(this).next();
						if (next.length == 0) {
							next = $(obj).children(':first');
						}
						$(obj).textRotator({
							child: next,
							fadeSpeed: o.fadeSpeed,
							pauseSpeed: o.pauseSpeed
						});
					})
				});
			});
		}
	});

	/*
	* Notice Top bar
	*/
	const $noticeTopBar = {
		$wrapper: $('.notice-top-bar'),
		$closeBtn: $('.notice-top-bar-close'),
		$header: $('#header'),
		$body: $('.body'),
		init() {
			const self = this;

			if( !$.cookie('portoNoticeTopBarClose') ) {
				self
					.build()
					.events();
			} else {
				self.$wrapper.parent().prepend( '<!-- Notice Top Bar removed by cookie -->' );
				self.$wrapper.remove();
			}

			return this;
		},
		build() {
			const self = this;

			$(window).on('load', () => {
				setTimeout(() => {
					self.$body.css({
						'margin-top': self.$wrapper.outerHeight(),
						'transition': 'ease margin 300ms'
					});

					$('#noticeTopBarContent').textRotator({
						fadeSpeed: 500,
						pauseSpeed: 5000
					});

					if( ['absolute', 'fixed'].includes( self.$header.css('position') ) ) {
						self.$header.css({
							'top': self.$wrapper.outerHeight(),
							'transition': 'ease top 300ms'
						});
					}

					$(window).trigger('notice.top.bar.opened');

				}, 1000);
			});

			return this;
		},
		events() {
			const self = this;

			self.$closeBtn.on('click', e => {
				e.preventDefault();

				self.$body.animate({
					'margin-top': 0,
				}, 300, () => {
					self.$wrapper.remove();
					self.saveCookie();
				});

				if( ['absolute', 'fixed'].includes( self.$header.css('position') ) ) {
					self.$header.animate({
						top: 0
					}, 300);
				}

				// When header has shrink effect
				if( self.$header.hasClass('header-effect-shrink') ) {
					self.$header.find('.header-body').animate({
						top: 0
					}, 300);
				}

				$(window).trigger('notice.top.bar.closed');
			});

			return this;
		},
		checkCookie() {
			const self = this;

			if( $.cookie('portoNoticeTopBarClose') ) {
				return true;
			} else {
				return false;
			}

			return this;
		},
		saveCookie() {
			const self = this;

			$.cookie('portoNoticeTopBarClose', true);

			return this;
		}
	};

	if( $('.notice-top-bar').length ) {
		$noticeTopBar.init();
	}

	/*
	* Image Hotspots
	*/
	if( $('.image-hotspot').length ) {
		$('.image-hotspot')
			.append('<span class="ring"></span>')
			.append('<span class="circle"></span>');
	}

	/*
	* Reading Progress
	*/
	if( $('.progress-reading').length ) {

		function updateScrollProgress() {
			const pixels = $(document).scrollTop();
				pageHeight = $(document).height() - $(window).height()
				progress = 100 * pixels / pageHeight;

			$('.progress-reading .progress-bar').width(parseInt(progress) + "%");
		}

		$(document).on('scroll ready', () => {
			updateScrollProgress();
		});

		$(document).ready(() => {
			$(window).afterResize(() => {
				updateScrollProgress();
			});
		});

	}

	/*
	* Page Transition
	*/
	if( $('body[data-plugin-page-transition]').length ) {

		let link_click = false;

		$(document).on('click', 'a', function(e){
			link_click = $(this);
		});

		$(window).on("beforeunload", e => {
			if( typeof link_click === 'object' ) {
				const href = link_click.attr('href');

				if( href.indexOf('mailto:') != 0 && href.indexOf('tel:') != 0 && !link_click.data('rm-from-transition') ) {
					$('body').addClass('page-transition-active');
				}
			}
		});

		$(window).on("pageshow", ({persisted, originalEvent}) => {
			if( persisted || originalEvent.persisted) {
				if( $('html').hasClass('safari') ) {
					window.location.reload();
				}

				$('body').removeClass('page-transition-active');
			}
		});
	}

	/*
	* Clone Element
	*/
	if( $('[data-clone-element]').length ) {

		$('[data-clone-element]').each(function() {

			const $el = $(this), content = $el.html(), qty = $el.attr('data-clone-element');

			for (let i = 0; i < qty; i++) {
				$el.html($el.html() + content);
			}

		});

	}

	if( $('[data-clone-element-to]').length ) {

		$('[data-clone-element-to]').each(function() {

			const $el = $(this);
			const content = $el.html();
			const $to = $($el.attr('data-clone-element-to'));

			$to.html($to.html() + content);

		});

	}

	/*
	* Thumb Info Floating Caption
	*/
	$('.thumb-info-floating-caption').each(function() {

		$(this)
			.addClass('thumb-info-floating-element-wrapper')
			.append( '<span class="thumb-info-floating-element thumb-info-floating-caption-title d-none">'+ $(this).data('title') +'</span>' );

		if( $(this).data('type') ) {
			$('.thumb-info-floating-caption-title', $(this))
				.append( '<div class="thumb-info-floating-caption-type">'+ $(this).data('type') +'</div>' )
				.css({
					'padding-bottom' : 22
				});
		}

		if( $(this).hasClass('thumb-info-floating-caption-clean') ) {
			$('.thumb-info-floating-element', $(this)).addClass('bg-transparent');
		}

	});

	/*
	* Thumb Info Floating Element
	*/
	if( $('.thumb-info-floating-element-wrapper').length ) {

		if (typeof gsap !== 'undefined') {

			$('.thumb-info-floating-element-wrapper').on('mouseenter', function({clientX, clientY}) {

				if(!$(this).data('offset')) {
					$(this).data('offset', 0);
				}

				const offset = parseInt($(this).data('offset'));

				$('.thumb-info-floating-element-clone').remove();

				$('.thumb-info-floating-element', $(this)).clone().addClass('thumb-info-floating-element-clone p-fixed p-events-none').attr('style', 'transform: scale(0.1);').removeClass('d-none').appendTo('body');

				$('.thumb-info-floating-element-clone').css({
					left: clientX + (offset),
					top: clientY + (offset)
				}).fadeIn(300);

				gsap.to('.thumb-info-floating-element-clone', 0.5, {
					css: {
						scaleX: 1,
						scaleY: 1
					}
				});

				$(document).off('mousemove').on('mousemove', ({clientX, clientY}) => {

					gsap.to('.thumb-info-floating-element-clone', 0.5, {
						css: {
							left: clientX + (offset),
							top: clientY + (offset)
						}
					});

				});

			}).on('mouseout', () => {

				gsap.to('.thumb-info-floating-element-clone', 0.5, {
					css: {
						scaleX: 0.5,
						scaleY: 0.5,
						opacity: 0
					}
				});

			});

		} else {
			theme.fn.showErrorMessage('Failed to Load File', 'Failed to load: GSAP - Include the following file(s): (vendor/gsap/gsap.min.js)');
		}

	}

	/*
	* Thumb Info Direction Aware
	*/
	$(window).on('load', () => {
		$('.thumb-info-wrapper-direction-aware').each( function() {
			$(this).hoverdir({
				speed : 300,
				easing : 'ease',
				hoverDelay : 0,
				inverse : false,
				hoverElem: '.thumb-info-wrapper-overlay'
			});
		});
	});

	/*
	* Thumb Info Container Full
	*/
	$('.thumb-info-container-full-img').each(function() {

		const $container = $(this);

		$('[data-full-width-img-src]', $container).each(function() {
			const uniqueId = 'img' + Math.floor(Math.random() * 10000);
			$(this).attr('data-rel', uniqueId);

			$container.append('<div style="background-image: url(' + $(this).attr('data-full-width-img-src') + ');" id="' + uniqueId + '" class="thumb-info-container-full-img-large opacity-0"></div>');
		});

		$('.thumb-info', $container).on('mouseenter', function(e){
			$('.thumb-info-container-full-img-large').removeClass('active');
			$('#' + $(this).attr('data-rel')).addClass('active');
		});

	});

	/*
	* Toggle Text Click
	*/
	$('[data-toggle-text-click]').on('click', function () {
		$(this).text(function(i, text){
			return text === $(this).attr('data-toggle-text-click') ? $(this).attr('data-toggle-text-click-alt') : $(this).attr('data-toggle-text-click');
		});
	});

	/*
	* Toggle Class
	*/
	$('[data-toggle-class]').on('click', function (e) {
		e.preventDefault();

		$(this).toggleClass( $(this).data('toggle-class') );
	});

	/*
	* Shape Divider Aspect Ratio
	*/
	if( $('.shape-divider').length ) {
		aspectRatioSVG();
		$(window).on('resize', () => {
			aspectRatioSVG();
		});
	}

	/*
	* Shape Divider Animated
	*/
	if( $('.shape-divider-horizontal-animation').length ) {
		theme.fn.intObs('.shape-divider-horizontal-animation', function(){
			for( let i = 0; i <= 1; i++ ) {
				const svgClone = $(this).find('svg:nth-child(1)').clone();

				$(this).append( svgClone )
			}

			$(this).addClass('start');
		}, {});
	}

	/*
	* Shape Divider - SVG Aspect Ratio
	*/
	function aspectRatioSVG() {
		if( $(window).width() < 1950 ) {
			$('.shape-divider svg[preserveAspectRatio]').each(function(){
				if( !$(this).parent().hasClass('shape-divider-horizontal-animation') ) {
					$(this).attr('preserveAspectRatio', 'xMinYMin');
				} else {
					$(this).attr('preserveAspectRatio', 'none');
				}
			});
		} else {
			$('.shape-divider svg[preserveAspectRatio]').each(function(){
				$(this).attr('preserveAspectRatio', 'none');
			});
		}
	}

	/*
	* Content Switcher
	*/
	$('[data-content-switcher]').on('change', function(e, v) {
		const switcherRel = ($(this).is(':checked') ? '1' : '2' ), switcherId = $(this).attr('data-content-switcher-content-id');

		$('[data-content-switcher-id=' + switcherId + ']').addClass('initialized').removeClass('active');

		const $activeEl = $('[data-content-switcher-id=' + switcherId + '][data-content-switcher-rel=' + switcherRel + ']');

		$activeEl.addClass('active');

		$activeEl.parent().css('height', $activeEl.height());
	});

	$('[data-content-switcher]').trigger('change');

	/*
	* Dynamic Height
	*/
	var $window = $(window);
	$window.on('resize dynamic.height.resize', () => {
		$('[data-dynamic-height]').each(function(){
			const $this = $(this), values = JSON.parse($this.data('dynamic-height').replace(/'/g,'"').replace(';',''));

			// XS
			if( $window.width() < 576 ) {
				$this.height( values[4] );
			}

			// SM
			if( $window.width() > 575 && $window.width() < 768 ) {
				$this.height( values[3] );
			}

			// MD
			if( $window.width() > 767 && $window.width() < 992 ) {
				$this.height( values[2] );
			}

			// LG
			if( $window.width() > 991 && $window.width() < 1200 ) {
				$this.height( values[1] );
			}

			// XS
			if( $window.width() > 1199 ) {
				$this.height( values[0] );
			}
		});
	});

	// Mobile First Load
	if( $window.width() < 992 ) {
		$window.trigger('dynamic.height.resize');
	}

	/*
	* Video - Trigger Play
	*/
	if( $('[data-trigger-play-video]').length ) {
		theme.fn.execOnceTroughEvent( '[data-trigger-play-video]', 'mouseover.trigger.play.video', function(){
			const $video = $( $(this).data('trigger-play-video') );

			$(this).on('click', function(e){
				e.preventDefault();

				if( $(this).data('trigger-play-video-remove') == 'yes' ) {
					$(this).animate({
						opacity: 0
					}, 300, function(){
						$video[0].play();

						$(this).remove();
					});
				} else {
					setTimeout(() => {
						$video[0].play();
					},300);
				}
			});
		});
	}

	/*
	* Video - Auto Play
	*/
	if( $('video[data-auto-play]').length ) {
		$(window).on('load', () => {
			$('video[data-auto-play]').each(function(){
				const $video = $(this);

				setTimeout(() => {
					if( $( '#' + $video.attr('id') ).length ) {
						if( $( '[data-trigger-play-video="#' + $video.attr('id') + '"]' ).data('trigger-play-video-remove') == 'yes' ) {
							$( '[data-trigger-play-video="#' + $video.attr('id') + '"]' ).animate({
								opacity: 0
							}, 300, () => {
								$video[0].play();

								$( '[data-trigger-play-video="#' + $video.attr('id') + '"]' ).remove();
							});
						} else {
							setTimeout(() => {
								$video[0].play();
							},300);
						}
					}
				}, 100);

			});
		});
	}

	/*
	* Remove min height after the load of page
	*/
	if( $('[data-remove-min-height]').length ) {
		$(window).on('load', () => {
			$('[data-remove-min-height]').each(function(){
				$(this).css({
					'min-height': 0
				});
			});
		});
	}

	/*
	* Title Border
	*/
	if($('[data-title-border]').length) {

		const $pageHeaderTitleBorder = $('<span class="page-header-title-border"></span>'), $pageHeaderTitle = $('[data-title-border]'), $window = $(window);

		$pageHeaderTitle.before($pageHeaderTitleBorder);

		const setPageHeaderTitleBorderWidth = () => {
			$pageHeaderTitleBorder.width($pageHeaderTitle.width());
		};

		$window.afterResize(() => {
			setPageHeaderTitleBorderWidth();
		});

		setPageHeaderTitleBorderWidth();

		$pageHeaderTitleBorder.addClass('visible');
	}

	/*
	* Footer Reveal
	*/
	($ => {
		const $footerReveal = {
			$wrapper: $('.footer-reveal'),
			init() {
				const self = this;

				self.build();
				self.events();
			},
			build() {
				const self = this, footer_height = self.$wrapper.outerHeight(true), window_height = ( $(window).height() - $('.header-body').height() );

				if( footer_height > window_height ) {
					$('#footer').removeClass('footer-reveal');
					$('body').css('margin-bottom', 0);
				} else {
					$('#footer').addClass('footer-reveal');
					$('body').css('margin-bottom', footer_height);
				}

			},
			events() {
				const self = this, $window = $(window);

				$window.on('load', () => {
					$window.afterResize(() => {
						self.build();
					});
				});
			}
		};

		if( $('.footer-reveal').length ) {
			$footerReveal.init();
		}
	})(jQuery);

	/*
	* Re-Init Plugin
	*/
	if( $('[data-reinit-plugin]').length ) {
		$('[data-reinit-plugin]').on('click', function(e) {
			e.preventDefault();

			const pluginInstance = $(this).data('reinit-plugin'), pluginFunction = $(this).data('reinit-plugin-function'), pluginElement  = $(this).data('reinit-plugin-element'), pluginOptions  = theme.fn.getOptions($(this).data('reinit-plugin-options'));

			$( pluginElement ).data( pluginInstance ).destroy();

			setTimeout(() => {
				theme.fn.execPluginFunction(pluginFunction, $( pluginElement ), pluginOptions);
			}, 1000);

		});
	}

	/*
	* Simple Copy To Clipboard
	*/
	if( $('[data-copy-to-clipboard]').length ) {
		theme.fn.intObs( '[data-copy-to-clipboard]', function(){
			const $this = $(this);

			$this.wrap( '<div class="copy-to-clipboard-wrapper position-relative"></div>' );

			const $copyButton = $('<a href="#" class="btn btn-primary btn-px-2 py-1 text-0 position-absolute top-8 right-8">COPY</a>');
			$this.parent().prepend( $copyButton );

			$copyButton.on('click', function(e){
				e.preventDefault();

				const $btn       = $(this), $temp = $('<textarea class="d-block opacity-0" style="height: 0;">');

				$btn.parent().append( $temp );

				$temp.val( $this.text() );

				$temp[0].select();
				$temp[0].setSelectionRange(0, 99999);

				document.execCommand("copy");

				$btn.addClass('copied');
				setTimeout(() => {
					$btn.removeClass('copied');
				}, 1000);

				$temp.remove();
			});
		}, {
			rootMargin: '0px 0px 0px 0px'
		} );
	}

	/*
	* Marquee
	*/
	if( $('.marquee').length && $.isFunction($.fn.marquee) ) {
		$('.marquee').marquee({
			duration: 5000,
			gap: 0,
			delayBeforeStart: 0,
			direction: 'left',
			duplicated: true
		});
	}

	/*
	* Style Switcher Open Loader Button
	*/
	if( $('.style-switcher-open-loader').length ) {

		const urlParams = new URLSearchParams(window.location.search);

		let hideStyleSwitcherAfterShow = false;

		$('.style-switcher-open-loader').on('click', function(e){
			e.preventDefault();

			const $this = $(this);

			// Add Spinner to icon
			$this.addClass('style-switcher-open-loader-loading');

			const basePath = $(this).data('base-path'), skinSrc = $(this).data('skin-src');

			const script1 = document.createElement("script");
			script1.src = basePath + "master/style-switcher/style.switcher.localstorage.js";

			const script2 = document.createElement("script");
			script2.src = basePath + "master/style-switcher/style.switcher.js";
			script2.id = "styleSwitcherScript";
			script2.setAttribute('data-base-path', basePath);
			script2.setAttribute('data-skin-src', skinSrc);

			script2.onload = () => {
				setTimeout(() => {
					// Trigger a click to open the style switcher sidebar
					function checkIfReady() {
						if( !$('.style-switcher-open').length ) {
							window.setTimeout(checkIfReady, 100);
						} else {
							$('.style-switcher-open').trigger('click');

							if (hideStyleSwitcherAfterShow) {
								setTimeout(() => {
									$('.style-switcher-open').trigger('click');
								}, 2000);
							}
						}
					}
					checkIfReady();

				}, 500);
			}

			document.body.appendChild(script1);
			document.body.appendChild(script2);

		});

		let htmlDataOptions = $('html').data('style-switcher-options');
		let showSwitcher = false;

		if(htmlDataOptions) {
			htmlDataOptions = htmlDataOptions.replace(/'/g, '"');

			if (JSON.parse(htmlDataOptions).showSwitcher) {
				showSwitcher = true;
			}

			if (JSON.parse(htmlDataOptions).hideStyleSwitcherAfterShow) {
				hideStyleSwitcherAfterShow = true;
			}
		}

		if (urlParams.has("showStyleSwitcher")) {
			showSwitcher = true;
		}

		if (urlParams.has("hideStyleSwitcherAfterShow")) {
			hideStyleSwitcherAfterShow = true;
		}

		if (showSwitcher) {
			$('.style-switcher-open-loader').trigger('click');
		}

	}

})).apply(this, [ window.theme, jQuery ]);

// Nav
(((theme = {}, $) => {
    let initialized = false;

    $.extend(theme, {

		Nav: {

			defaults: {
				wrapper: $('#mainNav'),
				scrollDelay: 600,
				scrollAnimation: 'easeOutQuad'
			},

			initialize($wrapper, opts) {
				if (initialized) {
					return this;
				}

				initialized = true;
				this.$wrapper = ($wrapper || this.defaults.wrapper);

				this
					.setOptions(opts)
					.build()
					.events();

				return this;
			},

			setOptions(opts) {
				this.options = $.extend(true, {}, this.defaults, opts, theme.fn.getOptions(this.$wrapper.data('plugin-options')));

				return this;
			},

			build() {
                const self = this;
                const $html = $('html');
                const $header = $('#header');
                const $headerNavMain = $('#header .header-nav-main');
                let thumbInfoPreview;

                // Preview Thumbs
                if( self.$wrapper.find('a[data-thumb-preview]').length ) {
					self.$wrapper.find('a[data-thumb-preview]').each(function() {
						thumbInfoPreview = $('<span />').addClass('thumb-info thumb-info-preview')
												.append($('<span />').addClass('thumb-info-wrapper')
													.append($('<span />').addClass('thumb-info-image').css('background-image', 'url(' + $(this).data('thumb-preview') + ')')
											   )
										   );

						$(this).append(thumbInfoPreview);
					});
				}

                // Clone Items
                if($headerNavMain.hasClass('header-nav-main-clone-items')) {

			    	$headerNavMain.find('nav > ul > li > a').each(function(){
				    	const parent = $(this).parent(), clone  = $(this).clone(), clone2 = $(this).clone(), wrapper = $('<span class="wrapper-items-cloned"></span>');

				    	// Config Classes
				    	$(this).addClass('item-original');
				    	clone2.addClass('item-two');

				    	// Insert on DOM
				    	parent.prepend(wrapper);
				    	wrapper.append(clone).append(clone2);
				    });

				}

                // Floating
                if($('#header.header-floating-icons').length && $(window).width() > 991) {

					const menuFloatingAnim = {
						$menuFloating: $('#header.header-floating-icons .header-container > .header-row'),

						build() {
							const self = this;

							self.init();
						},
						init() {
                            const self  = this;
                            let divisor = 0;

                            $(window).scroll(function() {
							    const scrollPercent = 100 * $(window).scrollTop() / ($(document).height() - $(window).height()), st = $(this).scrollTop();

								divisor = $(document).height() / $(window).height();

							    self.$menuFloating.find('.header-column > .header-row').css({
							    	transform : 'translateY( calc('+ scrollPercent +'vh - '+ st / divisor +'px) )'
							    });
							});
                        }
					};

					menuFloatingAnim.build();

				}

                // Slide
                if($('.header-nav-links-vertical-slide').length) {
					const slideNavigation = {
						$mainNav: $('#mainNav'),
						$mainNavItem: $('#mainNav li'),

						build() {
							const self = this;

							self.menuNav();
						},
						menuNav() {
							const self = this;

							self.$mainNavItem.on('click', function(e){
								const currentMenuItem 	= $(this), currentMenu 		= $(this).parent(), nextMenu        	= $(this).find('ul').first(), prevMenu        	= $(this).closest('.next-menu'), isSubMenu       	= currentMenuItem.hasClass('dropdown') || currentMenuItem.hasClass('dropdown-submenu'), isBack          	= currentMenuItem.hasClass('back-button'), nextMenuHeightDiff  = ( ( nextMenu.find('> li').length * nextMenu.find('> li').outerHeight() ) - nextMenu.outerHeight() ), prevMenuHeightDiff  = ( ( prevMenu.find('> li').length * prevMenu.find('> li').outerHeight() ) - prevMenu.outerHeight() );

								if( isSubMenu ) {
									currentMenu.addClass('next-menu');
									nextMenu.addClass('visible');
									currentMenu.css({
										overflow: 'visible',
										'overflow-y': 'visible'
									});

									if( nextMenuHeightDiff > 0 ) {
										nextMenu.css({
											overflow: 'hidden',
											'overflow-y': 'scroll'
										});
									}

									for( i = 0; i < nextMenu.find('> li').length; i++ ) {
										if( nextMenu.outerHeight() < ($('.header-row-side-header').outerHeight() - 100) ) {
											nextMenu.css({
												height: nextMenu.outerHeight() + nextMenu.find('> li').outerHeight()
											});
										}
									}

									nextMenu.css({
										'padding-top': nextMenuHeightDiff + 'px'
									});
								}

								if( isBack ) {
									currentMenu.parent().parent().removeClass('next-menu');
									currentMenu.removeClass('visible');

									if( prevMenuHeightDiff > 0 ) {
										prevMenu.css({
											overflow: 'hidden',
											'overflow-y': 'scroll'
										});
									}
								}

								e.stopPropagation();
							});
						}
					};

					$(window).trigger('resize');

					if( $(window).width() > 991 ) {
						slideNavigation.build();
					}

					$(document).ready(() => {
						$(window).afterResize(() => {
							if( $(window).width() > 991 ) {
								slideNavigation.build();
							}
						});
					});
				}

                // Header Nav Main Mobile Dark
                if($('.header-nav-main-mobile-dark').length) {
					$('#header:not(.header-transparent-dark-bottom-border):not(.header-transparent-light-bottom-border)').addClass('header-no-border-bottom');
				}

                // Keyboard Navigation / Accessibility
                if( $(window).width() > 991 ) {
					let focusFlag = false;
					$header.find('.header-nav-main nav > ul > li > a').on('focus', function(){

						if( $(window).width() > 991 ) {
							if( !focusFlag ) {
								focusFlag = true;
								$(this).trigger('blur');

								self.focusMenuWithChildren();
							}
						}

					});
				}

                return this;
            },

			focusMenuWithChildren() {
                // Get all the link elements within the primary menu.
                let links;

                let i;
                let len;
                const menu = document.querySelector( 'html:not(.side-header):not(.side-header-hamburguer-sidebar):not(.side-header-overlay-full-screen) .header-nav-main > nav' );

                if ( ! menu ) {
					return false;
				}

                links = menu.getElementsByTagName( 'a' );

                // Each time a menu link is focused or blurred, toggle focus.
                for ( i = 0, len = links.length; i < len; i++ ) {
					links[i].addEventListener( 'focus', toggleFocus, true );
					links[i].addEventListener( 'blur', toggleFocus, true );
				}

                //Sets or removes the .focus class on an element.
                function toggleFocus() {
					let self = this;

					// Move up through the ancestors of the current link until we hit .primary-menu.
					while ( !self.className.includes('header-nav-main') ) {
						// On li elements toggle the class .focus.
						if ( 'li' === self.tagName.toLowerCase() ) {
							if ( self.className.includes('accessibility-open') ) {
								self.className = self.className.replace( ' accessibility-open', '' );
							} else {
								self.className += ' accessibility-open';
							}
						}
						self = self.parentElement;
					}
				}
            },

			events() {
                const self    = this;
                const $html   = $('html');
                let $header = $('#header');
                const $window = $(window);
                let headerBodyHeight = $('.header-body').outerHeight();

                if( $header.hasClass('header') ) {
					$header = $('.header');
				}

                $header.find('a[href="#"]').on('click', e => {
					e.preventDefault();
				});

                console.log('here');
                // Mobile Arrows
                if( $html.hasClass('side-header-hamburguer-sidebar') ) {
					$header.find('.dropdown-toggle, .dropdown-submenu > a')
						.append('<i class="fas fa-chevron-down fa-chevron-right"></i>');
				} else {
                    console.log($header.find('.dropdown-toggle, .dropdown-submenu > a'));
					$header.find('.dropdown-toggle, .dropdown-submenu > a')
						.append('<i class="fas fa-chevron-down"></i>');
				}

                $header.find('.dropdown-toggle[href="#"], .dropdown-submenu a[href="#"], .dropdown-toggle[href!="#"] .fa-chevron-down, .dropdown-submenu a[href!="#"] .fa-chevron-down').on('click', function(e) {
					e.preventDefault();
					if ($window.width() < 992) {
						$(this).closest('li').toggleClass('open');

						// Adjust Header Body Height
						const height = ( $header.hasClass('header-effect-shrink') && $html.hasClass('sticky-header-active') ) ? theme.StickyHeader.options.stickyHeaderContainerHeight : headerBodyHeight;
						$('.header-body').animate({
					 		height: ($('.header-nav-main nav').outerHeight(true) + height) + 10
					 	}, 0);
					}
				});

                $header.find('li a.active').addClass('current-page-active');

                // Add Open Class
                $header.find('.header-nav-click-to-open .dropdown-toggle[href="#"], .header-nav-click-to-open .dropdown-submenu a[href="#"], .header-nav-click-to-open .dropdown-toggle > i').on('click', function(e) {
					if( !$('html').hasClass('side-header-hamburguer-sidebar') && $window.width() > 991 ) {
						e.preventDefault();
						e.stopPropagation();
					}

					if ($window.width() > 991) {
						e.preventDefault();
						e.stopPropagation();

						$header.find('li a.active').removeClass('active');

						if( $(this).prop('tagName') == 'I' ) {
							$(this).parent().addClass('active');
						} else {
							$(this).addClass('active');
						}

						if (!$(this).closest('li').hasClass('open')) {
                            const $li = $(this).closest('li');
                            let isSub = false;

                            if( $(this).prop('tagName') == 'I' ) {
								$('#header .dropdown.open').removeClass('open');
								$('#header .dropdown-menu .dropdown-submenu.open').removeClass('open');
							}

                            if ( $(this).parent().hasClass('dropdown-submenu') ) {
								isSub = true;
							}

                            $(this).closest('.dropdown-menu').find('.dropdown-submenu.open').removeClass('open');
                            $(this).parent('.dropdown').parent().find('.dropdown.open').removeClass('open');

                            if (!isSub) {
								$(this).parent().find('.dropdown-submenu.open').removeClass('open');
							}

                            $li.addClass('open');

                            $(document).off('click.nav-click-to-open').on('click.nav-click-to-open', ({target}) => {
								if (!$li.is(target) && $li.has(target).length === 0) {
									$li.removeClass('open');
									$li.parents('.open').removeClass('open');
									$header.find('li a.active').removeClass('active');
									$header.find('li a.current-page-active').addClass('active');
								}
							});
                        } else {
							$(this).closest('li').removeClass('open');
							$header.find('li a.active').removeClass('active');
							$header.find('li a.current-page-active').addClass('active');
						}

						$window.trigger({
							type: 'resize',
							from: 'header-nav-click-to-open'
						});
					}
				});

                // Collapse Nav
                $header.find('[data-collapse-nav]').on('click', function(e) {
					$(this).parents('.collapse').removeClass('show');
				});

                // Top Features
                $header.find('.header-nav-features-toggle').on('click', function(e) {
					e.preventDefault();

					const $toggleParent = $(this).parent();

					if (!$(this).siblings('.header-nav-features-dropdown').hasClass('show')) {

						const $dropdown = $(this).siblings('.header-nav-features-dropdown');

						$('.header-nav-features-dropdown.show').removeClass('show');

						$dropdown.addClass('show');

						$(document).off('click.header-nav-features-toggle').on('click.header-nav-features-toggle', ({target}) => {
							if (!$toggleParent.is(target) && $toggleParent.has(target).length === 0) {
								$('.header-nav-features-dropdown.show').removeClass('show');
							}
						});

						if ($(this).attr('data-focus')) {
							$('#' + $(this).attr('data-focus')).focus();
						}

					} else {
						$(this).siblings('.header-nav-features-dropdown').removeClass('show');
					}
				});

                // Hamburguer Menu
                const $hamburguerMenuBtn = $('.hamburguer-btn:not(.side-panel-toggle)'), $hamburguerSideHeader = $('#header.side-header, #header.side-header-overlay-full-screen');

                $hamburguerMenuBtn.on('click', function(){
					if($(this).attr('data-set-active') != 'false') {
						$(this).toggleClass('active');
					}
					$hamburguerSideHeader.toggleClass('side-header-hide');
					$html.toggleClass('side-header-hide');

					$window.trigger('resize');
				});

                // Toggle Side Header
                $('.toggle-side-header').on('click', () => {
					$('.hamburguer-btn-side-header.active').trigger('click');
				});

                $('.hamburguer-close:not(.side-panel-toggle)').on('click', () => {
					$('.hamburguer-btn:not(.hamburguer-btn-side-header-mobile-show)').trigger('click');
				});

                // Set Header Body Height when open mobile menu
                $('#primaryNav').on('show.bs.collapse', function () {
				 	$(this).removeClass('closed');

				 	// Add Mobile Menu Opened Class
				 	$('html').addClass('mobile-menu-opened');

                     console.log('show');;
                     console.log($('.header-body').outerHeight(), $('.header-nav-main nav').outerHeight(true), 10, ($('.header-body').outerHeight() + $('.header-nav-main nav').outerHeight(true)) + 10)

			 		$('.header-body').animate({
				 		height: ($('.header-body').outerHeight() + $('.header-nav-main nav').outerHeight(true)) + 10
				 	});

				 	// Header Below Slider / Header Bottom Slider - Scroll to menu position
				 	if( $('#header').is('.header-bottom-slider, .header-below-slider') && !$('html').hasClass('sticky-header-active') ) {
				 		self.scrollToTarget( $('#header'), 0 );
				 	}
				});

                // Set Header Body Height when collapse mobile menu
                $('#primaryNav').on('hide.bs.collapse', function () {
                    console.log('hide');
				 	$(this).addClass('closed');

				 	// Remove Mobile Menu Opened Class
				 	$('html').removeClass('mobile-menu-opened');

			 		$('.header-body').animate({
				 		height: ($('.header-body').outerHeight() - $('.header-nav-main nav').outerHeight(true))
				 	}, function(){
				 		$(this).height('auto');
				 	});
				});

                // Remove Open Class on Resize
                $window.on('resize.removeOpen', ({from}) => {
					if( from == 'header-nav-click-to-open' ) {
						return;
					}

					setTimeout(() => {
						if( $window.width() > 991 ) {
							$header.find('.dropdown.open').removeClass('open');
						}
					}, 100);
				});

                // Side Header - Change value of initial header body height
                $(document).ready(() => {
					if( $window.width() > 991 ) {
						let flag = false;

						$window.on('resize', ({from}) => {
							if( from == 'header-nav-click-to-open' ) {
								return;
							}

							$header.find('.dropdown.open').removeClass('open');

							if( $window.width() < 992 && flag == false ) {
								headerBodyHeight = $('.header-body').outerHeight();
								flag = true;

								setTimeout(() => {
									flag = false;
								}, 500);
							}
						});
					}
				});

                // Side Header - Set header height on mobile
                if( $html.hasClass('side-header') ) {
					if( $window.width() < 992 ) {
						$header.css({
							height: $('.header-body .header-container').outerHeight() + (parseInt( $('.header-body').css('border-top-width') ) + parseInt( $('.header-body').css('border-bottom-width') ))
						});
					}

					$(document).ready(() => {
						$window.afterResize(() => {
							if( $window.width() < 992 ) {
								$header.css({
									height: $('.header-body .header-container').outerHeight() + (parseInt( $('.header-body').css('border-top-width') ) + parseInt( $('.header-body').css('border-bottom-width') ))
								});
							} else {
								$header.css({
									height: ''
								});
							}
						});
					});
				}

                // Anchors Position
                if( $('[data-hash]').length ) {
					$('[data-hash]').on('mouseover', function(){
						const $this = $(this);

						if( !$this.data('__dataHashBinded') ) {
                            let target = $this.attr('href');
                            let offset = ($this.is("[data-hash-offset]") ? $this.data('hash-offset') : 0);
                            const delay  = ($this.is("[data-hash-delay]") ? $this.data('hash-delay') : 0);
                            const force  = ($this.is("[data-hash-force]") ? true : false);
                            const windowWidth = $(window).width();

                            // Hash Offset SM
                            if ($this.is("[data-hash-offset-sm]") && windowWidth > 576) {
								offset = $this.data('hash-offset-sm');
							}

                            // Hash Offset MD
                            if ($this.is("[data-hash-offset-md]") && windowWidth > 768) {
								offset = $this.data('hash-offset-md');
							}

                            // Hash Offset LG
                            if ($this.is("[data-hash-offset-lg]") && windowWidth > 992) {
								offset = $this.data('hash-offset-lg');
							}

                            // Hash Offset XL
                            if ($this.is("[data-hash-offset-xl]") && windowWidth > 1200) {
								offset = $this.data('hash-offset-xl');
							}

                            // Hash Offset XXL
                            if ($this.is("[data-hash-offset-xxl]") && windowWidth > 1400) {
								offset = $this.data('hash-offset-xxl');
							}

                            if( !$(target).length ) {
								target = target.split('#');
								target = '#'+target[1];
							}

                            if( target.includes('#') && $(target).length) {
								$this.on('click', e => {
									e.preventDefault();

									if( !$(e.target).is('i') || force ) {

										setTimeout(() => {

											// Close Collapse if open
											$this.parents('.collapse.show').collapse('hide');

											// Close Side Header
											$hamburguerSideHeader.addClass('side-header-hide');
											$html.addClass('side-header-hide');

											$window.trigger('resize');

											self.scrollToTarget(target, offset);

											// Data Hash Trigger Click
											if( $this.data('hash-trigger-click') ) {

												const $clickTarget = $( $this.data('hash-trigger-click') ), clickDelay = $this.data('hash-trigger-click-delay') ? $this.data('hash-trigger-click-delay') : 0;

												if( $clickTarget.length ) {

													setTimeout(() => {
														// If is a "Tabs" plugin link
														if( $clickTarget.closest('.nav-tabs').length ) {
															new bootstrap.Tab( $clickTarget[0] ).show();
														} else {
															$clickTarget.trigger('click');
														}

													}, clickDelay);
												}

											}

										}, delay);

									}

									return;
								});
							}

                            $(this).data('__dataHashBinded', true);
                        }
					});
				}

                // Floating
                if($('#header.header-floating-icons').length) {

					$('#header.header-floating-icons [data-hash]').off().each(function() {

						const target = $(this).attr('href'), offset = ($(this).is("[data-hash-offset]") ? $(this).data('hash-offset') : 0);

						if($(target).length) {
							$(this).on('click', e => {
								e.preventDefault();

									$('html, body').animate({
										scrollTop: $(target).offset().top - offset
									}, 600, 'easeOutQuad', () => {

									});

								return;
							});
						}

					});

				}

                // Side Panel Toggle
                if( $('.side-panel-toggle').length ) {
					const init_html_class = $('html').attr('class');

					$('.side-panel-toggle').on('click', function(e){
						const extra_class = $(this).data('extra-class'), delay       = ( extra_class ) ? 100 : 0, isActive    = $(this).data('is-active') ? $(this).data('is-active') : false;

						e.preventDefault();

						if( isActive ) {
							$('html').removeClass('side-panel-open');
							$(this).data('is-active', false);
							return false;
						}

						if( extra_class ) {
							$('.side-panel-wrapper').css('transition','none');
							$('html')
								.removeClass()
								.addClass( init_html_class )
								.addClass( extra_class );
						}
						setTimeout(() => {
							$('.side-panel-wrapper').css('transition','');
							$('html').toggleClass('side-panel-open');
						}, delay);

						$(this).data('is-active', true);
					});

					$(document).on('click', ({target}) => {
						if( !$(target).closest('.side-panel-wrapper').length && !$(target).hasClass('side-panel-toggle') ) {
							$('.hamburguer-btn.side-panel-toggle:not(.side-panel-close)').removeClass('active');
							$('html').removeClass('side-panel-open');
							$('.side-panel-toggle').data('is-active', false);
						}
					});
				}

				// OffCanvas
				self.offCanvasMenu();

                return this;
            },

			scrollToTarget(target, offset) {
				const self = this, targetPosition = $(target).offset().top;

				$('body').addClass('scrolling');

				$('html, body').animate({
					scrollTop: $(target).offset().top - offset
				}, self.options.scrollDelay, self.options.scrollAnimation, () => {
					$('body').removeClass('scrolling');

					// If by some reason the scroll finishes in a wrong position, this code will run the scrollToTarget() again until get the correct position
					// We need do it just one time to prevent infinite recursive loop at scrollToTarget() function
					if( $(target).offset().top !=  targetPosition) {
						$('html, body').animate({
							scrollTop: $(target).offset().top - offset
						}, 1, self.options.scrollAnimation, () => {});
					}
				});

				return this;

			},

			offCanvasMenu() {
                const $headerNavMain = $('#header .header-nav-main');
				const $offCanvasNav = $('.offcanvas-nav');

				if($offCanvasNav.length > 0) {
					const $navToClone = $headerNavMain.find('nav');

					if($navToClone.length > 0) {
						$offCanvasNav.html($offCanvasNav.html() + $navToClone.html());
						$offCanvasNav.find('#mainNav').removeAttr('id').removeClass().addClass('nav flex-column w-100');

						// Clean Classes
						$offCanvasNav.find('.dropdown').removeClass().addClass('dropdown');

						$offCanvasNav.find('.dropdown-item:not(.dropdown-toggle)').removeClass().addClass('dropdown-item');
						$offCanvasNav.find('.dropdown-item.dropdown-toggle').removeClass().addClass('dropdown-item dropdown-toggle');

						$offCanvasNav.find('.nav-link:not(.dropdown-toggle)').removeClass().addClass('nav-link');
						$offCanvasNav.find('.nav-link.dropdown-toggle').removeClass().addClass('nav-link dropdown-toggle');

						$offCanvasNav.find('.dropdown-menu').removeClass().addClass('dropdown-menu');

						// Dropdowns
						$offCanvasNav.find('.dropdown-toggle').each(function() {
							const $el = $(this);
							const $arrow = $el.find('i');

							$arrow.on('click', function(e) {
								e.preventDefault();
								e.stopPropagation();
								$el.parents('li').toggleClass('open');
							})

							if ($el.attr('href') == '#') {
								$el.on('click', function() {
									$arrow.trigger('click');
								});
							}
						});
					}
				}

				return this;
			}

		}

	});
})).apply(this, [window.theme, jQuery]);

// Sticky Header
(((theme = {}, $) => {
    let initialized = false;

    $.extend(theme, {

		StickyHeader: {

			defaults: {
				wrapper: $('#header'),
				headerBody: $('#header .header-body'),
				stickyEnabled: true,
				stickyEnableOnBoxed: true,
				stickyEnableOnMobile: false,
				stickyStartAt: 0,
				stickyStartAtElement: false,
				stickySetTop: 0,
				stickyEffect: '',
				stickyHeaderContainerHeight: false,
				stickyChangeLogo: false,
				stickyChangeLogoWrapper: true,
				stickyForce: false,
				stickyScrollUp: false,
				stickyScrollValue: 0
			},

			initialize($wrapper, opts) {
				if (initialized) {
					return this;
				}

				initialized = true;
				this.$wrapper = ($wrapper || this.defaults.wrapper);

				if( this.$wrapper.hasClass('header') ) {
					this.$wrapper = $('.header[data-plugin-options]');
				}

				this
					.setOptions(opts)
					.build()
					.events();

				return this;
			},

			setOptions(opts) {
				this.options = $.extend(true, {}, this.defaults, opts, theme.fn.getOptions(this.$wrapper.data('plugin-options')));
				return this;
			},

			build() {
                if( $(window).width() < 992 && this.options.stickyEnableOnMobile == false ) {
					$('html').addClass('sticky-header-mobile-disabled');
					return this;
				}

                if (!this.options.stickyEnableOnBoxed && $('html').hasClass('boxed') || $('html').hasClass('side-header-hamburguer-sidebar') && !this.options.stickyForce || !this.options.stickyEnabled) {
					return this;
				}

                const self = this;

                if( self.options.wrapper.hasClass('header') ) {
					self.options.wrapper = $('.header');
					self.options.headerBody = $('.header .header-body');
				}

                const $html = $('html');
                const $window = $(window);
                const sideHeader = $html.hasClass('side-header');
                const initialHeaderTopHeight = self.options.wrapper.find('.header-top').outerHeight();
                const initialHeaderContainerHeight = self.options.wrapper.find('.header-container').outerHeight();
                let minHeight;

                // HTML Classes
                $html.addClass('sticky-header-enabled');

                if (parseInt(self.options.stickySetTop) < 0) {
					$html.addClass('sticky-header-negative');
				}

                if (self.options.stickyScrollUp) {
					$html.addClass('sticky-header-scroll-direction');
				}

                // Notice Top Bar First Load
                if( $('.notice-top-bar').get(0) ) {
					if (parseInt(self.options.stickySetTop) == 1 || self.options.stickyEffect == 'shrink') {
						$('.body').on('transitionend webkitTransitionEnd oTransitionEnd', () => {
						    setTimeout(() => {
								if( !$html.hasClass('sticky-header-active') ) {
								    self.options.headerBody.animate({
								    	top: $('.notice-top-bar').outerHeight()
								    }, 300, () => {
								    	if( $html.hasClass('sticky-header-active') ) {
								    		self.options.headerBody.css('top', 0);
								    	}
								    });
								}
						    }, 0);
						});
					}
				}

                // Set Start At
                if(self.options.stickyStartAtElement) {

					const $stickyStartAtElement = $(self.options.stickyStartAtElement);

					$(window).on('scroll resize sticky.header.resize', () => {
						self.options.stickyStartAt = $stickyStartAtElement.offset().top;
					});

					$(window).trigger('sticky.header.resize');
				}

                // Define Min Height value
                if( self.options.wrapper.find('.header-top').get(0) ) {
					minHeight = ( initialHeaderTopHeight + initialHeaderContainerHeight );
				} else {
					minHeight = initialHeaderContainerHeight;
				}

                // Set Wrapper Min-Height
                if( !sideHeader ) {
					if( !$('.header-logo-sticky-change').get(0) ) {
						self.options.wrapper.css('height', self.options.headerBody.outerHeight());
					} else {
						$window.on('stickyChangeLogo.loaded', () => {
							self.options.wrapper.css('height', self.options.headerBody.outerHeight());
						});
					}

					if( self.options.stickyEffect == 'shrink' ) {

						// Prevent wrong visualization of header when reload on middle of page
						$(document).ready(() => {
							if( $window.scrollTop() >= self.options.stickyStartAt ) {
								self.options.wrapper.find('.header-container').on('transitionend webkitTransitionEnd oTransitionEnd', () => {
									self.options.headerBody.css('position', 'fixed');
								});
							} else {
								if( !$html.hasClass('boxed') ) {
									self.options.headerBody.css('position', 'fixed');
								}
							}
						});

						self.options.wrapper.find('.header-container').css('height', initialHeaderContainerHeight);
						self.options.wrapper.find('.header-top').css('height', initialHeaderTopHeight);
					}
				}

                // Sticky Header Container Height
                if( self.options.stickyHeaderContainerHeight ) {
					self.options.wrapper.find('.header-container').css('height', self.options.wrapper.find('.header-container').outerHeight());
				}

                // Boxed
                if($html.hasClass('boxed') && self.options.stickyEffect == 'shrink') {
					self.boxedLayout();
				}

                // Check Sticky Header / Flags prevent multiple runs at same time
                let activate_flag   	 = true;

                let deactivate_flag 	 = false;
                const initialStickyStartAt = self.options.stickyStartAt;

                self.checkStickyHeader = () => {

					// Notice Top Bar
					const $noticeTopBar = $('.notice-top-bar');
					if ( $noticeTopBar.get(0) ) {
						self.options.stickyStartAt = ( $noticeTopBar.data('sticky-start-at') ) ? $noticeTopBar.data('sticky-start-at') : $('.notice-top-bar').outerHeight();
					} else {
						if( $html.hasClass('boxed') ) {
							self.options.stickyStartAt = initialStickyStartAt + 25;
						} else {
							self.options.stickyStartAt = initialStickyStartAt;
						}
					}

					if( $window.width() > 991 && $html.hasClass('side-header') ) {
						$html.removeClass('sticky-header-active');
						activate_flag = true;
						return;
					}

					if ($window.scrollTop() >= parseInt(self.options.stickyStartAt)) {
						if( activate_flag ) {
							self.activateStickyHeader();
							activate_flag = false;
							deactivate_flag = true;
						}
					} else {
						if( deactivate_flag ) {
							self.deactivateStickyHeader();
							deactivate_flag = false;
							activate_flag = true;
						}
					}

					// Scroll Up
					if (self.options.stickyScrollUp) {

					    // Get the new Value
					    self.options.stickyScrollNewValue = window.pageYOffset;

					    //Subtract the two and conclude
					    if(self.options.stickyScrollValue - self.options.stickyScrollNewValue < 0){
					        $html.removeClass('sticky-header-scroll-up').addClass('sticky-header-scroll-down');
					    } else if(self.options.stickyScrollValue - self.options.stickyScrollNewValue > 0){
					        $html.removeClass('sticky-header-scroll-down').addClass('sticky-header-scroll-up');
					    }

					    // Update the old value
					    self.options.stickyScrollValue = self.options.stickyScrollNewValue;

					}
				};

                // Activate Sticky Header
                self.activateStickyHeader = () => {
					if ($window.width() < 992) {
						if (self.options.stickyEnableOnMobile == false) {
							self.deactivateStickyHeader();
							self.options.headerBody.css({
								position: 'relative'
							});
							return false;
						}
					} else {
						if (sideHeader) {
							self.deactivateStickyHeader();
							return;
						}
					}

					$html.addClass('sticky-header-active');

					// Sticky Effect - Reveal
					if( self.options.stickyEffect == 'reveal' ) {

						self.options.headerBody.css('top','-' + self.options.stickyStartAt + 'px');

						self.options.headerBody.animate({
							top: self.options.stickySetTop
						}, 400, () => {});

					}

					// Sticky Effect - Shrink
					if( self.options.stickyEffect == 'shrink' ) {

						// If Header Top
						if( self.options.wrapper.find('.header-top').get(0) ) {
							self.options.wrapper.find('.header-top').css({
								height: 0,
								'min-height': 0,
								overflow: 'hidden'
							});
						}

						// Header Container
						if( self.options.stickyHeaderContainerHeight ) {
							self.options.wrapper.find('.header-container').css({
								height: self.options.stickyHeaderContainerHeight,
								'min-height': 0
							});
						} else {
							self.options.wrapper.find('.header-container').css({
								height: (initialHeaderContainerHeight / 3) * 2, // two third of container height
								'min-height': 0
							});

							const y = initialHeaderContainerHeight - ((initialHeaderContainerHeight / 3) * 2);
							$('.main').css({
								transform: 'translate3d(0, -'+ y +'px, 0)',
								transition: 'ease transform 300ms'
							}).addClass('has-sticky-header-transform');

							if($html.hasClass('boxed')) {
								self.options.headerBody.css('position','fixed');
							}
						}

					}

					self.options.headerBody.css('top', self.options.stickySetTop);

					if (self.options.stickyChangeLogo) {
						self.changeLogo(true);
					}

					// Set Elements Style
					if( $('[data-sticky-header-style]').length ) {
						$('[data-sticky-header-style]').each(function() {
							const $el = $(this), css = theme.fn.getOptions($el.data('sticky-header-style-active')), opts = theme.fn.getOptions($el.data('sticky-header-style'));

							if( $window.width() > opts.minResolution ) {
								$el.css(css);
							}
						});
					}

					$.event.trigger({
						type: 'stickyHeader.activate'
					});
				};

                // Deactivate Sticky Header
                self.deactivateStickyHeader = () => {
					$html.removeClass('sticky-header-active');

					if ( $(window).width() < 992 && self.options.stickyEnableOnMobile == false) {
						return false;
					}

					// Sticky Effect - Shrink
					if( self.options.stickyEffect == 'shrink' ) {

						// Boxed Layout
						if( $html.hasClass('boxed') ) {

							// Set Header Body Position Absolute
							self.options.headerBody.css('position','absolute');

							if( $window.scrollTop() > $('.body').offset().top ) {
								// Set Header Body Position Fixed
								self.options.headerBody.css('position','fixed');
							}

						} else {
							// Set Header Body Position Fixed
							self.options.headerBody.css('position','fixed');
						}

						// If Header Top
						if( self.options.wrapper.find('.header-top').get(0) ) {
							self.options.wrapper.find('.header-top').css({
								height: initialHeaderTopHeight,
								overflow: 'visible'
							});

							// Fix [data-icon] issue when first load is on middle of the page
							if( self.options.wrapper.find('.header-top [data-icon]').length ) {
								theme.fn.intObsInit( '.header-top [data-icon]:not(.svg-inline--fa)', 'themePluginIcon' );
							}
						}

						// Header Container
						self.options.wrapper.find('.header-container').css({
							height: initialHeaderContainerHeight
						});

					}

					self.options.headerBody.css('top', 0);

					if (self.options.stickyChangeLogo) {
						self.changeLogo(false);
					}

					// Set Elements Style
					if( $('[data-sticky-header-style]').length ) {
						$('[data-sticky-header-style]').each(function() {
							const $el = $(this), css = theme.fn.getOptions($el.data('sticky-header-style-deactive')), opts = theme.fn.getOptions($el.data('sticky-header-style'));

							if( $window.width() > opts.minResolution ) {
								$el.css(css);
							}
						});
					}

					$.event.trigger({
						type: 'stickyHeader.deactivate'
					});
				};

                // Always Sticky
                if (parseInt(self.options.stickyStartAt) <= 0) {
					self.activateStickyHeader();
				}

                // Set Logo
                if (self.options.stickyChangeLogo) {

					const $logoWrapper = self.options.wrapper.find('.header-logo'), $logo = $logoWrapper.find('img'), logoWidth = $logo.attr('width'), logoHeight = $logo.attr('height'), logoSmallTop = parseInt($logo.attr('data-sticky-top') ? $logo.attr('data-sticky-top') : 0), logoSmallWidth = parseInt($logo.attr('data-sticky-width') ? $logo.attr('data-sticky-width') : 'auto'), logoSmallHeight = parseInt($logo.attr('data-sticky-height') ? $logo.attr('data-sticky-height') : 'auto');

					if (self.options.stickyChangeLogoWrapper) {
						$logoWrapper.css({
							'width': $logo.outerWidth(true),
							'height': $logo.outerHeight(true)
						});
					}

					self.changeLogo = activate => {
						if(activate) {

							$logo.css({
								'top': logoSmallTop,
								'width': logoSmallWidth,
								'height': logoSmallHeight
							});

						} else {

							$logo.css({
								'top': 0,
								'width': logoWidth,
								'height': logoHeight
							});

						}
					}

					$.event.trigger({
						type: 'stickyChangeLogo.loaded'
					});

				}

                // Side Header
                let headerBodyHeight, flag = false;

                self.checkSideHeader = () => {
					if($window.width() < 992 && flag == false) {
						headerBodyHeight = self.options.headerBody.height();
						flag = true;
					}

					if(self.options.stickyStartAt == 0 && sideHeader) {
						self.options.wrapper.css('min-height', 0);
					}

					if(self.options.stickyStartAt > 0 && sideHeader && $window.width() < 992) {
						self.options.wrapper.css('min-height', headerBodyHeight);
					}
				}

                return this;
            },

			events() {
				const self = this;

				if( $(window).width() < 992 && this.options.stickyEnableOnMobile == false ) {
					return this;
				}

				if (!this.options.stickyEnableOnBoxed && $('body').hasClass('boxed') || $('html').hasClass('side-header-hamburguer-sidebar') && !this.options.stickyForce || !this.options.stickyEnabled) {
					return this;
				}

				if (!self.options.alwaysStickyEnabled) {
					$(window).on('scroll resize', () => {
						if ( $(window).width() < 992 && self.options.stickyEnableOnMobile == false) {
							self.options.headerBody.css({
								position: ''
							});

							if( self.options.stickyEffect == 'shrink' ) {
								self.options.wrapper.find('.header-top').css({
									height: ''
								});
							}

							self.deactivateStickyHeader();
						} else {
							self.checkStickyHeader();
						}
					});
				} else {
					self.activateStickyHeader();
				}

				$(window).on('load resize', () => {
					self.checkSideHeader();
				});

				$(window).on('layout.boxed', () => {
					self.boxedLayout();
				});

				return this;
			},

			boxedLayout() {
				const self = this, $window = $(window);

				if($('html').hasClass('boxed') && self.options.stickyEffect == 'shrink') {
					if( (parseInt(self.options.stickyStartAt) == 0) && $window.width() > 991) {
						self.options.stickyStartAt = 30;
					}

					// Set Header Body Position Absolute
					self.options.headerBody.css({
						position: 'absolute',
						top: 0
					});

					// Set position absolute because top margin from boxed layout
					$window.on('scroll', () => {
						if( $window.scrollTop() > $('.body').offset().top ) {
							self.options.headerBody.css({
								'position' : 'fixed',
								'top' : 0
							});
						} else {
							self.options.headerBody.css({
								'position' : 'absolute',
								'top' : 0
							});
						}
					});
				}

				return this;
			}

		}

	});
})).apply(this, [window.theme, jQuery]);
