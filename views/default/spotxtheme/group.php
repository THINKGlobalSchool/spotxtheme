<?php
/**
 * SpotX Theme Custom Group Custom Listing
 *
 * @package SpotXTheme
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010 - 2012
 * @link http://www.thinkglobalschool.com/
 *
 */

$group = $vars['entity'];

$icon = elgg_view_entity_icon($group, 'medium');

$metadata = elgg_view_menu('entity', array(
	'entity' => $group,
	'handler' => 'groups',
	'sort_by' => 'priority',
	'class' => 'elgg-menu-hz',
));

// brief view
$params = array(
	'entity' => $group,
	'metadata' => $metadata,
	'subtitle' => $group->briefdescription,
	'content' => $group->description,
);
$params = $params + $vars;
$list_body = elgg_view('group/elements/summary', $params);

echo elgg_view_image_block($icon, $list_body, $vars);