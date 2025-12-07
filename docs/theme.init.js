// Commom Plugins
(($ => {

	'use strict';

	// Scroll to Top Button.
	if (typeof theme.PluginScrollToTop !== 'undefined') {
		theme.PluginScrollToTop.initialize();
	}

	// Tooltips
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
	  	return new bootstrap.Tooltip(tooltipTriggerEl)
	});

	// Popovers
	var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
	var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
	  	return new bootstrap.Popover(popoverTriggerEl)
	});

	// Validations
	if ( $.isFunction($.validator) && typeof theme.PluginValidation !== 'undefined') {
		theme.PluginValidation.initialize();
	}

	// In Viewport Style
	if ($.isFunction($.fn['themePluginInViewportStyle']) && $('[data-inviewport-style]').length) {

		$(() => {
			$('[data-inviewport-style]:not(.manual)').each(function() {
                const $this = $(this);
                let opts;

                const pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
                if (pluginOptions)
					opts = pluginOptions;

                $this.themePluginInViewportStyle(opts);
            });
		});

	}

	// Lightbox
	if ($.isFunction($.fn['themePluginLightbox']) && ( $('[data-plugin-lightbox]').length || $('.lightbox').length )) {
		theme.fn.execOnceTroughEvent( '[data-plugin-lightbox]:not(.manual), .lightbox:not(.manual)', 'mouseover.trigger.lightbox', function(){
            const $this = $(this);
            let opts;

            const pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
            if (pluginOptions)
				opts = pluginOptions;

            $this.themePluginLightbox(opts);
        });
	}

	// Match Height
	if ($.isFunction($.fn['themePluginMatchHeight']) && $('[data-plugin-match-height]').length) {

		$(() => {
			$('[data-plugin-match-height]:not(.manual)').each(function() {
                const $this = $(this);
                let opts;

                const pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
                if (pluginOptions)
					opts = pluginOptions;

                $this.themePluginMatchHeight(opts);
            });
		});

	}

	// Sticky
	if ($.isFunction($.fn['themePluginSticky']) && $('[data-plugin-sticky]').length) {
		theme.fn.execOnceTroughWindowEvent( window, 'scroll.trigger.sticky', () => {
			$('[data-plugin-sticky]:not(.manual)').each(function() {
                const $this = $(this);
                let opts;

                const pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
                if (pluginOptions)
					opts = pluginOptions;

                $this.themePluginSticky(opts);
            });
		});
	}

	// Sticky Header
	if (typeof theme.StickyHeader !== 'undefined') {
		theme.StickyHeader.initialize();
	}

	// Nav Menu
	if (typeof theme.Nav !== 'undefined') {
		theme.Nav.initialize();
	}

})).apply( this, [ jQuery ]);
