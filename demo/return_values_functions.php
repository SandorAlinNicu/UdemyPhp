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

function add($number1, $number2)
{

    $sum = $number1 + $number2;

    return $sum;
}

$result = add(1, 2);

echo $result;

echo "<br>";

$result = add(100, $result);


echo $result;

echo "<br>";

$result = add(300, $result);

echo $result;

echo "<br>";

?>


</body>
</html>