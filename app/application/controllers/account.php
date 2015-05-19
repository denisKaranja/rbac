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


    /**
    * @access public
    */
    function index()
    {
      
      $this->load->view("login");
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
        # 404.incorrect credentials, 401.not authorized, 200. Succsessful login

        switch ($valid_user) {
          case 404:
            $data = array(
                "account" => "login",
                "login_message" => "Incorrect details",
                "class" => "alert alter-danger col-md-offset-3"
              );

            $this->load->view("login");

            break;
            # continue with team

            case 201:
              $this->load->view("add_post");
              break;

            case 202:
              $this->load->view("delete_post");
              break;

            case 203:
              $this->load->view("search_post");
              break;
          
          default:
            # code...
            break;
        }
      }
    }



    /**
    * @access public
    */
    function logout()
    {

    }


}