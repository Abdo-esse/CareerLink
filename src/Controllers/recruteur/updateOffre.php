<?php 
require_once __DIR__ . '/../../../vendor/autoload.php'; 

use App\classes\Offre;
 session_start();





if( isset($_POST["submit"]))
{
    $id=$_POST["id"];
    $post=$_POST["post"];
    $salairePropose=$_POST["salaire"];
    $qualification=$_POST["qualifications"];
    $idCategorie=$_POST["categorie"];
    $lieuTravail=$_POST["lieu"];
    $idTags=$_POST["tags"];
    $idRecruteur=$_SESSION["userid"];
    $updateOffre= new offre($post,$salairePropose,$qualification,$lieuTravail,$idRecruteur,$idCategorie,$idTags,$id);
    $updateOffre->updateOffre();
    $_SESSION["offre"]=$updateOffre->readOffre();
    // print_r($updateOffre);
  
    header("Location:../../Views/recruteur/index.php");
    exit();

}