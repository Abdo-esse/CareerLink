<?php 
namespace App\model;
require __DIR__ . '/../../vendor/autoload.php';


use App\Config\Connexion;



class Validation
{

    static function validationUsername($usrname)
    {
        $result;
        if(!preg_match("/[a-zA-Z ]{3,20}$/", $usrname))
        {
            $result=false;
        }
        else
        {
            $result=true;
        }
        return $result;
    }

    static function validationEmail($email)
    {
        $result;
        if(!filter_var( $email,FILTER_VALIDATE_EMAIL))
        {
            $result=false;
        }
        else
        {
            $result=true;
        }
        return $result;
    }

    static function passwordMatch($password1,$password2)
    {
        $result;
        if($password1!==$password2)
        {
            $result=false;
        }
        else
        {
            $result=true;
        }
        return $result;
    }

    static function checkUser($name,$email)
    {
        
        $stmt=Connexion::connexion()->prepare("SELECT `name` FROM  users WHERE `name`=? OR email=?;");
     
        if(!$stmt->execute(array($name,$email)))
        {
            $stmt=null;
            header("location: ../Views/auth/candidatPage.php?stament_makhdamatch");
            exit();
        }
        $resultCheck;
        if($stmt->rowCount() > 0)
        {
        $resultCheck=false;
           
        }
        else 
        {
            $resultCheck=true;
        }
        return $resultCheck;
    }
}
