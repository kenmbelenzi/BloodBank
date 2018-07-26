<?php
include ('Db.php');

$form=$_POST;
$FirstName=$form['FirstName'];
$MiddleName=$form['MiddleName'];
$LastName=$form['LastName'];
$Password=$form['RepeatPassword'];
$Email=$form['Email'];
$Role=$form['Role'];

$sql="insert into users (FirstName, MiddleName, LastName, Email, Password, Role) VALUES (:FirstName,:MiddleName,:LastName,:Email,:Password,:Role)";
$query =$db->prepare($sql);
$result = $query->execute(array(':FirstName'=>$FirstName,':MiddleName'=>$MiddleName,':LastName'=>$LastName,':Email'=>$Email,':Password'=>$Password,':Role'=>$Role));
if ($result){
    echo "Registration Complete";

    header( "Location:../src/Login.php");
}else{
    echo"Failed to register";
}
