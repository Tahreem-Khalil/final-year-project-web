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
                   
                   if(isset($_POST['loginButton'])){
                   $email =$_POST['coordinator_email'];
                   $Cpassword =$_POST['coordinator_password'];
                      $sql=" SELECT `email_coordinator`, `password_coordinator` FROM  `coordinator_info` WHERE `email_coordinator`='$email' AND `password_coordinator`='$Cpassword'";
                      $res =mysqli_query($con,$sql);
                      if(mysqli_num_rows($res)===1)
                      {
                          session_start();
                          $_SESSION['email_coordinator'] = $email; 
                          $_SESSION['password_cordinator'] = $password; 
                          header('location:Dashboard.php');

                      }  
                      else {
                          session_start();
                          echo " Email OR Password Wrong";
                      }
                    }
               }
                   if(isset($_POST['signUpButton']))
               {
                   $name=$_POST['coordinator_name'];
                   $gender=$_POST['coordinator_gender'];
                   $email=$_POST['coordinator_email'];
                   $password=$_POST['coordinator_password'];
                   $conpassword=$_POST['coordinator_password2'];
                   $phoneNo=$_POST['coordinator_phone_no'];
                   $role=$_POST['coordinator_role'];
                   $cnic=$_POST['coordinator_CNIC'];
                       
                    $sql = "SELECT `email_coordinator` FROM `coordinator_info` WHERE `email_coordinator`='$email'";
                    $result = mysqli_query($con,$sql);
                    if(mysqli_num_rows($result) > 0)
                    {
                        $row=mysqli_fetch_assoc($result);
            
                            if($email == $row['email_coordinator']) {
                                $message = "email " . $row["email_coordinator"]. " already exists. \\nEnter other Email.";
                                echo "<script type='text/javascript'>alert('$message');</script>";
                        }
                    }
                    else{
                        if($password===$conpassword)
                        {
                            if(isset($_POST['signUpButton']))
                                {
                                    $sql =  "INSERT INTO `coordinator_info`(`coordinator_CNIC`, `email_coordinator`, `password_coordinator`, `coordinator_name`, `coordinator_role`,`coordinator_gender`,`coordinator_phone_no`) VALUES ('$cnic','$email','$password' ,'$name', '$role','$gender','$phoneNo')";
                                    if ($con->query($sql) === TRUE) 
                                    {
                                        /*$message = "Sign UP successfully.\\nCongrats.";
                                        echo "<script type='text/javascript'>alert('$message');</script>";*/
                                        header("location:Index.php");
                                    } 
       
                            else 
                                {
                                    $message = "Error creating record .\\nTry again.";
                                    echo "<script type='text/javascript'>alert('$message');</script>". $con->error;
                                }    
                            }
                        }
                    else
                    {
                        echo "Password does'nt match";
                    }
                        
                }
         }
?>