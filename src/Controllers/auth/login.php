<?php
// echo 'php l3abit';
// require_once __DIR__ . '/../../../vendor/autoload.php'; 

// use App\Controllers\auth\LoginContr;


// if (isset($_POST["login"])) {
//     $email = $_POST["email"];
//     $password = $_POST["password"];
    
//     $user = new LoginContr();
//     $user->loginUser($email, $password);
// }
require_once __DIR__ . '/../../../vendor/autoload.php'; 

use App\Controllers\auth\LoginContr;

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $loginController = new LoginContr();
    $loginController->loginUser($email, $password);
}


?>
