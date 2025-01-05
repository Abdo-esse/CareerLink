<?php



require __DIR__ . '/../../../vendor/autoload.php'; 
use App\Classes\Role; 
use App\Classes\Candidat;
use App\model\Validation;


if(isset($_POST["SignUP"]))
{
   
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $passwordRepate=$_POST["passwordRepate"];
    $role= new Role(3,"Candidat");
    if(!empty( $name)||!empty($email)||!empty( $password)||!empty($passwordRepate))
    {

    
        if(Validation::validationUsername($name)==false)
        {
            // echo "invalid name !";
            header("location: ../../Views/auth/candidatPage.php??error=invaldname");
            exit();
        }
        if(Validation::validationEmail($email)==false)
        {
            // echo "invalid email !";
            header("location: ../../Views/auth/candidatPage.php??error=invalidemail");
            exit();
        }
        if(Validation::passwordMatch($password,$passwordRepate)==false)
        {
            // echo "Passworde don't match !";
            header("location: ../../Views/auth/candidatPage.php??error=PasswordDontMatch");
            exit();
        }
    if(!Validation::checkUser($name,$email))
    {
        header("location: ../../Views/auth/candidatPage.php?had_Smiya_oula_email_existe");
        exit();
    }
    $hashedPwd= password_hash($password,PASSWORD_DEFAULT);


    $candidat = new Candidat($name,$email,$hashedPwd,$role);
    $candidat->inscription();
    header("Location: ../../Views/index.php?iyh_3lamolana");
    exit(); 
    

}
}
