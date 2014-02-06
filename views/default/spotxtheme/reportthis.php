<?php
/**
 * SpotX Theme Report This Sidebar
 *
 * @package SpotXTheme
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010 - 2012
 * @link http://www.thinkglobalschool.com/
 *
 */

$href = "javascript:elgg.forward('reportedcontent/add'";
$href .= "+'?address='+encodeURIComponent(location.href)";
$href .= "+'&title='+encodeURIComponent(document.title));";

echo elgg_view('output/url', array(
	'name' => 'report_this',
	'href' => $href,
	'text' => elgg_view_icon('report-this') . elgg_echo('spotxtheme:reportthis'),
	'class' => 'spotxtheme-report-this',
));