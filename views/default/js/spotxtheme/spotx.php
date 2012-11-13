<?php
/**
 * SpotX Theme JS
 *
 * @package SpotXTheme
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010 - 2012
 * @link http://www.thinkglobalschool.com/
 *
 */
?>
//<script>
elgg.provide('elgg.spotxtheme');

// Init
elgg.spotxtheme.init = function() {
	// Delegate click handler for welcome tabs click
	$(document).delegate('.spotx-welcome-menu-item', 'click', elgg.spotxtheme.welcomeTabClick);
}

// Click handler for welcome tab click
elgg.spotxtheme.welcomeTabClick = function(event) {
	$('.spotx-welcome-menu-item').parent().removeClass('elgg-state-selected');
	$(this).parent().addClass('elgg-state-selected');
	$('.spotx-welcome-tabs-module').hide();	
	$($(this).attr('href')).show();
	event.preventDefault();
}

elgg.register_hook_handler('init', 'system', elgg.spotxtheme.init);