
    jQuery$(document).ready(function(){ 
    $(windows).scroll(function(){ 
     if ($(this).scrollTop() > 100) { 
         $('#on_top').fadeIn(); 
     } else { 
         $('#on_top').fadeOut(); 
     } 
 }); 
 $('#on_top').click(function(){ 
     $("html, body").animate({ scrollTop: 0 }, 600); 
     return false; 
 }); 
});
