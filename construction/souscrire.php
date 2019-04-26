<?php 

$situation_Error =  $numero_Error = $datees_Error  = $parcelle_Error = $situation = $numero= $datees = $parcelle  =  "";

session_start();
$id=$_SESSION['PROFILE'];

 require 'admin/database.php';

		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
				$situation = checkInput($_POST['situation']);
		        $numero        = checkInput($_POST['numero']);
		        $datees = checkInput($_POST['datees']);
		        $parcelle = checkInput($_POST['parcelle']);
		        $isSuccess          = true;
		        $saisie_reussie    = false;
		        
        


		        if(empty($situation)) 
		       	{
		           	 $situation_Error = 'Saisissez votre situation (localité)svp !';
		           	 $isSuccess = false;
		        }


		        if(empty($numero)) 
		       	{
		           	 $numero_Error = 'Saisissez votre numero de transaction svp !';
		           	 $isSuccess = false;
		        }

		        if(empty($datees)) 
		       	{
		           	 $datees_Error = 'Saisissez votre jour de visite svp !';
		           	 $isSuccess = false;
		        }

		        if(empty($parcelle)) 
		       	{
		           	 $parcelle_Error = 'Saisissez la dimension svp !';
		           	 $isSuccess = false;
		        }

		        if(empty($image)) 
		        {
		            $image_Error = 'Ce champ ne peut pas être vide';
		            $isSuccess = false;
		        }
}

			$db = Database::connect();
			$statement = $db -> prepare("INSERT INTO souscrire (situation, numero, datees, parcelle, id_user) VALUES (?,?,?,?,?)");
			$statement->execute(array($situation,$numero,$datees,$parcelle,$id));
            Database::disconnect();

    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Souscription</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min1.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<style>
.polaroid {
  margin-top:100px; 
  width: 400px;
  height: 480px;
  box-shadow: 0 0 20px #000;
  text-align: center;
  padding:45px;
  color: #fff;
  font-weight: bold;
  margin-bottom: 70px;
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
	margin-left: 440px;
	padding-top: 60px;
}
</style>
</head>
<body style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(img/workplace-615375__340.jpg); background-size: cover;">
	<div class="container">
		<h1 class="mec"><b>Je Souscris</b></h1>
		<div class="row">
			<div  class="col-lg-4 col-md-4 col-sm-12">
				
			</div>

			<div  class="col-lg-4 col-md-4 col-sm-12">
				<form method="post" class="polaroid">
					<div class="from-group">
						<label>Situation du terrain:</label>
						<input type="text" name="situation" placeholder="situation..." class="form-control">
					<p class="comments"><?php echo $situation_Error; ?></p>

					</div>

					<div class="from-group">
						<label>Numero de transaction:</label>
						<input type="tel" name="numero" placeholder="transaction..." class="form-control">
						<p class="comments"><?php echo $numero_Error; ?></p>

					</div>

					<div class="from-group">
						<label>Choix du jour de prospection:</label>
						<input type="date" name="datees" placeholder="date..." class="form-control">
						<p class="comments"><?php echo $datees_Error; ?></p>

					</div>

					<div class="from-group">
						<label>Dimension:</label>
						<select name="parcelle" type="text" class="form-control">
							<option class="">Mesure Parcelle</option>
							<option value="100m">100m**2=>150.000FCFA</option>
							<option value="200m">200m**2=>50.000FCFA</option>
							<option value="400m">400m**2=>100.000FCFA</option>
							<option value="500m">500m**2=>200.000FCFA</option>
						</select>
						<p class="comments"><?php echo $parcelle_Error; ?></p>

					</div>
					<div>
						<input type="submit" name="envoyer" value="Envoyer" class="valsub">
					</div>
				</form>
			</div><br><br>

			<div  class="col-lg-4 col-md-4 col-sm-12">
				
			</div>
		</div>
	</div>
	 <?php require_once("footer.php");?>

</body>
</html>