<?php
/* Noticias Destacadas */

// Acá seleciono las Páginas que voy a mostrar como destacados en la Home
$args = array('post_type' => array('post'),
'meta_key' => 'imgd_home',
'meta_value' => '1',
'post_status' => 'publish',
'posts_per_page' => $destacadoscant,
'ignore_sticky_posts'=>true
);

$cant_cols = 12 / $destacadoscant;
$post_class = 'col-md-'.$cant_cols;

$loop = new WP_Query($args);

if ($loop->have_posts()) {?>
  <section class="imgd-destacados">


  <div class="container">
       <h2> <?php _e('Eventos Destacados', 'imgd'); ?></h2>
    <div class="row">
    <?php
    $x = 0;
    $destacadosID = array();

    while ($loop->have_posts()) : $loop->the_post();
    $destacadosID[] = get_the_ID();
    ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class($post_class.' col-sm-4'); ?>>
      
      <?php
	      include( locate_template( 'template-parts/news/new.php' ) );
      $x++;
      ?>

    </article> <!-- End article <?php the_ID(); ?> -->
  <?php endwhile; ?>
  </div> <!-- End Row-->
  </div><!-- End Container-->
</section>
<?php } ?>
<?php wp_reset_query();
//var_dump($destacadosID);
?>
