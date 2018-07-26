<?php
include('adminsidenav.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="../css/main.css">


</head>
<body>
<div class="body"></div>
<div class="main">
<div class="container">

        <p><b>Fill in the form below</b></p>
        <form name="Registration" action="../database/UserRegistrationDb.php" method="POST">
            <label for="FirstName">First Name</label>
            <br>
            <input type="text" name="FirstName" placeholder="FirstName">
            <br>
            <br>

            <label for="MiddleName">Middle Name</label>
            <br>
            <input type="text" name="MiddleName" placeholder="MiddleName">

            <br>
            <br>


            <label for="LastName">Last Name</label>
            <br>
            <input type="text" name="LastName" placeholder="LastName">
            <br>
            <br>
            <!--<input type="text" name="Username"  placeholder="Username">-->

            <label for="Email">Email</label>
            <br>
            <input type="text" name="Email" placeholder="Password">
            <br>
            <br>

            <label for="Password">Password</label>
            <br>
            <input type="text" name="Password" placeholder="Password">
            <br>
            <br>

            <label for="RepeatPassword">Repeat Password</label>
            <br>
            <input type="text" name="RepeatPassword" placeholder="Repeat password">
            <br>
            <br>

            <label for="Role">Role</label>
            <br>
            <select name="Role" class="blood">
                <option value="Admin">Admin</option>
                <option value="Nurse">Nurse</option>
                <option value="LabTech">LabTech</option>

            </select>
            <br>
            <br>
            <input type="submit" class="registerbtn">


    </div>
</div>

</body>
</html>

