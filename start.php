<?php
/**
 * SpotX Theme start.php
 *
 * @package SpotXTheme
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010 - 2012
 * @link http://www.thinkglobalschool.com/
 *
 * VIEW OVERRIDES:
 * * List overrides here
 * 
 */

elgg_register_event_handler('init', 'system', 'spotxtheme_init');

function spotxtheme_init() {
	// Register CSS
	$sxt_css = elgg_get_simplecache_url('css', 'spotxtheme/css');
	elgg_register_simplecache_view('css/spotxtheme/css');
	elgg_register_css('elgg.spotxtheme', $sxt_css);
	elgg_load_css('elgg.spotxtheme');
	
	// Register JS
	$sxt_js = elgg_get_simplecache_url('js', 'spotxtheme/spotx');
	elgg_register_simplecache_view('js/spotxtheme/spotx');
	elgg_register_js('elgg.spotxtheme', $sxt_js);
	elgg_load_js('elgg.spotxtheme');
}