$(document).ready(function(){
	$("#mono").on({
	  mouseenter: function(){
		 $(this).css("background-color", "#67fa43");
	  }, 
	  dblclick: function(){
		 $(this).css("background-color", "lightblue");
	  }, 
	  click: function(){
		 $(this).hide();
	  } 
	});
	$("#di").on({
	  dblclick: function(){
		 $(this).css("background-color", "#eaeafa");
	  }, 
	  mouseleave: function(){
		 $(this).css("background-color", "lightblue");
	  }, 
	  click: function(){
		 $("#mono").show();
	  } 
	});
	$("#tri").on({
	  mouseleave: function(){
		 $(this).css("background-color", "#de35ac");
	  }, 
	  dblclick: function(){
		 $(this).slideUp();
	  }, 
	  click: function(){
		 $("#tetra").css("background-color", "#e44472");
	  } 
	});
	$("#tetra").on({
	  mouseenter: function(){
		 $(this).css("background-color", "#dadaea");
	  }, 
	  mouseleave: function(){
		 $(this).css("background-color", "#cecede");
	  }, 
	  click: function(){
		 $("#tri").show();
	  } 
	});
	$("#penta").on({
	  mouseenter: function(){
		 $(this).css("background-color", "#ec5432");
	  }, 
	  mouseleave: function(){
		 $(this).css("background-color", "#eded23");
	  }, 
	  click: function(){
		 $(this).css("background-color", "#caea34");
	  } 
	});
	$("#hexa").on({
	  dblclick: function(){
		 $(this).slideUp();
	  }, 
	  mouseleave: function(){
		 $(this).css("background-color", "#565643");
	  }, 
	  click: function(){
		 $(this).css("background-color", "#980908");
	  } 
	});
	$("#hepta").on({
	  mouseenter: function(){
		 $(this).css("background-color", "#cac1c1");
	  }, 
	  dblclick: function(){
		 $(this).css("background-color", "#baba45");
	  }, 
	  click: function(){
		 $("#hexa,#nona").show();
	  } 
	});
	$("#okta").on({
	  mouseenter: function(){
		 $(this).css("background-color", "#567856");
	  }, 
	  mouseleave: function(){
		 $(this).css("background-color", "#dacaba");
	  }, 
	  dblclick: function(){
		 $("#nona").slideUp();
	  } 
	});
	$("#nona").on({
	  mouseenter: function(){
		 $(this).css("background-color", "#a0ea0a");
	  }, 
	  mouseleave: function(){
		 $(this).css("background-color", "#4444de");
	  }, 
	  click: function(){
		 $(this).css("background-color", "#cdcd32");
	  } 
	});
	$("#deca").on({
	  mouseenter: function(){
		 $(this).css("background-color", "#5555a1");
	  }, 
	  dblclick: function(){
		 $(this).hide();
	  }, 
	  click: function(){
		 $(this).css("background-color", "#111999");
	  } 
	});
	$("#hendeca").on({
	  hover: function(){
		 $(this).css("background-color", "#dedede");
	  }, 
	  mouseleave: function(){
		 $("#deca").show();
	  }, 
	  click: function(){
		 $(this).css("background-color", "#ad1be5");
	  } 
	});
	$("#dodeca").on({
	  mouseenter: function(){
		 $(this).css("background-color", "#76d7a1");
	  }, 
	  scroll: function(){
		 $(this).css("background-color", "#acde80");
	  }, 
	  click: function(){
		 $(this).css("background-color", "#334251");
	  } 
	});
});
