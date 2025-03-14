<?php
namespace App\classes;
require __DIR__ . '/../../vendor/autoload.php';  
use App\model\Crud;

class Categorie
{
    private $id ;
    private $name;
    private $idAdmin;
    private $data;
    private $dateDelete;
     public function __construct($name="",$idAdmin="",$id=null)
     {
        $this->name=$name;
        $this->idAdmin=$idAdmin;
        $this->id=$id;
        $this->data=[
            "name"=>"$this->name",
            "id_admin"=>$this->idAdmin
        ];

     }

     public function setId($id){ $this->id=$id;}
     public function setName($name){ $this->name=$name;}
     public function setDateDalet($dateDelete){ $this->dateDelete=$dateDelete;}

     public function addCategorie()
     {
        Crud::createAction('categories',$this->data);
     }
     public function readCategorie()
     {
        return Crud::readAll('categories');
     }
     public function daletCategorie()
     {
        Crud::updateAction('categories', $this->id,["date_delete"=>$this->dateDelete]);
     }
     public function updateCategorie()
     {
        Crud::updateAction('categories', $this->id,["name"=>"$this->name"]);
     }
    
}