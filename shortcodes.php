<?php

if (!function_exists('ebor_divider')) {
	function ebor_divider( $atts, $content = null ) {
	   return '<div class="clear"></div><hr class="big-hr" /><div class="clear"></div>';
	}
	add_shortcode('ebor_divider', 'ebor_divider');
}

/*-----------------------------------------------------------------------------------*/
/*	Column Shortcodes
/*-----------------------------------------------------------------------------------*/

if (!function_exists('ebor_one_third')) {
	function ebor_one_third( $atts, $content = null ) {
	   return '<div class="ebor-one-third">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('ebor_one_third', 'ebor_one_third');
}

if (!function_exists('ebor_one_third_last')) {
	function ebor_one_third_last( $atts, $content = null ) {
	   return '<div class="ebor-one-third ebor-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('ebor_one_third_last', 'ebor_one_third_last');
}

if (!function_exists('ebor_two_third')) {
	function ebor_two_third( $atts, $content = null ) {
	   return '<div class="ebor-two-third">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('ebor_two_third', 'ebor_two_third');
}

if (!function_exists('ebor_two_third_last')) {
	function ebor_two_third_last( $atts, $content = null ) {
	   return '<div class="ebor-two-third ebor-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('ebor_two_third_last', 'ebor_two_third_last');
}

if (!function_exists('ebor_one_half')) {
	function ebor_one_half( $atts, $content = null ) {
	   return '<div class="ebor-one-half">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('ebor_one_half', 'ebor_one_half');
}

if (!function_exists('ebor_one_half_last')) {
	function ebor_one_half_last( $atts, $content = null ) {
	   return '<div class="ebor-one-half ebor-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('ebor_one_half_last', 'ebor_one_half_last');
}

if (!function_exists('ebor_one_fourth')) {
	function ebor_one_fourth( $atts, $content = null ) {
	   return '<div class="ebor-one-fourth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('ebor_one_fourth', 'ebor_one_fourth');
}

if (!function_exists('ebor_one_fourth_last')) {
	function ebor_one_fourth_last( $atts, $content = null ) {
	   return '<div class="ebor-one-fourth ebor-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('ebor_one_fourth_last', 'ebor_one_fourth_last');
}

if (!function_exists('ebor_three_fourth')) {
	function ebor_three_fourth( $atts, $content = null ) {
	   return '<div class="ebor-three-fourth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('ebor_three_fourth', 'ebor_three_fourth');
}

if (!function_exists('ebor_three_fourth_last')) {
	function ebor_three_fourth_last( $atts, $content = null ) {
	   return '<div class="ebor-three-fourth ebor-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('ebor_three_fourth_last', 'ebor_three_fourth_last');
}

if (!function_exists('ebor_one_fifth')) {
	function ebor_one_fifth( $atts, $content = null ) {
	   return '<div class="ebor-one-fifth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('ebor_one_fifth', 'ebor_one_fifth');
}

if (!function_exists('ebor_one_fifth_last')) {
	function ebor_one_fifth_last( $atts, $content = null ) {
	   return '<div class="ebor-one-fifth ebor-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('ebor_one_fifth_last', 'ebor_one_fifth_last');
}

if (!function_exists('ebor_two_fifth')) {
	function ebor_two_fifth( $atts, $content = null ) {
	   return '<div class="ebor-two-fifth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('ebor_two_fifth', 'ebor_two_fifth');
}

if (!function_exists('ebor_two_fifth_last')) {
	function ebor_two_fifth_last( $atts, $content = null ) {
	   return '<div class="ebor-two-fifth ebor-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('ebor_two_fifth_last', 'ebor_two_fifth_last');
}

if (!function_exists('ebor_three_fifth')) {
	function ebor_three_fifth( $atts, $content = null ) {
	   return '<div class="ebor-three-fifth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('ebor_three_fifth', 'ebor_three_fifth');
}

if (!function_exists('ebor_three_fifth_last')) {
	function ebor_three_fifth_last( $atts, $content = null ) {
	   return '<div class="ebor-three-fifth ebor-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('ebor_three_fifth_last', 'ebor_three_fifth_last');
}

if (!function_exists('ebor_four_fifth')) {
	function ebor_four_fifth( $atts, $content = null ) {
	   return '<div class="ebor-four-fifth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('ebor_four_fifth', 'ebor_four_fifth');
}

if (!function_exists('ebor_four_fifth_last')) {
	function ebor_four_fifth_last( $atts, $content = null ) {
	   return '<div class="ebor-four-fifth ebor-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('ebor_four_fifth_last', 'ebor_four_fifth_last');
}

if (!function_exists('ebor_one_sixth')) {
	function ebor_one_sixth( $atts, $content = null ) {
	   return '<div class="ebor-one-sixth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('ebor_one_sixth', 'ebor_one_sixth');
}

if (!function_exists('ebor_one_sixth_last')) {
	function ebor_one_sixth_last( $atts, $content = null ) {
	   return '<div class="ebor-one-sixth ebor-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('ebor_one_sixth_last', 'ebor_one_sixth_last');
}

if (!function_exists('ebor_five_sixth')) {
	function ebor_five_sixth( $atts, $content = null ) {
	   return '<div class="ebor-five-sixth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('ebor_five_sixth', 'ebor_five_sixth');
}

if (!function_exists('ebor_five_sixth_last')) {
	function ebor_five_sixth_last( $atts, $content = null ) {
	   return '<div class="ebor-five-sixth ebor-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('ebor_five_sixth_last', 'ebor_five_sixth_last');
}


/*-----------------------------------------------------------------------------------*/
/*	Buttons
/*-----------------------------------------------------------------------------------*/

if (!function_exists('ebor_button')) {
	function ebor_button( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'url' => '#',
			'target' => '_self',
			'style' => 'turquoise'
	    ), $atts));
		
	   return '<a target="'.$target.'" class="ebor-button color '.$style.'" href="'.$url.'">' . do_shortcode($content) . '</a>';
	}
	add_shortcode('ebor_button', 'ebor_button');
}


/*-----------------------------------------------------------------------------------*/
/*	Alerts
/*-----------------------------------------------------------------------------------*/

if (!function_exists('ebor_alert')) {
	function ebor_alert( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'style'   => 'turquoise'
	    ), $atts));
		
	   return '<div class="ebor-alert '.$style.'">' . do_shortcode($content) . '<img src="' . plugins_url( 'img/bg-close.png' , __FILE__ ) . '" alt="close" /></div>';
	}
	add_shortcode('ebor_alert', 'ebor_alert');
}


/*-----------------------------------------------------------------------------------*/
/*	Tabs Shortcodes
/*-----------------------------------------------------------------------------------*/

if (!function_exists('ebor_tabs')) {
	function ebor_tabs( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'type'   => ''
		), $atts));
		
		STATIC $i = 0;
		$i++;

		// Extract the tab titles for use in the tab widget.
		preg_match_all( '/tab title="([^\"]+)"/i', $content, $matches, PREG_OFFSET_CAPTURE );
		
		$tab_titles = array();
		if( isset($matches[1]) ){ $tab_titles = $matches[1]; }
		
		$output = '';        
		
		if( count($tab_titles) ){
		    $output .= '<div id="' . $type . '" class="ebor-tabs" data-type="' . $type . '">';
			$output .= '<ul class="resp-tabs-list">';
			
			foreach( $tab_titles as $tab ){
				$output .= '<li>' . $tab[0] . '</li>';
			}
		    
		    $output .= '</ul><div class="resp-tabs-container">';
		    $output .= do_shortcode( $content );
		    $output .= '</div><div class="clear"></div></div>';
		} else {
			$output .= do_shortcode( $content );
		}
		
		return $output;
	}
	add_shortcode( 'ebor_tabs', 'ebor_tabs' );
}

if (!function_exists('ebor_tab')) {
	function ebor_tab( $atts, $content = null ) {
		$defaults = array( 'title' => 'Tab' );
		extract( shortcode_atts( $defaults, $atts ) );
		
		return '<div>'. wpautop(do_shortcode($content)) .'</div>';
	}
	add_shortcode( 'ebor_tab', 'ebor_tab' );
}

?>