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
 * * group_tools/group_admins 
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
	
	// Extend admin css
	elgg_extend_view('css/admin', 'css/spotxtheme/admin');
	
	// Set up library
	elgg_register_library('elgg:spotxtheme', elgg_get_plugins_path() . 'spotxtheme/lib/spotx.php');
	elgg_load_library('elgg:spotxtheme');
	
	// Hook to replace regular index
	if (!elgg_is_logged_in()) {
		elgg_register_plugin_hook_handler('index','system', 'spotxtheme_index');
	} else {
		$item = new ElggMenuItem('welcome', elgg_echo('spotxtheme:label:welcome'), elgg_get_site_url() . 'welcome');
		elgg_register_menu_item('site', $item);
	}
	
	// Register 'home' page handler
	elgg_register_page_handler('welcome', 'spotxtheme_welcome_page_handler');
	
	// Register ECML views
	elgg_register_plugin_hook_handler('get_views', 'ecml', 'spotxtheme_ecml_views_hook');

	// Override group view for featured groups listing
	elgg_register_plugin_hook_handler('view', 'group/default', 'spotxtheme_welcome_group_view_handler');

	// Ajax whitelist
	elgg_register_ajax_view('spotxtheme/modules/groups');
	elgg_register_ajax_view('spotxtheme/modules/activity');
	elgg_register_ajax_view('spotxtheme/modules/forums');
	elgg_register_ajax_view('spotxtheme/modules/blogs');
}

/**
 * Plugin hook to display custom spotx landing page
 *
 * @param unknown_type $hook
 * @param unknown_type $type
 * @param unknown_type $value
 * @param unknown_type $params
 * @return unknown
 */
function spotxtheme_index($hook, $type, $value, $params) {
	forward('welcome');
}

/**
 * Welcome page handler
 */
function spotxtheme_welcome_page_handler($page) {
	$_SESSION['last_forward_from'] = elgg_get_site_url();
	$title = elgg_echo('spotxtheme:title:welcometo', array(elgg_get_site_entity()->name));

	$params['content'] = elgg_view('spotxtheme/welcome_modules');
	$params['content'] .= elgg_view('spotxtheme/welcome_tabs');

	// Push context
	elgg_push_context('welcome');

	$body = elgg_view_layout('one_column', $params);

	echo elgg_view_page($title, $body);	
	return TRUE;
}

/**
 * Parse spotxtheme views for ECML
 *
 * @param unknown_type $hook
 * @param unknown_type $type
 * @param unknown_type $value
 * @param unknown_type $params
 * @return unknown
 */
function spotxtheme_welcome_group_view_handler($hook, $type, $value, $params) {
	if (get_input('spotx_welcome_list') == 1) {
		return elgg_view('spotxtheme/group', array('entity' => $params['vars']['entity']));
	}
	return $value;
}

/**
 * Parse spotxtheme views for ECML
 *
 * @param unknown_type $hook
 * @param unknown_type $type
 * @param unknown_type $value
 * @param unknown_type $params
 * @return unknown
 */
function spotxtheme_ecml_views_hook($hook, $entity_type, $value, $params) {
	$value['spotxtheme/welcome_modules'] = elgg_echo('spotxmodules');
	return $value;
}