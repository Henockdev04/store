<?php       


$serveur = "localhost";
$utilisateur = "root";
$motdepasse_db = "";
$nom_db = "users_base";
 
$conn = mysqli_connect( $serveur, $utilisateur, $motdepasse_db, $nom_db);

if(!$conn){
    die("Erreur de la connexion à la base de données : ".mysqli_connect_error());
}
?>