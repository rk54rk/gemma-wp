<?php get_header(); ?>

<div class="col-md-12 single">
  <div class="col-md-12 single-in">
    <?php if (have_posts()) :?>
    <?php while(have_posts()) : the_post(); ?>
    <?php if ( has_post_thumbnail() ) { ?>
    <?php the_post_thumbnail('single', array('class' => 'sing-cop')); ?>
    <?php } else { ?>
    <?php }  ?>
    <div class="sing-tit-cont">
      <h3 class="sing-tit">
        <?php the_title(); ?>
      </h3>
    </div>
    <div class="sing-cont">
      <?php the_content('Leggi...');?>
    </div>
    <?php endwhile; ?>
    <?php else : ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
