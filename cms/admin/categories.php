<?php include "includes/admin_header.php"; ?>


    <div id="wrapper">


    <!-- Navigation -->
    <?php include "includes/admin_navigation.php"; ?>


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        WELCOME TO ADMIN
                        <small>Author</small>
                    </h1>


                </div>
            </div>
            <!-- /.row -->
            <div class="col-xs-6">

                <?php insertCategories(); ?>


                <form action="" method="POST">

                    <div class="form-group">
                        <label for="cat_title">Add Category</label>
                        <input type="text" class="form-control" name="cat_title">
                    </div>

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Add Category" name="submit">
                    </div>
                </form>

                <?php //UPDATE AND INCLUDE QUERY

                if (isset($_GET['edit'])) {

                    $cat_id = $_GET['edit'];

                    include "includes/update_categories.php";

                }

                ?>


            </div>
            <div class="col-xs-6">
                <table class="table table-bordered table-hover table-striped">


                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category</th>
                    </tr>
                    </thead>


                    <tbody>

                    <?php findAllCategoreis(); ?>
                    <?php deleteCategories(); ?>

                    </tbody>


                </table>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>


    <!-- /#page-wrapper -->


<?php include "includes/admin_footer.php"; ?>