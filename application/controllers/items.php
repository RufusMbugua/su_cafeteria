<?php

class Items extends CI_Controller {

	public function index() {

		$data['contentView'] = 'pages/items';
		$data['item_list'] = $this -> item_list();
		$data['stock_table'] = $this -> stock_table();
		$this -> load -> view('template_v', $data);
	}

	public function add() {
		if ($_POST) {
			//Validation Rules
			$this -> form_validation -> set_error_delimiters('<div class="error"><i class="fa fa-pencil"></i>', '</div>');
			$this -> form_validation -> set_rules('item_name', 'Item Name', 'required|is_unique[items.item_name]');
			$this -> form_validation -> set_rules('item_description', 'Item Description', 'required');
			$this -> form_validation -> set_rules('item_unit_cost', 'Item Price', 'required|integer|greater_than[0]');

			if ($this -> form_validation -> run() == FALSE) {
				$this -> index();
			} else {
				$item_name = $this -> input -> post('item_name');
				$item_description = $this -> input -> post('item_description');
				$item_unit_cost = $this -> input -> post('item_unit_cost');

				$data['item_name'] = $item_name;
				$data['item_description'] = $item_description;
				$data['item_unit_cost'] = $item_unit_cost;
				$this -> db -> insert('items', $data);
				redirect('items');
			}

		}
	}

	public function suspend() {

	}

	public function edit() {

	}

	public function stock_in() {
		if ($_POST) {
			$this -> db -> where('item_name', $this -> input -> post('item_sname'));
			$items = $this -> db -> get('items');

			foreach ($items->result() as $item) {
				$data['item_qty_in_stock'] = $this -> input -> post('item_squantity') + $item -> item_qty_in_stock;

				$this -> db -> where('item_name', $item -> item_name);
				$this -> db -> update('items', $data);
					redirect('items');
			}
		}
	}

	public function stock_out() {

	}

	public function item_list() {
		//initialize
		$options = "<option>Please Choose Item</option>";
		$this -> db -> select('item_name');
		$items = $this -> db -> get('items');
		foreach ($items->result() as $item) {
			$options .= "<option>" . $item -> item_name . "</option>";
		}
		return $options;
	}

	public function stock_table() {
		//Table Template
		$tmpl = array('table_open' => '<table border="0" cellpadding="4" cellspacing="0" class="dataTable table table-condensed table-striped table-bordered table-hover">', 'heading_row_start' => '<tr>', 'heading_row_end' => '</tr>', 'heading_cell_start' => '<th>', 'heading_cell_end' => '</th>', 'row_start' => '<tr>', 'row_end' => '</tr>', 'cell_start' => '<td>', 'cell_end' => '</td>', 'row_alt_start' => '<tr>', 'row_alt_end' => '</tr>', 'cell_alt_start' => '<td>', 'cell_alt_end' => '</td>', 'table_close' => '</table>');

		$this -> table -> set_template($tmpl);

		$items = $this -> db -> get('items');
		//set table headers
		$this -> table -> set_heading('Item Name', 'Item Quantity', 'Action');
		foreach ($items->result() as $item) {
			$item_action = "<a class='btn-xs btn-primary edit' href='" . base_url() . "items/edit/" . $item -> item_code . "'>Edit</a><a class='btn-xs btn-danger suspend' href='" . base_url() . "items/suspend/" . $item -> item_code . "'>Suspend</a>";
			$this -> table -> add_row($item -> item_name, $item -> item_qty_in_stock, $item_action);
		}
		$table = $this -> table -> generate();
		return $table;
	}

	public function popular() {
		$this -> load -> view('charts/chart_v');
	}

}
