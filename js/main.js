$(function(){
	
//トップページ
	$('li[id^="top_img"]').hide();
	var no = 1;
	(function fade(){
		$('li[id^="top_img"]').fadeOut(1000);
		$('#top_img' + no).fadeIn(1000);
		no++;
		if(no > 3){
			no = 1;
		}
		setTimeout(fade,3000)
	})();
	
	/*	//$("#id").after('<div id="over"></div>');
		//var getsrc = $(event.target).prop("src");
		//$("#over").prepend('<p>$times<img src="'+getsrc+'" width="600px;"></p>');
	*/

//商品一覧ページ
	//左下ナビを後から出す
	$(".side_nav").hide();
	var wsize = $(window).width()+17;
		$(window).scroll(function(){
			if( wsize < 700 ){
				$(".side_nav").hide();
			}else if($(this).scrollTop() > 400){
				$(".side_nav").fadeIn();
			}else{
				$(".side_nav").fadeOut();
			}
		});

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
	scroll("#biginner","#biginner_set");
	
	//左下ナビ
	scroll("#lnav_rear","#rear");
	scroll("#lnav_front","#front");
	scroll("#lnav_mini","#mini");
	scroll("#lnav_motard","#motard");
	scroll("#lnav_option","#option");

	//写真館
	/*$("#pic").click(function(event){
		alert("ok");
		
	});*/


/*------breakPoint700px------*/
//top画面・リサイズ用
	$(window).resize(function(){
		var wsize = $(window).width()+17;
		if( wsize <= 700 ){
			$("#bars").show();
			$("#top_img").show();
			$("#header").hide();
			$("#top_slider").hide();
			$("#p_down").show();
			$("#nav").hide();
			$("#side_nav").hide();
		}else{
			$("#bars").hide();
			$("#top_img").hide();
			$("#header").show();
			$("#top_slider").show();
			$("#p_down").hide();
			$("#nav").show();
			$("#side_nav").show();
		}
	});
	
//top画面・ロード用
	$(window).load(function(){
		var wsize = $(window).width()+17;
		if( wsize <= 700 ){
			$("#bars").show();
			$("#top_img").show();
			$("#header").hide();
			$("#top_slider").hide();
			$("#p_down").show();
			$("#nav").hide();
		}else{
			$("#bars").hide();
			$("#top_img").hide();
			$("#p_down").hide();
			$("#nav").show();
		}
	});
	
//ホットドックメニュー
	//var flag = true;
	$("#bars").click(function(){
		//if( flag == true ){
			$("#header").show(500);
		//}
		/*if( flag == false ){
			$("#header").hide();
		}
		flag = !flag;*/
	});

//その他ページ
	//$("#nav").hide();
	var flag = true;
	$("#p_down").click(function(){
		if( flag == true ){
			$("#nav").slideDown("slow");
		}
		if( flag == false ){
			$("#nav").slideUp("slow");
		}
		flag = !flag;
	});
		
	

		
}); //end jquery