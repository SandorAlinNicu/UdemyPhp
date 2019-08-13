<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
    <section class="content">

    <aside class="col-xs-4">
        <?php Navigation(); ?>


    </aside><!--SIDEBAR-->


    <article class="main-content col-xs-8">


        <?php


        /*  Step1: Use a pre-built math function here and echo it


            Step 2:  Use a pre-built string function here and echo it


            Step 3:  Use a pre-built Array function here and echo it

         */

        //Step1:

        echo sqrt(144) . "<br>";

        //Step2:

        $string = "am vrut sa zic";

        echo strpos($string, " ") . "<br>";

        //Step3:

        $list = array(12, 564, 65, "da");

        echo implode(", ", $list);

        ?>


    </article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>