$(function(){
	
	/*$('div[id^="top_img"]').hide();
	
	$("#top_img1").fadeIn(1000);
	$("#top_img1").fadeOut(1000);
	
	$('div[id^="top_img"]').hide();
	$("#top_img2").fadeIn(1000);
	$("#top_img2").fadeOut(1000);*/
	
	$('li[id^="top_img"]').hide();
	var no = 1;
	(function fade(){
		$('li[id^="top_img"]').fadeOut(1000);
		$('#top_img' + no).fadeIn(1000);
		no++;
		if(no >= 4){
			no = 1;
		}
	})();
	
	
	
}); //end jquery