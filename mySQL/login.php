<?php

if (isset($_POST['submit'])) {


    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if ($connection) {
        echo 'we are connected';
    } else {
        die('Database connection failed');
    }


//    if($username && $password){
//
//    echo $username . "<br>";
//    echo $password;
//}else
//    {
//        echo "this field cannot be blank";
//    }
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no,
          initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
</head>
<body>

<div class="container">

    <div class="col-xs-6">

        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit"
                       value="Submit">
            </div>
        </form>

    </div>

</div>
</body>
</html>