<?php

$firstName = $_POST['firstName']
$lastName = $_POST['lastName']
$email = $_POST['email']


////////database connection

$conn = new mysqli('localhost' 'root' '' 'bondi_form');
if ($conn->connect_error){
    die('connection failed : ' '.$conn->connect_error');
}else{
    $stmt = s$conn->prepare("inser into registeration(firstName , lastName , email) values(?,?,?)");
    $stmt-> bind_param("sss",$firstName, $lastName, $email);
    $stmt-> execute();
    echo "registeration SUccessfully...";
    $stmt-> close();
    $conn-> close();
}

?>