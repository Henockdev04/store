<?php   
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $motdepasse = $_POST['motdepasse'];
    session_start();
}    
$serveur = "localhost";
$utilisateur = "root";
$motdepasse_db = "";
$nom_db = "users_base";

$connexion = mysqli_connect($serveur, $utilisateur, $motdepasse_db, $nom_db);

if (!$connexion) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

$nomAD = mysqli_real_escape_string($connexion,$nom);
$prenomAD = mysqli_real_escape_string($connexion,$prenom);
$motdepasseAD = mysqli_real_escape_string($connexion,$motdepasse);

$sql = "SELECT * FROM users WHERE nom = '$nomAD' AND prenom ='$prenomAD' AND password ='$motdepasseAD'";
$res = mysqli_query($connexion,$sql);

if(mysqli_num_rows($res) >0){
    $SESSION['nom'] = $nomAD;
    $SESSION['prenom'] = $prenomAD;
    foreach($res as $row){
        $_SESSION['IDuser'] = $row['IDuser'];
       /* echo $_SESSION["IDuser"];
        echo $row['nom'];
        echo $row['prenom'];*/
        if($row['nom'] === $nom && $row['prenom']=== $prenom){
            echo 'okay';
            header('location:acceuil.html');
        }else{
           
            echo 'Le nom incorrect, Verifier votre nom';
        }
    }

  
  //  
}else{
    echo 'Compte nom trouvé';
}
mysqli_close($connexion);

?>