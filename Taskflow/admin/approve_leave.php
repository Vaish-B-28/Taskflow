<?php
    include('../includes/connection.php');
    $query="update leaves set status='Approved' where lid=$_GET[id]";
    $query_run=mysqli_query($connection, $query);
    if($query_run){
        echo "<script type='text/javascript'>
        alert('Leave approved successfully');
        window.location.href='admin_dashboard.php';
        </script>
        ";
    }
    else{
        echo "<script type='text/javascript'>
        alert('Failed to approve leave');
        window.location.href='admin_dashboard.php';
        </script>
        ";
    }
?>