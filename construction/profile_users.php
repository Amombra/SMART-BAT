<?php session_start();
$id=$_SESSION['PROFILE'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile de l'utilisateur</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min1.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>
	<div class="container">
		<div class="row">

			<?php
			require 'admin/database.php';
			$db = Database::connect();
			$statement = $db ->query("SELECT * FROM users");
			while($profile = $statement -> fetch()) { 	
				echo '<div class="col-lg-4 col-md-4 col-sm-12 boite"><br><br>';
				echo '<div>';
				echo '</div><br><br>';
				echo '<h5><i class="fas fa-user"></i>Nom:'. $profile["nom"] . '</h5><br>';

				echo '<h5><i class="fas fa-user"></i> Email:'.$profile["email"] . '</h5><br>';

				echo '<h5><i class="fas fa-envelope-open-text"></i>Password:' . $profile["password"] . '</h5><br>';
		
				echo '<h5><i class="fas fa-calendar-alt"></i>	Fonction:' . $profile["fonction"].'</h5><br>';
				echo '<h5><i class="fas fa-briefcase"></i>	Dates:' . $profile["dates"] . '</h5>';
			'</div>	';
			}?>
		</div>
	</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
</body>
</html>