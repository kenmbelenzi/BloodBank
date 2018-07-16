<?php
require ('Db.php');
foreach($db->query('SELECT SUM(PintsDonated) 
FROM donation') as $row) {

    echo  $row['SUM(PintsDonated)'];
}



