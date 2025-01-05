<?php 
namespace App\classes;
require __DIR__ . '/../../vendor/autoload.php'; 
use App\Classes\Utilisateur; 


class Recruteur extends Utilisateur
{
    private $nomEntreprise;
    private $emailProfessionnel;

    public function __construct($nom, $email, $password, Role $role, $nomEntreprise, $emailProfessionnel, $id = null)
    {
        parent::__construct($nom, $email, $password, $role, $id);
        $this->nomEntreprise = $nomEntreprise;
        $this->emailProfessionnel = $emailProfessionnel;
    }

    public function getNomEntreprise(){ return $this->nomEntreprise;  }
    public function getEmailProfessionnel(){ return $this->emailProfessionnel;  }

    public function inscription (){
        // Crud::createAction('users', $this->data);
 }
}