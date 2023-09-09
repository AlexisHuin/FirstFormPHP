<?php 
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];

    echo "Nom:" . $nom . "<br>";
    echo "Prénom:" . $prenom . "<br>";
    echo "Email:" . $email . "<br>";
}





?>