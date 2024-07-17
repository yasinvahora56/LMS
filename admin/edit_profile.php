<?php
    session_start();
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "lms");
    $name = "";
    $email = "";
    $mobile = "";
    $query = "SELECT * FROM admins where email='$_SESSION[email]'";
    $query_run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        }
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Edit Profile</title>
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
            }?></strong></span></font>
            <font style="color:white"><span><strong>Email: <?php
            if (isset($_SESSION['email'])) {
                echo $_SESSION['email'];
            }?></strong></span></font>
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
    </nav><br><br><br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="update.php" method="post">
                <div class="form-group">
                    <label>name:</lable>
                        <input type="text" class="form-control" value="<?php echo $name; ?>" name="name">
                </div>
                <div class="form-group">
                    <label>Email:</lable>
                        <input type="text" class="form-control" value="<?php echo $email; ?>" name="email">
                </div>
                <div class="form-group">
                    <label>Mobile:</lable>
                        <input type="text" class="form-control" value="<?php echo $mobile; ?>" name="mobile">
                </div>
                <button name="update" class="btn btn-secondary" type="submit">Update</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</body>

</html>