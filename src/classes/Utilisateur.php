<?php
namespace App\classes;
require __DIR__ . '/../../vendor/autoload.php'; 

use App\Classes\Role; 


class Utilisateur
{
    private $id;
    private $nom ;
    private $email;
    private $password ;
    private Role $role;

    public function __construct( $nom , $email, $password ,$role,$id=null){
        $this->id=$id;
        $this->nom=$nom;
        $this->email=$email;
        $this->password=$password;
        $this->role=$role;
    }
    public function getId() { return $this->id; }
    public function getNom() { return $this->nom; }
    public function getRole() { return $this->role; }
    public function getEmail() { return $this->email; }
    public function getPassword() { return $this->password; }

    public function inscription (){
        


    }

    

}

$role=new Role(1,'admin');
$utilisateur=new Utilisateur( "nom" , "email", "password" ,$role,"idnull");
print_r($utilisateur);
echo "<br>";
// print_r ($utilisateur->getRole()->getTitle());
echo ($utilisateur->getRole()->getTitle());
