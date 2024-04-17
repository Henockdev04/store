<?php
// Récupération des données du formulaire
if($_SERVER["REQUEST_METHOD"] == "POST"){
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$motdepasse = $_POST['motdepasse'];

echo "";
}
// Validation des données (vous pouvez ajouter des validations supplémentaires selon vos besoins)

// Connexion à la base de données (exemple avec MySQL)
$serveur = "localhost";
$utilisateur = "root";
$motdepasse_db = "";
$nom_db = "users_base";

$connexion = mysqli_connect($serveur, $utilisateur, $motdepasse_db, $nom_db);

if (!$connexion) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}
$randomNumber = sprintf("%08d", rand(0, 99999999));

$sql1 = "SELECT * FROM users";
$res1 = mysqli_query($connexion,$sql1);
$bool = false;
if(mysqli_num_rows($res1)>0){
    foreach($res1 as $row){
       // echo $row['IDuser'];
        $id = intval($row['IDuser']);
        if($id === $randomNumber){
           
            echo "user id existe";
        }else{
        $bool = true;
        }
        
    }
    
};

if($bool === true){
// Insertion des données dans la base de données
$sql = "INSERT INTO users (nom, prenom, email, password,IDuser) VALUES ('$nom', '$prenom', '$email', '$motdepasse','$randomNumber')";

if (mysqli_query($connexion, $sql)) {
    ?>
    <script>
    swal({
     title: "Success",
    text: "Inscription réussi",
    icon: "success",
    });

    </script>
    <?php
   echo "\n Inscription réussie !";
    header("location:connexion.php?reussi=1");

} else {
    echo "Erreur lors de l'inscription : " . mysqli_error($connexion);
    header("location:inscription.php?reussi=2");
}
// Fermeture de la connexion à la base de données
mysqli_close($connexion);
}else{
    echo 'error occur';
}



?>