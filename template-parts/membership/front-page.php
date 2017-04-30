<section class="membership-front-page">
    <div class="membership-title">
        <div class="container">
            <h2>
                <small><?php _e('All you need to know about','imgd'); ?></small><br>
                <?php _e('Membership','imgd'); ?>
            </h2>
        </div>
    </div>
    <div class="membership-block">
        <div class="container">
            <?php 
	            include( locate_template( 'template-parts/membership/destacados.php' ) );
            ?>
        </div>
    </div>
</section>