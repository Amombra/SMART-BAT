<?php session_start();
$id=$_SESSION['PROFILE'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Promotions</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min1.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<style>
	.polaroid {
	  margin-top:100px; 
	  width: 360px;
	  height: 380px;
	  box-shadow: 0 0 20px gray;
	  text-align: center;
	  padding:45px;
	  color: #fff;
	  font-size: 25px;
	  font-weight: bold;
	  margin-left: 250px;
	  margin-bottom: 70px;
	}
	.imgm {
			height: 170px;
			width: 100%;
	}

	.valsubs {
		margin-left: -250%;
		margin-top: 50px;
		margin-bottom: 20px;
		background-color:#131a2f;
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 20px;
		padding-right: 20px;
		color: #fff;
		font-weight: bold;
		border-width: 2px;
		border-style: solid;
		border-color: #131a2f;
		text-align: center;

		/*margin-top: 50%;*/
	}
	.promotions {
		color: #fff;
		font-weight: bold;
		font-size: 50px;
		text-align: center;
		margin-left: 10px;
		margin-top: 25px;
		margin-bottom:25px;
		font-family: Calling Angels Personal Use;
	}
	.spacers {
		background-color: #fff;
		width: 100px;
		font-weight: bold;
		height: 3px;
		margin-left: 500px;
		margin-top: 10px;
	}

	</style>
</head>
<body style="background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(img/workplace-615375__340.jpg); background-size: cover;">

	<div class="container">
		<h1 class="promotions">Promotions</h1>
		<div class="spacers"></div>
		<div class="row">

			<?php
			require 'admin/database.php';
			$db = Database::connect();
			$statement = $db ->query("SELECT * FROM promotion");
			while($promotion = $statement -> fetch()) { 

			?>

				<div class="col-lg-6 col-md-6 col-sm-12 polaroid"><br>
				<img src="img/<?php echo $promotion['images'] ?>  " class="imgm"><br>
				<h5><i class="fas fa-user"></i>Taux: <?php echo $promotion["taux_pourcentage"] ?></h5>

				<h5><i class="fas fa-user"></i> Superficie: <?php echo $promotion["superficie"] ?> </h5>

				<h5><i class="fas fa-envelope-open-text"></i>Période: <?php echo $promotion["periode"] ?></h5>
				</div>

				<div>
					<a href="#" class="valsubs">JE BENEFICIE</a>
				</div>
			<?php
				}
			?>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>