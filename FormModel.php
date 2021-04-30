<?php

class FormModel
{
    public $username;
    public $password;
    public $email;
    
    //Username
    function set_username($username)
    {
      $this->$username = $username;
    }

    //Password
    function set_password($password)
    {
      $this->$password = $password;
    }
    
    //Email
    function set_email($email)
    {
      $this->$email = $email;
    }

    function get_username()
    {
      return $this->username;
    }

    function get_password()
    {
      return $this->password;
    }

    function get_email()
    {
      return $this->email;
    }
}







?>