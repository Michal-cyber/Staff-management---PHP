<?php

$site_url ="http://localhost/Projekty/Sprava%20zamestnancov/";

/**
 * REQUIRE CLASS
 */
require "Employee.php";
require "Employees.php";


$employees = new Employees();

/**
 * LOAD XML
 */

$xml = new DomDocument("1.0", "UTF-8");
$xml->load("employees.xml");

$rootTag = $xml->getElementsByTagName("employees")->item(0);



