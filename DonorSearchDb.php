<?php
require ('Db.php');
$form=$_GET;
$id=$form['id'];
$sql = $db->prepare("SELECT id,FirstName,LastName,BloodGroup FROM donors WHERE id = :id");
$sql->execute([':id' => $id]);

if($sql->rowCount()) {
    ?>

        <?php
        while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            ?>
<form name="Donation" action="DonationDb.php" method="post">
               <input type="text" name="id"  value=" <?php print($row['id']); ?>">
            <br>
               <input type="text" name="FirstName" value=" <?php print($row['FirstName']); ?>">

            <br>
            <input type="text" name="LastName" value=" <?php print($row['LastName']); ?>">
            <br>

            <input type="text" name="BloodGroup" value=" <?php print($row['BloodGroup']); ?>">
            <br>
            <input type="text" name="PintsDonated" placeholder="Pints Donated">
            <input type="submit">
            <?php
        }
        ?>
    <p>Donation Date:
        <input type="text" name="DonationDate" value=" <?php
        $date=date_create();
        echo date_format($date,'d-m-y');?>">
        <br>
    </p>
    <p>Expiry date
        <input type="text" name="ExpiryDate" value="<?php

        date_add($date,date_interval_create_from_date_string("42days"));//add number of days

        echo date_format($date,"d-m-y");//et date format of the result
        ?>">
        <br>
    </p>



    <br>
    </form>
    <?php
} else {

    print('There are no records at this moment.');

}