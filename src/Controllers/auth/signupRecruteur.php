<?php



require __DIR__ . '/../../../vendor/autoload.php'; 
use App\Classes\Role; 
use App\Classes\Recruteur;
use App\model\Validation;


if(isset($_POST["SignUP"]))
{
   echo 'abdo';
    $name=$_POST["name"];
    $nomEntreprise=$_POST["nomEntreprise"];
    $emailProfessionnel=$_POST["emailProfessionnel"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $passwordRepate=$_POST["passwordRepate"];
    $role= new Role(2,"Recruteur");
    
    $recruteur= new Recruteur($name, $email, $password,$role,$nomEntreprise ,$emailProfessionnel);
    $recruteur->inscription();
    header("Location: ../../Views/index.php?iyh_3lamolana_rak_wlit_recruteur");
    exit(); 
    
    
}