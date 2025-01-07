<?php
namespace App\classes;
require __DIR__ . '/../../vendor/autoload.php';  
use App\model\Crud;

class Offre
{
    private $id ;
    private $poste;
    private $salairePropose ;
    private $qualification ;
    private $lieuTravail ;
    private $idRecruteur;
    private $idCategorie;
    private array $idTags;
    private $creatAt;
    private $deleteAt;
    private $data;
    
     public function __construct($poste="",$salairePropose="",$qualification="",$lieuTravail="",$idRecruteur="",$idCategorie="",$idTags="",$creatAt="",$id="")
     {
        $this->poste=$poste;
        $this->salairePropose=$salairePropose;
        $this->qualification=$qualification;
        $this->lieuTravail=$lieuTravail;
        $this->idRecruteur=$idRecruteur;
        $this->idCategorie=$idCategorie;
        $this->idTags=$idTags;
        $this->creatAt=$creatAt;
        $this->id=$id;
        $this->data=[
            "poste"=>$this->poste,
            "salaire"=> $this->salairePropose,
            "qualifications_requises"=>$this->qualification,
            "lieu_travail"=>$this->lieuTravail,
            "date_create"=>$this->creatAt,
            "id_categorie"=>$this->idCategorie,
            "id_recruteur"=>$this->idRecruteur
        ];

     }

     public function setId($id){ $this->id=$id;}
     public function setIdTags(array $idTags){ $this->idTags=$idTags;}
     public function setDateDalet($deleteAt){ $this->deleteAt=$deleteAt;}

     public function addOffre()
     {
        Crud::createAction('offres_emploi',$this->data);
     }
     public function readOffre()
     {
        return Crud::readAll('offres_emploi');
     }
     public function daletOffre()
     {
        Crud::updateAction('offres_emploi', $this->id,["date_delete"=>$this->dateDelete]);
     }
     public function updateOffre()
     {
        Crud::updateAction('offres_emploi', $this->id,["name"=>"$this->name"]);
     }
    
}