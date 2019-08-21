<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
    <section class="content">

    <aside class="col-xs-4">

        <?php Navigation(); ?>


    </aside><!--SIDEBAR-->

    <article class="main-content col-xs-8">


        <?php

        /*  Step 1: Use the Make a class called Dog

            Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

            Step 3: Make a method named ShowAll that echos all the properties

            Step 4: Instantiate the class / create object and call it pitbull

    Step 5: Call the method ShowAll

        */


        //Step 1:

        class Dog
        {

            //Step 2:

            var $eyeColor = 'green';
            var $nose = 'big';
            var $furColor = 'black';

            //Step 3:

            function showAll()
            {

                echo $this->eyeColor . "<br>";
                echo $this->nose . "<br>";
                echo $this->furColor;

            }

        }

        $pitbull = new Dog();

        $pitbull->showAll();

        ?>


    </article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>