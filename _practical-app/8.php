<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

    <section class="content">

    <aside class="col-xs-4">

        <?php Navigation(); ?>


    </aside><!--SIDEBAR-->


    <article class="main-content col-xs-8">


        <?php

        /*  Step 1 -Make a variable with some text as value

            Step 2 - Use crypt() function to encrypt it

            Step 3 - Assign the crypt result to a variable

            Step 4 - echo the variable

        */

        //Step 1:

        $a = 'Am plecat la magazin';

        //Step 2:

        $hash = '$2y$10$';
        $salt = 'stiusanumarpanalalaa22';
        $hash_salt = $hash . $salt;

        //Step 3:

        $a = crypt($a , $hash_salt);

        //Step 4:

        echo $a;

        ?>


    </article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>