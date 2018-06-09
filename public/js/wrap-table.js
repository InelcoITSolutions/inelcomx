$(document).ready(function(){
	//var estado = false;
	$('.io').click(function(){
	   id = $(this).attr('data-toggle');
	   txt = $(this).text();
	   if (txt == 'Ver más'){
	     $(this).text('Ocultar');
	   }
	   else{
	      $(this).text('Ver más');
	   }
	   $("#"+id).slideToggle(700);
  })

});