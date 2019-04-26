

<!DOCTYPE html>
<html>
<head>
	<title>connexion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min1.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>
.connect {
	color: #fff;
	font-weight: bold;
	border-radius: 8px;
	border-color: orange;
	border-top-left-radius: 20px;
	border-bottom-right-radius: 20px;
	border-width: 8px;
	border-style: solid;
	height: 300px;
	width: 450px;
	margin-top: 105px;
	padding-left: 30px;
	padding-right: 30px;
	padding-top: 50px;
	padding-bottom: 30px;
	background-color: transparent;
	box-shadow: 0 0 20px #fff;

	
	}

.polaroid {
  margin-top:100px; 
  width: 400px;
  height: 380px;
  box-shadow: 0 0 20px #000;
  text-align: center;
  padding:45px;
  color: #fff;
  font-weight: bold;
}
.valsub {
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
}
.mec {
	color: #fff;
	font-weight: bold;
	margin-left: 310px;
	padding-top: 40px;
}
.bat {
	color: #e3c600;
	font-weight: bold;
	font-style: italic;
	font-size: 55px;
	margin-top: 20px;
}

</style>
<body style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url(img/agencies_opt.jpg); background-size: contain;">
	
	<div>
		<p class="bat"><marquee>ANGELIC-SMART BAT</marquee></p>
	</div>
	<div class="container">
		<h1 class="mec"><b>Me connecter</b></h1>
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12">
				
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 ">
				<form method="post" action="authentifier.php" class="polaroid">
					<div class="form-group">
						<label>Email :</label>
						<input type="email" name="email" placeholder="Enter your email ..." class="form-control">
					</div><br><br>

					<div class="form-group">
						<label>Password :</label>
						<input type="password" name="password" placeholder="Enter your password ..." class="form-control">
					</div><br><br>
					<div>
						<input class="valsub" type="submit" name="" value="Connecter" >
					</div>
				</form>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-12">
				
			</div>
		</div>
	</div><br><br><br><br>

<?php require_once("footer.php");?>
</body>
</html>