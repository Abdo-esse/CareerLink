<?php 
require_once __DIR__ . '/../../../../vendor/autoload.php'; 

use App\classes\Tag;
 session_start();





if(isset($_SESSION["userid"]) && isset($_POST["submit"]))
{
  $name=$_POST["name"];
  $idAdmin=$_SESSION["userid"];
  echo $name,$idRole;
  $tag= new Tag($name,$idAdmin); 
  $tag->addtag() ;
  $_SESSION["tags"]=$tag->readtag() ;

  header("Location:../../../Views/admin/gestiontags/tags.php");
  exit();

}