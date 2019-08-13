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

<?php

function init()
{

    say_Something();
    calculate();

}

function calculate()
{

    echo 456 + 345 . "<br>";

}

function say_Something()
{

    echo "Hello Student, do you like the class? Yes? Okay, great." . "<br>";

}

init();
?>

</body>
</html>