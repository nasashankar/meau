<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Model extends CI_Model {

	public function insert_record($data)
	{
		return $this->db->insert('register',$data);

	}


    public function userExist($email,$password)
  {
    $checkUser = $this->db->where(['email'=>$email, 'password'=>$password])->get('register');

    if($checkUser->num_rows() > 0)
    {
      return $checkUser->row();
    }

  }

	
}
 