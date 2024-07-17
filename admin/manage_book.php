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
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <table class="table table-bordered table-hover" style="width: 100%; text-align:center" ;>
                <thead>
                    <tr>
                        <th style="background-color:#343A40; color:azure">Name</th>
                        <th style="background-color:#343A40; color:azure">Author</th>
                        <th style="background-color:#343A40; color:azure">Category</th>
                        <th style="background-color:#343A40; color:azure">Number</th>
                        <th style="background-color:#343A40; color:azure">Price</th>
                        <th style="background-color:#343A40; color:azure">Action</th>
                    </tr>
                </thead>
                <?php
                $connection = mysqli_connect("localhost", "root", "");
                $db = mysqli_select_db($connection, "lms");
                $query = "select * from books";
                $query_run = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($query_run)) {
                ?>
                    <tr style="background-color:#e3f2fd" ;>
                        <td style="font-family:verdana"><?php echo $row['book_name'] ?></td>
                        <td style="font-family:verdana"><?php echo $row['author_id'] ?></td>
                        <td style="font-family:verdana"><?php echo $row['cat_id'] ?></td>
                        <td style="font-family:verdana"><?php echo $row['book_no'] ?></td>
                        <td style="font-family:verdana"><?php echo $row['book_price'] ?></td>
                        <td style="text-align:left; width: 25%" ;>
                            <button class="btn btn-dark" ><a href="edit_book.php?bn=<?php echo $row['book_no'];?>" style="color:aliceblue";>Edit</a></button>
                            <button class="btn btn-dark" herf="delete.php"><a href="delete_book.php?bn=<?php echo $row['book_no'];?>" style="color:aliceblue";>Delete</a></button>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>
</body>

</html>