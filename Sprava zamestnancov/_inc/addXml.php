<?php require_once "config.php";

// create new employee
$employees->addEmployee(new Employee($_POST['c_first_name'], $_POST['c_last_name'], $_POST['b_gender'], $_POST['d_date'], $_POST['b_email']));

// ADD XML TAGS CAN
$employees->addXml(new Employee("first_name", "last_name", "gender", "age", "email"));


foreach($employees->getEmployyes() as $item ) {
    $parent = $xml -> createElement("employee");
    // create element and append child to parent
    foreach($employees->getXml() as $user) {

            $firstTag = $parent->appendChild($xml -> createElement($user->getFirst_name(), $item->getFirst_name() ) );
            $lastNameTag = $parent->appendChild($xml -> createElement($user->getLast_name(), $item->getLast_name() ) );
            $emailTag = $parent->appendChild($xml -> createElement($user->getEmail(), $item->getEmail() ) );
            $genderTag = $parent->appendChild($xml -> createElement($user->getGender(),  $item->getGender() ) );
            $ageTag = $parent->appendChild($xml -> createElement($user->getAge(), $item->getAge() ) );
    }
}


//append data
$rootTag->appendChild($parent);

$xml->save('employees.xml');

header('Location:'.$site_url);
die("success");

/*
$rootTag->appendChild($trol);


    