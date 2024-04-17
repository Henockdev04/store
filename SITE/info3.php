<?php   

session_start();
$IDuser = $_SESSION['IDuser'];

if($_SERVER["REQUEST_METHOD"] == "POST"){
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$daten = $_POST['datenaissance'];
$tdd = $_POST['tdd'];
$telephone = $_POST['telephone'];
$profession = $_POST['profession'];
$residencea = $_POST['residencea'];
$nationalite =$_POST['nationalite'];
$nomp = $_POST['nomp'];
$prenomp = $_POST['prenomp'];
$nomm = $_POST['nomm'];
$prenomm = $_POST['prenomm'];
$nomdm = $_POST['nomdm'];
$prenomdm = $_POST['prenomdm'];
$agem = $_POST['agem'];
$residenceam = $_POST['residenceam'];
$nationalitem =$_POST['nationalitem'];
$nompdm = $_POST['nompdm'];
$prenompdm = $_POST['prenompdm'];
$nommdm = $_POST['nommdm'];
$prenommdm = $_POST['prenommdm'];
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
$sql = "INSERT INTO extrait_mariage_info_pers (
    nom, 
    prenom, 
    daten,
    tdd, 
    telephone, 
    profession,
    residencea, 
    nationalite,
    nomp, 
    prenomp, 
    nomm, 
    prenomm, 
    nomdm,
    prenomdm,
    agem,
    residenceam,
    nationalitem,
    nompdm,
    prenompdm,
    nommdm,
    prenommdm,
    dated, 
    lieud,IDuser) VALUES (
'$nom',
'$prenom',
'$daten',
'$tdd',
'$telephone',
'$profession',
'$residencea',
'$nationalite',
'$nomp',
'$prenomp',
'$nomm',
'$prenomm',
'$nomdm',
'$prenomdm',
'$agem',
'$residenceam',
'$nationalitem',
'$nompdm',
'$prenompdm',
'$nommdm',
'$prenommdm',
'$dated',
'$lieud','$IDuser')";

if(mysqli_query($conn, $sql)){
    echo"\n Demande envoyé";
}else{
    echo"\n Erreur de la connexion :" .mysqli_error($conn);
}

mysqli_close($conn);

?>