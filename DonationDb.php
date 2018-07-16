
<?php

include ('Db.php');
$form=$_POST;
$FirstName=$form['FirstName'];
$LastName=$form['LastName'];
$BloodGroup=$form['BloodGroup'];
$DonorId=$form['id'];
$PintsDonated=$form['PintsDonated'];
$sql="insert into donation (PintsDonated, BloodGroup, DonorId, LastName, FirstName) VALUES (:PintsDonated,:BloodGroup,:Id,:LastName,:FirstName)";
$query =$db->prepare($sql);
$result = $query->execute(array(':PintsDonated'=>$PintsDonated,':BloodGroup'=>$BloodGroup,':Id'=>$DonorId,':LastName'=>$LastName,':FirstName'=>$FirstName));
if ($result){
    echo "Donation Successfull";

}else{
    echo"Failed to input Data";
}


