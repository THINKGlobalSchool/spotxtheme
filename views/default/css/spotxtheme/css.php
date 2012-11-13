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

/** Override logo-bottom **/
.elgg-main {
	position: relative;
	min-height: 360px;
	padding: 20px 10px 10px 10px;
	background: url(<?php echo elgg_get_site_url(); ?>mod/spotxtheme/graphics/logo-bottom.png) no-repeat !important;
}