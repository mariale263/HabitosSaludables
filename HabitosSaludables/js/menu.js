$(document).ready(function() {
 
	// For the Second level Dropdown menu, highlight the parent	
	$( ".dropdown-menu" )
	.mouseenter(function() {
		$(this).parent('li').addClass('active');
	})
	.mouseleave(function() {
		$(this).parent('li').removeClass('active');
    });
    
    $(".icon-menu").click(function(){
		var aside = $("aside");
        aside.animate({width: 'toggle'}, 1000);
    });

    $('.sub-menu').on('click', function() { 
        //$('.sub-menu').find('.sub').hide();
        $(this).find('.sub').toggle();
    });

});





