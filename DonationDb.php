
<?php

include ('Db.php');
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

}else{
    echo"Failed to input Data";
}


