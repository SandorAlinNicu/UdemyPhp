<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

    <section class="content">

    <aside class="col-xs-4">

        <?php Navigation(); ?>

    </aside><!--SIDEBAR-->


    <article class="main-content col-xs-8">
        <!-- Step1 (html): -->
        <form action="6.php" method="POST">
            <input type="text" name="text" placeholder="Type the text here">
            <input type="submit" name="submit">
        </form>


        <?php

        //Step1: (php)

        if (isset($_POST['submit'])) {
            $text = $_POST['text'];
            echo $text;
        }

        /*  Step1: Make a form that submits one value to POST super global


         */


        ?>


    </article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>