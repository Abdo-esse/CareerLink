<?php


namespace App\Controllers\auth;

require_once __DIR__ . '/../../../vendor/autoload.php'; 

use App\model\LoginModel;

class LoginContr extends LoginModel
{
    public function loginUser($email, $password)
    {
        // Utilisation de la méthode héritée
        $user = $this->getUser($email, $password);

        if ($user == null) {
            echo "User not found, please check your credentials.";
            exit();
        }

        // Vérification du rôle
        switch ($user->getRole()->getTitle()) {
            case "Admin":
                header("Location:../../Views/admin/dashbord.php?natadmin");
                break;
            case "Candidat":
                header("Location:../../Views/candidat/index.php?ntacandidate");
                break;
            case "Recruteur":
                header("Location:../../Views/recruteur/index.php?recruiter");
                break;
            default:
                header("Location:../../Views/auth/login.php?error=unknownrole");
        }
        exit();
    }
}
