<?php

$name=$_POST["fullname"];
$email=$_POST["email"];
$phonenumber=$_POST["phonenumber"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$dob=$_POST["dob"];
$password=$_POST["password"];
$confirmPassword=$_POST["confirmPassword"];
$country=$_POST["country"];
$city=$_POST["city"];
$postal=$_POST["postal"];


if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Invalid email format.";
    exit();
}elseif(is_numeric($phonenumber) == false){
    echo "Phone number must be numeric.";
    exit();
}

if($password != $confirmPassword){
    echo "Password and Confirm Password do not match.";
    exit();
}
error[] =[];

echo "values received from the form are: $name, $email, $phonenumber, $gender, $address, $dob, $password, $confirmPassword, $country, $city, $postal";

?>
