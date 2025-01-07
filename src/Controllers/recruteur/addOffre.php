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
  $lieuTravail=$_POST["lieu"];
  $idTags=$_POST["tags"];
  $creatAt=date("Y-m-d");
  $idRecruteur=$_SESSION["userid"];
  $offre= new offre($post,$salairePropose,$qualification,$lieuTravail,$idRecruteur,$idCategorie,$creatAt,$idTags);
  $offre->addOffre();
  $_SESSION["offre"]=$offre->readOffre();
//   print_r($_SESSION["offre"]);

//   header("Location:../../Views/recruteur/index.php");
//   exit();



}