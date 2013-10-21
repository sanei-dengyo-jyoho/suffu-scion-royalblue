<?php
/**
 * Additional Shortcodes
 */
//******************************************************************************
// WikiUp Tooltip
//******************************************************************************
function sc_wikiup($atts, $content = null) {
	extract(shortcode_atts(array(
			'id' => '',
			'style' => '',
			'wiki' => '',
			'lang' => 'ja',
	), $atts));
	// idを追加
	$dataid = '';
	if ($id != '') {
		$dataid = ' id="'.$id.'"';
	}
	// styleを追加
	$datastyle = '';
	if ($style != '') {
		$datastyle = ' style="'.$style.'"';
	}
	$ret  = '';
	$ret .= '<data';
	$ret .= $dataid;
	$ret .= $datastyle;
	$ret .= ' data-wiki="'.$wiki.'"';
	$ret .= ' data-lang="'.$lang.'">';
	$ret .= do_shortcode($content);
	$ret .= '</data>';
	return $ret;
}
add_shortcode('wikiup', 'sc_wikiup');
?>
