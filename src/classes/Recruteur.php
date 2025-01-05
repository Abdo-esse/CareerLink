<?php 
namespace App\classes;
require __DIR__ . '/../../vendor/autoload.php'; 
use App\Classes\Utilisateur; 
use App\model\Crud;


class Recruteur extends Utilisateur
{
    private $nomEntreprise;
    private $emailProfessionnel;
    private $dataRecruteur;


    public function __construct($nom, $email, $password, Role $role, $nomEntreprise, $emailProfessionnel, $id = null)
    {
        parent::__construct($nom, $email, $password, $role, $id);
        $this->idRecruteur = $idRecruteur;
        $this->nomEntreprise = $nomEntreprise;
        $this->emailProfessionnel = $emailProfessionnel;
        $this->dataRecruteur = [
            
            "nomEntreprise" => " $this->nomEntreprise",
            "emailProfessionnel" => " $this->emailProfessionnel"
        ];
        
    }

    public function getNomEntreprise(){ return $this->nomEntreprise;  }
    public function getEmailProfessionnel(){ return $this->emailProfessionnel;  }
    public function getDataRecruteur(){ return $this->dataRecruteur;  }
    public function getidRecruteur(){ return $this->idRecruteur;  }

    public function inscription (){
        $idRecruteur=Crud::createAction('users', $this->data);
        Crud::createAction('info_recruteurs',array_merge($this->dataRecruteur,["id_recruteur"=> $idRecruteur]) );
 }
}