<?php

$file = "example.txt";

if($handle = fopen($file, 'w')) {


    fwrite($handle, "i love PHP");


    fclose($handle);

}else {

    echo "The files could not be written";

}



?>