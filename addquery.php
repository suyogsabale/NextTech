<?php
                
    include('connection.php');
    if(isset($_POST['submit']))
    {
                // $qname=$_POST['qname'];
                // $qemail =$_POST['qemail'];
                // $qtel =$_POST['qtel'];
                // $prodid =$_POST['prodid'];
                // $prodnm =$_POST['prodnm'];
                // $loc =$_POST['loc'];
                // $qty =$_POST['qty'];


                $qname=mysqli_real_escape_string($con,$_POST['qname']);
                $qemail =mysqli_real_escape_string($con,$_POST['qemail']);
                $qtel =mysqli_real_escape_string($con,$_POST['qtel']);
                $prodid =mysqli_real_escape_string($con,$_POST['prodid']);
                $prodnm =mysqli_real_escape_string($con,$_POST['prodnm']);
                $loc =mysqli_real_escape_string($con,$_POST['loc']);
                $qty =mysqli_real_escape_string($con,$_POST['qty']);

                console.log($qname);

                $sql = "insert into query_tab (name,email,telp,prodid,prodname,location,qty) values ('$qname', '$qemail', '$qtel', '$prodid','$prodnm','$loc','$qty')";
                
                // if ($con->query($sql) === TRUE) {
                //     header('Location: http://localhost/NextTech/login.php');
                // } else {
                //      echo "Error: " . $sql . "<br>" . $con->error;
                // }

                    if(mysqli_query($con,$sql)){
			            echo "Data inserted...";
                        header('Location: http://localhost/NextTech/manage_pro.php');
		
		            }else {
		            	echo "Data not inserted...!!!";
	                	}

    }

            
            ?>
