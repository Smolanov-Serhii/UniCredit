<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fermer
 */

if ( ! is_active_sidebar( 'quize' ) ) {
	return;
}
?>

	<?php dynamic_sidebar( 'quize' ); ?>

