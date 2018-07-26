<?php
include('../src/trial.html')
?>
<html>
<head>
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<div class="main">
    <h3>Donor Registration Form</h3>
    <form name="DonorRegistration" action="../database/DonorDb.php" method="post">
        <div class="DonorRegistration">
            <label for="FirstName">First Name</label>
            <br>
            <input type="text" name="FirstName" placeholder="First Name">
            <br>
            <label for="MiddleName">Middle Name</label>
            <br>
            <input type="text" name="MiddleName" placeholder="Middle name">
            <br>
            <label for="LastName">Last Name</label>
            <br>
            <input type="text" name="LastName" placeholder="Last Name" >
            <br>
            <label for="PhoneNumber">Phone Number</label>
            <br>
            <input type="text" name="PhoneNumber" placeholder="Phone Number">
            <br>
            <label for="Email">email</label>
            <br>
            <input type="email" name="Email" placeholder="Email Address">
            <br>
            <label for="BloodGroup">Blood Group</label>
            <br>

            <select name="BloodGroup" class="blood">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            <br>
            <label for="RegistrationDate">Registration Date</label>
            <br>
            <input type="date" name="RegistrationDate" placeholder="Registration date">
            <br>

            <input type="submit" class="registerbtn">
        </div>

</div>


</form>
</html>

