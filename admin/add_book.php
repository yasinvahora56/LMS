<?php
require('functions.php');
session_start();
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
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
        <form action="" method="post">
        <div class="form-group">
            <label for="">Book Name</label>
            <input type="text" name="book_name" class="form-control" required> 
        </div>
        <div class="form-group">
            <label for="">Book Author name</label>
            <input type="text" name="book_author" class="form-control" required> 
        </div>
        <div class="form-group">
            <label for="">Category name</label>
            <input type="text" name="book_cat" class="form-control" required> 
        </div>
        <div class="form-group">
            <label for="">Book No</label>
            <input type="text" name="book_no" class="form-control" required> 
        </div>
        <div class="form-group">
            <label for="">Book Price</label>
            <input type="text" name="book_price" class="form-control" required> 
        </div>
    <button class="btn btn-primary" name="add_book" value="add_book">Add book</button>
    </form>
    </div>
    </div>
    <div class="col-md-4"></div>
</body>
</html>
<?php
    if(isset($_POST['add_book'])){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lms");
    $query = "INSERT INTO books VALUES('','$_POST[book_name]',$_POST[book_author],$_POST[book_cat],$_POST[book_no],$_POST[book_price])";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        echo "<script>alert ('Book Added Succefully')</script>";
    }
    else{
        echo "Error: " . mysqli_error($connection);
    }
    }
?>