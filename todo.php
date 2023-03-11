<?php 
 include_once "database.php";
 if(isset($_POST['new_account_test'])) : ?>
 	<form action="todo.php" method="post">
 		<input type="text" name="new_name">
	 	<input type="text" name="new_password">
	 	<button type="submit">create</button>
 	</form>
 <?php endif ?>
 
<!--  ajouter un compte -->
 <?php 
 if (isset($_POST['new_password'])) {
 	global $db;
 	$name = $_POST['new_name'] ?? '';
 	$password = $_POST['new_password'] ?? '';
 	try {
 		$stmt = $db->conn->prepare("INSERT INTO login (db_name, db_password) VALUES (:db_name, :db_password)");
		$stmt->bindParam(':db_name', $name);
		$stmt->bindParam(':db_password', $password);
		$stmt->execute();
		echo "crete account suscessfully";
		header("Location: /blog/");
 	} catch (Exception $e) {
 		echo "$e";
 	}
 }
  ?>

  <!-- connexion a un blog -->
 <?php 
if (isset($_POST['password'])) {
	global $db;

	$stmt = $db->conn->prepare("SELECT db_name, db_password FROM login ");
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);

	$result =$stmt->fetchAll();
				
	$i =0; $a =0; $b =0;
	foreach ($result as $results) {$i++;
		if ($results['db_name']=== $_POST['name']) { $a=$i; }
		if ($results['db_password']=== $_POST['password']){ $b=$i; }
	}
	if ($a=$b && $a!=0) {
	?>
		<!-- blog -->
		bienvenue sur votre blog <?= $_POST['name']?>
		<p align="center">visualisation de votre blog <br></p>
		<iframe src="article.php" width=100% height=70%></iframe>
		
		<div align="center">
		<button action=SeeBlog()>voir blog</button>
		<button action=modify()>a propos de votre site</button>
		<button action=article()>article</button>
		</div>
	<?php  		
	} else {
		echo "erreur de mdp ou nom";
	}
	$a=$b=0;
}
  ?>