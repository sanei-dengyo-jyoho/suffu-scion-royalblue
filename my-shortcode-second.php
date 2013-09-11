<?php
/* Additional Shortcodes */
/**
 * note
 */
function sc_note($atts, $content = null) {
	return '<div class="note-wrap"><div class="noteclassic">'.do_shortcode($content).'</div></div>';
}
add_shortcode('note', 'sc_note');

function sc_tip($atts, $content = null) {
	return '<div class="note-wrap"><div class="notetip">'.do_shortcode($content).'</div></div>';
}
add_shortcode('tip', 'sc_tip');

function sc_important($atts, $content = null) {
	return '<div class="note-wrap"><div class="noteimportant">'.do_shortcode($content).'</div></div>';
}
add_shortcode('important', 'sc_important');

function sc_warning($atts, $content = null) {
	return '<div class="note-wrap"><div class="notewarning">'.do_shortcode($content).'</div></div>';
}
add_shortcode('warning', 'sc_warning');

function sc_help($atts, $content = null) {
	return '<div class="note-wrap"><div class="notehelp">'.do_shortcode($content).'</div></div>';
}
add_shortcode('help', 'sc_help');


/**
 * Icon
 */
// アイキャッチ
function sc_catch_icon($atts) {
	extract(shortcode_atts(array(
			'name' => '',
	), $atts));
	return '<img class="img-short-icon" src="'.get_bloginfo('stylesheet_directory').'/images/shortcode/catch_icon/'.$name.'.png" />';
}
add_shortcode('catch_icon', 'sc_catch_icon');

// 県名
function sc_japan_icon($atts) {
	extract(shortcode_atts(array(
			'name' => '',
	), $atts));
	$basename = $name;
	//県名をファイル名に対応させる辞書
	$dic = array(
			'北海道' => 'hokkai-do',
			'青森県' => 'aomori-ken',
			'岩手県' => 'iwate-ken',
			'宮城県' => 'miyagi-ken',
			'秋田県' => 'akita-ken',
			'山形県' => 'yamagata-ken',
			'福島県' => 'fukushima-ken',
			'茨城県' => 'ibaraki-ken',
			'栃木県' => 'tochigi-ken',
			'群馬県' => 'gunma-ken',
			'埼玉県' => 'saitama-ken',
			'千葉県' => 'chiba-ken',
			'東京都' => 'tokyo-to',
			'神奈川県' => 'kanagawa-ken',
			'新潟県' => 'niigata-ken',
			'富山県' => 'toyama-ken',
			'石川県' => 'ishikawa-ken',
			'福井県' => 'fukui-ken',
			'山梨県' => 'yamanashi-ken',
			'長野県' => 'nagano-ken',
			'岐阜県' => 'gofu-ken',
			'静岡県' => 'shizuoka-ken',
			'愛知県' => 'aichi-ken',
			'三重県' => 'mie-ken',
			'滋賀県' => 'shiga-ken',
			'京都府' => 'kyoto-fu',
			'大阪府' => 'osaka-fu',
			'兵庫県' => 'hyogo-ken',
			'奈良県' => 'nara-ken',
			'和歌山県' => 'wakayama-ken',
			'鳥取県' => 'tottori-ken',
			'島根県' => 'shimane-ken',
			'岡山県' => 'okayama-ken',
			'広島県' => 'hiroshima-ken',
			'山口県' => 'yamaguchi-ken',
			'徳島県' => 'tokushima-ken',
			'香川県' => 'kagawa-ken',
			'愛媛県' => 'ehime-ken',
			'高知県' => 'kochi-ken',
			'福岡県' => 'fukuoka-ken',
			'佐賀県' => 'saga-ken',
			'長崎県' => 'nagasaki-ken',
			'熊本県' => 'kumamoto-ken',
			'大分県' => 'oita-ken',
			'宮崎県' => 'miyazaki-ken',
			'鹿児島県' => 'kagoshima-ken',
			'沖縄県' => 'okinawa-ken',
			);
	if ( isset( $dic[$name]) ) {
    	$basename = $dic[$name];
	} else {
    	$basename = $name;
	}
	return '<img class="img-short-icon" src="'.get_bloginfo('stylesheet_directory').'/images/shortcode/japan_icon/'.$basename.'.png" />';

	unset($dic);
	unset($basename);
}
add_shortcode('japan_icon', 'sc_japan_icon');


/**
 * List with Icon
 */
function sc_arrowlist($atts, $content = null) {
	extract(shortcode_atts(array(
			'color' => '',
	), $atts));
	return '<div class="arrowlist arrowlist'.$color.'">'.do_shortcode($content).'</div>';
}
add_shortcode('arrow_list', 'sc_arrowlist');

function sc_checklist($atts, $content = null) {
	extract(shortcode_atts(array(
			'color' => '',
	), $atts));
	return '<div class="checklist checklist'.$color.'">'.do_shortcode($content).'</div>';
}
add_shortcode('check_list', 'sc_checklist');

function sc_starlist($atts, $content = null) {
	extract(shortcode_atts(array(
			'color' => '',
	), $atts));
	return '<div class="starlist starlist'.$color.'">'.do_shortcode($content).'</div>';
}
add_shortcode('star_list', 'sc_starlist');


/**
 * Dropcap
 */
function sc_dropcap1($atts, $content = null) {
	return '<span class="dropcap1">'.$content.'</span>';
}
add_shortcode('dropcap1', 'sc_dropcap1');

function sc_dropcap2($atts, $content = null) {
	return '<span class="dropcap2">'.$content.'</span>';
}
add_shortcode('dropcap2', 'sc_dropcap2');


/**
 * Highlight
 */
function sc_highlight_dark($atts, $content = null) {
	return '<span class="highlight_dark">'.do_shortcode($content).'</span>';
}
add_shortcode('highlight_dark', 'sc_highlight_dark');

function sc_highlight_light($atts, $content = null) {
	return '<span class="highlight_light">'.do_shortcode($content).'</span>';
}
add_shortcode('highlight_light', 'sc_highlight_light');

function sc_highlight_red($atts, $content = null) {
	return '<span class="highlight_red">'.do_shortcode($content).'</span>';
}
add_shortcode('highlight_red', 'sc_highlight_red');

function sc_highlight_green($atts, $content = null) {
	return '<span class="highlight_green">'.do_shortcode($content).'</span>';
}
add_shortcode('highlight_green', 'sc_highlight_green');

function sc_highlight_blue($atts, $content = null) {
	return '<span class="highlight_blue">'.do_shortcode($content).'</span>';
}
add_shortcode('highlight_blue', 'sc_highlight_blue');

function sc_highlight_yellow($atts, $content = null) {
	return '<span class="highlight_yellow">'.do_shortcode($content).'</span>';
}
add_shortcode('highlight_yellow', 'sc_highlight_yellow');


/**
 * [gist id="ID" file="FILE"]
 */
function gist_shortcode($atts) {
	return sprintf(
		'<script src="https://gist.github.com/%s.js%s"></script>',$atts['id'],$atts['file']?'?file='.$atts['file']:''
	);
}
add_shortcode('gist','gist_shortcode');

function gist_shortcode_filter($content) {
	return preg_replace('/https:\/\/gist.github.com\/([\d]+)[\.js\?]*[\#]*file[=|_]+([\w\.]+)(?![^<]*<\/a>)/i', '[gist id="${1}" file="${2}"]', $content );
}
add_filter( 'the_content', 'gist_shortcode_filter', 9);
?>