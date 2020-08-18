<!DOCTYPE html>
<html>
<head>
	<title>	ADMIN's PROFILE</title>
		<!-- CDN for BootStrap  -->
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  

  	<link rel="stylesheet" type="text/css" href="styles2.css">
  	<style>
  		span : hover{
  			background-color: hotpink ;
  		}
  	</style>
</head>
<body>
		<?php 	
			if (isset($_POST['submit'])) {

				echo "User Name is :".$_POST['admin_user'];	
				echo "User password is :".$_POST['admin_password'];	
			}
			else{
				echo " hey Piggie, how are you ?";
			}
		 ?>

		 	<div class="jumbotron w-100 rounded border border-warning p-5 m-0">
		 		<table>	
			 		<tr>	
			 			<td class="	text-align-center">
			 				<img src="user_avatar.png" width="360px" height="200px">	
			 			</td>
			 			<td>			
			 				<h1>Hello, <?= $_POST['admin_user'];?></h1>
			 			</td>
			 		</tr>
		 		</table>
		 	</div>
		 	<div class="container-fluid row justify-content-around  " >	
		 			<div>	
		 				<span  id="createAdminSnippet" onclick="createAdmin()" class="bg-warning rounded p-3 m-2 "><a class="text-dark" ><b>	CREATE ADMIN</b></a></span>
		 			</div>
		 			<div>	
		 				<span id="createAdminSnippet" onclick="createAdmin()"  class="bg-warning rounded p-3 m-2"><a class="text-dark" ><b>	CREATE EMPLOYEE</b></a></span>
		 			</div>
		 			<div>	
		 				<span id="createAdminSnippet" onclick="createAdmin()" class="bg-warning rounded p-3 m-2"><a class="text-dark"><b>	ATTENDENCE RECORD</b></a>	</span>
		 			</div>
		 	</div>
		 	<!-- divisor for creating admin  -->
		 	 <div id="createAdminDiv" class="jumbotron w-100 rounded border border-warning p-5 m-0 text-align-center justify-content-center" style="display: none">
		 	 		<h3 class="text-seccondary"> You can create administrator Here  </h3>
		 	 	<div class="d-flex justify-content-center text-align-center bg-warning w-25 p-5" style="opacity: 0.7">
		 	 		
		 	 		<form action="" method="post">
						<label class="text-strong">ADMINISTRATOR USER NAME : </label><br>
						<input required type="text" name="newAdminUser" id="newAdminUser"><br>
						<label>NEW PASSWORD : </label><br>
						<input required type="password" name="newAdminPassword1" id="newAdminPassword1"><br>
						<label> RE-ENTER PASSWORD : </label><br>
						<input required type="password" name="newAdminPassword2" id="newAdminPassword2"><br>	
						<span class=""><input type="submit" name="createNewAdmin" id="createNewAdmin"></span> 	 		
		 	 		</form>
		 	 	</div>
		 	 </div>
		 	 <!-- divisor for creating Employee  -->
		 	 <div>
		 	 	
		 	 </div>
 			



		 	<!-- all Scripts  -->  

		 	<script type="text/javascript">
		 		//script for creating admin 

		 		function createAdmin() {

		 			var flag = document.getElementById('createAdminDiv');
		 			flag.style.disply='none';
		 			if(flag.style.display==='none'){
		 				flag.style.display='block';
		 			}else{
		 				flag.style.display='none';
		 			}
		 		}


		 	</script>
		
</body>
</html>