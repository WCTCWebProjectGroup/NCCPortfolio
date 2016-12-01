$(document).ready(function(){
	$('.featured-slider-container').slick({
		dots: true,
		arrows: true,
		infinite: true,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 1,
		centerMode: true,/*
		prevArrow: '<div class="small-12 medium-2 columns"><button type="button" class="slick-prev">Previous</button></div>',
		nextArrow: '<div class="small-12 medium-2 columns"><button type="button" class="slick-next">Next</button></div>',*/
		responsive: [
			{
				breakpoint: 1024,
				settings: 
				{
					slidesToShow: 3,
					slidesToScroll: 1,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 600,
				settings: 
				{
					slidesToShow: 2,
					slidesToScroll: 1,
					dots: true
				}
			},
			{
				breakpoint: 480,
				settings: 
				{
					slidesToShow: 1,
					slidesToScroll: 1,
					dots: true
				}
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		],

		settings: "unslick"
	});
});
		
