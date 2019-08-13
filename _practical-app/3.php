<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

    <section class="content">

    <aside class="col-xs-4">

        <?php Navigation(); ?>

    </aside><!--SIDEBAR-->


    <article class="main-content col-xs-8">

        <?php

        /*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



            Step 2: Make a forloop that displays 10 numbers


            Step 3 : Make a switch Statement that test againts one condition with 5 cases

         */

        //Step1:

        $good_string = "<b>I love PHP</b>";
        $bad_string = "<b>I don't love PHP</b>";
        $another_bad_string = "<b>I hate PHP</b>";

        if ($good_string === $bad_string) {

            echo $bad_string;

        } elseif ($good_string === $another_bad_string) {

            echo $another_bad_string;

        } else {

            echo $good_string;

        }

        echo "<br>";
        echo "<br>";

        //Step2:

        for ($i = 0; $i < 10; $i++) {

            echo $i;

        }

        echo "<br>";
        echo "<br>";

        //Step3:

        $n = 7;

        switch ($n) {

            case 1:
                echo "n este 1";
                break;
            case 2:
                echo "n este 2";
                break;
            case 3:
                echo "n este 3";
                break;
            case 4:
                echo "n este 4";
                break;
            case 5:
                echo "n este 5";
                break;
            default:
                echo "n nu apartine intervalului [1,5]";
        }

        ?>
    </article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>