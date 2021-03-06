<?php get_header(); ?>

<div class="col-sm-12 page-title">
    <?php if (have_posts()) :?>
    <?php while(have_posts()) : the_post(); ?>
    <?php if ( has_post_thumbnail() ) { ?>
    <?php the_post_thumbnail('single', array('class' => 'sing-cop')); ?>
    <?php } else { ?>
    <?php }  ?>

  <h3><?php the_title(); ?></h3>
</div>
<div class="container about">
  <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 cont-grid content-spacer" style="background-color:#FFF;padding:35px;">
      <?php the_content(); ?>
    </div>
  </div>
    <?php endwhile; ?>
    <?php else : ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
