<?php
session_start();
if (isset( $_POST)) {
    $user = 'root';
    $pass = '';
    $db = new PDO('mysql:host=localhost;dbname=bloodbank', $user, $pass);

    $form = $_POST;
    $Username = $form['Username'];
    $Password = $form['Password'];


    $query = "SELECT Role FROM user WHERE Username = :Username AND Password = :Password";
    $statement= $db->prepare($query);
    $statement->execute(
        array(
            'Username' => $_POST['Username'],
            'Password' => $_POST['Password']
        )
    );

    $count= $statement->rowCount();
    $row=$statement->fetch(PDO::FETCH_ASSOC);
    if($count == 1) {
        $role=$row['Role'];
        switch ($role){
            case 'admin':
                echo "admin";
                break;
            case 'nurse':
                echo 'nurse';
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


}
