<?php 
session_start();
$id=$_SESSION['PROFILE'];
 $fonction_Error  = $fonction =  "";

 require 'admin/database.php';

		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
		        $fonction = checkInput($_POST['fonction']);
		        $id = checkInput($_POST['id']);
		        $isSuccess          = true;
		        $saisie_reussie    = false;
		        
		        if(empty($fonction)) 
		       	{
		           	 $fonction_Error = 'Saisissez votre fonction svp !';
		           	 $isSuccess = false;
		        }
		}
		$is_expert =1;

			$db = Database::connect();
			$statement = $db -> prepare("UPDATE users SET fonction=?, is_expert=? WHERE id=?");
			$statement->execute(array($fonction, $is_expert, $id));

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
	<title>Experts</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min1.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<style>
.polaroid {
  margin-top:100px; 
  width: 400px;
  height: 250px;
  box-shadow: 0 0 20px #fff;
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
<body style="background-image: url(img/home-intro.jpg);">
	<div class="container">
		<h1 class="mec">Je Suis Experts</h1>
		<div class="row">
			<div  class="col-lg-4 col-md-4 col-sm-12">
				
			</div>

			<div  class="col-lg-4 col-md-4 col-sm-12">
				<form method="post" class="polaroid">
					<div class="from-group">
						<?php echo'<input type="hidden" name="id" value="'.$id.'">';  ?>
						
						<label>Fonction:</label>
						<input type="text" name="fonction" placeholder="fonction..." class="form-control">
						<p class="comments"><?php echo $fonction_Error; ?></p>

					</div><br><br>
					<div>
						<input type="submit" name="envoyer" value="Envoyer" class="valsub">
					</div>
				</form>
			</div>

			<div  class="col-lg-4 col-md-4 col-sm-12">
				
			</div>
		</div>
	</div>
	<?php require_once("footer.php");?>

</body>
</html>