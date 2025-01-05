<?php



require __DIR__ . '/../../../vendor/autoload.php'; 
use App\Classes\Role; 
use App\Classes\Candidat; 

// include __DIR__ . '/pages/navbar.php';

// use App\Classes\App; 

// $app = new App();
// echo $app->greet();
// use App\Config\Connexion;

// Connexion::connexion();
// if (Connexion::$conn!==null){
//     echo 'nadi';
// }
// echo $_POST["email"];
if(isset($_POST["SignUP"]))
{
   
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $passwordRepate=$_POST["passwordRepate"];
    $role= new Role(3,"Candidat");
    $candidat = new Candidat($name,$email,$password,$role);
    $candidat->inscription();
    

}
// echo $_POST["email"];
// if ($_SERVER["REQUEST_METHOD"] == "POST" 
//     && isset($_POST['name']) 
//     && isset($_POST['email']) 
//     && isset($_POST['password']) 
//     && isset($_POST['passwordRepate'])) {
//         echo "salam";
//     // Utilisation de l'opérateur de fusion null pour éviter les erreurs
//     $name = $_POST['name'] ;
//     $email = $_POST['email'] ;
//     $password = $_POST['password'] ;
//     $passwordRepate = $_POST['passwordRepate'] ;

//     // Vérification que tous les champs sont remplis
//     // if (!$name || !$email || !$password || !$passwordRepate) {
//     //     echo "Tous les champs doivent être remplis.";
//     //     exit;
//     // }
//     echo $name;
// }