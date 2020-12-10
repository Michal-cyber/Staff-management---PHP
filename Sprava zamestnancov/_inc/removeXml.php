<?php 

require_once "config.php";

    $id = $_POST['id'];

    $xpath = new DOMXPATH($xml);

    $postings = $xpath->query("/employees/employee[first_name='$id']");
    
    foreach ($postings as $posting) {
        $posting->parentNode->removeChild($posting);
    }
    
    $xml->formatoutput = true;
    $xml->save( "employees.xml" );

    header('Location:'.$site_url);
    die("success");
?>