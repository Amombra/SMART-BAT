<?php 
	require 'database.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Construction</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min1.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">


</head>
<body>

	<?php 
		$db = Database::connect();
		$requetess = $db->query('SELECT count(id) AS nb_users FROM users');
		$donnees = $requetess->fetch();
		$nombre_total = $donnees['nb_users'];

		$requetess_prix = $db->query('SELECT count(id) AS nb_prix FROM prix');
		$donnees_prix = $requetess_prix->fetch();
		$nombre_total_prix = $donnees_prix['nb_prix'];

		$requetess_souscription = $db->query('SELECT count(id) AS nb_souscription FROM souscrire');
		$donnees_souscription = $requetess_souscription->fetch();
		$nombre_total_souscription = $donnees_souscription['nb_souscription'];		

		$requetess_promotion = $db->query('SELECT count(id) AS nb_promotion FROM promotion');
		$donnees_promotion = $requetess_promotion->fetch();
		$nombre_total_promotion = $donnees_promotion['nb_promotion'];
?>
 
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12 dashboard">
				<br><br>
				<a href="#"><img src="../img/1.jpg" class="circle"><br></a>
				<h6 class="nom"><b><i>Maichan ☻</i></b></h6>
				
				
				<ul>
					<li><a href="#"><i class="fas fa-tachometer-alt"></i>&nbsp;&nbsp;&nbsp;Dashboard</a></li>

					<li><a href="#"><i class="fas fa-home" ></i>&nbsp;&nbsp;&nbsp;Home</a></li>

					<li><a href="crud.php"><i class="fas fa-users" ></i> &nbsp;&nbsp;&nbsp;Inscris[Users] </a> <span class="note"><?= $nombre_total ?></span></li>

					<li><a href="list_prix.php"><i class="fas fa-pen-alt"></i>&nbsp;&nbsp;&nbsp;Crud[prix]</a><span class="note"><?= $nombre_total_prix ?></span></li>

					<li><a href="list_souscrire.php"><i class="fas fa-pen-alt"></i>&nbsp;&nbsp;&nbsp;Crud[souscription]</a><span class="note"><?= $nombre_total_souscription ?></span></li>

					<li><a href="promotion_list.php"><i class="fas fa-pen-alt"></i>&nbsp;&nbsp;&nbsp;Crud[promotion]</a><span class="note"><?= $nombre_total_promotion ?></span></li>

				</ul>
			</div>
			&nbsp; &nbsp; &nbsp;
			<div class="col-lg-8 col-md-8 col-sm-12" style="background-color: #fff;">
				<div class="dash">
					<h4>
						<b>DASHBOARD</b>
					</h4>
					<h5>
						<i><span style="color: red;">Dashboard</span>/Administrateur</i>
					</h5>
				</div>
				<div class="bouton">
					<a href="crud.php" >
					<i class="fas fa-users" style="font-size: 60px; color: #fff; margin: 15px;"></i>
				</a><br><h3> <?= $nombre_total ?> inscrits</h3>
				</div>

				<div class="bouton1">
					<a href="crud.php" >
					<i class="fas fa-cog" style="font-size: 60px; color: #fff; margin: 15px;"></i>
				</a><br><h3>Admin</h3>
				</div>
				
			</div>
		</div>
	</div>


<footer style="background-image: url(../img/pattern-footer_e7fb65.jpg); height: 500px; color: #fff; font-family:Nachelle;">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 socials-links"><br>
						<img src="img/logo1.jpeg" style="width: 100px; height: 80px;">
						<h2>ANGELIC-BAT</h2><br>
						<h5>Suivez toutes nos actus:</h5><br>
						<a href="#"><img src="../img/facebook.png" alt=""></a>
						<a href="#"><img src="../img/twitter.png" alt=""></a>
						<a href="#" ><img src="../img/instagram.png" alt=""></a>
						<a href="#"><img src="../img/linkedin.png" alt=""></a>
						<a href=""><div class="row langues">
								<span><img src="../img/drapeau.png" style="height: 10px; width: 15px;" alt="" class="pic"></span>
								<span><h4>Cote d'Ivoire</h4></span>
								<span><img src="../img/chevronbas.png" alt="" class="chev"></span>
							</div></a> 
						<a href=""><div class="row langues">
								<span><img src="../img/chat.png" alt="" class="picd"></span>
								<span><h4>Français</h4></span>
								<span><img src="../img/chevronbas.png" alt="" class="chevb"></span>
							</div></a> 
					</div>

					<div class="col-lg-3 col-md-3 col-sm-12">
						<h5>A PROPOS DE ANGELIC BAT</h5>
					</div>

					<div class="col-lg-3 col-md-3 col-sm-12">
						<h5>CONTACTEZ NOUS</h5><br>
						<small>FAQ</small><br>
						<small>+22552419903/07263550</small><br>
						<small>katcheopportune@gmail.com</small><br>
						<small>angelic-bat@gmail.com</small><br>
					</div>

					<div class="col-lg-3 col-md-3 col-sm-12">
						<h5>Mentions Légales</h5><br>
						<small>Offres du moment</small><br>
						<small>@NAN all copyright</small>
						<small>@NAN Spiritual Programmer</small>
					</div>
				</div>
			</div>
</footer>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
</body>
</html>