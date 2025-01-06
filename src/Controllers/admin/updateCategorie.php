<?php 
require_once __DIR__ . '/../../../vendor/autoload.php'; 

use App\classes\Categorie;
 session_start();





if( isset($_POST["submit"]))
{
  $name=$_POST["name"];

  $id=$_POST["id"];
  $updateCategorie= new Categorie();
  $updateCategorie->setName($name);
  $updateCategorie->setId($id);
  $updateCategorie->updateCategorie();
  $_SESSION["categories"]=$updateCategorie->readCategorie();
  header("Location:../../Views/admin/gestionCategories/categories.php");
  exit();

}