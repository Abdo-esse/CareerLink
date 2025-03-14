<?php 
require_once __DIR__ . '/../../../vendor/autoload.php'; 

use App\classes\Offre;
 session_start();





if(isset($_SESSION["userid"]) && isset($_POST["submit"]))
{
  

  $post=$_POST["post"];
  $salairePropose=$_POST["salaire"];
  $qualification=$_POST["qualifications"];
  $idCategorie=$_POST["categorie"];
  print_r($idCategorie);
  $lieuTravail=$_POST["lieu"];
  $idTags=$_POST["tags"];
  $idRecruteur=$_SESSION["userid"];
  if(!empty( $post)&&!empty($salairePropose)&&!empty( $qualification)&&!empty($idCategorie)&&!empty($lieuTravail)&&!empty($idTags))
  { 
  $offre= new offre($post,$salairePropose,$qualification,$lieuTravail,$idRecruteur,$idCategorie,$idTags);
  $offre->addOffre();
  $_SESSION["offre"]=$offre->readOffre();
//   print_r($_SESSION["offre"]);
}
header("Location:../../Views/recruteur/index.php");
exit();
}