<?php
/**
 * SpotX Theme Helper Library
 *
 * @package SpotXTheme
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010 - 2012
 * @link http://www.thinkglobalschool.com/
 * 
 */

/**
 * Get entities sorted by annotation count
 * 
 * @todo This is only here because of this bug: http://trac.elgg.org/ticket/4393
 * 
 * @param array  $options Options array (same as elgg_get_* options)
 *
 *                        Other options: 
 *                            entity_subtype                -> this is the subtype to count (optional)
 *                            annotation_name(s)            -> Name (type) of annotation, ie: generic_comment
 * @return array
 */
function spotx_get_entities_order_by_annotation_count($options = array()) {
	// Make sure we have an annotation_name
	if (!$options['annotation_names']) {
		return FALSE;
	}

	$annotation_names = $options['annotation_names'];

	if (is_array($annotation_names)) {
		$annotation_names_sql = " IN (";
		foreach ($annotation_names as $idx => $name) {
			if ($idx != 0) {
				$annotation_names_sql .= ',';
			}
			$annotation_names_sql .= "'$name'";
		}
		$annotation_names_sql .= ")";
	} else {
		$annotation_names_sql = "= '$annotation_names'";
	}

	$defaults = array(
		'type' => 'object',
		'limit' => get_input('limit'),
		'offset' => get_input('offset'),
	);

	$options = array_merge($defaults, $options);

	$dbprefix = elgg_get_config('dbprefix');

	if ($options['annotation_value_where_sql']) {
		$annotation_value_where_sql = $options['annotation_value_where_sql'];
	}

	$options['selects'][] = "(SELECT COUNT(*) FROM {$dbprefix}annotations a_table 
							  JOIN {$dbprefix}metastrings n on a_table.name_id = n.id
							  JOIN {$dbprefix}metastrings v on a_table.value_id = v.id
							  JOIN {$dbprefix}entities es on a_table.entity_guid = es.guid 
							  WHERE a_table.entity_guid = e.guid AND n.string {$annotation_names_sql}) as a_count";

	$options['order_by'] = "a_count DESC";
	$options['group_by'] = "e.guid HAVING a_count >= 1";

	$users = elgg_get_entities($options);

	return $users;
}

/**
 * Get entities ordered by the amount of child entities they are the container for
 * 
 * @param array  $options Options array (same as elgg_get_* options)
 *
 *                        Other options: 
 *                            entity_subtypes               -> these are the subtypes to limit to
 * 
 * @return array
 */
function spotx_get_entities_order_by_child_entity_count($options = array()) {
	$defaults = array(
		'type' => 'object',
		'limit' => get_input('limit'),
		'offset' => get_input('offset'),
	);
	
	if ($options['entity_subtypes']) {
		$entity_subtype_where_sql = elgg_get_entity_type_subtype_where_sql('eaas_table', array('object'),
			$options['entity_subtypes'], null);
		$entity_subtype_where_sql = "AND $entity_subtype_where_sql";
	}

	$options = array_merge($defaults, $options);

	$dbprefix = elgg_get_config('dbprefix');


	$options['selects'][] = "(SELECT COUNT(*) FROM {$dbprefix}entities eaas_table 
							  WHERE eaas_table.container_guid = e.guid {$entity_subtype_where_sql}) as e_count";

	$options['order_by'] = "e_count DESC";
	$options['group_by'] = "e.guid HAVING e_count >= 1";

	$users = elgg_get_entities($options);

	return $users;
}
