
<?php

include ('Db.php');
$form=$_POST;
$FirstName=$form['FirstName'];
$MiddleName=$form['MiddleName'];
$LastName=$form['LastName'];
$PhoneNumber=$form['PhoneNumber'];
$Email=$form['Email'];
$BloodGroup=$form['BloodGroup'];
$RegistrationDate=$form['RegistrationDate'];

$sql="insert into donors (FirstName, MiddleName, LastName, PhoneNumber, Email, BloodGroup, RegistrationDate) VALUES (:FirstName,:MiddleName,:LastName,:PhoneNumber,:Email,:BloodGroup,:ReistrationDate)";
$query =$db->prepare($sql);
$result = $query->execute(array(':FirstName'=>$FirstName,':MiddleName'=>$MiddleName,':LastName'=>$LastName,':PhoneNumber'=>$PhoneNumber,':Email'=>$Email,':BloodGroup'=>$BloodGroup,':ReistrationDate'=>$RegistrationDate));
if ($result){
    echo "Registration Complete";

}else{
    echo"Failed to register";
}


