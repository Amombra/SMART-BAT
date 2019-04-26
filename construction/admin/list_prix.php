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
		  
		  box-shadow: 0 0 60px #000;
		  color: #fff;
		  font-weight: bold;
		  font-size: 15px;
		}
	</style>
</head>
<body style="background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url(../img/workplace-615375__340.jpg); background-size: cover;">

	<div class="container"><br><br>
			<h3><center>ESPACE CRUD / ADMIN</center></h3><br><br>
		<div class="row">

			<table class="table table-striped table-bordered polaroid">
				<thead class="thead-dark ">
						<tr>
							<th scope="col">Id</th>
							<th scope="col">Dimension</th>
							<th scope="col">Tarif</th>
							<th scope="col">Actions</th>
						</tr>
					</thead>
					<tbody>

						<?php 
							require 'database.php';
							$db = Database::connect();
							$statement = $db ->query("SELECT * FROM prix");
							while($price = $statement -> fetch()) { 
						echo '<tr>';
						echo '<td>'.$price["id"] . '</td>';
						echo '<td>' . $price["dimension"] . '</td>';
						echo '<td>' . $price["tarif"] . '</td>';
						echo '<td width=300>';
							echo '<a href="delete_prix.php?id=' . $price['id'] . ' " class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span>Supprimer</a>';
						echo ' ';
							echo '<a href="update_prix.php?id=' . $price['id'] . ' " class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>Modifier</a>';
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