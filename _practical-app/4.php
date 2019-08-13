<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

    <section class="content">

    <aside class="col-xs-4">

        <?php Navigation(); ?>


    </aside><!--SIDEBAR-->


    <article class="main-content col-xs-8">


        <?php

        /*  Step1: Define a function and make it return a calculation of 2 numbers

            Step 2: Make a function that passes parameters and call it using parameter values


         */

        //Step1:

        function multiply(){

            return 7*8;

        }

        echo multiply() . "<br>";

        //Step2:

        function complex_multiply($n1,$n2){
            return $n1*$n2;
        }

        echo complex_multiply(7,8)

        ?>


    </article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>