<?php 
require 'admin/database.php';

if(isset($_POST))
{
  $email = verifyInput($_POST['email']);
  $password = verifyInput($_POST['password']);
}

$db = Database::connect();
$verifi = $db ->prepare("SELECT * FROM users WHERE email = ? AND password = ? ");

$verifi ->execute(array($email, $password));
if ($exist = $verifi ->fetch()) {
  session_start();
  $_SESSION['PROFILE'] = $exist['id'];
  $_SESSION["nom"]=$exist['nom'];
  header("location:acceuil.php");
}
else
{
  header("location:connexion.php");
}
  function verifyInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>