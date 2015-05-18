<?php

class Rbac_model extends CI_Model
{
	/**
	* @access public
	*/
	function ValidateUser($username, $password)
	{

	}

	/**
	* @access public
	*	@param String $username username
	*	@param String $passwod user password
	*	@return Int 404. User not found, 401. Unauthorised, 200. Sucessful
	*/
	function GetUserPrivilege($username, $password)
	{
		
	}

	/**
	* @access public
	*/
	function GetUserRole($username, $password)
	{
		
	}


}