<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>



    <section class="content">

    <aside class="col-xs-4">

        <?php Navigation(); ?>


    </aside><!--SIDEBAR-->


    <article class="main-content col-xs-8">


        <?php

        /*  Create a link saying Click Here, and set
        the link href to pass some parameters and use the GET super global to see it

            Step 2 - Set a cookie that expires in one week

            Step 3 - Start a session and set it to value, any value you want.
        */
        ?>

        <!-- Step 1: -->
        <a href="?x=10&y=20&z=30">Click Here</a>

        <?php echo "<br>";
        print_r($_GET); ?>

        <?php

        $x = $_GET['x'];
        $y = $_GET['y'];
        $z = $_GET['z'];

        echo '<br>' . $x . ' ' . $y . ' ' . $z;

        ?>

        <?php

        //Step 2:

        $name = "Edgar";
        $value = "oOoOoOoOoOoOoOoOoOoOoOoO";
        $expire = time() + (60 * 60 * 24 * 7 * 4);
        setcookie($name, $value, $expire);

        ?>

        <?php

        //Step 3:

        session_start();

        $_SESSION['Alin'] = 100;

        ?>

    </article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>