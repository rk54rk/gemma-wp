<?php get_header(); 
$style_dir = get_stylesheet_directory_uri(); 
?>

<div class="col-sm-12 page-title">		
	<h3><?php $category = get_the_category(); echo $category[0]->cat_name;?></h3>
</div>
<div class="container">	
		<div class="cont-grid content-spacer">
        
  	<div class="content-column col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    

        <div class="bg-type content-item post words-intro" style="background-color:hsla(0,0%,100%,0.50);color:#000;">
        <p>
        Gemma was Music Editor of 
        <img style="height:0.8em;vertical-align:baseline;" alt="Company Magazine" src="<?php echo $style_dir?>/img/words-logos/company.png"></img> 
        magazine from 2012-2014. She&nbsp;has also been commissioned to write pieces for the likes of 
        <img style="height:0.8em;vertical-align:0.1em;" alt="The Observer" src="<?php echo $style_dir?>/img/words-logos/to.png"></img>, 
        <img style="height:0.9em;vertical-align:baseline;" alt="Glamour" src="<?php echo $style_dir?>/img/words-logos/glamour.png"></img>, 
        <img style="height:0.9em;vertical-align:baseline;" alt="Standard Issue" src="<?php echo $style_dir?>/img/words-logos/si.png"></img>, 
        <img style="height:0.75em;vertical-align:baseline;" alt="Huffington Post" src="<?php echo $style_dir?>/img/words-logos/thp.png"></img>, 
        <img style="height:0.9em;vertical-align:baseline;" alt="Mr and Mrs Smith " src="<?php echo $style_dir?>/img/words-logos/mms.png"></img>, 
        and 
        <img style="height:0.7em;vertical-align:baseline;" alt="The Debrief" src="<?php echo $style_dir?>/img/words-logos/td.png"></img>.
		</p>
        <p>
Her poem about a Nipple Biting Beast, was published as part of collection of musings for <a href="https://www.hotkeybooks.com/books/detail/the-booby-trap-and-other-bits-and-boobs">The Booby Trap and Other Bits and Boobs</a> collated by Dawn O Porter for Hot Key Books in 2013.
		</p>
        <p>
		<img alt="prints" style="width:100%" src="<?php echo $style_dir?>/img/words-logos/prints.jpg"></img> 
        </p>
        </div>
	</div>
        
  	<div class="content-column col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					
			<?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?> 
            
				<div class="content-item">
				
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
						<p class="grid-cat"><?php the_category(','); ?></p> 
						
						<h2 class="grid-tit"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						
						<p class="meta"> <i class="fa fa-clock-o"></i> <?php the_time('j M , Y') ?> &nbsp;
						
						<div class="content-text">
						
							<?php the_content('More...');?>
							
						</div>
						
						<p>
							<?php $post_tags = wp_get_post_tags($post->ID); if(!empty($post_tags)) {?>
								<span class="tag-post"> <i class="fa fa-tag"></i> <?php the_tags('', ', ', ''); ?> </span>
							<?php } ?>
						</p>
						
					</div>
					
				</div>	

			<?php endwhile; ?>
	        <?php else : ?>

	                <p>Sorry, no posts matched your criteria.</p>

	        <?php endif; ?> 

		</div>	

		<div class="pagination">
		
			<?php
			global $wp_query;
			
			$big = 999999999; // need an unlikely integer
			
			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages
			) );
			?>
			
		</div>

	</div>
    

</div>
<?php get_footer(); ?>	