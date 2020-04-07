<?php
//print_r($_POST);

$first_name =$_POST['first_name']
$first_name =$_POST['last_name']
$last_name =$_POST['first_name']
$email =$_POST['email']
$password =$_POST['password']
$gender =$_POST['gender']
$designation =$_POST['designation']
$department =$_POST['department']

$errorArray =[];

if($first_name ==){
   $errorArray = "First Name cannot be blank";
}
print_r($errorArray); 

?>










