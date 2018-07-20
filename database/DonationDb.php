
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('Db.php');
$form=$_POST;
$FirstName=$form['FirstName'];
$LastName=$form['LastName'];
$BloodGroup=$form['BloodGroup'];
$DonorId=$form['id'];
$PintsDonated=$form['PintsDonated'];
$DonationDate=$form['DonationDate'];
$ExpiryDate=$form['ExpiryDate'];
$sql="insert into donation (PintsDonated, BloodGroup, DonorId, LastName, FirstName,DonationDate,ExpiryDate) VALUES (:PintsDonated,:BloodGroup,:Id,:LastName,:FirstName,:DonationDate,
:ExpiryDate)";
$query =$db->prepare($sql);
$result = $query->execute(array(':PintsDonated'=>$PintsDonated,':BloodGroup'=>$BloodGroup,':Id'=>$DonorId,':LastName'=>$LastName,':FirstName'=>$FirstName,
    ':DonationDate'=>$DonationDate,':ExpiryDate'=>$ExpiryDate));
if ($result){
    echo "Donation Successfull";

// updating the stock table
    $form=$_POST;

    $BloodGroup=$form['BloodGroup'];

    $query="SELECT Quantity FROM stock WHERE BloodGroup = :BloodGroup ";
    $statement= $db->prepare($query);
    $statement->execute([':BloodGroup' => $BloodGroup]);
    $count= $statement->rowCount();
    if ($count){


    $row=$statement->fetch(PDO::FETCH_ASSOC);
    $newStock=$row['Quantity'] + $PintsDonated;
    $query ="Update stock SET Quantity=:newStock where BloodGroup = :BloodGroup ";
    $statement= $db->prepare($query);

    $statement->execute([':BloodGroup' => $BloodGroup,':newStock'=>$newStock]);
    echo 'Update success';

    }else{

        echo "Failed";
    }
}else{
    echo"Failed to input Data";
}



