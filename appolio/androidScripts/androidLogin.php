<?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="appolio";
        $con=mysqli_connect($servername,$username,$password,$dbname);

		$email = $_POST["hw_email"];
		$password = $_POST["hw_password"];

		$sql=" SELECT `health_worker_email`, `health_worker_password` FROM  `health worker data` WHERE `health_worker_email`='$email' AND `health_worker_password`='$password'";
		$result = mysqli_query($con,$sql);
		
		if($result->num_rows > 0){
			echo "logged in successfully" ;
		}else{
  			 echo "user not found";
}
?>