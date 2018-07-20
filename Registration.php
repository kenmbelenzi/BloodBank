<?php
include ('trial.html')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>

</head>
<body>

<div class="main">
    <p><b>Fill in the form below</b></p>
    <form name="Registration" action="database/Db.php" method="POST">
        <label for="FirstName">First Name</label>
        <input type="text" name="FirstName" placeholder="FirstName">
        <br>
        <br>

        <label for="MiddleName">Middle Name</label>
        <input type="text" name="MiddleName" placeholder="MiddleName">

        <br>
        <br>


        <label for="LastName">Last Name</label>
        <input type="text" name="LastName" placeholder="LastName">
        <br>
        <br>
        <!--<input type="text" name="Username"  placeholder="Username">-->

        <label for="Password">Password</label>
        <input type="text" name="Password" placeholder="Password">
        <br>
        <br>

        <label for="RepeatPassword">Repeat Password</label>
        <input type="text" name="RepeatPassword" placeholder="Repeat password">
        <br>
        <br>

        <label for="Role">Role</label>
        <input type="text" name="Role" placeholder="Role">
        <br>
        <br>
        <input type="submit">


</div>
</body>
</html>

