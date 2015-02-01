<?php get_header(); ?>

<style type="text/css">
html, body {padding:0; margin:0; width:100%; min-height:100%;}
.wrapper {width:100%; height:100%;margin:0 auto;}

/* Image map styles */
.imageMap {height:100%;display:inline-block;position:relative; margin-bottom:200px;margin:0 auto}

.imageMap .hotspots {width:100%; height:100%; position:absolute; left:0; top:0; visibility:hidden;}
.imageMap a {display:block; position:absolute; z-index:100;}
.imageMap a.p1 {left:45%; top:10%; width:15%; height:10%;}
.imageMap a.p2 {left:60%; top:63%; width:20%; height:12%;}
.imageMap a.p3 {left:30%; top:60%; width:17%; height:10%;}
.imageMap a.p4 {left:56%; top:33%; width:12%; height:7%;}
.imageMap a.p5 {left:55%; top:19%; width:13%; height:14%;}
.imageMap a.p6 {left:60%; top:50%; width:14%; height:12%;}
.imageMap a.p7 {left:34%; top:34%; width:14%; height:10%;}
.imageMap a.p8 {left:34%; top:46%; width:14%; height:8%;}

.imageMap:hover .hotspots {visibility:visible;}

.imageMap .hotspots div:hover p {display:block;}
.imageMap .hotspots div:hover a {z-index:100; background-color:#FFF; opacity:0.3; filter: alpha(opacity=30);border-radius: 5px;}
</style>


<div class="wrapper">
	<div class="front-collage" >
		<div class="imageMap" aria-haspopup="true">
	    	<img src="<?php echo get_stylesheet_directory_uri(); ?>/bg-layer/bg/home.jpg"/>
			<div class="hotspots">
				<div title="About"><a href="<?php echo home_url()."/about/" ?>" class="p1" rel="nofollow" aria-haspopup="false"></a></div>
				<div title="Boom Shakalaka!"><a href="<?php echo home_url()."/boom-shakalaka/" ?>" class="p2" rel="nofollow" aria-haspopup="false"></a></div>
				<div title="Pictures"><a href="<?php echo home_url()."/category/pictures/" ?>" class="p3" rel="nofollow" aria-haspopup="false"></a></div>
				<div title="Radio"><a href="<?php echo home_url()."/category/radio/" ?>" class="p4" rel="nofollow" aria-haspopup="false"></a></div>
				<div title="Say hello"><a href="<?php echo home_url()."/say-hello/" ?>" class="p5" rel="nofollow" aria-haspopup="false"></a></div>
				<div title="Telly bits"><a href="<?php echo home_url()."/category/telly-bits/" ?>" class="p6" rel="nofollow" aria-haspopup="false"></a></div>
				<div title="News"><a href="<?php echo home_url()."/category/news/" ?>" class="p7" rel="nofollow" aria-haspopup="false"></a></div>
				<div title="Words"><a href="<?php echo home_url()."/category/words/" ?>" class="p8" rel="nofollow" aria-haspopup="false"></a></div>
			</div>
		</div>
    </div>
</div>

<script>
window.onresize = function(){ window.location.reload(false); }
</script>
<?php get_footer(); ?>
