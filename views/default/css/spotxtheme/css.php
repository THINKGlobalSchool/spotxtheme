<?php
/**
 * SpotX Theme CSS
 *
 * @package SpotXTheme
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010 - 2012
 * @link http://www.thinkglobalschool.com/
 *
 */

/** Conditional CSS **/
$group_tools_active = elgg_is_active_plugin('group_tools');

if ($group_tools_active) {
	echo <<<CSS
.groups-stats {
	display: none;
}
CSS;
}

?>

.spotx-welcome-module {
	width: 48%;
}

.spotx-welcome-left-module {
	float: left;
}

.spotx-welcome-right-module {
	float: right;
}

.spotx-welcome-tabs-module {
	display: none;
}

.spotx-welcome-tabs-selected {
	display: block;
}

/** Override logo **/

/** Featured Groups **/
#spotx-welcome-featured-groups .elgg-list {
	border-top: 0;
}

#spotx-welcome-featured-groups .elgg-list li {
	padding-top: 4px;
	padding-bottom: 4px;
}

#spotx-welcome-featured-groups .elgg-image-block .elgg-body {
	margin-top: 2px;
}

#spotx-welcome-featured-groups .elgg-image-block .elgg-body h3 {
	margin-top: 1px;
	font-size: 1.4em;
}

/** Report this link **/
.spotxtheme-report-this {
	padding: 0 2px 0 0;
	bottom: 3px;
	font-size: 0.9em;
}

.spotxtheme-report-this span.elgg-icon-report-this {
	background-position: center center;
	background-color: #ffffff;
    border-radius: 10px 10px 10px 10px;
	-moz-border-radius: 10px 10px 10px 10px;
	-webkit-border-radius: 10px 10px 10px 10px;
    display: inline-block;
    height: 16px;
    padding: 3px;
    top: 6px;
	height: 14px;
    width: 14px;
	margin-right: 4px;
	border: 1px solid #91131E;
}