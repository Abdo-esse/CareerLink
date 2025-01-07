<?php 
require_once __DIR__ . '/../../../../vendor/autoload.php'; 

use App\classes\Tag;
 session_start();





if( isset($_POST["submit"]))

{
    echo '3la slama';
  $name=$_POST["name"];

  $id=$_POST["id"];
  $updatetag= new Tag();
  $updatetag->setName($name);
  $updatetag->setId($id);
  $updatetag->updatetag();
//   $_SESSION["tags"]=$updatetag->readtag();
//   header("Location:../../../Views/admin/gestiontags/tags.php");
//   exit();

}