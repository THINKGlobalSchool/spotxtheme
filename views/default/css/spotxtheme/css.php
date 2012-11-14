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
	width: 49%;
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
.elgg-main {
	position: relative;
	min-height: 360px;
	padding: 20px 10px 10px 10px;
	background: url(<?php echo elgg_get_site_url(); ?>mod/spotxtheme/graphics/logo-bottom.png) no-repeat !important;
}


.elgg-home-right{
	background:none !important;
}

.elgg-right-sidebar {
	position: relative;
	padding: 20px 10px 10px 10px;
	float: left;
	width: 400px;
	margin: 0 0 10px 0;
	background:url("<?php echo elgg_get_site_url(); ?>mod/spotxtheme/graphics/logo-bottom.png") no-repeat;
}

/* Don't override admin sidebar */
.elgg-page-admin .elgg-main {
	background: #FFF !important;
	border: 1px solid #ccc;
	padding: 20px;
	position: relative;
	min-height: 400px;
}

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