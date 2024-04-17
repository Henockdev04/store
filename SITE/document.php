<?php       
session_start();

$IDuser= $_SESSION['IDuser'];

$serveur = "localhost"; 
$utilisateur = "root";
$motdepasse_db = "";
$nom_db = "users_base";
 
$conn = mysqli_connect( $serveur, $utilisateur, $motdepasse_db, $nom_db);

if(!$conn){
    die("Erreur de la connexion à la base de données : ".mysqli_connect_error());
}
$nom = $_GET['nom'];
$sql = "INSERT INTO document (
    nomd, IDuser
    ) VALUES (
?,?
)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si",$nom,$IDuser);
$stmt->execute();
/*if(mysqli_query($conn, $sql)){
    echo"\n Demande reussite";
}else{
    echo"\n Erreur de la connecrion :" .mysqli_error($conn);
}

mysqli_close($conn);*/

?>


















