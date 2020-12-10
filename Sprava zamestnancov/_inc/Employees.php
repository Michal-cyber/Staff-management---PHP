<?php
class Employees {

	protected $employees = [];
	protected $data = [];

	public function getEmployyes()
	{
		return $this->employees;
	}

	public function addEmployee( Employee $employee )
	{
		array_push( $this->employees, $employee );
	}

	public function getXml() {
		return $this->data;
	}

	public function addXml( $createXml )
	{
		array_push( $this->data, $createXml );
	}

}