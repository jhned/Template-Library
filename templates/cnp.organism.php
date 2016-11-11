<?php
namespace CNP;

abstract class Organism {

	public $name;
	public $tag;
	public $attributes;
	public $before;
	public $prepend;
	public $content;
	public $append;
	public $after;

	public function __construct( $name = '', $tag = 'div', $attributes = [], $content = '', $data = null, $before = '', $prepend = '', $append = '', $after = '' ) {

		$this->name       = $name;
		$this->tag        = $tag;
		$this->attributes = $attributes;
		$this->content    = $content;
		$this->data       = $data;
		$this->before     = $before;
		$this->prepend    = $prepend;
		$this->append     = $append;
		$this->after      = $after;
	}

	public function get_markup() {

		return (array) $this;
	}

	public function get_attributes() {

		$filtered_attributes = apply_filters( $this->class_root() . '_attributes_filter', $this->attributes );

		$out = $filtered_attributes;
		if ( is_array( $filtered_attributes ) ) {
			foreach ( $filtered_attributes as $key => $value ) {
				$attr_value = implode( ' ', $value );
				$out .= sprintf( '%s="%s"', $key, $attr_value );
			}
		}

		return $out;
	}

	public function get_content() {

		return apply_filters( $this->class_root() . '_content_filter', $this->prepend . $this->content . $this->append );
	}

	public function class_name() {

		return strtolower( get_class( $this ) );
	}

	public function class_root() {

		return sprintf( '%s_%s_', $this->class_name(), $this->name );
	}
}
