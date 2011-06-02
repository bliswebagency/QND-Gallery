
<link rel="stylesheet" media="screen" href="common/stylesheets/gal.css?v=1">
<?php if ($jquery): ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<?php endif; ?>
	
			<div id="gal_preview" style="display:none">
			
			</div>
	
			<div class="gallery">			
				
				
				<?php
				require_once "common/listfiles/listfiles.php";
				get_images();
				?>	
			
			</div>	
	



<script>
//vars
large_w = 800;
large_h = 600;
med_w = 400;
med_h = 300;
sml_w = 200;
sml_h = 150;

gal_preview = false;

jQuery(function($){

$('.thumb a').each(function(){

	//get image
	var gal_img = $(this).attr('data-img');

	//assign thumbnail images
	$(this).css('background-image','url(common/timthumb/timthumb.php?src='+gal_img+'&h='+sml_h+'&w='+sml_w+'q=35)');
	
	//assign colorbox images
	$(this).attr('href','common/timthumb/timthumb.php?src='+gal_img+'&h='+large_h+'&w='+large_w+'q=85');
	
	if (gal_preview){
	$('#gal_preview').show();
	$(this).bind('mouseenter',function(){
			$('#gal_preview').css('background-image','url(common/timthumb/timthumb.php?src='+gal_img+'&h='+med_h+'&w='+med_w+'q=65)');
	});
	
	
	}

});

});
</script>

<script src="/common/jquery/colorbox/load.js"></script>