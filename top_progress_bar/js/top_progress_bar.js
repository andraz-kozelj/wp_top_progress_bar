
jQuery(document).ready(function(){
  jQuery("body").prepend("<div id='top-progress-bar'><div> </div></div>");
});

jQuery(window).scroll(function () {
  var s = jQuery(window).scrollTop(),
        d = jQuery(document).height(),
        c = jQuery(window).height();
        scrollPercent = (s / (d-c)) * 100;
        var position = scrollPercent;

   jQuery("#top-progress-bar div").width(position+"%");
 
});
