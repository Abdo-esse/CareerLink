<?php 
namespace App\model;


require __DIR__ . '/../../vendor/autoload.php';
use App\Config\Connexion;
use PDO;


class Crud 


{

      static function createAction ($table,$data){
        $conn = Connexion::connexion();
        if ($conn !== null) {
          echo "Connexion réussie à la base de données.";
      } else {
          echo "Échec de la connexion.";
      } 
        $columns = implode(',', array_keys($data));
        $values = implode(',', array_fill(0, count($data), '?'));
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
         $stmt = $conn->prepare($sql);
         $stmt->execute(array_values($data));
         return $conn->lastInsertId();
      }

      static function readAll($table){
        $conn = Connexion::connexion();
        if ($conn !== null) {
          echo "Connexion réussie à la base de données.";
      } else {
          echo "Échec de la connexion.";
      } 
        $sql="SELECT * FROM $table";
        $stmt=$conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
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

