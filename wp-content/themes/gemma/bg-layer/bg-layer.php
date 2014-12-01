<?php
?>

<div class="bg-layer" id="bg-layer">
</div>

<style>
.bg-layer { 
    height:100%;
    width:100%;
	position:fixed;
	overflow:hidden;
	margin-top:0px;
	
  background: url(<?php echo get_stylesheet_directory_uri(); ?>/bg-layer/02.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>