<?php 
require_once __DIR__ . '/../../../vendor/autoload.php'; 

use App\classes\Offre;
session_start();


if(isset($_GET['id']))
{
   $deleteOffre= new Offre();
   $deleteOffre->setId($_GET['id']);
   $deleteOffre->setDateDalet(date("Y-m-d"));
   $deleteOffre->daletOffre();
   $_SESSION["offre"]=$deleteOffre->readOffre();
   //   print_r($_SESSION["offre"]);
   
     header("Location:../../Views/recruteur/index.php");
     exit();
}