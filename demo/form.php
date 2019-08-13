<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="form.php" method="POST">
    <input type="text" placeholder="enter your username" name="username"><br>
    <input type="password" placeholder="enter your password" name="password"><br>
    <input type="submit" name="submit">

</form>

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


</body>
</html>