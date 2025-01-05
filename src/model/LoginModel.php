<?php 
namespace App\model;



require __DIR__ . '/../../vendor/autoload.php';
use App\Config\Connexion;
use App\Classes\Role; 
use App\Classes\Utilisateur; 
use PDO;




class LoginModel

{
    
    protected function getUser($email, $password)
{
  
        $conn = Connexion::connexion();
        
        
        $stmt = $conn->prepare('SELECT users.id, users.email, users.name, users.password, roles.id as role_id, roles.name as role
                                FROM users 
                                JOIN roles ON roles.id = users.id_role 
                                WHERE users.email = ?;');

        if (!$stmt->execute([$email])) {
            header("location: ../../../../CareerLink/src/Views/auth/login.php?error=stmtfaile");
            exit();
        }

        
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        
        if (!$user) {
            header("location: ../../../../CareerLink/src/Views/auth/login.php?error=usernotfound");
            exit();
        }

     
        if (!password_verify($password, $user['password'])) {
            header("location: ../../../../CareerLink/src/Views/auth/login.php?error=wrongpassword");
            exit();
        }

       
        session_start();
        $_SESSION["userid"] = $user["id"];
        $_SESSION["useruid"] = $user["name"];
        $_SESSION["userrole"] = $user["role"];

        
        $role = new Role($user["role_id"], $user["role"]);
        return new Utilisateur($user["name"], $user["email"], $user["password"], $role, $user["id"]);

    
}

}
