//======================================================================================================================
//                                                     Slick Slider
//==========================================================|===========================================================
export default function () {

	jQuery('.header-slider').slick({
		arrows: false,
		autoplay: true,
		speed: 200,
		autoplaySpeed: 7000,
		adaptiveHeight: false,
		dots: false,
		slidesToShow: 1
	});
}

