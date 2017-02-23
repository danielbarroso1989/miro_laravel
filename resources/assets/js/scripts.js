
$(document).ready(function(){

	/* funciones del menu */

	// abir menu
    $(".icono-menu").click(function(){
           var div = $(".menu-background");
        div.animate({height: '100%'});
    });
    // cerrar menu
    $(".closet-menu").click(function(){
           var div = $(".menu-background");
        div.animate({height: '0%'});
    });


        // menu1
    $(".menu1").click(function(){
    	var div = $(".menu-background");
        div.animate({height: '0%'});
       $('.sites').css('display','none');
       $('.banner_heart').fadeIn();
       $('.data').fadeIn();
    });

     // menu3
    $(".menu3").click(function(){
    	var div = $(".menu-background");
        div.animate({height: '0%'});
       
        $('.banner_heart').css('display','none');
       $('.data').css('display','none');
       $('.sites').fadeIn();
    });



});