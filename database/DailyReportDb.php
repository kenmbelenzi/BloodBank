<?php

require('Db.php');
$date=date('Y-M-D');
    $BloodGroup='O-';
$query = "SELECT SUM(PintsDonated) FROM donation WHERE BloodGroup = :BloodGroup AND DonationDate=current_date";
$statement= $db->prepare($query);
$statement->execute([':BloodGroup' => $BloodGroup]);
$count= $statement->rowCount();
if($count > 0) {
    foreach ($statement as $row) {

echo $BloodGroup;
        echo $row['SUM(PintsDonated)'];
    }
} else{
    echo $bloodgroup;
    echo "0 pints donated";

}
//$count= $statement->rowCount();
//$row=$statement->fetch(PDO::FETCH_ASSOC);
//if($count == 1) {
//    $role=$row['Role'];
//    switch ($role){
//        case 'admin':
//            echo "admin";
//            break;
//        case 'nurse':
//            echo 'nurse';
//            break;
//        case 'donor':
//            echo 'donor';
//            break;
//
//    }
//
//}a