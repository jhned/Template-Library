<?php

namespace CNP\TemplateLibrary;

/**
 * Class Menu
 *
 * @package CNP\TemplateLibrary
 *
 * @link    https://developer.wordpress.org/reference/functions/wp_parse_args/
 * @link    https://developer.wordpress.org/reference/functions/wp_nav_menu/
 */
class Menu extends Organism {

	/**
	 * Menu constructor.
	 *
	 * @param string $name       Organism name.
	 * @param array  $data       Menu args for wp_nav_menu.
	 * @param array  $attributes Extra attributes for this element.
	 */
	public function __construct( $name = 'menu', array $data, $attributes = [] ) {

		parent::__construct( $name, $data, '', 'div', $attributes );

		$menu_defaults = [
			'echo' => false,
		];
		$menu_vars     = wp_parse_args( $menu_defaults, $this->data );

		$this->data = $menu_vars;
	}

	public function set_content() {
		$this->content = wp_nav_menu( $this->data );
	}
}
