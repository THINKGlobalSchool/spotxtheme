<?php
/**
 * SpotX Theme Activity Tab Module
 *
 * @package SpotXTheme
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010 - 2012
 * @link http://www.thinkglobalschool.com/
 *
 */

$content = elgg_list_river(array(
	'limit' => 10,
	'position' => 'both',
));

if (!$content) {
	$content = "<center><strong>" . elgg_echo('spotxtheme:label:noresults') . "</strong></center>";
}

echo $content;