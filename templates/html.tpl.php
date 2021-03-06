<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
?>
<!DOCTYPE html>
<!-- Sorry no IE7 support! -->
<!-- @see http://foundation.zurb.com/docs/index.html#basicHTMLMarkup -->

<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div class="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <?php print _zurb_foundation_add_reveals(); ?>

  <!-- <a href="#" data-reveal-id="myModal">Click Me For A Modal</a>

  <div id="myModal" class="reveal-modal" data-reveal>
    <h2>Awesome. I have it.</h2>
    <p class="lead">Your couch.  It is mine.</p>
    <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
    <a class="close-reveal-modal">&#215;</a>
  </div> -->

  <script>
    (function ($, Drupal, window, document, undefined) {

      $('.view-display-id-page_gallery .views-row').each(function(i){
        $(this).wrap('<a href="#" data-reveal-id="galleryModal-'+ i +'">');
        i++;
      });

      $('.gallery-modal .views-row').each(function(i){
        // i = i+1;
        $(this).wrap('<div id="galleryModal-'+ i +'" class="reveal-modal small" data-reveal>');
        $(this).find('.reveal-modal').append('<a class="close-reveal-modal">&#215;</a>');
        i++;
      });

      

      $(document).foundation();

      $('.flexslider').flexslider({
        animation: "fade",
        controlNav: "false",
        directionNav: "false",
        animationSpeed: 1800,
        slideshowSpeed: 5000
      });

      $(".animate").each(function(){
        $(this).bind('inview', function (event, visible) {
          var $this = $(this),
            $animation = ( $this.data("animation") !== undefined ) ? $this.data("animation") : "fadeIn";
            $delay = ( $this.data("delay") !== undefined ) ? $this.data("delay") : 300;
            
            if (visible == true) {
              setTimeout(function() { $this.addClass($animation); },$delay);
            }else{
              setTimeout(function() { $this.removeClass($animation); },$delay);
            }
        });
      });

      ///////////////

      // var feed = new Instafeed({
      //   get: 'tagged',
      //   tagName: 'barbarellas',
      //   clientId: '8935540bd06d417bb9a5de1799e448f9',
      //   resolution: 'low_resolution',
      //   limit: 10,
      //   sortBy: 'most-recent',
      //   template: '<a href="{{link}}"><img src="{{image}}" /></a>'
      // });
      // feed.run();

      ///////////////

      // var userFeed = new Instafeed({
      //   get: 'tagged',
      //   clientId: '8935540bd06d417bb9a5de1799e448f9',
      //   tagName: 'webdesign',
      //   resolution: 'low_resolution',
      //   template: '<div id={{model.user.username}} style="display: none;"><a href="{{link}}"><img src="{{image}}" /></a></div>'
      //   //after: function () {document.getElementById("helen_hulbert").style.display = 'block';}
      // });
      // userFeed.run();

      // var userFeed = new Instafeed({
      //   clientId: '8935540bd06d417bb9a5de1799e448f9',
      //   get: 'tagged',
      //   tagName: 'barbarellas',
      //   links: true,
      //   limit: 1,
      //   sortBy: 'most-recent',
      //   resolution: 'standard_resolution',
      //   template: '<div><a href="{{link}}"><img src="{{image}}" /></a></div>'
      //   // template: '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3"><div class="photo-box"><div class="image-wrap"><a href="{{link}}"><img src="{{image}}"></a><div class="likes">{{likes}} Likes</div></div><div class="description">{{caption}}<div class="date">{{model.date}}</div></div></div></div>'
      // });
      // userFeed.run();


      var userFeed = new Instafeed({
        //clientId: '8935540bd06d417bb9a5de1799e448f9',
        get: 'user',
        userId: 1722765464, // id barbarellas
        accessToken: '1722765464.467ede5.2ef24b6dcd6b4db39295b52e20305042',
        resolution: 'low_resolution',
        limit: 1,
        sortBy: 'most-recent',
        // filter: function(image) {
        //   return image.tags.indexOf('atomiq') >= 0;
        // },
        template: '<div><a href="{{link}}"><img src="{{image}}" /></a></div>'
      });
      userFeed.run();


    })(jQuery, Drupal, this, this.document);
  </script>
</body>
</html>
