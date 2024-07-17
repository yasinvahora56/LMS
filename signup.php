<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                    <a class="nav-link" href="index.php">User Login</a>
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
                <center><h3>User Registration</h3></center>
                <form action="registration.php" method="post">
                    <div class="form-group" style=" margin-bottom: 5px";>
                        <label for="name">Full Name:</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="form-group" style=" margin-bottom: 5px";>
                        <label for="name">E-mail:</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group" style=" margin-bottom: 5px";>
                        <label for="name">Password:</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group" style=" margin-bottom: 5px";>
                        <label for="name">Mobile Number:</label>
                        <input type="text" name="mobile" class="form-control" placeholder="Mobile" required>
                    </div>
                    <div class="form-group" style=" margin-bottom: 5px";>
                        <label for="name">Address:</label>
                        <textarea rows="3" cols="40" class="form-control" name="address" placeholder="Address"></textarea>
                    </div><br>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
        </div>
        </div>
</body>

</html>