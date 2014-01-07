<?php

class Sales extends MY_Controller {
	function __construct() {
		parent::__construct();
	}

	public function index() {

		$data['contentView'] = 'pages/sales';
		$this -> load -> view('template_v', $data);
	}

	public function customer_sales() {
		$data['contentView'] = 'pages/customer_sales';
		$this -> load -> view('template_v', $data);
	}

	public function client_sales() {
		$data['contentView'] = 'pages/client_sales';
		$this -> load -> view('template_v', $data);
	}

	public function add() {

	}

	public function suspend() {

	}

	public function edit() {

	}

}
