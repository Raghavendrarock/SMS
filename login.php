<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
</head>
<body>
	<center><br><br>
			<div class="form">
				<h1>Student Management System</h1><br>
				<form action="" method="post">
					<input type="submit" name="admin_login" value="Admin Login">
					<input type="submit" name="student_login" value="Student Login">
				</form>
			</div>
		<?php
		    if(isset($_POST['admin_login'])){
		        header("Location: admin_login.php");
		    }
            if(isset($_POST['student_login'])){
		        header("Location: student_login.php");
		    }
		?>
	</center>
	<script type="text/javascript" src="bootstrap-4.4.1/js/jquery_latest.js"></script>	
	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</body>
</html>