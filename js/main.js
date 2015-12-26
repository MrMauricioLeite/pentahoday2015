$(document).ready(function() {
	$('#number4').delay(800).animate({opacity: 1},400);
	$('#number5').delay(1300).animate({opacity: 1},400);
	$('#number6').delay(1800).animate({opacity: 1},400);
	$('#welcomePDF').delay(2300).animate({opacity: 1},400);

	if ($(window).scrollTop() > 100) {
		$('#welcomePDF').stop().animate({opacity: 1},400);
	}
	if ($(window).scrollTop() > 105) {
		$('#firstRegister').delay(400).animate({opacity: 1},400);
		$('#transmissao').animate({opacity: 1},400);
	}
	if ($(window).scrollTop() > 250) {
		$('#secondRegister').animate({opacity: 1},400);
	}
	if ($(window).scrollTop() > 1000) {
		$('#thirdRegister').animate({opacity: 1},400);
	}
	if ($(window).scrollTop() > 2800) {
		$('#fourthRegister').animate({opacity: 1},400);
	}
});

$(document).scroll(function() {

	if ($(window).scrollTop() > 100) {
		$('#welcomePDF').stop().animate({opacity: 1},400);
	}
	if ($(window).scrollTop() > 105) {
		$('#firstRegister').delay(400).animate({opacity: 1},400);
		$('#transmissao').animate({opacity: 1},400);
	}
	if ($(window).scrollTop() > 250) {
		$('#secondRegister').animate({opacity: 1},400);
	}
	if ($(window).scrollTop() > 1000) {
		$('#thirdRegister').animate({opacity: 1},400);
	}
	if ($(window).scrollTop() > 2800) {
		$('#fourthRegister').animate({opacity: 1},400);
	}
}); 