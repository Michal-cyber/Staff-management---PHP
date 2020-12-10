<?php 
require_once 'config.php';


$id = $_POST['id'];

$employees->addEmployee(new Employee($_POST['first'], $_POST['last'],$_POST['gender'], $_POST["date"], $_POST['email'] ));
 
$infoTag = $xml -> getElementsByTagName("employee")->item($id);

foreach($employees->getEmployyes() as $item ) {
    $parent =  $xml -> createElement("employee");

        $firstTag =  $parent->appendChild($xml -> createElement("first_name", $item->getFirst_name()) );
        $lastNameTag =  $parent->appendChild($xml -> createElement("last_name", $item->getLast_name() ));
        $emailTag = $parent->appendChild( $xml -> createElement("email", $item->getEmail()) );
        $genderTag =  $parent->appendChild($xml -> createElement("gender",  $item->getGender()) );
        $ageTag =  $parent->appendChild($xml -> createElement("age", $item->getAge()) );
}


$rootTag->replaceChild($parent, $infoTag);    

$xml->save('employees.xml');

header('Location:'.$site_url);
die("success");

?>

