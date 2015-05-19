<?php

class Rbac_model extends CI_Model
{
	/**
	* @access public
	*/
	function ValidateUser($username, $password)
	{
		$data_where = array(
				"username" => $username,
				"password" => $password
			);

		$query = $this->db->get_where("users", $data_where);

		if($query->num_rows() == 1)
		{
			#	valid user

			$privilege = $this->GetUserPrivilege($username);

			switch ($privilege) {
					case 'post_add':
						return 201;

					case 'post_delete':
						return 202;

					case 'post_search':
						return 203;

					default:
						break;
				}	

		}
		else
		{
			return 404;
		}
	}

	/**
	* @access public
	*	@param String $username username
	*	@param String $passwod user password
	*	@return Int 404. User not found, 401. Unauthorised, 200. Sucessful
	*/
	function GetUserPrivilege($username)
	{
		$where_data = array(
				"username" => $username
			);

		$this->db->select("privilege");

		$user_privilege = $this->db->get_where("users", $where_data);

		foreach($user_privilege->result() as $our_key)
		{
			$privilege_value = $our_key->privilege;
		}

		return $privilege_value;
	}

	/**
	* @access public
	*/
	function GetUserRole($username, $password)
	{
		
	}


}