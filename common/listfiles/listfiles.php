<?php
function get_images(){
  $images = glob("images/gal/*.jpg");
  sort($images);
  foreach ($images as $image){
    $output .= '<div class="thumb">
					<span class="img"><a href="" rel="lightbox" data-img="'.$image.'"></a></span>
					<span class="caption"></span>
				</div>';
  }
  echo $output;
}