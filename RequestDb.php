<?php
session_start();
include ('Db.php');
$form = $_POST;
$BloodGroup=$form['BloodGroup'];
$PintsRequired=$form['PintsRequired'];

$query = "SELECT * FROM donors WHERE BloodGroup = :BloodGroup";
$statement= $db->prepare($query);
$statement->execute([':BloodGroup' => $BloodGroup]);
$count= $statement->rowCount();
if($count > 0) {

    echo "BloodAvailable";
    $NewQuery='insert into recepient(Id,FirstName,MiddleName,LastName,Date,PintseRecieved,BloodGroup)VALUES ';

}
else{
    echo "no blood";
}