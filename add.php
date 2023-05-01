<?php

    include("connection.php");
    if(isset($_POST['submit']))
    {
        $name = mysqli_real_escape_string($con,$_POST['name']);
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $short = mysqli_real_escape_string($con,$_POST['short']);
        $feat = mysqli_real_escape_string($con,$_POST['feat']);
        $class = mysqli_real_escape_string($con,$_POST['class']);
        $pdf = mysqli_real_escape_string($con,$_POST['pdf']);
        
        $hash = "#";
        $mod = "portfolioModal";
        $modalid = $mod.$id;
        $modal = $hash.$modalid;


        $img_name = $_FILES["img"]["name"]; // get the name of the uploaded image file
        $img_tmp_name = $_FILES["img"]["tmp_name"]; // get the temporary name of the uploaded image file

        // Define the target directory for the uploaded image
        $target_dir = "assets/img/products/";
        $target_file = $target_dir . basename($img_name); // create the full path of the target file

        move_uploaded_file($img_tmp_name, $target_file);

        $sql = "insert into prod_tab (name,short,class,img,feat,pdf,id,modal,modid) values ('$name', '$short', '$class', '$img_name','$feat','$pdf','$id','$modal','$modalid')";

        if ($con->query($sql) === TRUE) {
            header('Location: http://localhost/NextTech/manage_pro.php');
          } else {
            echo "Error: " . $sql . "<br>" . $con->error;
          }
        // if(mysqli_query($con,$sql)){
		// 	echo "Data inserted...";
        //     header('Location: http://localhost/NextTech/manage_pro.php');
		
		// }else {
		// 	echo "Data not inserted...!!!";
		// }

    
    }