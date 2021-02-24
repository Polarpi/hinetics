<?php
/**
 * The home page file.
 *
 * @package understrap
 */

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="home-wrapper">
  <div class="home-jumbotron">
    <div class="home-jumbotron-text">
      <h1><?php the_title(); ?></h1>
      <i class="fas fa-angle-down home-arrow"></i>
    </div>
    <div class="clouds">
      <img src="https://i.ibb.co/nBQYWTJ/cloud1.png" alt="cloud1" style="--i:1;" />
      <img src="https://i.ibb.co/0J1nPdK/cloud2.png" alt="cloud2" style="--i:2;" />
      <img src="https://i.ibb.co/1nKdFKR/cloud3.png" alt="cloud3" style="--i:3;" />
      <img src="https://i.ibb.co/zQWDfQx/cloud4.png" alt="cloud4" style="--i:4;" />
      <img src="https://i.ibb.co/WfSkWb4/cloud5.png" alt="cloud5" style="--i:5;" />
      <img src="https://i.ibb.co/nBQYWTJ/cloud1.png" alt="cloud1" style="--i:10;" />
      <img src="https://i.ibb.co/0J1nPdK/cloud2.png" alt="cloud2" style="--i:9;" />
      <img src="https://i.ibb.co/1nKdFKR/cloud3.png" alt="cloud3" style="--i:8;" />
      <img src="https://i.ibb.co/zQWDfQx/cloud4.png" alt="cloud4" style="--i:7;" />
      <img src="https://i.ibb.co/WfSkWb4/cloud5.png" alt="cloud5" style="--i:6;" />
    </div>
  </div>
  <?php while ( have_posts() ) : the_post(); ?>

  <?php get_template_part( 'loop-templates/content', 'page' ); ?>

  <?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

  <?php endwhile; // end of the loop. ?>

  <?php get_footer(); ?>
</div>