<?php

namespace ExperienceManager\Ecommerce\Elementor\Widgets;

/**
 * Elementor oEmbed Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Frequently_Purchased_Product_Widget extends Product_Widget {

	public function __construct($data = array(), $args = null) {
		parent::__construct($data, $args);
	}

	public function get_name() {
		return 'exm_widget_recently_viewed_products';
	}

	public function get_title() {
		return __('Recently Viewed Products', 'plugin-name');
	}
	
	public function get_exm_type () {
		return "frequently-purchased-products";
	}
}