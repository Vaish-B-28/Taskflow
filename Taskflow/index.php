<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taskflow</title>
    <script src="includes/jquery_latest.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
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
            background-color:#6c5ce7;
            padding: 20px;
            margin: 0px 0;
            border-radius: 0px;
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
    <!-- Import Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
    <div class="title">Taskflow</div>
    <br><div class="row">
        <div class="col-md-4 m-auto" id="home_page">
            <center><h3>LOGIN ROLES</h3></center><br><br>
            <center><a href="user_login.php" class="btn btn-success">User</a></center><br>
            <center><a href="admin/admin_login.php" class="btn btn-info">Admin</a></center><br>
            <center><a href="register.php" class="btn btn-warning">New Registration</a></center><br>
        </div>
    </div>
</body>
</html>
