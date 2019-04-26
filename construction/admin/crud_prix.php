<?php 

$dimension_Error =  $tarif_Error = $dimension = $tarif  =  "";

 require 'database.php';

		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
				$dimension = checkInput($_POST['dimension']);
		        $tarif        = checkInput($_POST['tarif']);
		        $isSuccess          = true;
		        $saisie_reussie    = false;
		        
		        if(empty($dimension)) 
		       	{
		           	 $dimension_Error = 'Saisissez votre dimension svp !';
		           	 $isSuccess = false;
		        }


		        if(empty($tarif)) 
		       	{
		           	 $tarif_Error = 'Saisissez le prix svp !';
		           	 $isSuccess = false;
		        }
		}

			$db = Database::connect();
			$statement = $db -> prepare("INSERT INTO prix (dimension, tarif) VALUES (?,?)");
			$statement->execute(array($dimension,$tarif));
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
	<title>Inventaire de prix</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min1.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
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
</head>
<body style="background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url(../img/workplace-615375__340.jpg); background-size: cover;">
	<div class="container">
		<div class="row">
			<div  class="col-lg-4 col-md-4 col-sm-12">
				
			</div>

			<div  class="col-lg-4 col-md-4 col-sm-12">
				<form method="post" class="polaroid">
					<div class="from-group">
						<label>Dimension:</label>
						<input type="text" name="dimension" placeholder="dimension..." class="form-control">
					<p class="comments"><?php echo $dimension_Error; ?></p>

					</div>

					<div class="from-group">
						<label>Prix:</label>
						<input type="text" name="tarif" placeholder="tarif..." class="form-control">
						<p class="comments"><?php echo $tarif_Error; ?></p>

					</div>

					<div>
						<input type="submit" name="envoyer" value="Envoyer" class="valsub">
					</div>
				</form>
			</div>

			<div  class="col-lg-4 col-md-4 col-sm-12">
				
			</div>
		</div>
	</div>
</body>
</html>