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
    private $deleteAt;
    private $data;
    
     public function __construct($poste="",$salairePropose="",$qualification="",$lieuTravail="",$idRecruteur="",$idCategorie="",array $idTags=[],$id="")
     {
        $this->poste=$poste;
        $this->salairePropose=$salairePropose;
        $this->qualification=$qualification;
        $this->lieuTravail=$lieuTravail;
        $this->idRecruteur=$idRecruteur;
        $this->idCategorie=$idCategorie;
        $this->idTags=$idTags;
        $this->id=$id;
        $this->data=[
            "poste"=>$this->poste,
            "salaire"=> $this->salairePropose,
            "qualifications_requises"=>$this->qualification,
            "lieu_travail"=>$this->lieuTravail,
            "id_categorie"=>$this->idCategorie,
            "id_recruteur"=>$this->idRecruteur
        ];
     }
        
     public function getId(){return  $this->id;}
     public function getIdTags(){return  $this->idTags;}
     public function setId($id){ $this->id=$id;}
     public function setIdTags(array $idTags){ $this->idTags=$idTags;}
     public function setDateDalet($deleteAt){ $this->deleteAt=$deleteAt;}

     public function addOffre()
     {
        $this->id= Crud::createAction('offres_emploi',$this->data);
        foreach($this->idTags as $idTag )
        {
         Crud::createAction('offre_emploi_tags',["id_offre_emploi"=>$this->id,"id_tag"=>$idTag]);
        }

     }
     public function readOffre()
     {
        return Crud::readAllOffre();
     }
     public function daletOffre()
     {
        Crud::updateAction('offres_emploi', $this->id,["date_delete"=>$this->deleteAt]);
     }
     public function updateOffre()
     {
        Crud::updateAction('offres_emploi', $this->id,$this->data);
        foreach($this->idTags as $idTag )
        {
         Crud::createAction('offre_emploi_tags',["id_offre_emploi"=>$this->id,"id_tag"=>$idTag]);
        }
     }
    
}