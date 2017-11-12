// Attendre le chargement du DOM

$(document).ready(function(){

    // Burger Menu

    var burgerIcon = $('.fa-bars');
    var burgerMenu = $('nav ul');

    // Quand je clique sur burgurIcon, j'affiche burgerMenu

    burgerIcon.on('click', function(){
        burgerMenu.slideToggle();
        $(this).toggleClass('active');
    });

    // Affichage Burger au scroll

    $(function(){
	    $(window).scroll(function() {
	        if ($(this).scrollTop() > 350){  
	            $('nav').addClass("sticky");
	        }
	        else{
	            $('nav').removeClass("sticky");
	        }
	    });
	});


    // Chargement contenu 

    $(window).on('load', function(){
    	console.log('La page est entièrement chargée');
    	
    	// Apparition header et body

	    $('body').fadeTo(2000);
	    $('header').fadeIn(2000).fadeTo(3000, 1);
	    

        $(function(){
        $(window).scroll(function() {
            if ($(this).scrollTop() > 5 && $(this).scrollTop() < 700 ){  
                $('h2').addClass("bounceInRight");
                $('h2').css( 'visibility', 'visible');
            }
            else if($(this).scrollTop() > 880){  
                $('h2').addClass('bounceInRight');
                $('h2').css( 'visibility', 'visible')
            }
            else{
                $('h2').removeClass('bounceInRight');
                $('h2').css( 'visibility', 'hidden');
            }
        });
    });
    });

    // Fermeture bloc projet

    $('button').on('click', function(){
            $(this).parent().parent().prev().fadeIn();
        });
        $('.fa-times').click(function(){
            $(this).parent().parent().fadeOut();
        });


}); // Fin de la fonction d'attente du chargement du DOM
