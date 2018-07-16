<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DonorSearch</title>
</head>
<body>
<form name="DonorSearch" action="DonorSearchDb.php" method="get">

    <input type="text"name="id" placeholder="Id">

    <input type="submit">
</form>
</body>
</html>