<?php

include "db.php";

function showAllData()
{
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }

}

function updateTable()
{
    if (isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die('QUERY FAILED' . mysqli_error($connection));
        } else {
            echo "<h1 class='text-center'>SUBMITED!</h1>";
        }
    }
}

function deleteRows()
{
    if (isset($_POST['submit'])) {
        global $connection;
//        $username = $_POST['username'];
//        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die('QUERY FAILED' . mysqli_error($connection));
        } else {
            echo "<h1 class='text-center'>SUBMITED!</h1>";
        }
    }
}

function createRows()
{
    if (isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        $hashFormat = "$2y$10$";
        $salt = "iusesomecrazystrings22";
        $hashF_and_salt = $hashFormat . $salt;

        $password = crypt($password, $hashF_and_salt);

        $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
        if (!$connection) {

            die('Database connection failed');

        }
        $query = "INSERT INTO users(username,password) ";
        $query .= "VALUES ('$username', '$password')";

        $result = mysqli_query($connection, $query);

        if (!$result) {

            die('Query FAILED' . mysqli_error());

        } else {
            echo "<h1 class='text-center'>SUBMITED!</h1>";
        }
    }
}