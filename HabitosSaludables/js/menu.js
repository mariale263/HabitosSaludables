$(document).ready(function(){
    $(".dropdown").hover(function(){
        $(this).find('.dropdown-menu').toggle();
    });
});

$(document).ready(function(){
    $(".subNivel").hover(function(){
        $(this).find('.dropdown-menu.children').toggle();
    });
});