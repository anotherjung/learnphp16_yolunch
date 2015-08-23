<?php

class Yo extends CI_Model {

	function register($info) {
		$query = "insert into users (firstname, lastname, email, password, salt, cohort) values (?,?,?,?,?,?)";
		$values = array($info['firstname'], $info['lastname'], $info['email'], $info['password'], $info['salt'], $info['cohort']);
		return $this->db->query($query, $values);
	}

	function getUser($id) {
		$query = "select * from users where id = ?";
		return $this->db->query($query, $id)->row_array();
	}

	function seeAllUsers() {
		$query = "SELECT * FROM users ORDER BY id desc";
		return $this->db->query($query)->result_array();
	}

	function addGroup($group) {
		$query = "insert into groups (restaurant_id, restaurant_name, driver_count, non_driver_count, leaveTime) values (?, ?, ?, ?, ?)";
		$values = array($group['restaurant_id'], $group['restaurant_name'], $group['driver_count'], $group['non_driver_count'], $group['time']);
		return $this->db->query($query, $values);
	}

	function seeAllGroups() {
		$query = "select * from groups order by id desc";
		return $this->db->query($query)->result_array();
	}

	function find_group_by_id($id) {
		$query = "SELECT * FROM groups WHERE id = ?";
		return $this->db->query($query, $id)->row_array();
	}

	function update_driver_count($group_id) {
		$original_count = $this->find_group_by_id($group_id)['driver_count'];
		$query = "UPDATE groups SET driver_count = ? WHERE id = ?";
		$this->db->query($query, array($original_count + 1, $group_id));
	}

	function update_non_driver_count($group_id) {
		$original_count = $this->find_group_by_id($group_id)['non_driver_count'];
		$query = "UPDATE groups SET non_driver_count = ? WHERE id = ?";
		$this->db->query($query, array($original_count + 1, $group_id));
	}

	function user_join_group($user_id, $group_id) {
		$user = $this->getUser($user_id);
		if($user['can_drive'] == 'yes') {
			$this->update_driver_count($group_id);
		}
		else {
			$this->update_non_driver_count($group_id);
		}
		$query = "UPDATE users SET group_id = ? WHERE id = ?";
		$this->db->query($query, array($group_id, $user_id));
	}

	function add_review($review) {
		$query = "INSERT INTO reviews (review, created_at, users_id, restaurants_id, user_name) values (?, NOW(), ?, ?, ?)";
		$value = array($review['review'], $review['user_id'], $review['restaurant_id'], $review['user_name']);
		$this->db->query($query, $value);
	}

	function seeAllReviews() {
		$query = "select * from reviews order by id desc";
		return $this->db->query($query)->result_array();
	}

		function get_userbygroup_id($group_id) {
		return $this->db->query("select * from users where group_id = ?", $group_id)->result_array();
	}
}


?>