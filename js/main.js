$(function(){
	
//トップページ
	/*$('div[id^="top_img"]').hide();
	
	$("#top_img1").fadeIn(1000);
	$("#top_img1").fadeOut(1000);
	
	$('div[id^="top_img"]').hide();
	$("#top_img2").fadeIn(1000);
	$("#top_img2").fadeOut(1000);*/
	
	/*$('li[id^="top_img"]').hide();
	var no = 1;
	(function fade(){
		$('li[id^="top_img"]').fadeOut(1000);
		$('#top_img' + no).fadeIn(1000);
		no++;
		if(no >= 4){
			no = 1;
		}
	})();*/
	
	/*	//$("#id").after('<div id="over"></div>');
		//var getsrc = $(event.target).prop("src");
		//$("#over").prepend('<p>$times<img src="'+getsrc+'" width="600px;"></p>');
	*/

//商品一覧ページ
	//↑でトップに戻る
	$("#arrow").click(function(){
		$("body,html").animate({scrollTop:0},"normal","swing");
	});
	
	
	//上ナビ
	function scroll(x,y){
		$(x).click(function(){
		var rear = $(y).offset().top;
			$("body,html").animate({scrollTop:rear},"normal","swing");
		});
	}	
	scroll("#nav_rear","#rear");
	scroll("#nav_front","#front");
	scroll("#nav_mini","#mini");
	scroll("#nav_motard","#motard");
	scroll("#nav_option","#option");
	
	//左下ナビ
	scroll("#lnav_rear","#rear");
	scroll("#lnav_front","#front");
	scroll("#lnav_mini","#mini");
	scroll("#lnav_motard","#motard");
	scroll("#lnav_option","#option");

	//写真館
	$("#pic").click(function(event){
		alert("ok");
		
	});



		
}); //end jquery