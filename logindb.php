<?php
session_start();
if (isset( $_POST)) {
    $user = 'root';
    $pass = '';
    $db = new PDO('mysql:host=localhost;dbname=bloodbank', $user, $pass);

    $form = $_POST;
    $Username = $form['Username'];
    $Password = $form['Password'];


    $query = "SELECT * FROM user WHERE Username = :Username AND Password = :Password";
    $statement= $db->prepare($query);
    $statement->execute(
        array(
            'Username' => $_POST['Username'],
            'Password' => $_POST['Password']
        )
    );

    $count= $statement->rowCount();
    if($count > 0) {
        $_SESSION["Username"] = $_POST['Username'];


        echo "user";

    }
    elseif($count> 0){
        $query = "SELECT * FROM donor WHERE Username = :Username AND Password = :Password";
        $statement= $db->prepare($query);
        $statement->execute(
            array(
                'Username' => $_POST['Username'],
                'Password' => $_POST['Password']
            )
        );

        $count= $statement->rowCount();
        if($count > 0){
            $_SESSION["Username"] = $_POST['Username'];
            $_SESSION['Email'] =$_POST['email'];

            echo"donor";

    }
}
else{
        echo "User Does Not Exist";
}


}
