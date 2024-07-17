<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "lms");
    $query = "delete from category where cat_id = $_GET[cid]";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        echo "<script> alert ('Category Deleted Successfully');
        window.location.href = 'manage_cat.php';
        </script>";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
?>