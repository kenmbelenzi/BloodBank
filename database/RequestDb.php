<?php
session_start();
include('Db.php');
$form = $_POST;
$BloodGroup=$form['BloodGroup'];
$PintsRequired=$form['PintsRequired'];
$id=$form['id'];

$query = "SELECT Quantity FROM stock WHERE BloodGroup = :BloodGroup";
$statement= $db->prepare($query);

$statement->execute([':BloodGroup' => $BloodGroup]);
$count= $statement->rowCount();


if($count) {
    $quantity=$statement->fetch(PDO::FETCH_ASSOC);

    $quantity=$quantity['Quantity'];
    if($quantity>=$PintsRequired)

    echo "BloodAvailable";
$query='insert into bloodrequest(bloodgroup,recepient_id,pints_required)VALUES (:BloodGroup,:id,:PintsRequired)';
$statement=$db->prepare($query);
$result=$statement->execute(array(':BloodGroup'=>$BloodGroup,':id'=>$id,':PintsRequired'=>$PintsRequired));
if ($result){
    echo 'Request recorded';
    // updating the stock table
    $form=$_POST;

    $BloodGroup=$form['BloodGroup'];

    $query="SELECT Quantity FROM stock WHERE BloodGroup = :BloodGroup ";
    $statement= $db->prepare($query);
    $statement->execute([':BloodGroup' => $BloodGroup]);
    $count= $statement->rowCount();
    if ($count){


        $row=$statement->fetch(PDO::FETCH_ASSOC);
        $newStock=$row['Quantity'] - $PintsRequired;
        $query ="Update stock SET Quantity=:newStock where BloodGroup = :BloodGroup ";
        $statement= $db->prepare($query);

        $statement->execute([':BloodGroup' => $BloodGroup,':newStock'=>$newStock]);
        echo 'Update success';

    }else{

        echo "Failed";
    }
}

}
else{
    echo "no blood";
}