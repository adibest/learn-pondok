$(document).ready(function(){
	$("button.hide").click(function(){
		$("button.satu, button.dua, button.tiga, button.empat").hide();
	});
	$("button.show").click(function(){
		$("button.satu, button.dua, button.tiga, button.empat").show();
	});
	$("button.changebg").click(function(){
		$("button.satu").css("background-color", "#FAC543");
		$("button.dua").css("background-color", "#45DC78");
		$("button.tiga").css("background-color", "#CFCF56");
		$("button.empat").css("background-color", "#1DEF34");
	});
	$("button.backbg").click(function(){
		$("button.satu").css("background-color", "#AD1234");
		$("button.dua").css("background-color", "#EC5678");
		$("button.tiga").css("background-color", "#FB9012");
		$("button.empat").css("background-color", "#D13456");
	});
	$("button.addbord").click(function(){
		$("#down tr td").css("border", "2px solid #A1A1A1");
	});
	$("button.hidebord").click(function(){
		$("#down tr td").css("border", "none");
	});
	$("#left td:nth-child(odd) button, #right td:nth-child(even) button" ).click(function(){
		$(this).css("background-color", "#45AF45");
		$(this).slideUp("1000000000000000");
	});
	$("#left td:nth-child(even) button, #right td:nth-child(odd) button").click(function(){
		$(this).css("background-color", "#1445AD");
		$(this).slideUp("1000000000000000");
	});
});