<?php 
	require 'admin/database.php';

if(!empty($_POST))
{
	extract($_POST);

	$nom = verifyInput($nom);
	$email = verifyInput($email);
	$password = verifyInput($password);
	$localite = verifyInput($localite);
	$dates = verifyInput($dates);

	if ($nom != '' && $email != '' && $password != '' && $localite != '' && $dates != '')
	{
		$db = Database::connect();
		$req = $db->prepare("INSERT INTO users(nom, email, password, localite, dates) VALUES (:nom, :email, :password, :localite, :dates)");

		$req->execute(array(
			'nom' => $nom,
			'email' => $email,
			'password' => $password,
			'localite' => $localite,
			'dates' => $dates

		));

		echo "success";
	}
	else{
		echo "Tous les champs sont requits";
		exit();
	}
}
function verifyInput($var)
{
	$var = trim($var);
	$var = stripcslashes($var);
	$var = htmlspecialchars($var);
	return $var;
}

/*$db = Database::connect();
				$statement = $db -> prepare("INSERT INTO users (nom, email, password, localite, dates) VALUES (?,?,?,?,?)");
				$statement->execute(array($nom,$email,$password,$localite,$dates));
	            Database::disconnect();*/
	        
	

           	/*$db = Database::connect();
            $statement = $db -> prepare("INSERT INTO users (nom,email,password,localite,dates) values(:nom,:email,:password,:localite,:dates )");
            $statement->execute(array(
            	':nom' => $nom,
            	':email' => $email,
            	':password' => $password,
            	':localite' => $localite,
            	':dates' =>$dates
            ));*/



 /*   function checkInput($data) 
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
	}*/
?>




		
				


<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min1.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<style>
		.flash
		{
			display: none;
		}
	</style>
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
		<div class="alert alert-success alert-dissimible fade show flash" role = "alert">
					<strong>Félicitation, inscription réussie !!!</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label = "Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12">
				
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 reservation">
				<form method="post" class="" id="myForm">
					<div class="from-group">
						<label>Nom/Prénom:</label>
						<input type="text" name="nom" id="nom" placeholder="Nom..." class="transparent">
					</div>

					<div class="from-group">
						<label>Email:</label>
						<input type="email" name="email" id="email" placeholder="Email..." class="transparent">
					</div>

					<div class="from-group">
						<label>Password:</label>
						<input type="password" name="password" id="password" placeholder="password..." class="transparent">
					</div>

					<div class="from-group">
						<label>Localité:</label>
						<select class="transparent" name="localite" id="localite">
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
					</div>

				
					<div class="from-group">
						<label>dates de Naissance:</label>
						<input type="date" name="dates" placeholder="dates de Naissance..." class="transparent">
					</div>
					<div>
						<div class="errors">
							<span></span>
						</div>
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
<script type="text/javascript">
				//charger le document jquery
				$(document).ready(function(){
					let firstname = $('#nom');
					let name = $('#email');
					let phone = $('#password');
					let phone = $('#localite');
					let phone = $('#dates');
					let errors = $('.errors span');

					//soumission du formulaire

					$('#myForm').submit(function(e){
						// (e) empeche la page de se recharger
						e.preventDefault();
						
						//traitement des données du formulaire

						if(nom.val() == '' || email.val() == '' || password.val() == '' || localite.val() == '' || dates.val() == '')
						{
							errors.css('color', 'red').html('Tous les champs sont requis');
						}
						else{
							errors.css('color', 'white').html('');

							//envoie des donnée du formulaire avec ajax

							$.ajax({
								method: 'post',
								url:'traitement.php',
								data: {
									'nom': nom.val(),
									'email': email.val(),
									'password': password.val(),
									'localite': localite.val(),
									'dates': dates.val()
								},

								success: function(data){
									if(data == 'success'){
										//alors on fera des traitements en rapport avec le msg de success

										$('.flash').css('display', 'block');
										$('#nom').val('');
										$('#email').val('');
										$('#password').val('');
										$('#localite').val('');
										$('#dates').val('');
									}
									else
									{
										errors.css('color', 'red').html(data)
									}
								}
							})
						}
					})
				})
</script>
</body>
</html>