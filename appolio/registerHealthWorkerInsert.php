<?php 

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="appolio";

     $con = mysqli_connect($servername, $username, $password, $dbname);
    if(!$con)
    	{
                   die("Connection Failed" .$con->connect_error);
               }
               else 
               {
                   
               
       
                   if(isset($_POST['RegisterButton']))
                   {
                    $health_worker_CNIC =$_POST['health_worker_CNIC'];
                   $health_worker_email=$_POST['health_worker_email'];
                   $health_worker_password =$_POST['health_worker_password'];
                   $Health_Worker_Name =$_POST['Health_Worker_Name'];
                   $Health_Worker_Phone_no =$_POST['Health_Worker_Phone_no'];
                   $EPI_Center =$_POST['EPI_Center']; 
                   $health_worker_gender =$_POST['health_worker_gender'];
                   
                   
                 $sql= "INSERT INTO `health worker data`(`health_worker_CNIC`, `health_worker_email`, `health_worker_password`, `Health_Worker_Name`, `Health_Worker_Phone_no`, `EPI_Center`, `health_worker_gender`) VALUES ('$health_worker_CNIC ','$health_worker_email','$health_worker_password' ,'$Health_Worker_Name', '$Health_Worker_Phone_no','$EPI_Center','$health_worker_gender')";
                   
                      if ($con->query($sql) === TRUE) 
                           {
                               $message = "Health Worker Registered successfully.\\nCongrats.";
                               echo "<script type='text/javascript'>alert('$message');</script>";
                           }   
                      else 
                      {
                          echo "<script>alert('There is something wrong while filling the form..!')</script>";
                      }
                    
                   }
                   

               }

                if(isset($_POST['DeleteButton']))
                   {
                   		 $health_worker_CNIC =$_POST['health_worker_CNIC'];

                   		 $sql= "DELETE FROM `health worker data` WHERE `health_worker_CNIC`= $health_worker_CNIC";
                   
                      if ($con->query($sql) === TRUE) 
                           {
                               $message = "Health Worker record deleted successfully.\\nCongrats.";
                               echo "<script type='text/javascript'>alert('$message');</script>";
                           }   
                      else 
                      {
                          echo "<script>alert('health worker is not deleted..!')</script>";
                      }


                   }

                   if(isset($_POST['UpdateButton']))
                   {
		                   $health_worker_CNIC =$_POST['health_worker_CNIC'];
		                   $health_worker_email=$_POST['health_worker_email'];
		                   $health_worker_password =$_POST['health_worker_password'];
		                   $Health_Worker_Name =$_POST['Health_Worker_Name'];
		                   $Health_Worker_Phone_no =$_POST['Health_Worker_Phone_no'];
		                   $EPI_Center =$_POST['EPI_Center']; 
		                   $health_worker_gender =$_POST['health_worker_gender'];

                   		 $sql="UPDATE `health worker data` SET health_worker_CNIC='$health_worker_CNIC', health_worker_email='$health_worker_email', health_worker_password='$health_worker_password', Health_Worker_Name='$Health_Worker_Name', Health_Worker_Phone_no='$Health_Worker_Phone_no', EPI_Center='$EPI_Center', health_worker_gender='$health_worker_gender'  WHERE health_worker_CNIC='$health_worker_CNIC'";
                   
                      if ($con->query($sql) === TRUE) 
                           {
                               $message = "Health Worker record updated successfully.\\nCongrats.";
                               echo "<script type='text/javascript'>alert('$message');</script>";
                           }   
                      else 
                      {
                          echo "<script>alert('health worker is not updated..!')</script>";
                      }


                   }
?>