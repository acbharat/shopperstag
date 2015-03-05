/**
 * EMThemes
 *
 * @license commercial software
 * @copyright (c) 2012 Codespot Software JSC - EMThemes.com. (http://www.emthemes.com)
 */

(function($) {

EM_Theme = {
	PRODUCTSGRID_ITEM_WIDTH: 250,
	PRODUCTSGRID_ITEM_SPACING: 90,
	CROSSSELL_ITEM_WIDTH: 250,
	CROSSSELL_ITEM_SPACING: 90,
	UPSELL_ITEM_WIDTH: 250,
	UPSELL_ITEM_SPACING: 90,
	PRODUCTSGRID_POSITION_ABSOLUTE: 1
};



if (typeof EM == 'undefined') EM = {};
if (typeof EM.tools == 'undefined') EM.tools = {};


var isMobile = /iPhone|iPod|iPad|Phone|Mobile|Android|hpwos/i.test(navigator.userAgent);
var isPhone = /iPhone|iPod|Phone|Android/i.test(navigator.userAgent);


var domLoaded = false, 
	windowLoaded = false, 
	last_adapt_i, 
	last_adapt_width;


/**
 * Auto positioning product items in products-grid
 *
 * @param (selector/element) productsGridEl products grid element
 * @param (object) options
 * - (integer) width: width of product item
 * - (integer) spacing: spacing between 2 product items
 * - (boolean) absolute: position product items as absolute or float
 */
EM.tools.decorateProductsGrid = function (productsGridEl, options) {
	var $productsGridEl = $(productsGridEl);
	if ($productsGridEl.length == 0) return;
	
	var columnCount = Math.floor(($productsGridEl.outerWidth() + options.spacing) / (options.width + options.spacing));
	
	$productsGridEl.css({'position':'relative'});
	
	for (var i = 0; i < 20; i++) $('.item', $productsGridEl).removeClass('item-col-'+i);
		
	var maxHeight = 0;
	var i = 0;
	$('.item', $productsGridEl).each(function() {
		var prev = $(this).prevAll('.item-col-' + i).first();
		var top = prev.length > 0 ? prev.position().top + prev.outerHeight(true) + 15 /* + options.spacing*/: 0;
		
		$(this).addClass('item-col-'+i)
			.css({
				'width': options.width + 'px'
			});
		//alert(options.absolute);
		if (options.absolute)
			$(this).css({
				'position': 'absolute',
				'left': i * (options.spacing + options.width) + 'px',
				'top': top + 'px'
			});
		else if (i == 0)
			$(this).css({
				'clear': 'left',
				'padding-left': ''
			});
		else 
			$(this).css({
				'clear': '',
				'padding-left': options.spacing
			})
			
		maxHeight = Math.max(maxHeight, $(this).position().top + $(this).outerHeight(true));

		if (++i >= columnCount) i = 0;
	});
	
	$productsGridEl.css({
		'height': maxHeight + options.spacing + 'px'
	});
};

EM.tools.decorateProductCollateralTabs = function() {
	$(document).ready(function() {
		$('.product-collateral').addClass('tab_content').each(function(i) {
			$(this).wrap('<div class="tabs_wrapper collateral_wrapper" />');
			var tabs_wrapper = $(this).parent();
			var tabs_control = $(document.createElement('ul')).addClass('tabs_control').insertBefore(this);
			
			$('.box-collateral', this).addClass('tab-item').each(function(j) {
				var id = 'box_collateral_'+i+'_'+j;
				$(this).addClass('content_'+id);
				tabs_control.append('<li><h5><a href="#'+id+'">'+$('h2', this).html()+'</a></h5></li>');
			});
			
			initToggleTabs(tabs_wrapper);
		});
		
		// update products position after tab showed
		/*
		$('.box-collateral.box-up-sell.tab-item').bind('emtabshow', function() {
			EM.tools.decorateProductsGrid('#upsell-product-table .products-grid', {
				width: EM_Theme.UPSELL_ITEM_WIDTH,
				spacing: EM_Theme.UPSELL_ITEM_SPACING
			});
		});
		*/
	});
};


/**
 * Fix iPhone/iPod auto zoom-in when text fields, select boxes are focus
 */
function fixIPhoneAutoZoomWhenFocus() {
	var viewport = $('head meta[name=viewport]');
	if (viewport.length == 0) {
		$('head').append('<meta name="viewport" content="width=device-width, initial-scale=1.0"/>');
		viewport = $('head meta[name=viewport]');
	}
	
	var old_content = viewport.attr('content');
	
	function zoomDisable(){
		viewport.attr('content', old_content + ', user-scalable=0');
	}
	function zoomEnable(){
		viewport.attr('content', old_content);
	}
	
	$("input[type=text], textarea, select").mouseover(zoomDisable).mousedown(zoomEnable);
}


/**
 * Change the alternative product image when hover
 */
function alternativeProductImage() {
	
	var tm;
	function swap() {
		clearTimeout(tm);
		setTimeout(function() {
			el = $(this).find('img[data-alt-src]');
			var newImg = $(el).data('alt-src');
			var oldImg = $(el).attr('src');
			$(el).attr('src', newImg).data('alt-src', oldImg);
		}.bind(this), 200);
	}
	
	$('.item .product-image img[data-alt-src]').parents('.item').bind('mouseenter', swap).bind('mouseleave', swap);
}


/**
 * Adjust elements to make it responsive
 *
 * Adjusted elements:
 * - Image of product items in products-grid scale to 100% width
 */
function responsive() {
	
	// resize products-grid's product image to full width 100% {{{
	var position = $('.products-grid .item').css('position');
	if (position != 'absolute' && position != 'fixed' && position != 'relative')
		$('.products-grid .item').css('position', 'relative');
		
	var img = $('.products-grid .item .product-image img');
	img.each(function() {
		img.data({
			'width': $(this).width(),
			'height': $(this).height()
		})
	});
	img.removeAttr('width').removeAttr('height').css('width', '100%');
	// }}}
	
	// responsive:
	// - image 
	// - custom logo on sidebar
	// - category image
	$('.sidebar img, .custom-logo, .category-image img').each(function() {
		if (!$(this).hasClass('fluid')) {
			$(this).css({
				'max-width': $(this).width(),
				'max-height': $(this).height(),
				'width': '100%'
			});
		}
	});
}


/**
 * Function called when layout size changed by adapt.js
 */
function whenAdapt(i, width) {
	
	$('body').removeClass('adapt-0 adapt-1 adapt-2 adapt-3 adapt-4 adapt-5 adapt-6')
		.addClass('adapt-'+i);
		
	EM.tools.decorateProductsGrid('.category-products .products-grid', {
		width: EM_Theme.PRODUCTSGRID_ITEM_WIDTH,
		spacing: EM_Theme.PRODUCTSGRID_ITEM_SPACING,
		absolute: EM_Theme.PRODUCTSGRID_POSITION_ABSOLUTE,
	});
	
	//disable freezed top menu when in iphone
	window.freezedTopMenu = (i!=0 && EM_Theme.FREEZED_TOP_MENU) ? 1: 0;
	if (window.freezedTopMenu && $(window).scrollTop() > 145) {
		$('.em_nav, .nav-container').addClass('fixed-top');
	} else {
		$('.em_nav, .nav-container').removeClass('fixed-top');
	}

	/*
	EM.tools.decorateProductsGrid('#upsell-product-table .products-grid', {
		width: EM_Theme.UPSELL_ITEM_WIDTH,
		spacing: EM_Theme.UPSELL_ITEM_SPACING
	});
	EM.tools.decorateProductsGrid('#crosssell-products-list', {
		width: EM_Theme.CROSSSELL_ITEM_WIDTH,
		spacing: EM_Theme.CROSSSELL_ITEM_SPACING
	});
	*/
}



/**
 * Callback function called when stylesheet is changed by adapt.js
 */
ADAPT_CONFIG.callback = function(i, width) {
	last_adapt_i = i;
	last_adapt_width = width;
	
	whenAdapt(last_adapt_i, last_adapt_width);
};


function menuVertical() {
	if($('.vnav > .menu-item-link > .menu-container > li.fix-top').length > 0){
		$('.vnav > .menu-item-link > .menu-container > li.fix-top').parent().parent().mouseover(function() {
			var $container = $(this).children('.menu-container,ul.level0');
			var $containerHeight = $container.outerHeight();
			var $containerTop = $container.offset().top;
			var $winHeight = $(window).height();
			var $maxHeight = $containerHeight + $containerTop;
			//if($maxHeight >= $winHeight){
				$setTop = $(this).parent().offset().top -  $(this).offset().top;
				if(($setTop+$containerHeight) < $(this).height()){
					$setTop  = $(this).outerHeight() - $containerHeight;
				}
			/*}else{
				$setTop = (-1);
			}*/
			var $grid = $(this).parents('.em_nav').first().parents().first();
			$container.css('top', $setTop);
			if($maxHeight < $winHeight){
				$('.vnav ul.level0,.vnav > .menu-item-link > .menu-container').first().css('top', $setTop-9 +'px');
			}
			
		});
		$('.vnav .menu-item-link > .menu-container,.vnav ul.level0').parent().mouseout(function() {
			var $container = $(this).children('.menu-container,ul.level0');
			$container.removeAttr('style');
		});
	}
}

$(document).ready(function() {
	domLoaded = true;

	isMobile && fixIPhoneAutoZoomWhenFocus();
	
	alternativeProductImage();
	
	initTopButton();
	
	if (EM_Theme.FREEZED_TOP_MENU) persistentMenu();
	
	setupReviewLink();
	
	if (!isMobile) $('select[name="sort-by"], select[name="limiter"]').dropdownSelect(); 

	// safari hack: remove bold in h5, .h5
	if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
		$('h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6').css('font-weight', 'normal');
	}
	menuVertical();
});

$(window).bind('load', function() {
	windowLoaded = true;
	responsive();
	whenAdapt(last_adapt_i, last_adapt_width);
});


$(window).bind('orientationchange', function(e) {    
   if(window.orientation != 0)
   {
	$('.store-switcher').addClass('store-switcher-landscape');
   }
});
	
	
})(jQuery);

function initSlider(e) {
	var $ = jQuery;
	$(e)
	.addClass('jcarousel-skin-tango')
	.jcarousel({
		buttonNextHTML:'<a class="next" href="javascript:void(0);" title="Next"></a>',
		buttonPrevHTML:'<a class="previous" href="javascript:void(0);" title="Previous"></a>',
		scroll: 1,
		animation:'slow',
		initCallback: function (carousel) {
			var context = carousel.container.context;
			$(context).touchwipe({
				wipeLeft: function() { 
					carousel.next();
				},
				wipeRight: function() { 
					carousel.prev();
				},
				preventDefaultEvents: false
			});
		}
	});
}

function persistentMenu() {
	var $ = jQuery;

	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 145 && window.freezedTopMenu) {
				$('.em_nav, .nav-container').addClass('fixed-top');
			} else {
				$('.em_nav, .nav-container').removeClass('fixed-top');
			}
		});
	});
}

function initTopButton() {
	var $ = jQuery;
	// hide #back-top first
	$("#back-top").hide();

	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});
}

function showReviewTab() {
	var $ = jQuery;
	
	var reviewTab = $('.tabs_control li:contains('+ review +')');
	if (reviewTab.size()) {
		// scroll to review tab
		$('html, body').animate({
			 scrollTop: reviewTab.offset().top
		}, 500);
		 
		 // show review tab
		reviewTab.click();
	} else if ($('#customer-reviews').size()) {
		// scroll to customer review
		$('html, body').animate({ scrollTop: $('#customer-reviews').offset().top }, 500);
	} else {
		return false;
	}
	return true;
}

function setupReviewLink() {
	jQuery('.r-lnk').click(function (e) {
		if (showReviewTab())
			e.preventDefault();
	});
}

