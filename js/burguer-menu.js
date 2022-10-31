jQuery(document).ready(function() {
    jQuery('.slide_nav_button').click(function(e) {
        jQuery('.slide_menu').animate({top:'toggle'}, 300);
  
        e.preventDefault();
    });
     
});