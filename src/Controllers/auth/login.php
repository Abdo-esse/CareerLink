<?php

require_once __DIR__ . '/../../../vendor/autoload.php'; 

use App\Controllers\auth\LoginContr;

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $loginController = new LoginContr();
    $loginController->loginUser($email, $password);
}


?>
