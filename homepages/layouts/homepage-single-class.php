<?php

class HomepageSingle extends Homepage {
	var $name = 'Big story, full-width image';
	var $type = 'single';
	var $description = 'A single story with full-width image treatment. Includes a headline and excerpt.';

	function __construct($options=array()) {
		$defaults = array(
			'template' => get_template_directory() . '/homepages/templates/full-width-image.php',
			'assets' => array(
				array('homepage-single', get_template_directory_uri() . '/homepages/css/single.css', array()),
				array('homepage-single', get_template_directory_uri() . '/homepages/js/single.js', array('jquery'))
			)
		);
		$options = array_merge($defaults, $options);
		$this->load($options);
	}

	public function viewToggle() {
		return homepage_view_toggle();
	}

	public function bigStory() {
		return homepage_big_story_headline();
	}
}