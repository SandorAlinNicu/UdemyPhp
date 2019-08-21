<?php

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
if (!$connection) {
    die('Database connection failed');
}


$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);

if (!$result) {

    die('Query FAILED' . mysqli_error());

}


?>

<?php include "includes/header.php"; ?>

    <div class="container">

    <div class="col-xs-6">

        <?php

        while ($row = mysqli_fetch_assoc($result)) {
            ?>

            <pre>
            <?php
            print_r($row);
            echo "<br>";

            ?>
        </pre>
            <?php
        }

        ?>

    </div>

<?php include "includes/footer.php"; ?>