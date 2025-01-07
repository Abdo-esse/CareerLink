<?php 
require_once __DIR__ . '/../../../../vendor/autoload.php'; 

use App\classes\Tag;
session_start();


if(isset($_GET['id']))
{

   $deletetag= new Tag();
   $deletetag->setId($_GET['id']);
   $deletetag->setDateDalet(date("Y-m-d"));
   $deletetag->daletTag();
   $_SESSION["tags"]=$deletetag->readtag();
   header("Location:../../../Views/admin/gestiontags/tags.php");
   exit();
}