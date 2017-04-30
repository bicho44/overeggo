<section class="news-front-page">
    <div class="newstitle">
        <div class="container">
            <h2><?php _e('News','imgd'); ?></h2>
        </div>
    </div>
    <div class="news-block">
        <div class="container">
            <?php 
	            include( locate_template( 'template-parts/news/destacados.php' ) );
            ?>
        </div>
    </div>
</section>