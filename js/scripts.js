$(document).ready(function(){

	// Mobile nav
	$('.menu-opener').bigSlide({
		side: 'right',
		easyClose: true,
		menuWidth: '260px'
	});

	// Sliders
	$('.main-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: true
	});

	$('.goods-slider').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		dots: false,
		arrows: true
	});

	$('.brands-slider').slick({
		infinite: true,
		slidesToShow: 6,
		slidesToScroll: 1,
		dots: false,
		arrows: true
	});

	$('.product-photos-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: true
	});

	$('.product-photos-component .previews-slider').slick({
		infinite: false,
		vertical: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		focusOnSelect: true,
		asNavFor: '.product-photos-component .big-image-slider'
	});

	$('.product-photos-component .big-image-slider').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		arrows: false,
		asNavFor: '.product-photos-component .previews-slider',
		// fade: true,
		vertical: true
	});

	$('.banner-block .block-slider').each(function(){
		$(this).slick({
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: true,
			arrows: true
		});
	})

	// Accordions
	$('[data-type="accordion-header"]').click(function(){
		$(this).siblings('[data-type="accordion-content"]').stop().slideToggle(300, function() {
			if ($(this).is(':visible'))
				$(this).css('display', 'flex');
		});

		$(this).closest('[data-type="accordion"]').toggleClass('opened');
	});

	$('.open-on-load [data-type="accordion-header"]').trigger('click');

	// Catalog Dropdown
	$('[data-dropdown]').hover(function(){
		var target = $( $(this).data('dropdown') );

		$(this).addClass('active');

		target.stop().fadeIn(300);
	}, function(){
		var target = $( $(this).data('dropdown') );

		// setTimeout(function(){
			target.stop().fadeOut(300);
			$(this).removeClass('active');
		// }, 500);
	});

	// Select Field
	jcf.setOptions('Select', {
		wrapNative: false,
		wrapNativeOnMobile: true,
		fakeDropInBody: false
	});

	jcf.replace( $('.select-field select') );

	// Range
	jcf.setOptions('Range input', {
		range: 'all'
	});

	jcf.replace( $('.range-input input[type="range"]') );


	// Range Input
	$('.range-input input[type="range"]').on('change', function(){
		$(this).closest('.range-input').find('.range-from').val( $(this)[0].valueLow );
		$(this).closest('.range-input').find('.range-to').val( $(this)[0].valueHigh );
	});

	$('.range-input .range-from').on('change', function(){
		var value = $(this).val() * 1;
		var dest = $(this).closest('.range-input').find('input[type="range"]');
		var min = dest.prop('min') * 1;
		var max = dest[0].valueHigh;

		if (value < min) { value = min }
		if (value > max) { value = max - 1 }

		dest.val(value + ',' + max);
	});

	$('.range-input .range-to').on('change', function(){
		var value = $(this).val() * 1;
		var dest = $(this).closest('.range-input').find('input[type="range"]');
		var max = dest.prop('max') * 1;
		var min = dest[0].valueLow;

		if (value < min) { value = min + 1 }
		if (value > max) { value = max }

		dest.val(min + ',' + value);
	});

	// Count Select
	$('.count-select .control').click(function(){
		var $field = $(this).siblings('.field');
		var min = $field.data('min') * 1;
		var max = $field.data('max') * 1;
		var current = $field.val() * 1;
		var step = 1;
		var result;

		var action = $(this).data('action');


		if (action == 'subtraction') {
			result = current - step;

			if (result < min) {
				result = min;
			}
		} else if(action == 'addition'){
			result = current + step;

			if (result > max) {
				result = max;
			}
		}

		$field.val(result);

		calcTotalPrice();
	});

	// Total Price
	function calcTotalPrice(){
		var total = 0;
		var goodsCount = 0;

		$('.shopping-cart-item').each(function(){
			var count = $(this).find('.selectedCount').val() * 1;
			var price = $(this).find('[data-price]').data('price') * 1;

			goodsCount += count;
			total += count * price;
		});

		var discount = $('#discount').text() * 1;
		var totalWithDiscount = total - discount;

		if (totalWithDiscount < 0) {
			totalWithDiscount = 0;
		}

		$('#goods-count').text(goodsCount);
		$('#total-price').text(total);
		$('#total-price-with-discount').text(addSpaces(totalWithDiscount));
	};

	calcTotalPrice();

	// Clear Cart
	$('[data-action="clearProductsList"]').click(function(){
		$('.shopping-cart-item [data-action="removeFromCart"]').click();
	});

	// Action Buttons
	$('.action-icon-button.switch').click(function(){
		$(this).toggleClass('active');
	});

	$('[data-action="removeFromCart"]').click(function(){
		var targetSelector = $(this).data('target');
		var $target = $(this).closest( targetSelector );

		$target.slideUp(300, function(){
			$target.remove();

			// if ($(targetSelector).length <= 0) {
			// 	$('.cart-header').slideUp(300, function(){
			// 		$('.cart-header').remove();
			// 	});
			// }

			calcTotalPrice();
		})
	});

	// Product Card
	$('.product-card').hover(function(){
			var card = $(this);
			var hiddenContent = card.children('.product-hidden-content');

			hiddenContent.css({'z-index': 20});
			hiddenContent.stop().slideDown(300);
	}, function(){
		var card = $(this);
		var hiddenContent = card.children('.product-hidden-content');

		hiddenContent.stop().slideUp(300, function(){
			hiddenContent.css({'z-index': 1});
		});
	});

	// Formatting
	function addSpaces(str){
		str = str.toString();
		return str.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
	}

	// Button With Loader
	$('.with-loader').click(function(){
		$(this).addClass('loading');
		$(this).prop('disabled', true);
	});

	// Promo Code Input
	$('.promo-code-input p').click(function(){
		$(this).parent().addClass('active');
		$(this).siblings('input').focus();
	});

	// Tabs
	$("[data-tab]").click(function(e){
		// e.preventDefault();
		var dest = $( $(this).data('tab') );
		dest.stop().fadeIn(300).siblings().hide(0);
		$(this).addClass('current').siblings().removeClass('current');
	});

	$("[data-tab].current").click();

	// On Hover
	$("[data-hover-tab]").hover(function(e){
		// e.preventDefault();
		var dest = $( $(this).data('hover-tab') );
		dest.stop().fadeIn(0).siblings().hide(0);
		$(this).addClass('current').siblings().removeClass('current');
	}, function(){});

	$( $("[data-hover-tab].current").data('hover-tab') ).stop().fadeIn(0).siblings().hide(0);

	// Input fields, Textareas
	$('.input-field, .textarea').on('keyup', function(){
		if( $(this).val() !== '' ){
			$(this).addClass('not-empty');
		} else{
			$(this).removeClass('not-empty');
		}
	});

	$('.input-field, .textarea').each(function(){
		if( $(this).val() !== '' ){
			$(this).addClass('not-empty');
		} else{
			$(this).removeClass('not-empty');
		}
	});

	// WOW animations
	new WOW().init();

	// TODO: ↓↓↓ remove this script ↓↓↓
	// Current menu item highlithing
	$(function () {
		var location = window.location.href;
		var cur_url = location.split('/').pop();

		$('.top-nav li, .panel-nav li, .footer-nav li, .cabinet-nav li').each(function () {
			var link = $(this).find('a').attr('href');

			// console.log(link);

			if (cur_url == '') {
				cur_url = 'index.php';
			}

			if (cur_url == link)
			{
				$(this).addClass('current-menu-item');
				$(this).parents('li').addClass('current-menu-parent');
			}
		});
	});
});