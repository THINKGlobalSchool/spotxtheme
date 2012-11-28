<?php
/**
 * SpotX Theme Custom Header Logo
 *
 * @package SpotXTheme
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010 - 2012
 * @link http://www.thinkglobalschool.com/
 *
 */

$site_url = elgg_get_site_url();
?>
<!-- 
<h1>
	<a class="elgg-heading-site" href="<?php // echo $site_url; ?>">
		<?php // echo $site_name; ?>
	</a>
</h1>
-->
<a href="<?php echo $site_url; ?>"><img class='spot-logo' src="<?php echo elgg_get_site_url(); ?>mod/spotxtheme/graphics/spotx-logo.png" border="0" alt="Think Spot Logo"></img></a>
