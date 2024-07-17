<?php
require('functions.php');
session_start();
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "lms");
$book_no = "";
$book_name = "";
$author_id = "";
$cat_id = "";
$book_price = "";
$query = "select * from books where book_no = '$_GET[bn]'";
$query_run = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($query_run)) {
    $book_name = $row['book_name'];
    $book_no = $row['book_no'];
    $author_id = $row['author_id'];
    $cat_id = $row['cat_id'];
    $book_price = $row['book_price'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add New Category</title>
    <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="admin_dashboard.php">Library Management System (LMS)</a>
            </div>
            <font style="color:white"><span><strong>Welcome: <?php
                                                                if (isset($_SESSION['name'])) {
                                                                    echo $_SESSION['name'];
                                                                }
                                                                ?></strong></span></font>
            <font style="color:white"><span><strong>Email: <?php
                                                            if (isset($_SESSION['email'])) {
                                                                echo $_SESSION['email'];
                                                            }
                                                            ?></strong></span></font>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" style=" margin-right:5px" ;>My Profile</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="view_profile.php">View Profile</a>
                        <a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
                        <a class="dropdown-item" href="change_password.php">Change Password</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="aindex.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#e3f2fd">
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-center">
                <li class="nav-item">
                    <a href="admin_dashboard.php" class="nav-link">Dashboard</a>
                </li>
                <li class="nav item-dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Books</a>
                    <div class="dropdown-menu" style="margin-left:80px" ;>
                        <a href="add_book.php" class="dropdown-item">Add New Books</a>
                        <a href="manage_book.php" class="dropdown-item">Manage Books</a>
                    </div>
                </li>
                <li class="nav item-dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
                    <div class="dropdown-menu" style="margin-left:160px" ;>
                        <a href="add_cat.php" class="dropdown-item">Add New Category</a>
                        <a href="manage_cat.php" class="dropdown-item">Manage Category</a>
                    </div>
                </li>
                <li class="nav item-dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Auther</a>
                    <div class="dropdown-menu" style="margin-left:240px" ;>
                        <a href="add_author.php" class="dropdown-item">Add New Auther</a>
                        <a href="manage_author.php" class="dropdown-item">Manage Authers</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="issued_book.php" class="nav-link">Issue Books</a>
                </li>
            </ul>
        </div>
    </nav><br><br>
    <center>
        <h4>Edit Book</h4><br>
    </center>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="" method="post">
                <div class="form-group">
                    <label for="mobile">Book Number:</label>
                    <input type="text" class="form-control" name="book_no" value="<?php echo $book_no; ?>" required>
                </div>
                <div class="form-group">
                    <label for="cat_name">Book Name</label>
                    <input type="text" class="form-control" name="book_name" value="<?php echo $book_name; ?>" required>
                </div>
                <div class="form-group">
                    <label for="cat_name">Author Id</label>
                    <input type="text" class="form-control" name="author_id" value="<?php echo $author_id; ?>" required>
                </div>
                <div class="form-group">
                    <label for="cat_name">Category Id</label>
                    <input type="text" class="form-control" name="cat_id" value="<?php echo $cat_id; ?>" required>
                </div>
                <div class="form-group">
                    <label for="cat_name">Book Price</label>
                    <input type="text" class="form-control" name="book_price" value="<?php echo $book_price; ?>" required>
                </div>
                <button type="submit" name="update" class="btn btn-primary">Update Book</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</body>

</html>
<?php
if (isset($_POST['update'])) {
    $connection = mysqli_connect("localhost", "root", "");
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $db = mysqli_select_db($connection, "lms");
    if (!$db) {
        die("Database selection failed: " . mysqli_error($connection));
    }
    $query = "update books set book_name = '$_POST[book_name]', author_id = $_POST[author_id] , cat_id = $_POST[cat_id], book_price= '$_POST[book_price]' where book_no = $_GET[bn]";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        echo "<script>alert('Edit Saved successfully');
        window.location.href = 'manage_book.php';
        </script>";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
?>