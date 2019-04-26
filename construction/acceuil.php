<?php
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>SMART-BAT</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min1.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/swipper.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/swipper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js"></script>

<style>
	.swiper-container {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
    }
    .equipe {
		text-align: center;
		font-weight: bold;
		font-size: 25px;
	}
	.contact {
		background-color:#131a2f;
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 30px;
		padding-right: 30px;
		color: #fff;
		font-weight: bold;
		font-size: 20px;
		border-style: solid;
	}
	.swip {
		color: #fff;
		font-weight: bold;
		font-size: 15px;
		margin-left: 20px;
		margin-top: 240px;
	}
	.polaroid {
	  margin-top:100px; 
	  width: 360px;
	  height: 350px;
	  box-shadow: 0 0 10px #000;
	  text-align: center;
	  padding:45px;
	  color: #000;
	  font-weight: bold;
	  margin-bottom: 70px;
		}

</style>

</head>
<body>


<section style="background-image:linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)), url(img/moi.jpg); height: 700px; background-size: cover;">
			
			<div class="header" >
				<ul>
					<li><a href="#">Acceuil</a></li>
					<li><a href="#about">About-us</a></li>
					<li><a href="souscrire.php">Souscrire</a></li>
					<li><a href="promotion.php">Promotion</a></li>
					<li>
						<a href="deconnexion.php">
							Deconnecté[<?php 
									if (isset($_SESSION)) {
										echo $_SESSION['nom'];
									}
								?>]
						</a> 
					</li>
					<li><a href="profile_users.php">Profile</a></li>

				</ul>
			</div><br><br>

			<div class="desc">
				<h2 style="font-size: 70px; font-family: Miraculous;"><center>ANGELIC-SMART BAT<center></h2><br>
				<h5><p style="font-family: Miraculous;"><center>ANGELIC-SMART BAT, Vivez en toute securité !!!<br><br>Contactez nous pour tous vos prospections et analyse de terrain avant construction.</center></h5>
				
			</div><br><br>

			<a href="#" class="lien">SAVOIR PLUS</a>
</section>
<div>

<br><br>
<section>
	<div class="container">
		<div class="row" style="background-color: #f6f4f4;">
			<div class="col-lg-2 col-md-2 col-sm-12"></div>
			<div class="col-lg-8 col-md-8 col-sm-12">
				<p><br>
					<center>Bienvenue  sur ANGELIC SMART BAT</center><br>
					<center>Vous etes un utilisateur et vous recherchez des experts geotechniciens </center> pour des analyses ou verifications(prospections) de terrain avant une construction quelconque,<br> vous etes au bon endroit!!!
					Pour commencer cliquez sur le bouton suivant<br><br><center> <a href="souscrire.php" class="contact" >Contacter-Nous</a></center>
					<br><br>


					Vous etes un experts et vous aimerez faire partir de nos experts afin de repondre aux besoins de la <center>population, veuillez nous contacter ici<br><br><center><a href="expert.php" class="contact"  >Contactez-Nous</a></center>
					<br>
				</p>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-12"></div>
		</div>
	</div>
</section>
<br><br>
		

	<div class="container">
		<h1 class="equipe"><center>Projets réalisées</center></h1><br><br>
		<br><br><br>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="card polaroid">
				<div class="card-img">
					<img class="img-fluid"
					src="img/slider-01.jpg" style="height: 100;">
				</div>
				<div class="card-body">
					<h4 class="card-title">Experts Géotechnicien</h4>
					<p>Les experts</p>
				</div>
				<div class="card-footer">
					<a class="card-link" href="#">Lire plus...</a>
				</div>
			</div>
			</div>
			
		
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="card polaroid">
				<div class="card-img">
					<img class="img-fluid"
					src="img/slider-02.jpg">
				</div>
				<div class="card-body">
					<h4 class="card-title">Experts en Batiment</h4>
					<p>les experts...</p>
				</div>
				<div class="card-footer">
					<a class="card-link" href="#">Lire plus</a>
				</div>
			</div>
			</div>
	
		<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="card polaroid">
				<div class="card-img">
					<img class="img-fluid"
					src="img/slider-03.jpg">
				</div>
				<div class="card-body">
					<h4 class="card-title">Experts en Batiment</h4>
					<p>les experts...</p>
				</div>
				<div class="card-footer">
					<a class="card-link" href="#">Lire plus...</a>
				</div>
			</div>
			</div>
	

			</div>
	</div>
</div>
<br>

<div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="card polaroid">
				<div class="card-img">
					<img class="img-fluid"
					src="img/slider-01.jpg" style="height: 100;">
				</div>
				<div class="card-body">
					<h4 class="card-title">Experts Géotechnicien</h4>
					<p>Les experts</p>
				</div>
				<div class="card-footer">
					<a class="card-link" href="#">Lire plus...</a>
				</div>
			</div>
			</div>
			
		
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="card polaroid">
				<div class="card-img">
					<img class="img-fluid"
					src="img/slider-02.jpg">
				</div>
				<div class="card-body">
					<h4 class="card-title">Experts en Batiment</h4>
					<p>les experts...</p>
				</div>
				<div class="card-footer">
					<a class="card-link" href="#">Lire plus</a>
				</div>
			</div>
			</div>
	
		<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="card polaroid">
				<div class="card-img">
					<img class="img-fluid"
					src="img/slider-03.jpg">
				</div>
				<div class="card-body">
					<h4 class="card-title">Experts en Batiment</h4>
					<p>les experts...</p>
				</div>
				<div class="card-footer">
					<a class="card-link" href="#">Lire plus...</a>
				</div>
			</div>
			</div>
	

			</div>
	</div>
</div>
<br><br>
<div class="container" style="background-color: #f6f4f4;"><br><br>
	<h1><center>Notre Equipe</center></h1>
	<div class="row">
		<div class="swiper-container">
	      <div class="swiper-wrapper">
	      <div class="swiper-slide polaroid" style="background-image:url(img/et1.jpg)">
	      	<h3 class="swip">Opportune Katché<br>Ingenieur Batiment</h3>
	      </div>
	      <div class="swiper-slide polaroid" style="background-image:url(img/et2.jpg)">
	      	<h3 class="swip">Michel Katché<br>Ingenieur Géotechnicien</h3>
	      </div>
	      <div class="swiper-slide polaroid" style="background-image:url(img/et3.jpg)">
	      	<h3 class="swip">Levys Katché<br>Ingenieur Batiment</h3>
	      </div>
	      <div class="swiper-slide polaroid" style="background-image:url(img/et7.jpg)">
	      	<h3 class="swip">Lois Katché<br>Ingenieur Géotechnicien</h3>
	      </div>
	      <div class="swiper-slide polaroid" style="background-image:url(img/et8.jpg)">
	      	<h3 class="swip">Moise Katché<br>Ingenieur Batiment</h3>
	      </div>
	      <div class="swiper-slide polaroid" style="background-image:url(img/et5.jpg)">
	      	<h3 class="swip">Denise Katché<br><span>Ingenieur Batiment</span></h3>
	      </div>
	      <div class="swiper-slide polaroid" style="background-image:url(img/et4.jpg)">
	      	<h3 class="swip">Yvette Katché<br>Ingenieur Batiment</h3>
	      </div>
	      <div class="swiper-slide polaroid" style="background-image:url(img/et6.jpg)">
	      	<h3 class="swip">Milène Kadja<br>Ingenieur Batiment</h3>
	      </div>
    	</div>
    <!-- Add Pagination -->
    	<div class="swiper-pagination"></div>
  	</div>
</div>

 <?php require_once("footer.php");?>

<script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
</script>

</body>
</html>