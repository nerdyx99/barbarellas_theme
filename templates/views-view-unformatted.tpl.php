<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>


<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<?php 
	if($view->current_display == 'block_featured' ||
		$view->current_display == 'block_events_sub_page' ||
		$view->current_display == 'page_gallery'){
		echo '<ul class="medium-block-grid-3">';
	}
	if($view->current_display == 'block_events'){
		echo '<ul class="medium-block-grid-4 home-events">';
	}
?>

<?php foreach ($rows as $id => $row): ?>

<?php 
	if( $view->current_display == 'block_featured' ||
		$view->current_display == 'block_events' ||
		$view->current_display == 'block_events_sub_page' ||
		$view->current_display == 'page_gallery'){
		echo '<li>';
	}
?>

  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>

<?php 
	if( $view->current_display == 'block_featured' ||
		$view->current_display == 'block_events' ||
		$view->current_display == 'block_events_sub_page' ||
		$view->current_display == 'page_gallery'){
		echo '</li>';
	}
?>

<?php endforeach; ?>


<?php 
	if( $view->current_display == 'block_featured' ||
		$view->current_display == 'block_events' ||
		$view->current_display == 'block_events_sub_page' ||
		$view->current_display == 'page_gallery'){
		echo '</ul>';
	}
?>