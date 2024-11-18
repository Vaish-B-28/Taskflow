<?php
    include('includes/connection.php');
    if(isset($_POST['userRegistration'])){
        $query=" insert into users values(null, '$_POST[name]', $_POST[mobile], '$_POST[email]', '$_POST[password]')";
        $query_run= mysqli_query($connection, $query);
        if($query_run){
            echo "<script type='text/javascript'>
            alert('User registered successfully');
            window.location.href='index.php';
            </script>
            ";
        }
        else{
            echo "<script type='text/javascript'
            alert('Error..Try again');
            window.location.href='register.php';
            </script>
            ";

        }
     }
?>
<?php
    include('includes/connection.php');
    if(isset($_POST['adminRegistration'])){
        $query=" insert into admins values(null, '$_POST[name]', $_POST[mobile], '$_POST[email]', '$_POST[password]')";
        $query_run= mysqli_query($connection, $query);
        if($query_run){
            echo "<script type='text/javascript'>
            alert('Admin registered successfully');
            window.location.href='index.php';
            </script>
            ";
        }
        else{
            echo "<script type='text/javascript'
            alert('Error..Try again');
            window.location.href='register.php';
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
        <title>Registration</title>
        <script src="includes/jquery_latest.js"></script>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
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
        <div class="row">
            <br><br><div class="col-md-4 m-auto" id="register" >
                <center><h3>User Registration</h3></center>
                <form action="" method="post">
                    <h5>Name</h5>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Enter full name" required>
                    </div>
                    <h5>Mobile Number</h5>
                    <div class="form-group">
                        <input type="text" name="mobile" class="form-control" placeholder="Enter mobile number" required>
                    </div>
                    <h5>Email</h5>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Enter email address" required>
                    </div>
                    <h5>Password</h5>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                    </div>
                    <div class="form-group">
                        <br><center><input type="submit" name="userRegistration" value="Register" class="btn btn-warning"></center>
                    </div>
                    <div class="form-group">
                        <center><input type="submit" name="adminRegistration" value="Register as Admin" class="btn btn-warning"></center>
                    </div>
                </form>
                <center><a href="index.php"  class="btn btn-info">Back to Home</a></center>
            </div>
        </div>
    </body>
</html>