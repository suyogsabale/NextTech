<?php
include('connection.php');

   $id = $_GET['i'];
    $query = "delete  from prod_tab WHERE id = '$id'" ;

    $data = mysqli_query($con,$query);
    
    if($data) {

        echo "<span></span>";
        ?>
        
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/NextTech/manage_pro.php">
        <?php
    }
    else {
        echo "<font color='red'>Failed to delete!";
    }

?>