<?php

class User_model extends CI_Model {

	public $name;
	public $email;
	public $password;

	public function login($email, $password) {
		$this->email    = $email;
		$this->password = $password;

		if (
			$this->email == 'user@clade.com'
			&& $this->password == '123'
		) {
			$this->name		= "Didik Mulyadi";
			return $this;
		} else {
			return null;
		}
	}

}
