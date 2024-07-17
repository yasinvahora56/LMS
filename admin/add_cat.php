<?php
    require('functions.php');
    session_start();
    $cat_name = '';
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
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="add_cat.php" method="post">
        <div class="form-group">
                <label for="cat_name">Category Name</label>
                <input type="text" class="form-control" id="cat_name" name="cat_name" value="<?php echo ($cat_name); ?>" required>
            </div>
        <button type="submit" class="btn btn-primary" name="add_cat">Add Category</button>
        </form>
    </div>
    <div class="col-md-4"></div>
    </div>
</body>
</html>
<?php

if (isset($_POST['add_cat'])) {
    $connection = mysqli_connect("localhost", "root", "");
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $db = mysqli_select_db($connection, "lms");
    if (!$db) {
        die("Database selection failed: " . mysqli_error($connection));
    }

    // Prepare statement to prevent SQL injection
    $add_cat = mysqli_real_escape_string($connection, $_POST['cat_name']);
    $query = "INSERT INTO category (cat_name) VALUES ('$add_cat')";

    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        echo "<script>alert('Category added successfully');</script>";
        $add_cat = ''; // Clear the variable after successful insert
    } else {
        echo "Error: " . mysqli_error($connection);
    }

    mysqli_close($connection);
}
?>