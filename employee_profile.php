<!DOCTYPE html>
<html>
<head>
	<title> Employee Profile </title>
			<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
// pulling data from the hrms db and checking weather the admin is loging in and employee is logging in 
//session_start();
	$host = 'localhost:3306';
		$user = 'root';
		$pass = '';
		$db = 'hrms';
		//Executing the connection with the db 
		$conn = mysqli_connect($host, $user, $pass, $db);
		$employeeMail = $_POST['employee_user'];
		$row='';
		$table_row='';
		$adminName ='';
		
		$sql = "SELECT sl_no, employee_name, employee_mail_id, employee_dob, employee_designation, employee_user_access, employee_img, employee_password  FROM employees_profiles WHERE employee_mail_id = '$employeeMail' ";
			$table_row = mysqli_query($conn,$sql);
			$row = $table_row->fetch_assoc();
			if($row['employee_user_access'] ==='Employee' && $_POST['employee_password']===$row['employee_password']){
						/*echo "<span class='bg-success p-2 ml-5 text-white'> correct credentials </span>";*/
						$employeeName = $row['employee_name'];
			}else{
				header('location: error.php');	
				
			}
			

		mysqli_close($conn);
 ?>
 	<!--  this divisor will show admins profile name and picture  -->
 	<div class="jumbotron w-100 rounded border border-warning p-5 m-0">
 		<table style="border-spacing: 5rem">	
	 		<tr>	
	 			<td class="	text-align-center">

	 				<img src="<?= "employeeImages/".$row['employee_img']?>" width="360px" height="360px" style="border-radius: 50%">	

	 			</td>
	 			<td> 
	 			<span>      </span>	
	 			</td>
	 			<td>		
	 				<h1>Hello, <?= $employeeName;?></h1>
	 			</td>
	 		</tr>
 		</table>
 	</div>



</body>
</html>