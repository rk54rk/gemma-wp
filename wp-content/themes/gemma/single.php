<?php get_header(); ?>
<div class="col-md-12 page-title">		
	<h3><?php the_category(','); ?></h3>
</div>

<div class="container">	
<div class="cont-grid content-spacer">
  	<div class="content-column col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="content-item post">
    <?php if (have_posts()) :?>
    <?php while(have_posts()) : the_post(); ?>
    <div class="featured">
    <?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
    </div>
      <h2 class="sing-tit">
        <?php the_title(); ?>
      </h3>
      <p class="meta"> <i class="fa fa-clock-o"></i>
      
        <?php the_time('j M , Y') ?>
      </p>
      <div class="content-text">
        <?php the_content('Leggi...');?>
        <?php wp_link_pages('pagelink=Page %'); ?>
        <p>
          <?php $post_tags = wp_get_post_tags($post->ID); if(!empty($post_tags)) {?>
          <span class="tag"> <i class="fa fa-tag"></i>
          <?php the_tags('', ', ', ''); ?>
          </span>
          <?php } ?>
        </p>
        <div id="comments">
          <?php comments_template(); ?>
        </div>
       </div>
    <?php endwhile; ?>
    <?php else : ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
  </div>
  </div>
</div>
</div>
<?php get_footer(); ?>
