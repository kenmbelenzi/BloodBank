<html>
<form name="Donation" action="DonationDb" method="post">
    <div class="Donation">
        <p>Donor ID
        <input type="text"name="Donorid" placeholder="Id">
        <br>
        </p>

        <p>First Name
            <input type="text" name="FirstName" placeholder="First Name">
            <br>
        </p>

        <p>Middle Name
            <input type="text" name="MiddleName" placeholder="Middle name">
            <br>

        </p>

        <p>Last Name
            <input type="text" name="LastName" placeholder="Last Name" >
            <br>
        </p>

        <p>Phone Number
            <input type="text" name="PhoneNumber" placeholder="Phone Number">
            <br>
        </p>

        <p>Email
            <input type="email" name="Email" placeholder="Email Address">
            <br>
        </p>

        <p>Blood Group
            <input type="text" name="BloodGroup" placeholder="Blood group">
            <br>
        </p>

        <p>Pints Donated
            <input type="Text" name="Amount" placeholder="Pints Donated">
            <br>
        </p>
        <p>Donation Date:
            <input type="date" name="Amount" value=" <?php
$date=date_create();
echo "Donation Date:  ".date_format($date,'d-m-y');?>">
            <br>
        </p>
        <p>Expiry date
            <input type="date" name="Amount" value="<?php echo 'expiry date:';

date_add($date,date_interval_create_from_date_string("42 days"));//add number of days

            echo date_format($date,"d-m-y");//et date format of the result
            ?>">
            <br>
        </p>



<br>

        <input type="submit">
    </div>

</form>

</html>