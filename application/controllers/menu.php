<?php

class Menu extends MY_Controller {

	function __construct() {
		parent::__construct();
	}

	/**
	 * Default Function
	 */
	public function index() {
		$data['contentView'] = 'pages/menu';
		$data['menu_list'] = $this -> menu_list();
		$this -> load -> view('template_v', $data);
	}

	/**
	 * Load Current Menu
	 */
	public function loadMenu() {
	
	}

	/**
	 * Add Item to Menu
	 */
	public function add() {

	}

	/**
	 * Remove Item from Menu
	 */
	public function remove() {

	}

	/**
	 * Edit Item in Menu
	 */
	public function edit() {

	}

}
