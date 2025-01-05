<?php



require __DIR__ . '/../../../vendor/autoload.php'; 
use App\Classes\Role; 
use App\Classes\Candidat; 

if(isset($_POST["SignUP"]))
{
   
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $passwordRepate=$_POST["passwordRepate"];
    $role= new Role(3,"Candidat");
    $candidat = new Candidat($name,$email,$password,$role);
    $candidat->inscription();
    header("Location: ../../Views/index.php?iyh_3lamolana");
    exit(); 
    

}
