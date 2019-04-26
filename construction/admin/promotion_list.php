<!DOCTYPE html>
<html>
<head>
	<title>Les prix</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min1.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<style>
		.polaroid {
		  
		  box-shadow: 0 0 20px #000;
		}
	</style>
</head>
<body style="background-image: url(../img/et9.jpg); background-size: cover; color: #fff; font-weight: bold; font-size: 15px;">

	<div class="container"><br><br>
			<h3><center>ESPACE CRUD / ADMIN</center></h3><br><br>
		<div class="row">

			<table class="table table-striped table-bordered shadow mp-5 polaroid">
				<thead class="thead-dark ">
						<tr>
							<th scope="col">Id</th>
							<th scope="col">Taux de Pourcentage</th>
							<th scope="col">Superficie</th>
							<th scope="col">Période</th>
							<th scope="col">Actions</th>
						</tr>
					</thead>
					<tbody>

						<?php 
							require 'database.php';
							$db = Database::connect();
							$statement = $db ->query("SELECT * FROM promotion");
							while($promotion = $statement -> fetch()) { 
						echo '<tr>';
						echo '<td>'.$promotion["id"] . '</td>';
						echo '<td>' . $promotion["taux_pourcentage"] . '</td>';
						echo '<td>' . $promotion["superficie"] . '</td>';
						echo '<td>' . $promotion["periode"] . '</td>';
						echo '<td width=300>';
							echo '<a href="delete_prix.php?id=' . $promotion['id'] . ' " class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span>Supprimer</a>';
						echo ' ';
							echo '<a href="update_prix.php?id=' . $promotion['id'] . ' " class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>Modifier</a>';
						echo '</tr>';
							 }
							 Database::disconnect();
							 ?>
						
					</tbody>
			</table>
		</div>
				<a href="index.php" class="btn btn-success">Retour</a>

	</div>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
</body>
</html>