<?php

/**
 * 
 */
class User_model extends CI_Model
{
	
	function create($formArray)
	{
		$this->db->insert('users', $formArray);//form array to save INSERT INTO USER(name, )
		
	}

	function all(){
		return $users = $this->db->get('users') -> result_array(); //select all from users
	}

	//fetch the single user

	function getUser($id){
		$this->db->where('id', $id);
		return $user = $this->db->get('users')->row_array(); // select * from users where user_id = ?
	}

	function updateUser($id, $formArray){
		$this->db->where('id', $id);
		$this->db->update('users', $formArray); //Uddate users SET name = ?, email = ? where user_id = ?
	}


	function deleteUser($id){
		$this->db->where('id', $id);
		$this->db->delete('users'); //DELETE FROM users Where id equal to id = ?
	}


}



?>