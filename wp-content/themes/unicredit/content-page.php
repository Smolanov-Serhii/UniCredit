<?php
/**
 * Template Name: Произвольная
 *
 */

get_header();
?>

    <article class="single-page">
        <h1 class="single-page__title"><?php the_title();?></h1>
        <div class="single-page__content">
            <?php the_content();?>
        </div>
    </article>

<?php
get_footer();