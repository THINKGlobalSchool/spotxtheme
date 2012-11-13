<?php
/**
 * SpotX Theme Forums Tab Module
 *
 * @package SpotXTheme
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010 - 2012
 * @link http://www.thinkglobalschool.com/
 *
 */

$options = array(
	'type' => 'object',
	'subtype' => 'forum',
	'limit' => 10,
	'full_view' => FALSE,
	'pagination' => FALSE,
	'entity_subtypes' => array('forum_topic', 'forum_reply'),
);

// Use custom getter for ordering forums by number of child topics/replies
$content = elgg_list_entities($options, 'spotx_get_entities_order_by_child_entity_count');

if (!$content) {
	$content = "<center><strong>" . elgg_echo('spotxtheme:label:noresults') . "</strong></center>";
}

echo $content;