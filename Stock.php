<?php
require('database/Db.php');
//
$BloodGroup="O+";
//foreach($db->query('SELECT SUM(PintsDonated)
//FROM donation WHERE BloodGroup=:Bloodgroup') as $row) {
//
//  echo  $row['SUM(PintsDonated)'];
//}
$query = "SELECT SUM(PintsDonated) FROM donation WHERE BloodGroup = :BloodGroup AND ExpiryStatus=0";
$statement= $db->prepare($query);
$statement->execute([':BloodGroup' => $BloodGroup]);
$count= $statement->rowCount();
if($count > 0) {

    foreach ($statement as $row){
        echo $row['SUM(PintsDonated)'];
        $Sum=$row['SUM(PintsDonated)'];//setting sum as the value of  row
        $Sum=json_encode($Sum);//encoding it as string so it can be stored to the database

        //updating the amount of blood donated
        $query ="Update stock SET Quantity=:Sum where BloodGroup = :BloodGroup ";
        $statement= $db->prepare($query);
        $statement->execute([':BloodGroup' => $BloodGroup,':Sum'=>$Sum]);
        echo 'Update success';
//query for echoing the amount of blood for a specific blood group
        $query='SELECT Quantity FROM stock WHERE BloodGroup = :BloodGroup';
        $statement= $db->prepare($query);
        $statement->execute([':BloodGroup' => $BloodGroup]);
        $count= $statement->rowCount();
        if ($count >0){
            $amount=$statement->fetch(PDO::FETCH_ASSOC);
            $ken=json_decode($amount['Quantity']);
            echo $ken;


        }

    }
}
else{
    echo "no blood";
}