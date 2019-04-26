<?php 

$nom_Error =  $dates_Error = $email_Error  = $localite_Error =$password_Error = $tel_Error= $nom = $dates  =$email  = $localite= $password = $tel = "";

 require 'admin/database.php';

		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
				$nom = checkInput($_POST['nom']);
		        $dates        = checkInput($_POST['dates']);
		        $email = checkInput($_POST['email']);
		        $localite = checkInput($_POST['localite']);
		        $password = checkInput($_POST['password']);
		        $isSuccess          = true;
		        $saisie_reussie    = false;


		        if(empty($nom)) 
		       	{
		           	 $nom_Error = 'Saisissez votre nom svp !';
		           	 $isSuccess = false;
		        }


		        if(empty($dates)) 
		       	{
		           	 $dates_Error = 'Saisissez votre dates svp !';
		           	 $isSuccess = false;
		        }

		        if(empty($localite)) 
		       	{
		           	 $localite_Error = 'Saisissez votre Localité svp !';
		           	 $isSuccess = false;
		        }

		        if(empty($email)) 
		       	{
		           	 $email_Error = 'Saisissez votre email svp !';
		           	 $isSuccess = false;
		        }

				if(empty($password)) 
		       	{
		           	 $password_Error = 'Saisissez votre Password svp !';
		           	 $isSuccess = false;
		        }

				if(empty($tel)) 
		       	{
		           	 $tel_Error = 'Saisissez votre tel svp !';
		           	 $isSuccess = false;
		        }
		        else
				{
					$saisie_reussie = true;
					if(!isPhone($tel))
					{
						$tel_Error = "Veuillez entrer votre numero de 8 chiffres svp! EX: 02223344" ;
						$isSuccess = false;
					}
					if(!isCod($password))
					{
						$passwordError = "Veuillez entrer votre mode passe de 8 chiffre et sans espace svp !" ;
						$isSuccess = false;
					}

					if(!isEmail($email))
					{
						$emailError = "Veuillez entrer votre email svp ..." ;
						$isSuccess = false;
					}
				}
    		}
		
				$db = Database::connect();
				$statement = $db -> prepare("INSERT INTO users (nom, email, password, localite, dates) VALUES (?,?,?,?,?)");
				$statement->execute(array($nom,$email,$password,$localite,$dates));
	            Database::disconnect();
	        
	

           	/*$db = Database::connect();
            $statement = $db -> prepare("INSERT INTO users (nom,email,password,localite,dates) values(:nom,:email,:password,:localite,:dates )");
            $statement->execute(array(
            	':nom' => $nom,
            	':email' => $email,
            	':password' => $password,
            	':localite' => $localite,
            	':dates' =>$dates
            ));*/



    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    function isCod($cod)
	{
		return preg_match("#^[0-9]{8}#", $cod);
	}
	function isEmail($var)
	{
		return filter_var($var, FILTER_VALIDATE_EMAIL);
	} 
	function isPhone($cod)
	{
		return preg_match("#^[0-9]{8}#", $cod);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min1.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body style="background-image: url(img/et2.jpg); background-size: contain;">
			<div class="hi" style="	color: #fff;
	font-weight: bold;
	text-align: center;
	margin-top: 45px;
	background-color: rgba(254, 64, 91, 0.79);
	padding-top: 30px;
	padding-bottom: 30px;
	padding-right: 20px;
	padding-left: 20px;
	padding-left: -70px;
"><p>INSCRIPTION</p>
<marquee>Inscrivez vous ici !!!!!!!!!!!!!!</marquee>
</div><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12">
				
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 reservation">
				<form action="" method="post" class="">
					<div class="from-group">
						<label>Nom/Prénom:</label>
						<input type="text" name="nom" placeholder="Nom..." class="transparent">
						<p class="comments"><?php echo $nom_Error; ?></p>
					</div>

					<div class="from-group">
						<label>Email:</label>
						<input type="email" name="email" placeholder="Email..." class="transparent">
						<p class="comments"><?php echo $email_Error; ?></p>
					</div>

					<div class="from-group">
						<label>Password:</label>
						<input type="password" name="password" placeholder="password..." class="transparent">
						<p class="comments"><?php echo $password_Error; ?></p>
					</div>

					<div class="from-group">
						<label>Localité:</label>
						<select class="transparent" name="localite">
							<option class="transparent">COMMUNE</option>
							<option value="COCODY">COCODY</option>
							<option value="PLATEAU">PLATEAU</option>
							<option value="MARCORY">MARCORY</option>
							<option value="PORT-BOUET">PORT-BOUET</option>
							<option value="KOUMASSI">KOUMASSI</option>
							<option value="TREICHVILLE">TREICHVILLE</option>
							<option value="ABOBO">ABOBO</option>
							<option value="ADJAME">ADJAME</option>
							<option value="YOPOUGON">YOPOUGON</option>
						</select>
						<p class="comments"><?php echo $localite_Error; ?></p>
					</div>

				
					<div class="from-group">
						<label>dates de Naissance:</label>
						<input type="date" name="dates" placeholder="dates de Naissance..." class="transparent">
						<p class="comments"><?php echo $dates_Error; ?></p>
					</div>
					<div>
						<input type="submit" name="" value="valider" class="valsub">
					</div>
				</form>
				<br><br><br>
				
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-12">
				
			</div>
		</div>
	</div><br><br><br><br>
				<center><a href="acceuil.php" class="btn btn-success">Retour</a></center>

 <?php require_once("footer.php");?>

</body>
</html>