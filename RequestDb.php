<?php
require ('Db.php');
$form = $_POST;
$BloodGroup=$form['BloodGroup'];
$PintsRequired=$form['PintsRequired'];

$query = "SELECT * FROM donation WHERE BloodGroup = :BloodGroup";
$statement= $db->prepare($query);
$statement->execute([':BloodGroup' => $BloodGroup]);
$count= $statement->rowCount();
if($count > 0) {

    echo "BloodAvailable";

}
else{
    echo "no blood";
}