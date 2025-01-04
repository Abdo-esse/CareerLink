<?php

require __DIR__ . '/../../vendor/autoload.php'; 
// include __DIR__ . '/pages/navbar.php';

// use App\Classes\App; 

// $app = new App();
// echo $app->greet();
// use App\Config\Connexion;

// Connexion::connexion();
// if (Connexion::$conn!==null){
//     echo 'nadi';
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerLink Navbar</title>
    <link rel="stylesheet" href="./styles/navbar.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="logo.png" alt="CareerLink Logo" class="logo-image">
            <span>careerlink</span>
        </div>
        <ul class="nav-links">
            <li><a href="#">Find a Job</a></li>
            <li><a href="#">Upload Resume</a></li>
            <li><a href="#">Post a Job</a></li>
            <li class="dropdown">
                <a href="#">AI Recruiting</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Option 1</a></li>
                    <li><a href="#">Option 2</a></li>
                </ul>
            </li>
        </ul>
        <div class="nav-buttons">
            <a href="../auth/login.php" class="btn login-btn">Log In</a>
            <a href="../pages/signupPage.php" class="btn signup-btn">Sign Up</a>
        </div>
    </nav>
</body>
</html>

