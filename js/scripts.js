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

	$('.product-photos-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: true
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
		$(this).siblings('[data-type="accordion-content"]').slideToggle(300, function() {
			if ($(this).is(':visible'))
				$(this).css('display', 'flex');
		});
		$(this).closest('[data-type="accordion"]').toggleClass('opened');
	});

	$('.open-on-load [data-type="accordion-header"]').trigger('click');

	// Select Field
	jcf.setOptions('Select', {
		wrapNative: false,
		wrapNativeOnMobile: true,
		fakeDropInBody: false
	});

	jcf.replace( $('.select-field select') );

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

	// WOW animations
	new WOW().init();

	// TODO: ↓↓↓ remove this script ↓↓↓
	// Current menu item highlithing
	$(function () {
		var location = window.location.href;
		var cur_url = location.split('/').pop();

		$('.top-nav li, .panel-nav li, .footer-nav li').each(function () {
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