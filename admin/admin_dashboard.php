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
    <h1 class="text-center" style="color:#343A40";>Admin Dashboard</h1><br><br>
    <div class="row" style="margin-left:70px; margin-top:30px";>
        <div class="col-md-3">
            <div class="bg-light" style="width:280px";>
                <div class="card-header" style="background-color:#e3f2fd"><b>Register Users:</b></div>
                <div class="card-body" style="background-color:#e3f2fd">
                    <p class="Card-text">No. Of Total Users: <?php echo get_user_count(); ?></p>
                    <a href="regusers.php" class="btn btn-secondary" style="background-color:#343A40">View Registerd Users</a>
                </div>
            </div>
        </div>
        <div class="col-md-3" >
            <div class="bg-light" style="width:280px">
                <div class="card-header" style="background-color:#e3f2fd"><b>Register Books:</b></div>
                <div class="card-body" style="background-color:#e3f2fd">
                    <p class="Card-text">No. Of Available Books:<?php echo get_book_count(); ?></p>
                    <a href="regbooks.php" class="btn btn-secondary" style="background-color:#343A40">View Registerd Books</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="bg-light" style="width:280px">
                <div class="card-header" style="background-color:#e3f2fd"><b>Register Gategorys:</b></div>
                <div class="card-body" style="background-color:#e3f2fd">
                    <p class="Card-text">No. Of Book's Categorys:<?php echo get_category_count(); ?></p>
                    <a href="regcategory.php" class="btn btn-secondary" style="background-color:#343A40">View Category</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="bg-light" style="width:280px">
                <div class="card-header" style="background-color:#e3f2fd"><b>Register authors:</b></div>
                <div class="card-body" style="background-color:#e3f2fd">
                    <p class="Card-text">No. Of Authers: <?php echo get_authors_count(); ?></p>
                    <a href="regauthors.php" class="btn btn-secondary" style="background-color:#343A40">View Authers</a>
                </div>
            </div>
        </div>
        </div>
        <div class="row" style="margin-top:45px; margin-left:70px";>
        <div class="col-md-3">
            <div class="bg-light" style="width:280px">
                <div class="card-header" style="background-color:#e3f2fd"><b>Issued Books:</b></div>
                <div class="card-body" style="background-color:#e3f2fd">
                    <p class="Card-text">No. Of Issued Books : <?php echo get_issued_book_count(); ?></p>
                    <a href="view_issued_book.php" class="btn btn-secondary" style="background-color:#343A40">View Issued Books</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>