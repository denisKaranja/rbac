<?php

class Account extends CI_Controller
{
    private $data;

    function __construct()
    {
      parent::__construct();


    }

    /** 
    * default view loader 
    * @access public
    */ 
     function __load_view($data)
    {
      return $this->load->view("inc/template", $data);
    }


    
    # check username and password privs
    /** 
    * @access public
    */ 
     function validate()
    {
      $username = $this->input->post("username");
      $password = $this->input->post("password");

      $hashed_password = sha1($password);

      $valid_user = $this->rbac_model->ValidateUser($username, $password);

      if($valid_user)
      {
        # three values are returned
        # 1.incorrect credentials, 2.not authorized, 3. Succsessful login

        switch ($valid_user) {
          case 1:
            $data = array(
                "account" => "login",
                "login_message" => "Incorrect details",
                "class" => "alert alter-danger col-md-offset-3"
              );

            $this->__load_view($data);

            break;
          
          default:
            # code...
            break;
        }
      }
    }
}