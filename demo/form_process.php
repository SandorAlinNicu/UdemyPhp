<?php

if (isset($_POST['submit'])) {

    $names = array("Edwin", "Student", "Peter", "Samid", "Mohad",
        "Maria", "Jane", "Tom");
    $minimum = 5;
    $maximum = 10;

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (strlen($username) < $minimum) {

        echo "Username has to be longer than five";
    }

    if (strlen($username) > $maximum) {

        echo "Username is too long";
    }

    if (in_array($username, $names)) {

        echo "<h1>WELCOME</h1>" . "<h1>$username</h1>";

    } else {
        echo "<h1><font size='3' color='red'>This Username doesn't exist</font></h1>";
    }


    echo "<br>";
    echo "<br>";
    print_r($_POST);

}

?>