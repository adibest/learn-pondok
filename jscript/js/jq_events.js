$(document).ready(function(){
	$("#judul").click(function(){
		$("p.posting").slideUp();
	});
	$("#judul2").dblclick(function(){
		$("p.posting2").slideUp();
	});
	$(".div4").mouseenter(function(){
		$("p.pesan4").slideUp();
	});
	$(".div4").mouseleave(function(){
		$("p.pesan4").slideDown();
	});
	$("#judul3").on({
		mouseenter: function(){
			$(this).css("background-color", "#123ECE")
		},
		mouseleave: function(){
			$(this).css("background-color", "#B458BF")
		},
		click: function(){
			$(this).css("background-color", "#19EA24")
		},
	});
});
