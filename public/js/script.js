$(document).ready(function () {
	/*******************************  Menu Buy  ********************************/
	if ($(".menu-buy").length) {

		$('.menu-buy .items a').hover(function (e) {
			$('.menu-buy .car').find('img').attr('src', $(this).data('img'));
			$('.menu-buy .car').find('strong').html($(this).data('title'));
			$('.menu-buy .car').find('span').html($(this).data('desc'));
		})

		$('li.buy').hover(function (e) {
			e.preventDefault();
			var imagen = $(this).find('.items').children('a:first').data('img');
			var title  = $(this).find('.items').children('a:first').data('title');
			var desc   = $(this).find('.items').children('a:first').data('desc');
			$('.menu-buy .car').find('img').attr('src', imagen);
			$('.menu-buy .car').find('strong').html(title);
			$('.menu-buy .car').find('span').html(desc);
		})

		$('li.buy').click(function (e) {
			e.preventDefault();
			$('.menu-buy').toggle();
		})
	}

	/*************************  Slider Revolution  *****************************/
	if($('.banner').length) {
		$('.banner').revolution({
			startheight:500,
			startwidth:1900,
			onHoverStop: "on",
			hideThumbs:1,
			navigationArrows: 'solo',
			navigationType: "bullet",
			navigationStyle: "round",
			shadow:3,
		});
	}

	$.material.init();
	$('.carousel').carousel({
		interval: 3000
	});

	$('#featured-cars').owlCarousel({
		loop: true,
		nav: true,
		dots: false,
		autoplay: true,
		navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive: {0: {items: 1 }, 768: {items: 3 }, 1200: {items: 5 } }
	});

	$('#registrar').click(function(e) {

		var data_send = $("#frmregistro").find(":not(.nosend)").serialize();
		$.post(base_url('CUsuario/guardar'), data_send,function(){
			console.log('gg')
		},'json');
	});

	/*==========  Blog Masonry  ==========*/
	var $blogMasonryContainer = $('#blog-masonry').imagesLoaded(function() {
		$blogMasonryContainer.isotope({
			itemSelector: '.blog-post',
			layoutMode: 'masonry',
			masonry: {
				columnWidth: $blogMasonryContainer.find('.blog-masonry-sizer')[0]
			}
		});
		return false;
	});
});