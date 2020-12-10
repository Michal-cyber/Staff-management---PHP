<?php  include "_inc/config.php";

$xml = simplexml_load_file('_inc/employees.xml') or die("cant load xml"); 

foreach($xml as $item) {
    $employees->addEmployee(new Employee($item->first_name, $item->last_name, $item->gender, $item->age, $item->email, $item->avatar));
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Employees</title>
</head>
<body>

  

