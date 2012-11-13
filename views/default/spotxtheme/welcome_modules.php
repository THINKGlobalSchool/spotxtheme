<?php
/**
 * SpotX Theme Welcome Modules
 *
 * @package SpotXTheme
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010 - 2012
 * @link http://www.thinkglobalschool.com/
 *
 */

$left_title = elgg_get_plugin_setting('module_left_title', 'spotxtheme');
$left_content = elgg_get_plugin_setting('module_left_content', 'spotxtheme');
$left_module = elgg_view_module('featured', $left_title, $left_content, array('class' => 'spotx-welcome-module spotx-welcome-left-module'));

$right_title = elgg_get_plugin_setting('module_right_title', 'spotxtheme');
$right_content = elgg_get_plugin_setting('module_right_content', 'spotxtheme');
$right_module = elgg_view_module('featured', $right_title, $right_content, array('class' => 'spotx-welcome-module spotx-welcome-right-module'));

$content = <<<HTML
	$left_module
	$right_module
HTML;

echo $content;