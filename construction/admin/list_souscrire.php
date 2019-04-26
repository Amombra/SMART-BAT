<!DOCTYPE html>
<html>
<head>
	<title>Les Souscriptions</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min1.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<style>
		.polaroid {
		  
		  box-shadow: 0 0 20px #000;
		  color: #fff;
		  font-weight: bold;
		  font-size: 20px;
		}
	</style>
</head>
<body style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.2)), url(../img/workplace-615375__340.jpg); background-size: cover;">

<?php 
	/*$requetes = $connection->query('SELECT count(id) AS nb_inscrits FROM users');
	$donnees = $requetes->fetch();
	$nombre_total = $donnees['nb_inscrits'];
	*/

?>



	<div class="container"><br><br>
			<h3><center>ESPACE CRUD / ADMIN</center></h3><br><br>
		<div class="row">

			<table class="table table-striped table-bordered polaroid ">
				<thead class="thead-dark ">
						<tr>
							<th scope="col">Id</th>
							<th scope="col">Situation</th>
							<th scope="col">Numero</th>
							<th scope="col">Dates</th>
							<th scope="col">Parcelle</th>
							<th scope="col">Actions</th>
						</tr>
					</thead>
					<tbody>

						<?php 
							require 'database.php';
							$db = Database::connect();
							$statement = $db ->query("SELECT * FROM souscrire");
							while($souscrire = $statement -> fetch()) { 
						echo '<tr>';
						echo '<td>'.$souscrire["id"] . '</td>';
						echo '<td>' . $souscrire["situation"] . '</td>';
						echo '<td>' . $souscrire["numero"] . '</td>';
						echo '<td>' . $souscrire["datees"] . '</td>';
						echo '<td>' . $souscrire["parcelle"] . '</td>';
						echo '<td width=300>';
							echo '<a href="delete_souscription.php?id=' . $souscrire['id'] . ' " class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span>Supprimer</a>';
							echo ' ';
							echo '<a href="update.php?id=' . $souscrire['id'] . ' " class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>Supprimer</a>';
						
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