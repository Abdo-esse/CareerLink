<?php



require __DIR__ . '/../../../vendor/autoload.php'; 
use App\Classes\Role; 
use App\Classes\Recruteur;
use App\model\Validation;


if(isset($_POST["SignUP"]))
{
   echo 'abdo';
    $name=$_POST["name"];
    $nomEntreprise=$_POST["nomEntreprise"];
    $emailProfessionnel=$_POST["emailProfessionnel"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $passwordRepate=$_POST["passwordRepate"];
    $role= new Role(2,"Recruteur");
    if(!empty( $name)||!empty($email)||!empty( $password)||!empty($passwordRepate)||!empty($nomEntreprise)||!empty($emailProfessionnel))
    {
        if(Validation::validationUsername($name)==false)
        {
            // echo "invalid name !";
            header("location: ../../Views/auth/recruteurPage.php??error=invaldname");
            exit();
        }
        if(Validation::validationNomEntreprise($nomEntreprise)==false)
        {
            // echo "invalid name !";
            header("location: ../../Views/auth/recruteurPage.php??error=invaldnameEntreprise");
            exit();
        }
        if(Validation::validationEmail($email)==false)
        {
            // echo "invalid email !";
            header("location: ../../Views/auth/recruteurPage.php??error=invalidemail");
            exit();
        }
        if(Validation::validationEmail($emailProfessionnel)==false)
        {
            // echo "invalid email !";
            header("location: ../../Views/auth/recruteurPage.php??error=invalidemail");
            exit();
        }
        if(Validation::passwordMatch($password,$passwordRepate)==false)
        {
            // echo "Passworde don't match !";
            header("location: ../../Views/auth/recruteurPage.php??error=PasswordDontMatch");
            exit();
        }
        if(!Validation::checkUser($name,$email))
    {
        header("location: ../../Views/auth/recruteurPage.php?had_Smiya_oula_email_existe");
        exit();
    }
    $hashedPwd= password_hash($password,PASSWORD_DEFAULT);
    $recruteur= new Recruteur($name, $email, $hashedPwd,$role,$nomEntreprise ,$emailProfessionnel);
    $recruteur->inscription();
    header("Location: ../../Views/index.php?iyh_3lamolana_rak_wlit_recruteur");
    exit(); 
    }

   
    
    
}