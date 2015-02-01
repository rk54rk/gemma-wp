<?php get_header(); ?>
<style type="text/css">
.top-layer{position:relative;z-index:999;}
.content-item{margin-top:}

/* Image map styles */
.imageMap {height:100%; display:inline-block;position:relative; margin-bottom:200px;}
.imageMap .hotspots {width:100%; height:100%; position:absolute; left:0; top:0; visibility:hidden;}
.imageMap a {display:block; position:absolute; z-index:100;}
.imageMap a.p1 {left:37%; top:30%; width:15%; height:12%;}
.imageMap a.p2 {left:56%; top:40%; width:18%; height:15%;}
.imageMap a.p3 {left:60%; top:70%; width:15%; height:16%;}

.imageMap:hover .hotspots {visibility:visible;}

.imageMap b {display:block; position:absolute; z-index:200;;
-webkit-transition:0.75s;
-moz-transition:0.75s;
-o-transition:0.75s;
transition:0.75s;
}
.imageMap b.p1 {left:45%; top:10%; width:15%; height:10%;}
.imageMap b.p2 {left:60%; top:63%; width:20%; height:12%;}
.imageMap b.p3 {left:30%; top:60%; width:17%; height:10%;}


.imageMap .hotspots div:hover b {width:0; padding:0;}
.imageMap .hotspots div:hover p {display:block;}
.imageMap .hotspots div:hover a {z-index:100; background-color:#FFF; opacity:0.3; filter: alpha(opacity=30);border-radius: 5px;}
</style>


<div class="col-sm-12 page-title top-layer">
    <?php if (have_posts()) :?>
    <?php while(have_posts()) : the_post(); ?>
    <?php if ( has_post_thumbnail() ) { ?>
    <?php the_post_thumbnail('single', array('class' => 'sing-cop')); ?>
    <?php } else { ?>
    <?php }  ?>
	<h3>Say hello</h3>
</div>

<div class="container">
	<div class="col-sm-12 cont-grid content-spacer">
		<div class="content-column col-md-4 col-md-offset-2 col-sm-6 col-sm-offset-3">
			<div class="content-item post top-layer">
			<?php the_content(); ?>
			</div>
		</div>
    <?php endwhile; ?>
    <?php else : ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>

	</div>
</div>


<div class="front-collage" >
	<div class="imageMap" aria-haspopup="true">
	    <img src="<?php echo get_stylesheet_directory_uri(); ?>/bg-layer/bg/sayhello.jpg"/>
		<div class="hotspots">
			<div title="Twitter"><a href="http://www.twitter.com" class="p1" rel="nofollow" aria-haspopup="false"></a></div>
			<div title="Boom Shakalaka!"><a href="http://www.instagram.com" class="p2" rel="nofollow" aria-haspopup="false"></a></div>
			<div title="Pictures"><a href="http://www.facebook.com" class="p3" rel="nofollow" aria-haspopup="false"></a></div>

		</div>
	</div>
</div>


<script>
window.onresize = function(){ window.location.reload(false); }
</script>
<?php get_footer(); ?>
