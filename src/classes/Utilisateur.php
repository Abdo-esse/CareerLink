<?php
namespace App\classes;
require __DIR__ . '/../../vendor/autoload.php'; 

use App\Classes\Role; 
use App\model\Crud;
use App\Config\Connexion;

class Utilisateur
{
    private $id;
    private $nom ;
    private $email;
    private $password ;
    private Role $role;
    private const table="users";
    private $data;
   
    

    public function __construct( $nom , $email, $password , Role $role,$id=null){
        $this->id=$id;
        $this->nom=$nom;
        $this->email=$email;
        $this->password=$password;
        $this->role=$role;
        $this->data = [
            "id" => $this->id,
            "name" => "$this->nom",
            "email" => "$this->email",
            "password" => "$this->password",
            "id_role" => $this->role->getId() 
        ];
    }

    public function getId() { return $this->id; }
    public function getNom() { return $this->nom; }
    public function getRole() { return $this->role; }
    public function getEmail() { return $this->email; }
    public function getPassword() { return $this->password; }

    public function inscription (){
//         // Crud::createAction(self::table, $this->data);
//         // header("location :../../Controllers/auth/signupCandidat.php?iyh_3lamolana");
//         $conn=Connexion :: connexion();
//         $columns= implode(',',array_keys( $this->data));
//         $values= implode(',',array_fill(0,count($this->data),'?'));
//         $sql="INSERT INTO 'users' ($columns) values ($values)";
// // Connexion::connexion();


//         $stmt = $conn ->prepare($sql);
//         $stmt-> execute(array_values($this->data));
//         return  $conn->lastInsertId();
// Connexion à la base de données
$conn = Connexion::connexion(); // Retourne la connexion PDO

// Préparation des colonnes et valeurs
$columns = implode(',', array_keys($this->data));
$values = implode(',', array_fill(0, count($this->data), '?'));

// Requête SQL corrigée (suppression des guillemets simples)
$sql = "INSERT INTO users ($columns) VALUES ($values)";

try {
    // Préparation de la requête
    $stmt = $conn->prepare($sql);

    // Exécution de la requête avec les valeurs
    $stmt->execute(array_values($this->data));

    // Retourner l'ID du dernier enregistrement inséré
    echo 'mzyan';
    return $conn->lastInsertId();
    
} catch (PDOException $e) {
    // Gestion des erreurs
    die("Erreur lors de l'insertion : " . $e->getMessage());
}

    }

    

}

