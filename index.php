<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://facebook.com/kedeayei">Password Generator</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Generate Password To All User In Database</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-4">
			<form method="POST" action="insert.php">
				<div class="form-group">
					<label>Firstname</label>
					<input type="text" class="form-control" name="firstname" required="required"/>
				</div>
				<div class="form-group">
					<label>Lastname</label>
					<input type="text" class="form-control" name="lastname" required="required"/>
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" required="required"/>
				</div>
				<center><button class="btn btn-primary" name="insert" >Insert</button></center>
			</form>
		</div>
		<div class="col-md-8">
			<a href="generate.php" class="btn btn-success">Generate Password</a>
			<br /><br />
			<table class="table table-bordered">
				<thead class="alert-info">
					<tr >
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Address</th>
						<th>Password</th>
					</tr>
				</thead>
				<tbody>
					<?php
						require'conn.php';
						
						$query=mysqli_query($conn, "SELECT * FROM `user`") or die(mysqli_error());
						while($fetch=mysqli_fetch_array($query)){
							echo"<tr><td>".$fetch['firstname']."</td><td>".$fetch['lastname']."</td><td>".$fetch['username']."</td><td style='background-color:#f00; color:#fff;'>".$fetch['password']."</td></tr>";
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>	
</html>