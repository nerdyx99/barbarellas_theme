(function ($, Drupal) {

  Drupal.behaviors.STARTER = {
    attach: function(context, settings) {
      

    	$('.block-views-events-block-events > h2.block-title').html('<span>'+ $('.block-views-events-block-events > h2.block-title').text() +'</span>');




    }
  };

})(jQuery, Drupal);
