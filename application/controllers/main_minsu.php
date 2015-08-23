<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()	{
		parent::__construct();
		//$this->output->enable_profiler();
		$this->load->model('yo');
		$this->load->model('restaurant');
		$this->load->library('session');
	}//ends 

	public function index()	{
		$this->load->model('Restaurant');
		$this->load->model('Yo');
		$restaurants = $this->Restaurant->get_all_restaurants();
		$users = $this->Yo->seeAllUsers();
		$groups = $this->Yo->seeAllGroups();
		$data = array('restaurants' => $restaurants, 'users' => $users, 'groups' => $groups);
		$this->load->view('vtop');
		
		//$this->load->view('vlogin');
		//$this->load->view('vstart');
		$this->load->view('vpushy', $data);
		//$this->load->view('vbottom');
		$this->load->view('vmaps', $data);
		//$this->load->view('vgroup');
		$this->load->view('vbottom');
	}//ends index

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
	}//ends method reg

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
		}//ends if 
		else {
			redirect('/');
		}//ends else
	}//end method login

	public function create_group() {
		$this->load->model('Restaurant');
		$this->load->model('yo');
		$restaurant = $this->Restaurant->get_restaurant_by_id($this->input->post('restaurant'));
		$group['restaurant_id'] = $this->input->post('restaurant');
		$group['restaurant_name'] = $restaurant['name'];
		$group['count'] = "1";
		$hour = $this->input->post('hour');
		$min = $this->input->post('min');
		$today = date('Y-m-d');
		$group['time'] = $today . ' ' . $hour . ':' . $min . ':00';
		
		$this->yo->addGroup($group);
		$food = $this->yo->seeAllGroups();
		$refer = array('groups' => $food);

		redirect('/');
		//$this->load->view('partials/users', $refer);
		
	}//ends method lunch

	public function join_group() {
		$this->load->model('yo');
		$group_id = $this->input->post('group_id');
		$user_id = $this->input->post('user_id');
		$this->yo->update_count($group_id);
		$this->yo->user_join_group($user_id, $group_id);

		redirect('/');
		//$this->load->view('partials/users', $refer);
		
	}//ends method lunch

	public function add_restaurants() {
		$this->load->model('Restaurant');
		$coords = $this->getCoordinates($this->input->post('address'));
		$distance_duration = $this->calculate_distance_duration($this->input->post('address'));
		$data = array('name' => $this->input->post('name'),
					  'address' => $this->input->post('address'),
					  'lat' => $coords[0], 
					  'long' => $coords[1],
					  'place_id' => $coords[2],
					  'distance' => $distance_duration['distance'], 
					  'duration' => $distance_duration['duration'],
					  'cuisine' => $this->input->post('cuisine'));
		$this->Restaurant->add_restaurant($data);
		redirect('/');
	}//end method add_rest

	public function getCoordinates($address) {
	    $address = urlencode($address);
	    $url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=" . $address;
	    $response = file_get_contents($url);
	    $json = json_decode($response,true);
	 
	    $lat = $json['results'][0]['geometry']['location']['lat'];
	    $lng = $json['results'][0]['geometry']['location']['lng'];
	 	$place_id = $json['results'][0]['place_id'];
	    return array($lat, $lng, $place_id);
	}//ends method getcoor

	public function calculate_distance_duration($address) {
		$from = "1980 Zanker Rd, San Jose, CA";
		$to = $address;

		$from = urlencode($from);
		$to = urlencode($to);

		$data = file_get_contents("http://maps.googleapis.com/maps/api/distancematrix/json?origins=$from&destinations=$to&language=en-EN&sensor=false");
		$data = json_decode($data);

		$time = 0;
		$distance = 0;

		foreach($data->rows[0]->elements as $road) {
		    $time += $road->duration->value;
		    $distance += $road->distance->value;
		}

		$distance = $distance / 1.6 / 1000;

		return array('distance' => $distance, 'duration' => $time);
		}//ends 
	


}//end of main controller