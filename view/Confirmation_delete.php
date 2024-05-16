 <?php
 include 'C:/xampp/htdocs/vacation-master/controller/user_con.php' ;
 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Account</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			padding: 50px;
		}
		.container {
			background-color: #fff;
			border-radius: 5px;
			padding: 20px;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
			text-align: center;
			margin: 0 auto;
			width: 300px;
			margin-top: 100px;
		}
		h1 {
			margin-top: 0;
		}
		button {
			background-color: #4CAF50;
			color: white;
			border: none;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 20px;
			cursor: pointer;
			border-radius: 5px;
		}
		button:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Do you really want to delete this account?</h1>
		<a href="../view/deleteUser.php?id=<?php echo $user['id']; ?>">yes</a> 
		<a href="../view/listClient.php">No</a>

	</div>
</body>
</html>