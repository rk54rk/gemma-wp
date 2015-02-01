<?php get_header(); ?>

<style type="text/css">
html, body {padding:0; margin:0; width:100%; min-height:100%;overflow:hidden}
.wrapper {width:100%; height:100%;}
.mobile-wrapper{display:none;}

/* Image map styles */
.imageMap {height:100%;display:inline-block;position:relative; margin:0 auto;}
.imageMap img {display:block; height:100%;margin:0 auto;position:relative;z-index:0;}

.imageMap .hotspots{display:block\0;height:100%\0;position:relative\0;top:-100%\0;}

.imageMap a {display:block; position:absolute; z-index:100;}
.imageMap a.p1 {left:40%; top:6%; width:15%; height:10%;}
.imageMap a.p2 {left:60%; top:73%; width:23%; height:12%;}
.imageMap a.p3 {left:23%; top:65%; width:17%; height:10%;}
.imageMap a.p4 {left:61%; top:62%; width:12%; height:7%;}
.imageMap a.p5 {left:52%; top:23%; width:13%; height:16%;}
.imageMap a.p6 {left:58%; top:45%; width:14%; height:12%;}
.imageMap a.p7 {left:25%; top:37%; width:14%; height:10%;}
.imageMap a.p8 {left:26%; top:52%; width:14%; height:8%;}

.imageMap .hotspots a {display:block; background:url(/wp-content/themes/gemma/img/trans.gif)}
.imageMap .hotspots a:hover {z-index:100; background-color:#FFF; opacity:0.3; filter: alpha(opacity=30);border-radius: 5px}

@media (max-width: 481px) {

html, body {padding:0; margin:0; width:100%; min-height:100%;overflow:visible}
.spacer{display:none;}
.wrapper{display:none;}
.mobile-wrapper{display:block;position:absolute;z-index:100;}
.mobile-fp-nav a{display:block;height:100%}

}

</style>

<script>
// if is portrait, write the media queried css again here:
if(window.innerHeight > window.innerWidth){
    document.write("<style>html, body {padding:0; margin:0; width:100%; min-height:100%;overflow:visible}.spacer{display:none;}.wrapper{display:none;}.mobile-wrapper{display:block;position:absolute;z-index:100;}.mobile-fp-nav a{display:block;height:100%}</style>");
}
</script>

<!--[if IE 8]>
<style type="text/css">
.imageMap {display:inline;}
</style>
<![endif]-->

<div class="wrapper">
	<div class="front-collage" >
		<div class="imageMap" id="imageMap" aria-haspopup="true">
	    	<img id="collage" src="<?php echo get_stylesheet_directory_uri(); ?>/bg-layer/bg/home.jpg"/>
			<div class="hotspots" id="hotspots">
				<a href="<?php echo home_url()."/about/" ?>" class="p1" rel="nofollow" aria-haspopup="false"></a>
				<a href="<?php echo home_url()."/boom-shakalaka/" ?>" class="p2" rel="nofollow" aria-haspopup="false"></a>
				<a href="<?php echo home_url()."/category/pictures/" ?>" class="p3" rel="nofollow" aria-haspopup="false"></a>
				<a href="<?php echo home_url()."/category/radio/" ?>" class="p4" rel="nofollow" aria-haspopup="false"></a>
				<a href="<?php echo home_url()."/say-hello/" ?>" class="p5" rel="nofollow" aria-haspopup="false"></a>
				<a href="<?php echo home_url()."/category/telly-bits/" ?>" class="p6" rel="nofollow" aria-haspopup="false"></a>
				<a href="<?php echo home_url()."/category/news/" ?>" class="p7" rel="nofollow" aria-haspopup="false"></a>
				<a href="<?php echo home_url()."/category/words/" ?>" class="p8" rel="nofollow" aria-haspopup="false"></a>
			</div>
		</div>
    </div>
</div>

<div class="mobile-wrapper" style="width:100%;text-align:center;">
	<div class="mobile-fp-header">
    	<img style="width:100%" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fp-mobile/fp-mobile-header.png"/>
    </div>
   
   	<div class="mobile-fp-nav">
        
        <table style="width:100%;">
        
        	<tr>
            
            	<td>
                <a href="<?php echo home_url()."/about/" ?>">
                <img style="width:100%" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fp-mobile/buttons/fp-mobile_01.png"/>
                </a>
                </td>
                
            	<td>
                <a href="<?php echo home_url()."/say-hello/" ?>">
                <img style="width:100%" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fp-mobile/buttons/fp-mobile_02.gif"/>
                </a>
                </td>
                
            </tr>

        	<tr>
            
            	<td>
                <a href="<?php echo home_url()."/category/news/" ?>">
                <img style="width:100%" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fp-mobile/buttons/fp-mobile_03.gif"/>
                </a>
                </td>
                
            	<td>
                <a href="<?php echo home_url()."/category/words/" ?>">
                <img style="width:100%" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fp-mobile/buttons/fp-mobile_04.gif"/>
                </a>
                </td>
                
            </tr>

        	<tr>
            
            	<td>
                <a href="<?php echo home_url()."/category/telly-bits/" ?>">
                <img style="width:100%" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fp-mobile/buttons/fp-mobile_05.gif"/>
                </a>
                </td>
                
            	<td>
                <a href="<?php echo home_url()."/category/radio/" ?>">
                <img style="width:100%" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fp-mobile/buttons/fp-mobile_06.gif"/>
                </a>
                </td>
                
            </tr>

        	<tr>
            
            	<td>
                <a href="<?php echo home_url()."/category/pictures/" ?>">
                <img style="width:100%" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fp-mobile/buttons/fp-mobile_07.png"/>
                </a>
                </td>
                
            	<td>
                <a href="<?php echo home_url()."/boom-shakalaka/" ?>">
                <img style="width:100%" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fp-mobile/buttons/fp-mobile_08.gif"/>
                </a>
                </td>
                
            </tr>

            
        </table>
        
    </div>
 
 	<div class="mobile-fp-footer">
    	<img style="width:100%" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fp-mobile/fp-mobile-footer.png"/>
    </div>
   
</div>

<script>

window.onresize = function(){ window.location.reload(false); }
</script>
<?php get_footer(); ?>
