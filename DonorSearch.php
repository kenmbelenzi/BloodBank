<?php
include ('trial.html');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DonorSearch</title>
</head>
<body>

<div class="main">
    <form name="DonorSearch" action="database/DonorSearchDb.php" method="get">

        <input type="text"name="id" placeholder="Id">

        <input type="submit" placeholder="submit">
    </form>
</div>

</body>
</html>