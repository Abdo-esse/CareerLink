<?php
namespace App\classes;
class Utilisateur
{
    private $id;
    private $nom ;
    private $email;
    private $password ;
    private $role;

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