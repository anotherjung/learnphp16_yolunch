<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//$this->output->enable_profiler();
		$this->load->model('yo');
		$this->load->library('session');
	}

	public function index() {
		$this->load->view('index');
		$food = $this->yo->seeAllGroups();
		$refer = array('groups' => $food);
		// if($this->session->userdata('logged') == FALSE) {
		// 	$this->load->view('partials/groups', $refer);
		// } else {
		// 	$this->load->view('logged', $refer);
		// }
		$this->load->view('partials/users', $refer);
	}

	public function register() {
		$this->load->model('yo');
		$first = $this->input->post('firstname');
		$last = $this->input->post('lastname');
		$email = $this->input->post('inputEmail');
		$password = $this->input->post('inputPassword');
		$confirm = $this->input->post('confirmPassword');
		$cohort = $this->input->post('cohort');
		$salt = bin2hex(openssl_random_pseudo_bytes(22));
		$encrypted = md5($password. ''. $salt);

		$info = array(
			'firstname' => $first,
			'lastname' => $last,
			'password' => $encrypted,
			'salt' => $salt,
			'email' => $email,
			'cohort' => $cohort
			);

		$this->yo->register($info);
		$refer = array('called' => $info);
		$this->load->view('partials/users', $refer);
	}

	public function login() {
		$this->load->model('yo');
		$email = $this->input->post('inputEmail');
		$password = $this->input->post('inputPassword');

		$data = $this->yo->getUser($email);

		$salt = $data['salt'];
		$encrypted = md5($password.''.$salt);

		if($encrypted == $data['password']) {
			$refer = array(
				'called' => $data);
			$this->session->set_userdata('signed', TRUE);
			$this->load->view('partials/users', $refer);
		} else {
			redirect('/');
		}
	}

	public function lunch() {
		$this->load->model('yo');
		$group['restaurant'] = $this->input->post('restaurant');
		$group['count'] = "1";
		$hour = $this->input->post('hour');
		$min = $this->input->post('min');
		$today = date('Y-m-d');
		$group['time'] = $today . ' ' . $hour . ':' . $min . ':00';
		
		$this->yo->joinGroup($group);
		$food = $this->yo->seeAllGroups();
		$refer = array('groups' => $food);

		$this->load->view('partials/users', $refer);
		
		// if($this->session->userdata('signed') == TRUE) {
		// 	$this->load->view('logged', $refer);
		// } else {
		// 	$this->load->view('partials/groups', $refer);
		// }
	}

	public function goTogether() {
		$id = $this->input->post('id');
		$name = $this->input->post('person');
	}



}

//end of main controller