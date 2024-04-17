<?php
    $id = $_GET['id'];
    $action = $_GET['action'];
    
    require_once "../Config/conn.php";

    $query = "UPDATE `document` SET `IDstatus`=$action WHERE id=$id";
    
    //$sql = "SELECT * FROM users WHERE nom = '$nomAD' AND prenom ='$prenomAD' AND password ='$motdepasseAD'";
    $res = mysqli_query($conn,$query);
    if ($res) {
        header('location:../View/dashboard.php');

    }else {
        header('location:../View/dashboard.php');

    }

?>