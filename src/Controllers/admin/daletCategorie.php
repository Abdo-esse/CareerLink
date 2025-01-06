<?php 
require_once __DIR__ . '/../../../vendor/autoload.php'; 
use App\classes\Categorie;
session_start();


if(isset($_GET['id']))
{
   $deleteCategorie= new Categorie();
   $deleteCategorie->setId($_GET['id']);
   $deleteCategorie->setDateDalet(date("Y-m-d"));
   $deleteCategorie->daletCategorie();
   $_SESSION["categories"]=$deleteCategorie->readCategorie();
   header("Location:../../Views/admin/gestionCategories/categories.php");
   exit();
}