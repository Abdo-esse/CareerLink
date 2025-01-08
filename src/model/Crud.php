<?php 
namespace App\model;


require __DIR__ . '/../../vendor/autoload.php';
use App\Config\Connexion;
use PDO;


class Crud 


{

      static function createAction ($table,$data){
        $conn = Connexion::connexion();
        $columns = implode(',', array_keys($data));
        $values = implode(',', array_fill(0, count($data), '?'));
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
         $stmt = $conn->prepare($sql);
         $stmt->execute(array_values($data));
         return $conn->lastInsertId();
      }

      static function readAll($table){
        $conn = Connexion::connexion(); 
        $sql="SELECT * FROM $table";
        $stmt=$conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
      }
      static function readAllOffre(){
        $conn = Connexion::connexion(); 
        $sql="SELECT offres_emploi.id, offres_emploi.poste,offres_emploi.date_delete,offres_emploi.salaire,offres_emploi.qualifications_requises,offres_emploi.lieu_travail,offres_emploi.date_create,info_recruteurs.name_entreprise,categories.name as categorie ,GROUP_CONCAT(tags.name) as tags
              FROM offres_emploi
              JOIN offre_emploi_tags on offre_emploi_tags.id_offre_emploi=offres_emploi.id
              JOIN tags ON tags.id=offre_emploi_tags.id_tag
              JOIN categories on categories.id=offres_emploi.id_categorie
              JOIN info_recruteurs on info_recruteurs.id_recruteur=offres_emploi.id_recruteur
              GROUP BY offres_emploi.id;";
        $stmt=$conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
      }
      static function readOffre($id){
        $conn = Connexion::connexion(); 
        $sql="SELECT offres_emploi.id, offres_emploi.poste,offres_emploi.date_delete,offres_emploi.salaire,offres_emploi.qualifications_requises,offres_emploi.lieu_travail,offres_emploi.date_create,categories.name as categorie ,categories.id as idCategorie,GROUP_CONCAT(tags.name) as tags,GROUP_CONCAT(tags.id) as tagsId
              FROM offres_emploi
              JOIN offre_emploi_tags on offre_emploi_tags.id_offre_emploi=offres_emploi.id
              JOIN tags ON tags.id=offre_emploi_tags.id_tag
              JOIN categories on categories.id=offres_emploi.id_categorie
              Where offres_emploi.id=?
              GROUP BY offres_emploi.id";
              $stmt=$conn->prepare($sql);
              $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_OBJ);
      }
      static function readAction($table,$id){
        $conn = Connexion::connexion();
        $sql="SELECT * FROM $table WHERE id= ?";
        $stmt= $conn->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_OBJ);
      }

      static function updateAction($table,$id,$data){
        $conn = Connexion::connexion();
        $columns=implode(' = ?, ',array_keys($data)) . ' = ?';
        $sql="UPDATE $table SET  $columns  WHERE id = ?";
        $stmt= $conn->prepare($sql);
        $stmt->execute(array_merge(array_values($data), [$id]));
      }


      static function deleteAction($tabel,$id){
        $sql="DELETE FROM $tabel WHERE id = ?";
        $stmt = Connexion :: $conn->prepare($sql);
        $stmt->execute([$id]);
      }


      

}

