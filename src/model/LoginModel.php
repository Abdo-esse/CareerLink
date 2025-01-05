<?php 
// namespace App\model;



// require __DIR__ . '/../../vendor/autoload.php';
// use App\Config\Connexion;
// use App\Classes\Role; 
// use App\Classes\Utilisateur; 
// use PDO;
// use PDOException;



// class LoginModel

// {
//     protected function hdfg(){header("location: ../../../../CareerLink/src/Views/auth/login.php?error=stmtfaile");
//         exit();
//     }
//     // protected function getUser($email,$password)
//     // {
//     //     $conn = Connexion::connexion();
//     //     $stmt=$conn->prepare('SELECT `password` from users Where email =? ;');
        
     
//     //     if(!$stmt->execute(array($email)))
//     //     { 
        
//     //         $stmt=null;
//     //         header("location: ../../../../CareerLink/src/Views/auth/login.php?error=stmtfaile");
//     //         exit();
//     //     }

//     //     if($stmt->rowCount()==0)
//     //     {
//     //         $stmt=null;
//     //         header("location: ../../../../CareerLink/src/Views/auth/login.php?error=usern44otFont");
//     //         exit();
//     //     }
//     //     $pwdHashed=$stmt->fetchAll(PDO::FETCH_ASSOC);
//     //     $checkPWd = password_verify($password,$pwdHashed[0]["password"]);

//     //     if($checkPWd==false)
//     //     {
//     //         $stmt=null;
//     //         header("location: ../../../../CareerLink/src/Views/auth/login.php?error=wrongpasswores");
//     //         exit();
//     //     }
//     //     else if($checkPWd==true)
//     //     {

//     //         $query = "SELECT users.id , users.email ,users.name, users.password , roles.id as role_id , roles.name as `role`
//     //     FROM users join roles on roles.id = users.id_role where users.email = ? and users.password = ?";  
//     //     $stmt = $conn->prepare($query);  
//     //         if(!$stmt->execute(array($email,$password)))
//     //         { 
            
//     //             $stmt=null;
//     //             header("location:../../../../CareerLink/src/Views/auth/login.php?error=stmtfaile");
//     //             exit();
//     //         }
 
//     //         $user=$stmt->fetchAll(PDO::FETCH_ASSOC);
//     //         if (count($user) === 0) {
//     //             header("location:../../../../CareerLink/src/Views/auth/login.php?error=usernotphofound");
//     //             exit();
//     //         }

//     //         session_start();
//     //         $_SESSION["userid"] = $user[0]["id"];
//     //         $_SESSION["userid"]=$user[0]["id"];
//     //         $_SESSION["useruid"]=$user[0]["name"];
//     //         $_SESSION["useruid"]=$user[0]["role"];
//     //         $role = new Role($user["role_id"], $user["role"]);
//     //         return new Utilisateur($user["name"],$user["email"],$user["password"],$role,$user['id']);
//     //     }
//     //     $stmt=null;
     
//     // }
//     protected function getUser($email, $password)
// {
//     try {
//         $conn = Connexion::connexion();
        
//         // Préparer la requête pour récupérer l'utilisateur par email
//         $stmt = $conn->prepare('SELECT users.id, users.email, users.name, users.password, roles.id as role_id, roles.name as role
//                                 FROM users 
//                                 JOIN roles ON roles.id = users.id_role 
//                                 WHERE users.email = ?;');

//         if (!$stmt->execute([$email])) {
//             header("location: ../../../../CareerLink/src/Views/auth/login.php?error=stmtfaile");
//             exit();
//         }

//         // Récupérer un seul utilisateur
//         $user = $stmt->fetch(PDO::FETCH_ASSOC);

//         // Vérification si l'utilisateur existe
//         if (!$user) {
//             header("location: ../../../../CareerLink/src/Views/auth/login.php?error=usernotfound");
//             exit();
//         }

//         // Comparer le mot de passe haché
//         if (!password_verify($password, $user['password'])) {
//             header("location: ../../../../CareerLink/src/Views/auth/login.php?error=wrongpassword");
//             exit();
//         }

//         // Démarrer la session et enregistrer les données de l'utilisateur
//         session_start();
//         $_SESSION["userid"] = $user["id"];
//         $_SESSION["useruid"] = $user["name"];
//         $_SESSION["userrole"] = $user["role"];

//         // Créer les objets nécessaires
//         $role = new Role($user["role_id"], $user["role"]);
//         return new Utilisateur($user["name"], $user["email"], $user["password"], $role, $user["id"]);

//     } catch (PDOException $e) {
//         echo "Erreur : " . $e->getMessage();
//         exit();
//     }
// }

// }


namespace App\model;
require __DIR__ . '/../../vendor/autoload.php';
use App\Config\Connexion;
use App\Classes\Role; 
use App\Classes\Utilisateur; 
use PDO;
use PDOException;

class LoginModel
{
    protected function getUser($email, $password)
    {
        try {
            $conn = Connexion::connexion();
            
            $stmt = $conn->prepare('SELECT users.id, users.email, users.name, users.password, roles.id as role_id, roles.name as role
                                    FROM users 
                                    JOIN roles ON roles.id = users.id_role 
                                    WHERE users.email = ?;');

            if (!$stmt->execute([$email])) {
                header("location: ../../../../CareerLink/src/Views/auth/login.php?error=stmtfailed");
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

        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            exit();
        }
    }
}
