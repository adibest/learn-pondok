$(document).ready(function(){

	function welcome() {
		document.getElementById('i1').innerHTML = "Selamat datang di IndoApril";
	}

	$(".t1").click(function(){
		$(".t2").css("display","block");
		$(".t2").show(4000);
		$("#i1").animate({
			width:'300px',
			height: '20px',
			padding: '10px'
		}, "slow", function(){
			welcome();
		});
	});

	function diskon() {
		document.getElementById('i2').innerHTML = "Mau beli apa?";
	}

	$(".t2").click(function(){
		$(".t3, .t4, .t5, .t6, .t7").css("display","block");
		$(".t3, .t4, .t5, .t6, .t7").slideDown(4000);
		$("#i2").animate({
			width:'300px',
			height: '20px',
			padding: '10px'
		}, "slow", function(){
			diskon();
		});
	});

	function diskonkah() {
		document.getElementById('i3').innerHTML = "Dapat diskon berapa ya? Silakan klik tombol dibawah.";
	}

	$(".t3").click(function(){
		$(".t4, .t5, .t6, .t7").slideUp(4000);
		$(".t8, .t9, .t10").css("display","block");
		$(".t8, .t9, .t10").fadeIn(4000);
		$("#i3").animate({
			width:'500px',
			height: '20px',
			padding: '10px'
		}, "7000", function(){
			diskonkah();
		});
	});

	$(".t4").click(function(){
		$(".t3, .t5, .t6, .t7").slideUp(4000);
		$(".t8, .t9, .t10").css("display","block");
		$(".t8, .t9, .t10").fadeIn(4000);
		$("#i3").animate({
			width:'500px',
			height: '20px',
			padding: '10px'
		}, "7000", function(){
			diskonkah();
		});
	});

	$(".t5").click(function(){
		$(".t3, .t4, .t6, .t7").slideUp(4000);
		$(".t8, .t9, .t10").css("display","block");
		$(".t8, .t9, .t10").fadeIn(4000);
		$("#i3").animate({
			width:'500px',
			height: '20px',
			padding: '10px'
		}, "7000", function(){
			diskonkah();
		});
	});

	$(".t6").click(function(){
		$(".t4, .t5, .t3, .t7").slideUp(4000);
		$(".t8, .t9, .t10").css("display","block");
		$(".t8, .t9, .t10").fadeIn(4000);
		$("#i3").animate({
			width:'500px',
			height: '20px',
			padding: '10px'
		}, "7000", function(){
			diskonkah();
		});
	});

	$(".t7").click(function(){
		$(".t4, .t5, .t6, .t3").slideUp(4000);
		$(".t8, .t9, .t10").css("display","block");
		$(".t8, .t9, .t10").fadeIn(4000);
		$("#i3").animate({
			width:'500px',
			height: '20px',
			padding: '10px'
		}, "7000", function(){
			diskonkah();
		});
	});

	function diskon1() {
		document.getElementById('i4').innerHTML = "Anda dapat diskon 0%.";
		alert("Semoga lucky");
	}

	$(".t8").click(function(){
		$(".t9, .t10").hide();
		$("#i4").animate({
			width:'250px',
			height: '20px',
			padding: '10px'
		}, "5000", function(){
			diskon1();
		});
	});

	function diskon2() {
		document.getElementById('i4').innerHTML = "Anda dapat diskon 120%.";
		alert("Semoga lucky");
	}

	$(".t9").click(function(){
		$(".t8, .t10").hide();
		$("#i4").animate({
			width:'250px',
			height: '20px',
			padding: '10px'
		}, "5000", function(){
			diskon2();
		});
	});

	function diskon3() {
		document.getElementById('i4').innerHTML = "Anda dapat diskon Rp20.000,00.";
		alert("Semoga lucky");
	}

	$(".t10").click(function(){
		$(".t9, .t8").hide();
		$("#i4").animate({
			width:'250px',
			height: '20px',
			padding: '10px'
		}, "5000", function(){
			diskon3();
		});
	});
});