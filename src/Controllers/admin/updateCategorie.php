<?php 
require_once __DIR__ . '/../../../vendor/autoload.php'; 

use App\classes\Categorie;
 session_start();





if( isset($_POST["submit"]))
{
  $name=$_POST["name"];
  $idRole=$_SESSION["userid"];
  $categorie= new Categorie(); 
  $categorie->addCategorie() ;
//   $_SESSION["categories"]=$categorie->readCategorie() ;

//   header("Location:../../Views/admin/categories.php");
//   exit();
//    foreach ($_SESSION["categories"] as $categorieItem) {
    
//     echo "Nom de la catégorie : " . $categorieItem->name . "<br>";
//     echo "ID du rôle : " . $categorieItem->id . "<br>";
// }

}