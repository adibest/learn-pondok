$(document).ready(function(){
	$("button.hide").click(function(){
		$("#tu, #ga, #ju, #lan").hide(5000);
		$("#ua, #pat, #nam, #pan, #luh, #bin").hide(3000);
		$("#ma, #nol").hide(1000);
	});
	$("button.show").click(function(){
		$("#tu, #ga, #ju, #lan").show(5000);
		$("#ua, #pat, #nam, #pan, #luh, #bin").show(3000);
		$("#ma, #nol").show(1000);
	});
	$("button.toggle").click(function(){
		$("#tu, #ga, #ju, #lan").toggle(5000);
		$("#ua, #pat, #nam, #pan, #luh, #bin").toggle(3000);
		$("#ma, #nol").toggle(1000);
	});
	$("button.fadetog").click(function(){
		$("#tu, #ga, #ju, #lan").fadeToggle(5000);
		$("#ua, #pat, #nam, #pan, #luh, #bin").fadeToggle(3000);
		$("#ma, #nol").fadeToggle(1000);
	});
	$("button.fadeto").click(function(){
		$("#tu, #ga, #ju, #lan").fadeTo(5000, 0.25);
		$("#ua, #pat, #nam, #pan, #luh, #bin").fadeTo(3000, 0.5);
		$("#ma, #nol").fadeTo(1000, 0.75);
	});
	$("button.slidetog").click(function(){
		$("#tu, #ga, #ju, #lan").slideToggle(5000);
		$("#ua, #pat, #nam, #pan, #luh, #bin").slideToggle(3000);
		$("#ma, #nol").slideToggle(1000);
	});
});