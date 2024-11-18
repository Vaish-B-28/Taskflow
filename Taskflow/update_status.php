<?php 
     include('includes/connection.php');
     if(isset($_POST['update'])){
        $query="update tasks set status='$_POST[status]' where tid=$_GET[id]" ;
        $query_run= mysqli_query($connection, $query);
        if($query_run)
        {
            echo "<script type='text/javascript'>
            alert('Status edited successfully');
            window.location.href='user_dashboard.php';
            </script>
            ";
        }
        else{
            echo "<script type='text/javascript'>
            alert('Failed to edit status');
            window.location.href='user_dashboard.php';
            </script>
            ";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taskflow</title>
    <script src="includes/jquery_latest.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <style>
        /* Additional styling for chatbot */
        .chatbot-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }
        body {
            background-color: #f0f4f8;
            padding: 0;
            margin: 0;
            font-family: 'Arial', sans-serif;
            color: #333;
        }
        .title {
            
            font-family: 'Pacifico', cursive;
            font-size: 36px;
            color: #fff;
            background-color:#6c5ce7;
            padding: 0px;
            padding-bottom: 2px;
            margin: 0px 0;
            border-radius: 0px;
            
        }
        #home_page {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 40px;
            margin: 10px auto; /* Shifts the box slightly up */
            width: 90%;
            max-width: 400px;
            .title {
            
            font-family: 'Pacifico', cursive;
            font-size: 40px;
            color: #fff;
            background-color:#6c5ce7;
            padding: 5px;
            margin: 5px 0;
            border-radius: 2px;
            
        }
        body {
            background-color: #f0f4f8;
            padding: 0;
            margin: 0;
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        #home_page, #login, #register, #adminlogin {
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 40px;
            margin: 20px auto;
            width: 90%;
            max-width: 400px;
        }

        #header {
            background-color:#6c5ce7;
            color: white;
            height: 60px;
            display: flex;
            align-items: center;
            padding: 0 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        #header h2 {
            font-family: 'Pacifico', cursive;
            color: #ffffff;
            margin: 0;
        }

        #logout_link {
            text-decoration: none;
            color: white;
            background-color: #6c5ce7;
            padding: 8px 16px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        #logout_link:hover {
            background-color: #a29bfe;
        }

        #left_sidebar {
            background-color: #f7f9fc;
            padding: 20px;
            height: 100vh;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        #left_sidebar table {
            width: 100%;
            border-spacing: 0;
        }

        #left_sidebar table tr {
            background-color: #6c5ce7;
            color: white;
            font-size: 16px;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        #left_sidebar table tr:hover {
            background-color: #dcdde1;
            color: #4a69bd;
        }

        .link {
            text-decoration: none;
            color: white;
            display: block;
            padding: 10px 0;
            transition: color 0.3s ease;
        }

        .link:hover {
            color: #4a69bd;
        }

        #right_sidebar {
            padding: 40px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        #right_sidebar h4 {
            color: #4a69bd;
        }

        #right_sidebar ul {
            list-style-type: disc;
            margin: 20px 0;
            padding-left: 20px;
        }

        #right_sidebar ul li {
            margin-bottom: 10px;
        }
       
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
<div class="row" id="header">
        <div class="col-md-12">

            <h2 class="title">Taskflow</h2>

        </div>
    </div>
    <div class="row">
        <div class="col-md-4 m-auto" style="color: white;">
            <br><h3 style="color:#333">
                Update Task</h3>
            <?php 
                include('includes/connection.php');
                $query= "select * from tasks where tid=$_GET[id]";
                $query_run= mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($query_run)){

                
            ?>
            <form action="" method="post">
                <div class="form-group">
                    <input type="hidden" name="id" value="" required>
                </div>
                <div class="form-group">
                     <select class="form-control" name="status">
                        <option>-Select-</option>
                        <option>In Progress</option>
                        <option>Completed</option>
                     </select>   
                </div>
               
                <input type="submit" class="btn btn-warning" name="update" value="Update" required>
            </form>
            <?php
                }
                ?>
        </div>
    </div>
</body>
</html>