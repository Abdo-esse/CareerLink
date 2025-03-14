<?php
namespace App\classes;
require __DIR__ . '/../../vendor/autoload.php';  
use App\model\Crud;

class Tag
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

     public function addtag()
     {
        Crud::createAction('tags',$this->data);
     }
     public function readtag()
     {
        return Crud::readAll('tags');
     }
     public function daletTag()
     {
        Crud::updateAction('tags', $this->id,["date_delete"=>$this->dateDelete]);
     }
     public function updatetag()
     {
        Crud::updateAction('tags', $this->id,["name"=>"$this->name"]);
        
     }
    
}