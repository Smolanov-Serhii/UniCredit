<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fermer
 */

if ( ! is_active_sidebar( 'slider-sidebar' ) ) {
	return;
}
?>

	<?php dynamic_sidebar( 'slider-sidebar' ); ?>

