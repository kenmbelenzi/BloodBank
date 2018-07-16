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
    </form>
    <?php
} else {

    print('There are no records at this moment.');

}