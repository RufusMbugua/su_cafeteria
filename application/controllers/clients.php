<?php

class Clients extends MY_Controller {
	function __construct() {
		parent::__construct();
	}

	public function index() {

		$data['contentView'] = 'pages/clients';
		$this -> load -> view('template_v', $data);
	}

	public function add() {
		if ($_POST) {
			//Validation Rules
			$this -> form_validation -> set_error_delimiters('<div class="error"><i class="fa fa-pencil"></i>', '</div>');
			$this -> form_validation -> set_rules('client_fname', 'First Name', 'required|alpha');
			$this -> form_validation -> set_rules('client_lname', 'Last Name', 'required|alpha');
			$this -> form_validation -> set_rules('client_email', 'Email', 'required|is_unique[clients.client_email]|valid_email');
			$this -> form_validation -> set_rules('client_phone', 'Phone Number', 'required|numeric|is_unique[clients.client_phone]|exact_length[10]');
			$this -> form_validation -> set_rules('client_address', 'Address', 'required');
			if ($this -> form_validation -> run() == FALSE) {
				$this -> index();
			} else {
				$client_fname = $this -> input -> post('client_fname');
				$client_lname = $this -> input -> post('client_lname');
				$client_email = $this -> input -> post('client_email');
				$client_phone = $this -> input -> post('client_phone');
				$client_address = $this -> input -> post('client_address');
				

				$data['client_fname'] = $client_fname;
				$data['client_lname'] = $client_lname;
				$data['client_email'] = $client_email;
				$data['client_phone'] = $client_phone;
				$data['client_address'] = $client_address;
				$data['group_alias'] = 'm';
				$this -> db -> insert('clients', $data);
				redirect('clients');
			}

		}
	}

	public function suspend() {

	}

	public function edit() {

	}

}
