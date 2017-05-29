jQuery(document).ready(function() {
	jQuery(window).resize(
		function(){
			if(!jQuery('body').hasClass('cherry-fixed-layout')) {
				jQuery('.full-width-block, .parallax-slider').width(jQuery(window).width());
				jQuery('.full-width-block, .parallax-slider').css({width: jQuery(window).width(), "margin-left": (jQuery(window).width()/-2), left: "50%", "position": "relative"});
			};
			if(!jQuery('body').hasClass('cherry-fixed-layout')) {
				jQuery('.extra-size').width('1270');
			};
		}
	).trigger('resize');

	jQuery('input[type="submit"]').each(function(){
		if(!jQuery(this).hasClass('adminbar-button') && !jQuery(this).hasClass('search-form_is')) {
			jQuery(this).wrap('<span class="input-btn btn"><span></span></span>').removeClass('btn').removeClass('btn-primary');
		};
	});	
	jQuery('input[type="reset"]').each(function(){
		if(!jQuery(this).hasClass('adminbar-button') && !jQuery(this).hasClass('search-form_is')) {
			jQuery(this).wrap('<span class="input-btn btn gray"><span></span></span>').removeClass('btn').removeClass('btn-primary');
		};
	});

	function isLocalStorageAvailable() {
	    try {
	        return 'localStorage' in window && window['localStorage'] !== null;
	    } catch (e) {
	        return false;
	    }
	}
	var bannerHeight = jQuery('.banner-wrap').height();
	var item = localStorage.getItem('bannerShow');

	if (item == 'false') { //Не отображается
		jQuery('.banner-wrap').hide(); //Скрываем баннер
		jQuery('.banner-btn-show-container').removeClass('hide'); //Отображаем кнопку
	} else { // Отображается
		jQuery('.banner-wrap').show('fast');
		jQuery('.banner-btn-show-container').addClass('hide'); //Отображаем кнопку
	}

	jQuery('#bannerBtnHide').click(function(){
		jQuery('.banner-wrap').hide('fast');
		jQuery('.banner-btn-show-container').removeClass('hide');
		localStorage.setItem('bannerShow', 'false');
	})
	jQuery('#bannerBtnShow').click(function(){
		jQuery('.banner-wrap').show('fast');
		jQuery('.banner-btn-show-container').addClass('hide');
		localStorage.setItem('bannerShow', 'true');
	})

	var j = 1;
	jQuery('.circle-container').each(function(){
		if(!jQuery(this).hasClass('count')) {
			jQuery(this).parent().addClass('circle-count-wrap').addClass('item-'+j);
			j++;
		}
	})

	if(jQuery('div.type-page > .row > .span12 > .well').length > 0) {
		jQuery('#content.row').addClass('without-padding');
	}

	var resizeScrollFunc = function(e) {
		var windowHeight = jQuery(window).height();
		var windowWidth = jQuery(window).width();
		var windowTopOffset = jQuery(window).scrollTop();

		if ((windowHeight > 600) && (windowTopOffset < 50) && (windowWidth > 1024)) {
			var adminPanelHeight = jQuery('#wpadminbar').innerHeight();
			jQuery('.parallax-slider').css({'height': windowHeight-adminPanelHeight});
		}
	}
	jQuery(window).scroll(resizeScrollFunc).resize(resizeScrollFunc);

})