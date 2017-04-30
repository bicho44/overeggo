<?php
/**
 * Template part for displaying news.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package IMGD portions
 */

?>
<div class="thumbnail">
    <?php
    // Must be inside a loop.
    if (has_post_thumbnail()) {?>
        <a href="<?php the_permalink(); ?>">
            <?php  /* @todo Cambiar para que la imagen sea responsive */
                the_post_thumbnail('news-archive', array('class'=>'align-center img-responsive'));
                ?>
        </a>
    <?php } ?>

    <header class="destacados-caption">
        <h3>
            <a href="<?php the_permalink(); ?>" rel="bookmark">
                <?php shortentext(get_the_title(), 50);?>
            </a>
        </h3>
        <?php
            shortentext(get_the_content(), 85);
        ?>
    </header><!-- .entry-header -->
</div><!-- Fin Thumbnail -->