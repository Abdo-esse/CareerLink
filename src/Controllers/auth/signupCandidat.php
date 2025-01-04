<?php



require __DIR__ . '/../../../vendor/autoload.php'; 
// include __DIR__ . '/pages/navbar.php';

// use App\Classes\App; 

// $app = new App();
// echo $app->greet();
// use App\Config\Connexion;

// Connexion::connexion();
// if (Connexion::$conn!==null){
//     echo 'nadi';
// }
if(isset($_POST["SignUP"]))
{
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $passwordRepate=$_POST["passwordRepate"];
    $role= new Role(3,"Candidat");
    $candidat = new Candidat($name,$email,$password,$role);
    $condidat->signup();
    

}