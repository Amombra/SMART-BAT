<?php 

$dimension_Error =  $tarif_Error = $dimension = $tarif  =  "";

 require 'database.php';

 if(!empty($_GET['id'])) 
    {
        $id = checkInput($_GET['id']);
    }


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

            else 
    {
        $db = Database::connect();
        $statement = $db->prepare("SELECT * FROM prix where id = ?");
        $statement->execute(array($id));
        $prix = $statement->fetch();
        $dimension           = $prix['dimension'];
        $tarif    = $prix['tarif'];
        Database::disconnect();
    }


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
</head>
<body>
    <div class="container">
        <div class="row">
            <div  class="col-lg-4 col-md-4 col-sm-12">
                
            </div>

            <div  class="col-lg-4 col-md-4 col-sm-12">
                <form method="post" action="<?php echo 'update.php?id='.$id;?>">
                    <div class="from-group">
                        <label>Dimension:</label>
                        <input type="text" name="dimension" placeholder="dimension..." class="form-control" value="<?php echo $dimension; ?>">
                    <p class="comments"><?php echo $dimension_Error; ?></p>

                    </div>

                    <div class="from-group">
                        <label>Prix:</label>
                        <input type="text" name="tarif" placeholder="tarif..." class="form-control" value="<?php echo $tarif; ?>">
                        <p class="comments"><?php echo $tarif_Error; ?></p>

                    </div>

                    <div>
                        <input type="submit" name="envoyer" value="Envoyer">
                    </div>
                </form>
            </div>

            <div  class="col-lg-4 col-md-4 col-sm-12">
                
            </div>
        </div>
    </div>
</body>
</html>