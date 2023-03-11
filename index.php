<?php 
	include_once 'database.php';
	global $db;
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<body class="text-center">
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<div a class="form-signin">
		<h1>connecter a votre blog </h1>
		<form action="todo.php" method="post" >
		<div class="form-floating mb-3">
  			<input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="name" required>
 		 	<label for="floatingInput">name</label>
		</div>
		<div class="form-floating">
  			<input type="password" class="form-control" id="floatingPassword" placeholder="Password"  name="password" required>
  			<label for="floatingPassword">Password</label>
  			<button type="submit" class="btn btn-dark">sign in</button>
		</div>
		</form>
	<form action="todo.php" method="post">
		<button class="btn btn-dark" type="submit" >new account</button>
		<input type="hidden" name="new_account_test">
	</form>
	</div>

</body>
</html>