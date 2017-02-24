<?php
namespace CNP\TemplateLibrary;

/**
 * Class WPList
 * @package CNP\TemplateLibrary
 */
class WPList extends Organism {

	public $list_vars;

	/**
	 * WPList constructor.
	 *
	 * @param array $list_args Required. List args used for wp_list_pages and wp_list_categories function calls.
	 * @param string $name
	 * @param string $tag
	 * @param array $attributes
	 * @param string $before
	 * @param string $prepend
	 * @param string $append
	 * @param string $after
	 */
	public function __construct( $name = 'wp-list', $list_args, $tag = 'ul', array $attributes = [], $before = '', $prepend = '', $append = '', $after = '' ) {

		parent::__construct( $name, $data = null, $content = '', $tag, $attributes, $structure = [], $parent_name = '', $separator = '__', $before, $prepend, $append, $after );
	}

	/**
	 * @return string
	 */
	public function get_markup() {

		return parent::get_markup();
	}
}
