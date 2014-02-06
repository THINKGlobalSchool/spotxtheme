<?php
/**
 * SpotX Theme Welcome Tabs
 *
 * @package SpotXTheme
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010 - 2012
 * @link http://www.thinkglobalschool.com/
 *
 */

// Groups Tab
elgg_register_menu_item('spotx-welcome', array(
	'name' => 'spotx_welcome_groups',
	'text' => elgg_echo('spotxtheme:label:featuredgroups'),
	'href' => '#spotx-welcome-featured-groups',
	'priority' => 1,
	'class' => 'spotx-welcome-menu-item',
));

// Activity Tab
elgg_register_menu_item('spotx-welcome', array(
	'name' => 'spotx_welcome_activity',
	'text' => elgg_echo('spotxtheme:label:latestactivity'),
	'href' => '#spotx-welcome-latest-activity',
	'priority' => 2,
	'class' => 'spotx-welcome-menu-item',
));

// Forums Tab
elgg_register_menu_item('spotx-welcome', array(
	'name' => 'spotx_welcome_forums',
	'text' => elgg_echo('spotxtheme:label:activeforums'),
	'href' => '#spotx-welcome-active-forums',
	'priority' => 3,
	'class' => 'spotx-welcome-menu-item',
));

// Blogs Tab
elgg_register_menu_item('spotx-welcome', array(
	'name' => 'spotx_welcome_blogs',
	'text' => elgg_echo('spotxtheme:label:activeblogs'),
	'href' => '#spotx-welcome-active-blogs',
	'priority' => 4,
	'class' => 'spotx-welcome-menu-item',
));

// Get menu
$menu = elgg_view_menu('spotx-welcome', array(
	'sort_by' => 'priority',
	'class' => 'elgg-menu-hz elgg-menu-filter elgg-menu-filter-default'
));

// Groups module	
$groups_module = elgg_view('modules/genericmodule', array(
	'view' => 'spotxtheme/modules/groups',
	'view_vars' => array(),
	'module_id' => 'spotx-welcome-featured-groups',
	'module_class' => 'spotx-welcome-tabs-module spotx-welcome-tabs-selected',
));

// Activity module		
$activity_module = elgg_view('modules/genericmodule', array(
	'view' => 'spotxtheme/modules/activity',
	'view_vars' => array(),
	'module_id' => 'spotx-welcome-latest-activity',
	'module_class' => 'spotx-welcome-tabs-module',
));

// Forums Module		
$forums_module = elgg_view('modules/genericmodule', array(
	'view' => 'spotxtheme/modules/forums',
	'view_vars' => array(),
	'module_id' => 'spotx-welcome-active-forums',
	'module_class' => 'spotx-welcome-tabs-module',
));

// Blogs
$blogs_module = elgg_view('modules/genericmodule', array(
	'view' => 'spotxtheme/modules/blogs',
	'view_vars' => array(),
	'module_id' => 'spotx-welcome-active-blogs',
	'module_class' => 'spotx-welcome-tabs-module',
));

echo <<<CSS
	<style type='text/css'>
		.elgg-menu-extras {
			display: none;
		}
	</style>
CSS;

echo $menu;
echo $groups_module;
echo $activity_module;
echo $forums_module;
echo $blogs_module;