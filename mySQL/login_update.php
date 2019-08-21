<?php
include "db.php";
include "functions.php";

updateTable();

?>

<?php include "includes/header.php"; ?>

    <div class="container">

    <div class="col-xs-6">
        <h1 class="text-center">UPDATE</h1>
        <form action="login_update.php" method="POST">

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <div class="form-group">
                <select name="id" id="">
                    <?php
                    showAllData();
                    ?>
                </select>
            </div>

            <div>
                <input type="submit" name="submit" class="btn btn-primary" value="Update">
            </div>

        </form>

    </div>

<?php include "includes/footer.php"; ?>