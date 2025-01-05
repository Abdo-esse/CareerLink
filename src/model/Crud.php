<?php 
namespace App\model;
// echo "fdfdfdfdf";

require __DIR__ . '/../../vendor/autoload.php';
use App\Config\Connexion;
// Connexion::connexion();
// if (Connexion::$connexion()!==null){
//     echo 'nadi';
// }
// namespace 

class Crud 
{

      static function createAction ($table,$data){
        $conn=Connexion :: connexion();
        $columns= implode(',',array_keys($data));
        $values= implode(',',array_fill(0,count($data),'?'));
        $sql="INSERT INTO $table ($columns) values ($values)";
// Connexion::connexion();


        $stmt = $conn ->prepare($sql);
        $stmt-> execute(array_values($data));
        return  $conn->lastInsertId();
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

// // Connexion::connexion();
// // if (Connexion::$conn!==null){
// //     echo 'nadi';
// // }

// // <?php  
// // namespace App\model;



// // require __DIR__ . '/../../vendor/autoload.php';
// // use App\Config\Connexion;

// // class Crud 
// // {
// //     // Fonction pour créer une action (ajouter une ligne dans la base de données)
// //     static function createAction($table, $data) {
// //       // Appeler la connexion à la base de données pour être sûr qu'elle est établie
// //       // Connexion::connexion();  

// //       // Vérifier si la connexion est bien établie
// //       if (Connexion::$conn === null) {
// //           die("Erreur de connexion à la base de données.");
// //       }

// //       // Préparer les colonnes et les valeurs pour l'insertion
// //       $columns = implode(',', array_keys($data));
// //       $values = implode(',', array_fill(0, count($data), '?'));
// //       $sql = "INSERT INTO $table ($columns) VALUES ($values)";

// //       try {
// //           // Préparer la requête et l'exécuter
// //           $stmt = Connexion::$conn->prepare($sql);
// //           $stmt->execute(array_values($data));
          
// //           // Retourner l'ID du dernier enregistrement inséré
// //           return Connexion::$conn->lastInsertId();
// //       } catch (PDOException $e) {
// //           // En cas d'erreur, afficher un message d'erreur
// //           die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
// //       }
// //   }

// //     static function readAction($table, $id) {
// //         $sql = "SELECT * FROM $table WHERE id= ?";
// //         $stmt = Connexion::$conn->prepare($sql);
// //         $stmt->execute([$id]);

// //         return $stmt->fetch(PDO::FETCH_OBJ);
// //     }

// //     static function updateAction($table, $id, $data) {
// //         $columns = implode(' = ?, ', array_keys($data)) . ' = ?';
// //         $sql = "UPDATE $table SET  $columns  WHERE id = ?";
// //         $stmt = Connexion::$conn->prepare($sql);
// //         $stmt->execute(array_merge(array_values($data), [$id]));
// //     }

// //     static function deleteAction($table, $id) {
// //         $sql = "DELETE FROM $table WHERE id = ?";
// //         $stmt = Connexion::$conn->prepare($sql);
// //         $stmt->execute([$id]);
// //     }
// // }

// // // إذا كنت ترغب في اختبار الاتصال
// // // Connexion::connexion();
// // // if (Connexion::$conn !== null){
// // //     echo 'nadi';
// // // }
