var total_passenger = 1;

function addPassenger()
{
	var n = total_passenger+1;

	var str = "<div id='add-passenger"+total_passenger+"' style='display:none;'>";//added this line

	str += "<hr style=\"border-bottom: 1px solid #fff;\">";
	str += '<div class="form"><div class="form-group"><div class="col-md-12"><input type="text" name="n_p'+n+'" class="form-control depox" placeholder="Nama Penumpang ke-'+n+'"></div></div><div class="form-group"><div class="col-md-12"><input type="text" name="t_p'+n+'" class="form-control depox" placeholder="Nomor HP Penumpang ke-'+n+'"></div></div><div class="form-group"><div class="col-md-12"><input type="text" name="l_p'+n+'" class="form-control depox" placeholder="Alamat Penjemputan Penumpang ke-'+n+'"></div></div><div class="form-group"><div class="col-md-12"><input type="text" name="l_t'+n+'" class="form-control depox" placeholder="Alamat Tujuan Penumpang ke-'+n+'"></div></div></div>';

	str += '</div>';//added this line

	$('.addPassenger').before(str);
	jQuery('#add-passenger'+total_passenger).slideDown('medium');
	total_passenger++;
}

function remPassenger()
{
	total_passenger--;
	$('#add-passenger'+total_passenger).slideUp('medium',function(){$(this).remove;});
}

$('span.addPassenger').click(function(){
	addPassenger();
});

$('a.removePassenger').click(function(){
	remPassenger();
});