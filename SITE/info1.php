<?php
session_start();
$IDuser  = $_SESSION['IDuser'];

if($_SERVER["REQUEST_METHOD"] == "POST"){
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$daten = $_POST['datenaissance'];
$genre = $_POST['genre'];
$situationm = $_POST['situationm'];
$tdd = $_POST['tdd'];
$telephone = $_POST['telephone'];
$profession = $_POST['profession'];
$lieunaissance = $_POST['lieunaissance'];
$province = $_POST['province'];
$commune = $_POST['commune'];
$colline = $_POST['colline'];
$residencea = $_POST['residencea'];
$nomp = $_POST['nomp'];
$prenomp = $_POST['prenomp'];
$nomm = $_POST['nomm'];
$prenomm = $_POST['prenomm'];
$dated = $_POST['dated'];
$lieud = $_POST['lieud'];

echo"";

}
$serveur = "localhost";
$utilisateur = "root";
$motdepasse_db = "";
$nom_db = "users_base";
 
$conn = mysqli_connect( $serveur, $utilisateur, $motdepasse_db, $nom_db);

if(!$conn){
    die("Erreur de la connexion à la base de données : ".mysqli_connect_error());
}
$sql = "INSERT INTO carte_identite_info_pers (
    nom, 
    prenom, 
    daten, 
    genre, 
    situationm, 
    tdd, 
    telephone, 
    profession, 
    lieunaissance, 
    province, 
    commune, 
    colline, 
    residencea, 
    nomp, 
    prenomp,
    nomm, 
    prenomm, 
    dated, 
    lieud,IDuser) VALUES (
'$nom',
'$prenom',
'$daten',
'$genre',
'$situationm',
'$tdd',
'$telephone',
'$profession',
'$lieunaissance',
'$province',
'$commune',
'$colline',
'$residencea',
'$nomp',
'$prenomp',
'$nomm',
'$prenomm',
'$dated',
'$lieud',
'$IDuser')";

if(mysqli_query($conn, $sql)){
    echo"\n Demande envoyé";
}else{
    echo"\n Erreur de la connecrion :" .mysqli_error($conn);
}

mysqli_close($conn);

?>