<?php
    session_start();
    if(isset($_SESSION['email'])){
    include('includes/connection.php');
    if(isset($_POST['submit_leave'])){
         $query = "INSERT INTO leaves VALUES (NULL, {$_SESSION['uid']}, '{$_POST['subject']}', '{$_POST['message']}', 'No Action')";
         $query_run= mysqli_query($connection, $query);
        if($query_run){
            echo "<script type='text/javascript'>
            alert('Leave applied successfully');
            window.location.href='user_dashboard.php';
            </script>
            ";
        }
        else{
            echo "<script type='text/javascript'>
            alert('Failed to apply leave');
            window.location.href='user_dashboard.php';
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
   <title>Task Management Application</title>
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
       
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#manage_task").click(function(event){
                event.preventDefault(); // Prevent default behavior
                console.log("Button clicked, loading content...");
                $("#right_sidebar").load("task.php", function(response, status, xhr) {
                    if (status == "error") {
                        var msg = "Sorry but there was an error: ";
                        $("#right_sidebar").html(msg + xhr.status + " " + xhr.statusText);
                    } else {
                        console.log("Content loaded successfully");
                    }
                });
            });

            $("#apply_leave").click(function(event){
                event.preventDefault(); // Prevent default behavior
                console.log("Button clicked, loading content...");
                $("#right_sidebar").load("leaveform.php", function(response, status, xhr) {
                    if (status == "error") {
                        var msg = "Sorry but there was an error: ";
                        $("#right_sidebar").html(msg + xhr.status + " " + xhr.statusText);
                    } else {
                        console.log("Content loaded successfully");
                    }
                });
            });

            $("#leave_status").click(function(event){
                event.preventDefault(); // Prevent default behavior
                console.log("Button clicked, loading content...");
                $("#right_sidebar").load("leave_status.php", function(response, status, xhr) {
                    if (status == "error") {
                        var msg = "Sorry but there was an error: ";
                        $("#right_sidebar").html(msg + xhr.status + " " + xhr.statusText);
                    } else {
                        console.log("Content loaded successfully");
                    }
                });
            });
        });
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
    <div class="row" id="header">
        <div class="col-md-12">
            <div class="col-md-4" style="display: inline-block;">
                <h2 class="title">Taskflow</h2>
            </div>
            <div class="col-md-6" style="display: inline-block;text-align: right">
                <b style="color: #fff;">Email: </b> <?php echo  $_SESSION['email'];?> 
                <span style="margin-left: 25px;"><b style="color: #fff;">Name: </b><?php echo  $_SESSION['name'];?></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2" id="left_sidebar">
            <table class="table">
                <tr>
                    <td style="text-align: center;">
                       <a href="user_dashboard.php" type="button" id="logout_link">Dashboard</a> 
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                       <a href="#" type="button" class ="link" id="manage_task">My Tasks</a> 
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                       <a href="#" type="button" class ="link" id="apply_leave">Apply Leave</a> 
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                       <a href="#" type="button" class ="link" id="leave_status">Leave Status</a> 
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                       <a href="logout.php" type="button" id="logout_link">Logout</a> 
                    </td>
                </tr>
            </table>

        </div>
        <div class="col-md-10" id="right_sidebar">
            <h4>IMPORTANT INSTRUCTIONS</h4>
            <ul style="line-height: 3em; font-size: 1.2em;">
                <li>It is necessary for users to complete assigned tasks within the due date.</li>
                <li>Mark tasks as complete once you finish them. This helps you keep track of your progress and stay motivated.</li>
                <li>Make it a habit to check your to-do app daily and update it with new tasks or changes.</li>
                <li>Provide genuine reasons when applying for leave requests.</li>
            </ul>
            <div class="chatbot-container"> 
               <iframe id="embed-preview-iframe" loading="eager" src="https://embed.pickaxeproject.com/axe?id=Memo_JY07C&mode=embed_gold&host=beta&theme=light&opacity=100&font_header=Real+Head+Pro&size_header=30&font_body=Real+Head+Pro&size_body=16&font_labels=Real+Head+Pro&size_labels=14&font_button=Real+Head+Pro&size_button=16&c_fb=FFFFFF&c_ff=FFFFFF&c_fbd=888888&c_rb=FFFFFF&c_bb=228DD7&c_bt=FFFFFF&c_t=000000&s_ffo=100&s_rbo=100&s_bbo=100&s_f=minimalist&s_b=filled&s_t=1&s_to=1&s_r=2" width="100%" height="300px" class="transition hover:translate-y-[-2px] hover:shadow-[0_6px_20px_0px_rgba(0,0,0,0.15)]" style="border:1px solid rgba(0, 0, 0, 1);transition:.3s;border-radius:4px;max-width:700px" frameBorder="0"></iframe>
            </div>
        </div>
    </div>
</body>
</html>
<?php } else { header ('Location:user_login.php'); } ?>
