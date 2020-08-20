<<<<<<< HEAD
<?php 
// pulling data from the hrms db and checking weather the admin is loging in and employee is logging in 
//session_start();
	$host = 'localhost:3306';
		$user = 'root';
		$pass = '';
		$db = 'hrms';
		//Executing the connection with the db 
		$conn = mysqli_connect($host, $user, $pass, $db);
		$adminEmployee = $_POST['admin_user'];
		$row='';
		$table_row='';
		
		$sql = "SELECT sl_no, employee_name, employee_mail_id, employee_dob, employee_designation, employee_user_access, employee_img, employee_password  FROM employees_profiles WHERE employee_mail_id = '$adminEmployee' ";
			$table_row = mysqli_query($conn,$sql);
			$row = $table_row->fetch_assoc();
			if($row['employee_user_access'] ==='Admin' && $_POST['admin_password']===$row['employee_password']){
						/*echo "<span class='bg-success p-2 ml-5 text-white'> correct credentials </span>";*/
						header('location: admin_submission.php');
			}else{	
				?>
					<span class="bg-danger p-2 ml-5 text-white"> Plese Provide the correct credentials </span>
				<?php
			}
			

		mysqli_close($conn);
 ?>
=======
<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
 do you understand?
</body>
</html>
>>>>>>> 3bcd881f7ba7176c56abb44aa746339241e1bbc0
