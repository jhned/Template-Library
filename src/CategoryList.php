<?php
namespace CNP\TemplateLibrary;

class CategoryList extends Organism {

	public $separator;

	public function __construct( $data, $separator = ',', $name = 'category-list', $tag = 'p', $attributes = [], $before = '', $prepend = '', $append = '', $after = '' ) {

		parent::__construct( $name, $tag, $attributes, '', $data, $before, $prepend, $append, $after );

		$this->separator = $separator;

		if ( isset( $this->data ) ) {
			$this->content = get_the_category_list( $this->separator, '', $this->data );
		}
	}

	public function get_markup() {

		return parent::get_markup();
	}
}
