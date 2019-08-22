<div class="col-md-4">

    <!-- Blog Search Well -->


    <div class="well">
        <h4>Blog Search</h4>
        <form action="search.php" method="POST">
            <div class="input-group">
                <input type="text" class="form-control" name="search">
                <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" name="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
        </form>
    </div>
    <!-- /.input-group -->
</div>







<!-- Blog Categories Well -->
<div class="well">

    <h4>Blog Categories</h4>

    <div class="row">

        <div class="col-lg-12">
            <ul class="list-unstyled">

                <?php

                $query = "SELECT * FROM categories";
                $sidebar_query = mysqli_query($connection,$query);

                while($row = mysqli_fetch_assoc($sidebar_query)) {
                    $cat_title = $row['cat_title'];

                    echo "<li><a href='#'>{$cat_title}</a></li>";
                }

                ?>


            </ul>
        </div>

    </div>

    <!-- /.row -->
</div>







<!-- Side Widget Well -->
<div class="well">
    <h4>Side Widget Well</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus
        laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
</div>

</div>