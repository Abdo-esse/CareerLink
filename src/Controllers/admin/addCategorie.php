<?php 
require_once __DIR__ . '/../../../vendor/autoload.php'; 

use App\classes\Categorie;
 session_start();



if(isset($_SESSION["userid"]) && isset($_POST["submit"]))
{
  $name=$_POST["name"];
  $idRole=$_SESSION["userid"];
  $categorie= new Categorie($name,$idRole);

  $categorie->addCategorie() ;

}