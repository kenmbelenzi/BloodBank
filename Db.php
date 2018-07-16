<?php

if (isset( $_POST)) {
    $user = 'root';
    $pass = '';
    $db = new PDO('mysql:host=localhost;dbname=bloodbank', $user, $pass);

    /*
    $form = $_POST;
    $Username = $form['Username'];
    $Password = $form['Password'];

    $Role = $form ['Role'];

    $sql = "INSERT INTO donor (Username, Password)  VALUES (:Username, :Password)";
    $query = $db->prepare($sql);
    $result = $query->execute(array(':Username' => $Username, ':Password' => $Password, ));
    if ($result) {
        echo "<p> Thankyou Riegistration complete</p>";


    } else {
        echo "<p>Error unable to register user</p>";

    }
}
*/
}
