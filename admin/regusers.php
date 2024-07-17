<?php
    require('functions.php');
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lms");
    $name="";
    $email="";
    $mobile="";
    $address="";
    $password="";

    $query = "select * from users";
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
            <form action="">
                <table class="table-bordered" width="900px" style="text-align: center";>
                    <tr>
                        <th style="background-color:#343A40";><font style="color:white";>Name:</font></th>
                        <th style="background-color:#343A40";><font style="color:white";>Email:</font></th>
                        <th style="background-color:#343A40";><font style="color:white";>Mobile:</font></th>
                        <th style="background-color:#343A40";><font style="color:white";>Address:</font></th>
                    </tr>
                    <?php
                    $query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) {
                        $name=$row['name'];
                        $email=$row['email'];
                        $mobile=$row['mobile'];
                        $address=$row['address'];
                    ?>
                        <tr>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $mobile; ?></td>
                            <td><?php echo $address; ?></td>
                        </tr>
                        <?php

                    }
                    ?>
                    </table>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</body>

</html>