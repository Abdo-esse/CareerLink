<?php
namespace App\classes;
require __DIR__ . '/../../vendor/autoload.php'; 

use App\Classes\Role; 
use App\model\Crud;

class Utilisateur
{
    private $id;
    private $nom ;
    private $email;
    private $password ;
    private Role $role;
    private const table="users";
    private $data;
   
    

    public function __construct( $nom , $email, $password , Role $role,$id=null){
        $this->id=$id;
        $this->nom=$nom;
        $this->email=$email;
        $this->password=$password;
        $this->role=$role;
        $this->data = [
            "id" => $this->id,
            "name" => $this->nom,
            "email" => $this->email,
            "password" => $this->password,
            "role"=>$this->role->getRole()->getid()
        ];
    }

    public function getId() { return $this->id; }
    public function getNom() { return $this->nom; }
    public function getRole() { return $this->role; }
    public function getEmail() { return $this->email; }
    public function getPassword() { return $this->password; }

    public function inscription (){
        Crud::createAction(self::table, $this->data);
        header("location :../../Controllers/auth/signupCandidat.php?iyh_3lamolana");

    }

    

}

$role=new Role(1,'admin');
$utilisateur=new Utilisateur( "nom" , "email", "password" ,$role,"idnull");
print_r($utilisateur);
echo "<br>";
// print_r ($utilisateur->getRole()->getTitle());
echo ($utilisateur->getRole()->getTitle());
