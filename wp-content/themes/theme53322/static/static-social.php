<?php /* Static Name: Social Links */ ?>
<ul class="social">
	<?php
		$social_networks = array("twitter", "facebook", "vimeo", "youtube");
		for($i=0, $array_lenght=count($social_networks); $i<$array_lenght; $i++){
			if(of_get_option($social_networks[$i]) != "") {
				echo '<li class="'.$social_networks[$i].'"><a href="'.of_get_option($social_networks[$i]).'" title="'.$social_networks[$i].'"><i class="i-'.$social_networks[$i].'"></i></a></li>';
			}
		}
	?>
</ul>