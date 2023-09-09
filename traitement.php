<?php 
// je lie mon fichier PDO ( Connexion a la BDD)
require_once "./root/pdo.php";

// je récupére les données envoyer depuis ma page de formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];

    // je vérifie si les champs sont vides
    if (empty($nom) || empty($prenom) || empty($email)) {
        die("Tous les champs du formulaire doivent être remplis.");
    }

    //si il ne sont pas vide je lance ma requete SQL d'injection vers la table "contact" de ma BDD tabledetest
    try {
       
        $query = "INSERT INTO contact (NCONTA, PCONTA, ECONTA) VALUES (:nom, :prenom, :email)";

       
        $stmt = $db->prepare($query);

        // je lie les paramètres aux valeurs
        $stmt->bindParam(":nom", $nom);
        $stmt->bindParam(":prenom", $prenom);
        $stmt->bindParam(":email", $email);

        // J'exécute la requête SQL
        $stmt->execute();

        // j'affiche un message visuel de confirmation
        echo "Données insérées avec succès dans la base de données.";
    } 
     // j'affiche si il y eu une erreur 
    catch (PDOException $e) {
        die("Erreur lors de l'insertion des données : " . $e->getMessage());
    }
}

?>