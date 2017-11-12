$(function(){
	//alert('ok');
var i=0;
affiche();

function affiche(){
	var precedent=String("");
	i++;
	if(i==1){
		precedent = '#img6';
	}
	else
	{
		precedent = '#img' + (i-1);
	}

	var actuel = '#img'+i;
	//console.log(actuel);
	$(precedent).fadeOut(3000); // fondu sur l'image precedent
	$(actuel).fadeIn(3000); //fondu sur l'image affichée
	// attention au nb d'images

	if(i==6){
		i=0;
	}
}//fin de la fonction
setInterval(affiche, 3000); // mettre une intervale pour voir le changemt


	$('.row').children('img').hide();


	$('.affiche').on('click', function(){
		$('.img').first().show('slow', function showNext(){
			$(this).next('.img').show('slow', showNext);
		});
		
	});

	$('.cache').on('click', function(){
		$('.img').first().hide('slow', function hideNext(){
			$(this).next('.img').hide('slow', hideNext);
		});
	});
	

	
});//fin de la fonction générale

