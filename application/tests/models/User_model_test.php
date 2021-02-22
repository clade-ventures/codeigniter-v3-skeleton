<?php

class User_model_test extends TestCase
{
	public function setUp()
	{
		$this->resetInstance();
		$this->CI->load->model('User_model');
	}

	public function test_login()
	{
		$user = $this->CI->User_model->login('user@clade.com', '123');
		$expectedEmail = 'user@clade.com';
		$this->assertEquals($expectedEmail, $user->email);
	}
}
