<?php
 
include 'conn.php';

if(isset($_POST['insert']))
{
$id = $_GET['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$query = "UPDATE `crudtable` set id = $id, username = '$username', password = '$password' where id= $id";

mysqli_query($con,$query);

header('location:display.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
	<body>
		<div class="col-lg-6 m-auto">
			<form method="post">
				<br><br>
					<div class="card">
						<div class="card-header bg-dark">
							<h1 class="text-white text-center">Update Data</h1>
						</div>
							<label>Username:</label>
							<input type="text" name="username"><br>

							<label>Password:</label>
							<input type="password" name="password"><br>

							<button class="btn btn-success" type="submit" name="insert">Update</button>
					</div>
			</form>
		</div>
	</body>
</html>