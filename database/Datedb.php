<?php
include('Db.php');
$form=$_POST;
$date=$form['Date'];
$query='Select PintsDonated from donation WHERE DonationDate = :DonationDate';
$statement= $db->prepare($query);
$statement->execute(['DonationDate'=>$date]);
$count= $statement->rowCount();
if($count > 0) {
    $query ="Update donation SET ExpiryStatus=0 where DonationDate = :DonationDate ";
    $statement= $db->prepare($query);
    $statement->execute(['DonationDate'=>$date]);
}