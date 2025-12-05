jQuery(document).ready(function($)
{

	__Scroll.activeToggleMenuFixed = false;


	// PASSIVE LISTENERS HACK
	$.event.special.scroll = {
	    setup: function( _, ns, handle ) {
	        this.addEventListener("scroll", handle, { passive: !ns.includes("noPreventDefault") });
	    }
	};



	//////////////////////////
	// ENTRANCE ANIMATION
	//////////////////////////

	if( IS_TABLET || IS_MOBILE )
	{

		$('.waypoint').each( function(i)
		{
			let bot_obj = $(this).offset().top + ( $(this).outerHeight() * 0.3 );
			let bot_win = $(window).scrollTop() + $(window).height();
			if( bot_win > bot_obj )
			{
				var element = $(this);

				if(!element.hasClass('animated')) {
					element.addClass('animated');
					element.trigger('animated');
				}
			}
		});

			
		var updateAnimation = function (e) {
			$('.waypoint').each( function(i)
			{
				let bot_obj = $(this).offset().top + ( $(this).outerHeight() * 0.35 );
				let bot_win = $(window).scrollTop() + $(window).height();
				if( bot_win > bot_obj )
				{
					let element = $(this);
					if(!element.hasClass('animated')) {
						element.addClass('animated');
						element.trigger('animated');
					}
				}
			});
		};


		window.addEventListener('scroll', updateAnimation, false);



		// SHOW/HIDE MENU FIXED SCROLL

		$(window).scroll(function()
		{
			if( $(window).scrollTop() > 50 )
			{
				$('header').addClass('is-compact');
			}else{
				$('header').removeClass('is-compact');
			}
		});


		$(window).resize(function(){
			if( screen.width > 768 ) updateAnimation;
		});

		$(window).scroll();
	}









	// MENU
	$('.menu .main-logo').fadeOut(0);
	$('.menu ul').fadeOut(0);
	$('.menu .logo').fadeOut(0);
	$('.menu .redes-sociais-menu').fadeOut(0);




	$('.navbar-burger').click(function(e)
	{
		e.preventDefault();

		if( $(this).hasClass("is-active") )
		{
			// CLOSE
			$('.menu .main-logo').fadeOut(800);
			$('.menu ul').fadeOut(800);
			$('.menu .logo').fadeOut(300);
			$('.menu .redes-sociais-menu').fadeOut(100);

			setTimeout( () => { $('.menu').removeClass("is-active"); }, 1000);
		}
		else
		{
			// SHOW
			$('.menu').addClass('is-active');

			setTimeout( () => { 
				$('.menu .main-logo').fadeIn(0);
				$('.menu ul').fadeIn(0);
				$('.menu .logo').fadeIn(0);
				$('.menu .redes-sociais-menu').fadeIn(0);
			}, 800);
		}

		$(this).toggleClass('is-active');
	});



	$('.bt-close-menu').click(function(e)
	{
		$('.menu .main-logo').fadeOut(400);
		$('.menu ul').fadeOut(300);
		$('.menu .logo').fadeOut(300);
		$('.menu .redes-sociais-menu').fadeOut(300);

		$('.navbar-burger').toggleClass('is-active');

		setTimeout( () => { $('.menu').removeClass("is-active"); }, 400);
	});



	$('.menu .menu-item').click(function(e)
	{
		$('.bt-close-menu').click();
	});




	$('#area-construida-1 .item').mouseenter(function(e)
	{
		let item = $(this).attr('data-item');

		$('#area-construida-1 .item').removeClass("is-active");
		$('#area-construida-1 .mark').removeClass("is-active");
		$('#area-construida-1 .mark.m'+item).addClass("is-active");
		$(this).addClass("is-active");
	});


	$('#area-construida-2 .item').mouseenter(function(e)
	{
		let item = $(this).attr('data-item');

		$('#area-construida-2 .item').removeClass("is-active");
		$('#area-construida-2 .mark').removeClass("is-active");
		$('#area-construida-2 .mark.m'+item).addClass("is-active");
		$(this).addClass("is-active");
	});
	



	if( IS_MOBILE )
	{
		const video = document.getElementById('video');

		setTimeout(() => {
			video.play().catch(() => {
				document.addEventListener('click', () => {
					video.play();
				}, { once: true });
			});
		}, 100);
	}







	// COOKIES

	$('#bt-cookies').click(function(e)
	{
		e.preventDefault();

		$.ajax({
			type: 'POST',
			url: HTTP+'php/ajax/aceitar-cookies.php',
			success: function(output)
			{
				if(output == 1) $('.cookies').fadeOut(200);
			}
		});
	});

	$('.carrousel-1').each(function(){

		var $owl = $(this);

		$owl.owlCarousel({
			autoplay: false,
			loop: false,
			margin: 80,
			dots: true,
			nav: true,
			smartSpeed: 800,
			navText: [
				'<img src="' + HTTP + '/assets/img/icons/arrow-left.svg" alt="Item anterior">',
				'<img src="' + HTTP + '/assets/img/icons/arrow-right.svg" alt="Próximo item">'
			],
			responsive: {
				0:   { items: 1 },
				578: { items: 1 },
				1024:{ items: 1 }
			},

			onInitialized: function(event){
				var carousel = event.relatedTarget;
				var $dots = $owl.find('.owl-dots .owl-dot');

				$dots.each(function(index){
					var $slide = $(carousel.$stage.children().get(index)).find('.item');
					var title = $slide.data('title') || ('Slide ' + (index+1));

					$(this)
						.addClass('btn')
						.html('<span>' + title + '</span>');
				});
			}
		});

	});



	// MASK
	$('.telefone').mask('(99) 99999-9999');



	// SEND FORM
	$('.form-contato').submit(function()
	{
		const __this = $(this);
		var DATA 	 = $(this).serialize();

		$(this).find('button').addClass('is-loading');


		$.ajax({
			type: 'POST',
			url: HTTP+'/php/envios/Envio-contato.php',
			data: DATA,
			dataType: 'json',
			success: function(json)
			{
				__this.find('button').removeClass('is-loading');

				if(json.status=="1")
				{
					__this.find('input').val('');
					__this.find('textarea').val('');

					Swal.fire({
						title: 'SUCESSO!',
						html: json.message,
						icon: 'success',
						confirmButtonText: 'Ok'
					});
				}
				else
				{
					msgAlert(json.message);
				}
			}
		});
			
		return false;
	});

	const sectionMapa = document.querySelector('section.mapa .map-container');

	sectionMapa.addEventListener('click', (e)=>{
		const iframe = e.currentTarget.querySelector('iframe');
		iframe.style.pointerEvents = 'all';

	})


});



function msgAlert(message){
	Swal.fire({ title: 'Ops!', html: message, icon: 'warning', confirmButtonText: 'Ok'});
}