
<?php

include('Db.php');
$form=$_POST;
$FirstName=$form['FirstName'];
$MiddleName=$form['MiddleName'];
$LastName=$form['LastName'];

$PintsRecieved=$form['PintsRecieved'];
$BloodGroup=$form['BloodGroup'];
$RegistrationDate=$form['RegistrationDate'];

$sql="insert into recepient (FirstName, MiddleName, LastName, Date, PintseRecieved, BloodGroup) VALUES (:FirstName,:MiddleName,:LastName,:RegistrationDate,:PintsRecieved,:BloodGroup)";
$query =$db->prepare($sql);
$result = $query->execute(array(':FirstName'=>$FirstName,':MiddleName'=>$MiddleName,':LastName'=>$LastName,':RegistrationDate'=>$RegistrationDate,':PintsRecieved'=>$PintsRecieved,':BloodGroup'=>$BloodGroup));
if ($result){
    echo "Registration Complete";

}else{
    echo"Failed to register";
}


