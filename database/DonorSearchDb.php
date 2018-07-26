<?php
include('../src/trial.html')
?>
<?php
require('Db.php');

$form=$_GET;
$id=$form['id'];
$sql = $db->prepare("SELECT id,FirstName,LastName,BloodGroup FROM donors WHERE id = :id");
$sql->execute([':id' => $id]);

if($sql->rowCount()) {
    ?>

        <?php
        while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <html>
            <head>
                <link rel="stylesheet" href="../css/main.css">
                <link rel="stylesheet" href="../css/register.css">
            </head>
<div class="main">
            <form name="Donation" action="DonationDb.php" method="post">
            <label for="id">Donor Id</label>
            <input type="text" name="id"  value=" <?php print($row['id']); ?>">
            <br>
            <label for="FirstName">First Name</label>
            <input type="text" name="FirstName" value=" <?php print($row['FirstName']); ?>">

            <br>

            <label for="LastName">LastName</label>
            <input type="text" name="LastName" value=" <?php print($row['LastName']); ?>">
            <br>
            <label for="BloodGroup">BloodGroup</label>
            <input type="text" name="BloodGroup" value=" <?php print($row['BloodGroup']); ?>">
            <br>
            <label for="PintsDonated" STYLE="color: #f44336">Pints Donated</label>
            <input type="text" name="PintsDonated" placeholder="Pints Donated" style="color: #f44336">

            <?php
        }
    ?>
    <p>Donation Date:
        <input type="text" name="DonationDate" value=" <?php
        $date=date_create();//creates todays date
        echo date_format($date,'y-m-d');?>">//outputs the date in the format D-M-Y

    </p>
    <p>Expiry date
        <input type="text" name="ExpiryDate" value="<?php

        date_add($date,date_interval_create_from_date_string("4days"));//add number of days

        echo date_format($date,"y-m-d");//Output  date format of the result D-M-Y
        ?>">
        <br>
    </p>

    <input type="submit" class="registerbtn">
    <br>
    </form>
</div>

    </html>
    <?php
} else {

    print('There are no records at this moment.');

}