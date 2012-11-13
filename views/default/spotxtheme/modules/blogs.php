<?php
/**
 * SpotX Theme Blogs Tab Module
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
	'subtype' => 'blog',
	'full_view' => FALSE,
	'limit' => 10,
	'pagination' => FALSE,
	'annotation_names' => array('generic_comment', 'likes'),
);

// Use custom getter for ordering blogs by comments and likes
$content = elgg_list_entities($options, 'spotx_get_entities_order_by_annotation_count');

if (!$content) {
	$content = "<center><strong>" . elgg_echo('spotxtheme:label:noresults') . "</strong></center>";
}

echo $content;