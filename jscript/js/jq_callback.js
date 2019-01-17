$(document).ready(function(){
	$(".b1").click(function(){
		$(".d1").hide("slow", function(){
			alert("Element ini sudah mendelik");
		});
	});

	function tampil() {
		document.getElementById("d2").innerHTML = "Hey Tayo, Dia bis kecil ramah!<br>";
		alert("Rampung");
	}

	function hitung(panjang, lebar){
		var p = panjang;
		var l = lebar;
		var luas = p * l;
		document.getElementById('d2').innerHTML += 'Panjang = ' + p + 'px <br>' + 'Lebar = ' + l + 'px <br>' + 'Luas = ' + luas + 'px persegi';
	}

	$(".b2").click(function(){
		$("#d2").animate({
			width: '400px',
			fontSize: '30px'
		}, "slow", function(){
			tampil();
			hitung(400, 200);
		});
	});
});