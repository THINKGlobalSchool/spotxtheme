<?php
/**
 * SpotX Theme Plugin Settings
 *
 * @package SpotXTheme
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010 - 2012
 * @link http://www.thinkglobalschool.com/
 */

// Left Module Setup
$module_left_title_label = elgg_echo('spotxtheme:label:module_left_title');
$module_left_title_input = elgg_view('input/text', array(
	'name' => 'params[module_left_title]', 
	'value' => $vars['entity']->module_left_title)
);

$module_left_content_label = elgg_echo('spotxtheme:label:module_left_content');
$module_left_content_input = elgg_view('input/longtext', array(
	'name' => 'params[module_left_content]', 
	'value' => $vars['entity']->module_left_content)
);

// Right module
$module_right_title_label = elgg_echo('spotxtheme:label:module_right_title');
$module_right_title_input = elgg_view('input/text', array(
	'name' => 'params[module_right_title]', 
	'value' => $vars['entity']->module_right_title)
);

$module_right_content_label = elgg_echo('spotxtheme:label:module_right_content');
$module_right_content_input = elgg_view('input/longtext', array(
	'name' => 'params[module_right_content]', 
	'value' => $vars['entity']->module_right_content)
);

// Right module
$module_right_alt_title_label = elgg_echo('spotxtheme:label:module_right_alt_title');
$module_right_alt_title_input = elgg_view('input/text', array(
	'name' => 'params[module_right_alt_title]', 
	'value' => $vars['entity']->module_right_alt_title)
);

$module_right_alt_content_label = elgg_echo('spotxtheme:label:module_right_alt_content');
$module_right_alt_content_input = elgg_view('input/longtext', array(
	'name' => 'params[module_right_alt_content]', 
	'value' => $vars['entity']->module_right_alt_content)
);

$content = <<<HTML
	<br />
	<div>
		<label>$module_left_title_label</label><br />
		$module_left_title_input
	</div><br />
	<div>
		<label>$module_left_content_label</label><br />
		$module_left_content_input
	</div><br />
	<div>
		<label>$module_right_title_label</label><br />
		$module_right_title_input
	</div><br />
	<div>
		<label>$module_right_content_label</label><br />
		$module_right_content_input
	</div>
	<div>
		<label>$module_right_alt_title_label</label><br />
		$module_right_alt_title_input
	</div><br />
	<div>
		<label>$module_right_alt_content_label</label><br />
		$module_right_alt_content_input
	</div>
HTML;

echo $content;