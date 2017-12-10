<?php
//=================================================================================================================================================================================================
//                                                                                       Shortcodes Columns
//============================================================================================== | ================================================================================================
function testShortcode( $attr = [], $content = null, $tag = '' ) {

	//normalize attr
	$attr = array_change_key_case( (array)$attr, CASE_LOWER );

	// override default attributes with user attributes
	$default = shortcode_atts( [
		'start' => '',
		'end'   => '',
		'class' => 'col '
	], $attr, $tag );

	$preContent = '';
	$sufContent = '';

	if ( $start != '' ) {
		$preContent .= '<div class="row">';
	}

	if ( $end != '' ) {
		$sufContent .= '</div>';
	}

	return $preContent . '<div class="' . $class . '">' . $content . '</div>' . $sufContent;
}

add_shortcode( 'col', 'testShortcode' );