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
    if(!empty( $post)&&!empty($salairePropose)&&!empty( $qualification)&&!empty($idCategorie)&&!empty($lieuTravail)&&!empty($idTags))
    { 
    $updateOffre= new offre($post,$salairePropose,$qualification,$lieuTravail,$idRecruteur,$idCategorie,$idTags,$id);
    $updateOffre->updateOffre();
    $_SESSION["offre"]=$updateOffre->readOffre();
    // print_r($updateOffre);
    }
    header("Location:../../Views/recruteur/index.php");
    exit();

}
   

//   $post=$_POST["post"];
//   $salairePropose=$_POST["salaire"];
//   $qualification=$_POST["qualifications"];
//   $idCategorie=$_POST["categorie"];
//   $lieuTravail=$_POST["lieu"];
//   $idTags=$_POST["tags"];
//   $creatAt=date("Y-m-d");
//   $idRecruteur=$_SESSION["userid"];
//   $offre= new offre($post,$salairePropose,$qualification,$lieuTravail,$idRecruteur,$idCategorie,$creatAt,$idTags);
//   $offre->addOffre();
//   $_SESSION["offre"]=$offre->readOffre();
// //   print_r($_SESSION["offre"]);

//   header("Location:../../Views/recruteur/index.php");
//   exit();

