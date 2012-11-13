<?php
/**
 * SpotX Theme Groups Tab Module
 *
 * @package SpotXTheme
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010 - 2012
 * @link http://www.thinkglobalschool.com/
 *
 */

$options = array(
	'metadata_name' => 'featured_group',
	'metadata_value' => 'yes',
	'types' => 'group',
	'limit' => 10,
	'full_view' => FALSE
);

// Use custom groups view
set_input('spotx_welcome_list', 1);

$content = elgg_list_entities_from_metadata($options);

if (!$content) {
	$content = "<center><strong>" . elgg_echo('spotxtheme:label:noresults') . "</strong></center>";
}

echo $content;