<?php
/**
 * Service Box
 *
 */
if (!function_exists('service_box_shortcode')) {

	function service_box_shortcode( $atts, $content = null, $shortcodename = '' ) {
		extract(shortcode_atts(
			array(
				'title'        => '',
				'subtitle'     => '',
				'icon'         => '',
				'text'         => '',
				'btn_text'     => '',
				'btn_link'     => '',
				'btn_size'     => '',
				'target'       => '',
				'svg'		   => 'false',
				'custom_class' => ''
		), $atts));

		if ($svg == 'true') {
			$custom_class = $custom_class.' '.$icon;
		}
		$output = '<div class="service-box '.$custom_class.'">';

		if($icon != 'no' && ($svg == 'false')) {
			if (strpos ($icon, "icon-") !== false) {
				$output .= '<figure class="icon"><i class="'.$icon.'"></i></figure>';
			} else {
		 		$icon_url = CHERRY_PLUGIN_URL . 'includes/images/' . strtolower($icon) . '.png' ;
				if( defined ('CHILD_DIR') ) {
					if(file_exists(CHILD_DIR.'/images/'.strtolower($icon).'.png')){
						$icon_url = CHILD_URL.'/images/'.strtolower($icon).'.png';
					}
				}
				$output .= '<figure class="icon"><img src="'.$icon_url.'" alt="" /></figure>';
			}
		} else if ($svg == 'true') {
			$icon_url = CHERRY_PLUGIN_URL . 'includes/images/' . strtolower($icon) . '.svg' ;
			if( defined ('CHILD_DIR') ) {
				if(file_exists(CHILD_DIR.'/images/'.strtolower($icon).'.svg')){
					$icon_url = CHILD_URL.'/images/'.strtolower($icon).'.svg';

					$someUrl = file_get_contents($icon_url);
					$output .= '<div class="svg-container"><figure class="icon">';
					$output .= $someUrl;
					$output .= '</figure></div>';
				}
			}
			
			
		}

		$output .= '<div class="service-box_body">';

		if($icon == 'no'){
			$output .= '<div class="circle-box"></div><div class="desc-in">';
		}
		if ($title!="") {
			$output .= '<h2 class="title">';
				if ($btn_link!="" && $btn_text == '') {
					$output .=  '<a href="'.$btn_link.'" title="'.$btn_text.'" target="'.$target.'">';
				}
				$output .= $title;
				if ($btn_link!="" && $btn_text == '') {
					$output .=  '</a>';
				}
			$output .= '</h2>';
		}
		if ($subtitle!="") {
			$output .= '<h5 class="sub-title">';
				$output .= $subtitle;
			$output .= '</h5>';
		}
		if ($text!="") {
			$output .= '<div class="clear"></div><div class="service-box_txt">';
			$output .= $text;
			$output .= '</div>';
		}

		if ($btn_link!="" && $btn_text != '') {
			$output .=  '<div class="btn-align"><a href="'.$btn_link.'" title="'.$btn_text.'" class="btn btn-inverse btn-'.$btn_size.' btn-primary " target="'.$target.'">';
			$output .= $btn_text;
			$output .= '</a></div>';
		}
		if($icon == 'no'){
			$output .= '</div>';
		}
		$output .= '</div>';
		$output .= '</div><!-- /Service Box -->';

		$output = apply_filters( 'cherry_plugin_shortcode_output', $output, $atts, $shortcodename );

		return $output;
	}
	add_shortcode('service_box', 'service_box_shortcode');

}?>