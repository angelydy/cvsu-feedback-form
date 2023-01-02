<?php 
ob_start(); 
require 'config.php';

$f1 = $_POST['f1'];
$f2 = $_POST['f2'];
$f3 = $_POST['f3'];
$f4 = $_POST['f4'];
$f5 = $_POST['f5'];
$name = $_POST['name'];
$comments = $_POST['comments'];
$email = $_POST['email'];
$stu_num = $_POST['stu_num'];
$purpose_of_visit = $_POST['purpose_of_visit'];
$date_of_visit = $_POST['date_of_visit'];
$attending_staff = $_POST['attending_staff'];



$query = mysqli_query($con, "INSERT INTO `poll`(`id`, `name`, `email`, `stu_num`, `purpose_of_visit`,  `date_of_visit`, `attending_staff`, `f1`, `f2`, `f3`, `f4`, `f5`, `suggestions`) VALUES ('','$name','$email','$stu_num', '$purpose_of_visit', '$date_of_visit', '$attending_staff', '$f1', '$f2', '$f3', '$f4', '$f5', '$comments')");
echo '<script>alert("Thank you, Kabsuhenyo! Your feedback has reached us."); location.replace(document.referrer);</script>';



/*$query1 = "SELECT * FROM `staff` WHERE email = '$email' AND password = '$password'";
$result_query1 = mysqli_query($conn, $query1);
$count_query1 = mysqli_num_rows($result_query1);
/*if ($count_query1 != 0) 
	{
    header("Location: controller/staff.php");
	exit();
	} 
else {
		    $query2 = "SELECT * FROM `admin` WHERE email = '$email' AND password = '$password'";
			$result_query2 = mysqli_query($conn, $query2);
			$count_query2 = mysqli_num_rows($result_query2);
			$count_query2 = mysqli_num_rows($result_query2);
			if ($count_query2!=0) 
			{
		   		header("Location: controller/admin.php");
				exit();
		   	} 		
		   	else
		   	 {
		   	 	echo '<script>alert("Incorrect Credentials Entered"); location.replace(document.referrer);</script>';

			 }

	}

//echo $email;
//echo '</br>';
//echo $password;



ob_end_flush();*/
?>