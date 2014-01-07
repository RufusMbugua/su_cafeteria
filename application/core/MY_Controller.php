<?php

class MY_Controller extends CI_Controller {
	var $menu_list, $item_list;
	function __construct() {
		parent::__construct();
		$this -> menu_list();
		$this -> item_list();
	}

	public function menu_list() {
		//Table Template
		$tmpl = array('table_open' => '<table border="0" cellpadding="4" cellspacing="0" class="table table-condensed table-striped table-bordered table-hover">', 'heading_row_start' => '<tr>', 'heading_row_end' => '</tr>', 'heading_cell_start' => '<th>', 'heading_cell_end' => '</th>', 'row_start' => '<tr>', 'row_end' => '</tr>', 'cell_start' => '<td>', 'cell_end' => '</td>', 'row_alt_start' => '<tr>', 'row_alt_end' => '</tr>', 'cell_alt_start' => '<td>', 'cell_alt_end' => '</td>', 'table_close' => '</table>');

		$this -> table -> set_template($tmpl);

		$menu = $this -> db -> get('menu');
		//set table headers
		$this -> table -> set_heading('Proteins', 'Starch', 'Vegetables');
		foreach ($menu->result() as $item) {
			$item_action = "<a class='btn-xs btn-primary edit' href='" . base_url() . "menu/edit/" . $item -> item_code . "'>Edit</a><a class='btn-xs btn-danger suspend' href='" . base_url() . "menu/remove/" . $item -> item_code . "'>Suspend</a>";
			$this -> table -> add_row($item -> item_name, $item -> item_qty_in_stock, $item_action);
		}
		$this -> menu_list = $this -> table -> generate();
		return $this -> menu_list;
	}

	public function item_list() {
		//initialize
		$options = "<option>Please Choose Item</option>";
		$this -> db -> select('item_name');
		$items = $this -> db -> get('items');
		foreach ($items->result() as $item) {
			$options .= "<option>" . $item -> item_name . "</option>";
		}
		$this -> item_list = $options;
		return $this -> item_list;
	}

}
