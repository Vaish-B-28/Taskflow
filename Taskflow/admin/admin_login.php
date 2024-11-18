<?php
    session_start();
    include('../includes/connection.php');
    if(isset($_POST['adminLogin'])){
        $query="select email, password, name, id from admins where email='$_POST[email]' AND password='$_POST[password]'";
        $query_run=mysqli_query($connection, $query);
        if(mysqli_num_rows($query_run)){
            while($row=mysqli_fetch_assoc($query_run)){
                $_SESSION['email']=$row['email'];
                $_SESSION['name']=$row['name'];
            }
            echo "<script type='text/javascript'>
            window.location.href='admin_dashboard.php';
            </script>
            ";
        }
        else{
            echo "<script type='text/javascript'>
            alert('Invalid Login credentials');
            window.location.href='admin_login.php';
            </script>
            ";
        }
     }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User Login</title>
        <script src="../includes/jquery_latest.js"></script>
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet"  href="../css/styles.css">
        <style>
        /* Additional styling */
        body {
            background-color: #f0f4f8;
            padding: 0;
            margin: 0;
            font-family: 'Arial', sans-serif;
            color: #333;
        }
        .title {
            text-align: center;
            font-family: 'Pacifico', cursive;
            font-size: 48px;
            color: #fff;
            background-color: #4a69bd;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        #home_page {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 40px;
            margin: 10px auto; /* Shifts the box slightly up */
            width: 90%;
            max-width: 400px;
        }
    </style>
    </head>
    <body>
        <br><br><div class="row">
            <div class="col-md-4 m-auto" id="adminlogin" >
                <center><h3>Admin Login</h3></center>
                <form action="" method="post">
                    <h5>Email</h5>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Enter email address" required>
                    </div>
                    <h5>Password</h5>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                    </div>
                    <div class="form-group">
                        <br><center><input type="submit" name="adminLogin" value="Login" class="btn btn-warning"></center>
                    </div>
                </form>
                <center><a href="../index.php"  class="btn btn-info">Back to Home</a></center>
            </div>
        </div>
    </body>
</html>