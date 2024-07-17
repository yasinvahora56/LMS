<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library Management System</title>
    <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
                <style>       
                #side_bar{
                background-color: whitesmoke;
                padding:50px;
                width:300px;
                height:450px;
            }
        </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Library Management System (LMS)</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="admin/aindex.php">Admin Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">Register</a>
                </li>
            </ul>
        </div>
     </nav><br><br>
        <div class="row">
            <div class="col-md-4" id="side_bar">
                <h5>Library Timing</h5>
                <ul>
                    <li>Opening Timing 8:00 pm</li>
                    <li>Closing Timing 8:00 pm</li>
                    <li>Sunday Off</li>
                </ul>
                <h5>What we provide</h5>
                <ul>
                    <li>Thousands of books</li>
                    <li>Full Furniture</li>
                    <li>Wi-fi Connection</li>
                    <li>News papper</li>
                    <li>Discussion Room</li>
                    <li>Row Water</li>
                    <li>Peacefull Environment</li>
                </ul>
            </div>
            <div class="col-md-8" id="main_content">
                <center><h3>User Login Form</h3></center>
                <form action="" method="post">
                    <div class="form-group" style=" margin-bottom: 15px";>
                        <label for="name">E-mail:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Password:</label>
                        <input type="password" name="password" class="form-control" required>
                    </div><br>
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                </form>
                <?php 
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"lms");
					$query = "select * from users where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) {
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] =  $row['name'];
								$_SESSION['email'] =  $row['email'];
								$_SESSION['id'] =  $row['id'];
								header("Location: user_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password !!</span></center>
								<?php
							}
						}
					}
				}
			?>
        </div>
        </div>
</body>

</html>