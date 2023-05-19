<?php
                
    include('connection.php');
    if(isset($_POST['submit']))
    {
             


                $qname=mysqli_real_escape_string($con,$_POST['qname']);
                $qemail =mysqli_real_escape_string($con,$_POST['qemail']);
                $qtel =mysqli_real_escape_string($con,$_POST['qtel']);
                $prodid =mysqli_real_escape_string($con,$_POST['prodid']);
                $prodnm =mysqli_real_escape_string($con,$_POST['prodnm']);
                $loc =mysqli_real_escape_string($con,$_POST['loc']);
                $qty =mysqli_real_escape_string($con,$_POST['qty']);

                console.log($qname);

                $sql = "insert into query_tab (name,email,telp,prodid,prodname,location,qty) values ('$qname', '$qemail', '$qtel', '$prodid','$prodnm','$loc','$qty')";
                

                    if(mysqli_query($con,$sql)){
			            echo "Data inserted...";
                        header('Location: http://localhost/NextTech/manage_pro.php');
		
		            }else {
		            	echo "Data not inserted...!!!";
	                	}

    }

            
            ?>
