<?php
    include('../includes/connection.php');
    $query="update leaves set status='Rejected' where lid=$_GET[id]";
    $query_run=mysqli_query($connection, $query);
    if($query_run){
        echo "<script type='text/javascript'>
        alert('Leave rejected successfully');
        window.location.href='admin_dashboard.php';
        </script>
        ";
    }
    else{
        echo "<script type='text/javascript'>
        alert('Failed to reject leave');
        window.location.href='admin_dashboard.php';
        </script>
        ";
    }
?>