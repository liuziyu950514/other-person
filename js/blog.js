$(function(){
	$('.input-box').on('focus',function(){
		$(this).addClass('active-b');
		$(this).siblings().addClass('active');
	})
	$('.input-box').on('blur',function(){
		$(this).removeClass('active-b');
		$(this).siblings().removeClass('active');
	})
})