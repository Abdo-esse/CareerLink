<?php 
namespace App\model;
require __DIR__ . '/../../vendor/autoload.php';
use App\Config\Connexion;

class Crud 
{

      static function createAction ($table,$data){
        $columns= implode(',',array_keys($data));
        $values= implode(',',array_fill(0,count($data),'?'));
        $sql="INSERT INTO $table ($columns) values ($values)";
        $stmt = Connexion :: $conn->prepare($sql);
        $stmt-> execute(array_values($data));
        return true;
      }

      static function readAction($table,$id){

        $sql="SELECT * FROM $table WHERE id= ?";
        $stmt= Connexion :: $conn->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_OBJ);
      }

      static function updateAction($table,$id,$data){
        $columns=implode(' = ?, ',array_keys($data)) . ' = ?';
        $sql="UPDATE $table SET  $columns  WHERE id = ?";
        $stmt= Connexion :: $conn->prepare($sql);
        $stmt->execute(array_merge(array_values($data), [$id]));
      }


      static function deleteAction($tabel,$id){
        $sql="DELETE FROM $tabel WHERE id = ?";
        $stmt = Connexion :: $conn->prepare($sql);
        $stmt->execute([$id]);
      }

      

}