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
     public function __construct($name,$idAdmin,$id=null)
     {
        $this->name=$name;
        $this->idAdmin=$idAdmin;
        $this->id=$id;
        $this->data=[
            "name"=>"$this->name",
            "id_admin"=>$this->idAdmin
        ];

     }

     public function addCategorie()
     {
        Crud::createAction('categories',$this->data);
     }
     public function readCategorie()
     {
        return Crud::readAll('categories');
     }
    
}