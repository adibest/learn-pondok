$(document).ready(function(){

	function wel() {
		document.getElementById('i1').innerHTML = "Welcome to the SPACE!";
	}

	$("#w").click(function(){
		$("#right, #left img, #i1").css("display", "block");
		$("#right, #left img, #i1").show(4000);
		$("#i1").animate({
			fontWeight: 'bold',
			width:'200px',
			height: '20px',
			borderRadius: '10px',
			padding: '10px'
		}, "slow", function(){
			wel();
		});
	});

	$("#gb").click(function(){
		$("#left #img").animate({
			marginLeft: '500px',
			marginTop: '100px'
		}, 5000, "linear");
		$("#left #img").animate({
			marginLeft: '300px',
			marginTop: '400px'
		}, 5000, "linear");
		$("#left #img").animate({
			marginRight: '200px',
			marginTop: '-100px'
		}, 5000, "linear");
		$("#left #img").animate({
			marginLeft: '400px',
			marginTop: '100px'
		}, 5000, "linear");
		$("#left #img").animate({
			marginLeft: '-50px',
			marginTop: '230px'
		}, 5000, "linear");
	});

	$("#ts").click(function(){
		$("#left #img").animate({
			marginRight: '200px',
			marginTop: '-10px'
		}, "fast", "swing");
		$("#left #img").animate({
			marginLeft: '400px',
			marginTop: '10px'
		}, "fast", "swing");
		$("#left #img").animate({
			marginLeft: '-50px',
			marginTop: '23px'
		}, "fast", "swing");
		$("#left #img").animate({
			marginLeft: '500px',
			marginTop: '10px'
		}, "fast", "swing");
		$("#left #img").animate({
			marginLeft: '300px',
			marginTop: '40px'
		}, "fast", "swing");
		$("#left #img").animate({
			marginRight: '200px',
			marginTop: '-100px'
		}, "fast", "swing");
		$("#left #img").animate({
			marginLeft: '400px',
			marginTop: '100px'
		}, "fast", "swing");
		$("#left #img").animate({
			marginLeft: '-50px',
			marginTop: '230px'
		}, "fast", "swing");
		$("#left #img").animate({
			marginLeft: '500px',
			marginTop: '100px'
		}, "fast", "swing");
		$("#left #img").animate({
			marginLeft: '300px',
			marginTop: '400px'
		}, "fast", "swing");
		$("#left #img").animate({
			marginRight: '200px',
			marginTop: '-100px'
		}, "fast", "swing");
		$("#left #img").animate({
			marginLeft: '400px',
			marginTop: '100px'
		}, "fast", "swing");
		$("#left #img").animate({
			marginLeft: '-50px',
			marginTop: '230px'
		}, "fast", "swing");
		$("#left #img").animate({
			marginLeft: '500px',
			marginTop: '100px'
		}, "fast", "swing");
		$("#left #img").animate({
			marginLeft: '300px',
			marginTop: '400px'
		}, "fast", "swing");
		$("#left #img").animate({
			marginRight: '200px',
			marginTop: '-100px'
		}, "fast", "swing");
		$("#left #img").animate({
			marginLeft: '400px',
			marginTop: '100px'
		}, "fast", "swing");
		$("#left #img").animate({
			marginLeft: '-50px',
			marginTop: '230px'
		}, "fast", "swing");
		$("#left #img").animate({
			marginLeft: '500px',
			marginTop: '100px'
		}, "fast", "swing");
		$("#left #img").animate({
			marginLeft: '300px',
			marginTop: '400px'
		}, "fast", "swing");
	});

	$("#ks").click(function(){
		$("#left #img").animate({
			marginRight: '200px',
			marginTop: '-100px'
		}, 15000, "linear");
		$("#left #img").animate({
			marginLeft: '400px',
			marginTop: '100px'
		}, 15000, "linear");
		$("#left #img").animate({
			marginLeft: '-50px',
			marginTop: '230px'
		}, 15000, "linear");
	});

	$("#kf").click(function(){
		$("#left #img").hide(10);
	});

	$("#md").click(function(){
		$("#left #img").show(10);
	});

	$("#tp").click(function(){
		$("#left #img").hide(100);
		$("#left #img").animate({
			marginLeft: '600px',
			marginTop: '100px'
		}, "fast", "swing");
		$("#left #img").show(50);
		$("#left #img").hide(100);
		$("#left #img").animate({
			marginRight: '800px',
			marginTop: '400px'
		}, "fast", "swing");
		$("#left #img").show(50);
		$("#left #img").hide(100);
		$("#left #img").animate({
			marginLeft: '100px',
			marginTop: '300px'
		}, "fast", "swing");
		$("#left #img").show(50);
		$("#left #img").hide(100);
		$("#left #img").animate({
			marginLeft: '700px',
			marginTop: '10px'
		}, "fast", "swing");
		$("#left #img").show(50);
	});

	$("#stop").click(function(){
		$("#left #img").stop(true);
	});
});