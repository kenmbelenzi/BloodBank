<?php
$user = 'root';
$pass = '';
$db = new PDO('mysql:host=localhost;dbname=bloodbank', $user, $pass);

    $form = $_GET;

    $Email = $form['Email'];
    $Password = $form['Password'];


    $query = "SELECT Role FROM users WHERE Email = :Email AND Password = :Password";
    $statement= $db->prepare($query);
    $statement->execute(
        array(
            'Email' => $Email,
            'Password' => $Password
        )
    );

    $count= $statement->rowCount();
    $row=$statement->fetch(PDO::FETCH_ASSOC);
    if($count >0 ) {
        $role=$row['Role'];
        switch ($role){
            case 'Admin':
                header( "Location:../src/Admin.php");

                break;
            case 'Nurse':
                header( "Location:../src/Index.php");


                break;
            case 'donor':
                echo 'donor';
                break;

        }

    }
//    elseif($count> 0){
//        $query = "SELECT Role FROM user WHERE Username = :Username AND Password = :Password";
//        $statement= $db->prepare($query);
//        $statement->execute(
//            array(
//                'Username' => $_POST['Username'],
//                'Password' => $_POST['Password']
//            )
//        );
//
//        $count= $statement->rowCount();
//        if($count > 0){
//            $_SESSION["Username"] = $_POST['Username'];
//            $_SESSION['Email'] =$_POST['email'];
//            $row = $query->fetch(PDO::FETCH_ASSOC);
//
//            echo"donor";
//            echo $row['role'];
//
//    }
//}
else{
        echo "User Does Not Exist";

        }
