<?php 
require_once "../Config/conn.php";

if(!$conn){
    die("Erreur de la connexion à la base de données : ".mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $motdepasse = $_POST['motdepasse'];
    session_start();

    if (!$conn) {
        die("Erreur de connexion à la base de données : " . mysqli_connect_error());
    }
    
    $nomAD = mysqli_real_escape_string($conn,$email);
    
    $motdepasseAD = mysqli_real_escape_string($conn,$motdepasse);

    $query = "SELECT admin.userID,users.nom,users.prenom,users.email,users.id, role.nomrole FROM `admin` INNER JOIN users ON users.id = admin.userID INNER JOIN role ON role.IDRole = admin.IDAdmin WHERE admin.actif=1 AND users.email='$email' AND users.password='$motdepasse' LIMIT  1";
    
    //$sql = "SELECT * FROM users WHERE nom = '$nomAD' AND prenom ='$prenomAD' AND password ='$motdepasseAD'";
    $res = mysqli_query($conn,$query);
    
    if(mysqli_num_rows($res) >0){
     
        foreach($res as $row){
            $_SESSION['userID'] = $row['userID'];
            echo $_SESSION["userID"];
            $SESSION['nom'] = $row['nom'];
            $SESSION['prenom'] = $row['prenom'];
            $SESSION['email'] = $row['email'];
            $SESSION['role'] = $row['nomrole']   ;        
            echo $row['nom'];
            echo $row['prenom'];
            header('location:../View/dashboard.php');

            /*if($row['password'] == $motdepasse && $row['email']== $email){
                echo 'okay';
                header('location:../View/dashboard.php');
            }else{
                header('location:../index.php');               
                echo 'Le nom incorrect, Verifier votre nom';
            }*/
        }
    
      
      //  
    }else{
        header('location:../index.php');  
        echo 'Compte nom trouvé';
    }
    mysqli_close($conn);
}    




?>