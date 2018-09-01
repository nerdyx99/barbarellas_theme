(function ($, Drupal) {

  Drupal.behaviors.STARTER = {
    attach: function(context, settings) {
      

    	$('.block-views-events-block-events > h2.block-title').html('<span>'+ $('.block-views-events-block-events > h2.block-title').text() +'</span>');


    	$('.contact-form #edit-attachments').click(function(){
    		$(this).find('.fieldset-wrapper').slideToggle();
    	});

 		$('.highlight .views-row-1 a').attr('href','/dev/barbarellas/gallery');

 		$('.section-stag-parties #edit-attachments').hide();

 		$('.section-contact #edit-attachments').hide();

 		$(".form-item-cid select").change(function(){

	 		if($('.form-item-cid select').val() == '3'){
	 			$('.section-contact #edit-attachments').slideDown(300);
	 			console.log('ybauybda');
	 		}else{
	 			$('.section-contact #edit-attachments').slideUp(300);
	 		}

 		});

        

        var thisText = '';
        $('.views-field-field-date .field-content').each(function(){
            thisText = $(this).text().trim();
            if(thisText == ''){
                console.log('empty');
                $(this).addClass('hide');
            }else{
                console.log('not empty');
            }
        });

        if($('body').hasClass('front')){
            $('.view-display-id-block_featured .views-row-1 a').attr('href','http://barbarellasvip.com/gallery');

            $('.view-display-id-block_featured .views-row-3 a').attr('href','http://barbarellasvip.com/events');    
        }
        



    
    

    // $('.gallery-modal .views-row-1').wrap('<div id="gallery-modal-1" class="reveal-modal" data-reveal></div>');
    
    // $('.view-display-id-page_gallery .views-row-1').wrap('<a href="#" data-reveal-id="gallery-modal-1"></a>');
    


    }
  };

})(jQuery, Drupal);
