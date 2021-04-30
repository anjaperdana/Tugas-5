<?php

class Indek_model extends CI_Model
{
	public function get_data()
	{
		$cars = array(
			array('Volvo', 22, 18, '81%')
			, array('BMW', 15, 13, '86%')
			, array('saab', 5, 2, '40%')
			, array('Land Rover', 17, 15, '88%')
			, array('Honda', 6, 3, '50%')
		);

		return $cars;
	}
}