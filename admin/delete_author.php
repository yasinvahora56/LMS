<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "lms");
    $query = "delete from authors where author_id = $_GET[aid]";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        echo "<script> alert ('Author Deleted Successfully');
        window.location.href = 'manage_author.php';
        </script>";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
?>