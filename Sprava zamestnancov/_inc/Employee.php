<?php

class Employee {

    protected $first_name;
    protected $last_name;
    protected $gender;
    protected $age;
	protected $email;
	protected $avatar = 0;

    public function __construct($first_name = 0, $last_name = 0, $gender = 0, $age = 0, $email = 0, $avatar = 0) 
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->gender = $gender;
        $this->age = $age;
		$this->email = $email;
		$this->avatar = $avatar;
	}
	
	public function getFirst_name() {
		return $this->first_name;
	}

	public function setFirst_name( $first_name ) {
		$this->first_name = $first_name;
	}

	public function getLast_name() {
		return $this->last_name;
	}

	public function setLast_name( $last_name) {
		$this->last_name = $last_name;
	}

	public function getGender() {
		return $this->gender;
	}

	public function setGender( $gender) {
		$this->gender = $gender;
	}

	public function getAge() {
		return $this->age;
	}

	public function setAge( $age) {
		$this->age = $age;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail( $email) {
		$this->email = $email;
	}

	public function getAvatar() {
		return $this->avatar;
	}

	public function setAvatar( $avatar) {
		$this->avatar = $avatar;
	}



 




}