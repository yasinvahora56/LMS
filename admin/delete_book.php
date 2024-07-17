<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "lms");
    $query = "delete from books where book_no = $_GET[bn]";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        echo "<script>alert('Book Deleted successfully');
        window.location.href = 'manage_book.php';
        </script>";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
?>