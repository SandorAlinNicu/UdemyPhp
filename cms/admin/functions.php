<?php

function insertCategories()
{

    global $connection;

    if (isset($_POST['submit'])) {
        $new_cat_title = $_POST['cat_title'];

        if ($new_cat_title == "" || empty($new_cat_title)) {

            echo "This field can't be empty";

        } else {

            $query = "INSERT INTO categories(cat_title) ";
            $query .= "VALUE('{$new_cat_title}')";

            $insert_category_query = mysqli_query($connection, $query);

            if (!$insert_category_query) {
                die ("QUERY FAILED " . mysqli_error($connection));
            }
        }
    }
}

function findAllCategoreis()
{

    global $connection;

    $query = "SELECT * FROM categories";
    $select_categories_id = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_categories_id)) {
        $cat_id = $row['cat_id'];
        $new_cat_title = $row['cat_title'];

        echo "<tr>";

        echo "<th>{$cat_id}</th>";
        echo "<th>{$new_cat_title}</th>";
        echo "<th><a href='categories.php?delete={$cat_id}'>Delete</a></th>";
        echo "<th><a href='categories.php?edit={$cat_id}'>Edit</a></th>";

        echo "</tr>";
    }
}

function deleteCategories()
{

    global $connection;

    if (isset($_GET['delete'])) {

        $the_cat_id = $_GET['delete'];
        $query = "DELETE FROM categories ";
        $query .= "WHERE cat_id = {$the_cat_id}";

        $delete_category_query = mysqli_query($connection, $query);
        header("Location: categories.php");
    }
}

?>